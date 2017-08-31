<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
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
			<div class="row">
				<!-- 主体左边 -->
				<div class="col-md-2 col-md-offset-1"  id="containerLeft">
					<img alt="头像" src="/Public/img/icon3.jpg">
					<ul>
						<li><a href="aboutMe.php#chapter1">基本资料</a></li>
						<li><a href="aboutMe.php#chapter2">详细信息</a></li>
						<li><a href="aboutMe.php#chapter3">个人经历</a></li>
						<li><a href="aboutMe.php#chapter4">联系方式</a></li>
						<li><a href="aboutMe.php#chapter5">自我评价</a></li>
					</ul>
				</div>
				<!-- 主体右边 -->
				<div class="col-md-8" id="containerRight">
					<h4><a name="chapter1">基本资料</a></h4>
    				<table>
    					<tr>
    						<td>姓&nbsp;&nbsp;&nbsp;名：</td>
    						<td>袁茹兵</td>
    					</tr>
    					<tr>
    						<td>性&nbsp;&nbsp;&nbsp;别：</td>
    						<td>男</td>
    					</tr>
    					<tr>
    						<td>年&nbsp;&nbsp;&nbsp;龄：</td>
    						<td>25岁</td>
    					</tr>
    					<tr>
    						<td>生&nbsp;&nbsp;&nbsp;日：</td>
    						<td>1992年12月</td>
    					</tr>
    					<tr>
    						<td>电&nbsp;&nbsp;&nbsp;话：</td>
    						<td>15800000000</td>
    					</tr>
    					<tr>
    						<td>星&nbsp;&nbsp;&nbsp;座：</td>
    						<td>射手座</td>
    					</tr>
    					<tr>
    						<td>故&nbsp;&nbsp;&nbsp;乡：</td>
    						<td>重庆市涪陵区</td>
    					</tr>
    					<tr>
    						<td>现居地：</td>
    						<td>重庆市渝中区</td>
    					</tr>
    					<tr>
    						<td>签&nbsp;&nbsp;&nbsp;名：</td>
    						<td>人想要得到什么，就必须付出同等的代价！</td>
    					</tr>
    				</table>
				</div>
			</div>
			<div class="row">
				<!-- 主体左边 -->
				<div class="col-md-2 col-md-offset-1">
				</div>
				<!-- 主体右边 -->
				<div class="col-md-8">
					<h4><a name="chapter2">详细信息</a></h4>
    				<table>
    					<tr>
    						<td>网&nbsp;&nbsp;&nbsp;名：</td>
    						<td>Alone_Walk</td>
    					</tr>
    					<tr>
    						<td>Q&nbsp;&nbsp;&nbsp;Q：</td>
    						<td>1433210198</td>
    					</tr>
    					<tr>
    						<td>婚&nbsp;&nbsp;&nbsp;姻：</td>
    						<td>单身</td>
    					</tr>
    					<tr>
    						<td>学&nbsp;&nbsp;&nbsp;历：</td>
    						<td>大专</td>
    					</tr>
    					<tr>
    						<td>工&nbsp;&nbsp;&nbsp;作：</td>
    						<td>计算机软件</td>
    					</tr>
    					<tr>
    						<td>性&nbsp;&nbsp;&nbsp;格：</td>
    						<td>真诚友善</td>
    					</tr>
    					<tr>
    						<td>爱&nbsp;&nbsp;&nbsp;好：</td>
    						<td>读书、数码产品、卡牌游戏</td>
    					</tr>
    					<tr>
    						<td>崇敬的人：</td>
    						<td>周鸿祎、雷军</td>
    					</tr>
    					<tr>
    						<td>梦&nbsp;&nbsp;&nbsp;想：</td>
    						<td>成为海贼王</td>
    					</tr>
    					<tr>
    						<td>座右铭：</td>
    						<td>有志者，事竟成，破釜沉舟，百二秦关终属楚；苦心人，天不负，卧薪尝胆，三千越甲可吞吴。</td>
    					</tr>
    				</table>
				</div>
			</div>
			<div class="row">
				<!-- 主体左边 -->
				<div class="col-md-2 col-md-offset-1">
				</div>
				<!-- 主体右边 -->
				<div class="col-md-8">
					<h4><a name="chapter3">个人经历</a></h4>
    				<table>
    					<tr>
    						<td>工&nbsp;&nbsp;&nbsp;作：</td>
    						<td>重庆。。。。。。<span>2016-</span></td>
    					</tr>
    					<tr>
    						<td>培训经历：</td>
    						<td>重庆朗沃教育<span>2016</span></td>
    					</tr>
    					<tr>
    						<td>第一份工作：</td>
    						<td>重庆长安福特汽车有限公司<span>2015-2016</span></td>
    					</tr>
    					<tr>
    						<td>大&nbsp;&nbsp;&nbsp;学：</td>
    						<td>重庆工业职业技术学院<span>2012-2015</span></td>
    					</tr>
    					<tr>
    						<td>高&nbsp;&nbsp;&nbsp;中：</td>
    						<td>重庆市涪陵高级中学校<span>2009-2012</span></td>
    					</tr>
    				</table>
				</div>
			</div>
			<div class="row">
				<!-- 主体左边 -->
				<div class="col-md-2 col-md-offset-1">
				</div>
				<!-- 主体右边 -->
				<div class="col-md-8">
					<h4><a name="chapter4">联系方式</a></h4>
    				<table>
    					<tr>
    						<td>电&nbsp;&nbsp;&nbsp;话：</td>
    						<td>15800000000</td>
    					</tr>
    					<tr>
    						<td>Q&nbsp;&nbsp;&nbsp;Q：</td>
    						<td>1433210198</td>
    					</tr>
    					<tr>
    						<td>邮&nbsp;&nbsp;&nbsp;箱：</td>
    						<td>NGXZ92@163.COM</td>
    					</tr>
    					<tr>
    						<td>微&nbsp;&nbsp;&nbsp;信：</td>
    						<td>ngxz-yrb</td>
    					</tr>
    					<tr>
    						<td>网&nbsp;&nbsp;&nbsp;址：</td>
    						<td><a href="http://www.yuanrb.com" style="color:blue">www.yuanrb.com</a></td>
    					</tr>
    				</table>
				</div>
			</div>
			<div class="row myNote">
				<!-- 主体左边 -->
				<div class="col-md-2 col-md-offset-1">
				</div>
				<!-- 主体右边 -->
				<div class="col-md-8">
					<h4><a name="chapter5">自我评价</a></h4>
    				<div>
						<p>想法很多，却不知从何说起。不多不少的二十多年下来，感觉自己成长最快的还是2012至今，自从12年进入大学，恰逢计算机软件和移动设备，4G网络的蓬勃发展，我是迷上了数码产品和计算机。
						常常想到一个人就如同计算机，能够接受不同的软件，能够进行系统的升级，不断的提升自己，人生也如一款软件，bug的难免的，只有在实际使用的时候才会发现，但是只要不停的修复，就会比他人更进一步。
						做人方面，一个人首先应该真诚待人，人方能真诚待我。但是在这花花社会，害人之心不可有，防人之心也不无，常常做到反省自己，调整心态，才能走的更远。还有学习方面，亲情友情方面，就下回再讲吧！
						</p>
    				</div>
				</div>
			</div>
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