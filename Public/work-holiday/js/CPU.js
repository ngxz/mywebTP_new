$(function(){
	//点击加入购物车
	$(".join").click(function(){
		$("#pop").show();
		//商品名字
		var nam = $(this).parent().find("P").text();
		//商品价格
		var pri = $(this).parent().find("i").text();
		var pric = parseFloat(pri);
		$("#name span").text(nam);
		$("#price span").text(pri);
		$("#count input").val(1);
		var cou = $("#count input").val();
		//总价
		$("#total span").text((pric*cou).toFixed(2)+"元");	
	});
	//点击加减数量
	var i = 1;
	$("#count .left").click(function(){
		if(i==1){
			i=1
		}else{
			i--;
		}
		$("#count input").val(i);
		var pric = parseFloat($("#price span").text());
		//加减后总价
		$("#total span").text((pric*i).toFixed(2)+"元");
	});
	$("#count .right").click(function(){
		i++;
		$("#count input").val(i);
		var pric = parseFloat($("#price span").text());
		//加减后总价
		$("#total span").text((pric*i).toFixed(2)+"元");
	});
	//点击关闭弹出的div
	$("#delbtn img").click(function(){
		$("#pop").hide();
	});
	//弹出的div点击加入商品到购物车
	$("#put input").click(function(){
		var names = $(this).parent().parent().find("#name span").text();
		var prices = $(this).parent().parent().find("#price span").text();
		var counts = $(this).parent().parent().find("#count input").val();
		var totals = $(this).parent().parent().find("#total span").text();
		var lists = $("#conShop ul").html();
		$("#conShop ul").html(lists+"<li>"+
		"<p>"+"商品名称："+names+"</p>"+"<span>"+"单价："+prices+"元"+"</span>"+"<i>"+"数量："+counts+"</i>"+"总价："+"<i id='totals1'>"+
		totals+"</i>"+"<img id='imges' src='img/del24.png'>"+"</li>");
		
	});
	//点击筛选
	$("#arringe ul li").eq(1).click(function(){
		$("#CPUList ul li").hide();
		$("#CPUList ul .I3").show();
	});
	$("#arringe ul li").eq(2).click(function(){
		$("#CPUList ul li").hide();
		$("#CPUList ul .I5").show();
	});
	$("#arringe ul li").eq(3).click(function(){
		$("#CPUList ul li").hide();
		$("#CPUList ul .I7").show();
	});
	$("#arringe ul li").eq(4).click(function(){
		$("#CPUList ul li").show();
	});
	//购物车
	//点击打开
	$("#shopCar").click(function(){
		$("#shopBox").show();
	});
	//点击关闭
	$("#delShop").click(function(){
		$("#shopBox").hide();
	});
		//点击删除单列
//	$("#conShop ul").on("click",$("#imges"),function(){
//		var a = $("#imges").index(this);
//		alert($(this).length)
//		$("#conShop ul li").eq(a).hide();
//	});
	//计算总价
	$("#con").on("click",function(){
		//总价
		var alls = 0;
		$("#conShop ul li").each(function(){
			//之和
			alls += parseFloat($(this).find("#totals1").text());
			return alls;
      });
		$("#all").text(alls);
	});
})
