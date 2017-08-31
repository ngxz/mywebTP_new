<?php if (!defined('THINK_PATH')) exit(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>文章管理</title>
		<link rel="icon" href="/Public/img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="/Public/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="/Public/css/bootstrap-datetimepicker.css">
		<link rel="stylesheet" type="text/css" href="/Public/kind/themes/default/default.css">
		<style type="text/css">
			#topbtn span{margin-right:5px;}
            .search{height:33px;margin-left:10px;padding:0;}
			#searchForm input{width:50%;}
			.table tr th{text-align:center;}
			.ke-container.ke-container-default{
			  width:450px!important;
			  height:150px!important;
			}
		</style>
		<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/Public/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/Public/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="/Public/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
		<script type="text/javascript" src="/Public/kind/kindeditor-min.js"></script>
		<script type="text/javascript" src="/Public/kind/lang/zh_CN.js"></script>
		<script type="text/javascript">
		//判断传入的值选择增加或者修改
		function addedit(type){
			if(type == 1){
				$("#uid").val(<?php echo ($page["auther_id"]); ?>);
				$("#ctr").val("1");
				$("#content").val("");
				$("#time").val("");
				$("#author").val("");
				$("#title").val("");
				$("#summary").val("");
				$("#img_url").val("");
				$("#channel_id").val("");
				$("#addandedit").modal("toggle");
			}else{
				var num = $("input[name=num]:checked");
				if(num.length != 1){
					alert("请选择一项进行操作！");
					return;
				}
				$("#ctr").val("0");
				$("#newsId").val(num.val());
				$("#uid").val(<?php echo ($page["auther_id"]); ?>);
				//回填
				$.post("/Admin/UserMenu/searchArticleOne",{
					"no":num.val(),
					"uid":<?php echo ($page["auther_id"]); ?>,
					"channel_id":1
				},function(data){
					$("#content").val(data[0]['content']);
					$("#title").val(data[0]['title']);
					$("#author").val(data[0]['author']);
					$("#summary").val(data[0]['summary']);
					$("#img_url").val(data[0]['img_url']);
					$("#time").val(data[0]['time']);
					var i = data[0]['channel_id'];
					$("#channel_id option").eq(i).attr("selected","selected");
				},"json");
				$("#addandedit").modal("toggle");	
			}
		}
		
		//type值为0，下一页，为-1，上一页，为正到指定页
		function turnPage(pageNo,type){
			var pageNo = parseInt(pageNo);
			if(type == 0){
				pageNo += 1;
				if(pageNo >= parseInt('<?php echo ($page["total"]); ?>'/10)+1){
					alert('已经是最后一页了！');
					return;
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
			location.href = "/index.php/Admin/UserMenu/searchArticle/pageNo/"+pageNo;
		}
		//删除新闻
 		function hide(){
 			var num = $("input[name=num]:checked");
			if(num.length != 1){
				alert("请选择一项进行操作！");
				return;
			}
			if(confirm('确认删除吗？')){
				$.post("/index.php/Admin/UserMenu/deleteArticle",{
					"no":num.val(),
					"channel_id":1
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
			   format:'yyyy-mm-dd hh:mm:ss',
			        weekStart: 1,
			        todayBtn:  1,
					autoclose: 1,
					todayHighlight: 1,
					startView: 2,
					forceParse: 0,
			        showMeridian: 1
			    });
			
		});
		//kind插件
		KindEditor.ready(function(K) {  
	        //通过id找到textarea  
	        K.create('#content', {  
	            items:['source', '|','fullscreen', 'undo', 'redo',  'copy', 'paste',  
                'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',  
                'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',  
                'superscript', '|', 'selectall', '-',  
                'title', 'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold',  
                'italic', 'underline', 'strikethrough',  '|', 'image',  
                'advtable'],  
	  
	            afterCreate : function() {  
	             this.sync();  
	            },  
	            afterBlur:function(){  
	                this.sync();  
	            }  
	        });  
	    });  
		//重置按钮事件 
		function clearBtn(){
			$("#stitle").val("");
			$("#stime").val("");
		}
		//点击上传
		function btnclick(){
			$("#pic").click();
		}
		//文件名
		function filenamechange(){
			$("#img_url").val($("#pic").val());
		}
		</script>
	</head>
	<body>
		<div class="container" style="width: 100%;">
			<div id="topbtn" class="btn-group" role="group" style="width:98%;margin:10px 10px 0 10px;">
    		  <button type="button" class="btn btn-default" onclick="addedit(1);"><span class="glyphicon glyphicon-plus"></span>新增</button>
    		  <button type="button" class="btn btn-default" onclick="addedit(0);"><span class="glyphicon glyphicon-edit"></span>修改</button>
    		  <button type="button" class="btn btn-default" onclick="hide();"><span class="glyphicon glyphicon-trash"></span>删除</button>
    		  <button type="button" class="btn btn-default" onclick="outPut();"><span class="glyphicon glyphicon-file"></span>导出Excel</button>
    		  <!-- 条件搜索 -->
	   		  <form id="searchForm" action="/index.php/Admin/UserMenu/userArticle" method="post">
	   		  		<div class="input-group">
	   		  			<input type="hidden" name="channel_id" id="channel_id" value="<?php echo ($page["channel_id"]); ?>"/>
	   		  			<input type="hidden" name="auther_id" id="auther_id" value="<?php echo ($page["auther_id"]); ?>"/>
		   		  		<input type="text" class="form-control" id="stitle" name="stitle" value="<?php echo ($page["scontent"]); ?>" placeholder="标题关键字">
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
					<th><input type="checkbox" name="nums"/></th><th>所属频道</th><th>文章标题</th><th>文章作者</th><th>文章摘要</th><th>文章内容</th><th>图片地址</th><th>发布时间</th>
	
				</tr>
				<?php if(is_array($page["rows"])): $i = 0; $__LIST__ = $page["rows"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><tr>
						<td><input type="checkbox" name="num" value="<?php echo ($rows["id"]); ?>"/></td>
						<td><?php echo ($rows["channel_id"]); ?></td>
						<td><?php echo ($rows["title"]); ?></td>
						<td><?php echo ($rows["author"]); ?></td>
						<td><?php echo ($rows["summary"]); ?></td>
						<td><?php echo ($rows["content"]); ?></td>
						<td><?php echo ($rows["img_url"]); ?></td>
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
		        <form action="/Admin/UserMenu/addArticle" method="post" class="text-center" enctype="multipart/form-data">
		        	<input type="hidden" name="ctr" id="ctr"/>
		        	<input type="hidden" name="newsId" id="newsId"/>
		        	<input type="hidden" name="uid" id="uid"/>
		        	<div class="form-group form-inline">
		        		<div class="input-group ">
							<div class="input-group-addon">所属频道</div>
							<select name="channel_id" id="channel_id" class="form-control" style="width:170px">
								<option value="-1">选择频道</option>
								<option value="1">资讯中心</option>
								<option value="2">WEB前端</option>
								<option value="3">PHP学习</option>
								<option value="4">留言板</option>
								<option value="5">图片</option>
							</select>
						</div>
		        	</div>
		        	<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">文章标题</div>
							<input id="title" name="title" type="text" class="form-control" placeholder="标题必填" />
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">文章摘要</div>
							<input id="summary" name="summary" type="text" class="form-control"/>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">发布时间</div>
							<input id="time" name="time" type="text" class="form-control input-append date" placeholder="日期必填" readonly/>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">文章作者</div>
							<input id="author" name="author" type="text" class="form-control" value="<?php echo ($_SESSION['u']['uname']); ?>" />
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">图片地址</div>
							
							<input type="file" name="pic" id="pic" style="display:none;" onchange="filenamechange()"/>
							<input style="width:45%;"  class="form-control" type="text" name="img_url" id="img_url" placeholder="请选择文件" readonly>
							<input type="button" class="btn btn-primary" onclick="btnclick()" value="上传文件"/>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">文章内容</div>
							<textarea id="content" name="content" type="text" style="width: 100px;height:100px;" class="form-control"/></textarea>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">取消</span></button>
			        <input type="submit" class="btn btn-primary" value="确认">
			      </div>
		        </form>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div>	
	</body>
</html>