$(function(){
	// intro 효과 작업
	$("#wrap").css({"height":"100vh","overflow":"hidden"});
	$("#intro").animate({display:"block"},4500,function(){
		$(this).css("display","none");
		$("#wrap").css({"height":"100%","overflow":"none"});
	});
	// 포트폴리오 화살표 전환 효과
	$(".arSct p:eq(0)").click(function(){
			$(".wList").animate({"marginLeft":"+=680px"}, 500, "linear", function(){
				$(this).prepend($(this).find("li:last"));
				$(this).css("marginLeft","0");
			});
		});
	$(".arSct p:eq(1)").click(function(){
		$(".wList").animate({"marginLeft":"-=680px"}, 500, "linear", function(){
			$(this).append($(this).find("li:first"));
			$(this).css("marginLeft","0");
		});
	});
	// 스크롤 기능
	$(window).scroll(function(){
		// 현재 스크롤 위치값 확인하기
		var nowScroll=$(document).scrollTop();
		if(nowScroll>=0 && nowScroll<1200){
			$("#gnb ul li").removeClass("menuSct");
			$("#gnb ul li:eq(0)").addClass("menuSct");
		}
		else if(nowScroll>=1200 && nowScroll<2000){
			$("#gnb ul li").removeClass("menuSct");
			$("#gnb ul li:eq(1)").addClass("menuSct");
		}
		else if(nowScroll>=2000 && nowScroll<2713){
			$("#gnb ul li").removeClass("menuSct");
			$("#gnb ul li:eq(2)").addClass("menuSct");
		}
		else{
			$("#gnb ul li").removeClass("menuSct");
			$("#gnb ul li:eq(3)").addClass("menuSct");
		}	
	});	
	$("#gnb ul li").bind("click focus" ,function(){
		var na=$(this).find("a").attr("title");	
		var area=0;
		if(na=="home"){
			area=0;
		}
		else if(na=="About me"){
			area=1200;
		}
		else if(na=="Skills"){
			area=2000;
		}
		else{
			area=2713;
		}
		$("body, html").animate({scrollTop:area},200);
	});
});