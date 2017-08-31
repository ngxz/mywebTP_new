$(function(){
	//点击加入商品到购物车
	$("#put input").click(function(){
		var names = $(this).parent().parent().find("#name span").text();
		var prices = $(this).parent().parent().find("#price span").text();
		var counts = $(this).parent().parent().find("#count input").val();
		var totals = $(this).parent().parent().find("#total span").text();
		var lists = $("#conShop ul").html();
		$("#conShop ul").html(lists+"<li>"+"<input type='checkbox' name='items'>"+"<p>"+"商品名称："+names+"</p>"+"<span>"+"单价："+prices+"</span>"+"<i>"+"数量："+counts+"</i>"+"总价："+"<i id='totals1'>"+totals+"</i>"+"<img id='imges' src='images/del24.png'>"+"</li>");
	});
		//点击删除单列
	$("#imges").live("click",function(){
		$(this).parent().hide();
	});
	//计算总价
	$("#countall").live("click",function(){
		//总价
		var alls = 0;
		$("#conShop ul li input").each(function() {
			//判断是否选中
            if($(this).attr("checked")){
				//勾选的之和
				alls += parseFloat($(this).parent().find("#totals1").text());
			}
        });
		alert("您应该支付："+alls+"元");
	});

})
