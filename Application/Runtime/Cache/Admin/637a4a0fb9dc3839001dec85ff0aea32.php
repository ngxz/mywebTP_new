<?php if (!defined('THINK_PATH')) exit(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>个人中心</title>
		<link rel="icon" href="/Public/img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="/Public/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="/Public/css/bootstrap-datetimepicker.css">
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
		<script type="text/javascript">
		//修改
		function edits(){
				$("#ctr").val("0");
				$("#uid").val(<?php echo ($mes["uid"]); ?>);
				//回填
				$.post("/Admin/UserMenu/userMessageAjax",{
					"uid":<?php echo ($mes["uid"]); ?>
				},function(data){
					$("#uname").val(data['uname']);
					$("#tname").val(data['tname']);
					$("#email").val(data['email']);
					$("#img_url").val(data['icon']);
				},"json");
				$("#edit").modal("toggle");
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
    		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>新增</button>
    		  <button type="button" class="btn btn-default" onclick="edits();"><span class="glyphicon glyphicon-edit"></span>修改</button>
    		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span>删除</button>
	   		</div>
			<table class="table table-striped table-bordered table-condensed text-center table-hover" style="width:98%;margin:10px 10px 0 10px;">
				<tr>
					<th>我的头像</th><th>我的帐号</th><th>我的昵称</th><th>我的真名</th><th>我的邮箱</th>
				</tr>
					<tr>
						<td><img src="/Public<?php echo ($mes["icon"]); ?>"/></td>
						<td><?php echo ($mes["uid"]); ?></td>
						<td><?php echo ($mes["uname"]); ?></td>
						<td><?php echo ($mes["tname"]); ?></td>
						<td><?php echo ($mes["email"]); ?></td>
					</tr>
			</table>
		</div>
		<!-- 模态框 -->
		<div class="modal fade" tabindex="-1" role="dialog" id="edit">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">更改资料</h4>
		      </div>
		      <div class="modal-body">
		        <form action="/Admin/UserMenu/addUserMessage" method="post" class="text-center" enctype="multipart/form-data">
		        	<input type="hidden" name="ctr" id="ctr"/>
		        	<input type="hidden" name="uid" id="uid"/>
		        	<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">我的昵称</div>
							<input id="uname" name="uname" type="text" class="form-control"/>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">我的真名</div>
							<input id="tname" name="tname" type="text" class="form-control"/>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">我的邮箱</div>
							<input id="email" name="email" type="text" class="form-control"/>
							<span class="glyphicon form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group form-inline">
						<div class="input-group ">
							<div class="input-group-addon">我的头像</div>
							<input type="file" name="pic" id="pic" style="display:none;" onchange="filenamechange()"/>
							<input style="width:45%;"  class="form-control" type="text" name="img_url" id="img_url" placeholder="请选择文件" readonly>
							<input type="button" class="btn btn-primary" onclick="btnclick()" value="上传文件"/>
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