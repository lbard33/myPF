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
						<span><a href="../People.php" title="People">People</a></span>
						<strong>제이미가 된 조권, 신주협, MJ, 렌</strong>
						<i>2020.06.23</i>
						<em>뮤지컬 &lt;제이미&gt;에서 제이미가 된 조권, 신주협, MJ, 렌은 노래한다. “난 나만의 꿈, 나만의 스타일이 있어. 널 웃게 만들 나만의 춤도 있어. 그러니 싫으면 가주겠니. 난 최고가 될 테니까.”</em>
					</dt>
					<dd class="mainImg">
						<p class="imgArea"><img src="../img/desc/desc02_00.jpg" alt="desc 메인 이미지"/></p>
						<p class="textArea">
							신주협이 착용한 시스루 플라워 프린트 셔츠와 아우터는 펜디(Fendi), 프린트 팬츠는 르메르(Lemaire at matchesfashion.com), 목걸이는 포츠 1961(Ports 1961). 렌이 이너로 입은 니트와 프린트 실크 셔츠, 카디건과 팬츠, 부츠는 지방시(Givenchy), 목걸이는 크롬하츠(Chrome Hearts). 조권이 입은 프린트 셔츠는 로에베 폴라 이비자(Loewe Paula’s Ibiza at matchesfashion.com), 그레이 가죽 재킷은 프라다(Prada at Yoox). MJ가 이너로 입은 니트와 식물 패턴 니트는 지방시, 목걸이는 디올(Dior).
						</p>
					</dd>
					<dd class="sideDesc">
						<p class="sideImg"><img src="../img/desc/desc02_10.jpg" alt="desc 사이드 이미지"/></p>
						<div>
							<p class="sideText">렌이 입은 도트 패턴 셔츠와 재킷은 생로랑 바이 안토니 바카렐로(Saint Laurent by Anthony Vaccarello), MJ가 입은 셔츠와 재킷은 벨루티(Berluti), 오른팔에 낀 팔찌는 위에서부터 생로랑 바이 안토니 바카렐로, 크롬하츠(Chrome Hearts), 왼팔에 낀 팔찌는 트렌카디즘(Trencadism).</p>
							<div class="credit">
								<h4>CREDIT</h4>
								<p>피처 디렉터 조소현</p>
								<p>패션 에디터 남현지</p>
								<p>포토그래퍼 김신애</p>
								<p>에디터 허보연</p>
								<p>메이크업 박차경</p>
								<p>헤어 오지혜</p>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="descDesc">
					<dt>
						메이크업을 마친 조권은 스튜디오에 들리는 음악을 바꿔주길 요청했다. 그러자 레이디 가가의 ‘Alice’가 울려 퍼졌다. “마이 바디, 마이 소울…” 주문을 외우듯 되뇌더니 조권은 하늘로 두 팔을 뻗었다. 스튜디오 천장에서 섬광이 비쳤던가. 조명이었던가. 이어서 BGM이 ‘911’로 바뀌자 렌과 조권의 시선이 마주쳤고 둘은 관절을 꺾어가며 춤을 췄다. &lt;제이미&gt; 출연 배우들에게 레이디 가가의 음악은 노동요였다. 스튜디오 공기가 미세하게 바뀌고 있었다. 조권의 목덜미에 타투 ‘Born this way’가 언뜻 보였다. ‘그냥 그렇게 태어났으니까. 있는 그대로 나 자신을 사랑하는 건 당연한 거야.’ 레이디 가가처럼, 조권, 신주협, 아스트로 MJ, 뉴이스트 렌은 어느새 뮤지컬 &lt;제이미&gt; 속 제이미가 되어 &lt;보그&gt; 카메라 앞에 서 있었다.<br/><br/>

						실화를 바탕으로 한 &lt;제이미&gt;는 드래그 퀸이 되고 싶은 열일곱 살 제이미가 주위의 차디찬 시선, 사회적 편견을 딛고 성장하는 이야기다. BBC 다큐멘터리 &lt;Jamie: Drag Queen at 16&gt;이 바탕이다. 영국 공연 당시 포스터에는 카피 한 줄이 적혀 있었다. ‘현세대의 빌리 엘리어트’. 1980년대 영국 탄광촌에서 발레리노가 되길 꿈꾸던 빌리에게 세상은 말했다. ‘남자들은 축구나 권투를 하는 거야. 그런데 남자가 발레를 한다고?’ 2000년대 드래그 퀸이 되길 꿈꾸는 제이미는 세상으로부터 어떤 대답을 들었을까.<br/><br/>

						배우들에게 어떤 배역은 운명처럼 찾아온다. 2017년 영국 셰필드 극장에서 초연된 후 매진을 거듭하며 런던 웨스트엔드로 진출, 최근 가장 뜨거운 뮤지컬로 떠오른 &lt;제이미&gt;가 조권, 신주협, MJ, 렌을 찾아온 과정이 그렇다. 한국 공연 확정 전부터 ‘제이미감’임을 본능적으로 느낀 지인들은 네 배우에게 다양한 경로로 뮤지컬 &lt;제이미&gt;의 존재를 알렸다. ‘너 외엔 인물이 없다’, ‘딱 너다’ 같은 추천이 잇따랐다. 과감한 귀고리를 찰랑거리며 다가온 신주협은 동료 배우들이 &lt;제이미&gt;에 가지던 기대를 전했다. “공연 안에 많은 것이 담겨 있다고 했어요. 한 학생이 성장하는 과정에 기쁘고 행복한 부분도 있고 시련과 불안도 있는 드라마가 다채롭게 꾸며진 극이라고요. 모두 그렇게 얘기해서 꽤 부담이 됐습니다(웃음).”<br/><br/>

						‘레드 힐’은 운명론을 더한다. 드래그 퀸이 되고 싶은 제이미에게 레드 힐은 심장이자 무기다. 올봄까지 군대에 있었던 조권은 오디션을 위해 치밀한 작전을 짜야 했다. 10시면 소등하는 군대에서 안무 연습은 주로 커피 자판기 앞에서 이루어졌다. 최종 오디션 날 정기 외박을 써서 나온 조권은 최대한 제이미답게 하고 가기 위해 옷장을 뒤졌다. 거기엔 레드 힐 한 켤레가 조권을 기다리고 있었다. 언젠가 춤 영상을 찍으려고 구입해둔 구두였다. 심사위원들 앞에서 보란 듯 레드 힐을 꺼냈다. 신주협의 레드 힐은 이태원에서 반짝이고 있었다. 10페이지도 넘는 대사를 달달 외우고, 유튜브로 영국 공연을 보기도 하며 오디션곡을 준비한 뒤, 이태원에서 레드 힐을 구했다. 그의 발 사이즈 265mm, 하이힐 높이 9cm였다. 한평생 주인을 기다리던 레드 힐은 오디션 참가자들을 좋은 곳으로, 제이미 배우의 자리로 데려다줬다.
					</dt>
					<dd>
						<p class="descImg"><img src="../img/desc/desc02_01.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/desc/desc02_02.jpg" alt="desc 02 이미지"/></p>
						<p class="descText">1. 화이트 셔츠는 프라다(Prada), 체인 목걸이는 오프화이트(Off-White), 오른손 약지에 착용한 터키석 반지는 킹크로치(King Kroach).<br/>2. 스트라이프 슬리브리스와 재킷, 반바지는 프라다(Prada).</p>
					</dd>
					<dd>
						옅은 주근깨를 그려 넣고 카메라 앞에 선 렌은 본격적으로 스포트라이트를 받을 준비가 되어 있었다. “뮤지컬 &lt;제이미&gt;의 주제를 아주 간략하게 표현한다면 ‘나다운 삶을 살자’예요. 저도 ‘나 자신을 사랑하자’ 주의거든요. ‘And You Don’t Even Know It’이라는 넘버에서 ‘난 슈퍼스타, 근데 너희들은 몰라’ 그런 가사가 있어요. 늘 그렇게 생각했고 지금도 하고 있어요. 하지만 모르는 분들도 많아요. 그런 점에서 공감했어요.” ‘나답게 살자’는 렌이 자존감이 떨어질 때마다 되뇌는 주문 같은 것이다. 얼마 전 뉴이스트 8집 미니 앨범 활동을 마친 렌에게 &lt;제이미&gt;는 첫 뮤지컬이다. 감정 표현력이 탁월하고 타고난 미성으로 뉴이스트에 색깔을 더하는 그는 사실 누구보다 준비된 뮤지컬 배우다. 어딜 가나 존재감을 드러내는 렌의 재능을 동시에 보여줄 수 있는 장르가 있다면 단연 뮤지컬이다. “라이브로 스토리와 교훈을 전달할 수 있다는 점이 정말 대단하게 느껴졌어요. 평소에도 &lt;삼총사&gt;, &lt;웃는 남자&gt; 등 뮤지컬을 자주 봐요. 언젠가 도전하고 싶었는데 기회가 와서 정말 기뻐요.” 틀에 갇혀 있지 않은 모습, 어떤 역이든 다 해내는 모습. 뮤지컬 배우로서 렌이 품고 있는 꿈이다.
					</dd>
					<dd>
						<p class="descImg"><img src="../img/desc/desc02_03.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/desc/desc02_04.jpg" alt="desc 02 이미지"/></p>
						<p class="descText">1. 데님 재킷은 생로랑 바이 안토니 바카렐로(Saint Laurent by Anthony Vaccarello), 드롭 이어링은 뮌(Münn).<br/>2. 로고 패턴 셔츠, 반바지와 목걸이는 디올(Dior), 팔찌는 크롬하츠(Chrome Hearts), 버킷 햇은 캉골(Kangol).</p>
					</dd>
					<dd>
						평소 아스트로 인터뷰 때마다 뮤지컬에 대한 관심을 드러낸 MJ에게도 &lt;제이미&gt;는 첫 도전이다. 오버사이즈 팬츠를 입고 플랫폼 슈즈를 신자 바람 인형 같다며 “삐유!” 소리를 내던 MJ는 인터뷰가 시작되자 진지한 표정이 됐다. 스물여섯 인생 처음 본 뮤지컬은 배우 차지연이 공연한 &lt;엄마를 부탁해&gt;다. 두어 시간쯤, 콘서트와 거의 동일한 시간 동안 메시지를 전해 감동을 주는 뮤지컬에 MJ는 그야말로 감동을 받았다. 꼭 도전해보리라 결심한 것도 그때이니 첫눈에 반한 셈이다. “실제로 기회가 오자 두렵기도 했는데 작품을 이해하고 나서는 제이미 캐릭터에 빠져들었어요. 학생들에게 제이미의 메시지를 전하고 싶어 용기를 냈죠. 제이미의 마음이 전달되면 학생들이 꿈을 찾는 데 도움이 될 것 같았어요.” MJ 스스로도 제이미로부터 용기를 얻고 있다. “확고한 꿈이 있으면 물러서지 말고 도전하는 게 옳으니까요. 가장 중점을 둔 연습도 메시지 전달이에요.” 쇼노트 프로듀서 임양혁은 배우를 캐스팅하며 가장 11학년다운 배우들을 찾았다. 그 나이대만 지닐 수 있는 에너지를 눈여겨봤다. 어떤 열일곱 살을 보냈는지 묻자 MJ는 난감한 얼굴이 됐다. “저는 정말, 진짜, 말을 너무 안 들었어요. 이거 하라 그러면 저거 하고. 청개구리라는 말을 많이 들었어요. 제이미 연기 때도 저만의 청개구리가 나올 때가 있어요(웃음).”
					</dd>
					<dd>
						<p class="descImg"><img src="../img/desc/desc02_05.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/desc/desc02_06.jpg" alt="desc 02 이미지"/></p>
						<p class="descText">1. 이너로 입은 셔츠와 니트 베스트는 오디너리 피플(Ordinary People), 귀고리는 포츠 1961(Ports 1961), 반지는 킹크로치(King Kroach), 팬츠와 신발은 알렉산더 맥퀸(Alexander McQueen).<br/>2. 로고 패턴 셔츠는 디올(Dior), 바지는 알렉산더 맥퀸(Alexander McQueen), 체인 목걸이는 일레란느(Ille lan), 오른손 중지에 낀 반지는 디올, 검지에 낀 반지는 트렌카디즘(Trencadism), 나머지 손에 낀 반지는 킹크로치(King Kroach).</p>
					</dd>
					<dd>
						네 명의 제이미 중 유일하게 본업이 뮤지컬 배우인 신주협에게도 제이미는 성장이다. “분량이 걱정되지만 저 역시 공연하면서 성장한다고 생각해요. 곁의 동료들, 휴고나 엄마, 레이와 부담감을 같이 나누며 갈 수 있지 않을까요.” 신주협의 마음을 움직인 넘버는 ‘Over the Wall’이다. “트라우마를 극복해야 지금보다 자유롭고 당당해질 수 있다고 노래하는 곡이에요. 제이미 역을 맡은 다른 배우들이 부를 땐, 저도 모르게 뜨거워져요. 초반 곡인 데다 안무도 거의 없는데 그 잠깐의 불꽃이 아주 좋아요.” 제이미의 넘버는 다 팝적 요소가 강해 흥겹고 동시대적이다. “뮤지컬 음악은 처음과 끝이 명확해요. 마지막에는 긴 프레이즈로 끌다가 아웃! 이런 웅장함이 있는데 &lt;제이미&gt;는 어디가 대사고 어디가 음악인지 모를 만큼 적절히 분할되어 있어요. 정말 특별하죠.” 열일곱 살에 장래 희망을 드래그 퀸이라고 말했던 제이미처럼 신주협도 고 3 때부터 배우를 꿈꿨다. “체육에 관심이 많았고 기타나 피아노도 연주했고 현대무용도 했어요. 엄마가 미술 선생님이라 미술을 전공할 뻔했죠. 조금씩 하던 예술을 전부 하고 싶어 찾은 방법이 배우였어요. 연기를 하면 행복할 것 같았죠.” &lt;어쩌면 해피엔딩&gt;, &lt;스위니토드&gt; 등에 출연하고 &lt;제이미&gt; 배역을 따내 현재 뮤지컬계에서 가장 뜨거운 배우임을 증명했지만 신주협은 무덤덤하다. “제이미가 더 선배죠. 17세에 자기 직업을 확실하게 정했으니까요.” 아, 뮤지컬 팬이 아닌데 신주협의 얼굴이 낯이 익다면 드라마 &lt;그 남자의 기억법&gt; 덕분이다. 순수하면서도 지질한 매니저 역할로 리듬감을 선사한 캐릭터다.
					</dd>
					<dd>
						<p class="descImg"><img src="../img/desc/desc02_07.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/desc/desc02_08.jpg" alt="desc 02 이미지"/></p>
						<p class="descText">1. 스트라이프 셔츠와 재킷, 반바지는 프라다(Prada), 스니커즈는 펜디(Fendi).<br/>2. 세일러 칼라 셔츠는 블라인드니스(Blindness).</p>
					</dd>
					<dd>
						그리고 여기, ‘누구보다 제이미가 곧 나다!’라고 주장하는 조권이 있다. 일단 제이미들 사이에서 조권은 왕언니로 불린다는 점을 밝힌다. 배우마다 각각 어떻게 다른가 물었을 때 MJ가 말했다. “저는 상큼한 제이미 아니면 큐트한 제이미. 제 입으로 말하네요? 하하. 막내 제이미는 순한 양, 둘째 언니는 무게감 있는 제이미. 왕언니 제이미는 딱 보면 제이미예요. 그냥 제이미.” 조권은 동료들의 칭찬에 손사래를 칠 생각이 없다. 실존 인물 제이미 캠벨을 본 순간, 그가 살아온 역사, 자신감, 나아가고자 하는 방향성까지 공통점이 많다고 느꼈으니까. “제이미 대사 중에 이런 게 있어요. ‘우리 어릴 때 엄마 옷 다 꺼내서 놀았잖아. 만날 안젤리나 졸리 흉내 내고. 난 그게 평생 하고 싶은 놀이야.’ 여기 나오는 대사가 그냥 저예요. 저도 어릴 때 엄마 구두, 립스틱 망가트리고. 동네 누나들이랑 화장놀이, 소꿉놀이, 인형놀이 다 했죠. 나 자신을 사랑하는 방식과 많은 사람에게 희망과 사랑을 전하고자 하는 메시지도 마찬가지예요. 보수적 편견과 차별에서 자유를 외치는 마인드 자체도요. 제이미를 통해 제가 진짜 하고 싶은 말을 표출할 수 있는 것 같아요.”<br/><br/>

						가수로 데뷔했지만 뮤지컬 배우라는 수식어가 동일한 무게를 지닐 만큼 조권은 뮤지컬계에서 압도적으로 활약하고 있다. &lt;지저스 크라이스트 수퍼스타&gt;, &lt;프리실라&gt;, &lt;체스&gt;, &lt;별이 빛나는 밤에&gt;, &lt;이블데드&gt;, &lt;귀환&gt;, 모두 그가 이름을 올린 뮤지컬이다. 군 복무 중에도 뮤지컬 출연은 이어졌다. “제가 모든 열정을 쏟아부은 오디션이 딱 세 개예요. 박진영의 영재육성프로젝트, &lt;신흥무관학교&gt; 그리고 &lt;제이미&gt;. 군 뮤지컬에 발탁된다는 건 굉장히 영광이에요. 부대에서 &lt;신흥무관학교&gt; 강릉 공연을 보고 오디션 전에 감상문을 A4 용지 두 장에 ‘깜지’처럼 빽빽하게 써서 현장에서 드렸다니까요. 이거 아니면 군 생활 못하겠다고, 꼭 하고 싶다고 말이죠.” 제일 큰 도전은 &lt;체스&gt;였다. 진중한 40대 아나톨리를 완벽하게 연기한 후 조권은 비로소 관객에게 인정받았다고 느꼈다. “그러고 나서부터 생각이 좀 바뀌었어요. 세상을 모두 만족시킬 수는 없는 것 같아요. 예전에는 모두의 입맛에 맞추느라 삶이 피곤했거든요. 이제는 음악, 뮤지컬, 예능 모두 제가 하고 싶고 잘하는 것을 하면 ‘조권은 조권이다’라는 소리를 듣지 않을까요.”
					</dd>
					<dd>
						<p class="descImg"><img src="../img/desc/desc02_08.jpg" alt="desc 01이미지"/></p>
						<p class="descText">조권이 입은 스트라이프 셔츠는 캘빈 클라인 진(Calvin Klein Jeans), 화이트 재킷은 오디너리 피플(Ordinary People), 신주협이 입은 화이트 셔츠는 캘빈 클라인 진, 블랙 재킷은 보테가 베네타(Bottega Veneta).</p>
					</dd>
					<dd>
						네 명은 요즘 제이미로 산다. ‘제이미답다’는 그들만의 코드이자 칭찬이다. “스스로 제이미라고 여기면서 지내고 있어요.” 렌은 얼마 전 식사 시간에도 “너, 방금 제이미였어”라는 코멘트를 들었다. 네 명의 배우는 대단히 화목하다. 모이면 가장 먼저 건네는 첫마디는 “오늘 분량 외웠어?”이고, &lt;제이미&gt; 얘기를 제외하고 가장 많이 하는 얘기는 “오늘 밥 뭐 먹을까”다. MJ는 무릎을 가지런히 모으며 선배들에게 감사를 표현했다. “저희가 연습하고 있으면 늘 형들이 서서 봐줘요. 이 부분은 이렇게 했으면 좋겠다고 조언해주고 스케줄 때문에 연습 못하는 날이 생기면 분량을 알려주기도 해요. 큰 도움을 받고 있어요. 행복해요.” 렌도 같은 생각이다. “호흡이 빠르다고, 대사를 칠 때 조금 더 천천히 생각하고 정리하면 좋겠다는 선배들의 조언이 크게 도움 됐어요. 선배님들과 같이 하는 것만으로도 영광이고 최대한 많이 배우려고 노력하고 있습니다.”<br/><br/>

						제이미들의 식사 메뉴를 들려주던 렌은 바깥에서 ‘Work of Art’가 울려 퍼지자 자동 반사처럼 무릎을 까딱거렸다. 분식집, 한식집, 이탤리언 레스토랑을 번갈아 가는데 요즘 가장 많이 먹는 메뉴는 스파게티다. MJ는 연습실이 나날이 재미있다고 분위기를 들려줬다. “대사 하다가 꼬이거나 웃긴 동작을 했을 때 재미있어요. 자연스러운 모습들이요.” 아스트로 연습실과 비교를 요청하자 정신없는 얼굴이 됐다. “아스트로 멤버들은 정말 비글이에요. 일단 너무 어려서 지치지를 않죠(웃음). 제이미 배우들은 말이 진짜 웃겨요. 선배님들이 늘 웃는 분위기를 만들어주셔서 뮤지컬이 처음인데도 겁먹지 않고 용기 낼 수 있어요.”<br/><br/>

						초보 뮤지컬 배우들은 컨디션 관리에도 열심이다. 좋다는 비타민은 다 챙겨 먹고 렌은 자그마치 야식과 유튜브, 게임도 끊었다. “집에 가면 늘 치킨을 시켜 먹었는데, 지금은 멀리하고 있어요. 야식을 먹고 자면 피곤하거든요. 유튜브, 게임도 안 하게 돼요. 역할에 몰입하기 위해서죠.” MJ는 하기보다 하지 않기를 택했다. “평소보다 말수를 줄이고 있고요. 원래는 목소리 톤도 높고 되게 시끄럽거든요(웃음). 대사 연기가 처음이다 보니 생목을 많이 써서 목 관리에 신경 써요. 뮤지컬을 한 뒤 차분해졌습니다. 제 목을 위해.”<br/><br/>

						이때, 둘째 언니 신주협이 ‘제이미답다’의 정체에 대해 깔끔하게 정리했다. “나를 가장 잘 아는 모습이죠. 내가 뭘 원하는지 알고, 내 몸에서 어디가 예쁜지 잘 알기에 타인 앞에서도 당당하죠.” 각자의 아름다움을 찾는 과정이라고도 덧붙였다. “저도 어디가 예쁘고 아름다운지, 내 말투가 어떨 때 다른 사람이 호의적으로 반응하는지 찾고 있어요.” 참고로 신주협이 최근에 발견한 아름다움은? 섬섬옥수 손가락이다.<br/><br/>

						제이미의 꿈, 드래그 퀸은 아찔한 하이힐을 신고, 두꺼운 아이라인을 그리며, 머리를 부풀리는 등 단순히 화려하게 꾸미는 헤어 & 메이크업만 의미하진 않는다. 사회적으로 고정된 성 역할을 과장되게 보여주는 퍼포먼스 아티스트에 가깝다. 변신이 취미이자 특기인 렌에게도 드래그 퀸 분장은 난도가 높다. 진땀 흘리며 하이힐에 적응하는 중이다. “아이 메이크업을 하고 엄청나게 화려한 가발을 쓰니 진짜 팝 스타 같더라고요. 이렇게 꾸미고 패션쇼에 가고 싶어졌어요. 조권 형이 말씀하셨어요. 하이힐은 자신감이라고. 디바라고 생각하고 휩쓸어버리라고.” MJ는 곰곰이 생각하더니 드래그 퀸은 용기라고 말했다. “자기만의 속마음이 있고 숨겨진 모습이 있잖아요. 분장을 통해 표현할 수 있고, 용기 낼 수 있다는 점이 드래그 퀸의 장점 같아요.”<br/><br/>

						분장이 주는 동기부여가 있지 않느냐는 질문이 끝나기도 전에 조권은 “하이힐!”을 외쳤다. “제이미와 저를 들끓게 하는 건 레드 힐이에요. 힐을 신는 순간 자존감 업, 자신감 업. 드레스 룸에 힐 진열장이 따로 있는데 30켤레 정도 있어요. 제가 만약 여자였다면 너무 많이 사서 땅에 주저앉아 지갑 던지면서 ‘내 돈 어디 갔어!’라고 했을 겁니다. 언젠가 힐 사업도 하고 싶어요. 남자가 신었는데 여자들이 혹하는 하이힐이죠.” 물론 우리는 조권이 힐 댄스 장인임을 잘 안다. 굽이 없는 19cm 힐을 신고 선보인 솔로 앨범의 ‘Animal’ 무대를 비롯, 예능 &lt;골든 탬버린&gt; 비욘세 ‘Crazy in Love’까지. 평소 걸 그룹 커버 댄스를 출 때조차 하이힐을 신는 프로페셔널함은 아름다움을 넘어 경외감까지 자아낸다. “힐을 신으면 제 안의 페르소나가 나와요. 표정, 손짓 다 바뀌죠. 사실 모든 사람이 그렇진 않잖아요. 그런 특별함이 축복 같아요. 전 특이한 게 아니라 특별해요.”<br/><br/>

						원제는 ‘Everybody’s Talking About Jamie’지만 제이미 혼자만의 이야기는 아니다. 주변의 차가운 시선으로 인해 미래에 대한 두려움이 큰 제이미에게는 그를 믿고 독려하는 엄마 마가렛, 가장 친한 친구 프리티가 있다. 나는 제이미 캠벨과 마가렛 캠벨 모자가 출연한 토크쇼를 본 적 있다. 제이미는 뮤지컬 포스터를 패턴으로 디자인한 원피스를 입었고, 마가렛은 같은 옷감으로 만든 스카프를 매고 있었다. (늘 커플 룩처럼 맞춰 입는다.) 남다른 제이미를 어떻게 키웠느냐는 질문에 마가렛은 말한다 “He is my normal.”<br/><br/>

						엄마와 제이미의 관계는 뮤지컬 &lt;제이미&gt;를 끌어가는 따뜻한 축이다. 며칠 전 연습실은 눈물바다가 됐다. 제이미와 엄마가 싸우는 장면을 연습하다 배우들도, 지켜보는 스태프들도 다 울어버렸다. 슬프지만 MJ가 가장 좋아하는 장면이다. “엄마한테 처음으로 화내는 장면이에요. ‘엄마는 뭐라도 돼본 적이 있냐, 그러니까 아빠한테 버림받지’라고 심한 말을 해요. 그 말을 듣고 엄마가 속마음을 노래로 표현해요.” 홍보 담당자는 MJ가 특히 엄마 마가렛과 합이 좋다고 귀띔했다. “정말 엄마와 자식 같아요.” 조권에게 평소 힘이 되는 존재도 엄마다. “무슨 행동을 하든 어떤 선택을 하든 아껴주고 사랑해주세요. 외동인데 딸 같은 아들, 아들 같은 딸이라며 행복하다고 하세요. 어릴 때 휘황찬란하게 춤추고 노래하면 누구 배에서 나왔는지 모르겠다고 웃으며 말씀하시곤 했어요. 8년 동안 연습생으로 지낼 때도, 연예인이라 받는 관심에 흔들리고 상처를 받을 때도 늘 묵묵히 응원해주셨어요. 저에게 엄마는 늘 0순위예요.” 렌의 마음속에서 용기를 주는 존재는 할아버지다. “6·25 참전 유공자세요. 할아버지 이야기를 많이 들었는데 영웅으로 느껴졌어요. 힘들 때도 할아버지 생각을 하며 견뎌요. 할아버지는 이렇게도 사셨는데 나는 이거 하나 못할까 하면서.”<br/><br/>

						제이미를 한마디로 요약하자면 성장 이야기다. 진로를 고민하는 10대가 아니더라도 누군가의 성장 서사를 보며 웃고 울고 행복해하는 건, 누구나 가슴 한구석에 어제보다 나아지고자 하는 마음이 있기 때문일 것이다. 꿈을 향해 벽을 넘고 또 넘는 특별한 소년 제이미는 우리 인생의 주인공이 누구인지 되물을 것이다. 고단한 현실에 또 잊을지라도 간질간질한 그 느낌 덕분에 우리는 성장 서사를 보고 또 본다.<br/><br/>

						160분간 제이미 이야기가 끝나고 나면 극장 천장에서부터 두꺼운 커튼이 내려온다. 극의 끝이자 삶의 시작이다. 조권은 말한다. “&lt;프리실라&gt; 끝났을 때도 부모님은 함박웃음 지으며 박수 쳐주셨어요. 극이 끝나고 커튼이 올라갔을 때 객석에 부모님, 수많은 팬들, 지인들 모습을 볼 때의 행복은 이루 말로 다할 수 없어요. &lt;제이미&gt;는 특히 커튼콜이 신나요. 콘서트처럼 관객과 박수 치면서 즐기는 스타일이라 벌써 기대됩니다. 뮤지컬은 매회 라이브로 공연하기에 실시간이라는 두려움이 있지만 반대로 그런 매력 덕분에 늘 새로운 반응, 새로운 박수를 받아요. 그 맛에 뮤지컬 하는 것 같아요.”<br/><br/>

						7월 초부터 공연장에 울려 퍼질 박수는 제이미의 찬란한 인생과 조권, 신주협, MJ, 렌의 눈부신 성장에 보내는 환호일 것이다. 제이미를 만나는 지금 이 순간은 우리에게도 중요하다. 어느새 분장을 지우고 흰색 반팔 티셔츠에 청바지로 갈아입은 신주협이 말했다. “제이미에게 고난이나 시련이 많아요. 코로나19로 인해 많은 분이 힘들고 지쳤을 거예요. 제이미가 그 상황을 얼마나 멋지게 극복해나가는지 보면서 관객들도 위안 삼을 수 있지 않을까요.”
					</dd>
				</dl>
			</article>
			<ul id="others">
				<li>
					<a href="#none;" title="다른 기사1"> 
						<span class="otherImg"><img src="../img/people/people30.jpg" alt="다른 기사 이미지1"/></span>
						<span class="otherTitle">그리웠던 송지효의 서늘한 얼굴, 증명해온 김무열의 공감 능력이 영화</span>
					</a>
				</li>
				<li>
					<a href="#none" title="다른 기사2">
						<span class="otherImg"><img src="../img/people/people14.jpg" alt="다른 기사 이미지2"/></span>
						<span class="otherTitle">아스트로로서, 배우로서 만월처럼 차오를 문빈의 시간.</span>
					</a>
				</li>	
				<li>
					<a href="#none" title="다른 기사3">
						<span class="otherImg"><img src="../img/people/people00.jpg" alt="다른 기사 이미지3"/></span>
						<span class="otherTitle">다비는 헤이즈의 1위 곡을 쏟아낸 프로듀서이자 재즈 알앤비 뮤지션이다. ‘당신의 물음에 답이 되어주고 싶어서’ 다비라 이름 지었다.</span>
					</a>
				</li>	
				<li>
					<a href="#none" title="다른 기사4">
						<span class="otherImg"><img src="../img/people/people15.jpg" alt="다른 기사 이미지4"/></span>
						<span class="otherTitle">제니와 쿠마</span>
					</a>
				</li>
			</ul>
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
