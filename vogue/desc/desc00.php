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
		#content .main .descTitle strong{display:block; width:100%; font-size:80px; padding:20px 0; font-family:'Pistilli', 'Playfair Display', 'Nanum Barun Gothic', "Apple SD Gothic Neo", Sans-serif;}
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
		#content .descImg{text-align:center; width:50%; float:left;}
		#content .descImgOne{text-align:center;}
		#content .descText{width:90%; padding-bottom:50px; font-size:12px; color:#777; margin:0 auto; }

	/*############ container / others ################################*/
		#others{width:10%; position:absolute; left:15%; top:2500px; border-right:2px dotted #ccc; padding-right:120px;}

		#others li{width:100%; padding:100px 0 100px; border-bottom:2px dotted #eee; text-align:center; font-weight:700; opacity:0.7;}
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
						<span><a href="../people.php" title="people">People</a></span>
						<strong>김태리의 선과 악</strong>
						<i>2020.06.24</i>
						<em>선과 악, 동화와 소설, 소년과 소녀, 아침과 밤, 과거와 미래, 아이와 어른… 그리하여 완성된 김태리의 진실 혹은 대담.</em>
					</dt>
					<dd class="mainImg">
						<p class="imgArea"><img src="../img/fashion/fashion13_09.jpg" alt="desc 메인 이미지"/></p>
						<p class="textArea">
							영화에서 다양한 인생을 누리는 김태리. 헤어밴드로 연출한 라운드 다이아몬드 목걸이는 옐로 다이아몬드로 장식했다.<br/>
							함께 어울린 커다란 오벌형 펜던트가 달린 다이아몬드 목걸이. 주얼리는 티파니(Tiffany&amp;Co.).
						</p>
					</dd>
					<dd class="sideDesc">
						<p class="sideImg"><img src="../img/fashion/fashion13_10.jpg" alt="desc 사이드 이미지"/></p>
						<div>
							<p class="sideText">핑크와 레드 깃털 드레스를 입은 김태리. 플라밍고의 우아한 자태를 닮았다. 홀터넥 오프 숄더 드레스는 16알링턴(16Arlington).</p>
							<div class="credit">
								<h4>CREDIT</h4>
								<p>패션 디렉터 손은영</p>
								<p>피처 디렉터 조소현</p>
								<p>포토그래퍼 홍장현</p>
								<p>에디터 이소민</p>
								<p>스타일리스트 최자영</p>
								<p>헤어 이혜영</p>
								<p>메이크업 오윤희(제니하우스)</p>
								<p>네일 박은경</p>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="descDesc">
					<dt>
						동굴 같은 드레스에서 빠져나온 김태리는 블랙 수트에 스니커즈 차림이었다. 우리는 스튜디오 구석 칸막이 뒤편에서 마주 앉았다. 소파에 털썩 앉아 잠시 숨을 고른 김태리는 생수를 따서 꿀꺽꿀꺽 마신 뒤 촬영하는 동안 식어버린 페퍼로니 피자를 먹기 시작했다. 햄과 치즈의 윤기는 진작에 사라졌고 도우는 사막처럼 건조하게 굳어버렸지만 김태리는 &lt;리틀 포레스트&gt;의 갓 튀겨낸 아카시아꽃튀김을 대하듯 대단히 경제적이고 간결한 동작으로 세 조각을 내리 먹어치웠다. 혜원이 그랬듯 허기를 달래고 자신의 ‘작은 숲’을 찾은 김태리가 물었다. “우리, 어디서 만난 적 있죠?”<br/><br/><br/>

						그렇다. 우리는 영화 &lt;아가씨&gt; 개봉 전 &lt;보그&gt; 촬영장에서 만난 적 있다. ‘1,500 대 1 경쟁률을 뚫고 박찬욱 감독 영화에 주연으로 캐스팅된 괴물 신인’이라는 정보 외에 아무것도 모른 채 오늘처럼 마주 앉아 인터뷰를 했다. 신상을 탈탈 털 기세로 질문을 던졌지만 김태리가 가장 많이 들려준 대답은 “모르겠어요”였다. 즉각적 대답은 아니었다. 질문에 가만히, 곰곰이 생각하다가 모르겠다고 했다. 당황하거나 미안해하지 않았다. 그 당시 기억을 들려주자 김태리는 번개를 맞은 듯 껄껄껄껄 웃었다. “그랬을 거예요. 그랬을 거예요. 시야가 경주마처럼 가려져 있어서 주변을 잘 못 봤거든요.”<br/><br/><br/>

						나는 ‘모르겠습니다’의 정체를 그녀가 선택하는 작품과, 그녀가 연기하는 인물과, 간혹 인터뷰에서 하는 말을 보며 몇 년에 걸쳐 어렴풋이 알 수 있었다. &lt;아가씨&gt; 이후 김태리가 선택한 첫 작품은 &lt;리틀 포레스트&gt;였다. 사계절을 담기 위해 꼬박 1년간 촬영한 영화에서 자연을 재료 삼아 밥을 지어 먹고 육체로 노동하며 고단한 청춘의 얼굴을 맑게 비워냈다. 그다음 영화는 6·10 민주 항쟁을 바탕으로 한 &lt;1987&gt;이었다. 한국 영화를 견인하는 빼곡한 남자 배우들 사이 단순한 홍일점으로 보여 기대가 크지 않았으나 막상 영화를 보니 주인공은 김태리였다. 시대를 대표하는 가장 보통 사람, 유일하게 변화하는 사람. 관객은 김태리가 연기한 연희의 호흡을 고스란히 따라갔다. 로맨스 드라마의 장인 김은숙 작가의 &lt;미스터 션샤인&gt;에서도 김태리는 달랐다. 조선의 독립을 위해 총포를 겨눴고, 남자에게는 헌신이 아닌 사랑을 줬다. 한국의 감독과 작가들이 이 총명한 배우의 가능성을 실험하고 싶어 한다는 인상을 주는 필모지만 그 속에서 스스로의 쓰임새를 탐구한 건 김태리 본인처럼 보였다. 어떤 계기를 통해 갑자기 엄청난 주목을 받았을 때 배우들이 선택하는 전형적인 행보와는 달랐다. 나는 ‘신인다운 풋풋함’이 배우의 세계에서 역사 뒤편으로 사라졌음을 느꼈다. 연극 무대에서 경력을 쌓아 처음부터 안정적인 연기를 선보이는 김태리 같은 배우만이 데뷔한다는 얘기는 아니다. 자신이 원하는 게 무엇인지 정확히 알아야만 움직이는 배우의 등장이었다. ‘모르겠습니다’는 오히려 멈추지 않는 사유의 표현이었다.
					</dt>
					<dd>
						<p class="descImg"><img src="../img/fashion/fashion13_04.jpg" alt="desc 01이미지"/></p>
						<p class="descImg"><img src="../img/fashion/fashion13_05.jpg" alt="desc 02 이미지"/></p>
						<p class="descText">수많은 망사 러플과 리본을 모아 완성한 오브제 같은 드레스. 토모 코이즈미는 틀을 깨는 과감한 드레스로 단번에 유명해졌다. 배우 김태리 역시 단 한 편의 데뷔작으로 존재감을 드러냈다. 드레스는 토모 코이즈미(Tomo Koizumi). 오묘한 컬러 스펙트럼을 보여주는 드레스는 팔색조처럼 매력적인 분위기를 풍긴다. 거대한 소매를 들어 올리자 마치 솜사탕 같은 실루엣이 연출됐다.</p>
					</dd>
					<dd>
						김태리의 차기작은 영화 &lt;승리호&gt;다. (2020년 여름 손꼽히는 기대작이었으나 하반기에 만나볼 수 있을 듯하다.) &lt;늑대소년&gt;, &lt;탐정 홍길동: 사라진 마을&gt;에서 시공간을 초월한 판타지를 솜씨 좋게 풀어낸 조성희 감독이 창조한 2092년 이야기다. 무려 한국 최초의 우주 SF영화다. 김태리는 선장 역을 맡았다. 잠깐, 한국 영화에서 선장 역을 맡은 배우가 있었던가. 김윤석이 연기한 영화 &lt;해무&gt; 속 선장밖에 떠오르지 않는다. &lt;승리호&gt; 장 선장은 그런 비릿한 욕망을 가진 인물이 아니다. 올백 단발머리에 ‘라이방’ 보잉 선글라스를 쓴 채 레이저 건을 발사하며 우주를 누빈다. 마녀 혹은 ‘이 구역 미친년’으로 불린다. 선장이라는 말만 들어도 멋있다는 말에 김태리는 몸을 일으키더니 “고맙습니다”라고 화답했다. 그리고 장 선장이 얼마나 멋진지 들려주었다. “선장님은 선내에서 가장 이성적이고 현실적으로 판단하는 사람이에요. 선장님은 방아쇠예요. 선원들이 우왕좌왕 ‘장전해’, ‘조준해’ 하고 있으면, ‘너희 다 비켜’ 하며 방아쇠를 당기는 인물이죠.” 다만 스타일링은 어색했던 모양이다. “선글라스… 저는 끝까지 어색했어요. (웃음) 적응이 좀 오래 걸렸나 봐요. ‘나는 괜찮다’ 세뇌하면서 했죠.” 선장이라는 캐릭터에서 연상되는 리더십과 실제 김태리는 지구에서 달나라만큼 떨어져 있다. “저는 눈에 안 띄는 귀퉁이에서 혼자 즐기길 좋아하는 사람입니다.” 하지만 조성희 감독은 &lt;보그&gt;에 “김태리 배우가 아닌 다른 선장은 상상할 수도 없습니다”라고 전했다. 김태리는 설명을 이어갔다. “선장님이 팀원들을 이끌기보단 각자 자기 몫이 있어요. 자기 방이 있고 각자 할 일이 있어요. 서로 죽일 듯이 싸워도 마지막에는 ‘저런 데선 믿을 만해. 저건 믿을 구석이 있어’ 하며 선장님에 대해 신뢰를 드러내요. 선배들과 우리가 보여줘야 할 것에 대해 이야기를 많이 나눴어요. 가족이었어요. 승리호 안에서 가족적인 모습이 어떻게 배어 나올 수 있을까 고민했습니다.”<br/><br/><br/>

						&lt;승리호&gt;의 배경 2092년은 디스토피아에 가깝다. 김태리도 유토피아를 상상한 적은 없다고 했다. “어릴 때 막연하게 미래를 생각하면 무서웠어요. 광활한 우주 속에 먼지 같은 존재가 나중에는 다 없어지겠지 싶어 생각하지 않으려고 했어요. 미래에는 인간은 무엇이며 어떻게 살아야 하는가 철학적인 질문을 더 많이 던져야 할 듯싶어요.” 승리호는 돈 되는 우주 쓰레기를 찾아 항해하는 우주 청소선이다. “지구가 아닌 우주로 생활 터전이 확장됐을 때 인간이 밖에 나가서 사니까 쓰레기가 생기는 거예요. 그러면 청소부가 필요하고, 쓰레기의 무게나 재질에 따라 돈을 받으니까 더 좋은 쓰레기를 얻기 위해 청소부들끼리 싸우고 점점 과격해지죠. 그런 상상이 재미있었어요.” 비록 우주 청소부가 어릴 적 우리가 상상하던 미래 유망 직업은 아닐지라도 말이다. “SF영화 하면 번쩍번쩍 광나는 수트 입고 멋진 우주선 타는 모습을 떠올리기 마련인데 저희는 인간들이 지지고 볶아요. 그런 점도 재미있었어요.”<br/><br/><br/>

						‘한국 최초의 우주 SF영화’라는 수식어 앞에서 &lt;승리호&gt; 배우들은 최초로 달에 발걸음을 내디딘 닐 암스트롱 같은 심정일지도 모르겠다. “진짜 어려웠어요. 머릿속으로 계속 상상 머신을 돌렸지만 그래도 너무 어려웠죠. 위안이 되는 건 다들 처음이라는 거? 선배들도 몰라요(웃음). 다 같이 알쏭달쏭하다, 맞는지 모르겠다, 이런 이야기를 하면서 해나갔습니다.” 하지만 그 어려움 가운데 가슴을 간질이는 성취감이 있었다. “배우, 촬영, 조명, 미술 모두 자기 분야에서 잘하는 분들인데 이 장르에서는 초짜잖아요. 각자 최대한 상상력을 발휘해서 하나하나 만들어갔어요. 영화 만드는 것 자체도 어려운 일인데 새로운 장르에서 다 같이 무언가를 만들어내고 있구나, 우리가 굉장한 도전을 하고 있구나. 그런 느낌이 참 좋았어요.” 대한민국 어디에선가 후반 작업에 여념이 없을 조성희 감독은 김태리와 함께 한 작업에 대해 다음과 같이 전했다. “저희가 선택한 게 아니고 김태리 배우가 우리 영화를 선택해준 거라고 생각합니다(웃음). 제가 감히 김태리를 평가할 수는 없지만, 김태리는 어마어마하게 스펙트럼이 넓으며, 동물적인 본능으로 연기하는 정말 경이로운 배우입니다.”
					</dd>
					<dd>
						<p class="descImg"><img src="../img/fashion/fashion13_02.jpg" alt="desc 03 이미지"/></p>
						<p class="descImg"><img src="../img/fashion/fashion13_03.jpg" alt="desc 04 이미지"/></p>
						<p class="descText">1. 고전미와 여전사 같은 강인함이 적절히 혼합된 알렉산더 맥퀸(Alexander McQueen)의 퍼프 소매 드레스. 벨트와 빈티지 닥터 마틴 슈즈를 매치하자 매니시한 매력마저 풍긴다.<br/>2. 김태리의 소녀 같은 매력과 만난 벨벳 미니 드레스. 부드러운 곡선형 오프 네크라인을 따라 장식한 컬러풀한 젬스톤이 포인트. 드레스는 데이비드 코마(David Koma).</p>
					</dd>
					<dd>
						지금 김태리에게 거는 기대는 장르 영화 속 앙상블 배우로서 가능성이다. 사실 김태리가 영화계에 입문했을 때는 여성 캐릭터의 다양성이 ‘비로소’ 넓어지던 시점이었다. 주체적이고 입체적인 인물에 대한 목마름이 극에 달해 있었고 김태리는 차분하게 심지가 단단하면서도 흥미진진한 인물들을 보여줬다. 팟캐스트 ‘JJ 팝콘토크’를 진행하는 영화 칼럼니스트 홍수경은 그동안 여자 배우들이 기능적으로만 머물던 장르물이 대부분이었기에 답답함이 컸다고 말한다. “휴먼 드라마와 장르물을 자유자재로 넘나드는 여자 배우는 귀합니다. 김태리는 &lt;아가씨&gt; 같은 작가 영화, &lt;리틀 포레스트&gt;처럼 힘 뺀 영화, &lt;미스터 션샤인&gt; 같은 로맨스 장르물에서 안정적인 연기를 보여줬어요. 특히 &lt;1987&gt;을 통해 앙상블 연기에서 탁월한 역량을 보여줬다고 생각합니다. 다른 배우들과 섞여 튀지 않으면서도 존재감을 단단하게 드러냈죠. 한국 영화에서 단독 주연, 공동 주연, 조연을 두루 맡아 제 몫을 해내며 대성하는 여자 배우를 찾기는 쉽지 않은데 김태리가 그 길을 걸어가는 듯해 기대가 됩니다.” &lt;승리호&gt;를 성공적으로 이끈다면 김태리는 새로운 세대의 배우라 불리는 자신의 수식어를 더욱 견고히 할 것이다.<br/><br/><br/>

						새로운 세대의 배우의 특징이 무엇이냐 묻는다면 지난해 영화 평론가 김형석이 &lt;보그&gt;에 보내온 글을 참고하는 편이 좋겠다. “1990년대 후반부터 최근까지 우리의 생각을 지배한 ‘좋은 연기’란 ‘열연’이었고, 배우들에게 ‘파격 변신’은 중요한 미덕이었다. 하지만 최근 등장한 배우들은 힘주어 자신을 변형시켜 캐릭터를 창조하던 선배들의 방법론에서 한 걸음 벗어나, 주어진 캐릭터에 조금씩 맞춰나가되 절대 자기 자신의 느낌을 지우지 않는다. 꽉 찬 느낌은 덜하더라도 뭔가 여백이 있고, 긴장 상태에서 응축한 후 폭발시키는 것이 아니라 느슨하지만 은은하게 뿜어내는 스타일의 연기. 김태리는 이러한 경향을 대표하는 배우다.” 열정의 크기라든지, 노력 여부를 비교하는 것이 아니다. 김태리에게는 ‘고유한 것’이 있다. 이런 특별함은 광고나 브랜드와 작업에서도 도드라지게 드러난다. &lt;보그&gt; 뷰티 디렉터 출신의 뷰티 크리에이티브 디렉터 백지수는 김태리가 가진 전형적이지 않으면서 새로운 자연스러움과 아름다움에 대해 말한다. “눈빛에서 오는 힘이 정말 강렬합니다. 어떤 스타일링을 해도, 어떤 상황에 놓여도 자신의 눈빛은 그대로 둔 채 이미지 변신을 해냅니다. 무표정할 때도 웃을 때도, 가까이서도 멀리서도 자신만의 개성을 유지하는 것도 큰 특징입니다.”<br/><br/><br/>

						그러고 보면 김태리는 웃을 때 손으로 입을 가리지 않는다. 팝콘이 터지듯 웃어버린다. 겅중겅중 점프하듯 걸어 다닌다. 보폭은 본인의 키의 반을 훌쩍 넘어 보인다. 한때 김태리의 걸음이 인터넷에서 화제가 된 적이 있다. 계단도 한꺼번에 몇 개씩 넘어 다닌다. “그 사진 저도 봤어요. 진짜 심하던데요? 거의 두루미, 황새.” 활기차면서도 물기 머금은 목소리로 “다 급한 성격 탓”이라고 했다. 오늘도 어김없이 성격 급한 김태리는 &lt;보그&gt; 촬영장에서도 집채만 한 드레스 자락을 움켜쥐고 메이크업 룸과 호라이즌을 순간 이동하듯 옮겨 다녔다.
					</dd>
					<dd>
						<p class="descImgOne"><img src="../img/fashion/fashion13_07.jpg" alt="desc 05 이미지"/></p>
						<p class="descText">레이스를 장식한 일자형 실루엣의 검정 실크 드레스는 발렌시아가(Balenciaga). 에메랄드 컷 루벨라이트, 라운드 브릴리언트 컷과 바게트 컷 다이아몬드 장식의 볼드한 뱅글은 티파니(Tiffany&amp;Co.).</p>
					</dd>
					<dd>
						코로나19 바이러스로 전원을 내린 듯 세상이 멈춰버렸을 때 김태리는 오디오 북 녹음을 했다. 알베르 카뮈 &lt;이방인&gt;, 어니스트 헤밍웨이 &lt;노인과 바다&gt;, 조지 오웰 &lt;1984&gt; 등 고전 문학 작품을 읽어 내려갔고 5월 말부터 네이버 ‘김태리의 리커버북’에서 차례차례 공개되고 있다. “연극할 때 시각장애인 역할을 맡은 적이 있어요. 그 당시에 시각장애인 복지관에 나가며 낭독 봉사를 알게 됐고 몇 번 녹음했죠. 꾸준히 하면 좋았을 텐데 그렇게 안 됐어요. 좋은 기억이었고 늘 하고 싶었고 내가 할 수 있는 일이라고 생각해오던 차에 기회가 닿았죠. 책 읽어주는 팟캐스트도 좋아하거든요.” 물론 책 읽기만큼 김태리는 영상도 좋아한다. 90년대생다운 특징을 알려달라는 요구에 “유튜브 합니다. 너무 재미있습니다. 유튜브는 하루에 5시간씩 봐줘야 하는 거 아닙니까?”라며 웃었다. “유튜브는 자꾸 나를 정의합니다. ‘너 이런 거 좋아하지?’, ‘맞아 좋아해’ 계속 봅니다. 지금은 래퍼들 인터뷰가 가장 많이 떠 있어요. 힙합 좋아하거든요. 힙합은 자기 이야기를 많이 해서 재미있어요.” 김태리의 리커버북에서 본격적인 소설 읽기에 앞서 김태리는 주문을 걸듯 말한다. “눈을 감고 귀를 기울여주세요. 우리는 어느 이야기의 문이든 열 수 있어요.” ‘이야기로의 초대’는 김태리가 가장 잘하는 것이다.<br/><br/><br/>

						반면, 지금 나누는 대화, 인터뷰는 가장 힘든 것이다. “사실 다 말이잖아요. 시간이 지나면 그때의 나와 지금의 내가 다르고요. 좋은 말 찾아서 애써 꾸며야 될 때도 있고요. 그런 과정이 힘들어요. 제가 말을 잘 못해서요.” 아이러니한 건 인터넷상에는 김태리가 한 인터뷰가 어록으로 여전히 확산되고 있다는 사실. 그녀의 인터뷰가 회자되는 건 뚜렷한 생각 때문이다. 그녀는 할 수 있는 한 자신에게 집중하고자 한다. 늘 그렇진 않지만 생각을 정돈하고 기록하려는 편이다. “갑자기 어떤 생각이 들어오면 간직하고 싶은 마음이 있어요. 그러면 기록해놓거나 다른 사람을 만났을 때 같이 이야기해요. 최근에 어떤 책을 읽었는데 ‘바람은 지가 가고 싶은 대로 분다’라고 쓰여 있었어요. 그게 제 최근 상태였거든요. 내가 가고 싶은 방향으로 가는 것. 내가 하고 싶은 걸 하는 것. 그 생각을 가지고 지내고 있었어요. 그러다가 라이터를 봤는데 불꽃이 흔들리는 거예요. ‘불꽃은 바람이 가는 대로 가네. 불꽃은 뭘까? 사랑인가?’ 싶어서 사랑을 하고 있는 친구한테 ‘너는 불꽃이니? 바람이니?’ 물어봤어요. 그런 생각을 이야기하길 좋아해요. 잊어버리면 아까우니까요.”<br/><br/><br/>

						이제 김태리는 가장 좋아하는 곳, 촬영 현장으로 돌아간다. &lt;승리호&gt; 이후 그녀를 기다리는 작품은 최동훈 감독의 &lt;외계인&gt;이다. “저는 현장에 있을 때가 제일 좋은 것 같아요. 제 일터요. 연기하는 순간이 아니라 선배님들이나 스태프분들이랑 수다 떨고 춤추고 이야기하고 그러다가 혼자 아무 데나 걸터앉아서 현장이 흘러가는 모습을 지켜보고 있으면 되게 좋아요. 일이니까 자연스럽게 해오다가 문득 그런 생각이 떠오르면 설레는 마음이 들어요.”<br/><br/><br/>

						&lt;보그&gt; 7월호 표지 사진에서 토모 코이즈미의 드레스 아래 본능적으로 내디딘 김태리의 발이 보였다. 하이힐이 아닌, 끈 풀린 하얀색 컨버스 운동화를 신은 김태리의 발. 1950년 어빙 펜이 촬영한 발렌시아가 오뜨 꾸뛰르 흑백사진이 떠올랐다. 열기구를 뒤집어놓은 듯 풍성한 드레스 아래에도 가지런한 발이 보였다. 그동안 가장 용기를 낸 일을 물었을 때 김태리는 “모든 작품을 선택한 것”이라고 대답했다. “계속 제 역량에 비해 과분한 역할을 하고 있기 때문에 선택 자체에 큰 용기가 필요합니다. 작품에 임하면서도 계속 나약해지는데 그만큼 용기를 또 내고 있습니다. 유연한 배우가 되고 싶습니다. 갇혀 있지 않은 흐르는 배우. 제가 잘 못하고 있기 때문에 그렇게 되면 좋겠어요.” 날아오를 준비를 마친 듯한 발. 가야 할 곳이 많은 발. 이야기를 시작하는 듯한 발. 김태리는 겅중겅중 걸어서 스튜디오를 빠져나갔다.
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
				<li>
					<a href="#none" title="다른 기사5">
						<span class="otherImg"><img src="../img/people/people03.jpg" alt="다른 기사 이미지5"/></span>
						<span class="otherTitle">1988년 쌍문동을 시끌벅적하게 했던 친구들이 있습니다.사고뭉치이지만 착한 덕선이</span>
					</a>
				</li>
				<li>
					<a href="#none" title="다른 기사6">
						<span class="otherImg"><img src="../img/people/people04.jpg" alt="다른 기사 이미지6"/></span>
						<span class="otherTitle">제이미가 된 조권, 신주협, MJ, 렌</span>
					</a>
				</li>
				<li>
					<a href="#none" title="다른 기사7">
						<span class="otherImg"><img src="../img/fashion/fashion02.jpg" alt="다른 기사 이미지7"/></span>
						<span class="otherTitle">Hidden Pleasure</span>
					</a>
				</li>
				<li>
					<a href="#none" title="다른 기사8">
						<span class="otherImg"><img src="../img/fashion/fashion07.jpg" alt="다른 기사 이미지8"/></span>
						<span class="otherTitle">31 Rue Cambon, Paris</span>
					</a>
				</li>
				<li>
					<a href="#none" title="다른 기사9">
						<span class="otherImg"><img src="../img/fashion/fashion11.jpg" alt="다른 기사 이미지9"/></span>
						<span class="otherTitle">오스카의 여인 마리옹 코티아르</span>
					</a>
				</li>
				<li>
					<a href="#none" title="다른 기사10">
						<span class="otherImg"><img src="../img/fashion/fashion08.jpg" alt="다른 기사 이미지10"/></span>
						<span class="otherTitle">수지의 숨겨진 이미지</span>
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
				<p class="legal"><a href="../policy.php" title="개인정보 취급방침">개인정보 취급방침</a></p>
			</div>
		</footer>
	</div>
 </body>
</html>
