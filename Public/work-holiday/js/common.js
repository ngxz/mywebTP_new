$(function(){
		//返回顶部
	$(window).scroll(function(){
		$("#toTop").show();
	});
	$("#toTop img").click(function(){
		$(window).scrollTop(0);
	});	
})
