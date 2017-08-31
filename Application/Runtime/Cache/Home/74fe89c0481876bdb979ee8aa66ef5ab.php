<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>WEB前端-袁茹兵个人网站</title>
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
			.contentLeft ul{overflow: hidden;}
			.contentLeft ul li{width: 100%;overflow: hidden;margin-bottom: 5px;}
			.contentLeft ul li img{float: left;width:200px;height:150px;}
			.contentLeft ul li .contentBox{float: left;margin-left: 20px;}
			.contentBox span{color:gray;}
		</style>
		<script type="text/javascript">
			$(function(){
				$(".nav>li").eq(2).addClass("active");
			})
			//type值为0，下一页，为-1，上一页，为正到指定页
			function turnPage(pageNo,type){
				var pageNo = parseInt(pageNo);
				if(type == 0){
					pageNo += 1;
					if(pageNo > parseInt('<?php echo ($page["total"]); ?>'/10)+1){
						alert('已经是最后一页了！');
						pageNo = parseInt('<?php echo ($page["total"]); ?>'/10)+1;
						return;
					}
				}else if(type == -1){
					pageNo -= 1;
					if(pageNo == 0){
						alert('已经是第一页了！');
						pageNo = 1;
						return;
					}
				}else{
					pageNo = type;
				}
				location.href = "/index.php?c=webPage&a=webLoad&pageNo ="+pageNo+"&pageNo="+pageNo;
			}
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
				<div class="col-md-10">
					<h2>文章列表</h2>
					<p><span><a href="#">按发布时间排序</a></span></p>
				</div>
				<div class="col-md-2 text-center">
					<h2>文章分类</h2>
				</div>
			</div>
			<div class="row">
				<!--内容左-->
				<div class="col-md-10 contentLeft">
					<ul>
						<?php if(is_array($data["rows"])): $i = 0; $__LIST__ = $data["rows"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rows): $mod = ($i % 2 );++$i;?><li>
								<a href="/ArticleContent/article_content/id/<?php echo ($rows["id"]); ?>.html">
									<img src="/Public<?php echo ($rows["img_url"]); ?>" onerror="this.src='/Public/img/error.png'"/>
									<div class="contentBox">
										<h4>主题：<?php echo ($rows["title"]); ?></h4>
										<span>发布时间：<?php echo ($rows["time"]); ?></span>
										<p>摘要：<?php echo ($rows["content"]); ?></p>
										<p><a href="/ArticleContent/article_content/id/<?php echo ($rows["id"]); ?>.html" class="btn btn-default">详情</a></p>
									</div>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<!-- 分页 -->
					<nav aria-label="Page navigation" class="text-center">
					  <ul class="pagination">
					  	<li><a href="javascript:void(0);">第<?php echo ($data["pageNo"]); ?>页</a></li>
					    <li id="pageLeft">
					      <a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',-1);" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',1);">1</a></li>
					    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',2);">2</a></li>
					    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',3);">3</a></li>
					    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',4);">4</a></li>
					    <li><a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',5);">5</a></li>
					    <li>
					      <a href="javascript:turnPage('<?php echo ($data["pageNo"]); ?>',0);" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					    <li><a href="javascript:void(0);">共<?php echo ($data["total"]); ?>条数据</a></li>
					  </ul>
					</nav>
				</div>
				<!--内容右-->
				<div class="col-md-2">
					
				</div>
			</div>
		</div>
		<!-- footer -->
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