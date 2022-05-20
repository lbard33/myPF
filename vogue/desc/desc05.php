<?php
	include "../00_conn.php";

	session_cache_expire(15);
	session_start();
	


?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>vogue_desc</title>
  <meta charset="utf-8"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/jquery-ui.min.js"></script>
  <style>
	/* ############ 초기화 #############*/

		@font-face{font-family:"roman";src:url("../font/Pistilli-Roman.woff");}
		@font-face{font-family:"romanT";src:url("../font/Chronicle Display Roman.woff");}
		*{margin:0; padding:0;}
		body, div, p, dl, dt, dd, article, ul, ul li, footer, header{margin:0; padding:0;}
		header, nav, article, section, footer{display:block;}

		li{list-style-type:none;}
		a:link, a:visited{text-decoration:none; color:#000;}
		img{border:none;}
	
		
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
		
	/*##################### container(전체 영역) ########################*/
		#container{width:90%; max-width:1920px; margin:0 auto;/*background-color:#00f;*/ position:relative;}
		#content{width:100%; overflow:hidden;}
		#content .main{width:100%; position:relative; margin-top:200px;}
		#content .main:after{content:""; display:block; clear:both;}

		
		/*###### descTitle ##########*/
		#content .main .descTitle{display:block; width:30%; text-align:left; float:left; padding:150px 3% 0 4%; text-align:right;}
		#content .main .descTitle span{display:block; width:100%; text-transform:uppercase; letter-spacing:10px;}
		#content .main .descTitle span a{color:#f30; }
		#content .main .descTitle strong{display:block; width:100%; font-size:50px; padding:20px 0; font-family:'Pistilli', 'Playfair Display', 'Nanum Barun Gothic', "Apple SD Gothic Neo", Sans-serif;}
		#content .main .descTitle i{display:block; width:100%; font-style:normal; letter-spacing:8px; color:#aaa;}
		#content .main .descTitle em{display:block; width:80%; padding-left:20%; font-size:15px; font-style:normal; padding-top:20px; color:#333;}
		
		/*######## mainImg #########*/
		#content .main .mainImg{width:53%; margin:0 7% 0 3%; float:left; position:relative;}
		#content .main .mainImg .imgArea{width:100%;}
		#content .main .mainImg .imgArea img{width:100%;}
		#content .main .mainImg .textArea{width:calc(100% - 10px); background-color:rgba(0,0,0,1); font-size:14px; line-height:22px; color:#ccc; padding:15px 5px 5px 5px; position:absolute; left:0; bottom:0;}
		
		/*######## sideDesc ##########*/
		#content .main .sideDesc{width:27%; position:absolute; left:5%; top:700px;}
		#content .main .sideDesc .sideImg{width:110%; position:relative; right:10%; top:0; padding-bottom:10px;}
		#content .main .sideDesc .sideImg img{width:100%;}
		#content .main .sideDesc div{width:80%; padding-left:20%; text-align:right; line-height:32px; color:#777;}
		#content .main .sideDesc .credit{margin-left:35%; width:40%; padding-right:10px; background-color:rgba(230,230,230,0.7);}
		#content .main .sideDesc div h4{color:#333; padding-bottom:20px;}
		#content .main .sideDesc .sideText{width:100%; text-align:left; padding-bottom:120px; line-height:24px; font-size:14px; color:#555;}
		
		

		/*###### content / descdesc ##########*/
		#content .descDesc{width:50%; margin-left:30%; padding:50px 15% 50px 5%; line-height:30px; font-size:15px;}
		#content .descDesc dd{width:100%; padding-bottom:70px;}
		#content .descDesc dd img{width:90%;}
		#content .descImg{text-align:center; width:50%; float:left; margin-bottom:30px;}
		#content .descImgOne{text-align:center; margin-bottom:30px;}
		#content .descImgFour{text-align:center; width:25%; float:left; margin-bottom:30px; outline:1px solid #ccc;}
		#content .descText{width:90%; padding-bottom:50px; font-size:12px; color:#777; margin:0 auto; }
		video{width:100%;}

	/*############ container / others ################################*/
		#others{width:10%; border-top:2px dotted #eee; position:absolute; left:15%; top:2500px; }

		#others li{width:100%; padding:100px 0 100px; border-bottom:2px dotted #eee; text-align:center; font-weight:700; opacity:0.5;}
		#others .otherImg{display:block; width:100%;}
		#others img{width:100%;}
		#others .otherTitle{display:block; width:100%; font-size:14px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}

		#others li:hover{opacity:1;}
	
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
	
		#footerHead .footerV p{background-image:url("../img/company/vo_01.jpg");}
		#footerHead .footerA p{background-image:url("../img/company/al_01.jpg");}
		#footerHead .footerG p{background-image:url("../img/company/gq_01.jpg");}
		#footerHead .footerW p{background-image:url("../img/company/w_01.jpg");}
		
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
				window.open("../policy.php","_blank","width=1200px, height=700px, left=200, top=50,");	
				return false;
			});
		});
  </script>
 </head>
 <body>
	<div id="wrap">
		<div id="header">
			<h1><a href="../index.php" title="VOGUE 메인 사이트"><img src="../img/vogue_logo.png" alt="VOGUE"/></a></h1>
			<div id="hiddenMenu">
				<div class="hiddenLogo">
					<a href="../index.php" title="vogue">
						<img src="../img/vogue_footer_logo.png" alt=" 메인 로고"/>
					</a>
				</div>
				<p class="closeBtn">
					<a href="#" title="메뉴 닫기"><img src="../img/icon/cancel.png" alt="메뉴 닫기"/></a>
					<a class="menu_hover" href="#" title="메뉴 닫기"><img src="../img/icon/cancel0.png" alt="메뉴 닫기"/></a>
				</p>
				<div class="mainH">
					<ul>
						<li><a href="../fashion.php" title="fashion">fashion</a></li>
						<li><a href="../beauty.php" title="beauty">beauty</a></li>
						<li><a href="../living.php" title="living">living</a></li>
						<li><a href="../people.php" title="people">people</a></li>
						<li><a href="../runway.php" title="runway">runway</a></li>
						<li><a href="../subscribe.php" title="subscribe">subscribe</a></li>
					</ul>
				</div>
				<div class="sideH">
					<ul class="sns">
						<li>
							<a href="https://www.instagram.com/VOGUEKOREA/" title="vogue 인스타그램"><img src="../img/icon/sns_instagram1.png" alt="인스타그램 아이콘"/></a>
							<a class="sns_hover" href="https://www.instagram.com/VOGUEKOREA/" title="vogue 인스타그램"><img src="../img/icon/sns_instagram0.png" alt="인스타그램 아이콘"/></a>
						</li>
						<li>
							<a href="https://www.facebook.com/VOGUEkr" title="vogue 페이스북"><img src="../img/icon/sns_facebook1.png" alt="페이스북 아이콘"/></a>
							<a class="sns_hover" href="https://www.facebook.com/VOGUEkr" title="vogue 페이스북"><img src="../img/icon/sns_facebook0.png" alt="페이스북 아이콘"/></a>
						</li>
						<li>
							<a href="https://twitter.com/VogueKorea" title="vogue 트위터"><img src="../img/icon/sns_twitter1.png" alt="트위터 아이콘"/></a>
							<a class="sns_hover" href="https://twitter.com/VogueKorea" title="vogue 트위터"><img src="../img/icon/sns_twitter0.png" alt="트위터 아이콘"/></a>
						</li>
					</ul>
					<dl>
						<dt>company</dt>
						<dd><a href="../company.php" title="회사소개">회사소개</a></dd>
						<dd><a href="../advertising.php" title="광고 및 제휴">광고 및 제휴</a></dd>
						<dd><a class="policyM" href="../policy.php" title="개인정보 처리방침">개인정보 처리방침</a></dd>
					</dl>		
<?php if(empty($_SESSION['username'])){?>
					<p class="red"><a href="../login.php" title="login">Login</a></p>
					<p><a href="../agreement.php" title="sign_up">Sign up</a></p>
<?php } else{?>
					<p style="width:310px;"><a href="../member.php" title="개인설정" style="color:hotpink; font-size:22px; font-weight:700;"><?=$_SESSION['username']?></a><span style="color:#fff; font-weight:700; font-size:20px;">님 이용중</span>&nbsp;&nbsp;&nbsp;<a href="../logout.php" title="로그아웃" style="font-size:18px; color:red; font-weight:700;">&lt;LOGOUT&gt;</a></p>
<?php }?>
				</div>
			</div>
			<div id="header_inner">
				<div id="gnb">				
					<div id="manu_bar">
						<p>
							<a href="#" title="메뉴 오픈"><img src="../img/icon/all_menu.png" alt="메뉴 열기"/></a>
							<a class="menu_hover" href="#" title="메뉴 오픈"><img src="../img/icon/all_menu0.png" alt="메뉴 열기"/></a>
						</p>
					</div>
					<ul>
						<li><a href="../fashion.php" title="fashion">fashion</a></li>
						<li><a href="../beauty.php" title="beauty">beauty</a></li>
						<li><a href="../living.php" title="living">living</a></li>
						<li><a href="../people.php" title="people">people</a></li>
						<li><a href="../runway.php" title="runway">runway</a></li>
						<li><a href="../subscribe.php" title="subscribe">subscribe</a></li>
					</ul>
				</div>
				<div id="lnb">
					<ul class="sns">
						<li>
							<a href="https://www.instagram.com/VOGUEKOREA/" title="vogue 인스타그램"><img src="../img/icon/sns_instagram.png" alt="인스타그램 아이콘"/></a>
							<a class="sns_hover" href="https://www.instagram.com/VOGUEKOREA/" title="vogue 인스타그램"><img src="../img/icon/sns_instagram0.png" alt="인스타그램 아이콘"/></a>
						</li>
						<li>
							<a href="https://www.facebook.com/VOGUEkr" title="vogue 페이스북"><img src="../img/icon/sns_facebook.png" alt="페이스북 아이콘"/></a>
							<a class="sns_hover" href="https://www.facebook.com/VOGUEkr" title="vogue 페이스북"><img src="../img/icon/sns_facebook0.png" alt="페이스북 아이콘"/></a>
						</li>
						<li>
							<a href="https://twitter.com/VogueKorea" title="vogue 트위터"><img src="../img/icon/sns_twitter.png" alt="트위터 아이콘"/></a>
							<a class="sns_hover" href="https://twitter.com/VogueKorea" title="vogue 트위터"><img src="../img/icon/sns_twitter0.png" alt="트위터 아이콘"/></a>
						</li>
					</ul>
					<ul class="sideMenu">
						<li>
							<a href="#" title="사이드 메뉴">side menu</a>
							<ol class="company">
								<li><a href="../company.php" title="회사소개">회사소개</a></li>
								<li><a href="../advertising.php" title="광고 및 제휴">광고 및 제휴</a></li>
								<li><a class="policyM" href="../policy.php" title="개인정보 처리방침">개인정보 처리방침</a></li>
							</ol>
						</li>
<?php if(empty($_SESSION['username'])){?>
						<li>|</li>
						<li class="login"><a href="../login.php" title="login">Login</a></li>
<?php } else{?>
						<li><a href="../member.php" title="개인설정" style="color:hotpink; font-size:16px; font-weight:700;"><?=$_SESSION['username']?></a><span style="font-weight:700;">님  접속</span>&nbsp;&nbsp;&nbsp;<a href="../logout.php" title="로그아웃" style="font-size:14px; color:red; font-weight:700;">LogOut</a></li>
<?php }?>
					</ul>
					<div class="searchArea">
						<p><img src="../img/icon/search_icon.png" alt="찾기 아이콘"/></p>
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
				<h2 class="scrollLogo"><a href="../index.php" title="VOGUE 메인 사이트">VOGUE</a></h2>
				<div id="gnbS">				
					<ul>
						<li><a href="../fashion.php" title="fashion">fashion</a></li>
						<li><a href="../beauty.php" title="beauty">beauty</a></li>
						<li><a href="../living.php" title="living">living</a></li>
						<li><a href="../people.php" title="people">people</a></li>
						<li><a href="../runway.php" title="runway">runway</a></li>
						<li><a href="../subscribe.php" title="subscribe">subscribe</a></li>
					</ul>
				</div>
				<div id="lnbS">
					<ul class="sideMenu">
						<li>
							<a href="#" title="사이드 메뉴">side menu</a>
							<ol class="company">
								<li><a href="../company.php" title="회사소개">회사소개</a></li>
								<li><a href="../advertising.php" title="광고 및 제휴">광고 및 제휴</a></li>
								<li><a class="policyM" href="../policy.php" title="개인정보 처리방침">개인정보 처리방침</a></li>
							</ol>
						</li>
<?php if(empty($_SESSION['username'])){?>
						<li>|</li>
						<li class="login"><a href="../login.php" title="login">Login</a></li>
<?php } else{?>
						<li><a href="../member.php" title="개인설정" style="color:hotpink; font-size:16px; font-weight:700;"><?=$_SESSION['username']?></a><span style="font-weight:700; color:#fff;">님  접속</span>&nbsp;&nbsp;&nbsp;<a href="../logout.php" title="로그아웃" style="font-size:14px; color:red; font-weight:700;">&lt;LOGOUT&gt;</a></li>
<?php }?>
					</ul>
					<div class="searchArea">
						<p><img src="../img/icon/search_icon0.png" alt="찾기 아이콘"/></p>
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
			<article id="content">
				<dl class="main">
					<dt class="descTitle">
						<span><a href="../Fashion.php" title="Fashion">Fashion</a></span>
						<strong>31 Rue Cambon, Paris</strong>
						<i>2020.06.04</i>
					</dt>
					<dd class="mainImg">
						<p class="imgArea"><img src="../img/desc/desc04_00.jpg" alt="desc 메인 이미지"/></p>
					</dd>
					<dd class="sideDesc">
						<p class="sideImg"><img src="../img/desc/desc04_03.jpg" alt="desc 사이드 이미지"/></p>
						<div>
							<div class="credit">
								<h4>CREDIT</h4>
								<p>에디터 송보라</p>
								<p>포토그래퍼 Courtesy of Chanel</p>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="descDesc">
					<dt>
						버지니 비아르는 2019-2020 공방 컬렉션에 대해 설명했습니다. “하우스의 코드 그리고 2002년에 처음으로 선보인 공방 컬렉션으로의 회귀입니다. 그 당시에는 쇼도 캉봉가 31번지에서 열렸죠. 개인적으로 내게 매우 소중한 쇼였어요. 모델들은 루 리드(Lou Reed)의 음악을 들으며 담배를 피웠죠. 주제라기보다는 애티튜드에 가까웠습니다.” 실제로 샤넬의 애티튜드는 하나의 단어와도 같습니다. 마드모아젤 샤넬은 이렇게 말하곤 했으니까요. “패션은 변하지만 스타일은 남는다.”
					</dt>
					<dd>
						<p class="descImg"><img src="../img/desc/desc04_01.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/desc/desc04_02.jpg" alt="desc 01이미지"/></p>
					</dd>
					<dd>
						잘 알려진 대로 캉봉가 31번지는 가브리엘 샤넬의 아파트입니다. 18세기 코로만델(Coromandel) 병풍에 둘러싸인 입구 홀, 무어인 조각상과 거대한 샹들리에, 크리스털 펜던트가 폭포수처럼 쏟아져 내리는 허니 골드 색감의 살롱. 이곳은 마드모아젤 샤넬이 피팅을 하고 꿈을 꾸며, 가까운 친구들, 자신이 가장 사랑하는 오브제와 책, 심벌에 둘러싸여 시간을 보내던 장소입니다. 비아르도 정기적으로 이곳에 들르죠. “정말 포근한 기분이 들거든요. 베이지색의 커다란 스웨이드 소파가 마음에 들어요. 칼은 생전에 디반(Divan, 두꺼운 받침대와 매트리스로 이루어진 침대)에 푹 파묻혀 있길 좋아했고요. 가브리엘의 아파트는 내가 본 칼의 첫 아파트를 떠오르게 합니다. 칼은 소파인 척하는 기둥 침대에 앉곤 했답니다. 그래서 이번 공방 컬렉션은 가브리엘의 아파트를 중심으로 전개해보고 싶었어요.”
					</dd>
					<dd>
						<p class="descImg"><img src="../img/desc/desc04_07.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/desc/desc04_04.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/desc/desc04_05.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/desc/desc04_06.jpg" alt="desc 01이미지"/></p>
					</dd>
					<dd>
						비아르는 소피아 코폴라에게 이 아이디어를 털어놓았고 둘은 무대 위에 캉봉가 31번지의 아이코닉한 거울 계단을 재현했습니다. 이번 공방 컬렉션은 이국적인 주제와 먼 여행에서 한 발짝 물러선 대신 하우스의 전통을 파고드는 우아한 여정을 택했죠. 더블 C와 까멜리아, 리본, 체인, 투톤, 밀 이삭  등 비아르가 고른 하우스의 코드는 구센, 르사주, 몽텍스, 르마리에 등 공방에서 정교하고 아름답게 부활했습니다. “공방은 내게 그들만의 노하우를 제공하죠. 그들은 우리의 창작을 숭고한 차원으로 승격시킵니다.”
					</dd>
					<dd>
						<iframe width="700" height="315" src="https://www.youtube.com/embed/Pd4ubqUq94E" title="유튜브 연결 영상"></iframe>
					</dd>
				</dl>
			</article>
		</div>
		<footer id="footer">
			<div id="footerHead">
				<ul>
					<li class="footerV">
						<a href="../index.php" title="VOGUE">
							<i><img src="../img/company/vo_02.png" alt="vogue 제휴"/></i>
							<span><img src="../img/company/test3.png" alt="vogue 잡지"/></span>
							<b><img src="../img/company/test4.png" alt="vogue 사이트"/></b>
						</a>
						<div><p></p></div>
					</li>
					<li class="footerA">
						<div><p></p></div>
						<a href="http://www.allurekorea.com/" title="allure">
							<i><img src="../img/company/al_05.png" alt="allure 제휴"/></i>
							<span><img src="../img/company/al_02.png" alt="allure 잡지"/></span>
							<b><img src="../img/company/al_04.png" alt="allure 사이트"/></b>
						</a>
					</li>
					<li class="footerG">
						<div><p></p></div>
						<a href="http://www.gqkorea.co.kr/" title="GQ">
							<i><img src="../img/company/gq_05.png" alt="GQ 제휴"/></i>
							<span><img src="../img/company/gq_02.png" alt="GQ 잡지"/></span>
							<b><img src="../img/company/gq_04.png" alt="GQ 사이트"/></b>
						</a>
					</li>
					<li class="footerW">
						<div><p></p></div>
						<a href="http://www.wkorea.com/" title="W">
							<i><img src="../img/company/w_05.png" alt="W 제휴"/></i>
							<span><img src="../img/company/w_02.png" alt="W 잡지"/></span>
							<b><img src="../img/company/w_04.png" alt="W 사이트"/></b>
						</a>
					</li>
				</ul>
			</div>
			<div id="mainFooter">
				<p class="footer_logo"><img src="../img/vogue_footer_logo.png" alt="풋터 로고"/></p>
				<p class="copy">VOGUE&copy;EthanLee All Rights Reserved. lbard@naver.com</p>
				<p class="legal"><a  class="policyM" href="../policy.php" title="개인정보 취급방침">개인정보 취급방침</a></p>
			</div>
		</footer>
	</div>
 </body>
</html>
