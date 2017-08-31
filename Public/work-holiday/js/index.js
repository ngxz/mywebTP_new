//banner轮播
$(function(){
	var i = 0;
	setInterval(function(){
		var arr1 = ["img/banner1.jpg","img/banner2.jpg","img/banner3.jpg","img/banner4.jpg"];
		if(i==arr1.length-1){
			i = 0;
		}else{
			i += 1;
		}
		$("#imgs").attr("src",arr1[i]);
		$("#icon img").attr("src","img/iml_03.png");
		$("#icon img").eq(i).attr("src","img/iml_05.png");
	},3000);
	//点击切换
	$("#icon img").click(function(){
		$("#icon img").attr("src","img/iml_03.png");
		$(this).attr("src","img/iml_05.png");
		var j = $(this).index();
		var arr2 = ["img/banner1.jpg","img/banner2.jpg","img/banner3.jpg","img/banner4.jpg"];
		$("#imgs").attr("src",arr2[j]);
	});
	//热门单品左边导航
	$("#hotCtrol dl dd").hover(function(){
		$("#hotCtrol dl dd").css("background-color","#eeeeee");
		$(this).css("background-color","#ccc");
		var i = $(this).index();
		$("#hotBox ul").css("display","none");
		$("#hotBox ul").eq(i).css("display","block");
	},function(){
		//$("#hotCtrol dl dd").css("background-color","#eeeeee");
	});
	//banner下方公告移入切换
	$("#notes .notesTitle ul li").hover(function(){
		$("#notes .notesTitle ul li").css("background-color","#eeeeee");
		$(this).css("background-color","#ccc");
		var i = $(this).index();
		$("#notes .notesContent ul").css("display","none");
		$("#notes .notesContent ul").eq(i).css("display","block");
	},function(){
		
	});
})
//失去焦点函数
			function inblur(obj,reg){
				 //边框
					$(obj).parent().removeClass("has-success has-error");
					//图标
					$(obj).parent().find("span").removeClass("glyphicon-remove glyphicon-remove");
					if(reg.test(obj.value)){
						//边框
						$(obj).parent().addClass("has-success");
						//图标
						$(obj).parent().find("span").addClass("glyphicon-ok").css("color","green").show();
						//文字
						$(obj).tooltip("hide");
						return true;
					}else{
						//图标
						$(obj).parent().find("span").addClass("glyphicon-remove").css("color","red").show();
						//字
						$(obj).tooltip("show");
						//边框
						$(obj).parent().addClass("has-error");
						return false;
					}
			}
			function check(){
				var names = document.getElementById("names");
				var passkey = document.getElementById("passkey");
				var r1 = inblur(names,/^[\u4e00-\u9fa5]{2,8}$/);
				var r2 = inblur(passkey,/^[a-zA-Z0-9_]{6,12}$/);
				if(r1&&r2){
					alert("成功！");
					return true;
				}else{
					alert("请检查输入的信息！");
					return false;
				}
			}
