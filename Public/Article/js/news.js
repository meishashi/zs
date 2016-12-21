$(function(){
	$(".nav span").eq(0).addClass('active');
	$(".new .tab0").eq(0).siblings().hide();
})
$(".header .hd-m").click(function(){
	$(this).find("span").addClass("active");
	window.location.reload();
	// setTimeout(	$(docunment).ready(function(){
	// $(".header .hd-mspan").removeClass("active");
	// }),3000)
})
$(".new .tab0").eq(0).show();
$(".new .tab0").eq(0).siblings().hide();
$(".nav span").click(function(){
	$(this).siblings().removeClass("active");
	$(this).addClass("active");
	$(".new .tab0").eq($(this).index()).siblings().hide();
	$(".new .tab0").eq($(this).index()).show();
})