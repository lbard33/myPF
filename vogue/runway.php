<?php
	include "00_conn.php";

	session_cache_expire(15);
	session_start();
	


?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>runway</title>
  <meta charset="utf-8"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
  <style>
	/* ############ 초기화 #############*/

		
		*{margin:0; padding:0;}

		li{list-style-type:none;}
		a:link, a:visited{text-decoration:none; color:#000;}
		img{border:none;}
		

	/*############ hover 선택 기능 ##################*/
	
		
		/*body 배경색 지정*/
		body{margin:0; padding:0;}




	/*######################## wrap ################################*/
		#wrap{width:100%; position:relative; margin:0 auto; overflow:hidden;}

	/*################### header ################################*/
		
		#header{width:100%; height:100px; position:absolute; left:50%;top:0; transform:translatex(-50%); transition:height 2s linear;}
		#header a:hover, #header a:focus{color:#f40;}
		#header h1{width:20%; height:80px; position:absolute; left:54%; top:20px;}
		#header h1 img{height:100%;}


		/*########## hidden Menu #########################*/

		#hiddenMenu{position:fixed; left:0; top:0; width:0; height:100vh; background-color:rgba(0,0,0,1); z-index:7; display:none;}
		
		#hiddenMenu .hiddenLogo{width:300px; height:5vh; position:absolute; left:60%; bottom:10vh; z-index:8;}
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
		#gnb div{width:10%; height:100%; float:left; background-color:black;}
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
		#lnb .sideMenu li{display:inline; padding-right:3%; color:#fff;}
		#lnb .sideMenu li:first-child{position:relative;}
		#lnb .sideMenu .login{font-weight:700;}
		#lnb .sideMenu a{color:#fff;}
		#lnb .sideMenu .login a{color:#f55;}
		#lnb .company{display:none; width:130px; height:100px; position:absolute; padding-top:22px; z-index:2; right:13%; top:0;}
		#lnb .company li{display:block; font-size:12px; height:30px;}
		#lnb .sideMenu li:first-child:hover .company{display:block;}


		#lnb .searchArea{width:10%; margin-right:10%; height:50%; float:right; position:relative;}
		#lnb .searchArea:hover form{display:block;}

		#lnb .searchArea p{width:20px; padding:0 25%; padding-top:10px;}
		#lnb .searchArea p img{width:100%;}
		
	
		#lnb .searchArea legend{display:none;}
		#lnb .searchArea form{position:absolute; right:0; top:15%; margin-right:100%; display:none;}
		#lnb .searchArea input{width:200px; height:20px; line-height:20px; border:none; text-indent:10px;}


		

	/*######### container #################*/
		#container{width:100%; overflow:hidden;}
		
		/*######### titleArea ############*/
			#titleArea{width:100%; margin:0 auto; height:350px; background-image:url("img/runway/bg_00.jpg"); background-size:cover; background-repeat:no-repeat;}
			#titleArea h2{width:100%; height:100%; background-color:rgba(0,0,0,0.7); color:#fff; text-align:center; line-height:450px; font-size:50px; letter-spacing:20px; font-family: 'Playfair Display', serif;}
			#titleArea span{border:3px solid #fff; padding:10px 10px 10px 20px;}

		/*##### container / gps ############*/
			#gps{position:absolute; width:100%; max-width:1920px; left:50%; top:420px; transform:translatex(-50%);}
			#gps li{display:inline; font-size:12px;}
			#gps li:first-child{margin-left:50px}
		/*############  container / cate ###########*/
			.cate{width:100%; padding-top:50px; text-align:center;}
			.cate li{width:300px; height:40px; display:inline-block; padding:0 20px; font-size:16px;}
			
			.cate a{padding:0 10px; color:#000;}
	
			.cate li select{width:100%; height:110%; text-indent:10px; font-size:16px; cursor:pointer; border:2px solid #000; border-radius:5px; outline:none; background-color:#333; color:#ccc;}

		/*###### container / sect_ready ######*/
		#sect_ready{width:100%; text-align:center; font-family: 'Playfair Display', serif; font-weight:100;}
		#sect_ready h2{font-size:40px; padding:50px 0; letter-spacing:5px; font-weight:400;}
		#sect_ready ul{width:100%; background-color:#fff;} 
		#sect_ready ul li{width:15%; overflow:hidden; float:left; margin-left:1.6%; transition:all 0.5s linear;}
		#sect_ready ul li a{display:block; width:100%; height:85%; position:relative; z-index:2;}
		#sect_ready ul li img {display:block; width:85%; margin:0 auto;}
		#sect_ready ul li i{display:block; width:70%; height:25%; background-color:#fff; text-align:center; position:absolute; left:50%; bottom:-10%; transform:translatex(-50%); font-style:normal;}
		#sect_ready ul li strong{display:block; font-size:20px; font-weight:400; margin-top:5%;}
		#sect_ready ul li em{font-style:normal;}
		#sect_ready ul li .closeB{position:absolute; right:5%; top:5%; z-index:4; cursor:pointer; display:none;}
		#sect_ready ul li .closeB img{width:80%;}
		#sect_ready ol{width:100%; height:100vh; display:none; position:fixed; left:0; top:0; background-color:#fff; z-index:3;}
		#sect_ready ol li{width:25%; position:absolute; left:50%; top:50%; transform:translate(-50%, -50%); display:none;}
		#sect_ready ol li:first-child{display:block;}
		#sect_ready ul li div{display:none;}
		#sect_ready ul li div p{width:50px; height:50px; position:absolute; left:50%; top:50%; transform:translatey(-50%); z-index:4;}
		#sect_ready ul li div .prev0{transform:translatex(-850%);}
		#sect_ready ul li div .next0{transform:translatex(850%) rotate3d(0,0,1,180deg);}
		#sect_ready ul li div .text0{width:200px; height:50px; top:80%; left:70%; font-size:35px; font-weight:700;}
		#sect_ready ul li div p img{width:100%;}
		#sect_ready ul li div div{width:300px; position:absolute; left:15%; top:30%; z-index:4; display:block;}
		#sect_ready ul li div div h4{font-size:50px;}
		#sect_ready ul li div div p{width:100%; position:static; transform:translatey(0); font-size:25px;}

		#hovZ{width:0; height:0; position:absolute; left:40%; top:40%; overflow:hidden; background-color:rgba(255,0,0,0.1);}
		#hovZ span{width:100%; color:#fff; background-color:rgba(255,0,0,0.05); outline:none;}

		#hovZ .bor1{position:absolute; left:0; top:0; width:100%; height:3px; background:linear-gradient(to right, rgba(255,100,100,1), rgba(255,60,80,0.4)); animation:aniT 2s linear 1s infinite; transform:translatex(-100%);}
		#hovZ .bor2{position:absolute; left:0; top:0; width:3px; height:100%; background:linear-gradient(to top, rgba(255,100,100,1), rgba(255,60,80,0.4)); animation:aniL 2s linear infinite; transform:translatey(100%);}
		#hovZ .bor3{position:absolute; right:0; top:0; width:3px; height:100%; background:linear-gradient(to bottom, rgba(255,100,100,1), rgba(255,60,80,0.4)); animation:aniR 2s linear infinite; transform:translatey(-100%);}
		#hovZ .bor4{position:absolute; right:0; bottom:0; width:100%; height:3px; background:linear-gradient(to bottom, rgba(255,100,100,1), rgba(255,60,80,0.4)); animation:aniB 2s linear 1s infinite; transform:translatex(100%);}
		
		@keyframes aniT{
		0%{transform:translatex(-100%);}
		100%{transform:translatex(100%);}
		}
		@keyframes aniL{
		0%{transform:translatey(100%);}
		100%{transform:translatey(-100%);}
		}
		@keyframes aniR{
		0%{transform:translatey(-100%);}
		100%{transform:translatey(100%);}
		}
		@keyframes aniB{
		0%{transform:translatex(100%);}
		100%{transform:translatex(-100%);}
		}
	
	/*########## footer ###########*/
		#footer{width:100%; height:300px; border-top:2px solid #ccc;}
		#footerHead{width:100%; background-color:#fff;background-position:center 20%; position:relative;}
		#footerHead ul{width:100%; height:100px;}
		#footerHead li{min-width:150px; width:25%; height:100px; float:left;}
		#footerHead li div{width:100%; height:100px; position:absolute; left:0; top:0; overflow-x:hidden;}
		#footerHead li div p{display:none; width:100%; height:100px; position:absolute; left:0; top:0; background-color:red; background-repeat:no-repeat; background-size:100%; background-position:center; z-index:0;}
		
		
		#footerHead li a{display:block; width:100%; height:65px; padding-top:35px; text-align:center; position:relative; z-index:2;}
		#footerHead li a i img{height:30px;}
		#footerHead li a i{display:block;}
		#footerHead li a span{display:none; position:absolute; left:40%; top:-200px; transform:rotate3d(0,0,1,20deg);}
		#footerHead li a b{display:none; position:absolute; left:15%; top:-170px;}
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


	/*######### 버리는 영역 #############*/
  </style>
  <script>
	$(function(){
		////  히든 메뉴 
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



	/// 자동 이미지 사이즈 조절
		var lih=$("#sect_ready ul>li").width()*1.5;
		$(" #sect_ready ul>li").css("height",lih);
		var elem = document.documentElement;

		


	// 윈도우 팝업 
		$("#run li a").click(function(){
			if (elem.requestFullscreen) {
				elem.requestFullscreen();
			}
		// screen 나타내기. 팝업창. 
			$(this).next(".closeB").css("display","block");
			$(this).next().next(".rw_desc").css({"display":"block"});
			$(this).next().next().next().css({"display":"block"});
			$("#wrap").css("height","100vh");
			
			var tit=$(this).find("strong").text();
			var subT=$(this).find("em").text();
			
			$(this).next().next().next().find("h4").text(tit);
			$(this).next().next().next().find("div p").text(subT);


		// 전후 버튼 기능 넣기
		// 초기 세팅
			var maxN=$(this).next(".closeB").next(".rw_desc").find(".toB img").attr("src");
			maxN=maxN.substring(29, 31);
			var moN=$(this).find("img").attr("src").substring(17,19);
			var i=0;
			$(this).next().next().next().find(".text0").text("1 / "+(parseInt(maxN)+1));
			$(".prev0").css({"display":"none"});
			$(".next0").css({"display":"block"});
			
		// 다음 버튼 눌렀을때
			$(this).next().next().next("div").find(".next0").click(function(){
				$(".prev0").css({"display":"block"});
				i=i+1;
				$(this).next().text((i+1)+" / "+(parseInt(maxN)+1));
				$(this).parent().prev("ol").find(".showB img").stop().animate({"opacity":"0"},100,"linear",function(){
					if (maxN<10)
					{	
						$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_0"+i+".jpg");
						$(this).stop().animate({"opacity":"1"},100,"linear");
						if (maxN==i)
						{
							$(this).parent().parent().next().find(".next0").css("display","none");
						}	
					}
					else if (maxN>10)
					{
						if (i<10)
						{
							$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_0"+i+".jpg");
							$(this).stop().animate({"opacity":"1"},100,"linear");
						}
						else if (i>9&&i<maxN)
						{
							$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_"+i+".jpg");
							$(this).stop().animate({"opacity":"1"},100,"linear");
						}
						else if (maxN==i)
						{
							$(this).parent().parent().next().find(".next0").css("display","none");
							$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_"+i+".jpg");
							$(this).stop().animate({"opacity":"1"},100,"linear");
						}	
					}
					else if (maxN==10)
					{
						if (i<10)
						{
							$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_0"+i+".jpg");
							$(this).stop().animate({"opacity":"1"},100,"linear");
						}
						else if (maxN==i)
						{
							$(this).parent().parent().next().find(".next0").css("display","none");
							$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_"+i+".jpg");
							$(this).stop().animate({"opacity":"1"},100,"linear");
						}
					}
				});
				
			});
			// 이전 버튼 눌렀을때
			$(this).next().next().next("div").find(".prev0").click(function(){
				$(".next0").css({"display":"block"});
				i=i-1;
				$(this).next().next().text((i+1)+" / "+(parseInt(maxN)+1));
				$(this).parent().prev("ol").find(".showB img").stop().animate({"opacity":"0"},100,"linear",function(){
					if (i==0)
					{
						$(this).parent().parent().next().find(".prev0").css("display","none");
						$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_0"+i+".jpg");
						$(this).stop().animate({"opacity":"1"},100,"linear");
					}
					else if (i>0&&i<10)
					{
						$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_0"+i+".jpg");	
						$(this).stop().animate({"opacity":"1"},100,"linear");
					}
					else if (i>9)
					{
						$(this).attr("src","img/runway/runway"+moN+"/runway"+moN+"_"+i+".jpg");
						$(this).stop().animate({"opacity":"1"},100,"linear");
					}
				});				
			});
		});
		// 팝업 닫기
		$(".closeB").click(function(){
			$(this).next(".rw_desc").css("display","none");
			$(this).next().next("div").css({"display":"none"});
			$(this).css("display","none");
			$("#wrap").css("height","100%");
			var i=0;
			var moN=0;
			var maxN=0;
			if (document.exitFullscreen) {
				document.exitFullscreen();
			}
		});

		// 따라다니는 박스 기능
		$("#run li a").mouseover(function(){
			$("#hovZ").stop().animate({
				"width":$(this).width(),
				"height":$(this).height()+55,
				"left":$(this).offset().left,
				"top":$(this).offset().top-15,
				"zIndex":"1"
			},300,"linear");
		});		
		$("#run").mouseover(function(){
			$("#hovZ").css("display","block");
		});
		$("#run").mouseout(function(){
			$("#hovZ").css("display","none");
		});
		
		// select 선택 기능
		
		$("#collection").click(function(){
			var col=$("#collection").val();
			if (col=="collection")
			{
				$("#run>li").css("display","block");
			}
			else if (col=="ready")
			{
				$("#run>li").css("display","none");
				$(".ready, .allR").css("display","block");
			}
			else if (col=="haute")
			{
				$("#run>li").css("display","none");
				$(".haute, .allR").css("display","block");
			}
			else if (col=="seoul")
			{
				$("#run>li").css("display","none");
				$(".seoul, .allR").css("display","block");
			}
			else if (col=="resort")
			{
				$("#run>li").css("display","none");
				$(".resort, .allR").css("display","block");
			}
		});


	/////////// 개인정보 취급방침
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
		</div>
		<div id="container">
			<div id="titleArea">
				<h2><span>Runway</span></h2>
			</div>
			<ul id="gps">
				<li><a href="index.php" title="vogue">VOGUE</a>&nbsp;></li>
				<li><a href="runway.php" title="runway">RUNWAY</a>&nbsp;></li>
				<li>전체</li>
			</ul>
			<ul class="cate">
				<li>
					<select id="collection" title="컬렉션 선택">
						<option value="collection" selected="selected">컬렉션 선택</option>
						<option value="ready">레디 투 웨어</option>
						<option value="haute">오뜨 꾸뛰르</option>
						<option value="seoul">서울 패션위크</option>
						<option value="resort">리조트</option>
					</select>
				</li>
			</ul>
			<section id="sect_ready">
				<h2>Runway</h2>
				<ul id="run">
					<li class="allR"><img src="img/run.jpg" alt="runway 이미지"/></li>
					<li class="ready" title="s2020">
						<a class="run_img" href="#none" title="runway00">
							<img src="img/runway/runway00/runway00_12.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Maison Margiela</strong>
								<em>Ready To Wear 2020 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway00/runway00_00.jpg" alt="런웨이 상세 이미지0_00"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway00/runway00_21.jpg" alt="런웨이 상세 이미지0_21"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="ready" title="s2020">
						<a class="run_img" href="#none" title="runway01">
							<img src="img/runway/runway09/runway09_00.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Hermès</strong>
								<em>Ready To Wear 2020 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway09/runway09_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway09/runway09_09.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>		
					<li class="ready" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway02/runway02_00.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Lemaire</strong>
								<em>Ready To Wear 2020 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway02/runway02_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway02/runway02_05.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="ready" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway01/runway01_02.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Saint Laurent</strong>
								<em>Ready To Wear 2020 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway01/runway01_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway01/runway01_05.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="ready" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway10/runway10_02.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Chloé</strong>
								<em>Ready To Wear 2020 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway10/runway10_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway10/runway10_09.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="ready" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway03/runway03_01.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Stella McCartney</strong>
								<em>Ready To Wear 2020 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway03/runway03_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway03/runway03_05.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="ready" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway11/runway11_01.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Sacai</strong>
								<em>Ready To Wear 2020 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway11/runway11_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway11/runway11_14.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="seoul" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway04/runway04_01.jpg" alt="runway 1이미지"/>
							<i>
								<strong>GRAPHISTE MAN.G</strong>
								<em>Seoul Fashion Week 2020 S/S</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway04/runway04_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway04/runway04_05.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="seoul" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway05/runway05_01.jpg" alt="runway 1이미지"/>
							<i>
								<strong>LLEE</strong>
								<em>Seoul Fashion Week 2020 S/S</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway05/runway05_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway05/runway05_07.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="seoul" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway08/runway08_03.jpg" alt="runway 1이미지"/>
							<i>
								<strong>BLAHBANG</strong>
								<em>Seoul Fashion Week 2020 S/S</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway08/runway08_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway08/runway08_05.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="seoul" title="s2020">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway12/runway12_04.jpg" alt="runway 1이미지"/>
							<i>
								<strong>HOLY NUMBER 7</strong>
								<em>Seoul Fashion Week 2020 S/S</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway12/runway12_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway12/runway12_09.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="resort" title="s2019">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway06/runway06_04.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Max Mara</strong>
								<em>Resort 2019</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway06/runway06_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway06/runway06_08.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="resort" title="s2019">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway16/runway16_04.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Prada</strong>
								<em>Resort 2019</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway16/runway16_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway16/runway16_06.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="seoul" title="s2019">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway14/runway14_00.jpg" alt="runway 1이미지"/>
							<i>
								<strong>LIE</strong>
								<em>Seoul Fashion Week 2019 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway14/runway14_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway14/runway14_10.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="ready" title="s2019">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway15/runway15_18.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Chanel</strong>
								<em>Ready To Wear 2019 S/S</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway15/runway15_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway15/runway15_19.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="haute" title="s2018">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway07/runway07_01.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Christian Dior</strong>
								<em>Haute Couture 2018 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway07/runway07_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway07/runway07_09.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
					<li class="haute" title="s2018">
						<a class="run_img" href="#none" title="runway1">
							<img src="img/runway/runway13/runway13_04.jpg" alt="runway 1이미지"/>
							<i>
								<strong>Sonia Rykiel</strong>
								<em>Haute Couture 2018 F/W</em>
							</i>
						</a>
						<p class="closeB"><img src="img/icon/cancel0.png" alt="닫기"/>close</p>
						<ol class="rw_desc">
							<li class="showB">
								<img src="img/runway/runway13/runway13_00.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
							<li class="toB">								
								<img src="img/runway/runway13/runway13_09.jpg" alt="런웨이 상세 이미지0_09"/>
							</li>
						</ol>
						<div>
							<p class="prev0"><a href="#none" title="이전 이미지"><img src="img/icon/arrowA.png" alt="이전 이미지"/></a></p>
							<p class="next0"><a href="#none" title="다음 이미지"><img src="img/icon/arrowA.png" alt="다음 이미지"/></a></p>
							<p class="text0"></p>
							<div>
								<h4>&nbsp;</h4>
								<p>&nbsp;</p>
							</div>
						</div>
					</li>
				</ul>
				<div id="hovZ">
					<span class="bor1"></span>
					<span class="bor2"></span>
					<span class="bor3"></span>
					<span class="bor4"></span>
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
				<p class="footer_logo"><a href="index.php" title="메인"><img src="img/vogue_footer_logo.png" alt="풋터 로고"/></a></p>
				<p class="copy">VOGUE&copy;EthanLee All Rights Reserved. lbard@naver.com</p>
				<p class="legal"><a href="policy.php" title="개인정보 취급방침">개인정보 취급방침</a></p>
			</div>
		</div>
	</div>
 </body>
</html>
