<?php
	include "00_conn.php";

	session_cache_expire(15);
	session_start();
	


?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>fashion</title>
  <meta charset="utf-8"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
		@font-face{font-family:"roman";src:url("font/Pistilli-Roman.woff");}
		@font-face{font-family:"romanT";src:url("font/Chronicle Display Roman.woff");}
		*{margin:0; padding:0;}
		li{list-style:none;}
		a:link, a:visited{text-decoration:none; color:#000;}

		#wrap{min-width:1025px; max-width:1920px; width:100%; margin:0 auto; position:relative; overflow:hidden;}
	
		
		
		
		
		
		
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
		#gnb{width:53%; height:100%; background-color:rgba(0, 0, 0, 1); border-radius:0 300px 300px 0;}
		
		

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
		#container{width:100%; overflow:hidden; position:relative; padding-top:150px;}

		
		h3{position:absolute; width:1px; height:1px; font-size:1px; line-height:0; left:-9999px; overflow:hidden;}


		.sectTitle{width:500px; height:120px; margin:0 auto; line-height:80px; color:#000; font-size:45px; text-transform:uppercase; text-align:center; font-family:roman; font-weight:400; letter-spacing:10px;}




	/*##### container / gps ############*/
		#gps{position:absolute; left:9%; top:250px;}
		#gps li{display:inline; font-size:12px;}



	/*############  container / cate ###########*/
		.cate{width:100%; padding-top:100px; text-align:center; display:none;}
		.cate li{display:inline-block; padding:0 20px; font-size:20px;}
		
		.cate a{padding:0 10px; color:#000;}
		.cate li:first-child a{color:#f00;}

		.cate a:hover{color:#f00;}
		


	/*##### container / subVisual ##########*/
		#subVisual{width:100%; height:720px; padding:30px 0; font-family:romanT, 'Noto Serif KR', serif;}
		#subVisual ul{width:1600px; height:100%; margin:0 auto;}
		#subVisual ul li{width:47%; height:100%; padding-right:3%; float:left;}
		#subVisual ul li a{display:block; width:100%; height:100%; color:#000;}
		#subVisual ul li a:hover{text-shadow:5px 5px 10px rgba(255,0,0,0.5);}
		
		#subVisual ul li:first-child .picArea{display:block; width:60%; float:left; height:500px; overflow:hidden;}
		#subVisual ul li:first-child b{display:block; width:40%; float:left; height:500px; background-color:#f7f2f1;}
		#subVisual ul li:first-child b strong{display:block; font-size:70px; font-weight:100; padding:5% 0 0 10%; height:80%; font-style:italic; color:#a33;}
		#subVisual ul li:first-child b i{display:block; height:10%; font-size:30px; font-weight:100; color:#333; padding:10% 0 0 10%;}
		#subVisual ul li:last-child .picArea{display:block; width:100%; height:500px; overflow:hidden;}
		
		#subVisual ul li .titleZ{display:block;  width:100%; height:200px; font-weight:400; clear:both;}
		#subVisual ul li .titleZ strong{display:block; padding-top:2%; height:50px; font-weight:400; font-size:25px;}
		#subVisual ul li .titleZ i{display:block; height:80px; width:100%; font-style:normal; letter-spacing:1px; line-height:25px; color:#000; font-size:16px;}
		#subVisual ul li .titleZ .red{display:block; text-align:left; color:#f00; text-decoration:underline; font-size:14px;}
		#subVisual ul li a img{width:100%;}
		#subVisual ul li:last-child img{margin-top:-200px;}
		
		/*float 끊기*/
		#subVisual ul:after{content:""; display:block; clear:both;}


	/*######container / store ######################*/
		
		#store{width:1600px; margin:0 auto; height:400px; position:relative; left:0; top:0;}
		#store .storeT{width:30%; height:100%; float:left;}
		#store .storeT p:first-child{color:#aaa; width:100%; height:30px; padding-top:100px; letter-spacing:5px;}
		#store .storeT h4{height:70px; font-size:50px; line-height:70px; font-family:romanT; font-weight:400; padding-bottom:20px;}
		#store .storeT p:last-child{height:80px; font-family:romanT; letter-spacing:2px;}
		#store .itemList{width:70%; height:100%; float:left; overflow:hidden;}
		#store ul{width:200%; height:100%;}
		#store ul li{width:12.5%; height:100%; float:left;}
		#store ul li .itemP{width:95%; margin-right:5%; height:80%; overflow:hidden; position:relative;}
		#store ul li .itemP img{height:150%; transform:translate(-50%, -50%); position:absolute; top:50%; left:50%;}
		#store ul li .itemD{width:95%; padding-right:5%; height:20%; text-align:center; font-family:'Noto Serif KR', serif; line-height:30px; letter-spacing:2px;}
		#store .storeBtn p{position:absolute; width:50px; height:50px; background-color:#fff; font-size:30px; text-align:center; opacity:0.4; top:40%; transform:translatey(-50%); cursor:pointer;}
		#store .storeBtn .leftB{left:30%; display:none;}
		#store .storeBtn .rightB{right:1%;}
		#store:after, #store ul:after{content:""; display:block; clear:both;}

	/*########### container / section_fashion #########*/
		#section_fashion{width:1600px; height:750px; margin:0 auto; padding-top:100px; padding-bottom:50px; border-bottom:1px solid #ccc; position:relative;}
		#section_fashion ul{width:100%; height:600px;}
		#section_fashion ul li{width:15%; height:100%; overflow:hidden; float:left; position:relative; outline:3px solid #fff;}
		#section_fashion ul li:first-child{width:55%;}
		#section_fashion ul li a{display:block; width:100%; height:100%;}
		#section_fashion img{width:900px; position:absolute; top:83%; left:50%; transform:translate(-50%, -50%);}
		#section_fashion div{width:100%; height:150px;}
		#section_fashion div h4{width:40%; height:100%; text-indent:10px; font-size:50px; font-family:romanT; float:left; line-height:150px; font-weight:400;}
		#section_fashion div .descS{width:60%; height:100%; float:left; font-family:'Noto Serif KR', serif;}
		#section_fashion div .descS p:first-child{height:50px; padding-top:40px; font-size:16px; letter-spacing:1px;}
		#section_fashion div .descS p:last-child{height:30px; padding-bottom:30px;}
		#section_fashion div .descS p:last-child a{color:#f00;}
		#section_fashion .fashionT{position:absolute; top:60px; left:20px; text-transform:uppercase; font-size:60px; font-family:roman; font-weight:400; text-shadow:2px 2px 5px #500;}

	/*############  container / section_sub ###########*/
		#section_sub{width:100%;}
		#section_sub .subArea{width:100%; overflow:hidden;}
		#section_sub article{width:1200px; height:600px; margin:50px auto; background-color:pink; background-attachment:fixed; background-size:cover; background-repeat:no-repeat;}
		#section_sub article p{width:1200px; height:600px; margin:0 auto; position:relative;}
		#section_sub article p a{display:block; width:100%; height:100%; position:absolute; left:50%; top:50%; transform:translate(-50%, -50%); overflow:hidden;}
		#section_sub article p .imgA{display:block; width:50%; height:80%; position:absolute; top:10%; left:2%; overflow:hidden; background-color:red;}
		#section_sub article p .imgA img{height:100%;}
		#section_sub article p .descZ{display:block; width:40%; height:440px; margin:50px; padding:30px 30px 30px 50%; background-color:#fff;}
		#section_sub article p .descZ b{display:block; height:30px; font-family:romanT; font-weight:100; color:#f55; letter-spacing:3px;}
		#section_sub article p .descZ strong{display:block; height:100px; line-height:100px; font-size:40px; font-family:'Noto Serif KR', serif;}
		#section_sub article p .descZ em{display:block; height:280px; font-style:normal; font-family:'Noto Serif KR', serif; letter-spacing:1px; line-height:32px;}
		#section_sub article p .descZ i{display:block; height:30px; text-align:right; color:#f00; font-style:normal;}
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
		// ####################### 개인정보 취급방침 클릭시 새창으로 띄워주기
			$(".policyM").click(function(){
				window.open("policy.php","_blank","width=1200px, height=700px, left=200, top=50,");	
				return false;
			});

		// ############## store 버튼 기능
			$(".leftB").click(function(){
				$("#store ul").animate({"marginLeft":"0"},500,"linear");
				$(this).hide();
				$(this).next().show();
			});
			$(".rightB").click(function(){
				$("#store ul").animate({"marginLeft":(-$("#store ul").width()/2)},500,"linear");
				$(this).hide();
				$(this).prev().show();
			});

		/*############### fashoion 아코디언 기능 #########*/
			$("#section_fashion ul li").mouseover(function(){
				$("#section_fashion ul li").stop().animate({"width":"15%"},500,"linear");
				$(this).stop().animate({"width":"55%"},500,"linear");
			});
			
		/*################ subArea mouseover 기능 ########*/
			$("article a").mouseover(function(){
				$(this).find(".descZ").stop().animate({"backgroundColor":"rgba(255,255,255,0.5)"},200,"linear");
				$(this).parent().parent().stop().animate({"width":"100%"},200,"linear");
			});

			$("article a").mouseout(function(){
				$(this).find(".descZ").stop().animate({"backgroundColor":"rgba(255,255,255,1)"},200,"linear");
				$(this).parent().parent().stop().animate({"width":"1200px"},200,"linear");
			});

			// 자동으로 백그라운드 설정
			var no0=$("#section_sub .subArea article:last").find("a").attr("title").substring(3);
			for (var i=0; i<no0+1; i++)
			{
				if (i<10)
				{
					$("#section_sub .subArea article:eq("+i+")").css("backgroundImage","url('img/fashion/faD0"+i+"_bg.jpg')");
				}
				else if (i>9)
				{
					$("#section_sub .subArea article:eq("+i+")").css("backgroundImage","url('img/fashion/faD"+i+"_bg.jpg')");
				}
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
			<h2 class="sectTitle">fashion</h2>
			<ul id="gps">
				<li><a href="index.php" title="vogue">VOGUE</a>&nbsp;></li>
				<li><a href="fashion.php" title="fashoin">FASHION</a>&nbsp;></li>
				<li>전체</li>
			</ul>
			<ul class="cate">
				<li><a href="#" title="전체">전체</a></li>
				<li><a href="#" title="트렌드">트렌드</a></li>
				<li><a href="#" title="쇼핑">쇼핑</a></li>
				<li><a href="#" title="피플">피플</a></li>
				<li><a href="#" title="화보">화보</a></li>
			</ul>
			<div id="store">
				<div class="storeT">
					<p>7 NEW ITEMS</p>
					<h4>Store Plus</h4>
					<p>Get ahead of the style curve with our latest arrivals</p>
				</div>
				<div class="itemList">
					<ul>
						<li>
							<p class="itemP"><a href="#none" title="store1"><img src="img/fashion/store00.jpg" alt="store 이미지1"/></a></p>
							<p class="itemD">PERFECT LIP CARE</p>
						</li>
						<li>
							<p class="itemP"><a href="#none" title="store2"><img src="img/fashion/store01.jpg" alt="store 이미지2"/></a></p>
							<p class="itemD">TIMEPIECE FOR JAMES BOND 2020</p>
						</li>
						<li>
							<p class="itemP"><a href="#none" title="store3"><img src="img/fashion/store03.jpg" alt="store 이미지3"/></a></p>
							<p class="itemD">NEW WOMAN IDENTITY</p>
						</li>
						<li>
							<p class="itemP"><a href="#none" title="store4"><img src="img/fashion/store02.jpg" alt="store 이미지4"/></a></p>
							<p class="itemD">THIS IS BURBERRY</p>
						</li>
						<li>
							<p class="itemP"><a href="#none" title="store5"><img src="img/fashion/store04.jpg" alt="store 이미지5"/></a></p>
							<p class="itemD">HELLO VIVA! NICE TO MEET YOU!</p>
						</li>
						<li>
							<p class="itemP"><a href="#none" title="store6"><img src="img/fashion/store05.jpg" alt="store 이미지6"/></a></p>
							<p class="itemD">White Rose for Bright Skin</p>
						</li>
						<li>
							<p class="itemP"><a href="#none" title="store7"><img src="img/fashion/store06.png" alt="store 이미지7"/></a></p>
							<p class="itemD">Tiffany T1</p>
						</li>
					</ul>
				</div>
				<div class="storeBtn">
					<p class="leftB">&lt;</p>
					<p class="rightB">&gt;</p>
				</div>
			</div>
			<section id="section_fashion">
				<h3>sectionMain</h3>
				<ul>
					<li><a href="#none" title="화보1"><img src="img/fashion/ac00.jpg" alt="화보 이미지1"/></a></li>
					<li><a href="#none" title="화보2"><img src="img/fashion/ac04.jpg" alt="화보 이미지2"/></a></li>
					<li><a href="#none" title="화보3"><img src="img/fashion/ac05.jpg" alt="화보 이미지3"/></a></li>
					<li><a href="#none" title="화보4"><img src="img/fashion/ac06.jpg" alt="화보 이미지4"/></a></li>
				</ul>
				<div>
					<h4>September Issue</h4>
					<div class="descS">
						<p>23개 브랜드의 뉴 룩, 뉴 액세서리, 뉴 스타일! &lt;보그&gt;가 포스트 코로나 시대를 살아가는 우리 여자들의 가을을 정의한다.</p>
						<p><a href="#none" title="view">+ view gallery +</a></p>
					</div>
				</div>
				<h4 class="fashionT">pictorial</h4>
			</section>
			<div id="subVisual">
				<ul>
					<li>
						<a href="#none" title="패션 메인 정보">
							<span class="picArea"><img src="img/fashion/fashion29.jpg" alt="패션 메인 이미지"/></span>
							<b>
								<strong>HOT<br/>Issue</strong>
								<i>in Korea</i>
							</b><!--색상 F7F2F1-->
							<span class="titleZ">
								<strong>아이린, 찬열 그리고 Prada</strong>
								<i>프라다의 새로운 앰버서더로 선정된 아이린과 찬열. 프라다 2020 F/W 컬렉션과 함께한 감각적인 패션 필름을 &lt;보그&gt;코리아에서 가장 먼저 공개한다.</i>
								<span class="red">자세히 보기</span>
							</span>
						</a>
					</li>
					<li>
						<a href="#none" title="패션 메인 정보">
							<span class="picArea"><img src="img/fashion/fashion31.png" alt="패션 메인 이미지"/></span>
							<span class="titleZ">
								<strong>올 가을엔 '집콕 Fashion'</strong>
								<i>반가운 트렌드가 찾아왔습니다. 이름하여 ‘안티 라운지 웨어’. 집콕으로 즐기던 라운지 웨어가 데일리 웨어의 새로운 아이디어로 떠오른 거죠. </i>
								<span class="red">자세히 보기</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<section id="section_sub">
				<h3>fashion 게시물 영역</h3>
				<div class="subArea">
					<article>
						<h3>수지의 숨겨진 이미지</h3>
						<p>
							<a href="#none" title="게시물0">
								<span class="imgA"><img src="img/fashion/faD00.jpg" alt="fashion0 이미지"/></span>
								<span class="descZ">
									<b>Fashion | People</b>
									<strong>수지의 숨겨진 이미지</strong>
									<em>우리의 6월호 커버 모델 수지를 보면, 다들 여러 이미지가 연상될 것이다. 걸 그룹 미쓰에이 중 한 명으로 음악 방송에서 ‘Bad Girl Good Girl’을 파워풀하게 부르던 모습, 영화 &lt;건축학개론&gt;에서의 국민 첫사랑 서연, 드라마 &lt;배가본드&gt;에서 테러범을 추격하는 국정원 요원, ‘인간 디올’이라는 헤드라인으로 포털을 장식한 공항 패셔니스타 혹은 ‘쌩얼’로 집 안을 돌아다니고 친구들과 소주 한잔을 털어 넣는 ‘오프더레코드’ 영상의 한 장면. </em>
									<i>Read More +</i>
								</span>
							</a>
						</p>
					</article>
					<article>
						<h3>JOY GRYSON</h3>
						<p>
							<a href="#none" title="게시물1">
								<span class="imgA"><img src="img/fashion/faD01.jpg" alt="fashion1 이미지"/></span>
								<span class="descZ">
									<b>Fashion</b>
									<strong>JOY GRYSON</strong>
									<em>여성의 아름다움은 자신만의 아이덴티티를 충분히 대변할 수 있는 내면의 당당함과 자신감으로부터 시작된다는 철학을 가지는 디자이너 ‘조이 그라이슨(Joy Gryson)’이 전개하는 뉴욕 컨템포러리 디자이너 브랜드 ‘조이그라이슨(JOY GRYSON)’. 그녀는 미국을 대표하는 패션 브랜드 코치, 캘빈 클라인, 마크 제이콥스 등에서 가방 기획 총괄 디렉터로 활약한 20년간의 패션 하우스 경험과 노하우를 바탕으로 2006년 뉴욕에서 자신의 레이블 ‘조이그라이슨(JOY GRYSON)’을 런칭했다.</em>
									<i>Read More +</i>
								</span>
							</a>
						</p>
					</article>
					<article>
						<h3>이상한 나라의 앨리스</h3>
						<p>
							<a href="#none" title="게시물2">
								<span class="imgA"><img src="img/fashion/faD02.jpg" alt="fashion2 이미지"/></span>
								<span class="descZ">
									<b>Fashion | People</b>
									<strong>이상한 나라의 앨리스</strong>
									<em>기쁠 희(喜), 착할 선(善). 대한민국에서 가장 보편적인 이름이 ‘톱스타’와 같은 의미로 통하도록 만든 건 오직 김희선의 재능과 능력이었다. 20여 년 동안 김희선은 유연하게 생존했고 변함없는 영향력을 대중에게 끊임없이 돌려줬다. 시대가 선망하는 여전한 스타는 재기 발랄하게 살면서, 우리 여자들에게 주도적 삶이 무엇인지 몸소 보여준다.</em>
									<i>Read More +</i>
								</span>
							</a>
						</p>
					</article>
					<article>
						<h3>New Season Chanel</h3>
						<p>
							<a href="#none" title="게시물3">
								<span class="imgA"><img src="img/fashion/faD03.jpg" alt="fashion3 이미지"/></span>
								<span class="descZ">
									<b>Fashion</b>
									<strong>New Season Chanel</strong>
									<em>월, 패션계의 새 시즌이 돌아왔습니다. 버지니 비아르는 샤넬의 2020 F/W 컬렉션에 대해 이렇게 설명합니다. “매우 심플하고 순수한 힘입니다. 과장됨을 배제한 로맨티시즘이죠. 군더더기 없는 감정을 담았습니다.” 런웨이 쇼에는 움직임과 공기만 있을 뿐, 어떠한 정해진 틀도 없다고 비아르는 강조합니다. 자유, 에너지, 완벽함을 향한 열정만 존재하죠.</em>
									<i>Read More +</i>
								</span>
							</a>
						</p>
					</article>
					<article>
						<h3>THIS IS HYORIWOOD!</h3>
						<p>
							<a href="#none" title="게시물4">
								<span class="imgA"><img src="img/fashion/faD04.jpg" alt="fashion4 이미지"/></span>
								<span class="descZ">
									<b>Fashion</b>
									<strong>THIS IS HYORIWOOD!</strong>
									<em>‘윤리적 골드’를 지향하는 쇼파드와 의식 있는 삶을 추구하는 이효리가 만났다. 글래머러스한 할리우드 스타로 변신한 그녀가 선택한 쇼파드 워치 & 주얼리. 아름다움에 ‘윤리적 가치’를 더하는 두 타임리스 아이콘이 그린 매혹적인 패션 드라마.하이 주얼리의 명가 쇼파드(Chopard)와 독보적인 패션 아이콘 이효리가 만났다. 존재만으로 눈부시게 빛나는 이들에게는 의미 있고 근사한 공통점이 하나 더 있다. 바로 사회와 환경을 존중하며 ‘윤리적 가치’를 소중히 여긴다는 것이다.</em>
									<i>Read More +</i>
								</span>
							</a>
						</p>
					</article>
					<article>
						<h3>이정재x정우성, &lt;헌트&gt;</h3>
						<p>
							<a href="#none" title="게시물5">
								<span class="imgA"><img src="img/fashion/faD05.jpg" alt="fashion0 이미지"/></span>
								<span class="descZ">
									<b>Fashion</b>
									<strong>이정재x정우성, &lt;헌트&gt;</strong>
									<em>오랜 우정을 자랑하는 대표 영화배우 정우성과 이정재. 두 배우가 한 영화에 출연한다는 소식에 충무로가 들썩이고 있습니다. 이정재가 연출과 주연을 맡은 영화 &lt;헌트&gt;에 정우성이 출연합니다. 정우성과 이정재는 1999년 영화 &lt;태양은 없다&gt;에 함께 출연하며 절친이 되었는데요, 한 작품에 출연하는 건 그때 이후 무려 21년 만입니다.</em>
									<i>Read More +</i>
								</span>
							</a>
						</p>
					</article>
				</div>
			</section>
		</div>
		<footer id="footer">
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
		</footer>
	</div>
 </body>
</html>
