<?php
	include "00_conn.php";

	session_cache_expire(15);
	session_start();
	


?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>company</title>
  <meta charset="utf-8"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <style>
	/* ############ 초기화 #############*/
		@font-face{font-family:"roman";src:url("font/Pistilli-Roman.woff");}
		*{margin:0; padding:0;}
		li{list-style-type:none;}
		a:link, a:visited{text-decoration:none; color:#000;}
		img{border:none;}
		h3{position:absolute; width:1px; height:1px; font-size:1px; line-height:0; left:-9999px; overflow:hidden;}

	/*############ hover 선택 기능 ##################*/
	
		
		/*body 배경색 지정*/
		body{background-color:#fff;}



		/*기본 hr 설정*/
		hr{width:90%; border:1px solid #ddd; margin:50px auto;}



	/*######################## wrap ################################*/
		#wrap{min-width:1025px; width:100%; position:relative;}

	/*################### header ################################*/
		
		
	
		
		#header{width:100%; height:100px; position:absolute; left:0;top:0; transition:height 0.5s linear; z-index:2;}
		#header a:hover, #header a:focus{color:#f40;}
		#header h1{width:20%; height:80px; position:absolute; left:54%; top:20px;}
		#header h1 img{height:100%;}
		/*########## hidden Menu #########################*/

		#hiddenMenu{position:fixed; left:0; top:0; width:0; height:100vh; background-color:rgba(0,0,0,1); z-index:3; display:none;}
		
		#hiddenMenu .hiddenLogo{width:300px; height:5vh; position:absolute; left:60%; bottom:10vh; z-index:4;}
		#hiddenMenu .hiddenLogo a{display:block; width:100%; height:100%;}
		#hiddenMenu .hiddenLogo a img{width:100%;}
		
		#hiddenMenu .closeBtn{width:36px; margin-top:35px; margin-left:25px; position:relative;}
		#hiddenMenu .closeBtn a{position:absolute; left:0; top:0;}
		#hiddenMenu .closeBtn a img{width:100%;}
		#hiddenMenu .closeBtn .menu_hover{display:none;}
		#hiddenMenu .closeBtn:hover a, #hiddenMenu .closeBtn:focus a{display:block}
		.mainH{height:100%; position:absolute; left:10%; top:0;}
		.mainH ul{height:100%;}
		.mainH ul li{height:5vh; text-align:center; margin-top:10vh; font-size:30px; text-transform:uppercase; border-bottom:1px solid #fff; font-weight:700; letter-spacing:15px;}
		.mainH ul li a{color:#fff;}

		.sideH{width:30%; height:100%; position:absolute; left:60%; top:0;}
		.sideH ul{width:100%; margin-top:10vh;}
		.sideH ul li{width:50px; height:50px; float:left; position:relative; margin:0 25px;}
		.sideH ul li a{position:absolute; left:0; top:0;}
		.sideH ul li img{width:100%;}
		.sns_hover{display:none;}
		.sideH ul:after{content:""; display:block; clear:both;}
		.sideH ul li:hover .sns_hover{display:block;}
		
		.sideH dl{width:300px; text-align:center; color:#fff; margin-top:150px; text-transform:uppercase;}
		.sideH dl dt{width:100%; height:5vh; font-size:3em; margin-bottom:30px;}
		.sideH dl dd{width:100%; height:3vh; margin-bottom:20px;}
		.sideH dl dd a{width:100%; color:#fff;}

		.sideH p{float:left; width:150px; height:5vh; text-align:center; text-transform:uppercase; font-size:2em; margin-top:20vh;}
		.sideH p a{color:#fff;}
		.sideH .red a{color:#f00;}
		

		

		#header_inner{width:100%; height:100%;}
		#gnb{width:53%; height:100%; background-color:rgba(0, 0, 0, 0.5);}
		
		

		#gnb div{width:10%; height:100%; float:left;}
		#gnb div p{width:100%; height:100%; position:relative;}
		#gnb div p a{display:block; width:100%; height:100%;}
		#gnb div p img{width:36px; margin-top:35px; margin-left:25px;}
		#gnb div p .menu_hover{width:100%; position:absolute; left:0; top:0; display:none;}

		#gnb div p:hover .menu_hover{display:block;}


		#gnb ul{width:90%; height:100%; text-align:right; float:right; overflow:hidden;}
		#gnb li{display:inline; text-transform:uppercase; letter-spacing:2px; line-height:100px; padding-right:20px;}
		#gnb li a{color:#fff; font-size:14px; padding:0 10px;}
		#lnb{width:24%; height:80px; position:absolute; right:0; top:20px;}
		#lnb .sns{width:60%; border-bottom:2px solid red; padding-left:35%; padding-right:5%; height:50%;}
		#lnb .sns li{width:12%; height:100%; margin-right:10%; float:right; position:relative;}
		#lnb .sns li a{display:block; width:100%; height:100%;}
		#lnb .sns li img{width:100%;}

		

		#lnb .sns .sns_hover{position:absolute; left:0; top:0; display:none;}

		#lnb .sns li:hover .sns_hover{display:block;}


		#lnb .sideMenu{width:75%; padding-right:5%; height:50%; line-height:35px; text-transform:uppercase; font-size:13px; float:left; text-align:right;}
		#lnb .sideMenu li{display:inline; padding-right:3%;}
		#lnb .sideMenu li a{color:#fff;}
		#lnb .sideMenu li:first-child{position:relative;}
		#lnb .company{display:none; width:130px; height:100px; position:absolute; padding-top:22px; z-index:2; right:13%; top:0;}
		#lnb .company li{display:block; font-size:12px; height:30px;}
		#lnb .sideMenu li:first-child:hover .company{display:block;}
		#lnb .sideMenu .login{font-weight:700;}
		#lnb .sideMenu .login a{color:#f55;}



		#lnb .searchArea{width:10%; margin-right:10%; height:50%; float:right; position:relative;}
		#lnb .searchArea:hover form{display:block;}

		#lnb .searchArea p{width:20px; padding:0 25%; padding-top:10px;}
		#lnb .searchArea p img{width:100%;}
		
	
		#lnb .searchArea legend{display:none;}
		#lnb .searchArea form{position:absolute; right:0; top:15%; margin-right:100%; display:none;}
		#lnb .searchArea input{width:200px; height:20px; line-height:20px; border:none; text-indent:10px;}

		

	/*################ container ################################*/
		#container{width:100%; overflow:hidden;}

	/*######### container / remoteControl ######*/
		#remoteControl{width:200px; height:500px; position:fixed; left:10%; top:150px; z-index:7;}
		#remoteControl ul{width:100%; height:100%; position:relative; z-index:5;}
		#remoteControl ul li{position:absolute; width:100px; height:100px; line-height:100px; text-align:center; border:3px solid rgba(170,30,120,1); background-color:rgba(255,255,255,0.7); border-radius:52px;}
		#remoteControl ul li a{display:block; width:100%; height:100%; color:#000; font-weight:700; border-radius:50px;}
		#remoteControl ul .company_re1{right:0; top:0; background-color:rgba(0,0,0,0.8);}
		#remoteControl ul .company_re1 a{color:#fff;}
		#remoteControl ul .company_re2{left:0; top:25%;}
		#remoteControl ul .company_re3{right:0; top:50%;}
		#remoteControl ul .company_re4{left:0; bottom:0;}
		#remoteControl div{width:100%; height:0; position:absolute; left:0; top:0; z-index:2; overflow:hidden;}
		#remoteControl div p{height:5px; position:absolute; background-color:rgba(170,30,120,1);}
		
		#remoteControl div .line1{width:52px; top:112px; left:70px; transform:rotate3d(0,0,1,130deg);}
		#remoteControl div .line2{width:52px;top:240px; left:72px; transform:rotate3d(0,0,1,50deg);}
		#remoteControl div .line3{width:68px; top:373px; left:65px; transform:rotate3d(0,0,1,130deg);}
		
		

		
	
	/*########### container / aboutVogue #####*/
		#aboutVogue{width:100%;}

		/*  배경화면 고정시키고 기능 넣기  */
		#aboutVogue .us{width:100%; 
		background-image:url("img/backimg15.jpg"); background-repeat:no-repeat; background-position:center 200%; background-size:100%; background-attachment:fixed;
		overflow:hidden;}
		

		#aboutVogue .us h2{width:500px; margin:0 auto; text-align:center; text-transform:uppercase; font-weight:400; font-size:60px; letter-spacing:15px; color:#fff; margin-top:200px; font-family:roman;
		animation:pump 1s ease-out 1; transform:translatex(0);
		}

		@keyframes pump{
		0%{transform:translatex(1900px);}
		100%{transform:translatex(0);}
		}
		#aboutVogue .us div{width:100%; height:1000px; margin-top:200px; background-color:#fff; overflow:hidden;}
		#aboutVogue .us h4{width:800px; text-align:center; margin:100px auto; font-size:30px; color:#3aa;}
		#aboutVogue .us p{width:100%; text-align:center; padding:0 20px; margin:50px auto;}
		#aboutVogue .us .img{width:1000px; margin:0 auto;}
		#aboutVogue .us .img img{width:100%;}


		/* 두번째 배경화면 고정시키고 두번재 기능 넣기 */
		#aboutVogue .vg{width:100%; 
		background-image:url("img/backimg02.jpg"); background-repeat:no-repeat; background-position:center 30%; background-size:50%; background-attachment:fixed;
		overflow:hidden; background-color:#000;}
		#aboutVogue .vg h2{width:200px; margin:100px auto 0; text-align:center; text-transform:uppercase; font-size:60px; font-weight:400; letter-spacing:15px; color:#fff; font-family:roman; transform:translatex(1900px);}
		#aboutVogue .vg div{width:100%; height:850px; margin-top:100px; background-color:#fff; overflow:hidden;}
		#aboutVogue .vg h4{width:800px; text-align:center; margin:100px auto; font-size:30px; color:#a3a; font-family:roman;}
		#aboutVogue .vg .vgDesc{width:100%; text-align:center; margin:50px auto;}
		#aboutVogue .vg .member{width:1000px; height:500px; margin:0 auto;}
		#aboutVogue .vg .member .img{width:350px; height:100%; float:left;}
		#aboutVogue .vg .member .img img{width:100%;}
		#aboutVogue .vg .member ul{width:630px; margin-left:20px; float:left; border-top:2px solid #aaa; border-bottom:2px solid #aaa; padding:2px 0;}
		#aboutVogue .vg .member ul li{width:100%; border-bottom:1px solid #ccc;}
		#aboutVogue .vg .member ul li:last-child{border:none;}
		#aboutVogue .vg .member ul li b{display:inline-block; width:150px; font-size:14px;}
		#aboutVogue .vg .member ul li span{display:inline-block; font-size:14px; padding:5px 0; vertical-align:middle;}


	/*###### container / ourBrand ##########*/
		#ourBrand{width:100%;}
		#ourBrand:after, #ourBrand ol:after, #aboutVogue .vg .member:after{content:""; display:block; clear:both;}
		#ourBrand h2{text-align:center; font-size:50px; text-transform:uppercase; padding:70px 0 50px; font-family:roman; letter-spacing:10px; font-weight:400;}
		#ourBrand ul{width:100%;}
		#ourBrand ul li{width:100%; padding-bottom:150px;}
		
		#ourBrand .brandImgs{width:100%; height:450px; overflow:hidden; background-repeat:no-repeat; background-size:100%; transform:translatex(3000px); box-shadow:10px 10px 10px #333;}
		#ourBrand .brandVogue .brandImgs{background-image:url("img/company/vo_01.jpg");}
		#ourBrand .brandGq .brandImgs{background-image:url("img/company/gq_01.jpg");}
		#ourBrand .brandAllure .brandImgs{background-image:url("img/company/al_01.jpg");}
		#ourBrand .brandW .brandImgs{background-image:url("img/company/w_01.jpg");}
		#ourBrand .brandImgs .brandImg{width:13%; margin-top:100px; margin-left:100px; float:left;}
		#ourBrand .brandImgs .brandWeb{width:15%; margin-top:100px; margin-right:100px; float:right; text-align:right;}
		#ourBrand .brandImgs img{width:100%;}

		#ourBrand .brandDesc{width:100%; text-align:center;}
		#ourBrand .brandDesc h4{width:100%; font-size:30px; padding:150px 0 50px; color:#c05;}
		#ourBrand .brandDesc p{width:100%; font-size:15px; line-height:30px; margin:0 auto; padding-bottom:50px;}

		#ourBrand ol{width:100%; transform:translatey(500px);}
		#ourBrand ol li{width:33%; font-weight:700; float:left; text-align:center;}
		#ourBrand ol li .snsTitle{font-size:18px;}
		#ourBrand ol li .snsFollower{font-size:40px; padding:10px 0;}

		@keyframes yyy{
		0%{transform:translatey(500px);}
		100%{transform:translatey(0);}
		}

	/*############ jobArea ###########################*/
		
		#jobArea{width:100%; height:400px; background-image:url("img/jobBG.jpg"); text-align:center; padding:25px 0;}
		#jobArea h2{font-size:45px; text-transform:uppercase; color:#fff; padding:20px 0;}
		#jobArea p{font-size:22px; font-weight:700; color:#fff; margin-top:20px;}
		#jobArea p img{width:100px;}
		#jobArea .linkH{width:300px; height:50px; margin:0 auto; margin-top:50px;}
		#jobArea .linkH a{display:block; width:100%; height:100%; line-height:50px; font-size:14px; color:#fff; background-color:#333;}
	
		#jobArea .linkH a:hover, #jobArea .linkH a:focus{background-color:#ccc; color:#333;}
	/*######### container / companyInfo ##########*/

		#contact{width:100%; text-align:center;}
		#contact h2{padding:100px 0; text-transform:uppercase; font-size:50px; font-family:roman;}
		#map{width:600px; height:450px; background-color:gold; margin:0 auto; font-size:30px; font-weight:700; line-height:400px; margin-bottom:30px; box-shadow:0 0 20px #333;}
		#map iframe{width:100%; height:100%;}
		.comInfo{margin-bottom:100px;}

		/* 문의 tab_basic 기능 */
		.contact0{width:800px; height:70px; background-color:lime; margin:0 auto;}
		.contact0 li{width:20%; height:100%; float:left; line-height:70px; text-transform:uppercase; font-weight:700; font-size:20px;}
		.contact0 li a{display:block; width:100%; height:100%; color:#555; background-color:#ccc; outline:1px solid #fff;}
		.contact0 li .selected{background-color:#555; color:#ccc;}
		.contact0:after{content:""; display:block; clear:both;}

		.contact1{width:800px; height:700px; margin:0 auto;}
		.contact1 li{width:100%; height:100%; float:left;}
		.contact1 li div{width:100%; text-align:left;}
		.contact1 li div h4{width:100%; font-size:25px; font-weight:400; text-indent:20px; padding-top:40px;}
		.ph{width:100%; font-size:20px; text-indent:40px; padding-top:20px;}
		.pd{width:100%; font-weight:100; text-indent:50px; padding-top:10px;}

		.des{width:800px; font-size:12px; text-align:right; margin:0 auto; padding-bottom:50px;}
	/*########## footer ###########*/
		#footer{width:100%; height:300px; border-top:2px solid #ccc;}
		#footerHead{width:100%; background-color:#fff; position:relative;}
		#footerHead ul{width:100%; height:100px;}
		#footerHead li{min-width:150px; width:25%; height:100px; float:left;}
		#footerHead li div{width:100%; height:100px; position:absolute; left:0; top:0; overflow-x:hidden;}
		#footerHead li div p{display:none; width:100%; height:100px; position:absolute; left:0; top:0; background-color:red; background-repeat:no-repeat; background-size:100%; background-position:center; z-index:0;}
		
		
		#footerHead li a{display:block; width:100%; height:65px; padding-top:35px; text-align:center; position:relative; z-index:2;}
		#footerHead li a i img{height:30px;}
		#footerHead li a i{display:block;}
		#footerHead li a span{display:none; position:absolute; left:50%; top:-200px; transform:rotate3d(0,0,1,20deg);}
		#footerHead li a b{display:none; position:absolute; left:25%; top:-170px;}
		#footerHead li a span img, #footerHead li a b img{width:150px;}
	
		#footerHead .footerV p{background-image:url("img/company/vo_01.jpg");}
		#footerHead .footerA p{background-image:url("img/company/al_01.jpg");}
		#footerHead .footerG p{background-image:url("img/company/gq_01.jpg");}
		#footerHead .footerW p{background-image:url("img/company/w_01.jpg");}
		
		#footerHead li:hover div p{display:block; animation:back0 0.5s 1 linear; opacity:0.4;}
		#footerHead li a:hover b{animation:spin1 0.8s 1 linear; z-index:1; display:block;}
		#footerHead li a:hover span{animation:spin2 0.8s 1 linear; z-index:1; display:block;}
	
		@keyframes spin1{
		0%{transform:translatey(200px) rotate3d(0,0,0,0deg); opacity:0;}
		20%{opacity:0;}
		60%{transform:translatey(-100px) rotate3d(0,1,0,-180deg); opacity:0.2;}
		100%{transform:translatey(0) rotate3d(0,1,0,-360deg); opacity:1;}
		}
		@keyframes spin2{
		0%{transform:translatey(200px) rotate3d(0,1,1,0deg); opacity:0;}
		20%{opacity:0;}
		60%{transform:translatey(-100px) rotate3d(0,1,1,360deg); opacity:0.2;}
		100%{transform:translatey(0) rotate3d(0,1,1,720deg); opacity:1;}
		}

		@keyframes back0{
		0%{transform:translatex(1400px);}
		100%{transform:translatex(0);}
		}



		#footer #mainFooter{width:100%; height:200px; background-color:#000;}
		#footer .footer_logo{width:250px; height:70px; padding-top:30px; margin:0 auto;}
		#footer .footer_logo img{width:100%;}
		#footer .copy{width:100%; text-align:center; color:#777; font-weight:100; font-size:12px; padding-top:30px;}
		#footer .legal{width:100%; text-align:center; padding-top:20px;}
		#footer .legal a{color:#aaa; font-size:13px;}
	/*########################################*/


  </style>
  <script>
		$(function(){
		//############# 히든 메뉴 ###############
			$("#manu_bar").click(function(){
				$("#wrap").css({"height":"100vh","overflow":"hidden"});
				$("#hiddenMenu").css({"display":"block"});
				$("#hiddenMenu").animate({"width":"100%","height":"100vh"}, 200, "linear", function(){
					$("#container").css("display","none");
					$("#footer").css("display","none");
					$("#header_inner").css("display","none");
					$("#skipNav").css("display","none");
				});	
			});
			$("#hiddenMenu .closeBtn").click(function(){
				$("#wrap").css({"height":"none","overflow":"visible"});
				$("#container").css("display","block");
				$("#footer").css("display","block");
				$("#header_inner").css("display","block");
				$("#skipNav").css("display","block");
				$("#hiddenMenu").animate({"width":"0"}, 200, "linear", function(){
					$("#hiddenMenu").css("display","none");			
				});
			});

		// contact 부분  tab_basic 기능
			$(".contact1 li:not(:first)").hide();

			$(".contact0 li a").bind("click focusin",function(){
				$(".contact1 li").hide();	
				$( $(this).attr("href") ).show();
				$(".contact0 li a").removeClass();
				$(this).addClass("selected");

				return false;
			});
		// 리모컨 컨트롤러 기능
			$(window).scroll(function(){
				var nowScroll=$(document).scrollTop();
				console.log(nowScroll);

				// our brand 2700부터
				// job 7800
				// contact 8300
				if (nowScroll>1900&&nowScroll<7800) // barand 구간
				{
					var hei=(nowScroll-2700)/5100*10;
					$("#remoteControl div").css("height",44+hei+"%");
					$("#remoteControl ul li").css({"backgroundColor":"rgba(255,255,255,0.7)"});
					$("#remoteControl ul li a").css({"color":"#000"});
					$(".company_re1").css({"backgroundColor":"rgba(0,0,0,0.7)"});
					$(".company_re1 a, .company_re2 a").css({"color":"#fff"});
					$(".company_re2").css({"backgroundColor":"rgba(70,0,70,0.8)"});
					if (nowScroll>1900&&nowScroll<7800)
					{
						$("#ourBrand .brandVogue .brandImgs").css({"animation":"pump 0.5s ease-out","transform":"translatex(0)"});
						if(nowScroll>2600&&nowScroll<7800){
							$("#ourBrand .brandVogue ol").css({"animation":"yyy 0.5s ease-out","transform":"translatey(0)"});
							if(nowScroll>2850&&nowScroll<7800){
								$("#ourBrand .brandGq .brandImgs").css({"animation":"pump 0.5s ease-out","transform":"translatex(0)"});
								if(nowScroll>3800&&nowScroll<7800){
									$("#ourBrand .brandGq ol").css({"animation":"yyy 0.5s ease-out","transform":"translatey(0)"});
									if(nowScroll>4400&&nowScroll<7800){
										$("#ourBrand .brandAllure .brandImgs").css({"animation":"pump 0.5s ease-out","transform":"translatex(0)"});
										if(nowScroll>5200&&nowScroll<7800){
											$("#ourBrand .brandAllure ol").css({"animation":"yyy 0.5s ease-out","transform":"translatey(0)"});
											if(nowScroll>5500&&nowScroll<7800){
												$("#ourBrand .brandW .brandImgs").css({"animation":"pump 0.5s ease-out","transform":"translatex(0)"});
												if(nowScroll>6450&&nowScroll<7800){
													$("#ourBrand .brandW ol").css({"animation":"yyy 0.5s ease-out","transform":"translatey(0)"});
												}
											}
										}
									}
								}
							}
						}
					}
				}
				else if (nowScroll>7799&&nowScroll<8300) // job 구간
				{
					var hei=(nowScroll-7800)/500*30;
					$("#remoteControl div").css("height",55+hei+"%");
					$("#remoteControl ul li").css({"backgroundColor":"rgba(255,255,255,0.7)"});
					$("#remoteControl ul li a").css({"color":"#000"});
					$(".company_re1, .company_re2").css({"backgroundColor":"rgba(0,0,0,0.7)"});
					$(".company_re1 a, .company_re2 a").css({"color":"#fff"});
					$(".company_re3").css({"backgroundColor":"rgba(70,0,70,0.8)"});
					$(".company_re3 a").css({"color":"#fff"});
				}
				else if (nowScroll>8299) // contact 구간
				{
					$("#remoteControl div").css("height","100%");
					$("#remoteControl ul li").css({"backgroundColor":"rgba(0,0,0,0.7)"});
					$("#remoteControl ul li a").css({"color":"#fff"});
					$(".company_re4").css({"backgroundColor":"rgba(70,0,70,0.8)"});
					$(".company_re4 a").css({"color":"#fff"});
				}
				else{ // about vogue 구간
					var hei=(nowScroll/2700)*15;
					$("#remoteControl div").css("height",15+hei+"%");
					$("#remoteControl ul li").css({"backgroundColor":"rgba(255,255,255,0.7)"});
					$("#remoteControl ul li a").css({"color":"#000"});
					$(".company_re1").css({"backgroundColor":"rgba(70,0,70,0.8)"});
					$(".company_re1 a").css({"color":"#fff"});
					if (nowScroll>700)
					{
						$("#aboutVogue .vg h2").css({"animation":"pump 0.5s ease-out","transform":"translatex(0)"});
					}
				}

			});
			for (var i=0; i<4; i++)
			{
				$("#remoteControl ul li:eq("+i+") a").bind("click focusOn" ,function(){
					var na=$(this).attr("href");
					var area=$(na).offset().top;
					$("body, html").animate({scrollTop:area},1000);
					return false;
				});
			}

		});

  </script>
 </head>
 <body>
	<div id="wrap">
		<div id="header">
			<h1><a href="index.php" title="VOGUE 메인 사이트"><img src="img/vogue_logo.png" alt="VOGUE"/></a></h1>
			<div id="hiddenMenu">
				<div class="hiddenLogo">
					<a href="index.php" title="vogue">
						<img src="img/vogue_footer_logo.png" alt=" 메인 로고"/>
					</a>
				</div>
				<p class="closeBtn">
					<a href="#" title="메뉴 닫기"><img src="img/icon/cancel.png" alt="메뉴 닫기"/></a>
					<a class="menu_hover" href="#" title="메뉴 닫기"><img src="img/icon/cancel0.png" alt="메뉴 닫기"/></a>
				</p>
				<div class="mainH">
					<ul>
						<li><a href="fashion.php" title="fashion">fashion</a></li>
						<li><a href="beauty.php" title="beauty">beauty</a></li>
						<li><a href="living.php" title="living">living</a></li>
						<li><a href="people.php" title="people">people</a></li>
						<li><a href="runway.php" title="runway">runway</a></li>
						<li><a href="subscribe.php" title="subscribe">subscribe</a></li>
					</ul>
				</div>
				<div class="sideH">
					<ul class="sns">
						<li>
							<a href="https://www.instagram.com/VOGUEKOREA/" title="vogue 인스타그램"><img src="img/icon/sns_instagram1.png" alt="인스타그램 아이콘"/></a>
							<a class="sns_hover" href="https://www.instagram.com/VOGUEKOREA/" title="vogue 인스타그램"><img src="img/icon/sns_instagram0.png" alt="인스타그램 아이콘"/></a>
						</li>
						<li>
							<a href="https://www.facebook.com/VOGUEkr" title="vogue 페이스북"><img src="img/icon/sns_facebook1.png" alt="페이스북 아이콘"/></a>
							<a class="sns_hover" href="https://www.facebook.com/VOGUEkr" title="vogue 페이스북"><img src="img/icon/sns_facebook0.png" alt="페이스북 아이콘"/></a>
						</li>
						<li>
							<a href="https://twitter.com/VogueKorea" title="vogue 트위터"><img src="img/icon/sns_twitter1.png" alt="트위터 아이콘"/></a>
							<a class="sns_hover" href="https://twitter.com/VogueKorea" title="vogue 트위터"><img src="img/icon/sns_twitter0.png" alt="트위터 아이콘"/></a>
						</li>
					</ul>
					<dl>
						<dt>company</dt>
						<dd><a href="company.php" title="회사소개">회사소개</a></dd>
						<dd><a href="advertising.php" title="광고 및 제휴">광고 및 제휴</a></dd>
						<dd><a class="policyM" href="policy.php" title="개인정보 처리방침">개인정보 처리방침</a></dd>
					</dl>		
<?php if(empty($_SESSION['username'])){?>
					<p class="red"><a href="login.php" title="login">Login</a></p>
					<p><a href="agreement.php" title="sign_up">Sign up</a></p>
<?php } else{?>
					<p style="width:310px;"><a href="member.php" title="개인설정" style="color:hotpink; font-size:22px; font-weight:700;"><?=$_SESSION['username']?></a><span style="color:#fff; font-weight:700; font-size:20px;">님 이용중</span>&nbsp;&nbsp;&nbsp;<a href="logout.php" title="로그아웃" style="font-size:18px; color:red; font-weight:700;">&lt;LOGOUT&gt;</a></p>
<?php }?>
				</div>
			</div>
			<div id="header_inner">
				<div id="gnb">				
					<div id="manu_bar">
						<p>
							<a href="#" title="메뉴 오픈"><img src="img/icon/all_menu.png" alt="메뉴 열기"/></a>
							<a class="menu_hover" href="#" title="메뉴 오픈"><img src="img/icon/all_menu0.png" alt="메뉴 열기"/></a>
						</p>
					</div>
					<ul>
						<li><a href="fashion.php" title="fashion">fashion</a></li>
						<li><a href="beauty.php" title="beauty">beauty</a></li>
						<li><a href="living.php" title="living">living</a></li>
						<li><a href="people.php" title="people">people</a></li>
						<li><a href="runway.php" title="runway">runway</a></li>
						<li><a href="subscribe.php" title="subscribe">subscribe</a></li>
					</ul>
				</div>
				<div id="lnb">
					<ul class="sns">
						<li>
							<a href="https://www.instagram.com/VOGUEKOREA/" title="vogue 인스타그램"><img src="img/icon/sns_instagram.png" alt="인스타그램 아이콘"/></a>
							<a class="sns_hover" href="https://www.instagram.com/VOGUEKOREA/" title="vogue 인스타그램"><img src="img/icon/sns_instagram0.png" alt="인스타그램 아이콘"/></a>
						</li>
						<li>
							<a href="https://www.facebook.com/VOGUEkr" title="vogue 페이스북"><img src="img/icon/sns_facebook.png" alt="페이스북 아이콘"/></a>
							<a class="sns_hover" href="https://www.facebook.com/VOGUEkr" title="vogue 페이스북"><img src="img/icon/sns_facebook0.png" alt="페이스북 아이콘"/></a>
						</li>
						<li>
							<a href="https://twitter.com/VogueKorea" title="vogue 트위터"><img src="img/icon/sns_twitter.png" alt="트위터 아이콘"/></a>
							<a class="sns_hover" href="https://twitter.com/VogueKorea" title="vogue 트위터"><img src="img/icon/sns_twitter0.png" alt="트위터 아이콘"/></a>
						</li>
					</ul>
					<ul class="sideMenu">
						<li>
							<a href="#" title="사이드 메뉴">side menu</a>
							<ol class="company">
								<li><a href="company.php" title="회사소개">회사소개</a></li>
								<li><a href="advertising.php" title="광고 및 제휴">광고 및 제휴</a></li>
								<li><a class="policyM" href="policy.php" title="개인정보 처리방침">개인정보 처리방침</a></li>
							</ol>
						</li>
<?php if(empty($_SESSION['username'])){?>
						<li>|</li>
						<li class="login"><a href="login.php" title="login">Login</a></li>
<?php } else{?>
						<li><a href="member.php" title="개인설정" style="color:hotpink; font-size:16px; font-weight:700;"><?=$_SESSION['username']?></a><span style="font-weight:700;">님  접속</span>&nbsp;&nbsp;&nbsp;<a href="logout.php" title="로그아웃" style="font-size:14px; color:red; font-weight:700;">LogOut</a></li>
<?php }?>
					</ul>
					<div class="searchArea">
						<p><img src="img/icon/search_icon.png" alt="찾기 아이콘"/></p>
						<form action="#" method="get">
							<fieldset>
								<legend>게시물 검색</legend>
								<input id="search" name="search" type="text" title="게시물 찾기"/>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="container">
			<!--리모컨-->
			<div id="remoteControl">
				<h3>회사소개 리모컨</h3>
				<ul>
					<li class="company_re1">
						<a href="#aboutVogue" title="aboutVogue">
							About Us
						</a>
					</li>
					<li class="company_re2">
						<a href="#ourBrand" title="ourBrand">
							Brand
						</a>
					</li>
					<li class="company_re3">
						<a href="#jobArea" title="job">
							Job
						</a>
					</li>
					<li class="company_re4">
						<a href="#contact" title="contact">
							Contact
						</a>
					</li>
				</ul>
				<div>
					<p class="line1"></p>
					<p class="line2"></p>
					<p class="line3"></p>
				</div>
			</div>
			<!-- VOGUE 및 두산 매거진 소개 -->
			<div id="aboutVogue">
				<div class="us">
					<h2>about us</h2>
					<div>
						<h4>프리미엄 컨텐츠를 제공하는 미디어 컴퍼니</h4>
						<p>
							두산매거진은 패션과 뷰티, 라이프스타일 각 분야 최고의 미디어 브랜드를 통해, 트렌드와 스타일에 관한 새로운 관점을 제시하는 미디어 기업입니다.<br/>
							세계적인 미디어 그룹 컨데나스트(Condé Nast)와의 독점 라이선스 협약을 맺고 Vogue를 비롯하여 GQ, Allure, W 등<br/>
							네 가지 매거진을 발행하는 동시에, 웹사이트, 소셜미디어, 비디오 등 디지털 플랫폼에 최적화된 디지털 컨텐츠 또한 제공합니다.
						</p>
						<p class="img"><img src="img/company/aboutus-img.jpg" alt="컴퍼니 매거진 이미지"/></p>
					</div>
				</div>
				<div class="vg">
					<h2>about vogue</h2>
					<div>
						<h4>패션 매거진의 대명사, &lt;보그 코리아&gt;</h4>
						<p class="vgDesc">
							패션 바이블 &lt;보그&gt;는 전세계 21개국에서 발행되고 있는 120여 년의 전통을 지닌 가장 권위 있는 패션 매거진입니다.<br/>
							보그의 한국판 &lt;보그 코리아&gt;는 1996년 창간 이래로 국내 패션계와 오디언스 모두에게 가장 영향력 있는 패션지로서 잡지 시장을 선도해왔습니다.<br/>
							차별화 된 기획과 크리에이티브한 비주얼로 사람들에게 영감을 주는 패션 매거진의 대명사 &lt;보그 코리아&gt;.<br/>
							웹, 모바일, 소셜 미디어 등 다양한 디지털 플랫폼과 프린트 매거진을 통해 강력한 하나의 브랜드로 존재감을 발휘하고 있습니다.
						</p>
						<div class="member">
							<p class="img"><img src="img/vogue1.jpg" alt="컴퍼니 매거진 이미지"/></p>
							<ul>
								<li>
									<b>Editor-in-Chief</b>
									<span>신광호 SHIN, KWANG HO</span>
								</li>
								<li>
									<b>Fashion Director</b>
									<span>손은영 SOHN, EUN YOUNG</span>
								</li>
								<li>
									<b>Fashion Editors</b>
									<span>
										김미진 KIM, MI JIN / 송보라 SONG, BO RAH / 손기호 SOHN, KI HOH /<br/>
										남현지 NAM, HYUN JI / 이소민 LEE, SO MIN
									</span>
								</li>
								<li>
									<b>Features Director</b>
									<span>조소현 CHO, SO HYUN</span>
								</li>
								<li>
									<b>Features Editors</b>
									<span>김나랑 KIM, NA RANG / 공인아 KONG, IN A</span>
								</li>
								<li>
									<b>Beauty Director</b>
									<span>이주현 LEE, ZOO HYUN</span>
								</li>
								<li>
									<b>Beauty Editors</b>
									<span>이주현 LEE, JU HYEON / 우주연 WOO, JU YEON</span>
								</li>
								<li>
									<b>Content Director</b>
									<span>허세련 HEU, SAERYEUNG</span>
								</li>
								<li>
									<b>Content Editors</b>
									<span>황혜영 HWANG, HYE YOUNG / 홍지은 HONG, JIEUN / 강수지 KANG, SUJI</span>
								</li>
								<li>
									<b>Content Designer</b>
									<span>장명식 JANG, MYUNGSIK</span>
								</li>
								<li>
									<b>Editor</b>
									<span>허보연 HUR, BO YEON</span>
								</li>
								<li>
									<b>Art Director</b>
									<span>홍예영 HONG, YE YOUNG</span>
								</li>
								<li>
									<b>Designers</b>
									<span>
										공조희 KONG, JO HEE / 전보희 JUN, BO HEE /<br/>
										조효정 CHO, HYO JEONG / 오유경 OH ,YU KYUNG
									</span>
								</li>
								<li>
									<b>Syndication Manager</b>
									<span>박옥순 PARK, OK SOON</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr/>
			<!-- 자매 브랜드 소개 -->
			<div id="ourBrand">
				<h2>our brand</h2>
				<ul>
					<li class="brandVogue">						
						<div class="brandImgs">
						</div>
						<div class="brandDesc">
							<h4>패션 매거진의 대명사, &lt;보그 코리아&gt;</h4>
							<p>
								패션 바이블 &lt;보그&gt;는 전세계 21개국에서 발행되고 있는 120여 년의 전통을 지닌 가장 권위 있는 패션 매거진입니다. 보그의 한국판 &lt;보그 코리아&gt;는 1996년 창간 이래로<br/>
								국내 패션계와 오디언스 모두에게 가장 영향력 있는 패션지로서 잡지 시장을 선도해왔습니다. 차별화 된 기획과 크리에이티브한 비주얼로 사람들에게 영감을 주는 패션<br/>
								매거진의 대명사 &lt;보그 코리아&gt;. 웹, 모바일, 소셜 미디어 등 다양한 디지털 플랫폼과 프린트 매거진을 통해 강력한 하나의 브랜드로 존재감을 발휘하고 있습니다.
							</p>
						</div>
						<ol>
							<li>
								<p class="snsTitle">페이스북 팬 수</p>
								<p class="snsFollower">888,041</p>
							</li>
							<li>
								<p class="snsTitle">인스타그램 팬 수</p>
								<p class="snsFollower">1,625,460</p>
							</li>
							<li>
								<p class="snsTitle">카카오스토리 팬 수</p>
								<p class="snsFollower">345,362</p>
							</li>
						</ol>
					</li>
					<li class="brandGq">						
						<div class="brandImgs">
						</div>
						<div class="brandDesc">
							<h4>대한민국 No1. 남성 매거진, &lt;지큐 코리아&gt;</h4>
							<p>
								&lt;지큐(Gentlemen’s Quarterly)&gt;는 1957년 미국에서 창간된 이래 영국, 독일, 일본 등 19개국에서 출간중인 세계적인 남성 라이프 스타일 매거진입니다.<br/>
								&lt;지큐 코리아&gt;는 2001년에 창간되었으며, “It’s good to be a man”이라는 슬로건 아래 독보적인 컨텐츠와 비주얼, 세련된 논조와 관점을 바탕으로 대한민국 남자들의<br/> 
								패셔너블한 라이프 스타일을 이끌어 오고 있습니다.
							</p>
						</div>
						<ol>
							<li>
								<p class="snsTitle">페이스북 팬 수</p>
								<p class="snsFollower">376,777</p>
							</li>
							<li>
								<p class="snsTitle">인스타그램 팬 수</p>
								<p class="snsFollower">537,980</p>
							</li>
							<li>
								<p class="snsTitle">카카오스토리 팬 수</p>
								<p class="snsFollower">129,427</p>
							</li>
						</ol>
					</li>
					<li class="brandAllure">						
						<div class="brandImgs">
						</div>
						<div class="brandDesc">
							<h4>당신이 필요한 모든 것, &lt;얼루어 코리아&gt;</h4>
							<p>
								뷰티&라이프 스타일 매거진 &lt;얼루어&gt;는 웹사이트, 소셜 미디어, 프린트 매거진 등을 통해 오디언스에게 다양한 정보를 전달하는 실용적인 매체입니다.<br/>
								&lt;얼루어&gt;는 심도 깊은 뷰티 정보, 패션 에디터들의 심미안, 도시를 종횡무진하는 피처 에디터들의 취향 등 아름답고 매력적인 라이프 스타일을 제안합니다.<br/>
								‘올해의 화장품을 찾아라’라는 캐치프레이즈와 함께 블라인드 테스트로 수상작을 선정하여 공신력을 인정받은 ‘베스트 오브 뷰티 어워드’는 &lt;얼루어&gt;의 대표 컨텐츠입니다.<br/>
								또한 매년 수 천명의 오디언스가 참여하는 &lt;얼루어&gt;의 이벤트들은 오디언스와의 직접적인 만남을 가능하게 하는 강력한 소통의 장입니다.<br/>
								다양한 브랜드의 이벤트와 함께 제품을 직접 체험하고 즐기는 뷰티 페스티벌인 ‘뷰티 페어’와 6년 간 약 1억 3천 3백만 원을 녹색연합 산양 보호 프로그램에<br/>
								기부해 산양 구조 치료 센터 건립을 함께하는 ‘그린 캠페인’은 &lt;얼루어&gt;를 대표하는 행사입니다.
							</p>
						</div>
						<ol>
							<li>
								<p class="snsTitle">페이스북 팬 수</p>
								<p class="snsFollower">771,727</p>
							</li>
							<li>
								<p class="snsTitle">인스타그램 팬 수</p>
								<p class="snsFollower">696,487</p>
							</li>
							<li>
								<p class="snsTitle">카카오스토리 팬 수</p>
								<p class="snsFollower">준비중</p>
							</li>
						</ol>
					</li>
					<li class="brandW">						
						<div class="brandImgs">
						</div>
						<div class="brandDesc">
							<h4>컨셉추얼 트렌드 매거진, &lt;더블유 코리아&gt;</h4>
							<p>
								&lt;더블유 코리아&gt;는 미국판 &lt;W&gt;와 함께 전세계에서 유일하게 발행 중인 더블유 매거진으로,<br/>
								2005년 창간 이래 가장 혁신적이고 감도 높은 비주얼을 선보이는 차별화된 패션 매거진으로 자리잡아 왔습니다.<br/>
								현재 소셜미디어, 웹, 모바일 매거진 등 디지털 플랫폼으로까지 영역을 확장한 가운데, 특히 &lt;더블유 코리아&gt;의 소셜미디어<br/>
								채널은 독보적인 비디오 컨텐츠에 힘입어 패션 매거진 분야에서 최고의 영향력을 발휘하고 있습니다.
							</p>
						</div>
						<ol>
							<li>
								<p class="snsTitle">페이스북 팬 수</p>
								<p class="snsFollower">1,114,615</p>
							</li>
							<li>
								<p class="snsTitle">인스타그램 팬 수</p>
								<p class="snsFollower">1,600,530</p>
							</li>
							<li>
								<p class="snsTitle">카카오스토리 팬 수</p>
								<p class="snsFollower">준비중</p>
							</li>
						</ol>
					</li>
				</ul>
			</div>
			<div id="jobArea">
				<h2>Recruiting Now!</h2>
				<p><img src="img/icon/bg00.png" alt="아이콘"></p>
				<p>현재 모집중인 공고가 없습니다</p>
				<p class="linkH"><a href="https://career.doosan.com/" title="두산 채용 사이트">두산 채용 홈페이지 바로 가기</a></p>
			</div>
			<!-- 회사 정보 및 지도 예정 -->
			<div id="contact">
				<h2>contact</h2>
				<p id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.518593915668!2d127.03404076531172!3d37.519270864641214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca38b66599d13%3A0x7bc23b60378a251a!2z65GQ7IKw67mM65Sp!5e0!3m2!1sko!2skr!4v1600229242264!5m2!1sko!2skr"></iframe>
				</p>
				<div class="comInfo">
					<p>℡ 02-510-4500</p>
					<p>▼ 서울시 강남구 언주로 726 두산빌딩</p>
				</div>
				<ul class="contact0">
					<li><a class="selected" href="#tab0" title="vogue">vogue</a></li>
					<li><a href="#tab1" title="gq">gq</a></li>
					<li><a href="#tab2" title="allure">allure</a></li>
					<li><a href="#tab3" title="w">w</a></li>
					<li><a href="#tab4" title="jobs">jobs</a></li>
				</ul>
				<ul class="contact1">
					<li id="tab0">
						<div>
							<h4>광고 문의</h4>
							<p class="ph">Advertising Director</p>
							<p class="pd">김남일 차장 namilkim@doosan.com / 02-510-4619</p>
							<h4>사업 제휴 및 프로모션 문의</h4>
							<p class="ph">Lead Brand Manager</p>
							<p class="pd">정자영 차장 smoothie@doosan.com / 02-510-4538</p>
							<p class="ph">Brand Managers</p>
							<p class="pd">이아라 과장 ahra1.lee@doosan.com / 02-510-4695</p>
							<p class="pd">송지연 과장 jiyeon1.song@doosan.com / 02-510-4375</p>
							<p class="pd">이진영 과장 jinyoung13.lee@doosan.com / 02-510-4696</p>
							<p class="pd">문수정 사원 soojung.moon@doosan.com / 02-510-4536</p>
						</div>
					</li>
					<li id="tab1">
						<div>
							<h4>광고 문의</h4>
							<p class="ph">Advertising Director</p>
							<p class="pd">이동욱 부장 wooksclub@doosan.com / 02-510-4613</p>
							<h4>사업 제휴 및 프로모션 문의</h4>
							<p class="ph">Lead Brand Manager</p>
							<p class="pd">정자영 차장 smoothie@doosan.com / 02-510-4538</p>
							<p class="ph">Brand Managers</p>
							<p class="pd">이아라 과장 ahra1.lee@doosan.com / 02-510-4695</p>
							<p class="pd">송지연 과장 jiyeon1.song@doosan.com / 02-510-4375</p>
							<p class="pd">이진영 과장 jinyoung13.lee@doosan.com / 02-510-4696</p>
							<p class="pd">문수정 사원 soojung.moon@doosan.com / 02-510-4536</p>
						</div>
					</li>
					<li id="tab2">
						<div>
							<h4>광고 문의</h4>
							<p class="ph">Advertising Director</p>
							<p class="pd">김정환 부장 bears37@doosan.com / 02-510-4622</p>
							<p class="ph">Advertising Manager</p>
							<p class="pd">홍정민 과장 jeongmin.hong@doosan.com / 02-510-4608</p>
							<p class="pd">송영욱 대리 youngwook1.song@doosan.com / 02-510-4605</p>
							<p class="pd">이정일 사원 jeongil1.lee@doosan.com / 02-510-4637</p>
							<h4>사업 제휴 및 프로모션 문의</h4>
							<p class="ph">Lead Brand Manager</p>
							<p class="pd">정자영 차장 smoothie@doosan.com / 02-510-4538</p>
							<p class="ph">Brand Managers</p>
							<p class="pd">이아라 과장 ahra1.lee@doosan.com / 02-510-4695</p>
							<p class="pd">송지연 과장 jiyeon1.song@doosan.com / 02-510-4375</p>
							<p class="pd">이진영 과장 jinyoung13.lee@doosan.com / 02-510-4696</p>
							<p class="pd">문수정 사원 soojung.moon@doosan.com / 02-510-4536</p>
						</div>
					</li>
					<li id="tab3">
						<div>
							<h4>광고 문의</h4>
							<p class="ph">Advertising Director</p>
							<p class="pd">원효재 차장 hyojae.won@doosan.com / 02-510-4350</p>
							<h4>사업 제휴 및 프로모션 문의</h4>
							<p class="ph">Lead Brand Manager</p>
							<p class="pd">정자영 차장 smoothie@doosan.com / 02-510-4538</p>
							<p class="ph">Brand Managers</p>
							<p class="pd">이아라 과장 ahra1.lee@doosan.com / 02-510-4695</p>
							<p class="pd">송지연 과장 jiyeon1.song@doosan.com / 02-510-4375</p>
							<p class="pd">이진영 과장 jinyoung13.lee@doosan.com / 02-510-4696</p>
							<p class="pd">문수정 사원 soojung.moon@doosan.com / 02-510-4536</p>
						</div>
					</li>
					<li id="tab4">
						<div>
							<h4>채용 문의</h4>
							<p class="pd">양미나 대리 mina.yang@doosan.com / 02-510-4367</p>
						</div>
					</li>
				</ul>
				<p class="des">*각 매체 광고, 제휴 문의 및 채용 관련 문의만 가능합니다.</p>
			</div>
		</div>
		<!--footer-->
		<div id="footer">
			<div id="footerHead">
				<ul>
					<li class="footerV">
						<a href="index.php" title="VOGUE">
							<i><img src="img/company/vo_02.png" alt="vogue 제휴"/></i>
							<span><img src="img/company/test3.png" alt="vogue 잡지"/></span>
							<b><img src="img/company/test4.png" alt="vogue 사이트"/></b>
						</a>
						<div><p></p></div>
					</li>
					<li class="footerA">
						<div><p></p></div>
						<a href="http://www.allurekorea.com/" title="allure">
							<i><img src="img/company/al_05.png" alt="allure 제휴"/></i>
							<span><img src="img/company/al_02.png" alt="allure 잡지"/></span>
							<b><img src="img/company/al_04.png" alt="allure 사이트"/></b>
						</a>
					</li>
					<li class="footerG">
						<div><p></p></div>
						<a href="http://www.gqkorea.co.kr/" title="GQ">
							<i><img src="img/company/gq_05.png" alt="GQ 제휴"/></i>
							<span><img src="img/company/gq_02.png" alt="GQ 잡지"/></span>
							<b><img src="img/company/gq_04.png" alt="GQ 사이트"/></b>
						</a>
					</li>
					<li class="footerW">
						<div><p></p></div>
						<a href="http://www.wkorea.com/" title="W">
							<i><img src="img/company/w_05.png" alt="W 제휴"/></i>
							<span><img src="img/company/w_02.png" alt="W 잡지"/></span>
							<b><img src="img/company/w_04.png" alt="W 사이트"/></b>
						</a>
					</li>
				</ul>
			</div>
			<div id="mainFooter">
				<p class="footer_logo"><a href="index.php" title="main"><img src="img/vogue_footer_logo.png" alt="풋터 로고"/></a></p>
				<p class="copy">VOGUE&copy;EthanLee All Rights Reserved. lbard@naver.com</p>
				<p class="legal"><a href="policy.php" title="개인정보 취급방침">개인정보 취급방침</a></p>
			</div>
		</div>
	</div>
 </body>
</html>
