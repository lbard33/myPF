<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>agreement</title>
  <meta charset="utf-8"/>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
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
		#container form{width:90%; margin:0 auto; padding-bottom:100px; overflow:hidden;}
		#container fieldset{width:900px; border:none; margin:50px auto 0;}
		#container .le{float:left; padding-bottom:20px; font-size:20px;}
		
		#container form ul{width:100%; clear:both; border-top:1px solid #333; padding-top:20px;}
		#container form ul li{width:100%; padding:10px 0; font-size:14px; font-weight:700;}
		#container form ul li div{width:100%;}
		#container form ul li	div h4{height:30px; background-color:#dfdfdf;}
		#container form ul li	div p{padding:5px 0; text-align:left; text-indent:100px; font-size:14px; background-color:#efefef; font-weight:400;}
		input[type=checkbox]{margin-right:10px; cursor:pointer; width:20px; height:20px; vertical-align:middle;}
		#info0, #info1{display:block; width:90%; height:150px; padding:0 5%; margin-top:10px; overflow-y:scroll; cursor:default;}
		.gray{color:#aaa; font-size:12px; padding-left:10px; font-weight:400;}
		.normal{font-weight:400; padding-left:10px;}
		.viewAll{font-weight:400; margin-left:10px; font-size:12px; text-decoration:underline;}
		.viewAll a{color:#777;}

		#container form div{width:500px; margin:20px auto 0; text-align:center;}
		#container form div input{display:inline-block; margin:0 5px; width:150px; height:50px; border:1px solid #ccc; font-weight:700;}
		input[type="button"]{background-color:#333; color:#fff;}

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
			
			///////////// 체크 기능 ///////////////////////////////////////////
			
			var chk0=[0,0,0,0,0,0];

			$("input[type=checkbox]").click(function(){
				var num=$(this).prop("name").substring(5);
				
				if(chk0[num]==0){
					$(this).prop("checked",true);
	
					chk0[num]=1;
					chk0[5]=parseFloat(chk0[0])+parseFloat(chk0[1])+parseFloat(chk0[2])+parseFloat(chk0[3])+parseFloat(chk0[4]);

					if (chk0[5]>=5){
							$("#allChk").prop("checked",true);
					}
				}
				else if(chk0[num]==1){
					$(this).prop("checked",false);

					chk0[num]=0;
					chk0[5]=parseFloat(chk0[0])+parseFloat(chk0[1])+parseFloat(chk0[2])+parseFloat(chk0[3])+parseFloat(chk0[4]);
				
					if (chk0[5]<5){
						$("#allChk").prop("checked",false);
					}
				}
			});
		//############ 셀렉트 all 체크박스 클릭했을때 기능 #########################
			$("#allChk").click(function(){
				var i=0;
				if (chk0[5]<5)
				{
					$(this).prop("checked",true);
					for (i==0; i<chk0.length-1; i++)
					{
						chk0[i]=1;
					}
					$("input[type=checkbox]").prop("checked",true);
					chk0[5]=parseFloat(chk0[0])+parseFloat(chk0[1])+parseFloat(chk0[2])+parseFloat(chk0[3])+parseFloat(chk0[4]);
				}
				else if (chk0[5]>=5)
				{
					$(this).prop("checked",false);
					for (i==0; i<chk0.length-1; i++)
					{
						chk0[i]=0;
					}
					$("input[type=checkbox]").prop("checked",false);
					chk0[5]=parseFloat(chk0[0])+parseFloat(chk0[1])+parseFloat(chk0[2])+parseFloat(chk0[3])+parseFloat(chk0[4]);
				}
			});
		

		// #############다음버튼 유효성 검사 및 페이지 이동 기능 ##############
			$("input[type='button']").click(function(){
				if (chk0[0]==1&&chk0[1]==1)
				{
					location.href="sign_up.php";
				}
				//	location.href="sign_up.php";
				else 
				{
					alert("필수항목을 체크하셔야 합니다.");
				}
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
						<li>|</li>
						<li class="login"><a href="login.php" title="login">Login</a></li>	
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
				<h2>회원가입</h2>
				<div class="step">
					<p class="sctS">01 약관동의 &gt;</p>
					<p>02 정보입력 &gt;</p>
					<p>03 가입완료</p>
				</div>
			</div>
			<form action="#none" method="post">
				<fieldset>
					<legend class="le">약관동의</legend>
					<ul>
						<li>
							<input id="allChk" type="checkbox" title="전체동의" />VOGUE의 모든 약관을 확인하고 전체 동의합니다.<span class="gray">(전체동의, 선택항목도 포함됩니다.)</span>
						</li>
						<li>
							<input id="agree0" type="checkbox" name="agree0" title="약관 동의" required />(필수)<span class="normal">이용약관</span>
							<textArea id="info0" readonly>

제1조(목적)
표준약관 제10023호

이 약관은 두산매거진 회사(전자거래 사업자)가 운영하는 매거진샵 사이버 몰(이하 "몰"이라 한다)에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 한다)를 이용함에 있어 사이버몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.
※ 「PC통신등을 이용하는 전자거래에 대해서도 그 성질에 반하지 않는한 이 약관을 준용합니다」


제2조(정의)

① "몰"이란 두산매거진 회사가 재화 또는 용역을 이용자에게 제공하기 위하여 컴퓨터등 정보통신설비를 이용하여 재화 또는 용역을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.
② "이용자"란 "몰"에 접속하여 이 약관에 따라 "몰"이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.
③	 `회원`이라 함은 "몰"에 개인정보를 제공하여 회원등록을 한 자로서, "몰"의 정보를 지속적으로 제공받으며, "몰"이 제공하는 서비스를 계속적으로 이용할 수 있는 자를 말합니다.
④ `비회원`이라 함은 회원에 가입하지 않고 "몰"이 제공하는 서비스를 이용하는 자를 말합니다.
⑤ `재화`라 함은 "몰"에서 판매하는 정기구독을 의미하며, 정기구독이란 비용을 지불하고 일정기간 동안 정기간행물을 받아보는것을 의미합니다.


제3조(약관등의 명시와 설명 및 개정)

① "몰"은 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호·모사전송번호·전자우편주소, 사업자등록번호, 통신판매업신고번호, 개인정보 보호책임자등을 이용자가 쉽게 알 수 있도록 "몰"의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.
② "몰"은 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회·배송책임·환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.
③ "몰"은 전자상거래등에서의소비자보호에관한법률, 약관의규제에관한법률, 전자거래기본법, 전자서명법, 정보통신망이용촉진등에관한법률, 방문판매등에관한법률, 소비자보호법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.
④ "몰"이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 몰의 초기화면에 그 적용일자 7일이전부터 적용일자 전일까지 공지합니다.
다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 이 경우 "몰“은 개정전 내용과 개정후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.
⑤ "몰"이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간내에 "몰"에 송신하여 "몰"의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.
⑥ 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 전자상거래등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자보호지침 및 관계법령 또는 상관례에 따릅니다.


제4조(서비스의 제공 및 변경)

① "몰"은 다음과 같은 업무를 수행합니다.
1. 재화 또는 용역에 대한 정보 제공 및 구매계약의 체결
2. 구매계약이 체결된 재화 또는 용역의 배송
3. 기타 "몰"이 정하는 업무
② "몰"은 재화 또는 용역의 품절 또는 기술적 사양의 변경 등의 경우에는 장차 체결되는 계약에 의해 제공할 재화 또는 용역의 내용을 변경할 수 있습니다. 이 경우에는 변경된 재화 또는 용역의 내용 및 제공일자를 명시하여 현재의 재화 또는 용역의 내용을 게시한 곳에 즉시 공지합니다.
③ "몰"이 제공하기로 이용자와 계약을 체결한 서비스의 내용을 재화등의 품절 또는 기술적 사양의 변경 등의 사유로 변경할 경우에는 그 사유를 이용자에게 통지 가능한 주소로 즉시 통지합니다.
④ 전항의 경우 "몰"은 이로 인하여 이용자가 입은 손해를 배상합니다. 다만, "몰"이 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.


제5조(서비스의 중단)

① "몰"은 컴퓨터 등 정보통신설비의 보수점검·교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다.
② "몰"은 제1항의 사유로 서비스의 제공이 일시적으로 중단됨으로 인하여 이용자 또는 제3자가 입은 손해에 대하여 배상합니다. 단, "몰"이 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.
③ 사업종목의 전환, 사업의 포기, 업체간의 통합 등의 이유로 서비스를 제공할 수 없게 되는 경우에는 "몰"은 제8조에 정한 방법으로 이용자에게 통지하고 당초 "몰"에서 제시한 조건에 따라 소비자에게 보상합니다. 다만, "몰"이 보상기준 등을 고지하지 아니한 경우에는 이용자들의 마일리지 또는 적립금 등을 "몰"에서 통용되는 통화가치에 상응하는 현물 또는 현금으로 이용자에게 지급합니다.


제6조(회원가입)

① 이용자는 "몰"이 정한 가입 양식에 따라 회원정보를 기입한 후 이 약관에 동의한다는 의사표시를 함으로서 회원가입을 신청합니다.
② "몰"은 제1항과 같이 회원으로 가입할 것을 신청한 이용자 중 다음 각호에 해당하지 않는 한 회원으로 등록합니다.
1. 가입신청자가 이 약관 제7조제3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우, 다만 제7조제3항에 의한 회원자격 상실후 3년이 경과한 자로서 "몰"의 회원재가입 승낙을 얻은 경우에는 예외로 한다.
2. 등록 내용에 허위, 기재누락, 오기가 있는 경우
3. 기타 회원으로 등록하는 것이 "몰"의 기술상 현저히 지장이 있다고 판단되는 경우
③ 회원가입계약의 성립시기는 "몰"의 승낙이 회원에게 도달한 시점으로 합니다.
④ 회원은 제15조제1항에 의한 등록사항에 변경이 있는 경우, 즉시 전자우편 기타 방법으로 "몰"에 대하여 그 변경사항을 알려야 합니다.


제7조(회원 탈퇴 및 자격 상실 등)

① 회원은 "몰"에 언제든지 탈퇴를 요청할 수 있으며 "몰"은 즉시 회원탈퇴를 처리합니다.
② 회원이 다음 각호의 사유에 해당하는 경우, "몰"은 회원자격을 제한 및 정지시킬 수 있습니다.
1. 가입 신청시에 허위 내용을 등록한 경우
2. "몰"을 이용하여 구입한 재화등의 대금, 기타 "몰"이용에 관련하여 회원이 부담하는 채무를 기일에 지급하지 않는 경우
3. 다른 사람의 "몰" 이용을 방해하거나 그 정보를 도용하는 등 전자상거래 질서를 위협하는 경우
4. "몰"을 이용하여 법령 또는 이 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우
③ "몰"이 회원 자격을 제한·정지 시킨후, 동일한 행위가 2회이상 반복되거나 30일이내에 그 사유가 시정되지 아니하는 경우 "몰"은 회원자격을 상실시킬 수 있습니다.
④ "몰"이 회원자격을 상실시키는 경우에는 회원등록을 말소합니다. 이 경우 회원에게 이를 통지하고, 회원등록 말소전에 최소한 30일 이상의 기간을 정하여 소명할 기회를 부여합니다.


제8조(회원에 대한 통지)

① "몰"이 회원에 대한 통지를 하는 경우, 회원이 "몰"과 미리 약정하여 지정한 전자우편 주소로 할 수 있습니다.
② "몰"은 불특정다수 회원에 대한 통지의 경우 1주일이상 "몰" 게시판에 게시함으로서 개별 통지에 갈음할 수 있습니다. 다만, 회원 본인의 거래와 관련하여 중대한 영향을 미치는 사항에 대하여는 개별통지를 합니다.


제9조(구매신청) "몰"이용자는 "몰"상에서 다음 또는 이와 유사한 방법에 의하여 구매를 신청하며, "몰"은 이용자가 구매신청을 함에 있어서 다음의 각 내용을 알기 쉽게 제공하여야 합니다. 단, 회원인 경우 제2호 내지 제4호의 적용을 제외할 수 있습니다.
1. 재화등의 검색 및 선택
2. 성명, 주소, 전화번호, 전자우편주소(또는 이동전화번호) 등의 입력
3. 약관내용, 청약철회권이 제한되는 서비스, 배송료·설치비 등의 비용부담과 관련한 내용에 대한 확인
4. 이 약관에 동의하고 위 3.호의 사항을 확인하거나 거부하는 표시(예, 마우스 클릭)
5. 재화등의 구매신청 및 이에 관한 확인 또는 "몰"의 확인에 대한 동의
6. 결제방법의 선택


제10조 (계약의 성립)

① "몰"은 제9조와 같은 구매신청에 대하여 다음 각호에 해당하면 승낙하지 않을 수 있습니다. 다만, 미성년자와 계약을 체결하는 경우에는 법정대리인의 동의를 얻지 못하면 미성년자 본인 또는 법정대리인이 계약을 취소할 수 있다는 내용을 고지하여야 합니다.
1. 신청 내용에 허위, 기재누락, 오기가 있는 경우
2. 미성년자가 담배, 주류등 청소년보호법에서 금지하는 재화 및 용역을 구매하는 경우
3. 기타 구매신청에 승낙하는 것이 "몰" 기술상 현저히 지장이 있다고 판단하는 경우
② "몰"의 승낙이 제12조제1항의 수신확인통지형태로 이용자에게 도달한 시점에 계약이 성립한 것으로 봅니다.
③ "몰"의 승낙의 의사표시에는 이용자의 구매 신청에 대한 확인 및 판매가능 여부, 구매신청의 정정 취소등에 관한 정보등을 포함하여야 합니다.


제11조(지급방법) "몰"에서 구매한 재화 또는 용역에 대한 대금지급방법은 다음 각호의 방법중 가용한 방법으로 할 수 있습니다. 단, "몰"은 이용자의 지급방법에 대하여 재화 등의 대금에 어떠한 명목의 수수료도 추가하여 징수할 수 없습니다.
1. 폰뱅킹, 인터넷뱅킹, 메일 뱅킹 등의 각종 계좌이체
2. 선불카드, 직불카드, 신용카드 등의 각종 카드 결제
3. 온라인무통장입금
4. 전자화폐에 의한 결제
5. 수령시 대금지급
6. 마일리지 등 "몰"이 지급한 포인트에 의한 결제
7. "몰"과 계약을 맺었거나 "몰"이 인정한 상품권에 의한 결제
8. 기타 전자적 지급 방법에 의한 대금 지급 등


제12조(수신확인통지·구매신청 변경 및 취소)

① "몰"은 이용자의 구매신청이 있는 경우 이용자에게 수신확인통지를 합니다.
② 수신확인통지를 받은 이용자는 의사표시의 불일치등이 있는 경우에는 수신확인통지를 받은 후 즉시 구매신청 변경 및 취소를 요청할 수 있고 "몰"은 배송전에 이용자의 요청이 있는 경우에는 지체없이 그 요청에 따라 처리하여야 합니다. 다만 이미 대금을 지불한 경우에는 제15조의 청약철회 등에 관한 규정에 따릅니다.


제13조(재화등의 공급)

① "몰"은 이용자와 재화등의 공급시기에 관하여 별도의 약정이 없는 이상, 이용자가 청약을 한 날부터 7일 이내에 재화 등을 배송할 수 있도록 주문제작, 포장 등 기타의 필요한 조치를 취합니다. 다만, "몰"이 이미 재화 등의 대금의 전부 또는 일부를 받은 경우에는 대금의 전부 또는 일부를 받은 날부터 2영업일 이내에 조치를 취합니다. 이때 "몰"은 이용자가 재화등의 공급 절차 및 진행 사항을 확인할 수 있도록 적절한 조치를 합니다.
② "몰"은 이용자가 구매한 재화에 대해 배송수단, 수단별 배송비용 부담자, 수단별 배송기간 등을 명시합니다. 만약 "몰"이 약정 배송기간을 초과한 경우에는 그로 인한 이용자의 손해를 배상하여야 합니다. 다만 "몰"이 고의·과실이 없음을 입증한 경우에는 그러하지 아니합니다.


제14조(환급)

"몰"은 이용자가 구매신청한 재화등이 품절 등의 사유로 인도 또는 제공을 할 수 없을 때에는 지체없이 그 사유를 이용자에게 통지하고 사전에 재화 등의 대금을 받은 경우에는 대금을 받은 날부터 2영업일 이내에 환급하거나 환급에 필요한 조치를 취합니다.


제15조(청약철회 등)

① "몰"과 재화등의 구매에 관한 계약을 체결한 이용자는 수신확인의 통지를 받은 날부터 7일 이내에는 청약의 철회를 할 수 있습니다.
② 이용자는 재화등을 배송받은 경우 다음 각호의 1에 해당하는 경우에는 반품 및 교환을 할 수 없습니다.
1. 이용자에게 책임 있는 사유로 재화 등이 멸실 또는 훼손된 경우(다만, 재화 등의 내용을 확인하기 위하여 포장 등을 훼손한 경우에는 청약철회를 할 수 있습니다)
2. 이용자의 사용 또는 일부 소비에 의하여 재화 등의 가치가 현저히 감소한 경우
3. 시간의 경과에 의하여 재판매가 곤란할 정도로 재화등의 가치가 현저히 감소한 경우
4. 같은 성능을 지닌 재화등으로 복제가 가능한 경우 그 원본인 재화 등의 포장을 훼손한 경우
③ 제2항제2호 내지 제4호의 경우에 "몰"이 사전에 청약철회 등이 제한되는 사실을 소비자가 쉽게 알 수 있는 곳에 명기하거나 시용상품을 제공하는 등의 조치를 하지 않았다면 이용자의 청약철회등이 제한되지 않습니다.
④ 이용자는 제1항 및 제2항의 규정에 불구하고 재화등의 내용이 표시·광고 내용과 다르거나 계약내용과 다르게 이행된 때에는 당해 재화등을 공급받은 날부터 3월이내, 그 사실을 안 날 또는 알 수 있었던 날부터 30일 이내에 청약철회 등을 할 수 있습니다.


제16조(청약철회 등의 효과)

① "몰"은 이용자로부터 재화 등을 반환받은 경우 3영업일 이내에 이미 지급받은 재화등의 대금을 환급합니다. 이 경우 "몰"이 이용자에게 재화등의 환급을 지연한 때에는 그 지연기간에 대하여 공정거래위원회가 정하여 고시하는 지연이자율을 곱하여 산정한 지연이자를 지급합니다.
이때 정기구독과 함께 받은 사은품은 미개봉 상태 및 사용흔적이 없어야 하고 판매가치에 문제가 없다고 판단되는 상태로 반환하여야 취소가 가능합니다.
② "몰"은 위 대금을 환급함에 있어서 이용자가 신용카드 또는 전자화폐 등의 결제수단으로 재화등의 대금을 지급한 때에는 지체없이 당해 결제수단을 제공한 사업자로 하여금 재화등의 대금의 청구를 정지 또는 취소하도록 요청합니다.
③ 청약철회등의 경우 공급받은 재화등의 반환에 필요한 비용은 이용자가 부담합니다. "몰"은 이용자에게 청약철회등을 이유로 위약금 또는 손해배상을 청구하지 않습니다. 다만 재화등의 내용이 표시·광고 내용과 다르거나 계약내용과 다르게 이행되어 청약철회등을 하는 경우 재화등의 반환에 필요한 비용은 "몰"이 부담합니다.
④ 이용자가 재화등을 제공받을때 발송비를 부담한 경우에 "몰"은 청약철회시 그 비용을 누가 부담하는지를 이용자가 알기 쉽도록 명확하게 표시합니다.


제17조(개인정보보호)

① "몰"은 이용자의 정보수집시 구매계약 이행에 필요한 최소한의 정보를 수집합니다. 다음 사항을 필수사항으로 하며 그 외 사항은 선택사항으로 합니다.
1. 성명
2. 주소
3. 전화번호
4. 희망ID(회원의 경우)
5. 비밀번호(회원의 경우)
6. 전자우편주소(또는 이동전화번호)
② "몰"이 이용자의 개인식별이 가능한 개인정보를 수집하는 때에는 반드시 당해 이용자의 동의를 받습니다.
③ 제공된 개인정보는 당해 이용자의 동의없이 목적외의 이용이나 제3자에게 제공할 수 없으며, 이에 대한 모든 책임은 몰이 집니다. 다만, 다음의 경우에는 예외로 합니다.
1. 배송업무상 배송업체에게 배송에 필요한 최소한의 이용자의 정보(성명, 주소, 전화번호)를 알려주는 경우
2. 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별할 수 없는 형태로 제공하는 경우
3. 재화등의 거래에 따른 대금정산을 위하여 필요한 경우
4. 도용방지를 위하여 본인확인에 필요한 경우
5. 법률의 규정 또는 법률에 의하여 필요한 불가피한 사유가 있는 경우
④ "몰"이 제2항과 제3항에 의해 이용자의 동의를 받아야 하는 경우에는 개인정보 보호책임자의 신원(소속, 성명 및 전화번호, 기타 연락처), 정보의 수집목적 및 이용목적, 제3자에 대한 정보제공 관련사항(제공받은자, 제공목적 및 제공할 정보의 내용) 등 정보통신망이용촉진등에관한법률 제22조제2항이 규정한 사항을 미리 명시하거나 고지해야 하며 이용자는 언제든지 이 동의를 철회할 수 있습니다.
⑤ 이용자는 언제든지 "몰"이 가지고 있는 자신의 개인정보에 대해 열람 및 오류정정을 요구할 수 있으며 "몰"은 이에 대해 지체없이 필요한 조치를 취할 의무를 집니다. 이용자가 오류의 정정을 요구한 경우에는 "몰"은 그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다.
⑥ "몰"은 개인정보 보호를 위하여 관리자를 한정하여 그 수를 최소화하며 신용카드, 은행계좌 등을 포함한 이용자의 개인정보의 분실, 도난, 유출, 변조 등으로 인한 이용자의 손해에 대하여 모든 책임을 집니다.
⑦ "몰" 또는 그로부터 개인정보를 제공받은 제3자는 개인정보의 수집목적 또는 제공받은 목적을 달성한 때에는 당해 개인정보를 지체없이 파기합니다.


제18조(“몰“의 의무)

① "몰"은 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 이 약관이 정하는 바에 따라 지속적이고, 안정적으로 재화·용역을 제공하는데 최선을 다하여야 합니다.
② "몰"은 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 갖추어야 합니다.
③ "몰"이 상품이나 용역에 대하여 「표시·광고의공정화에관한법률」 제3조 소정의 부당한 표시·광고행위를 함으로써 이용자가 손해를 입은 때에는 이를 배상할 책임을 집니다.
④ "몰"은 이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.


제19조(회원의 ID 및 비밀번호에 대한 의무)

① 제17조의 경우를 제외한 ID와 비밀번호에 관한 관리책임은 회원에게 있습니다.
② 회원은 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안됩니다.
③ 회원이 자신의 ID 및 비밀번호를 도난당하거나 제3자가 사용하고 있음을 인지한 경우에는 바로 "몰"에 통보하고 "몰"의 안내가 있는 경우에는 그에 따라야 합니다.


제20조(이용자의 의무) 이용자는 다음 행위를 하여서는 안됩니다.
1. 신청 또는 변경시 허위 내용의 등록
2. 타인의 정보 도용
3. "몰"에 게시된 정보의 변경
4. "몰"이 정한 정보 이외의 정보(컴퓨터 프로그램 등) 등의 송신 또는 게시
5. "몰" 기타 제3자의 저작권 등 지적재산권에 대한 침해
6. "몰" 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위
7. 외설 또는 폭력적인 메시지, 화상, 음성, 기타 공서양속에 반하는 정보를 몰에 공개 또는 게시하는 행위


제21조(연결"몰"과 피연결"몰" 간의 관계)

① 상위 "몰"과 하위 "몰"이 하이퍼 링크(예: 하이퍼 링크의 대상에는 문자, 그림 및 동화상 등이 포함됨)방식 등으로 연결된 경우, 전자를 연결 "몰"(웹 사이트)이라고 하고 후자를 피연결 "몰"(웹사이트)이라고 합니다.
② 연결"몰"은 피연결"몰"이 독자적으로 제공하는 재화등에 의하여 이용자와 행하는 거래에 대해서 보증책임을 지지 않는다는 뜻을 연결"몰"의 초기화면 또는 연결되는 시점의 팝업화면으로 명시한 경우에는 그 거래에 대한 보증책임을 지지 않습니다.


제22조(저작권의 귀속 및 이용제한)

① “몰“이 작성한 저작물에 대한 저작권 기타 지적재산권은 ”몰“에 귀속합니다.
② 이용자는 "몰"을 이용함으로써 얻은 정보 중 "몰"에게 지적재산권이 귀속된 정보를 "몰"의 사전 승낙없이 복제, 송신, 출판, 배포, 방송 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안됩니다.
③ "몰"은 약정에 따라 이용자에게 귀속된 저작권을 사용하는 경우 당해 이용자에게 통보하여야 합니다.


제23조(분쟁해결)

① "몰"은 이용자가 제기하는 정당한 의견이나 불만을 반영하고 그 피해를 보상처리하기 위하여 피해보상처리기구를 설치·운영합니다.
② "몰"은 이용자로부터 제출되는 불만사항 및 의견은 우선적으로 그 사항을 처리합니다. 다만, 신속한 처리가 곤란한 경우에는 이용자에게 그 사유와 처리일정을 즉시 통보해 드립니다.
③ "몰"과 이용자간에 발생한 전자상거래 분쟁과 관련하여 이용자의 피해구제신청이 있는 경우에는 공정거래위원회 또는 시·도지사가 의뢰하는 분쟁조정기관의 조정에 따를 수 있습니다.


제24조(재판권 및 준거법)

① "몰"과 이용자간에 발생한 전자상거래 분쟁에 관한 소송은 제소 당시의 이용자의 주소에 의하고, 주소가 없는 경우에는 거소를 관할하는 지방법원의 전속관할로 합니다. 다만, 제소 당시 이용자의 주소 또는 거소가 분명하지 않거나 외국 거주자의 경우에는 민사소송법상의 관할법원에 제기합니다.
② "몰"과 이용자간에 제기된 전자상거래 소송에는 한국법을 적용합니다.


부칙

1. 이 약관은 2019년 08월 29일부터 적용됩니다.
							</textArea>
						</li>
						<li>
							<input id="agree1" type="checkbox" name="agree1" title="약관 동의" required />(필수)<span class="normal">개인정보 수집 및 이용</span>
							<textArea id="info1" readonly>

1. - 목적 : 이용자 식별 및 본인여부 확인
- 항목 : 이름, 아이디, 비밀번호
- 보유 및 이용기간 : 회원탈퇴 후 5일까지

2. - 목적 : 민원 등 고객 고충처리
- 항목 : 이메일, 휴대전화번호
- 보유 및 이용기간 : 회원탈퇴 후 5일까지

3. - 목적 : 만 14세 미만 아동 확인
- 항목 : 법정 생년월일
- 보유 및 이용기간 : 회원탈퇴 후 5일까지

4. - 목적 : 배송 및 발송처리
- 항목 : 이름, 주소, 연락처
- 보유 및 이용기간 : 회원탈퇴 후 5일까지
							</textArea>
						</li>
						<li>
							<input id="agree2" type="checkbox" name="agree2" title="약관 동의"/>(선택)<span class="normal">개인정보 수집 및 이용</span>
							<div>
								<h4>주문/결제 및 배송서비스</h4>
								<p>- 수집/이용목적 : 주문/결제 시 상품 배송</p>
								<p>- 수집항목 : 구매자정보, 상품 구매/취소/반품/교환/환불 정보, 수령인 정보</p>
								<p>- 보유/이용기간 : 회원탈퇴 후 5일까지</p>
							</div>
						</li>
						<li>
							<input id="agree3" type="checkbox" name="agree3" title="약관 동의"/>(선택)<span class="normal">개인정보 처리위탁</span>
							<div>
								<h4>고객 클래임 처리를 위한 CS 위탁</h4>
								<p>	- 개인정보 처리위탁을 받는 자 : 대화실업</p>
								<p>- 처리위탁 업무내용 : 마케팅을 위한 개인정보 이용</p>
							</div>
						</li>
						<li>
							<input id="agree4" type="checkbox" name="agree4" title="약관 동의"/>(선택)<span class="normal">개인정보 제 3자 제공</span>
							<div>
								<h4>마케팅 활용을 위한 개인정보 제3자 제공 동의</h4>
								<p>- 제공받는 자 : 대화실업</p>
								<p>- 이용목적 : 마케팅을 위한 개인정보 이용</p>
								<p>- 제공항목 : 구매자정보, 상품 구매/취소/반품/교환/환불 정보, 수령인 정보</p>
								<p>- 보유/이용기간 : 회원탈퇴 후 5일까지</p>
							</div>
							<div>
								<h4>공급사 상품 판매 및 배송을 위한 개인정보 제3자 제공 동의</h4>
								<p>- 제공받는 자 : 공급사 판매자</p>
								<p>- 이용목적 : 판매자와 구매자의 거래의 원활한 진행, 본인의사의확인, 고객 상담 및 불만처리, 상품과 경품 배송을 위한 배송지 확인 등</p>
								<p>- 제공항목 : 구매자 이름, 전화번호, ID, 휴대폰번호, 이메일주소, 상품 구매정보, 상품 수취인 정보(이름, 주소, 전화번호)</p>
								<p>- 보유/이용기간 : 배송완료 후 한달</p>
							</div>
						</li>
					</ul>
				</fieldset>
				<div>
					<input id="cancel" type="reset" value="취소"/>
					<input type="button" value="다음단계" title="다음 버튼"/>
				</div>
			</form>
		</div>
		<footer id="footer">
			<p class="footer_logoV vogue">
				<a href="index.php" title="vogue"><img src="img/subscribe/vogue_logo.png" alt="풋터 로고"/></a>
			</p>
		</footer>
	</div>
 </body>
</html>
