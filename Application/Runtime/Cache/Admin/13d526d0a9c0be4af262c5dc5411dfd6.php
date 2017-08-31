<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>个人中心</title>
		<link type="text/css" rel="stylesheet" href="/Public/easyui/themes/bootstrap/easyui.css">
		<link type="text/css" rel="stylesheet" href="/Public/easyui/themes/icon.css">
		<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/Public/easyui/jquery.easyui.min.js"></script>
		<script type="text/javascript" src="/Public/easyui/locale/easyui-lang-zh_CN.js"></script>
		<style type="text/css">
			ul,li{list-style:none;}
		</style>
		<script type="text/javascript">
			function addTabs(title, url){
				var b = $("#tabs").tabs("exists", title);
				var myaccount = '<?php echo ($_SESSION['u']['uid']); ?>';
				var root = "";
				if(b){
					$("#tabs").tabs("select", title);
					$('#tabs').tabs('update', {
						tab: $("#tabs").tabs("getTab", title),
						options:{}
					});
				}else{
					$('#tabs').tabs('add',{
						title: title,
						selected: true,
						closable: true,
						content:'<iframe src="'+root+"/"+url+"/"+myaccount+'" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>'
					});
				}
			}
		</script>
	</head>
	<body class="easyui-layout">   
        <div data-options="region:'north',split:false,collapsible:false" style="height:30px;line-height:30px;">
        	<span>欢迎你，<?php echo ($_SESSION['u']['uname']); ?>!</span>
        	
        	<a href="/Admin/User/logout">退出</a>
			<span>当前登录ip是：<?php echo (session('ip')); ?></span>
			<span>当前登录地区是：<?php echo (session('local')); ?></span>
			<a href="/">返回首页</a>
        </div>   
        <div data-options="region:'west',title:'我的菜单',split:true" style="width:180px;">
        	<ul class="easyui-tree" animate='true' lines='true'> 
        		<!-- 循环遍历数据 -->
        		<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row1): $mod = ($i % 2 );++$i; if($row1["level"] == 1): ?><li>
        					<span><?php echo ($row1["name"]); ?></span>
        					<ul>
        						<?php $mid1 = $row1["id"]; ?>
        						<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row2): $mod = ($i % 2 );++$i; if($row2["level"] == 2 AND $row2["parentid"] == $mid1): ?><li>
        									<a onclick="javascript:addTabs('<?php echo ($row2["name"]); ?>','<?php echo ($row2["url"]); ?>')"><?php echo ($row2["name"]); ?></a>
        								</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        					</ul>
        				</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>	
            </ul> 
        </div>   
        <div id='tabs' data-options="region:'center'" class="easyui-tabs" style="background:#eee;">
        	<div title="温馨提示" style="background-image: url(/Public/img/body-bg.gif);">
        		<h2>欢迎来到您的个人中心！</h2>
        		<h2 style="color: #fd2222">数据无价，请谨慎操作！</h2>
        	</div>
        </div>   		
	</body>
</html>