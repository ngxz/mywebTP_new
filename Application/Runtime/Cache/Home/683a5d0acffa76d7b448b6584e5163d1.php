<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>新人注册</title>
		<link rel="stylesheet" href="/Public/bootstrap/dist/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/Public/css/common.css" />
		<link rel="stylesheet" href="/Public/css/index.css" />
		<style type="text/css">
            .container h4{background-color:#c0c0c0;padding:5px;}
            .container h4 a{font-size:18px;}
            .container table tr{height:24px;}
            .container table tr td span{margin-left:50px;}
            .container table tr td{padding-left:20px;}
            #containerLeft ul li a{font-size:16px;margin:5px;}
            #containerLeft img{height:150px;}
            .myNote p{text-indent: 2em;margin-left:20px;}
        </style>
		<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/Public/bootstrap/dist/js/bootstrap.min.js" ></script>
	</head>
	<body>
		<!--导航开始-->
		<nav class="navbar navbar-default">
	      	<div class="container">
		        <div class="navbar-header">
		          <a class="navbar-brand" href="/index.php/Home/IndexPage/indexLoad">Yuanrb.com</a>
		        </div>
		        <div id="navbar">
		          <ul class="nav navbar-nav">
		            <li><a href="/index.php/Home/IndexPage/indexLoad">首页</a></li>
		            <li><a href="/index.php/Home/MessagePage/message">资讯中心</a></li>
		            <li><a href="/index.php/Home/WebPage/webLoad">WEB前端</a></li>
		            <li><a href="/index.php/Home/PhpPage/phpLoad">PHP学习</a></li>
		            <li><a href="/index.php/Home/BoardPage/boardLoad">留言板</a></li>
		          </ul>
		          <!--搜索框-->
		          <div class="nav navbar-nav navbar-right">
		          		<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="请输入">
							</div>
							<button type="submit" class="btn btn-default">搜索</button>
						</form>
		          </div>
		        </div>
	      	</div>
    	</nav>
		<!--本页独立内容-->
		<div class="container">
			<form role="form" class="form-horizontal" action="/index.php" method="post">
   				<div class="form-group">					
   					<div class=" input-group" style="margin-left:30px;margin-right:30px">
   						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
   						<input style="height: 40px;" id="ID" name="ID" class="form-control input-sm" placeholder="账号"/>
   					</div>
   				</div>
   				<div class="form-group">
   					<div class="input-group" style="margin-left:30px;margin-right:30px">
   						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
   						<input style="height: 40px;" id="password" name="password" class="form-control input-sm" type="password" placeholder="密码"/>
   					</div>
   				</div>
   				<div class="form-group" style="margin-left:50%">
   					已有帐号？<a href="userReg.html" style="color:blue">点击登录</a>
   				</div>
   				<div class="form-group center-block" style="margin-left:30%">
   					<button class="btn btn-default" type="submit">注册</button>
   					<button class="btn btn-default" type="reset">重置</button>
   				</div>
			</form>
		</div>
		<!-- 页尾 -->
      	<div class="container" class="footer">
    		<div class="col-md-offset-2 col-md-8 col-sm-8 col-xs-8">
    			<div class="row">
	    			<dl class="col-md-3 col-sm-3 col-xs-3">
	    				<dt><a href="">加入我吧</a></dt>
	    				<dd><a href="">联系站主</a></dd>
	    				<dd><a href="">学习探讨</a></dd>
	    				<dd><a href="">支持建议</a></dd>
	    			</dl>
	    			<dl class="col-md-3 col-sm-3 col-xs-3">
	    				<dt>分享本站</dt>
	    				<dd><a href="">QQ分享</a></dd>
	    				<dd><a href="">微信分享</a></dd>
	    				<dd><a href="">复制链接</a></dd>
	    			</dl>
	    			<dl class="col-md-3 col-sm-3 col-xs-3">
	    				<dt>关于我们</dt>
	    				<dd><a href="">新浪微博</a></dd>
	    				<dd><a href="">腾讯微博</a></dd>
	    			</dl>
	    			<dl class="col-md-3 col-sm-3 col-xs-3">
	    				<dt>友情链接</dt>
	    				<dd><a href="">链接</a></dd>
	    				<dd><a href="">链接</a></dd>
	    			</dl>
    			</div>
    		</div>
    		<div class="row">
    			<span class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" style="color: darkgray;font-size: 12px;">Copyright © 2010 - 2017  南广轩主Yuanrb.com 版权所有 | 消费者维权热线：4006067733 经营证照</span>
    		</div>
      	</div>
	</body>
</html>