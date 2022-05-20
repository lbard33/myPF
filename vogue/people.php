<?php
	include "00_conn.php";

	session_cache_expire(15);
	session_start();
	


?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>people</title>
  <meta charset="utf-8"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.color.js"></script>
  <style>
		@font-face{font-family:"roman";src:url("font/Pistilli-Roman.woff");}
		@font-face{font-family:"romanT";src:url("font/Chronicle Display Roman.woff");}
		*{margin:0; padding:0;}
		li{list-style:none;}
		a:link, a:visited{text-decoration:none; color:#000;}

		#wrap{min-width:1025px; max-width:1920px; width:100%; margin:0 auto;  position:relative;}
				
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

		/*################### header_scroll ##################################*/
		#header_scroll{width:100%; height:50px; position:fixed; background-color:#000; border-radius:50px; left:0; top:-50px; z-index:3;}
		#header_scroll .scrollLogo{width:100px; height:50px; position:absolute; left:54%; top:0; line-height:50px;}
		#header_scroll .scrollLogo a{color:#fff; font-family:romanT; font-weight:400; display:block; width:100%; height:100%;}
		
		#gnbS{width:53%; height:100%; background-color:rgba(0, 0, 0, 0.5); border-radius:50px;}
		
		#gnbS ul{width:90%; height:100%; text-align:right; float:left; overflow:hidden;}
		#gnbS li{display:inline; text-transform:uppercase; letter-spacing:2px; line-height:50px; padding-right:20px;}
		#gnbS li a{color:#fff; font-size:14px; padding:0 10px;}
	
		#lnbS{width:30%; margin-left:17%; height:50px; position:absolute; right:0; top:0; border-radius:50px;}


		#lnbS .sideMenu{width:80%; padding-right:11%; height:100%; line-height:50px; text-transform:uppercase; font-size:13px; float:left; text-align:right;}
		#lnbS .sideMenu li{display:inline; padding-right:3%;}
		#lnbS .sideMenu li:first-child{position:relative;}
		#lnbS .company{display:none; width:130px; height:100px; position:absolute; z-index:2; right:13%; top:0; background-color:#000; border:2px solid #eee;}
		#lnbS .company li{display:block; font-size:12px; height:30px;}
		#lnbS .company li a{color:#fff;}
		#lnbS .sideMenu li:first-child:hover .company{display:block;}
		#lnbS .sideMenu a{color:#fff;}
		#lnbS .sideMenu .login{font-weight:700;}
		#lnbS .sideMenu .login a{color:#f55;}



		#lnbS .searchArea{width:5%; margin-right:4%; height:100%; float:right; position:relative;}
		#lnbS .searchArea:hover form{display:block;}

		#lnbS .searchArea p{width:20px; padding:0 25%; padding-top:15px;}
		#lnbS .searchArea p img{width:100%;}
		
	
		#lnbS .searchArea legend{display:none;}
		#lnbS .searchArea form{position:absolute; right:0; top:15%; margin-right:100%; display:none;}
		#lnbS .searchArea input{width:200px; height:20px; line-height:20px; border:none; text-indent:10px;}

	/*########### container #####################*/
		#container{width:100%; overflow:hidden; position:relative;}

		
		h3{position:absolute; width:1px; height:1px; font-size:1px; line-height:0; left:-9999px; overflow:hidden;}


		.sectTitle{width:500px; height:80px; line-height:80px; color:#000; font-size:36px; text-transform:uppercase; position:absolute;
		left:50%; top:900px; margin-left:-250px; text-align:center; z-index:1; font-family:roman; font-weight:400;}

	/*########## container / visual #############*/
		#visual{width:100%;}
		#visual li{width:100%; height:900px; position:relative; background-image:url("img/backimg05.jpg"); background-repeat:no-repeat; background-position:center 10%; background-size:100%;}


	/*############ visual / descBox #############*/
		#visual li .descBox{width:700px; position:absolute; left:200px; top:240px;}
		#visual li .descBox dt{font-size:55px; color:rgba(255,60,60,0); font-weight:400; transition:all 1s linear;}
		#visual li .descBox .dtTitle{font-size:35px; line-height:50px; color:rgba(255,255,255,0); transition:all 1s linear 0.3s;}
		#visual li .descBox .desc{padding:20px 0 60px; color:rgba(255,255,255,0); transition:all 1s linear 0.7s;}
		

		#visual:hover li .descBox dt{color:rgba(200,200,200,1);}
		#visual:hover li .descBox .dtTitle{color:rgba(255,150,150,1);}
		#visual:hover li .descBox .desc{color:rgba(255,255,255,1);}




	/*##### container / gps ############*/
		#gps{position:absolute; left:8%; top:1010px;}
		#gps li{display:inline; font-size:12px;}

	/*############  container / cate ###########*/
		.cate{width:100%; padding-top:280px; text-align:center;}
		.cate li{display:inline-block; padding:0 20px; font-size:20px;}
		
		.cate a{padding:0 10px; color:#000;}
		.cate li:first-child a{color:#f00;}

		.cate a:hover{color:#f00;}
		
	/*##### container / searchArea #########*/
		#searchArea{width:100%; padding:50px 0 50px;}
		#searchArea form{width:500px; height:45px; line-height:40px;  margin:20px auto 0;}
		#searchArea form fieldset{width:100%; height:100%; border:none; border-bottom:2px solid #ccc;}
		#cont_search{width:470px; height:40px; border:none; margin-bottom:5px; text-indent:10px;}
		#searchArea p{float:right; margin-top:10px; width:20px; height:20px;}
		#searchArea img{width:100%;}
		legend{display:none;}
	
	
	/*####### container / section #############*/
		#section_people{width:100%;}
		#section_inner{width:90%; margin:0 auto;}
		#section_inner ul{width:100%; height:700px;}
		#section_inner .mainPeople{padding-bottom:100px;}
		#section_inner .mainPeople li{float:left;}

		#section_inner .mainPeople article{width:calc(100% - 100px); height:100%; padding:0 50px;}
		#section_inner .mainPeople a{display:block; width:100%; height:100%; position:relative;}
		#section_inner .mainPeople a .cont_img{display:block; width:100%; height:70%; overflow:hidden; }
		#section_inner img{width:120%;}
		
		#section_inner .mainPeople .li0{width:49%; height:100%;}
		#section_inner .mainPeople .li0 img{margin-top:-100px;}

		#section_inner .mainPeople .li1{width:25%; height:100%; border-left:1px solid #ccc; border-right:1px solid #ccc;}
		#section_inner .mainPeople .li1 .cont_img{height:50%;}
		#section_inner .mainPeople .li2, #section_inner .mainPeople .li3{width:25%; height:50%;}

		#section_inner .mainPeople .cont_text{display:block; width:100%; padding-top:20px; overflow:hidden;}
		#section_inner .mainPeople .cont_text em{display:block;  color:#f55; text-align:right; padding:0 10px;}
		#section_inner .mainPeople .cont_text strong{display:block; font-size:24px; padding-bottom:20px; color:#333; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
		#section_inner .mainPeople .cont_text b{font-size:14px; font-weight:400; line-height:25px;}

		#section_inner .mainPeople .li2 .cont_text, #section_inner .mainPeople .li3 .cont_text{padding-top:0;}
		#section_inner .mainPeople .li2 .cont_text strong, #section_inner .mainPeople .li3 .cont_text strong{font-size:20px;}
		#section_inner .mainPeople .li2 .cont_img, #section_inner .mainPeople .li3 .cont_img{width:100%; height:150px;}

		#section_inner .subPeople{width:260%; height:400px; padding-top:100px; padding-bottom:200px; border-bottom:2px solid #ccc; border-top:2px solid #ccc; overflow:hidden; animation:subPeople 60s infinite linear; transform:translatex(-7.65%);}
		#section_inner .subPeople li{float:left; width:7.65%; height:100%;}

		@keyframes subPeople{
		0%{transform:translatex(-7.65%);}
		100%{transform:translatex(-61.2%);}
		}

		

		#section_inner .subPeople li:hover, #section_inner .mainPeople li:hover{opacity:0.7;}
		
		/*#section_inner .subPeople{width:100%; height:400px; padding-top:100px; padding-bottom:200px; border-bottom:2px solid #ccc; border-top:2px solid #ccc;}
		#section_inner .subPeople li{float:left; width:20%; height:100%;}*/

		#section_inner .subPeople article{width:100%; height:100%;}
		#section_inner .subPeople a{display:block; width:80%; margin:0 auto; position:relative; left:0; top:0;}
		#section_inner .subPeople .cont_img, #section_inner .subPeople .cont_text{display:block; width:100%; position:relative;}
		#section_inner .subPeople .cont_img i{display:block; width:100%; height:100%; position:absolute; left:0; top:0; z-index:2;}
		#section_inner .subPeople img{width:100%;}
		#section_inner .subPeople .cont_title{display:block; width:100%; padding:10px 0; font-size:18px;}
		#section_inner .subPeople .cont_desc{font-weight:400; color:#555; font-size:14px;}

	/*######### sect_round ###################*/
		#section_round{width:100%; padding:100px 0;}
		#cont_people{width:1250px; height:750px; margin:0 auto; position:relative;}
		#cont_people ul{width:100%; height:100%;}
		#cont_people .circleArea li, #cont_people .hoverArea li{width:250px; height:250px; overflow:hidden; position:relative; float:left;}
		#cont_people .circleArea li a, #cont_people .hoverArea li a{width:100%; height:100%; display:block; color:#fff;  border-radius:250px; border:1px solid #fff; overflow:hidden; transform:scale(0.9); box-shadow:7px 7px 7px #555; background-color:#000; transition:transform 0.3s linear;}
		#cont_people .circleArea li strong{display:block; width:100%; height:100%; position:absolute; left:0; bottom:0; border-radius:250px; text-align:center;
		background-image: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 60%, rgba(0,0,0,0.65) 80%, rgba(0,0,0,0.85) 100%); 
		background-image: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 60%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.85) 100%);
		background-image: -o- linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 60%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.85) 100%);
		background-image: -ms- linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 60%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.85) 100%);}
		#cont_people .circleArea li strong b{display:block; width:200px; text-align:center; position:absolute; left:50%; bottom:35px; font-size:18px; transform:translatex(-50%);}

		#cont_people .circleArea li img{height:100%;}
		.hidd{display:none;}

		#cont_people .circleArea .li1 img{margin-left:-50px;}
		#cont_people .circleArea .li2 img, #cont_people ul .li3 img{height:150%;}
		#cont_people .circleArea .li5 img{height:130%;}
		#cont_people .circleArea .li6 img{margin-left:-50px;}
		#cont_people .circleArea .li8 img{height:130%; margin-top:-60px;}

		#cont_people .circleArea .li4{background-color:#000; width:250px; height:250px; border-radius:250px; opacity:0;}
		#cont_people .circleArea .li5,#cont_people .circleArea .li6,#cont_people .circleArea .li7,#cont_people .circleArea .li8{float:right;}
		#cont_people .circleArea .li0, #cont_people .circleArea .li5{width:500px; height:500px;}
		#cont_people .circleArea .li0 strong b, #cont_people .circleArea .li5 strong b{bottom:60px; font-size:22px; width:300px;}

	/*############# hoverArea ###########################################*/
		#cont_people .hoverArea{position:absolute; left:0; top:0; display:none;}
		#cont_people .hoverArea li span{display:block; width:100%; height:100%;}
		#cont_people .hoverArea li img, #cont_people .hoverArea strong{display:none;}
		#cont_people .hoverArea .li0 a, #cont_people .hoverArea .li1 a{border-radius:0; transform:scale(1); border:none; color:#fff;}
		#cont_people .hoverArea .li0{width:750px; height:500px;}
		#cont_people .hoverArea .li1{width:500px; height:750px; float:right;}
		#cont_people .hoverArea li img{width:100%; position:absolute; top:0; left:0;}

		#cont_people .hoverArea .li1 b{display:block; width:100%; height:200px; line-height:200px; text-align:center; font-size:25px; color:#f55;}
		#cont_people .hoverArea .li1 span{display:block; width:80%; height:450px; padding:0 10%; line-height:25px; font-size:18px;}
		#cont_people .hoverArea .li1 i{display:block; width:100%; height:100px; text-align:center; font-style:normal; font-weight:100; font-size:18px; color:#f88;}

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


		//  히든 메뉴 기능
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

		// ################### scroll에 인한 메뉴 기능
			$(window).scroll(function(){
				// 현재 스크롤 위치값 확인하기
				var nowScroll=$(document).scrollTop();
				//console.log(nowScroll);
				if (nowScroll>0)
				{
					$("#header_scroll").stop().animate({"top":"0"},100);
					$("h1").css("top","-200px");
					$("#header_inner").stop().slideUp();
				}
				else{
					$("#header_scroll").stop().animate({"top":"-50px"},100);
					$("h1").css("top","0");
					$("#header_inner").stop().slideDown();
				}
			});

		// section 영역 sub피플 li마우스 호버시 애미네이션 일시정지 기능
			$("#section_inner .subPeople li").mouseover(function(){
				$("#section_inner .subPeople").css({"animationPlayState":"paused"});
				$(this).find("a").stop().animate({"color":"#f00","top":"-50px"},300,"linear");
				$(this).find("i").stop().animate({"backgroundColor":"rgba(100,180,200,0.3)"},500,"linear");
				$(this).find(".cont_desc").stop().animate({"color":"#900"},500,"linear");
			});
			$("#section_inner .subPeople li").mouseout(function(){
				$("#section_inner .subPeople").css({"animationPlayState":"running"});
				$(this).find("a").stop().animate({"color":"#000","top":"0"},100,"linear");
				$(this).find("i").stop().animate({"backgroundColor":"rgba(255,0,0,0)"},500,"linear");
				$(this).find(".cont_desc").stop().animate({"color":"555"},500,"linear");
			});
		

		// 마지막 원형 게시물들 기능만들기
			$("#cont_people .circleArea li a").mouseover(function(){
				var insN=$(this).find("img").attr("src").substring(17,19);
				var titN=$(this).attr("title").substring(2,3);
				var tit=$(this).find("b").text();
				var des=$(this).find(".hidd").html();
				var adr=$(this).attr("href");
				$("#cont_people .circleArea li a img, #cont_people .circleArea li a strong").stop().animate({"opacity":"0"},300,"linear",function(){
					$("#cont_people .circleArea .li0 a, #cont_people .circleArea .li1 a, #cont_people .circleArea .li4 a, #cont_people .circleArea .li2 a, #cont_people .circleArea .li3 a, #cont_people .circleArea .li5 a").css({"transform":"scale(1)","border":"none"});
					$("#cont_people .circleArea .li4").stop().animate({"borderRadius":"0","opacity":"1"},300,"linear");
					if (titN==2 || titN==3 || titN==5)
					{
						$("#cont_people .hoverArea li:first-child img").css({"top":"0", "left":"0", "transform":"translate(0, 0)"});
					}
					else{
						$("#cont_people .hoverArea li:first-child img").css({"top":"50%", "left":"50%", "transform":"translate(-50%, -50%)"});
					}
					$("#cont_people .circleArea .li0 a, #cont_people .circleArea .li1 a, #cont_people .circleArea .li4 a, #cont_people .circleArea .li2 a, #cont_people .circleArea .li3 a, #cont_people .circleArea .li5 a").stop().animate({"borderRadius":"0"},300,"linear",function(){
						$("#cont_people .hoverArea").stop().show();
						$("#cont_people .circleArea li a, #cont_people .circleArea .li4").stop().hide();
						$("#cont_people .hoverArea .li0 a, #cont_people .hoverArea .li1 a").css({"transform":"scale(0.9)","border":"1px solid #fff"});
						$("#cont_people .hoverArea .li0 a, #cont_people .hoverArea .li1 a").stop().animate({"borderRadius":"250px"},300,"linear", function(){
							$("#cont_people .hoverArea .li0").find("img").attr("src", "img/people/people"+insN+".jpg");
							$("#cont_people .hoverArea .li1").find("b").text(tit);
							$("#cont_people .hoverArea .li1").find("span").html(des);
							$("#cont_people .hoverArea .li2").find("img").attr("src", "img/people/people"+insN+"_00.jpg");
							$("#cont_people .hoverArea .li3").find("img").attr("src", "img/people/people"+insN+"_01.jpg");
							$("#cont_people .hoverArea .li4").find("img").attr("src", "img/people/people"+insN+"_02.jpg");
							$("#cont_people .hoverArea img, #cont_people .hoverArea strong").stop().fadeIn(300, "linear");
						});	
						$("#cont_people .hoverArea li a").attr("href", adr);
					});
				});
			});

			$("#cont_people .hoverArea li a").mouseleave(function(){
				$("#cont_people .hoverArea li a img, #cont_people .hoverArea li a strong").stop().fadeOut(200,"linear");
				$("#cont_people .hoverArea .li0 a, #cont_people .hoverArea .li1 a").css({"transform":"scale(1)","border":"none"});
				$("#cont_people .hoverArea .li0 a, #cont_people .hoverArea .li1 a").stop().animate({"borderRadius":"0"},200,"linear", function(){
					$("#cont_people .hoverArea").stop().hide();
					$("#cont_people .circleArea li a, #cont_people .circleArea .li4").stop().show();
					$("#cont_people .circleArea .li4").stop().animate({"borderRadius":"250px","opacity":"0"},200,"linear");
					$("#cont_people .circleArea .li0 a, #cont_people .circleArea .li1 a, #cont_people .circleArea .li4 a, #cont_people .circleArea .li2 a, #cont_people .circleArea .li3 a, #cont_people .circleArea .li5 a").css({"transform":"scale(0.9)","border":"1px solid #fff"});
					$("#cont_people .circleArea .li0 a, #cont_people .circleArea .li1 a, #cont_people .circleArea .li4 a, #cont_people .circleArea .li2 a, #cont_people .circleArea .li3 a, #cont_people .circleArea .li5 a").stop().animate({"borderRadius":"250px"},200,"linear",function(){
						$("#cont_people .circleArea li a img, #cont_people .circleArea li a strong").stop().animate({"opacity":"1"},200,"linear");
					});
				});
			});

		//////// 개인정보 취급방침
			$(".policyM").click(function(){
				window.open("policy.php","_blank","width=1200px, height=700px, left=200, top=50,");	
				return false;
			});
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
			<div id="header_scroll">
				<h2 class="scrollLogo"><a href="index.php" title="VOGUE 메인 사이트">VOGUE</a></h2>
				<div id="gnbS">				
					<ul>
						<li><a href="fashion.php" title="fashion">fashion</a></li>
						<li><a href="beauty.php" title="beauty">beauty</a></li>
						<li><a href="living.php" title="living">living</a></li>
						<li><a href="people.php" title="people">people</a></li>
						<li><a href="runway.php" title="runway">runway</a></li>
						<li><a href="subscribe.php" title="subscribe">subscribe</a></li>
					</ul>
				</div>
				<div id="lnbS">
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
						<li><a href="member.php" title="개인설정" style="color:hotpink; font-size:16px; font-weight:700;"><?=$_SESSION['username']?></a><span style="font-weight:700; color:#fff;">님  접속</span>&nbsp;&nbsp;&nbsp;<a href="logout.php" title="로그아웃" style="font-size:14px; color:red; font-weight:700;">&lt;LOGOUT&gt;</a></li>
<?php }?>
					</ul>
					<div class="searchArea">
						<p><img src="img/icon/search_icon0.png" alt="찾기 아이콘"/></p>
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
			<h2 class="sectTitle">people</h2>
			<section id="visual">
				<h3>광고영역</h3>
				<ul>
					<li>
						<div class="descBox">
							<dl>
								<dt>PEOPLE</dt>
								<dt class="dtTitle">패션 매거진의 대명사, &lt;보그 코리아&gt;</dt>
								<dd class="desc">
									패션인들을 파헤치는 interview<br/>
									연애, 가치관, 성향 모든것을 people에서
								</dd>
							</dl>
						</div>
					</li>
				</ul>
			</section>
			<ul id="gps">
				<li><a href="index.php" title="vogue">VOGUE</a>&nbsp;></li>
				<li><a href="people.php" title="fashoin">PEOPLE</a>&nbsp;></li>
				<li>전체</li>
			</ul>
			<div id="searchArea">
				<form action="#none" method="get">
					<fieldset>
						<legend>검색</legend>
						<input id="cont_search" name="cont_search" type="text" title="검색창"/>
						<p><img src="img/icon/search_icon.png" alt="검색"></p>
					</fieldset>
				</form>
			</div>
			<section id="section_people">
				<h3>기사모음</h3>
				<div id="section_inner">
					<ul class="mainPeople">
						<li class="li0">
							<article>
								<h3>뜨는 프로듀서 다비가 궁금해</h3>
								<a href="desc/desc04.php" title="뜨는 프로듀서 다비가 궁금해">
									<span class="cont_img"><img src="img/people/people00.jpg" alt="뜨는 프로듀서 다비가 궁금해 이미지"/></span>
									<span class="cont_text">	
										<em class="cate0">people</em>
										<strong class="cont_title">뜨는 프로듀서 다비가 궁금해</strong>
										<b class="cont_desc">다비는 헤이즈의 1위 곡을 쏟아낸 프로듀서이자 재즈 알앤비 뮤지션이다. ‘당신의 물음에 답이 되어주고 싶어서’ 다비라 이름 지었다.
										요즘 어떤 프로듀서가 뜨거운지 음악 칼럼니스트 이대화에게 묻자 ‘다비(DAVII)’의 영상을 보내왔다. “헤이즈의 히트곡 대부분을 만든 프로듀서이자 재즈 피아노를 기반으로 알앤비를 하는 독특한 친구죠.” 2014년 데뷔한 다비는 프로듀서로 먼저 이름을 알렸다.</b>
									</span>
								</a>
							</article>
						</li>
						<li class="li1">
							<article>
								<h3>빌리 아일리시가 바꾼 세상</h3>
								<a href="#none" title="빌리 아일리시가 바꾼 세상">
									<span class="cont_img"><img src="img/people/people11.jpg" alt="빌리 아일리시가 바꾼 세상 이미지"/></span>
									<span class="cont_text">	
										<em class="cate0">people</em>
										<strong class="cont_title">빌리 아일리시가 바꾼 세상</strong> 
										<b class="cont_desc">슬라임 그린 가르마의 소녀, 룰 브레이커, 그래미의 여왕 그리고 안티 패션, 안티 팝. 우리가 ‘빌리 아일리시’라고 부르는 절대적 인물이다. 
										지난해 코첼라 뮤직 페스티벌은 사랑스러운 모먼트로 알려진 축제는 아니지만, 아기 판다 두 마리와 맞먹는 팝 스타 두 명의 조합을 내놓았다.</b>
									</span>
								</a>
							</article>
						</li>
						<li class="li2">
							<article>
								<h3>&lt;응팔&gt; 배우들의 ‘찐 우정’</h3>
								<a href="#none" title="&lt;응팔&gt; 배우들의 ‘찐 우정’">
									<span class="cont_img"><img src="img/people/people03.jpg" alt="&lt;응팔&gt; 배우들의 ‘찐 우정’ 이미지"/></span>
									<span class="cont_text">	
										<em class="cate0">people</em>
										<strong class="cont_title">&lt;응팔&gt; 배우들의 ‘찐 우정’</strong>
										<b class="cont_desc">1988년 쌍문동을 시끌벅적하게 했던 친구들이 있습니다.사고뭉치이지만 착한 덕선이(혜리), 
										그런 동생이 한심하면서도 사랑스러운 언니 보라(류혜영), 속이 깊고 덕선이를 짝사랑하는 정환(류준열)...</b>
									</span>
								</a>
							</article>
						</li>
						<li class="li3">
							<article>
								<h3>제이미가 된 조권, 신주협, MJ, 렌</h3>
								<a href="desc/desc02.php" title="제이미가 된 조권, 신주협, MJ, 렌">
									<span class="cont_img"><img src="img/people/people04.jpg" alt="제이미가 된 조권, 신주협, MJ, 렌 이미지"/></span>
									<span class="cont_text">	
										<em class="cate0">people</em>
										<strong class="cont_title">제이미가 된 조권, 신주협, MJ, 렌</strong>
										<b class="cont_desc">뮤지컬 &lt;제이미&gt;에서 제이미가 된 조권, 신주협, MJ, 렌은 노래한다. “난 나만의 꿈, 나만의 스타일이 있어. 널 웃게 만들 나만의 춤도 있어. 그러니 싫으면 가주겠니.</b>
									</span>
								</a>
							</article>
						</li>
					</ul>
					<ul class="subPeople">
						<li>
							<article>
								<h3>선미가 말하는 정체성</h3>
								<a href="#none" title="선미가 말하는 정체성">
									<span class="cont_img"><img src="img/people/people02.jpg" alt="선미가 말하는 정체성 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">선미가 말하는 정체성</strong>
										<b class="cont_desc">선미의 정체성은 이 말로 함축된다. “아티스트라면 패션, 뷰티뿐 아니라 시대정신과 문화를 이끌어야죠.”</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>The Bong Effect</h3>
								<a href="#none" title="The Bong Effect">
									<span class="cont_img"><img src="img/people/people06.jpg" alt="The Bong Effect 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">The Bong Effect</strong>
										<b class="cont_desc">아카데미 시상식을 하루 앞둔 지금, 봉준호 감독을 둘러싸고 미국에서 일어나고 있는 ‘봉 이펙트’!</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>소미의 스무 살</h3>
								<a href="#none" title="소미의 스무 살">
									<span class="cont_img"><img src="img/people/people09.jpg" alt="소미의 스무 살 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">소미의 스무 살</strong>
										<b class="cont_desc">인생에서 가장 설레는 나이 스무 살. 2001년생 소미가 보내고 있는 스무 살은 어떤 모습일까?</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>스티브 맥퀸을 만나다</h3>
								<a href="#none" title="스티브 맥퀸을 만나다">
									<span class="cont_img"><img src="img/people/people08.jpg" alt="스티브 맥퀸을 만나다 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">스티브 맥퀸을 만나다</strong>
										<b class="cont_desc">할리우드에서 군림하며 10여 년을 보낸 영화감독 스티브 맥퀸이 테이트 모던에서 회고전을 새로 열며 자신의 본업으로 되돌아갔다.</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>두아 리파를 만나다</h3>
								<a href="#none" title="두아 리파를 만나다">
									<span class="cont_img"><img src="img/people/people12.jpg" alt="두아 리파를 만나다 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">두아 리파를 만나다</strong>
										<b class="cont_desc">그녀는 소셜 미디어를 통해 대중음악과 패션에 엄청난 파동을 일으키는 인물이다.</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>박해준의 세계</h3>
								<a href="#none" title="박해준의 세계">
									<span class="cont_img"><img src="img/people/people28.jpg" alt="박해준의 세계 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">박해준의 세계</strong>
										<b class="cont_desc">박해준은 누구인가. &lt;부부의 세계&gt; 이태오는 얌전한 편, 작품으로 악의 연대기를 쓴 배우. 실상은 돈 싫어, 명예 싫어, 두 아들과 춤을 추는 가장.</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>끝내주게 좋아</h3>
								<a href="#none" title="끝내주게 좋아">
									<span class="cont_img"><img src="img/people/people29.jpg" alt="끝내주게 좋아 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">끝내주게 좋아</strong>
										<b class="cont_desc">
											리조는 뮤지션을 넘어 하나의 무브먼트다. 파워, 긍정, 자기애에 관한 메시지 덕분에 컬트 수준의 추종자가 그녀를 따른다.
											글래스턴베리 페스티벌(Glastonbury Festival)이 열리던 토요일, 바깥 기온이 섭씨 30도에 달했고 리조(Lizzo)는 자립에
											관한 확신을 심어주며 3만 명의 관중을 이끌고 있었다.
										</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>가깝고도 낯선</h3>
								<a href="#none" title="가깝고도 낯선">
									<span class="cont_img"><img src="img/people/people30.jpg" alt="가깝고도 낯선 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">가깝고도 낯선</strong>
										<b class="cont_desc">
											그리웠던 송지효의 서늘한 얼굴, 증명해온 김무열의 공감 능력이 영화 &lt;침입자&gt;에 있다. 이들은 가장 가깝다고 주입된 관계, 가족을 낯설게 본다.
											익숙함을 비틀 때 공포스럽다. 영화 &lt;침입자&gt;는 노래 ‘Home Sweet Home’의 “즐거운 곳에서는 날 오라 하여도 내 쉴 곳은 
											내 집뿐이네”를 &lt;안나 카레니나&gt;의 첫 문장 “행복한 가정은 모두 모습이 비슷하고, 불행한 가정은 모두 제각각의 불행을 안고 있다”로 바꾼다.
										</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>선미가 말하는 정체성</h3>
								<a href="#none" title="선미가 말하는 정체성">
									<span class="cont_img"><img src="img/people/people02.jpg" alt="선미가 말하는 정체성 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">선미가 말하는 정체성</strong>
										<b class="cont_desc">선미의 정체성은 이 말로 함축된다. “아티스트라면 패션, 뷰티뿐 아니라 시대정신과 문화를 이끌어야죠.”</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>The Bong Effect</h3>
								<a href="#none" title="The Bong Effect">
									<span class="cont_img"><img src="img/people/people06.jpg" alt="The Bong Effect 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">The Bong Effect</strong>
										<b class="cont_desc">아카데미 시상식을 하루 앞둔 지금, 봉준호 감독을 둘러싸고 미국에서 일어나고 있는 ‘봉 이펙트’!</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>소미의 스무 살</h3>
								<a href="#none" title="소미의 스무 살">
									<span class="cont_img"><img src="img/people/people09.jpg" alt="소미의 스무 살 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">소미의 스무 살</strong>
										<b class="cont_desc">인생에서 가장 설레는 나이 스무 살. 2001년생 소미가 보내고 있는 스무 살은 어떤 모습일까?</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>스티브 맥퀸을 만나다</h3>
								<a href="#none" title="스티브 맥퀸을 만나다">
									<span class="cont_img"><img src="img/people/people08.jpg" alt="스티브 맥퀸을 만나다 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">스티브 맥퀸을 만나다</strong>
										<b class="cont_desc">할리우드에서 군림하며 10여 년을 보낸 영화감독 스티브 맥퀸이 테이트 모던에서 회고전을 새로 열며 자신의 본업으로 되돌아갔다.</b>
									</span>
								</a>
							</article>
						</li>
						<li>
							<article>
								<h3>두아 리파를 만나다</h3>
								<a href="#none" title="두아 리파를 만나다">
									<span class="cont_img"><img src="img/people/people12.jpg" alt="두아 리파를 만나다 이미지"/><i></i></span>
									<span class="cont_text">	
										<strong class="cont_title">두아 리파를 만나다</strong>
										<b class="cont_desc">그녀는 소셜 미디어를 통해 대중음악과 패션에 엄청난 파동을 일으키는 인물이다.</b>
									</span>
								</a>
							</article>
						</li>
					</ul>
				</div>
			</section>
			<section id="section_round">
				<h3>sectionRoung</h3>
				<div id="cont_people">
					<ul class="circleArea">
						<li class="li0">
							<a href="#none" title="피플0 게시물">
								<span><img src="img/people/people01.jpg" alt="피플 0게시물 이미지"/></span>
								<strong><b>이규형, 슬픔이 없는 십오 초</b><span class="hidd">‘혜성처럼 등장했다.’<br/>이런 표현을 기사에 쓰면, 여러분이 보기 전에 편집장이 날려버렸을 거다. 퇴직 전에 마지막으로 한 번 더 사용하자면, 서른다섯에 &lt;비밀의 숲&gt;(2017)에 출연한 배우 이규형이 그랬다. 그가 맡은 서부지검 사건과 과장 윤세원은 네이버 등장인물 소개에 스무 번째지만, 반전의 핵심이었다. (드라마를 종영한 지 3년이니 이 정도 스포일러는 허용하길.) 치밀한 시나리오 덕도 있지만, 포마드 머리의 단정한 과장님이 얼마나 포커페이스를 잘했는지 결말에 배신감마저 들었다. 뮤지컬에 익숙하지 않은 시청자는 연기 잘하는 이 배우가 어디서 왔는지 궁금해했다. 나 역시 공연계에서 활동하다 드라마로 넘어왔거니 짐작했을 뿐이다. 맞기도, 틀리기도 하다. 넘어왔다고 하기엔 한 해도 쉬지 않고 공연 무대에 오르고 있으니까.</span></strong>
							</a>
						</li>						
						<li class="li1">
							<a href="#none" title="피플1 게시물">
								<span><img src="img/people/people10.jpg" alt="피플 1게시물 이미지"/></span>
								<strong><b>한예리의 무한 매력</b><span class="hidd">이것도 좋고 저것도 좋은 한예리는 세상을 포용하는 배우로 기능하며 세상을 다양하게 궁리하게 한다. 무궁무진한 매력으로 관객을 붙잡아두는 그녀가 새 작품으로 꺼낼 이야기는 가족이다. 어떤 배우를 좋아하게 되는 데는 극 중 캐릭터라거나 외모, 행보 등 다소 커다란 계기가 있기 마련이다. 그런데 한예리는 좀 다르다. 사람들은 다음과 같은 이유를 들며 한예리가 좋다고 말했다. 눈물을 참을 때 입 모양이 좋아서, 강단 있고 신념이 꽉 찬 눈빛이 좋아서, 세상만사 지친 표정이 좋아서, 동글동글한 목소리가 좋아서…</span></strong>
							</a>
						</li>
						<li class="li2">
							<a href="#none" title="피플2 게시물">
								<span><img src="img/people/people05.jpg" alt="피플 2게시물 이미지"/></span>
								<strong><b>예수정이라는 확장자</b><span class="hidd">배우 예수정은 삭제되거나 생략되었던 여성의 서사를 돌려놓고 있다. 40년을 무대에서 보낸 그녀는 콜럼버스처럼 인간을 탐험한다. &lt;0부산행&gt;과 &lt;신과 함께-죄와 벌&gt;이 연이어 개봉했을 때 영화계는 예수정이라는 새로운 어머니의 탄생을 반겼다. 사랑과 헌신만 남긴 채 다른 감정은 하얗게 증발시켜버린 듯한 예수정을 보며 우리 역시 증발한 줄 알았던 눈물을 흘렸다. 하지만 헌신의 초상화로서 예수정은 오래 유지되지 않았다. 최근 몇 년 사이 여성 캐릭터가 확장되는 흐름 속에서 예수정은 영화나 드라마가 생략하거나 지워버리며 돌보지 않았던 나이 든 여성의 삶을 복기했다.</span></strong>
							</a>
						</li>
						<li class="li3">
							<a href="#none" title="피플3 게시물">
								<span><img src="img/people/people07.jpg" alt="피플 3게시물 이미지"/></span>
								<strong><b>스테파노 필라티</b><span class="hidd">“디자이너로서 내게 가장 아름다운 순간은 런웨이로 나가기 직전에 모델들이 줄 서 있는 걸 바라볼 때입니다.”스테파노 필라티는 랜덤 아이덴티티의 2020 F/W 컬렉션 쇼를 선보이는 피렌체의 스타치오네 레오폴다에서 이렇게 말했습니다. 19세기 초 기차역으로 사용된 장소에서, 그는 ‘가장 아름다운 순간’을 영원히 남기기 위해 모델들과 사진을 찍었죠. 필라티는 랜덤 아이덴티티를 통해 과거 프라다와 아르마니, 이브 생 로랑에서 일하던 시절엔 절대 벗어날 수 없었던, 성별과 시즌에 대한 사회와 패션업계의 관습에서 자유를 추구합니다.</span></strong>
							</a>
						</li>
						<li class="li4">
						</li>						
						<li class="li5">
							<a href="#none" title="피플5 게시물">
								<span><img src="img/people/people14.jpg" alt="피플 5게시물 이미지"/></span>
								<strong><b>문빈의 시간</b><span class="hidd">아스트로로서, 배우로서 만월처럼 차오를 문빈의 시간. &lt;보그&gt; 사무실의 내 책상에 ‘아스트로’ 정규 1집 &lt;All Light&gt;이 있다. 앨범이 나온 지난해 1월 즈음 아스트로를 인터뷰했는데, 멤버들이 직접 사인해 보내준 것이다. 감사 편지까지 써준 차은우와 윤산하를 비롯해 모든 멤버가 좋았지만, 개인적으로는 문빈이 기억에 남았다. 늦은 저녁, 인터뷰하던 문빈이 고민을 얘기하다 눈물을 흘렸기 때문이다. 느닷없이 맞닥뜨린 ‘순수’가 감동인 동시에 안쓰러운 마음이 일었다. 연습생 생활만 8년을 버텨낸 친구이기에 극복하리라 믿었는데, 지난해 11월 문빈은 아스트로의 미니 6집 &lt;Blue Flame&gt;을 발표하면서 활동을 잠정 중단했다. </span></strong>
							</a>
						</li>
						<li class="li6">
							<a href="#none" title="피플6 게시물">
								<span><img src="img/people/people15.jpg" alt="피플 6게시물 이미지"/></span>
								<strong><b>제니와 쿠마</b><span class="hidd">‘제니(Jennie)’는 지난 몇 년간 가장 파격적 존재감을 드러낸 고유명사였다.  제니가 &lt;보그&gt;와 처음 만난 건 스포티즘 컨셉의 블랙핑크 화보 촬영장에서였다. 아찔한 추위 가운데 이태원 서핑 바와 한강공원을 오가며 오밤중까지 진행된 촬영이었다. 제니가 카메라 앞에선 180도 다른 인물로 변하던 순간만큼은 지금도 기억이 또렷하다. 뷰파인더를 응시하며 오닉스처럼 빛나는 눈빛을 보내는 건, 뭐든 열심히 해야 하는 신인 뮤지션의 열정 혹은 패기처럼 보이지 않았다. 오래 축적해온 고유한 아우라라고 해도 될 만큼 능수능란해 보였다. “처음 사람들 앞에서 노래하고 춤췄을 때가 언제였는지 정확히 기억나진 않아요.</span></strong>
							</a>
						</li>
						<li class="li7">
							<a href="#none" title="피플 메인 게시물">
								<span><img src="img/people/people17.jpg" alt="피플 5게시물 이미지"/></span>
								<strong><b>고티에 연대기</b><span class="hidd">장 폴 고티에의 패션 인생이 대단원의 막을 내렸다. 패션 에디터 해미시 보울스가 기억하는 장 폴 고티에와의 기막힌 추억. 장 폴 고티에(Jean Paul Gaultier)의 마지막 오뜨 꾸뛰르 패션쇼가 열렸다. 그 런웨이를 바라보는 영광스러운 자리에 앉아 있으니 내 삶이 주마등처럼 눈앞에서 지나가는 것 같았다. 내가 고티에 패션쇼를 처음 본 것은 센트럴 세인트 마틴 아트 스쿨에서 패션을 전공하던 풋내기 시절이었다. 갓 스물이 넘은 나이였지만, 나는 이미 런던에서 발행되는 잡지 &lt;하퍼스 앤 퀸&gt;의 파트타임 패션 에디터로 활동하고 있었다. 흔한 일은 아니지만, 동시에 호주판 &lt;하퍼스 바자&gt;의 런던 &amp; 파리 에디터로도 일하고 있었다. </span></strong>
							</a>
						</li>
						<li class="li8">
							<a href="desc/desc06.php" title="피플8 게시물">
								<span><img src="img/people/people16.jpg" alt="피플 8게시물 이미지"/></span>
								<strong><b>지수의 입술</b><span class="hidd">유성이 빛을 발하는 시간은 수십 분의 1초에서 수 초 사이. 그 찰나의 아름다움을 지수의 입술에 담았다. ‘디올 포에버 스킨 글로우 24H 웨어 스킨-케어링 파운데이션 글로우 피니쉬’로 광채를 머금은 피부를 표현하고 우아한 말린 장밋빛 ‘디올 어딕트 스텔라 헤일로 샤인 #667 핑크 스타’로 입술을 칠한다. 검정 마스카라 ‘디올쇼 아이코닉 오버컬 #090 블랙’을 여러 번 덧칠해 펑키한 청키 래시를 연출하고 ‘디올 백스테이지 로지 글로우 #001 핑크’를 브러시를 이용해 양 볼에 살짝 쓸어 은은한 하이라이트 효과를 연출했다.</span></strong>
							</a>
						</li>
					</ul>
					<ul class="hoverArea">
						<li class="li0">
							<a href="#" title="피플0 게시물">
								<span><img src="img/people/people03.jpg" alt="피플 0게시물 이미지"/></span>
							</a>
						</li>						
						<li class="li1">
							<a href="#" title="피플1 게시물">
								<b></b><span></span>
								<i>+  자세히 보기  +</i>
							</a>
						</li>
						<li class="li2">
							<a href="#" title="피플2 게시물">
								<span><img src="img/people/people05.jpg" alt="피플 2게시물 이미지"/></span>
							</a>
						</li>
						<li class="li3">
							<a href="#" title="피플3 게시물">
								<span><img src="img/people/people13.jpg" alt="피플 3게시물 이미지"/></span>
							</a>
						</li>
						<li class="li4">
							<a href="#" title="피플4 게시물">
								<span><img src="img/people/people14.jpg" alt="피플 4게시물 이미지"/></span>
							</a>
						</li>	
					</ul>
				</div>
			</section>
		</div>
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
