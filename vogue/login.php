<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>login</title>
  <meta charset="utf-8"/>
  <link href="https://fonts.googleapis.com/css2?family=Song+Myung&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <style>
	/* ############ 초기화 #############*/

		
		*{margin:0; padding:0;}

		li{list-style-type:none;}
		a:link, a:visited{text-decoration:none; color:#000;}
		img{border:none;}
		

	/*############ hover 선택 기능 ##################*/
	
		
		/*body 배경색 지정*/
		body{margin:0; padding:0; background-color:#fff;}



		/*기본 hr 설정*/
		.hr{width:90%; border:1px solid #ddd; padding:50px 5%;}
		
	/*########## 모바일 버전 숨기기 ############*/	
		#headerMWrap, #visualM, #main_contM{display:none;}
		
		


	/*######################## wrap ################################*/
		#wrap{width:100%; height:100vh; position:relative; margin:0 auto; overflow:hidden; background-color:#fff;}

	/*################### header ################################*/
		
		
	
		
		#header{width:100%; height:100px; position:absolute; left:50%; top:0; transition:height 3s linear; z-index:5; transform:translatex(-50%);}
		#header a:hover, #header a:focus{color:#f40;}
		#header h1{width:20%; height:150px; position:absolute; left:25%; top:12vh; margin-left:-5%;}
		#header h1 img{width:80%;}

		
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
		#gnb{width:100px; height:100%;}
		#gnb div{width:100%; height:100%; float:left;}
		#gnb div p{width:100%; height:100%; position:relative;}
		#gnb div p a{display:block; width:100%; height:100%;}
		#gnb div p img{width:36px; margin-top:35px; margin-left:25px;}
		#gnb div p .menu_hover{width:100%; position:absolute; left:0; top:0; display:none;}

		#gnb div p:hover .menu_hover{display:block;}


		#gnb ul{display:none; width:90%; height:100%; text-align:right; float:right; overflow:hidden;}
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
		#lnb .sideMenu li:last-child{font-weight:700;}
		#lnb .sideMenu li:last-child a{color:#f55;}
		#lnb .sideMenu ol li:last-child{font-weight:400;}
		#lnb .sideMenu ol li:last-child a{color:#000;}


		#lnb .searchArea{width:10%; margin-right:10%; height:50%; float:right; position:relative;}
		#lnb .searchArea:hover form{display:block;}

		#lnb .searchArea p{width:20px; padding:0 25%; padding-top:10px;}
		#lnb .searchArea p img{width:100%;}
		
		#lnb .searchArea fieldset{border:none;}
		#lnb .searchArea legend{display:none;}
		#lnb .searchArea form{position:absolute; right:0; top:3px; margin-right:100%; display:none;}
		#lnb .searchArea input{width:200px; height:20px; line-height:20px; border:none; text-indent:10px; border:1px solid #555;}
	

	/*############# container ###############*/
		
		#container{width:100%; max-width:1920px; margin:0 auto; height:90vh; background-image:url(img/book0.png); background-size:cover; background-repeat:no-repeat; background-position:center 0;}
		#container img{width:100%;}
		#content{width:100%; height:100%; background-color:rgba(0,0,0,0);}
		#visual{width:100%; height:150px; position:relative;}

		#visual .vi3{width:150px; position:absolute; left:65%; top:350px;}
		#visual .vi4{width:30%; position:absolute; left:20%; top:29vh; margin-left:-7.5%; z-index:3; overflow:hidden;}
		#visual .vi4 video{width:100%; height:100%;}
		.desc01{font-size:20px; text-align:center; color:#aaa; padding-top:10px;}

		#loginArea{width:30%; position:absolute; left:50%; top:33vh; z-index:3;}
		#loginArea fieldset{width:100%; border:none;}
		legend{display:none;}
		#loginArea input{width:70%; height:50px; display:block; margin:0 auto; text-indent:10px; margin-top:5px; font-size:16px; letter-spacing:1px; border:1px solid #ccc; box-shadow:3px 3px 5px rgba(0,0,0,0.3);}
		#loginArea input[type="submit"]{text-indent:0; cursor:pointer; margin-top:20px; border:3px solid #a00; color:#fff; background-color:#a00;}
		

		#signupArea{width:100%; text-align:center;}
		#signupArea p{display:inline-block; padding:20px 10px 0;}
		#signupArea p a{padding:0 5px;}
		
		.desc02{font-family: 'Song Myung', serif; position:absolute; left:20%; top:7%; font-size:30px; color:#aaa;}


	
	/*########## footer ###########*/
		#footer{width:100%; height:10vh; border-top:2px solid #ccc;}

		#footer #mainFooter{width:100%; height:200px; background-color:#000;}
		#footer .footer_logo{width:10%; height:70px; padding-top:30px; margin:0 auto;}
		#footer .footer_logo img{width:100%;}
		#footer .copy{width:100%; text-align:center; color:#777; font-weight:100; font-size:12px; padding-top:30px;}
		#footer .legal{width:100%; text-align:center; padding-top:20px;}
		#footer .legal a{color:#aaa; font-size:13px;}


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

			// 아이디 찾기, 비밀번호 찾기 .. 기능 구현 예정
			$("#signupArea p:eq(1), #signupArea p:eq(2)").click(function(){
				alert("아직 지원되지 않습니다");
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
						<dd><a href="policy.php" title="개인정보 처리방침">개인정보 처리방침</a></dd>
					</dl>
					<p class="red"><a href="login.php" title="login">Login</a></p>
					<p><a href="agreement.php" title="sign_up">Sign up</a></p>
				</div>
			</div>
			<div id="header_inner">
				<div id="gnb">
					<div id="manu_bar">
						<p>
							<a href="#" title="메뉴 오픈"><img src="img/icon/all_menu1.png" alt="메뉴 열기"/></a>
							<a class="menu_hover" href="#" title="메뉴 오픈"><img src="img/icon/all_menu0.png" alt="메뉴 열기"/></a>
						</p>
					</div>
					<ul>
						<li><a href="fashion.php" title="fashion">fashion</a></li>
						<li><a href="beauty.php" title="beauty">beauty</a></li>
						<li><a href="living.php" title="living">living</a></li>
						<li><a href="people.php" title="people">people</a></li>
						<li><a href="video.php" title="video">video</a></li>
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
								<li><a href="policy.php" title="개인정보 처리방침">개인정보 처리방침</a></li>
							</ol>
						</li>
						<li>|</li>
						<li><a href="login.php" title="login">Login</a></li>	
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
			<div id="content">
				<div id="visual">
					<div class="vi4">
						<video loop autoplay muted>
							<source src="video/video05.mp4" type="video/mp4">
						</video>
						<p class="desc01">장기용의 VOGUE's LIFE</p>
					</div>
				</div>
				<form id="loginArea" action="login_control.php" method="post">
					<fieldset>
						<legend>로그인</legend>
						<input id="userid" type="text" name="userid" title="아이디 (4~20자)" placeholder="아이디" maxlength="20" minlength="4" required/>
						<input id="userpw" type="password" name="userpw" title="비밀번호 (8~20자)" placeholder="비밀번호" maxlength="20" minlength="8" required autocomplete="off"/>
						<input type="submit" title="로그인하기" value="로그인"/>
					</fieldset>
					<div id="signupArea">
						<p><a href="agreement.php" title="회원가입">회원가입</a></p>|
						<p><a href="#none" title="아이디 찾기">아이디 찾기</a></p>|
						<p><a href="#none" title="비밀번호 찾기">비밀번호 찾기</a></p>
					</div>
				</form>
				<p class="desc02">Fashion Is Life</p>
			</div>
		</div>
		<div id="footer">
			<div id="mainFooter">
				<p class="footer_logo"><a href="index.php" title="메인"><img src="img/vogue_footer_logo.png" alt="풋터 로고"/></a></p>
				<p class="copy">VOGUE&copy;EthanLee All Rights Reserved. lbard@naver.com</p>
				<p class="legal"><a href="policy.php" title="개인정보 취급방침">개인정보 취급방침</a></p>
			</div>
		</div>
	</div>
 </body>
</html>
