<?php if (!defined('THINK_PATH')) exit(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>新闻管理</title>
		<link rel="stylesheet" href=http://localhost:8080/freeBicycle/Public/bootstrap/css/bootstrap.min.css>
		<link rel="stylesheet" href=http://localhost:8080/freeBicycle/Public/bootstrap/css/bootstrap-datetimepicker.min.css>
		<style type="text/css">
			#topbtn span{margin-right:5px;}
            .search{height:33px;margin-left:10px;padding:0;}
			#searchForm input{width:50%;}
			.table tr th{text-align:center;}
		</style>
		<script type="text/javascript" src=http://localhost:8080/freeBicycle/Public/bootstrap/js/jquery-1.9.1.min.js></script>
		<script type="text/javascript" src=http://localhost:8080/freeBicycle/Public/bootstrap/js/bootstrap.min.js></script>
		<script type="text/javascript" src=http://localhost:8080/freeBicycle/Public/bootstrap/js/bootstrap-datetimepicker.min.js></script>
		<script type="text/javascript" src=http://localhost:8080/freeBicycle/Public/bootstrap/js/locales/bootstrap-datetimepicker.zh-CN.js></script>
		<script type="text/javascript">
		//判断传入的值选择增加或者修改
		function addedit(type){
			if(type == 1){
				$("#ctr").val("1");
				$("#content").val("");
				$("#time").val("");
				$("#addandedit").modal("toggle");
			}else{
				var num = $("input[name=num]:checked");
				if(num.length != 1){
					alert("请选择一项进行操作！");
					return;
				}
				$("#ctr").val("0");
				$("#newsId").val(num.val());
				//回填
				$.post("/mywebTP/index.php/Home/Admin/newsSearch",{
					"no":num.val()
				},function(data){
					$("#content").val(data[0]['content']);
					$("#time").val(data[0]['time']);
				},"json");
				$("#addandedit").modal("toggle");	
			}
		}
		
		//type值为0，下一页，为-1，上一页，为正到指定页
		function turnPage(pageNo,type){
			var pageNo = parseInt(pageNo);
			if(type == 0){
				pageNo += 1;
				if(pageNo > parseInt('<?php echo ($page["total"]); ?>'/10)+1){
					alert('已经是最后一页了！');
					pageNo = parseInt('<?php echo ($page["total"]); ?>'/10)+1;
				}
			}else if(type == -1){
				pageNo -= 1;
				if(pageNo == 0){
					alert('已经是第一页了！');
					pageNo = 1;
				}
			}else{
				pageNo = type;
			}
			location.href = "/mywebTP/index.php/Home/Admin/news/pageNo/"+pageNo;
		}
		//删除新闻
 		function hide(){
 			var num = $("input[name=num]:checked");
			if(num.length != 1){
				alert("请选择一项进行操作！");
				return;
			}
			if(confirm('确认报废该车吗？')){
				$.post("/mywebTP/index.php/Home/Admin/newsDelete",{
					"no":num.val()	
				},function(data){
						
				},"json");
			}else{
				alert('操作已经取消！');
				return;
			}
 		}
		//
		$(function(){
			$("#time").datetimepicker({
				   format:'yyyy-mm-dd',
				        weekStart: 1,
				        todayBtn:  1,
						autoclose: 1,
						todayHighlight: 1,
						startView: 2,
						forceParse: 0,
				        showMeridian: 1
				    });
		});
		//重置按钮事件 
		function clearBtn(){
			$("#suser").val(""); 
			$("#sno").val("");
			$("#smodel").val("");
			$("#sstate").val("");
		}
		</script>
	</head>
	<body>
		<div class="container">
			<div id="topbtn" class="btn-group" role="group" style="width:98%;margin:10px 10px 0 10px;">
    		  <button type="button" class="btn btn-default" onclick="addedit(1);"><span class="glyphicon glyphicon-plus"></span>新增</button>
    		  <button type="button" class="btn btn-default" onclick="addedit(0);"><span class="glyphicon glyphicon-edit"></span>修改</button>
    		  <button type="button" class="btn btn-default" onclick="hide();"><span class="glyphicon glyphicon-trash"></span>删除</button>
    		  <button type="button" class="btn btn-default" onclick="outPut();"><span class="glyphicon glyphicon-file"></span>导出Excel</button>
    		  <!-- 条件搜索 -->
	   		  <form id="searchForm" action="/mywebTP/index.php/Home/Admin/news" method="post">
	   		  		<div class="input-group">
		   		  		<input type="text" class="form-control" id="scontent" name="scontent" value="<?php echo ($page["scontent"]); ?>" placeholder="新闻内容">
				      	<input type="text" class="form-control" id="stime" name="stime" value="<?php echo ($page["stime"]); ?>" placeholder="发布时间">
				      	<span class="input-group-btn">
				        	<button class="btn btn-default" type="submit">搜索</button>
				        	<button class="btn btn-default" id="resetBtn" onclick="clearBtn();">清除</button>
				      	</span>
			    	</div>
	   		  </form>
	   		</div>
			<table class="table table-striped table-bordered table-condensed text-center table-hover" style="width:98%;margin:10px 10px 0 10px;">
				<tr>
					<th><input type="checkbox" name="nums"/></th><th>新闻内容</th><th>发布时间</th>
	
				</tr>
				<?php if(is_array($page["rows"])): $i = 0; $__LIST__ = $page["rows"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><tr>
						<td><input type="checkbox" name="num" value="<?php echo ($rows["id"]); ?>"/></td>
						<td><?php echo ($rows["content"]); ?></td>
						<td><?php echo ($rows["time"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<!-- 翻页按钮 -->
			<nav aria-label="Page navigation" class="text-center">
			  <ul class="pagination">
			  	<li><a href="javascript:void(0);">第<?php echo ($page["pageNo"]); ?>页</a></li>
			    <li>
			      <a href="javascript:turnPage('<?php echo ($page["pageNo"]); ?>',-1);" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="javascript:turnPage('<?php echo ($page["pageNo"]); ?>',1);">1</a></li>
			    <li><a href="javascript:turnPage('<?php echo ($page["pageNo"]); ?>',2);">2</a></li>
			    <li><a href="javascript:turnPage('<?php echo ($page["pageNo"]); ?>',3);">3</a></li>
			    <li><a href="javascript:turnPage('<?php echo ($page["pageNo"]); ?>',4);">4</a></li>
			    <li><a href="javascript:turnPage('<?php echo ($page["pageNo"]); ?>',5);">5</a></li>
			    <li>
			      <a href="javascript:turnPage('<?php echo ($page["pageNo"]); ?>',0);" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			    <li><a href="javascript:void(0);">共<?php echo ($page["total"]); ?>条数据</a></li>
			  </ul>
			</nav>
		</div>
		<!-- 模态框 -->
		<div class="modal fade" tabindex="-1" role="dialog" id="addandedit">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">更改状态</h4>
		      </div>
		      <div class="modal-body">
		        <form action="/mywebTP/index.php/Home/Admin/newsAdd" method="post" class="text-center">
		        	<input type="hidden" name="ctr" id="ctr"/>
		        	<input type="hidden" name="newsId" id="newsId"/>
		        	<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">新闻内容</div>
							<input id="content" name="content" type="text" class="form-control"/>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">发布时间</div>
							<input id="time" name="time" type="text" class="form-control input-append date" readonly/>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="modal-footer">
			        <button type="button" class="btn btn-default">取消</button>
			        <input type="submit" class="btn btn-primary" value="确认">
			      </div>
		        </form>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div>	
	</body>
</html>