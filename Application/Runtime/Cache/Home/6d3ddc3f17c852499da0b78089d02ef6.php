<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo ($row[0]["title"]); ?></title>
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
			.contentBox{text-align: center;}
			.contentBox h5{color: darkgray;overflow:hidden;text-align:center;width:330px;margin:0 auto;}
			.contentBox p{margin-bottom:20px;text-indent: 2em;text-align:left;}
			.article_img{float:right;width:380px;height:240px;margin:0 10px 20px 20px;}
			.article_img img{width:380px;height:240px;}
			/*上一条*/
			.preNext{width: 60%;}
			.preNext a:last-child{float: right;}
		</style>
		<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
    	<script type="text/javascript" id="bdshell_js"></script>
		<script type="text/javascript">
			with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];   <!-- 加载本地JS后可不用段条代码 -->
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
		<div class="container contentBox">
			<h3><?php echo ($row[0]["title"]); ?></h3>
			<h5><span style="float:left;"><?php echo ($row[0]["time"]); ?>&nbsp;分享到：	</span>
				<span class="share">
					  
						<div style="float:left;margin-top: -4px;" class="bdsharebuttonbox" data-tag="share_1">
						    <a class="bds_weixin" data-cmd="weixin"></a>
						    <a class="bds_qzone" data-cmd="qzone" href="#"></a>
						    <a class="bds_tsina" data-cmd="tsina"></a>
						    <a class="bds_sqq" data-cmd="sqq"></a>
						    <a class="bds_more" data-cmd="more"></a>
						</div>
				</span>
			</h5>
			<div class="article_img"><img src="/Public<?php echo ($row[0]["img_url"]); ?>" onerror="this.src='/Public/img/error.png'"/></div>
			<p><?php echo ($row[0]["content"]); ?></p>
		</div>
		<!-- 上一条下一条 -->
		<div class="preNext container">
			<a href="/ArticleContent/article_content/id/<?php echo ($row[0]['id']-1); ?>.html" class="btn btn-default">上一条</a>
			<a href="/ArticleContent/article_content/id/<?php echo ($row[0]['id']+1); ?>.html" class="btn btn-default">下一条</a>
		</div>
		<!--footer-->
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