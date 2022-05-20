<?php
	include "00_conn.php";

	session_cache_expire(15);
	session_start();
	


?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>beauty</title>
  <meta charset="utf-8"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.color.js"></script>
  <style>
		@font-face{font-family:"roman";src:url("font/Pistilli-Roman.woff");}
		*{margin:0; padding:0;}
		li{list-style:none;}
		a:link, a:visited{text-decoration:none; color:#000;}
		body{margin:0; padding:0;}
		div, p, header, section, footer, article{display:block;}
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
		#gnb{width:53%; height:100%; background-color:rgba(0, 0, 0, 0.5);}
		
		

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
		#lnb .sns{width:60%; border-bottom:2px solid #fff; padding-left:35%; padding-right:5%; height:50%;}
		#lnb .sns li{width:12%; height:100%; margin-right:10%; float:right; position:relative;}
		#lnb .sns li a{display:block; width:100%; height:100%;}
		#lnb .sns li img{width:100%;}

		

		#lnb .sns .sns_hover{position:absolute; left:0; top:0; display:none;}

		#lnb .sns li:hover .sns_hover{display:block;}


		#lnb .sideMenu{width:75%; padding-right:5%; height:50%; line-height:35px; text-transform:uppercase; font-size:13px; float:left; text-align:right;}
		#lnb .sideMenu li{display:inline; padding-right:3%; color:#fff;}
		#lnb .sideMenu li:first-child{position:relative;}
		#lnb .company{display:none; width:130px; height:100px; position:absolute; padding-top:22px; z-index:2; right:13%; top:0;}
		#lnb .company li{display:block; font-size:12px; height:30px;}
		#lnb .sideMenu li:first-child:hover .company{display:block;}
		#lnb .sideMenu li a{color:#fff;}
		#lnb .sideMenu .login{font-weight:700;}
		#lnb .sideMenu .login a{color:#f55;}



		#lnb .searchArea{width:10%; margin-right:10%; height:50%; float:right; position:relative;}
		#lnb .searchArea:hover form{display:block;}

		#lnb .searchArea p{width:20px; padding:0 25%; padding-top:10px;}
		#lnb .searchArea p img{width:100%;}
		
	
		#lnb .searchArea legend{display:none;}
		#lnb .searchArea form{position:absolute; right:0; top:15%; margin-right:100%; display:none;}
		#lnb .searchArea input{width:200px; height:20px; line-height:20px; border:none; text-indent:10px;}


	

		
	/*########### container #####################*/
		#container{width:100%; overflow:hidden; position:relative; padding-bottom:100px; background-color:#000;}

		
		h3{position:absolute; width:1px; height:1px; font-size:1px; line-height:0; left:-9999px; overflow:hidden;}


		.sectTitle{width:100%; height:200px; line-height:200px; color:#fff; font-size:40px; text-transform:uppercase; text-align:center; font-family:roman; font-weight:400; letter-spacing:15px; padding-top:150px; background-image:url("img/fashion/fashion23.jpg");
		background-size:130%; text-shadow:0 0 10px #000;
		}




	/*##### container / gps ############*/
		#gps{position:absolute; left:10%; top:380px; color:#fff;}
		#gps li{display:inline; font-size:12px;}
		#gps li a{color:#fff;}



	/*############  container / cate ###########*/
		.cate{width:100%; padding:30px 0 30px; text-align:center; border-bottom:2px solid #ccc; background-color:#111;}
		.cate li{display:inline-block; padding:0 10px; font-size:20px;}
		
		.cate a{padding:0 5px; color:#fff;}

		.cate .selected{color:#f00;}
	/*########## content ##########################*/
		#content{width:100%; max-width:1500px; margin:0 auto; padding:30px 0;}
		#content ul{width:100%;}
		#content ul li{width:25%; height:400px; float:left; overflow:hidden; position:relative; cursor:pointer; margin:20px 0; z-index:2;}
		#content article{width:100%; height:100%; }
		
		#content article .picZone{width:100%; height:100%; overflow:hidden; position:absolute; left:0; top:0;}
		#content article img{height:120%; position:absolute; left:50%; top:50%; transform:translate(-50%, -50%);}
		
		#content .back{width:100%; height:100%; position:absolute; left:0; top:0;
		background-image: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 40%, rgba(0,0,0,0.65) 80%, rgba(0,0,0,0.65) 100%); 
		background-image: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 40%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.65) 100%);
		background-image: -o- linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 40%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.65) 100%);
		background-image: -ms- linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 40%,rgba(0,0,0,0.65) 80%,rgba(0,0,0,0.65) 100%);
		}
		#content article h4{position:absolute; width:80%; text-align:center; font-size:25px; color:#fff; left:0; bottom:20px; padding:0 10%;}
		#content article a{display:none; width:100%; height:100%; position:absolute; left:0; top:0; z-index:2;}
		#content article .contH{display:none; position:absolute; right:15%; top:30%; color:#ccc; font-size:16px; width:50%;}
		

		#hovZ{width:0; height:0; position:absolute; left:40%; top:40%; overflow:hidden; background-color:rgba(255,0,0,0.15);}
		#hovZ span{width:100%; color:#fff; background-color:rgba(255,0,0,0.05); outline:none;}

		#hovZ .bor1{position:absolute; left:0; top:0; width:100%; height:3px; background:linear-gradient(to right, rgba(255,100,100,1), rgba(255,60,80,0.4)); animation:aniT 1.5s linear infinite; transform:translatex(-100%);}
	/*	#hovZ .bor2{position:absolute; left:0; top:0; width:3px; height:100%; background:linear-gradient(to top, rgba(255,100,100,1), rgba(255,60,80,0.4)); animation:aniL 1.5s linear infinite; transform:translatey(100%);}*/
	/*	#hovZ .bor3{position:absolute; right:0; top:0; width:3px; height:100%; background:linear-gradient(to bottom, rgba(255,100,100,1), rgba(255,60,80,0.4)); animation:aniR 1.5s linear infinite; transform:translatey(-100%);}*/
		#hovZ .bor4{position:absolute; right:0; bottom:0; width:100%; height:3px; background:linear-gradient(to bottom, rgba(255,100,100,1), rgba(255,60,80,0.4)); animation:aniB 1.5s linear infinite; transform:translatex(100%);}
		
		@keyframes aniT{
		0%{transform:translatex(-100%);}
		100%{transform:translatex(100%);}
		}
	/*	@keyframes aniL{
		0%{transform:translatey(100%);}
		100%{transform:translatey(-100%);}
		}
		@keyframes aniR{
		0%{transform:translatey(-100%);}
		100%{transform:translatey(100%);}
		}*/
		@keyframes aniB{
		0%{transform:translatex(100%);}
		100%{transform:translatex(-100%);}
		}
	

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

			// 게시물 클릭시 아코디언 기능
			$("#content li").click(function(){
				var num=$(this).find("img").attr("alt").substring(3);
				num=parseInt(num);
				var i=num%4;
				$("#content li").find(".picZone").css("opacity","0.3");
				$(this).find(".picZone").css("opacity","1");
				
				// 4개 배열의 게시물중 1번째 게시물일 경우
				if (i==0)
				{
					// 기능해제
					$("article a").css({"display":"none"});
					$(".contH").css({"display":"none"});
					$("#content li").find("h4").css({"bottom":"20px","color":"#fff"});
					$("#content li").find(".picZone").css({"width":"100%"});
					// 기능구현
					$(this).find(".picZone").css({"width":"30%"});
					$(this).stop().animate({"width":"70%"},200,"linear",function(){
						$(this).find("h4").stop().animate({"bottom":"80%","color":"#faa"},200,"linear",function(){
							$(this).next("a").css("display","block");
							$(this).next().next(".contH").stop().fadeIn(300,"linear");
						});
					});
					var wid=$(this).find("img").width();
					// 다른 게시물 너비 조정
					for (var n=1; n<4; n++)
					{
						$("#content li:eq("+(num+n)+")").stop().animate({"width":"10%"},200,"linear");
					}
				}
				// 2번째 게시물일때
				else if (i==1)
				{
					// 기능해제
					$("article a").css({"display":"none"});
					$(".contH").css({"display":"none"});
					$("#content li").find("h4").css({"bottom":"20px","color":"#fff"});
					$("#content li").find(".picZone").css({"width":"100%"});
					// 기능구현
					$(this).find(".picZone").css({"width":"30%"});
					$(this).stop().animate({"width":"70%"},200,"linear",function(){
						$(this).find("h4").stop().animate({"bottom":"80%","color":"#faa"},200,"linear",function(){
							$(this).next("a").css("display","block");
							$(this).next().next(".contH").stop().fadeIn(300,"linear");
						});
					});
					var wid=$(this).find("img").width();
					// 다른 게시물 너비 조정
					$("#content li:eq("+(num-1)+")").stop().animate({"width":"10%"},200,"linear");
					for (var n=1; n<3; n++)
					{
						$("#content li:eq("+(num+n)+")").stop().animate({"width":"10%"},200,"linear");
					}
				}
				// 3번째 게시물일때
				else if (i==2)
				{
					// 기능해제
					$("article a").css({"display":"none"});
					$(".contH").css({"display":"none"});
					$("#content li").find("h4").css({"bottom":"20px","color":"#fff"});
					$("#content li").find(".picZone").css({"width":"100%"});
					// 기능구현
					$(this).find(".picZone").css({"width":"30%"});
					$(this).stop().animate({"width":"70%"},200,"linear",function(){
						$(this).find("h4").stop().animate({"bottom":"80%","color":"#faa"},200,"linear",function(){
							$(this).next("a").css("display","block");
							$(this).next().next(".contH").stop().fadeIn(300,"linear");
						});
					});
					var wid=$(this).find("img").width();
					// 다른 게시물 너비 조정
					$("#content li:eq("+(num+1)+")").stop().animate({"width":"10%"},200,"linear");
					for (var n=1; n<3; n++)
					{
						$("#content li:eq("+(num-n)+")").stop().animate({"width":"10%"},200,"linear");
					}
				}
				// 4번째 게시물일때
				else if (i==3)
				{
					// 기능해제
					$("article a").css({"display":"none"});
					$(".contH").css({"display":"none"});
					$("#content li").find("h4").css({"bottom":"20px","color":"#fff"});
					$("#content li").find(".picZone").css({"width":"100%"});
					// 기능구현
					$(this).find(".picZone").css({"width":"30%"});
					$(this).stop().animate({"width":"70%"},200,"linear",function(){
						$(this).find("h4").stop().animate({"bottom":"80%","color":"#faa"},200,"linear",function(){
							$(this).next("a").css("display","block");
							$(this).next().next(".contH").stop().fadeIn(300,"linear");
						});
					});
					var wid=$(this).find("img").width();
					// 다른 게시물 너비 조정
					for (var n=1; n<4; n++)
					{
						$("#content li:eq("+(num-n)+")").stop().animate({"width":"10%"},200,"linear");
					}
				}
				$(this).mouseleave(function(){
					// 기능해제
					$("article a").css({"display":"none"});
					$(".contH").css({"display":"none"});
					$("#content li").find("h4").css({"bottom":"20px","color":"#fff"});
					$("#content li").find(".picZone").css({"width":"100%","opacity":"1"});
					$("#content li").stop().animate({"width":"25%"},200,"linear");
				});
			}).mouseover(function(){ //게시물 호버기능
				$("#hovZ").stop().animate({
					"width":$(this).width(),
					"height":$(this).height()+20,
					"left":$(this).offset().left,
					"top":$(this).offset().top-10,
					"zIndex":"1"
				},300,"linear");
			});

			// 게시물 호버 기능해제 및 적용
			$("#content").mouseover(function(){
				$("#hovZ").css("display","block");
			});
			$("#content").mouseout(function(){
				$("#hovZ").css("display","none");
			});
			// 특정 게시물 인지 시키는 기능
			$(".cate li a").bind("click focusin",function(){
				$(".cate li a").removeClass();
				$(this).addClass("selected");
				var title=$(this).attr("title");
				if (title=="all")
				{
					$("#content ul li").css({"opacity":"1"});	
				}
				else{
					$("#content ul li").css("opacity","0.2");	
					$("."+title).css("opacity","1");
				}
				return false;
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
		</div>
		<div id="container">
			<h2 class="sectTitle">beauty</h2>
			<ul id="gps">
				<li><a href="index.php" title="vogue">VOGUE</a>&nbsp;></li>
				<li><a href="beauty.php" title="beauty">BEAUTY</a>&nbsp;></li>
				<li>전체</li>
			</ul>
			<ul class="cate">
				<li><a class="selected" href="#" title="all">전체</a></li>
				<li><a href="#" title="trend">트렌드</a></li>
				<li><a href="#" title="shopping">쇼핑</a></li>
				<li><a href="#" title="people">피플</a></li>
				<li><a href="#" title="health">헬스</a></li>
			</ul>
			<section id="content">
				<h3>게시물 영역</h3>
				<ul>
					<li class="shopping people">
						<article>
							<div class="picZone"><img src="img/beauty/beauty00_00.jpg" alt="게시물00"/></div>
							<p class="back"></p>
							<h4>헤이즈의 핑크빛 얼굴</h4>
							<a href="desc/desc03.php" title="게시물 00이동"></a>
							<div class="contH">
								<p class="contDesc">
									분홍은 그저 귀여운 색 이상의 가치가 있다. 자신만만하게 빛나는 ‘수향’ 핑크로 채색한 헤이즈의 얼굴.<br/><br/><b>어제 무슨 꿈 꿨어요?</b> 이를 어째요? 일정이 늦게 끝나 잠을 못 잤는데. 오늘 촬영까지 남은 2시간, 어설프게 자면 오히려 더 피곤할 것 같더라고요. 그래서 그냥 누워서 멍하니 있다가 나왔어요.
								</p>
							</div>
						</article>
					</li>
					<li class="trend">
						<article>
							<div class="picZone"><img src="img/beauty/beauty01_00.jpg" alt="게시물01"/></div>
							<p class="back"></p>
							<h4>서울의 차세대 뷰티 얼굴은 누구?</h4>
							<a href="#none" title="게시물 01이동"></a>
							<div class="contH">
								<p class="contDesc">
									‘보그 커버 걸’은 무엇을 상징할까. 당대 최고의 얼굴을 뜻한다.<br/>슈퍼모델을 꿈꾸는 서울의 차세대 뷰티 얼굴 7인의 &lt;보그&gt; 커버 걸 대변신!
								</p>
							</div>
						</article>
					</li>
					<li class="health trend">
						<article>
							<div class="picZone"><img src="img/beauty/beauty02_00.png" alt="게시물02"/></div>
							<p class="back"></p>
							<h4>쿨하게 지방 감소시키는 법</h4>
							<a href="#none" title="게시물 02이동"></a>
							<div class="contH">
								<p class="contDesc">
									쿨스컬프팅Ⓡ 시스템은 이름 그대로 ‘COOL’하게 저온으로 지방세포의 수를 줄여주는 저온지방감소 의료기기다.<br/><br/>3,7 누구나 한 번쯤 고민을 가져봤을 수 있는 복부, 옆구리, 등, 허벅지, 턱밑, 팔(상완)의 피하지방세포를 냉각시킨다.3,6 냉각된 지방세포는 수주에 걸쳐 사멸되고, 자연적으로 대사되어 결국 체내에서 제거된다.<br/>
									<span class="under">즉, 쉽게 말해 치료부위를 냉각하여 지방세포를 사멸에 이르게 하는 것!</span>
								</p>
							</div>
						</article>
					</li>
					<li class="health">
						<article>
							<div class="picZone"><img src="img/beauty/beauty04_01.jpg" alt="게시물03"/></div>
							<p class="back"></p>
							<h4>꿀잠을 위한 베스트 솔루션</h4>
							<a href="#none" title="게시물 03이동"></a>
							<div class="contH">
								<p class="contDesc">
									생체 시계를 관장하는 뇌의 움직임이 ‘숙면’을 부른다.<br/>지난밤 푹 주무셨는지? 아니, 질문을 바꿔보겠다. 지난 일주일 개운하게 일어난 날이 며칠이나 되시는지? 단번에 ‘No’라고 답했거나 우물쭈물 시간을 지체했다면, 당신은 전 세계 30%에 달하는 수면 부족 인구 중 한 명일 수 있다. 올해 초 시장조사 전문 기업 ‘엠브레인 트렌드모니터’가 한국에 거주하는 1,000명에게 물은 결과, 300명 이상이 늘 수면 시간이 부족하다고 느끼고 또 네 명 중 한 명은 깊이 잠들지 못한다고 답했다. 국토 90%가 인공 빛에 점령당한 한반도. 이곳에 불면의 밤이 찾아왔다.
								</p>
							</div>
						</article>
					</li>
					<li class="health">
						<article>
							<div class="picZone"><img src="img/beauty/beauty03_03.jpg" alt="게시물04"/></div>
							<p class="back"></p>
							<h4>'엉짱'이 되어야하는 또 다른 이유!</h4>
							<a href="#none" title="게시물 04이동"></a>
							<div class="contH">
								<p class="contDesc">									
									1 평소 오랜 시간 앉아서 일한다.<br/>

									2 의자에 앉으면 유독 엉덩이 주변 부위가 아프다.<br/>

									3 딱딱한 의자에 오래 앉을 수 없다.<br/>

									4 엉덩이뿐 아니라 골반, 사타구니까지 통증이 느껴진다.<br/>

									5 허벅지 뒤쪽 감각이 이상하다.<br/>
								</p>
							</div>
						</article>
					</li>
					<li class="trend">
						<article>
							<div class="picZone"><img src="img/beauty/beauty05_03.jpg" alt="게시물05"/></div>
							<p class="back"></p>
							<h4>한여름 뷰티 쇼</h4>
							<a href="#none" title="게시물 05이동"></a>
							<div class="contH">
								<p class="contDesc">
									황혼에서 새벽까지 고요하고 찬란한 순간을 네 명의 눈에 표현했다. 빛과 음영의 한여름 뷰티 쇼.
								</p>
							</div>
						</article>
					</li>
					<li class="health">
						<article>
							<div class="picZone"><img src="img/beauty/beauty06_04.jpg" alt="게시물06"/></div>
							<p class="back"></p>
							<h4>아침에 먹으면 안되는 과일</h4>
							<a href="#none" title="게시물 06이동"></a>
							<div class="contH">
								<p class="contDesc">									
									아침을 깨우는 알람 소리 그리고 아침을 시작하는 두 친구, 커피와 상큼한 과일!<br/><br/>
									그런데 말입니다, 공복에 먹는 과일이 알고보니 ‘건강식’이 아니라 오히려 위와 장에 부담이 가는 ‘위험식’이었다면 믿으시겠어요?
								</p>
							</div>
						</article>
					</li>
					<li class="trend health">
						<article>
							<div class="picZone"><img src="img/beauty/beauty08_00.jpg" alt="게시물07"/></div>
							<p class="back"></p>
							<h4>화이트 태닝부터 냉각요법까지</h4>
							<a href="#none" title="게시물 07이동"></a>
							<div class="contH">
								<p class="contDesc">
									“네 아이 엄마라곤 도저히 믿을 수 없는 ‘초동안’에 뭘 입어도 맵시 나는 몸, 묶어도 예쁘고 풀어 헤쳐도 아름다운 나탈리아 보디아노바의 풍성한 머리칼을 보고 있노라면 신은 불공평하다는 생각마저 듭니다. 관리 안 하고 타고난 게 이 정도라면 하늘을 원망했겠지만, 알고 보면 그녀의 아름다움은 피나는 노력의 결과! 라푼젤도 울고 갈 모발 미인의 뷰티 방앗간은 파리에 있는 레오놀그렐 클리닉입니다.
								</p>
							</div>
						</article>
					</li>
					<li class="shopping">
						<article>
							<div class="picZone"><img src="img/beauty/beauty09_00.jpg" alt="게시물08"/></div>
							<p class="back"></p>
							<h4>입생로랑 틴트혁명</h4>
							<a href="#none" title="게시물 08이동"></a>
							<div class="contH">
								<p class="contDesc">
									입생로랑 뷰티가 리드하는 또 한번의 틴트 혁명. 크림처럼 부드러운 벨벳 텍스처를 담아 전에 없던 피니시와 독보적인 컬러감을 선보였다. 매트립 공식을 깨고 더 강력해진 ‘NEW 벨벳 틴트’를 입은 현아의 메이크업 룩을 공개한다.
								</p>
							</div>
						</article>
					</li>
					<li class="shopping">
						<article>
							<div class="picZone"><img src="img/beauty/beauty10_01.jpg" alt="게시물09"/></div>
							<p class="back"></p>
							<h4>2020 스마트 테크놀로지</h4>
							<a href="#none" title="게시물 09이동"></a>
							<div class="contH">
								<p class="contDesc">
									2020년형 스마트 테크놀로지에 포착된 뷰티 페르소나 8.
								</p>
							</div>
						</article>
					</li>
					<li class="trend shopping people">
						<article>
							<div class="picZone"><img src="img/beauty/beauty13_10.jpg" alt="게시물10"/></div>
							<p class="back"></p>
							<h4>지수의 입술</h4>
							<a href="desc/desc06.php" title="게시물 10이동"></a>
							<div class="contH">
								<p class="contDesc">
									유성이 빛을 발하는 시간은 수십 분의 1초에서 수 초 사이.<br/><br/>
									그 찰나의 아름다움을 지수의 입술에 담았다.
								</p>
							</div>
						</article>
					</li>
					<li class="peoople">
						<article>
							<div class="picZone"><img src="img/beauty/beauty11_00.jpg" alt="게시물11"/></div>
							<p class="back"></p>
							<h4>디지털 크리에이터의 생존방식</h4>
							<a href="#none" title="게시물 11이동"></a>
							<div class="contH">
								<p class="contDesc">
									‘새로움’은 ‘탬버린즈’의 모토다. “늘 만나도 새로운, 그런 특별함을 추구해요. 그러기 위해 신제품을 선보이는 것만큼 기존 제품을 신선한 방식으로 재포장하는 노력도 필요합니다.” 탬버린즈 콘텐츠 크리에이팅팀 리더 정선린의 최대 관심은 콘텐츠 ‘확산’이다. “초기엔 광고 캠페인과 영상 촬영 등 비주얼 작업에 몰두했어요. 하지만 아무리 잘 만든 콘텐츠도 노출 빈도가 낮으면 바로 잊히더군요. 
								</p>
							</div>
						</article>
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
				<p class="legal"><a class="policyM" href="policy.php" title="개인정보 취급방침">개인정보 취급방침</a></p>
			</div>
		</footer>
	</div>
 </body>
</html>
