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
		$("#total span").text((pric*cou).toFixed(2)+" 元");	
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
		$("#total span").text((pric*i).toFixed(2)+" 元");
	});
	$("#count .right").click(function(){
		i++;
		$("#count input").val(i);
		var pric = parseFloat($("#price span").text());
		//加减后总价
		$("#total span").text((pric*i).toFixed(2)+" 元");
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
		$("#conShop ul").html(lists+"<li>"+"<input type='checkbox' name='items'>"+"<p>"+"商品名称："+names+"</p>"+"<span>"+"单价："+prices+"</span>"+"<i>"+"数量："+counts+"</i>"+"总价："+"<i id='totals1'>"+totals+"</i>"+"<img id='imges' src='img/del24.png'>"+"</li>");
		/*$("#conShop ul")[0].innerHTML += "<li>"+"<input type='checkbox' name='items'>"+"<p>"+"商品名称："+names+"</p>"+"<span>"+"单价："+prices+"</span>"+"<i>"+"数量："+counts+"</i>"+"总价："+totals+"<img id='imges' src='images/del24.png'>"+"</li>";*/
	});
	//点击筛选
	$("#arringe ul li").eq(1).click(function(){
		$("#GPUList ul li").hide();
		$("#GPUList ul .JJ").show();
	});
	$("#arringe ul li").eq(2).click(function(){
		$("#GPUList ul li").hide();
		$("#GPUList ul .WX").show();
	});
	$("#arringe ul li").eq(3).click(function(){
		$("#GPUList ul li").hide();
		$("#GPUList ul .ST").show();
	});
	$("#arringe ul li").eq(4).click(function(){
		$("#GPUList ul li").show();
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
})
