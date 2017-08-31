//登录注册模态框函数
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('注册新帐号');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('帐号登录');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}
function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

$(function(){
	//nav变色
	$(window).scroll(function () {
		if ($(window).scrollTop() >= $(".jumbotron").height()) {
			$(".navbar").addClass("navbar-default");
			$(".navbar").removeClass("navbar-inverse");
		}else{
			$(".navbar").addClass("navbar-inverse");
			$(".navbar").removeClass("navbar-default");			
		}
	});
    // 首页底部轮换图移入显示文字效果
    // $(function(){
    //     $("#indexPhotos .item").hover(function(){
    //         $(this).find("span").animate({top:0},200);
    //     },function(){
    //         $(this).find("span").animate({top:-500},200);
    //     });
    // });
});
