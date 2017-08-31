<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>袁茹兵个人网站</title>
		<meta name="keywords" content="袁茹兵,南广轩主,alone_walk,个人网站" />

<link rel="icon" href="/mywebTP/Public/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/mywebTP/Public/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="/mywebTP/Public/css/common.css" />
<link rel="stylesheet" href="/mywebTP/Public/css/index.css" />
<link rel="stylesheet" href="/mywebTP/Public/css/owl.carousel.css" />
<link rel="stylesheet" href="/mywebTP/Public/css/owl.theme.css" />

<script type="text/javascript" src="/mywebTP/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/mywebTP/Public/bootstrap/dist/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="/mywebTP/Public/js/index.js"></script>
<script type="text/javascript" src="/mywebTP/Public/js/owl.carousel.min.js"></script>
		<style type="text/css">
			.banner{margin: 80px auto;text-align: center;}
			.jumbotron{height: 550px;background-image:url(/mywebTP/Public/img/3.jpg);background-repeat: no-repeat;background-position: center;}
			.jumbotron p{color: #fff;}
			.jumbotron h1{color: #fff;}
			.thumbnail{height: 500px;}
			.thumbnail img{width: 350px;height: 290px;}
			.owl-buttons{position: absolute;top: 30%;width: 100%}
			.owl-theme .owl-controls .owl-buttons div{background:none!important;/*background-color:#fff!important;*/}
			.owl-buttons .owl-prev{position: absolute;left: 10px;}
			.owl-buttons .owl-next{position: absolute;right: 10px;}
			.owl-controls{display: block!important;}
		</style>
		
		<script type="text/javascript">
    		$(function(){
    			//照片展示
    			$("#indexPhotos").owlCarousel({
				    items : 4,
				    pagination :false,
				    lazyLoad : true,
				    navigationText:["<img src='/mywebTP/Public/img/right.png'>","<img src='/mywebTP/Public/img/left.png'>"],
			      	slideSpeed : 300,
			      	paginationSpeed : 400,
				    navigation : true
				});
				//调整
				 $(".owl-controls clickable").show();
    		});
		</script>
	</head>
	<body>
		<!--导航开始-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
  	<div class="container">
        <div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
          <a class="navbar-brand" href="/mywebTP/IndexPage/indexLoad.html">Yuanrb.com</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">首页</a></li>
            <li><a href="/mywebTP/MessagePage/message.html">资讯中心</a></li>
            <li><a href="/mywebTP/WebPage/webLoad.html">WEB前端</a></li>
            <li><a href="/mywebTP/PhpPage/phpLoad.html">PHP学习</a></li>
            <li><a href="/mywebTP/BoardPage/boardLoad.html">留言板</a></li>
            <li><a href="/mywebTP/Aboutme/aboutme.html">关于我</a></li>
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
        </div>
  	</div>
</nav>
    	<!--banner-->
		<div class="jumbotron">
		  <div class="container banner">
		  	<h1>欢迎!</h1>
		  	<p>这里是袁茹兵的个人小站。这里将记录我的一点一滴成长之路！</p>
		  	<p><a class="btn btn-default btn-lg" href="/mywebTP/Aboutme/aboutme.html" role="button">关于我</a></p>
		  </div>
		</div>
      	<!--新闻-->
      	<div class="container center-block" style="margin-top: 20px;">
			<!--主体内容-->
			<div class="news">
				<div class="row">
				    <?php if(is_array($rows["news"])): $i = 0; $__LIST__ = $rows["news"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><div class="col-sm-6 col-md-4">
							<div class="thumbnail">
						      <img src="/mywebTP/Public<?php echo ($news["img_url"]); ?>" alt="..." onerror="this.src='/mywebTP/Public/img/error.png'">
						      <div class="caption">
						        <h3><?php echo ($news["title"]); ?></h3>
						        <p><?php echo ($news["time"]); ?></p>
						        <p><?php echo ($news["summary"]); ?></p>
						        <p><a href="/mywebTP/ArticleContent/article_content/id/<?php echo ($news["id"]); ?>.html" class="btn btn-default" role="button">更多</a></p>
						      </div>
						    </div>
					    </div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
      	</div>
      	<!--照片展示-->
  		<div id="indexPhotos" class="owl-carousel">
  			<?php if(is_array($rows["pics"])): $i = 0; $__LIST__ = $rows["pics"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pic): $mod = ($i % 2 );++$i;?><div class="item">
					<img src="/mywebTP/Public<?php echo ($pic["img_url"]); ?>" alt="<?php echo ($pic["summary"]); ?>">
					<div class="shd"><a href="###"></a></div>
					<div class="txt">
						<h3><a href="/mywebTP/ArticleContent/article_content/id/<?php echo ($pic["id"]); ?>.html"><?php echo ($pic["title"]); ?></a></h3>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
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
	                                  <form method="post" action="/mywebTP/index.php/Admin/User/login" accept-charset="UTF-8">
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
	                              <form method="post" data-remote="true" action="/mywebTP/index.php/Admin/User/register" accept-charset="UTF-8">
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