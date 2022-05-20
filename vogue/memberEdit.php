<?php
	include "00_conn.php";
	session_cache_expire(15);
	session_start();
	
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>sign_up</title>
  <meta charset="utf-8"/>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
  <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <style>
	/* ############ 초기화 #############*/
		*{margin:0; padding:0;}
		li{list-style-type:none;}
		a:link, a:visited{text-decoration:none; color:#000;}
		a:hover, a:focus{color:#f00;}
		img{border:none;}
		body{margin:0; padding:0;}
		
			/*기본 hr 설정*/
		.hr{width:90%; border:1px solid #ddd; padding:50px 5%;}

	/*######################## wrap ################################*/
		#wrap{width:100%; height:100vh; position:relative;}

	/*################### header ################################*/
		#header{width:90%; height:100px; position:absolute; left:5%; top:0; transition:height 0.5s linear;}
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
    /*################### container ###############################*/
		#container{width:100%; padding-top:100px; font-family: 'Noto Sans KR', sans-serif;}
		
		/*###### title 부분 ##########*/
		.title{width:90%; height:150px; margin:20px auto 0; border-bottom:1px solid #ccc;}
		.title h2{float:left; height:100%; line-height:150px; font-size:30px;}
		.step{float:right; height:100%;}
		.step p{height:100%; line-height:150px; display:inline-block; padding:0 10px; font-weight:700; color:#ccc;}
		.step .sctS{color:#000;}
		
		/* float 끊어주는 영역*/
		.title:after, #container form ul li:after{content:""; display:block; clear:both;}
		
		
		/*######## form 부분 #########*/
		#container form{width:90%; margin:0 auto; padding-bottom:100px;}
		#container fieldset{width:900px; border:none; margin:50px auto 0;}
		#container .le{float:left; padding-bottom:20px; font-size:20px;}
		#container .re{float:right;}	
		
		#container form ul{width:100%; clear:both; border-top:1px solid #333;}
		#container form ul li{border-bottom:1px solid #ccc; line-height:45px;}
		#container form ul li input{display:inline-block; margin-left:10px; border:1px solid #ccc; height:28px; line-height:28px; text-indent:5px; outline:none;}
		select{margin-left:10px; border:1px solid #ccc; height:28px; width:50px; cursor:pointer;}
		#b_year{width:70px;}
		label{width:150px; height:50px; display:block; float:left; background-color:rgba(0,0,255,0.01); font-size:14px; text-indent:5px;}
		.red{display:inline-block; width:20px; color:#f00;}
		input[type=radio], input[type=checkbox], #sign, #cancel{cursor:pointer;}
		
		
		/* input 개별 작업 */
			#username, #phone, #email{width:300px;}
			#userpw, #userpwChk{width:200px;}
			#sms{vertical-align:middle; margin-right:10px;}
			.agr{font-weight:400; font-size:14px;}
		

			.addArea label{height:100px; line-height:100px;}
			#address, #address2{width:400px;}
			.info{color:#aaa; font-size:12px; line-height:5px;}
			
			.sleepZ{font-size:14px;}
			.sleepZ input{vertical-align:middle; margin-right:5px;}
		
			#postBtn{width:120px; cursor:pointer;}
			#IDchkBtn{font-size:14px; width:100px; vertical-align:middle; cursor:pointer;}
			#IDchkDesc{font-size:14px; color:#555;}


		



		#container form div{width:500px; margin:20px auto 0; text-align:center;}
		#container form div input{display:inline-block; margin:0 5px; width:150px; height:50px; font-weight:700;}
		#sign{background-color:#333; color:#fff;}
		
		#sele{color:blue; width:50px; text-align:right;}
		#sms2{opacity:0; cursor:default;}
    /*########## footer ###########*/
		#footer{width:100%; height:7vh; position:fixed; left:0; top:93vh; overflow:hidden; background-color:#000;}
		#footer p{width:100%; height:100%; position:absolute; left:0; top:0; text-align:center;}
		#footer a{display:inline-block; height:100%;}
		#footer a img{height:5vh; margin-top:1vh;}

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

			$("#cancel").click(function(){
				location.href="index.php"
			});

			
		// 생일 입력란 자동으로 .option값 채우기 
			var d=1;
			for (d=1; d<32; d++)
			{
				$("#b_date").append("<option value='"+d+"'>"+d+"</option>");
			}
			var m=1;
			for (m=1; m<13; m++)
			{
				$("#b_month").append("<option value='"+m+"'>"+m+"</option>");
			}
			var y=2020;
			for (y=2020; y>1899; y--)
			{
				$("#b_year").append("<option value='"+y+"'>"+y+"</option>");
			}
				
			$("input[type='radio']").click(function(){
				var sctS=$(this).attr("title");
				switch(sctS){
					case "oneY" : $("#sele").val("1"); break;
					case "threeY" : $("#sele").val("3"); break;
					case "fiveY" : $("#sele").val("5"); break;
					case "unlimite" : $("#sele").val("99"); break;
				}
			});
			var sms=$("#sms").prop("checked");
			if (sms==true)
			{
				$("$sms2").val("Y");
			}
			else{
				$("$sms2").val("n");
			}
		});	
		// 회원가입 유효성 검사
		function check(){
			var pw=document.getElementById("userpw");
			var pwChk=document.getElementById("userpwChk");
			
			var ls=document.getElementById("lunarSolar");
			var bd=document.getElementById("b_date");
			var bm=document.getElementById("b_month");
			var by=document.getElementById("b_year");

		};

		// 우편번호 검색
		function post(){		
			new daum.Postcode({
				oncomplete: function(data) {
					document.getElementById("postcode").value = data.zonecode;
					document.getElementById("address").value = data.address;
					document.getElementById("address2").focus();
				}
			}).open();
		};

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
					<p style="width:310px;"><a href="member.php?username=<?=$_SESSION['username']?>" title="개인설정" style="color:hotpink; font-size:22px; font-weight:700;"><?=$_SESSION['username']?></a><span style="color:#fff; font-weight:700; font-size:20px;">님 이용중</span>&nbsp;&nbsp;&nbsp;<a href="logout.php" title="로그아웃" style="font-size:18px; color:red; font-weight:700;">&lt;LOGOUT&gt;</a></p>
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
								<li><a href="policy.php" title="개인정보 처리방침">개인정보 처리방침</a></li>
							</ol>
						</li>
						<li><a href="member.php?username=<?=$_SESSION['username']?>" title="개인설정" style="color:hotpink; font-size:16px; font-weight:700;"><?=$_SESSION['username']?></a><span style="font-weight:700;">님  접속</span>&nbsp;&nbsp;&nbsp;<a href="logout.php" title="로그아웃" style="font-size:14px; color:red; font-weight:700;">LogOut</a></li>
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
			<div class="title">
				<h2>회원정보 변경</h2>
			</div>
			<form action="memberEdit_control.php" method="post">
				<fieldset>
					<legend class="le">기본정보</legend>
					<p class="re"><span class="red">+</span> 비밀번호가 틀릴경우 변경이 불가능합니다</p>
					<ul>
						<li>
							<label for="email"><span class="red">+</span> 아이디 (email)</label><input id="email" type="email" name="email" style="border:none;" value="<?=$_SESSION['useremail'];?>" required="required" readonly autocomplete="off"/>
						</li>
						<li>
							<label for="userpw"><span class="red">+</span> 비밀번호</label><input id="userpw" type="password" name="userpw" placeholder="8~20자" maxlength="20" minlength="8" required/>
						</li>
						<li>
							<label for="username"><span class="red">+</span> 이름</label><input id="username" type="text" name="username" style="border:none;" value="<?=$_SESSION['username'];?>" required autocomplete="off" readonly/>
						</li>
						<li>
							<label for="phone"><span class="red">+</span> 휴대폰 번호</label><input id="phone" type="tel" name="phone" value="<?=$_SESSION['userphone'];?>" maxlength="11" required autocomplete="off"/>
							<input id="sms" type="checkbox" checked="checked" title="SMS 수신 동의"/><span class="agr">정보/이벤트 SMS 수신에 동의합니다.</span><input id="sms2" value="Y" name="sms" readonly/>
						</li>
					</ul>
				</fieldset>
				<fieldset>
					<legend class="le">부가정보</legend>
					<ul>
						<li class="bArea">
							<label for="lunarSolar"><span class="red"></span> 생일</label>
							<select id="lunarSolar" name="lunarSolar"><option value="selected" selected="selected">선택</option><option>양력</option><option>음력</option></select>
							<select id="b_year" name="b_year"><option value="year">년</option></select>
							<select id="b_month" name="b_month"><option value="month">월</option></select>
							<select id="b_date" name="b_date"><option value="day">일</option></select><br/>
							<!--<span class="info">
								&nbsp;&nbsp;&nbsp;(정보통신망법에 따라 만14세 미만의 아동은 법정대리인의 동의를 확인 후 회원가입 할 수 있습니다.)
							</span>-->
						</li>
						<li>
							<label for="postcode"><span class="red"></span> 우편번호</label><input id="postcode" type="tel" name="postcode" readonly/><input id="postBtn" type="button" value="우편번호 찾기" onclick="post();"/>
						</li>
						<li class="addArea">
							<label for="address"><span class="red"></span> 주소</label><input id="address" type="text" name="address" autocomplete="off"/><br/>
							<input id="address2" type="text" name="address2" title="상세주소" autocomplete="off"/>
						</li>
						<li class="sleepZ">
							<label for="oneY"><span class="red"></span>휴면회원 방지기간</label>
							<input id="oneY" type="radio" name="sleep" checked="checked" title="oneY"/>&nbsp;1년&nbsp;
							<input id="threeY" type="radio" name="sleep" title="threeY"/>&nbsp;3년&nbsp;
							<input id="fiveY" type="radio" name="sleep" title="fiveY"/>&nbsp;5년&nbsp;
							<input id="unlimite" type="radio" name="sleep" title="unlimite"/>탈퇴시&nbsp;-&nbsp;평생회원&nbsp;
							<input id="sele" type="text" name="sleepW" value="1" title="선택된 값" style="border:none;" readonly/><span style="color:#777;">년 선택</span>
						</li>
					</ul>
				</fieldset>
				<div>
					<input id="cancel" type="button" value="돌아가기" />
					<input id="sign" type="submit" style="background-color:#a00;" value="수정하기"/>
				</div>
			</form>
		</div>
		<footer id="footer">
			<p class="footer_logoV vogue">
				<a href="index.php" title="vogue"><img src="img/vogue_footer_logo.png" alt="풋터 로고"/></a>
			</p>
		</footer>
	</div>
 </body>
</html>
