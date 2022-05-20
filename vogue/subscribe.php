<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>subscribe</title>
  <meta charset="utf-8"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery.color.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Grenze&family=Pinyon+Script&display=swap" rel="stylesheet">
  
  <style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0;}
		li{list-style:none;}
		h4{position:absolute; left:-9999px; width:1px; height:1px; font-size:1px; line-height:0; overflow:hidden;}
		
		a:link, a:visited{text-decoration:none; color:#ccc;}
	/*############### wrap #####################################*/
		#wrap{min-width:1025px; width:100%; height:100vh; margin:0 auto;}
	/*################ header ########################*/
		#header{width:100%; height:5vh; position:absolute; z-index:5; top:100vh; display:none; transition:all 1s linear;}
		#header ul{width:100%; height:40px;}
		#header ul li{width:25%; height:100%; float:left; background-color:#fff; box-shadow:2px 2px 5px #aaa;}
		#header h2{width:100%; height:100%;}
		#header a{display:block; width:100%; height:100%; text-align:center;}
		#header img{height:70%; margin-top:5px;}
		.hlogo{display:none;}
		#header .selected{box-shadow:5px 5px 15px rgba(0,0,0,1);}

	/*############### container ##################################*/
		#container{width:100%; height:100vh; overflow:hidden; position:relative;}
		.cho{width:100%; height:100vh; position:relative; transition:all 1s linear; top:0;}

	/*################# contentV ####################################*/
		#contentV{width:100%; height:100vh; overflow:hidden;}
		#contentV .back{width:25%; height:100%; float:left; background-color:#fff;}
		#contentV div div{max-width:528px; width:100%; height:900px; background-size:cover; background-position:top center; background-repeat:no-repeat; margin:0 auto; overflow:hidden;}
		.textDesc{width:300px; height:200px; border:1px solid #fff; margin:65vh auto 0; border-bottom:none; color:#fff; font-weight:700; font-size:40px; text-align:center; position:relative;}


		.bg1{background: -webkit-linear-gradient(top,  rgba(217,49,62,0) 50%,rgba(217,49,62,0.7) 55%,rgba(217,49,62,1) 95%,rgba(217,49,62,1) 100%);}
		.bg1 div{background-image:url("img/subscribe/vogueM.png");}
		.bg2{background: -webkit-linear-gradient(top,  rgba(218,115,167,0) 50%,rgba(218,115,167,0.7) 55%,rgba(218,115,167,1) 95%,rgba(218,115,167,1) 100%);}
		.bg2 div{background-image:url("img/subscribe/allureM.png");}
		.bg3{background: -webkit-linear-gradient(top,  rgba(244,177,77,0) 50%,rgba(244,177,77,0.7) 55%,rgba(244,177,77,1) 95%,rgba(244,177,77,1) 100%);}
		.bg3 div{background-image:url("img/subscribe/gqM.png");}
		.bg4{background: -webkit-linear-gradient(top,  rgba(0,160,232,0) 50%,rgba(0,160,232,0.7) 55%,rgba(0,160,232,1) 95%,rgba(0,160,232,1) 100%);}
		.bg4 div{background-image:url("img/subscribe/wM.png");}

		#logoArea{width:100%; height:100vh; position:absolute; left:0; top:0;}
		#logoArea ul{width:100%; height:100%; overflow:hidden;}
		#logoArea li{width:25%; height:100%; float:left; position:relative; background-color:rgba(0,0,0,0.5);}
		#logoArea li p{width:100%; text-align:center; position:absolute; left:0; top:80%;}
		#logoArea li a{width:100%; height:100%; position:absolute; left:0; top:0;}
		#logoArea li  .logoZone{height:50px;}
		#logoArea .textDesc{width:220px; height:200px; padding:0 15px; border:1px solid #fff; margin:-15vh auto; border-bottom:none; color:#fff; font-weight:700; font-size:34px; text-align:center; position:relative; overflow:hidden;}
		#logoArea li img{height:100%; margin:0 auto;}
		.textArea{width:60%; height:300px; padding:0 20%; position:absolute; left:0; top:52vh; color:#fff; font-size:24px; font-weight:400; text-align:center; letter-spacing:5px; display:none; font-family:"고딕", sans-serif;}
		
		.textDesc span{display:none;}
		/*########### 테두리 돌아가는 기능 ###############*/
		.ll1 .textDesc .bor1{position:absolute; left:0; top:0; width:150%; height:3px; background:linear-gradient(to right, rgba(255,200,200,1), rgba(255,60,80,1)); animation:aniT 2s linear 0.5s infinite; transform:translatex(-100%);}
		.ll1 .textDesc .bor2{position:absolute; left:0; top:0; width:3px; height:150%; background:linear-gradient(to top, rgba(255,200,200,1), rgba(255,60,80,1)); animation:aniL 2s linear infinite;}
		.ll1 .textDesc .bor3{position:absolute; right:0; top:0; width:3px; height:150%; background:linear-gradient(to bottom, rgba(255,200,200,1), rgba(255,60,80,1)); animation:aniR 2s linear 1s infinite; transform:translatey(-100%);}

		.ll2 .textDesc .bor1{position:absolute; left:0; top:0; width:100%; height:3px; background:linear-gradient(to right, rgba(255,237,235,1), rgba(240,150,200,1)); animation:aniT 2s linear 0.5s infinite; transform:translatex(-100%);}
		.ll2 .textDesc .bor2{position:absolute; left:0; top:0; width:3px; height:100%; background:linear-gradient(to top, rgba(255,237,235,1), rgba(240,150,200,1)); animation:aniL 2s linear infinite; transform:translatey(100%);}
		.ll2 .textDesc .bor3{position:absolute; right:0; top:0; width:3px; height:100%; background:linear-gradient(to bottom, rgba(255,237,235,1), rgba(240,150,200,1)); animation:aniR 2s linear 1s infinite; transform:translatey(-100%);}

		.ll3 .textDesc .bor1{position:absolute; left:0; top:0; width:100%; height:3px; background:linear-gradient(to right, rgba(255,237,235,1), rgba(244,217,77,1)); animation:aniT 2s linear 0.5s infinite; transform:translatex(-100%);}
		.ll3 .textDesc .bor2{position:absolute; left:0; top:0; width:3px; height:100%; background:linear-gradient(to top, rgba(255,237,235,1), rgba(244,217,77,1)); animation:aniL 2s linear infinite;}
		.ll3 .textDesc .bor3{position:absolute; right:0; top:0; width:3px; height:100%; background:linear-gradient(to bottom, rgba(255,237,235,1), rgba(244,217,77,1)); animation:aniR 2s linear 1s infinite; transform:translatey(-100%);}

		.ll4 .textDesc .bor1{position:absolute; left:0; top:0; width:150%; height:3px; background:linear-gradient(to right, rgba(255,237,235,1), rgba(0,150,240,1)); animation:aniT 2s linear 0.5s infinite; transform:translatex(-100%);}
		.ll4 .textDesc .bor2{position:absolute; left:0; top:0; width:3px; height:150%; background:linear-gradient(to top, rgba(255,237,235,1), rgba(0,150,240,1)); animation:aniL 2s linear infinite;}
		.ll4 .textDesc .bor3{position:absolute; right:0; top:0; width:3px; height:150%; background:linear-gradient(to bottom, rgba(255,237,235,1), rgba(0,150,240,1)); animation:aniR 2s linear 1s infinite; transform:translatey(-100%);}

		@keyframes aniT{
		0%{transform:translatex(-100%);}
		50%{transform:translatex(100%);}
		100%{transform:translatex(100%);}
		}
		@keyframes aniL{
		0%{transform:translatey(100%);}
		50%{transform:translatey(-100%);}
		100%{transform:translatey(-100%);}
		}
		@keyframes aniR{
		0%{transform:translatey(-100%);}
		50%{transform:translatey(100%);}
		100%{transform:translatey(100%);}
		}

	/*################ contentS ##################################*/
		.contentS{width:100%; height:100%; position:absolute; left:0; top:100%; transition:top 1s linear;}
		
	/*########### mainV #################################*/
		.mainV{width:100%; height:55vh; background-color:#fff; position:relative; overflow:hidden;}
		.mainV .mz{width:100%; height:100%; position:absolute; left:0; top:-100vh;}
		.mainV .mV{background: -webkit-linear-gradient(top,  rgba(217,49,62,0) 50%,rgba(217,49,62,0.7) 75%,rgba(217,49,62,1) 90%,rgba(217,49,62,1) 100%); top:0;}
		.mainV .mA{background: -webkit-linear-gradient(top,  rgba(218,115,167,0) 50%,rgba(218,115,167,0.5) 70%,rgba(218,115,167,0.8) 80%,rgba(218,115,167,1) 100%);}
		.mainV .mG{background: -webkit-linear-gradient(top,  rgba(244,177,77,0) 50%,rgba(244,177,77,0.5) 70%,rgba(244,177,77,0.8) 80%,rgba(244,177,77,1) 100%);}
		.mainV .mW{background: -webkit-linear-gradient(top,  rgba(0,160,232,0) 50%,rgba(0,160,232,0.5) 70%,rgba(0,160,232,0.8) 80%,rgba(0,160,232,1) 100%);}




		.mainV p{width:20%; height:90%; position:absolute; left:0; top:0; transform:scale(0.9);}
		.mainV p img{width:100%; height:100%;}
		.contentS .mainV h2{font-family: 'Pinyon Script', cursive; position:absolute; left:3%; top:8vh; font-size:40px; font-style:italic;}

		.mainV .p1{width:15%; height:67.5%; left:25%; top:20%; margin-left:-7.5%; opacity:0.7;}
		.mainV .p2{left:50%; top:10%; margin-left:-10%; z-index:1; opacity:1;}
		.mainV .p3{width:15%; height:67.5%; left:75%; top:20%; margin-left:-7.5%; opacity:0.7;}
		.mainV .p4{width:10%; height:45%; left:50%; top:30%; margin-left:-5%; opacity:0.2;}
		
		.contentS .mainBtn p{width:80px; height:80px; padding:30px 0; position:absolute; opacity:0.1;}
		.contentS .mainBtn p a{display:block; width:100%;}
		.contentS .mainBtn p img{width:100%;}
		.contentS .mainBtn p:first-child{left:13%; top:32.5%; margin-top:-40px; transform:rotate3d(0,0,1,180deg);}
		.contentS .mainBtn p:last-child{right:13%; top:32.5%; margin-top:-40px;}
	/*################# 구독하기  zone #######################*/
		.btnZ{width:200px; position:absolute; left:3%; bottom:70vh;}
		.btnZ p{width:80%; height:50px; background-color:rgba(217,49,62,1); margin:1vh auto 0;}
		.btnZ p input{width:100%; height:100%; background:none; border:none; color:#fff; font-weight:700; text-align:center; line-height:50px; letter-spacing:2px; font-family:'gulim'; cursor:pointer; font-size:16px;}
	/*#################### sctV ###################################*/
		.sctV{width:100%; height:29vh; padding-top:11vh; position:relative; overflow:hidden;
		background-color:#fff;}
	/*#########  카테고리 ##################*/
		.cate{width:240px;; height:30px; text-align:center; position:absolute; left:50%; top:64vh; z-index:5; margin-left:-120px;}
		.cate h3{display:inline-block; padding:0 10px; height:100%; font-size:18px; border-radius:10px; cursor:pointer; margin:0 15px;}
		.cate h3 a{color:#000;}

	/*######## 과월호 버튼 ###################*/
		.maBtn{position:absolute; bottom:30%; width:40px; height:40px; z-index:5; bottom:32vh;}
		.maBtn img{width:100%;}
		.MBL{left:1%;}
		.MBR{right:1%; transform:rotate3d(0,0,1,180deg);}


	/*######### 과월호 ########################*/
		.maZone{width:100%; height:29vh; overflow:hidden; position:absolute; left:0; top:11vh;}
		.ma{width:2880px; height:100%; position:absolute; left:0; top:-200%;}
		.maZone .vogue{top:0;}
		.ma li{width:200px; height:90%; max-height:300px; float:left; margin:1vh 20px 0; transform:scale(0.9);}
		.ma li a{display:block; width:100%; height:100%; position:relative; overflow:hidden;}
		.ma li a span{display:block; width:100%; height:100%; overflow:hidden; margin:0 auto; text-align:center;}
		.ma li a span img{width:100%; margin:0 auto;}
		.ma li a .mDesc{height:5vh; position:absolute; left:0; bottom:0; background-color:rgba(0,0,0,0.9);}
		.ma li em{width:100%; margin:0.2vh 0; display:block; text-align:center; font-style:normal; font-weight:700; color:#fff;}
		.ma li i{text-align:center; font-style:normal; color:#f99;}

		.ma:after{content:""; display:block; clear:both;}
	
	/*########### 정기 구독 존 #########################*/
		.paZone{width:100%; height:29vh; overflow:hidden; position:absolute; left:0; top:100vh;}
		.pa{width:100%; height:100%; position:absolute; left:0; top:-200%;}
		.paZone .vogue{top:0;}
		.pa li{width:25%; float:left; overflow:hidden; text-align:center;}
		.pa a{display:block; width:100%; height:100%; color:#000;}
		.pa span{display:block; width:58%; height:100%; margin-left:2%; float:left;}
		.pa .mDesc{width:38%;}
		.pa em{display:block; width:100%; font-style:normal; margin-top:5vh; text-transform:uppercase; font-weight:700;}
		.pa i{display:inline-block; font-style:normal; margin-top:3vh;}
		.pa img{width:100%;}
		
	/*########### 장바구니 ##################################*/
		#cartArea{width:25%; height:100vh; position:absolute; right:-25%; top:100vh; transition:top 1s linear; background-color:#eee; z-index:10; outline:1px solid #000;}
		.cartInner{width:100%; height:100%; position:relative;}
		
		/*########## 장바구니 목록 영역 ###############*/
		#cart{width:96%; height:78vh; padding:1vh 2%; background-color:#eee; overflow-y:auto;}
		#cart li{width:100%; height:100px; padding-top:10px; margin-bottom:10px; background-color:#fff; position:relative; outline:1px solid gold; overflow:hidden; display:none;}
		#cart li .cartN{width:90%; height:60%; margin-right:10%;}
		#cart li .cartN span{display:inline-block; width:70%; height:100%; text-align:left; text-indent:10px; margin-right:20px; font-size:16px; text-transform:uppercase;}
		#cart li .cartN input{width:50px; height:30px; text-align:center; font-size:14px;}
		#cart li .cartP{width:85%; height:40%; text-align:right; margin-right:15%;}
		#cart li .cartP input{font-size:20px; margin-right:5px; border:none; background:none; text-align:right;}
		#cart li .cancelBtn{width:20px; height:20px; position:absolute; right:5%; top:50%; margin-top:-10px; cursor:pointer;}
		#cart li .cancelBtn img{width:100%;}
		#cart li .imgZ{width:70px; position:absolute; right:40%; bottom:0;}
		#cart li .imgZ img{width:100%;}

		/*############# 휴지통 #################*/
		#trash{position:absolute; left:-9999px;}


		/*############ 총 금액 영역 ####################*/
		.totalP{width:96%; height:18vh; padding:1vh 2%; position:absolute; bottom:0; left:0;}
		.totalP p{width:100%; height:50%; background-color:#fff;}
		.totalP p span{display:block; width:100%; height:50%;}
		.to{font-size:22px; font-weight:700; text-indent:10px;}
		
		#total{cursor:default; display:inline-block; width:50%; height:100%; text-align:right; border:none; background-color:#fff; font-size:30px; padding-right:2%;}
		#buy{cursor:pointer; display:block; width:70%; height:calc(100% - 6px); margin:0 auto; font-weight:700; font-size:26px; border:3px solid #ccc; background-color:rgba(217,49,62,1); color:#fff;}

		/*############# 장바구니 버튼 ##############################*/
		.cartIcon{position:absolute; left:-120px; bottom:34vh;}
		.cartIcon p{width:100px; height:70px; text-align:right; font-size:14px;}
		.cartIcon p a{display:block; width:100%; height:100%; color:#fff;}
		.cartIcon p i{display:block; width:50%; height:50px; overflow:hidden; float:left;}
		.cartIcon p .iconA{animation:blings 1s infinite alternate linear; opacity:1;}
		.cartIcon p img{width:100%;}
		.cartIcon p span{display:block; width:100%; height:20px; text-transform:uppercase;}


		@keyframes blings{
		0%{opacity:1;}
		100%{opacity:0.1;}
		}
	/*############ footer ############################*/
		#footer{width:100%; height:7vh; position:absolute; left:0; top:93vh; overflow:hidden; z-index:7;}
		#footer p{width:100%; height:100%; position:absolute; left:0; top:100%; text-align:center;}
		

		#footer .footer_logoV{background-color:rgba(217,49,62,1); top:0;}
		#footer .footer_logoA{background-color:rgba(218,115,167,1);}
		#footer .footer_logoG{background-color:rgba(244,177,77,1);}
		#footer .footer_logoW{background-color:rgba(0,160,232,1);}
		
		#footer a{display:inline-block; height:100%;}
		#footer a img{height:5vh; margin-top:1vh;}

	/*##### 이벤트 기능 #########*/
		.cate .selectedC{border-bottom:3px solid #f00;}
		.cate .selectedC a{color:#f55;}

  </style>
  <script>
		$(document).ready(function(){
			
		//########### 첫화면 main 기능 #####################

			/// mouseover 및 focus 기능
				$(".back, .cho ul li").bind("mouseover focusin",function(){
					$(".back, .cho ul li").css({"transition":"width 0.5s linear"});
				});
				$(".ar2").bind("mouseover focusin",function(){
					$(".ar2").css({"width":"32.5%"});
					$(".ar2").siblings().css({"width":"22.5%"});
					$("#logoArea ul li").css({"backgroundColor":"rgba(0,0,0,0.5)"});
					$(".ll2").css({"backgroundColor":"rgba(0,0,0,0)"});
					$(".ll2 .textArea").stop().fadeIn(800, "linear");
					$(".ll2 span").css("display","block");
					$(".ll2 .textDesc").css("borderColor","rgba(255,255,255,0.3)");
				});
				$(".ar3").bind("mouseover focusin",function(){
					$(".ar3").css({"width":"32.5%"});
					$(".ar3").siblings().css({"width":"22.5%"});
					$("#logoArea ul li").css({"backgroundColor":"rgba(0,0,0,0.5)"});
					$(".ll3").css({"backgroundColor":"rgba(0,0,0,0)"});
					$(".ll3 .textArea").stop().fadeIn(800, "linear");
					$(".ll3 span").css("display","block");
					$(".ll3 .textDesc").css("borderColor","rgba(255,255,255,0.3)");
				});
				$(".ar4").bind("mouseover focusin",function(){
					$(".ar4").css({"width":"32.5%"});
					$(".ar4").siblings().css({"width":"22.5%"});
					$("#logoArea ul li").css({"backgroundColor":"rgba(0,0,0,0.5)"});
					$(".ll4").css({"backgroundColor":"rgba(0,0,0,0)"});
					$(".ll4 .textArea").stop().fadeIn(800, "linear");
					$(".ll4 span").css("display","block");
					$(".ll4 .textDesc").css("borderColor","rgba(255,255,255,0.3)");
				});
				$(".ar1").bind("mouseover focusin",function(){
					$(".ar1").css({"width":"32.5%"});
					$(".ar1").siblings().css({"width":"22.5%"});
					$("#logoArea ul li").css({"backgroundColor":"rgba(0,0,0,0.5)"});
					$(".ll1").css({"backgroundColor":"rgba(0,0,0,0)"});
					$(".ll1 .textArea").stop().fadeIn(800, "linear");
					$(".ll1 span").css("display","block");
					$(".ll1 .textDesc").css("borderColor","rgba(255,255,255,0.3)");
				});
				$("#container").bind("mouseout focusout",function(){
					$(".ar1, .ar2, .ar3, .ar4").css("width","25%");
					$("#logoArea ul li").css({"backgroundColor":"rgba(0,0,0,0.5)"});
					$(".cho li .textArea").stop().fadeOut(800, "linear");
					$(".cho li span").css("display","none");
					$(".cho li .textDesc").css("borderColor","rgba(255,255,255,1)");
				});
				$("#footer .vogue").css("backgroundColor","rgba(0,0,0,1)");

			/// click 기능 #############
			var lastM=0;	
				$(".cho #logoArea ul li a").click(function(){
					$(".ar1, .ar2, .ar3, .ar4").css("width","25%");
					$("#header").css({"display":"block"});
					// 초기 세팅 /////////
					var lis = $(this).parent().find(".logoZone").find("img").attr("alt");
					var title0=0;
					
					/// 보그라면 보그 풋터 색상 바꾸기
						if (lis=="보그")
						{
							title0="vogue";			
							$(".btnZ p").css("backgroundColor","rgba(217,49,62,1)");
							lastM="vogue";
						}
						else if (lis=="얼루어")
						{
							title0="allure";		
							$(".btnZ p").css("backgroundColor","rgba(218,115,167,1)");
							lastM="allure";
						}
						else if (lis=="지큐")
						{
							title0="gq";
							$(".btnZ p").css("backgroundColor","rgba(244,177,77,1)");
							lastM="gq";
						}
						else if (lis=="더블유")
						{
							title0="w";
							$(".btnZ p").css("backgroundColor","rgba(0,160,232,1)");
							lastM="w";
						}

					/// 공통 전환 기능 ////////////
						$("#footer .vogue a img").attr("src","img/subscribe/"+title0+"_logo.png").animate({"top":"0"},500,"linear",function(){	
							$("#header ul li").removeClass("selected");
							$("#header ul ."+title0).addClass("selected");
							$("#header ul li h2 a img").removeClass();
							$("#header ul li h2 a").find("img:eq(0)").addClass("hlogo");
							$("#header ul ."+title0).find("img:eq(0)").removeClass();
							$("#header ul ."+title0).find("img:eq(1)").addClass("hlogo");
							//////////////// 타이틀 별 footer 구분효과
						
							if (lis=="보그")
							{
								$("#footer .vogue").animate({"backgroundColor":"rgba(217,49,62,1)"},1300,"linear",function(){
									$("#footer").animate({"top":"60vh"},500,"linear");								
								});
							}
							else if (lis=="얼루어")
							{
								$("#footer .vogue").animate({"backgroundColor":"rgba(218,115,167,1)"},1300,"linear",function(){
									$("#footer").animate({"top":"60vh"},500,"linear");								
								});
							}
							else if (lis=="지큐")
							{
								$("#footer .vogue").animate({"backgroundColor":"rgba(244,177,77,1)"},1300,"linear",function(){
									$("#footer").animate({"top":"60vh"},500,"linear");								
								});
							}
							else if (lis=="더블유")
							{
								$("#footer .vogue").animate({"backgroundColor":"rgba(0,160,232,1)"},1300,"linear",function(){
									$("#footer").animate({"top":"60vh"},500,"linear");								
								});
							}
							$("#header").css({"top":"0"});
							$(".cho").css({"top":"-120%"});
							$(".contentS").css({"top":"5vh"});
							$("#cartArea").css({"top":"0"});
							
							// 메인 비쥬얼 전환
							$(".mainV ."+title0).css({"top":"0","opacity":"1"});
							$(".mainV ."+title0).siblings().css({"top":"-100%","opacity":"0"});
							// 서브 비쥬얼 전환
							$(".maZone ."+title0).css({"top":"0"});
							$(".maZone ."+title0).siblings().css({"top":"-100%"});	
							$(".paZone ."+title0).css({"top":"0"});
							$(".paZone ."+title0).siblings().css({"top":"-100%"});
							$(".mainV h2").css({"opacity":"1","top":"8vh"});
						});
				});

		//########## 메인 카테고리 잡지 종류 선태 기능 #########			
			$("#header ul li").click(function(){
				//  공통 클래스 잡아주기
				var na=$(this).children("h2").children("a").attr("title");

				// 헤더 선택효과
				$("#header ul li").removeClass("selected");
				$(this).addClass("selected");
				$("#header ul li h2 a img").removeClass();
				$("#header ul li h2 a").find("img:eq(0)").addClass("hlogo");
				$(this).find("img:eq(0)").removeClass();
				$(this).find("img:eq(1)").addClass("hlogo");
				if (na=="vogue")
				{
					$("#footer .vogue a img").attr("src","img/subscribe/vogue_logo.png");
					$("#footer .vogue").css("backgroundColor","rgba(217,49,62,1)");
					$(".btnZ p").animate({"backgroundColor":"rgba(217,49,62,1)"},500,"linear");
					lastM=na;
				}
				else if (na=="allure")
				{
					$(".btnZ p").animate({"backgroundColor":"rgba(218,115,167,1)"},500,"linear");
					lastM=na;
				}
				else if (na=="gq")
				{
					$(".btnZ p").animate({"backgroundColor":"rgba(244,177,77,1)"},500,"linear");
					lastM=na;
				}
				else if (na=="w")
				{
					$(".btnZ p").animate({"backgroundColor":"rgba(0,160,232,1)"},500,"linear");
					lastM=na;
				}
				// 풋터 기능 후 컨테이너 전환 효과
				$("#footer ."+na).siblings().stop().animate({"top":"100%"},500,"linear");
				$("#footer ."+na).css({"top":"-100%"}).stop().animate({"top":"0"},500,"linear", function(){
					// 메인 비쥬얼 전환
					$(".mainV ."+na).css({"top":"100%"}).stop().animate({"top":"0","opacity":"1"},500,"linear");
					$(".mainV ."+na).siblings().stop().animate({"top":"-100%","opacity":"0"},500,"linear", function(){
						// 서브 비쥬얼 전환
						$(".maZone ."+na).css({"top":"100%"}).stop().animate({"top":"0"},500,"linear");
						$(".maZone ."+na).siblings().stop().animate({"top":"-100%"},500,"linear");	
						$(".paZone ."+na).css({"top":"100%"}).stop().animate({"top":"0"},500,"linear");
						$(".paZone ."+na).siblings().stop().animate({"top":"-100%"},500,"linear");	
						$(".contentS .mainV h2").css({"opacity":"1","top":"8vh"});						
					});
				});	
			});
			
		// ######### 과월호 버튼 기능 ############
			$(".MBL").click(function(){
				$(".ma").animate({"marginLeft":"0"},500,"linear");
			});
			$(".MBR").click(function(){
				$(".ma").animate({"marginLeft":(-2880+$("body").width())},500,"linear");
			});

		// ####### 카테고리 선택 탭 전환 기능 ###########
			$(".cate h3").click(function(){
				$(".cate h3").removeClass("selectedC");
				$(this).addClass("selectedC");	
			});
			$(".maa").click(function(){
				$(".maZone").css("top","-20vh").stop().animate({"top":"11vh"},500, "linear");
				$(".paZone").stop().animate({"top":"50vh"},500, "linear");
				$(".maBtn").stop().fadeIn(500,"linear");
			});
			$(".paa").click(function(){
				$(".paZone").css("top","-20vh").stop().animate({"top":"11vh"},500, "linear");
				$(".maZone").stop().animate({"top":"50vh"},500, "linear");
				$(".maBtn").stop().fadeOut(500,"linear");
			});
		/*######## 메인잡지 회전 기능 ############*/
			$(".contentS .mainBtn p:eq(0)").click(function(){
				$(".mainV .p1").animate({"left":"50%","top":"30%","width":"10%","height":"45%","marginLeft":"-5%","opacity":"0.2","zIndex":"0"}, 500, "linear", function(){
					$(this).removeClass();
					$(this).addClass("p4");
				});
				$(".mainV .p2").animate({"left":"25%","top":"20%","width":"15%","height":"67.5%","marginLeft":"-7.5%","opacity":"0.7","zIndex":"0"}, 500, "linear", function(){
					$(this).removeClass();
					$(this).addClass("p1");
				});
				$(".mainV .p3").animate({"left":"50%","top":"10%","width":"20%","height":"90%","marginLeft":"-10%","opacity":"1","zIndex":"1"}, 500, "linear", function(){
					$(this).removeClass();
					$(this).addClass("p2");
				});
				$(".mainV .p4").animate({"left":"75%","top":"20%","width":"15%","height":"67.5%","marginLeft":"-7.5%","opacity":"0.7","zIndex":"1"}, 500, "linear", function(){
					$(this).removeClass();
					$(this).addClass("p3");	
				});			
			});
			$(".contentS .mainBtn p:eq(1)").click(function(){
				$(".mainV .p3").animate({"left":"50%","top":"30%","width":"10%","height":"45%","marginLeft":"-5%","opacity":"0.2","zIndex":"0"}, 500, "linear", function(){
					$(this).removeClass();
					$(this).addClass("p4");
				});
				$(".mainV .p4").animate({"left":"25%","top":"20%","width":"15%","height":"67.5%","marginLeft":"-7.5%","opacity":"0.7","zIndex":"1"}, 500, "linear", function(){
					$(this).removeClass();
					$(this).addClass("p1");
				});
				$(".mainV .p1").animate({"left":"50%","top":"10%","width":"20%","height":"90%","marginLeft":"-10%","opacity":"1","zIndex":"1"}, 500, "linear", function(){
					$(this).removeClass();
					$(this).addClass("p2");
				});
				$(".mainV .p2").animate({"left":"75%","top":"20%","width":"15%","height":"67.5%","marginLeft":"-7.5%","opacity":"0.7","zIndex":"0"}, 500, "linear", function(){
					$(this).removeClass();
					$(this).addClass("p3");	
				});			
			});
		///#########  장바구니 기능  ######################
			// 장바구니 넣기 기능	
				// 초기값
				var cart=0;
				var num=0;
				
				// 과월호 클릭시 기능
				$(".ma li").one("click",function(){
					var price=$(this).find("i").text();
					price=parseInt(price);
					var name0=$(this).find("em").text();
					var srcc=$(this).find("img").attr("src");
	
					// 장바구니에 추가
					$(".li"+num).css({"display":"block"});
					$(".li"+num).find("span").text(name0);
					$("#cart"+num).attr("title",price);
					$("#pri"+num).attr({"value":price,"title":"cart"+num});
					$(".li"+num).find(".imgZ img").attr("src",srcc);
					// 벨류값 넣기
					var pra=$("#cart"+num).attr("title");
					var co=$("#cart"+num).val();
					pra=parseInt(pra);
					$("#pri"+num).val(pra*co);		
	
					// 카트열기
					$("#cartArea").animate({"right":"0"},500,"linear");
					$(".cartIcon").find("img").css("marginTop","-50px");
					$(".cartIcon").find("span").text("close");	
					// 숫자 올려서 아이디 겹치지 않게 만들기
					num=parseInt(1+num);
					// 총 금액 집어 넣기  decimal-leading-zero
					var ind=0;
					var topa=0;
					for (ind=0; ind<num; ind++)
					{
						var price0=$("#pri"+ind).val();
						price0=parseInt(price0);
						topa=topa + price0;
					}
					$("#total").val(topa);
					
					// 카트 닫기 위한 값 설정
					cart=1;
				});
				// 패키지 클릭시 기능
				$(".pa li").one("click",function(){
					var price=$(this).find("i").text();
					price=parseInt(price);
					var name0=$(this).find("em").text();
					var srcc=$(this).find("img").attr("src");
	
					// 장바구니에 추가
					$(".li"+num).css({"display":"block"});
					$(".li"+num).find("span").text(name0);
					$("#cart"+num).attr("title",price);
					$("#pri"+num).attr({"value":price,"title":"cart"+num});
					$(".li"+num).find(".imgZ img").attr("src",srcc);
					// 벨류값 넣기
					var pra=$("#cart"+num).attr("title");
					var co=$("#cart"+num).val();
					pra=parseInt(pra);
					$("#pri"+num).val(pra*co);		
	
					// 카트열기
					$("#cartArea").animate({"right":"0"},500,"linear");
					$(".cartIcon").find("img").css("marginTop","-50px");
					$(".cartIcon").find("span").text("close");	
					// 숫자 올려서 아이디 겹치지 않게 만들기
					num=1+num;
					// 총 금액 집어 넣기 
					var ind=0;
					var topa=0;
					for (ind=0; ind<num; ind++)
					{
						var price0=$("#pri"+ind).val();
						price0=parseInt(price0);
						topa=topa + price0;
					}
					$("#total").val(topa);
					
					// 카트 닫기 위한 값 설정
					cart=1;
				});	
				/*
					과월호와 패키지 클릭 시 한번 더 누를때 수량 하나씩 추가 되게 변경 예정
				*/
				//최신호 클릭시 기능
				$("#lastM").click(function(){
					if (lastM=="vogue")
					{
						var price=6500;
						var name0="VOGUE 최신호";
						var srcc=$(".mV .p2").find("img").attr("src");
					}	
					else if (lastM=="allure")
					{
						var price=6000;
						var name0="ALLURE 최신호";
						var srcc=$(".mA .p2").find("img").attr("src");
					}
					else if (lastM=="gq")
					{
						var price=6500;
						var name0="GQ 최신호";
						var srcc=$(".mG .p2").find("img").attr("src");
					}
					else if (lastM=="w")
					{
						var price=6000;
						var name0="W 최신호";
						var srcc=$(".mW .p2").find("img").attr("src");
					}
					// 장바구니에 추가
					$(".li"+num).css({"display":"block"});
					$(".li"+num).find("span").text(name0);
					$("#cart"+num).attr("title",price);
					$("#pri"+num).attr({"value":price,"title":"cart"+num});
					$(".li"+num).find(".imgZ img").attr("src",srcc);
					// 벨류값 넣기
					var pra=$("#cart"+num).attr("title");
					var co=$("#cart"+num).val();
					pra=parseInt(pra);
					$("#pri"+num).val(pra*co);		
	
					// 카트열기
					$("#cartArea").animate({"right":"0"},500,"linear");
					$(".cartIcon").find("img").css("marginTop","-50px");
					$(".cartIcon").find("span").text("close");	
					// 숫자 올려서 아이디 겹치지 않게 만들기
					num=1+num;
					// 총 금액 집어 넣기 
					var ind=0;
					var topa=0;
					for (ind=0; ind<num; ind++)
					{
						var price0=$("#pri"+ind).val();
						price0=parseInt(price0);
						topa=topa + price0;
					}
					$("#total").val(topa);
					
					// 카트 닫기 위한 값 설정
					cart=1;
				});
				// 정기구독 클릭시 기능
				$("#subscr").click(function(){
					if (lastM=="vogue")
					{
						var price=62400;;
						var name0="VOGUE 1년 정기구독";
						var srcc=$(".mV .p1").find("img").attr("src");
					}	
					else if (lastM=="allure")
					{
						var price=57600;
						var name0="ALLURE 1년 정기구독";
						var srcc=$(".mA .p1").find("img").attr("src");
					}
					else if (lastM=="gq")
					{
						var price=66300;
						var name0="GQ 1년 정기구독";
						var srcc=$(".mG .p1").find("img").attr("src");
					}
					else if (lastM=="w")
					{
						var price=57600;
						var name0="W 1년 정기구독";
						var srcc=$(".mW .p1").find("img").attr("src");
					}
					// 장바구니에 추가
					$(".li"+num).css({"display":"block"});
					$(".li"+num).find("span").text(name0);
					$("#cart"+num).attr("title",price);
					$("#pri"+num).attr({"value":price,"title":"cart"+num});
					$(".li"+num).find(".imgZ img").attr("src",srcc);
					// 벨류값 넣기
					var pra=$("#cart"+num).attr("title");
					var co=$("#cart"+num).val();
					pra=parseInt(pra);
					$("#pri"+num).val(pra*co);		
	
					// 카트열기
					$("#cartArea").animate({"right":"0"},500,"linear");
					$(".cartIcon").find("img").css("marginTop","-50px");
					$(".cartIcon").find("span").text("close");	
					// 숫자 올려서 아이디 겹치지 않게 만들기
					num=1+num;
					// 총 금액 집어 넣기 
					var ind=0;
					var topa=0;
					for (ind=0; ind<num; ind++)
					{
						var price0=$("#pri"+ind).val();
						price0=parseInt(price0);
						topa=topa + price0;
					}
					$("#total").val(topa);
					
					// 카트 닫기 위한 값 설정
					cart=1;
				});
				// 최신호, 정기구독 클릭시 계속 클릭되는거 수정 예정


				// 수량 선택시 가격변경
				$(".cartN input").click(function(){
					var co=$(this).val();
					var ta=$(this).attr("title");
					ta=parseInt(ta);
					$(this).parent().next().find("input").val(co*ta
					);
					// 총 금액 집어 넣기 
					var ind=0;
					var topa=0;
					for (ind=0; ind<num; ind++)
					{
						var price0=$("#pri"+ind).val();
						price0=parseInt(price0);
						topa=topa + price0;
					}
					$("#total").val(topa);
				});

				// 상품 삭제 기능
				$(".cancelBtn").click(function(){
					$("#cart li:eq("+(num-1)+")").after($(this).parent());
					$(this).prev().prev().children("input").val(0);
					$(this).prev().prev().prev().children("input").val(1);
					$(this).prev().prev().prev().children("input").attr("title",0);
					
					
					// 총 금액 집어 넣기 
					var ind=0;
					var topa=0;
					
					for (ind=0; ind<num; ind++)
					{
						$("#cart li:eq("+ind+")").attr("class","li"+ind);
						$("#cart li:eq("+ind+") .cartN input").attr("id","cart"+ind);
						$("#cart li:eq("+ind+") .cartP input").attr({"id":"pri"+ind,"title":"cart"+ind});
						
						var price0=$("#pri"+ind).val();
						price0=parseInt(price0);
						topa=topa + price0;

						
					}
					$(this).parent().css("display","none");
					num=num-1;
					$("#total").val(topa);
					
				});
	
		//########## 아이콘 열고 접기 ###############
			$(".cartIcon").click(function(){
				if (cart==0)
				{
					$("#cartArea").animate({"right":"0"},500,"linear");
					$(this).find("img").css("marginTop","-50px");
					$(this).find("span").text("close");	
					cart=1;
				}
				else if (cart==1)
				{
					$("#cartArea").animate({"right":"-25%"},500,"linear");
					$(this).find("img").css("marginTop","0");
					$(this).find("span").text("open");	
					cart=0;
				}
			});
		/// 구매버튼 알림창 띄우기 
			$("#buy").click(function(){
				alert("준비중입니다.");
			});
		});
  </script>
 </head>
 <body>
	<div id="wrap">
		<header id="header">
			<ul>
				<li class="hv selected vogue">
					<h2>
						<a href="#none" title="vogue">
							<img  src="img/vogue_logo.png" alt="vogue이미지"/>
							<img class="hlogo" src="img/company/vo_02.png" alt="vogue이미지"/>
						</a>
					</h2>
				</li>
				<li class="ha allure">
					<h2>
						<a href="#none" title="allure">
							<img class="hlogo" src="img/A_logo.svg" alt="allure이미지"/>
							<img src="img/company/al_05.png" alt="allure이미지"/>
						</a>
					</h2>
				</li>
				<li class="hg gq">
					<h2>
						<a href="#none" title="gq">
							<img class="hlogo" src="img/G_logo.svg" alt="gq이미지"/>
							<img src="img/company/gq_05.png" alt="gq이미지"/>
						</a>
					</h2>
				</li>
				<li class="hw w">
					<h2>
						<a href="#none" title="w">
							<img class="hlogo" src="img/W_logo.svg" alt="w이미지"/>
							<img src="img/company/w_05.png" alt="w이미지"/>
						</a>
					</h2>
				</li>
			</ul>
		</header>
		<div id="container">
			<div class="cho">
				<div id="contentV">
					<div class="bg1 ar1 back"><div></div></div>
					<div class="bg2 ar2 back"><div></div></div>
					<div class="bg3 ar3 back"><div></div></div>
					<div class="bg4 ar4 back"><div></div></div>
				</div>
				<div id="logoArea">
					<ul>
						<li class="ll1 ar1">
							<p class="logoZone"><img src="img/subscribe/vogue_logo.png" alt="보그"/></p>
							<div class="textArea">
								120여 년의 전통을 지닌 가장 권위 있는 패션 매거진
							</div>
							<p class="textDesc">
								<span class="bor1"></span>
								<span class="bor2"></span>
								<span class="bor3"></span>
								패션 매거진의 대명사
							</p>
							<a href="#none" title="보그 구독샵"></a>
						</li>
						<li class="ll2 ar2">
							<p class="logoZone"><img src="img/subscribe/allure_logo.png" alt="얼루어"/></p>
							<div class="textArea">
								피처 에디터들의 취향 등 아름답고 매력적인 라이프 스타일
							</div>
							<p class="textDesc">
								<span class="bor1"></span>
								<span class="bor2"></span>
								<span class="bor3"></span>
								당신이 필요한 모든 것
							</p>
							<a href="#none" title="알루어 구독샵"></a>
						</li>
						<li class="ll3 ar3">
							<p class="logoZone"><img src="img/subscribe/gq_logo.png" alt="지큐"/></p>
							<div class="textArea">
								“It’s good to be a man”이라는 슬로건 아래 독보적인 컨텐츠
							</div>
							<p class="textDesc">
								<span class="bor1"></span>
								<span class="bor2"></span>
								<span class="bor3"></span>
								No1. 남성 매거진
							</p>
							<a href="#none" title="지큐 구독샵"></a>
						</li>
						<li class="ll4 ar4">
							<p class="logoZone"><img src="img/subscribe/W_logo.svg" alt="더블유"/></p>
							<div class="textArea">
								감도 높은 비주얼로 차별화된 패션 매거진
							</div>
							<p class="textDesc">
								<span class="bor1"></span>
								<span class="bor2"></span>
								<span class="bor3"></span>
								컨셉추얼 트렌드 매거진
							</p>
							<a href="#none" title="더블유 구독샵"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="contentS">
				<div class="mainV">
					<h2>2020. August</h2>
					<div class="mV mz vogue">
						<p class="p1"><img src="img/vogue1.jpg" alt="메인표지 1"/></p>
						<p class="p2"><img src="img/vogue3.jpg" alt="메인표지 2"/></p>
						<p class="p3"><img src="img/vogue2.jpg" alt="메인표지 3"/></p>
						<p class="p4"><img src="img/vogue4.jpg" alt="메인표지 4"/></p>
					</div>
					<div class="mA mz allure">
						<p class="p1"><img src="img/allure2.jpg" alt="메인표지 1"/></p>
						<p class="p2"><img src="img/allure0.jpeg" alt="메인표지 2"/></p>
						<p class="p3"><img src="img/allure3.jpg" alt="메인표지 3"/></p>
						<p class="p4"><img src="img/allure1.jpg" alt="메인표지 4"/></p>
					</div>
					<div class="mG mz gq">
						<p class="p1"><img src="img/gq1.jpg" alt="메인표지 1"/></p>
						<p class="p2"><img src="img/gq0.jpg" alt="메인표지 2"/></p>
						<p class="p3"><img src="img/gq2.jpg" alt="메인표지 3"/></p>
						<p class="p4"><img src="img/gq3.jpg" alt="메인표지 4"/></p>
					</div>
					<div class="mW mz w">
						<p class="p1"><img src="img/w1.jpeg" alt="메인표지 1"/></p>
						<p class="p2"><img src="img/w3.jpg" alt="메인표지 2"/></p>
						<p class="p3"><img src="img/w2.jpg" alt="메인표지 3"/></p>
						<p class="p4"><img src="img/w0.jpg" alt="메인표지 4"/></p>
					</div>
				</div>
				<div class="btnArea">
					<div class="mainBtn">
						<p><a href="#none" title="좌측 회전"><img src="img/icon/arrowB.png" alt="좌측 화살표 이미지"/></a></p>
						<p><a href="#none" title="우측 회전"><img src="img/icon/arrowB.png" alt="우측 화살표 이미지"/></a></p>
					</div>
					<div class="cate">
						<h3 class="paa"><a href="#none" title="정기 구독">정기 구독</a></h3>
						<h3 class="maa selectedC"><a href="#none" title="과월호">과월호</a></h3>
					</div>
					<div class="btnZ">
						<p class="monthM"><input id="lastM" type="button" title="최신호" value="최신호 구입"/></p>
						<p class="subs"><input id="subscr" type="button" title="정기구독" value="1년 정기구독"/></p>
					</div>
					<div class="maBA">
						<p class="maBtn MBL"><a href="#none" title="좌측 회전"><img src="img/icon/arrowA.png" alt="좌측 화살표 이미지"/></a></p>
						<p class="maBtn MBR"><a href="#none" title="우측 회전"><img src="img/icon/arrowA.png" alt="우측 화살표 이미지"/></a></p>
					</div>
				</div>
				<section class="sctV">	
					<h4>잡기 구매</h4>
					<div class="maZone">
						<ul class="ma sV vogue">
							<li>
								<a href="#none" title="vogue Jul">
									<span><img src="img/subscribe/vogue01.jpg" alt="7월호"/></span>
									<span class="mDesc">
										<em>2020. Jul vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Jun">
									<span><img src="img/subscribe/vogue02.jpg" alt="6월호"/></span>
									<span class="mDesc">
										<em>2020. Jun vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue May">
									<span><img src="img/subscribe/vogue07.jpg" alt="5월호"/></span>
									<span class="mDesc">
										<em>2020. May vogue</em>
										<i>6500</i>원
									</span>							
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Apr">
									<span><img src="img/subscribe/vogue08.jpg" alt="4월호"/></span>
									<span class="mDesc">
										<em>2020. Apr vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Mar">
									<span><img src="img/subscribe/vogue04.jpg" alt="3월호"/></span>
									<span class="mDesc">
										<em>2020. Mar vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Feb">
									<span><img src="img/subscribe/vogue09.jpg" alt="2월호"/></span>
									<span class="mDesc">
										<em>2020. Feb vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Jan">
									<span><img src="img/subscribe/vogue05.jpg" alt="1월호"/></span>
									<span class="mDesc">
										<em>2020. Jan vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Dec">
									<span><img src="img/subscribe/vogue10.jpg" alt="12월호"/></span>
									<span class="mDesc">
										<em>2019. Dec vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Nov">
									<span><img src="img/subscribe/vogue11.jpg" alt="11월호"/></span>
									<span class="mDesc">
										<em>2019. Nov vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Oct">
									<span><img src="img/subscribe/vogue12.jpg" alt="10월호"/></span>
									<span class="mDesc">
										<em>2019. Oct vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Sep">
									<span><img src="img/subscribe/vogue13.jpg" alt="9월호"/></span>
									<span class="mDesc">
										<em>2019. Sep vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="vogue Aug">
									<span><img src="img/subscribe/vogue14.jpg" alt="8월호"/></span>
									<span class="mDesc">
										<em>2019. Agu vogue</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
						</ul>
						<ul class="ma sA allure">
							<li>
								<a href="#none" title="allure Jul">
									<span><img src="img/subscribe/allure06.jpg" alt="7월호"/></span>
									<span class="mDesc">
										<em>2020. Jul allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Jun">
									<span><img src="img/subscribe/allure00.jpg" alt="6월호"/></span>
									<span class="mDesc">
										<em>2020. Jun allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure May">
									<span><img src="img/subscribe/allure08.jpg" alt="5월호"/></span>
									<span class="mDesc">
										<em>2020. May allure</em>
										<i>6000</i>원
									</span>							
								</a>
							</li>
							<li>
								<a href="#none" title="allure Apr">
									<span><img src="img/subscribe/allure01.jpg" alt="4월호"/></span>
									<span class="mDesc">
										<em>2020. Apr allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Mar">
									<span><img src="img/subscribe/allure10.png" alt="3월호"/></span>
									<span class="mDesc">
										<em>2020. Mar allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Feb">
									<span><img src="img/subscribe/allure07.jpg" alt="2월호"/></span>
									<span class="mDesc">
										<em>2020. Feb allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Jan">
									<span><img src="img/subscribe/allure03.jpg" alt="1월호"/></span>
									<span class="mDesc">
										<em>2020. Jan allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Dec">
									<span><img src="img/subscribe/allure10.jpg" alt="12월호"/></span>
									<span class="mDesc">
										<em>2019. Dec allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Nov">
									<span><img src="img/subscribe/allure11.jpg" alt="11월호"/></span>
									<span class="mDesc">
										<em>2019. Nov allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Oct">
									<span><img src="img/subscribe/allure12.jpg" alt="10월호"/></span>
									<span class="mDesc">
										<em>2019. Oct allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Sep">
									<span><img src="img/subscribe/allure13.jpg" alt="9월호"/></span>
									<span class="mDesc">
										<em>2019. Sep allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="allure Aug">
									<span><img src="img/subscribe/allure14.jpg" alt="8월호"/></span>
									<span class="mDesc">
										<em>2019. Agu allure</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
						</ul>
						<ul class="ma sG gq">
							<li>
								<a href="#none" title="gq Jul">
									<span><img src="img/subscribe/gq04.jpg" alt="7월호"/></span>
									<span class="mDesc">
										<em>2020. Jul gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Jun">
									<span><img src="img/subscribe/gq06.jpg" alt="6월호"/></span>
									<span class="mDesc">
										<em>2020. Jun gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq May">
									<span><img src="img/subscribe/gq08.jpg" alt="5월호"/></span>
									<span class="mDesc">
										<em>2020. May gq</em>
										<i>6500</i>원
									</span>							
								</a>
							</li>
							<li>
								<a href="#none" title="gq Apr">
									<span><img src="img/subscribe/gq09.jpg" alt="4월호"/></span>
									<span class="mDesc">
										<em>2020. Apr gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Mar">
									<span><img src="img/subscribe/gq10.jpg" alt="3월호"/></span>
									<span class="mDesc">
										<em>2020. Mar gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Feb">
									<span><img src="img/subscribe/gq11.jpg" alt="2월호"/></span>
									<span class="mDesc">
										<em>2020. Feb gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Jan">
									<span><img src="img/subscribe/gq03.jpg" alt="1월호"/></span>
									<span class="mDesc">
										<em>2020. Jan gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Dec">
									<span><img src="img/subscribe/gq12.jpg" alt="12월호"/></span>
									<span class="mDesc">
										<em>2019. Dec gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Nov">
									<span><img src="img/subscribe/gq13.jpg" alt="11월호"/></span>
									<span class="mDesc">
										<em>2019. Nov gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Oct">
									<span><img src="img/subscribe/gq14.jpg" alt="10월호"/></span>
									<span class="mDesc">
										<em>2019. Oct gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Sep">
									<span><img src="img/subscribe/gq15.jpg" alt="9월호"/></span>
									<span class="mDesc">
										<em>2019. Sep gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="gq Aug">
									<span><img src="img/subscribe/gq16.jpg" alt="8월호"/></span>
									<span class="mDesc">
										<em>2019. Agu gq</em>
										<i>6500</i>원
									</span>
								</a>
							</li>
						</ul>
						<ul class="ma sW w">
							<li>
								<a href="#none" title="w Jul">
									<span><img src="img/subscribe/w14.jpg" alt="7월호"/></span>
									<span class="mDesc">
										<em>2020. Jul w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Jun">
									<span><img src="img/subscribe/w09.jpg" alt="6월호"/></span>
									<span class="mDesc">
										<em>2020. Jun w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w May">
									<span><img src="img/subscribe/w02.jpg" alt="5월호"/></span>
									<span class="mDesc">
										<em>2020. May w</em>
										<i>6000</i>원
									</span>							
								</a>
							</li>
							<li>
								<a href="#none" title="w Apr">
									<span><img src="img/subscribe/w04.jpg" alt="4월호"/></span>
									<span class="mDesc">
										<em>2020. Apr w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Mar">
									<span><img src="img/subscribe/w00.jpg" alt="3월호"/></span>
									<span class="mDesc">
										<em>2020. Mar w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Feb">
									<span><img src="img/subscribe/w15.jpg" alt="2월호"/></span>
									<span class="mDesc">
										<em>2020. Feb w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Jan">
									<span><img src="img/subscribe/w08.jpg" alt="1월호"/></span>
									<span class="mDesc">
										<em>2020. Jan w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Dec">
									<span><img src="img/subscribe/w16.jpg" alt="12월호"/></span>
									<span class="mDesc">
										<em>2019. Dec w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Nov">
									<span><img src="img/subscribe/w17.jpg" alt="11월호"/></span>
									<span class="mDesc">
										<em>2019. Nov w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Oct">
									<span><img src="img/subscribe/w18.jpg" alt="10월호"/></span>
									<span class="mDesc">
										<em>2019. Oct w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Sep">
									<span><img src="img/subscribe/w19.jpg" alt="9월호"/></span>
									<span class="mDesc">
										<em>2019. Sep w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="w Aug">
									<span><img src="img/subscribe/w20.jpg" alt="8월호"/></span>
									<span class="mDesc">
										<em>2019. Agu w</em>
										<i>6000</i>원
									</span>
								</a>
							</li>
						</ul>	
					</div>
					<div class="paZone">
						<ul class="pa pV vogue">
							<li>
								<a href="#none" title="vogue special">
									<span><img src="img/subscribe/packege0.png" alt="패키지 1이미지"/></span>
									<span class="mDesc">
										<em>vogue special</em>
										<i>62400</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="보그, 지큐 정기구독 패키지">
									<span><img src="img/subscribe/packege1.png" alt="패키지 2이미지"/></span>
									<span class="mDesc">
										<em>보그, 지큐 정기구독 패키지</em>
										<i>107640</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="보그, 더블유 정기구독 패키지">
									<span><img src="img/subscribe/packege3.png" alt="패키지 3이미지"/></span>
									<span class="mDesc">
										<em>보그, 더블유 정기구독 패키지</em>
										<i>103500</i>원
									</span>							
								</a>
							</li>
							<li>
								<a href="#none" title="보그, 얼루어 정기구독 패키지">
									<span><img src="img/subscribe/packege2.png" alt="패키지 4이미지"/></span>
									<span class="mDesc">
										<em>보그, 얼루어 정기구독 패키지</em>
										<i>103500</i>원
									</span>
								</a>
							</li>
						</ul>
						<ul class="pa pA allure">
							<li>
								<a href="#none" title="allure special">
									<span><img src="img/subscribe/packege7.png" alt="패키지 1이미지"/></span>
									<span class="mDesc">
										<em>allure special</em>
										<i>57600</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="얼루어, 지큐 정기구독 패키지">
									<span><img src="img/subscribe/packege4.png" alt="패키지 2이미지"/></span>
									<span class="mDesc">
										<em>얼루어, 지큐 정기구독 패키지</em>
										<i>103500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="얼루어, 더블유 정기구독 패키지">
									<span><img src="img/subscribe/packege6.png" alt="패키지 3이미지"/></span>
									<span class="mDesc">
										<em>얼루어, 더블유 정기구독 패키지</em>
										<i>99360</i>원
									</span>							
								</a>
							</li>
							<li>
								<a href="#none" title="얼루어, 보그 정기구독 패키지">
									<span><img src="img/subscribe/packege2.png" alt="패키지 4이미지"/></span>
									<span class="mDesc">
										<em>얼루어, 보그 정기구독 패키지</em>
										<i>103500</i>원
									</span>
								</a>
							</li>
						</ul>
						<ul class="pa pG gq">
							<li>
								<a href="#none" title="gq special">
									<span><img src="img/subscribe/packege9.png" alt="패키지 1이미지"/></span>
									<span class="mDesc">
										<em>gq special</em>
										<i>66300</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="지큐, 얼루어 정기구독 패키지">
									<span><img src="img/subscribe/packege4.png" alt="패키지 2이미지"/></span>
									<span class="mDesc">
										<em>지큐, 얼루어 정기구독 패키지</em>
										<i>103500</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="지큐, 더블유 정기구독 패키지">
									<span><img src="img/subscribe/packege5.png" alt="패키지 3이미지"/></span>
									<span class="mDesc">
										<em>지큐, 더블유 정기구독 패키지</em>
										<i>103500</i>원
									</span>							
								</a>
							</li>
							<li>
								<a href="#none" title="지큐, 보그 정기구독 패키지">
									<span><img src="img/subscribe/packege1.png" alt="패키지 4이미지"/></span>
									<span class="mDesc">
										<em>지큐, 보그 정기구독 패키지</em>
										<i>107640</i>원
									</span>
								</a>
							</li>
						</ul>
						<ul class="pa pW w">
							<li>
								<a href="#none" title="w special">
									<span><img src="img/subscribe/packege8.png" alt="패키지 1이미지"/></span>
									<span class="mDesc">
										<em>w special</em>
										<i>57600</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="더블유, 얼루어 정기구독 패키지">
									<span><img src="img/subscribe/packege6.png" alt="패키지 2이미지"/></span>
									<span class="mDesc">
										<em>더블유, 얼루어 정기구독 패키지</em>
										<i>99360</i>원
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="더블유, 지큐 정기구독 패키지">
									<span><img src="img/subscribe/packege5.png" alt="패키지 3이미지"/></span>
									<span class="mDesc">
										<em>더블유, 지큐 정기구독 패키지</em>
										<i>103500</i>원
									</span>							
								</a>
							</li>
							<li>
								<a href="#none" title="더블유, 보그 정기구독 패키지">
									<span><img src="img/subscribe/packege3.png" alt="패키지 4이미지"/></span>
									<span class="mDesc">
										<em>더블유, 보그 정기구독 패키지</em>
										<i>103500</i>원
									</span>
								</a>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<div id="cartArea">
				<div class="cartInner">
					<ul id="cart">
						<li class="li0">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart0" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri0" type="text" value=0 title="cart0" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li1">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart1" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri1" type="text" value=0 title="cart1" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li2">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart2" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri2" type="text" value=0 title="cart2" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li3">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart3" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri3" type="text" value=0 title="cart3" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li4">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart4" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri4" type="text" value=0 title="cart4" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li5">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart5" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri5" type="text" value=0 title="cart5" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li6">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart6" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri6" type="text" value=0 title="cart6" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li7">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart7" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri7" type="text" value=0 title="cart7" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li8">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart8" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri8" type="text" value=0 title="cart8" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li9">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart9" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri9" type="text" value=0 title="cart9" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li10">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart10" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri10" type="text" value=0 title="cart10" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li11">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart11" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri11" type="text" value=0 title="cart11" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li12">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart12" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri12" type="text" value=0 title="cart12" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li13">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart13" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri13" type="text" value=0 title="cart13" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li14">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart14" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri14" type="text" value=0 title="cart14" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li15">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart15" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri15" type="text" value=0 title="cart15" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li16">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart16" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri16" type="text" value=0 title="cart16" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li17">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart17" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri17" type="text" value=0 title="cart17" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li18">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart18" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri18" type="text" value=0 title="cart18" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
						<li class="li19">
							<p class="cartN">
								<span></span>X&nbsp;<input id="cart19" type="number" value=1 title="price" min="1" max="99"/>ea
							</p>
							<p class="cartP">
								<input id="pri19" type="text" value=0 title="cart19" readonly disabled/>원
							</p>
							<p class="imgZ">
								<img src="img/vogue0.jpg" alt="상품 이미지"/>
							</p>
							<p class="cancelBtn">
								<img src="img/icon/cancel.png" alt="삭제"/>
							</p>
						</li>
					</ul>
					<div class="totalP">
						<p class="to">
							총 합계 : 
							<input id="total" type="text" value=0 title="총 금액" disabled readonly/>
							원
						</p>
						<p>
							<input id="buy" type="button" value="구매하기" title="구매"/>
						</p>
					</div>
				</div>
				<div class="cartIcon">
					<p>
						<a href="#none" title="카트 열기">
							<i class="iconA"><img src="img/icon/arrowC.png" alt="화살표"/></i>
							<i><img src="img/icon/cart.png" alt="카트"/></i>
							<span>open</span>
						</a>
					</p>
				</div>
			</div>
		</div>	
		<footer id="footer">
				<p class="footer_logoV vogue">
					<a href="index.php" title="vogue"><img src="img/subscribe/vogue_logo.png" alt="풋터 로고"/></a>
				</p>
				<p class="footer_logoA allure">
					<a href="http://www.allurekorea.com/" title="allure"><img src="img/subscribe/allure_logo.png" alt="풋터 로고"/></a>
				</p>
				<p class="footer_logoG gq">
					<a href="http://www.gqkorea.co.kr/" title="gq"><img src="img/subscribe/gq_logo.png" alt="풋터 로고"/></a>
				</p>
				<p class="footer_logoW w">
					<a href="http://www.wkorea.com/" title="w"><img src="img/subscribe/w_logo.png" alt="풋터 로고"/></a>
				</p>
		</footer>
	</div>
 </body>
</html>
