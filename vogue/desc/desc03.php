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
						<span><a href="../Beauty.php" title="Beauty">Beauty</a></span>
						<strong>헤이즈의 핑크빛 얼굴</strong>
						<i>2020.07.31</i>
						<em>분홍은 그저 귀여운 색 이상의 가치가 있다. 자신만만하게 빛나는 ‘수향’ 핑크로 채색한 헤이즈의 얼굴.</em>
					</dt>
					<dd class="mainImg">
						<p class="imgArea"><img src="../img/beauty/beauty00.jpg" alt="desc 메인 이미지"/></p>
					</dd>
					<dd class="sideDesc">
						<p class="sideImg"><img src="../img/beauty/beauty00_12.jpg" alt="desc 사이드 이미지"/></p>
						<div>
							<p class="sideText">해마 패턴 보디수트와 실버 & 블랙 귀고리는 이오공(EOØXØXØ), 홀로그램 큐빅 원피스는 에어리어(Area at Net-a-Porter).</p>
							<div class="credit">
								<h4>CREDIT</h4>
								<p>뷰티 디렉터 이주현</p>
								<p>포토그래퍼 김선혜</p>
								<p>스타일리스트 임승은</p>
								<p>헤어 이선영</p>
								<p>메이크업 오가영</p>
								<p>네일 최지숙</p>
								<p>플라워 이은영</p>
								<p>아트 문경의</p>
								<p>Sponsored by 수향</p>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="descDesc">
					<dt>
						<b>어제 무슨 꿈 꿨어요? </b>이를 어째요? 일정이 늦게 끝나 잠을 못 잤는데. 오늘 촬영까지 남은 2시간, 어설프게 자면 오히려 더 피곤할 것 같더라고요. 그래서 그냥 누워서 멍하니 있다가 나왔어요.<br/><br/>

						<b>원래 잠이 없는 편인가요? </b>전혀요. 잠이 정말 많은 편인데, 일하면서 잠을 참는 법을 알게 됐어요. 어릴 때 잠으로 인한 실수가 많아서 오죽하면 친구들에게 “내가 성공하면 잠을 이긴 거고, 잘 안되면 잠 때문이야!”라고 말할 정도였죠.<br/><br/>

						<b>그럼에도 극복했다는 건 어떤 의미일까요? </b>정신력으로 버텼죠. 그게 가능하더라고요. 안 자려면 자지 않을 수 있어요. 대신 몰아서 한꺼번에 자죠(웃음).<br/><br/>

						<b>드디어 &lt;보그&gt;와 만났군요.</b> 저에겐 꽤 엄청난 도전이었어요. 외모와 달리, 사실 도전이나 모험 같은 것을 즐기지 않거든요. 곡에 맞는 이미지를 연출해야 하는 앨범 사진이나 뮤직비디오 촬영이 아닌 이상 가급적 안전하게 가려고 해요. 기존의 검증된 스타일에서 크게 벗어나지 않죠. 그러니 이번 촬영은 제 기준에서 어마어마한 도전인 셈인데, 걱정과 우려가 무색할 만큼 정말 좋았어요. 향 브랜드와 협업도 신선했고, 그저 단순한 ‘예쁨’을 초월하는 고차원적 주제부터 유능한 스태프들, 스튜디오 분위기 모두 다. 오죽하면 다음 앨범은 이 멤버들과 해보자는 얘기까지 나왔을 정도예요(웃음).
					</dt>
					<dd>
						<p class="descImg"><img src="../img/beauty/beauty00_01.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/beauty/beauty00_02.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/beauty/beauty00_03.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/beauty/beauty00_04.jpg" alt="desc 01이미지"/></p>
						<p class="descText">ALL THAT PINKS ‘빼어난 향기’를 의미하는 향 전문 브랜드 수향과 헤이즈가 만났다. 매혹적인 향과 음성으로 우리 여자들의 오감을 자극하는 이들에겐 ‘핑크’라는 교집합이 존재한다. 가로수길에 자리한 ‘빌라 수향’에선 ‘모든 분홍은 특별하다’는 테마 아래 특별한 향기 컨설팅을 진행한다. 매장에 비치된 설문지를 통해 내게 어울리는 핑크 타입과 향을 탐험하는 시간. 어려울 건 없다. 좋아하는 꽃, 계절, 캐릭터, 패션, 영화, 음악 등을 고르면 된다. 도전적이고 강인한 성향의 ‘피어스 핑크’는 활기 넘치는 허브 그린, 우디 머스크 향이 잘 어울린다. 추천 제품은 히노키(Hinoki), 슬립 웰(Sleep Well). 행운의 색은 스칼렛 레드가 섞인 핑크.</p>
					</dd>
					<dd>
						<b>&lt;보그&gt;와 함께 완성한 이미지 주제는 ‘Every Pink is Unique’예요. ‘수향’의 슬로건이기도 하죠. 헤이즈에게 핑크는 어떤 의미인가요?</b> 사랑 그 자체. 보기만 해도 웃음이 나고 행복한 순간이 떠오르니까요.<br/><br/>

						<b>그렇다면 ‘수향’이라고 발음하면 어떤 이미지가 떠오르죠?</b> 핑크 박스! ‘이 분홍 상자 안에 대체 뭐가 들었지?’라는 기분 좋은 호기심을 불러일으키죠. 팬들이 준 선물로 수향 향초를 처음 접했어요. 그 뒤로는 특유의 향에 반해서 직접 구입하기도 해요. 침대 머리맡에 늘 수향 향초가 놓여 있죠. 그러니 애정 있는 브랜드와 협업할 수 있으니 더 즐거울 수밖에요. 참, ‘걸스 넥(Girl’s Neck)’ 향 진짜 좋던데요?<br/><br/>

						<b>집 안 곳곳에 향 제품으로 가득 차 있다는 얘기를 들었어요. </b>사실 향초나 디퓨저처럼 홈 퍼퓸을 즐긴 지 얼마 되진 않았어요. 어딘지 모르게 사치품처럼 여겨졌거든요. 자유롭게 구입하기에는 뭔가 부담스러운 면도 있었고. 돌이켜보니 어릴 때부터 향에 꽤 민감한 편이었어요. 향으로 어떤 시절을 떠올리기도 하고, 크건 작건 의미 있는 추억의 한 부분엔 꼭 특별한 향이 존재했어요. 본격적으로 일을 시작하면서 향 제품을 구입하게 되었는데 정말이지 너무 좋은 거예요. 보기에도 좋고, 집에 들어가자마자 향이 퍼지는 게 행복했죠.
					</dd>
					<dd>
						<p class="descImgOne"><img src="../img/beauty/beauty00_13.jpg" alt="desc 01이미지"/></p>
						<p class="descText">FUTURE PINK 헤이즈는 신비로움과 직관력을 지닌 ‘미스터리 핑크’ 타입이다. 예술적 표현력이 뛰어난 이들에겐 바이올렛, 아이리스 꽃향기에 우디 노트가 어우러진 향이 제격이다. 수향의 추천 향기는 시크릿 가든(Secret Garden), 더 레인드롭스(The Raindrops). 행운의 색은 보랏빛 핑크다. 핫 핑크 슬리브리스 원피스는 오프화이트(Off-White).</p>
					</dd>
					<dd>
						<b>특별히 선호하는 향이 있나요?</b> 좋아하는 향을 한두 개로 한정 짓지 않아요. 향수나 향초 매장에 방문하면 수많은 향이 한데 섞여 있잖아요. 다채로운 향이 뒤섞일 때 색다른 매력을 발견할 수 있죠. 그래서 향수든 향초든 종류별로 다양하게 구입해 그날그날 기분에 따라 레이어링해요.<br/><br/>

						<b>이를테면 어떤 식이죠?</b> 향초는 거실, 방, 현관, 화장실에 비치하고 워머로 녹이면서 향을 퍼뜨려요. 향수 역시 최대 세 가지 브랜드 제품을 하나의 공병에 담아 섞어서 제조하죠.<br/><br/>

						<b>내친김에 수향과 협업해 헤이즈 향초를 만든다고 상상해볼까요. </b>밤에 내리는 비 향. 이름은 ‘Rainy Night’이 좋겠군요. ‘밤비’를 좋아해 키우는 강아지 이름도 ‘밤비’로 지었죠.
					</dd>
					<dd>
						<p class="descImgOne"><img src="../img/beauty/beauty00_11.jpg" alt="desc 01이미지"/></p>
						<p class="descText">BALLET SLIPPER 발레 슈즈처럼 청초하고 순수한 매력의 ‘퓨어 핑크’ 타입. 햇빛에 잘 마른 리넨 시트, 바람 부는 가을 벌판의 갈대, 따사로운 봄날 나뭇가지 사이로 피어난 자그마한 꽃송이의 단정하고 깨끗한 향이 떠오른다. 잘 익은 과일의 달콤함은 두말하면 잔소리. 수향의 추천 향기는 에브리데이 이스 라이크 선데이(Everyday is Like Sunday)와 걸스 넥(Girl’s Neck). 풀 내음, 당도가 절정에 이른 수박, 만다린과 녹차의 상쾌함이 어우러진 프루티 플로럴 향초 ‘걸스 넥’은 헤이즈가 반한 수향 최고의 향이다. 플라워 패턴 원피스는 4 몽클레르 시몬 로샤(4 Moncler Simone Rocha), 화이트 자개 귀고리는 앵브록스(Engbrox).</p>
					</dd>
					<dd>
						<b>눈부신 탈색 머리는 헤이즈의 트레이드마크죠. 헤어 변신은 늘 과감해요. </b>컬러만요! 스타일은 늘 비슷하답니다(웃음). 예를 들어 올백으로 넘겨 묶거나 풍성하게 펌한 적은 한 번도 없죠. 그러다 보니 할 수 있는 게 염색뿐이더군요.<br/><br/>

						<b>최근의 파란 머리도 근사했어요. 스타일 변화에 아이디어를 내는 편인가요?</b> 전문가에게 전적으로 맡겨요. 블루 톤은 염색할 때마다 늘 만족도가 높아 다시 시도했죠. 그런데 이렇게까지 파란색일 줄은 몰랐어요(웃음).<br/><br/>

						<b>‘최애’ 컬러는 뭔가요?</b> 원색 옷을 입을 때마다 ‘얼굴이 산다’는 소릴 자주 들어요. 피부가 흰 편이라 분홍, 노랑, 연두, 하늘색 등 밝은색이 잘 어울리는 것 같아요.
					</dd>
					<dd>
						<p class="descImgOne"><img src="../img/beauty/beauty00_10.jpg" alt="desc 01이미지"/></p>>
						<p class="descText">GLAM SLAM 우아하고 관능적인 ‘글래머러스 핑크’ 타입. 대체 불가 매력으로 똘똘 뭉친 이들에겐 장미, 히아신스, 가드니아의 우아한 플로럴 노트와 유혹적 머스크 노트 조합만 한 게 없다. 수향의 추천 제품은? 샴페인 슈퍼노바(Champagne Supernova), 키스 레슨(Kiss Lesson). 플라워 패턴의 오프 숄더 원피스는 드리스 반 노튼(Dries Van Noten), 실버 반지는 레인디어(Reindeer), 크리스털 귀고리는 이오공(EOØXØXØ).</p>
					</dd>
					<dd>
						<b>스스로 뒤집고 싶은 편견이 있나요? </b>다들 제가 옷 입는 거나 꾸미는 일에 관심이 많을 거라 생각하는데, 정반대예요. 편한 게 최고라는 생각으로 옷 세 벌을 일주일 내내 입으면 말 다 했죠(웃음). 무대에서 완벽하게 세팅한 모습을 보여주다 보니, 일정이 없을 때는 편한 것을 추구하는 것 같아요.<br/><br/>

						<b>그렇다면 쇼핑도 잘 하지 않겠군요? </b>온라인 쇼핑몰 딱 두 곳에서만요. 해외 브랜드는 아직 잘 모르겠어요.<br/><br/>

						<b>무엇에 가장 지출이 많은가요?</b> 식비. 저는 차도 없고 재테크도 하지 않거든요. 그냥 은행에 넣어두고 말죠. 모험을 싫어하는 안전주의 성향이 여기서도 드러나는군요(웃음).<br/><br/>

						<b>‘떡볶이 킬러’로 알려진 헤이즈가 인정하는 맛집은 어딘가요?</b> 대구 ‘윤옥연할매떡볶이’ 그리고 최근 ‘또뽀끼야’ 떡볶이에 빠졌어요. 평소 요리를 전혀 하지 않는데 그런 저를 부엌으로 이끌 만큼 중독성 강한 맛이에요. 팁이라면 파 송송, 떡은 푹 익혀 드시길.
					</dd>
					<dd>
						<p class="descImgOne"><img src="../img/beauty/beauty00_09.jpg" alt="desc 01이미지"/></p>>
						<p class="descText">THINK PINK 유행에 흔들리지 않는 단 하나의 컬러. 핑크는 여성의 전유물이 아닌 모든 유형의 아름다움을 대변한다. 화이트 재킷과 귀고리는 디올(Dior).</p>
					</dd>
					<dd>
						<b>대화 내내 크고 작은 문신에 눈길이 가는군요.</b> 시작은 왼쪽 손에 새긴 ‘Heize’. 그다음이 오른쪽 손목의 ‘Patience’였고, 왼쪽 어깨에 한자로 새긴 ‘작사가’ 타투와 그 아래 꽃 한 송이까지 총 네 개예요.<br/><br/>

						<b>수많은 단어 중 ‘인내’를 선택한 이유는 뭘까요?</b> 한때 인터넷 댓글을 누구보다 열심히 읽었어요. 그로 인한 스트레스가 상당했죠. 오른손잡이라 스마트폰 쥐는 손에 참을 인 자를 새겼어요. 의미를 부여하자면, 플라워 타투는 &lt;보그&gt;에 처음 공개하는 거예요(웃음).<br/><br/>

						<b>작업은 어떤 스타일인가요? 속전속결 혹은 지지부진? </b>그때그때 달라요. 불현듯 어떤 소재나 멜로디가 떠올라 몇십 분 만에 뚝딱 쓰기도 해요. ‘비도 오고 그래서’나 ‘널 너무 모르고’가 그랬죠. 당시 일정이 빡빡해 차 안에서 모든 걸 해결할 만큼 심신이 지쳐 있었는데, 그 시절 감성이 참 좋았던 것 같아요.<br/><br/>

						<b>공감을 부르는 진솔한 가사는 헤이즈 노래의 킬링 포인트죠.</b> 곡을 만드는 것보다 가사 쓰는 게 훨씬 어려워요. 그래서 뭐든 매일 조금이라도 끄적이죠. 감을 잃지 않기 위해.<br/><br/>

						<b>내가 만든 노래를 누군가에게 선물한다면?</b> 윤상 선배님. 제가 써드리고 싶기도 하고, 받고 싶기도 해요. 그런데 누군가에게 어울리는 노래를 만든다는 건 정말 쉽지 않아요. 작업하며 가장 고뇌한 순간도 2년 전 이문세 선배님을 위해 곡을 만들 때였죠.
					</dd>
					<dd>
						<p class="descImg"><img src="../img/beauty/beauty00_05.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/beauty/beauty00_06.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/beauty/beauty00_07.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/beauty/beauty00_08.jpg" alt="desc 01이미지"/></p>
						<p class="descText">RAZZLE-DAZZLE 누가 핑크를 모함했나. 패션 칼럼니스트 다이애나 브릴랜드는 “핑크는 새로운 블랙”이라 명했고, 마일리 사이러스는 “핑크는 곧 신념”이라 말했다. 오늘의 핑크는 당당하고, 빛나고, 또 사라지지 않는 컬러다.</p>
					</dd>
					<dd>
						<b>그야말로 여성 솔로 가수 전성시대예요. 헤이즈만의 강점은 뭔가요?</b> 솔직함.<br/><br/>

						<b>나만 아는 콤플렉스가 있다면?</b> 음, 좌우 얼굴이 달라요. 왼쪽 얼굴은 순하고, 오른쪽은 좀 날카로운 편이죠. 저는 순한 얼굴이 좋아서 셀카 찍을 때도 다 왼쪽인데, 사진가들은 오른쪽 얼굴을 좋아하는 듯 보여요.<br/><br/>

						<b>올해 서른 살이 됐어요. 미적으로 신경 쓸 일이 많아지고 돈 들여 관리하는 시기죠. </b>제 생각은 좀 달라요. 관리를 한번 하면 계속해야 하니 그 기간을 최대한 미루자는 식이죠. 쉽게 말해 피부 면역력을 키우기 위해 시술에 의존하지 않기로 했어요. 대신 술이나 담배처럼 피부에 좋지 않은 것은 멀리하죠.<br/><br/>

						<b>화장할 때 가장 신경 쓰는 부분은 어디죠? </b>눈썹과 입술. 솔직히 눈썹은 아직 명쾌한 해답을 못 찾았어요. 너무 진하거나 연해도 안 되고 두께도 적당해야 하기에 여전히 탐색 중이죠. 입술은 꽉 채워 바르기보다 자연스럽게 펴 발라요. 입술 중앙에 톡톡 찍어 바르고 손으로 퍼뜨리는 식이죠.<br/><br/>

						<b>이쯤 되면 모두가 궁금해할 파우치 필수품! </b>어뮤즈 립 제품. 만약 경쟁사의 모델이 된다고 해도 어뮤즈는 평생 쓸 것 같아요(웃음). 인생 립을 찾았거든요. ‘뉴트로 매트 나르시즘’ , ‘뉴트로 매트 애씨드(더 핑크)’ 그리고 ‘라이트 매트’ 중 오렌지 108호와 핑크 300호는 정말 최고예요. 매트한 질감인데도 덜 건조하고 지속력이 좋은 데다 색감이 과하지 않아 매일 부담 없이 바르기 좋죠.<br/><br/>

						<b>코로나19로 희미해졌지만 2020년 예정됐던 헤이즈 단독 콘서트를 기다리는 팬들이 많아요. 가상으로 연출해보면 첫 곡은?</b> 두말할 필요 없이 ‘젠가’. 공연을 위한 세팅은 끝났어요. 곧 만날 수 있기를!<br/><br/>

						<b>올해로 데뷔 7년 차예요. 스스로에게 점수를 매긴다면?</b> 10점 만점에 7점. 그런데 9점까지 채워보고 싶어요. 10점은 너무 완벽해 인간미 없어 보이니까.
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
