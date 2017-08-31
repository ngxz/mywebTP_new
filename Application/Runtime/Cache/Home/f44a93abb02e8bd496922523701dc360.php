<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>关于我</title>
		<meta name="keywords" content="袁茹兵,南广轩主,alone_walk,个人网站" />

<link rel="icon" href="/Public/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/Public/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="/Public/css/common.css" />
<link rel="stylesheet" href="/Public/css/index.css" />
<link rel="stylesheet" href="/Public/css/owl.carousel.css" />
<link rel="stylesheet" href="/Public/css/owl.theme.css" />

<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/bootstrap/dist/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="/Public/js/index.js"></script>
<script type="text/javascript" src="/Public/js/owl.carousel.min.js"></script>
		<style type="text/css">
            .container h4{background-color:#c0c0c0;padding:5px;}
            .container h4 a{font-size:18px;}
            .container table tr{height:24px;}
            .container table tr td span{margin-left:50px;}
            .container table tr td{padding-left:20px;}
            #containerLeft ul li a{font-size:16px;margin:5px;}
			#containerLeft ul li{text-align:center;margin-top:5px;}
            #containerLeft img{height:165px;}
            .myNote p{text-indent: 2em;margin-left:20px;}
        </style>
        <script type="text/javascript">
            $(function(){
                $(".nav>li").eq(5).addClass("active");
            })
        </script>
	</head>
	<body>
		<!--导航开始-->
		<nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container">
        <div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
          <a class="navbar-brand" href="/IndexPage/indexLoad.html">Yuanrb.com</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/IndexPage/indexLoad.html">首页</a></li>
            <li class=""><a href="/MessagePage/message.html">资讯中心</a></li>
            <li><a href="/WebPage/webLoad.html">WEB前端</a></li>
            <li><a href="/PhpPage/phpLoad.html">PHP学习</a></li>
            <li><a href="/BoardPage/boardLoad.html">留言板</a></li>
            <li><a href="/Aboutme/aboutme.html">关于我</a></li>
          </ul>
          <script type="text/javascript">
          	//判断是否登录
          	$(function(){
          		if(<?php echo ($_SESSION['u']['uid']); ?>){
          			$(".navbar-right").hide();
          			$(".userIcon").show();
          		}
          	})
          </script>
          <!--注册登录-->
          <div class="nav navbar-nav navbar-right">
              <div class="navbar-form navbar-left">
                <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">登录</a>    
                <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">注册</a>
              </div>
          </div>
          <!-- 用户区 -->
          <div class="nav navbar-nav navbar-right userIcon" style="display:none">
          <div class="navbar-form navbar-left">
              <div class="dropdown">
			  <div class="btn btn-inverse dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span style="color:#666"><?php echo ($_SESSION['u']['uname']); ?></span>
			    <span class="caret"></span>
			  </div>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    <li><a href="/Admin/User/logined">个人中心</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="/Admin/User/logout">退出</a></li>
			  </ul>
			</div>
            </div>  
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
						<li><a href="aboutMe.html#chapter1">基本资料</a></li>
						<li><a href="aboutMe.html#chapter2">详细信息</a></li>
						<li><a href="aboutMe.html#chapter3">个人经历</a></li>
						<li><a href="aboutMe.html#chapter4">联系方式</a></li>
						<li><a href="aboutMe.html#chapter5">自我评价</a></li>
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
    						<td>工&nbsp;&nbsp;&nbsp;作：</td>
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
						<p>
                            stronger!
						</p>
    				</div>
				</div>
			</div>
		</div>
		<!-- 页尾 -->
      	<div class="footerBox">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>友情链接</p>
				<a href="#">链接1</a>
				<a href="#">链接1</a>
				<a href="#">链接1</a>
			</div>
			<div class="col-md-6">
				<p>联系方式</p>
				<span>qq:1433210198</span>
				<span>邮箱：ngxz92@163.com</span>
			</div>
		</div>
		<p>Copyright © 2016 - 2017  南广轩主Yuanrb.com 版权所有</p>
	</div>
</div>
        <!-- form -->
		<div class="modal fade login" id="loginModal">
	      <div class="modal-dialog login animated">
	  		      <div class="modal-content">
	  		         <div class="modal-header">
	                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	                      <h4 class="modal-title">用户登录</h4>
	                  </div> 
	                  <div class="modal-body">  
	                      <div class="box">
	                           <div class="content">
	                              <div class="error"></div>
	                              <div class="form loginBox">
	                                  <form method="post" action="/index.php/Admin/User/login" accept-charset="UTF-8">
	                                  <input id="uid" class="form-control" type="text" placeholder="帐号" name="uid">
	                                  <input id="pwd" class="form-control" type="password" placeholder="密码" name="pwd">
	                                  <input class="btn btn-default btn-login" type="submit" value="登录">
	                                  </form>
	                              </div>
	                           </div>
	                      </div>
	                      <div class="box">
	                          <div class="content registerBox" style="display:none;">
	                           <div class="form">
	                              <form method="post" data-remote="true" action="/index.php/Admin/User/register" accept-charset="UTF-8">
	                              <input id="uid" class="form-control" type="text" placeholder="帐号" name="uid">
	                              <input id="pwd" class="form-control" type="password" placeholder="密码" name="pwd">
	                              <input class="btn btn-default btn-register" type="submit" value="注册">
	                              </form>
	                              </div>
	                          </div>
	                      </div>
	                      <div></div>
	                  </div>
	                  <div class="modal-footer">
	                      <div class="forgot login-footer">
	                          <span>没有帐号？ 
	                               <a href="javascript: showRegisterForm();">注册一个</a>
	                          </span>
	                      </div>
	                      <div class="forgot register-footer" style="display:none">
	                           <span>已有账号?</span>
	                           <a href="javascript: showLoginForm();">登录</a>
	                      </div>
	                  </div>        
	  		      </div>
	      </div>
	  </div>
	</body>
</html>