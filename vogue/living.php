<?php
	include "00_conn.php";

	session_cache_expire(15);
	session_start();
	


?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>living</title>
  <meta charset="utf-8"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <style>
		@font-face{font-family:"roman";src:url("font/Pistilli-Roman.woff");}
		@font-face{font-family:"romanT";src:url("font/Chronicle Display Roman.woff");}
		*{margin:0; padding:0;}
		li{list-style:none;}
		a:link, a:visited{text-decoration:none; color:#000;}

		#wrap{min-width:1025px; width:100%; position:relative; overflow:hidden;}
	
		
		
		
		
		
		
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
		#gnb{width:53%; height:100%; background-color:rgba(0, 0, 0, 1);}
		
		

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
		#container{width:100%; overflow:hidden; position:relative; margin-top:100px; padding-bottom:50px;}

		
		h3{position:absolute; width:1px; height:1px; font-size:1px; line-height:0; left:-9999px; overflow:hidden;}


		.sectTitle{width:500px; height:80px; line-height:80px; color:#000; font-size:30px; text-transform:capitalize; font-weight:400; text-align:center; font-family:roman; margin:100px auto 0; font-size:55px;}




	/*##### container / gps ############*/
		#gps{position:absolute; left:10%; top:200px;}
		#gps li{display:inline; font-size:12px;}



	/*############  container / cate ###########*/
		.cate{width:100%; padding:20px 0 30px; text-align:center; border-bottom:2px solid #eee;}
		.cate li{display:inline-block; padding:0 5px; font-size:18px; font-weight:100;}
		
		.cate a{padding:0 5px; color:#333;}
		.cate .selcted{color:#f00;}

		.cate a:hover{color:#f00;}

	/*########### cotent #####################*/
		#content{width:100%; max-width:1200px; min-width:1000px; margin:30px auto;}
		#content ul{width:100%;}
		#content ul li{width:33%; height:500px; float:left; position:relative; overflow:hidden;}
		#content ul li a{display:block; position:absolute; left:50%; top:50%; border:20px solid #f00; width:100%; height:500px; background-origin:border-box; transform:translate(-50%, -50%);
		background-image: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 40%, rgba(0,0,0,0.65) 80%, rgba(0,0,0,0.65) 100%); 
		background-image: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 40%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.65) 100%);
		background-image: -o- linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 40%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.65) 100%);
		background-image: -ms- linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 40%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.65) 100%);
		}
		#content ul li img{height:120%; position:absolute; left:50%; top:50%; transform:translate(-50%, -50%);}
		#content ul li strong{width:calc(100% - 40px); text-align:center; position:absolute; left:50%; bottom:50px; font-size:32px; font-weight:400; color:#fff; letter-spacing:-2px; transform:translatex(-50%);}
		

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
			

			// 게시물 호버 기능
			$("#content a").mouseover(function(){
				var wid=$(this).next().width();
				$(this).stop().animate({"width":wid,"height":"460px"},200,"linear");
			});
			$("#content a").mouseout(function(){
				$(this).stop().animate({"width":"100%","height":"500px"},100,"linear");
			});
			

			// 게시물 분류 구분
			$(".cate li a").bind("click focusin",function(){
				$(".cate li a").removeClass();
				$(this).addClass("selected");
				var title=$(this).attr("title");
				if (title=="all")
				{
					$("#content ul li").stop().fadeIn(300,"linear");	
				}
				else{
					$("#content ul li").stop().fadeOut(200,"linear");	
					$("."+title).stop().fadeIn(300,"linear");
				}
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
			<h2 class="sectTitle">living</h2>
			<ul id="gps">
				<li><a href="index.php" title="vogue">VOGUE</a>&nbsp;></li>
				<li><a href="living.php" title="living">LIVING</a>&nbsp;></li>
				<li>전체</li>
			</ul>
			<ul class="cate">
				<li><a class="selcted" href="#" title="all">전체</a></li>
				<li><a href="#" title="travel">여행</a></li>
				<li><a href="#" title="food">음식</a></li>
				<li><a href="#" title="culture">문화</a></li>
				<li><a href="#" title="interior">인테리어</a></li>
				<li><a href="#" title="tech">테크</a></li>
			</ul>
			<section id="content">
				<h3>게시물 영역</h3>
				<ul>
					<li class="culture">
						<img src="img/living/living20_00.jpg" alt="게시물 이미지0"/><a href="#none" title="게시물 가기"></a><strong>눈에 띄는 앨범 아트워크</strong>
					</li>
					<li class="culture">
						<img src="img/living/living18_00.jpg" alt="게시물 이미지1"/><a href="#none" title="게시물 가기"></a><strong>극장에 간다면 이 영화</strong>
					</li>
					<li class="culture">
						<img src="img/living/living17_00.jpeg" alt="게시물 이미지2"/><a href="#none" title="게시물 가기"></a><strong>바다를 살리기 위한 골든타임</strong>
					</li>
					<li class="culture">
						<img src="img/living/living01_00.jpg" alt="게시물 이미지3"/><a href="#none" title="게시물 가기"></a><strong>1966 그때 그 영화</strong>
					</li>
					<li class="culture">
						<img src="img/living/living00_00.jpg" alt="게시물 이미지4"/><a href="#none" title="게시물 가기"></a><strong>위기의 핀란드를 이끈 산나 마린은 누구?</strong>
					</li>
					<li class="food">
						<img src="img/living/living02_00.jpg" alt="게시물 이미지5"/><a href="#none" title="게시물 가기"></a><strong>인생 복숭아를 찾아서</strong>
					</li>
					<li class="tech interior">
						<img src="img/living/living03_00.jpg" alt="게시물 이미지6"/><a href="#none" title="게시물 가기"></a><strong>한달만 산다:요즘 물건의 수명</strong>
					</li>
					<li class="interior">
						<img src="img/living/living04_00.jpg" alt="게시물 이미지7"/><a href="#none" title="게시물 가기"></a><strong>이탤리언 빈티지 한점</strong>
					</li>
					<li class="culture">
						<img src="img/cont2.jpg" alt="게시물 이미지8"/><a href="#none" title="게시물 가기"></a><strong>7월에 개봉하는 여자영화 4</strong>
					</li>
					<li class="food">
						<img src="img/living/living05_00.jpg" alt="게시물 이미지9"/><a href="#none" title="게시물 가기"></a><strong>마르쉐 시대를 사는법</strong>
					</li>
					<li class="culture">
						<img src="img/cont14.jpg" alt="게시물 이미지10"/><a href="#none" title="게시물 가기"></a><strong>지루한 세상을 구하러온 흑인 여배우들</strong>
					</li>
					<li class="culture">
						<img src="img/living/living06_04.png" alt="게시물 이미지11"/><a href="#none" title="게시물 가기"></a><strong>집에서 보는 콘서트,뮤지컬,영화</strong>
					</li>
					<li class="food">
						<img src="img/living/living07_00.png" alt="게시물 이미지12"/><a href="#none" title="게시물 가기"></a><strong>서울의 인기 젤라테리아 지도</strong>
					</li>
					<li class="culture">
						<img src="img/living/living09_00.jpg" alt="게시물 이미지13"/><a href="#none" title="게시물 가기"></a><strong>초팽 포레스트</strong>
					</li>
					<li class="interior">
						<img src="img/living/living10_00.jpg" alt="게시물 이미지14"/><a href="#none" title="게시물 가기"></a><strong>프레임 아트 대신 블랭킷</strong>
					</li>
					<li class="food">
						<img src="img/living/living12_06.jpg" alt="게시물 이미지15"/><a href="#none" title="게시물 가기"></a><strong>McDonald's Best BURGER</strong>
					</li>
					<li class="culture interior">
						<img src="img/living/living16_00.jpg" alt="게시물 이미지16"/><a href="#none" title="게시물 가기"></a><strong>MZ세대를 위한 가구 디자이너</strong>
					</li>
					<li class="travel">
						<img src="img/people/people20.jpg" alt="게시물 이미지16"/><a href="#none" title="게시물 가기"></a><strong>셀럽이 사랑한 휴양지 6</strong>
					</li>
					<li class="tech">
						<img src="img/living/living33.jpg" alt="게시물 이미지16"/><a href="#none" title="게시물 가기"></a><strong>스펙타클한 세상</strong>
					</li>
				</ul>
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
