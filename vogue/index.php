<?php
	include "00_conn.php";

	session_cache_expire(15);
	session_start();
	


?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>vogue</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <style>
	/* ############ 초기화 #############*/
		@font-face{font-family:"roman";src:url("font/Pistilli-Roman.woff");}
		@font-face{font-family:"romanT";src:url("font/Chronicle Display Roman.woff");}
		
		*{margin:0; padding:0;}
		li{list-style-type:none;}
		a:link, a:visited{text-decoration:none; color:#000;}
		a:hover, a:focus{color:#f00;}

		img{border:none;}
		

	/*############ hover 선택 기능 ##################*/
	
		
		/*body 배경색 지정*/
		body{margin:0; padding:0; font-family: 'Nanum Gothic', sans-serif;}



		/*기본 hr 설정*/
		.hr{width:90%; border:1px solid #ddd; margin:50px auto;}
		
	/*########## 모바일 버전 숨기기 ############*/	
		#headerMWrap, #visualM, #main_contM{display:none;}



	
		/*######### skipNav ############################*/	
			#skipNav, #skipNav p{width:100%;}
			#skipNav{position:absolute; left:0; top:-30px; z-index:9;}
			/*
				위치: 브라우저 가장 위쪽에 만들기
				주의: margin이나 relative로 만들게 되면 영역을 비워둔채로 사용하거나
				상대를 밀고 다닐 수 있음
				
			*/

			#skipNav p a{display:block; width:100%; text-align:center; line-height:30px; color:#fff; position:absolute;}
			

			#skipNav p a:focus{top:30px; color:#fff; background-color:#000;}
		
		


	/*######################## wrap ################################*/
		#wrap{width:100%; max-width:1920px; position:relative; margin:0 auto;}

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
		

	/*############# header_inner ######################################*/	

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
		#container{width:100%; /*background-color:#00f;*/}





	/*공통작업*/
		#container .cont_img{display:block; width:95%; margin:0 auto; background-color:#fff; border:3px solid rgba(0,0,0,0); overflow:hidden; transition:transform 3s linear;}
		#container .cont_img img{width:100%; transition:transform 3s linear;}

		#container .cont_text{display:block; width:95%; margin:0 auto; overflow:hidden;}
		#container .cate{display:block; width:100%; height:40px; line-height:40px; font-size:12px; text-transform:uppercase; font-style:normal;  color:#aaa; letter-spacing:10px; transition:font-size 3s linear, font-weight 3s linear;/*background-color:#123;*/}
		#container .cont_title{display:block; width:100%; height:40px; line-height:40px; font-size:20px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis; /*background-color:#3a5;*/ letter-spacing:2px;}
		#container .cont_desc{display:block; width:100%; font-weight:400; padding-top:10px; font-size:14px; line-height:25px; letter-spacing:0px;/*background-color:#ff0;*/}




	/*###########container / main_cont (실제 사용 영역)##########*/
		#main_cont{width:100%; height:900px; background-color:#fff; margin:0 auto; overflow:hidden; transition:all 0.5s linear;/*background-color:#f00;*/}

	/*##container / main_cont / visual ##*/
	/* 메인 슬라이드 비쥬얼 영역 */
		#visual{width:53%; height:100%; background-color:#ff0; overflow:hidden; float:left; position:relative;}
	/*
		visual 영역 slide 영역으로 각 li마다 한장씩 넘어가게 만들 예정   / ###완료###
		a태그와 strong태그는 display:block 예정 / ###완료###
		ul은 overflow:hidden 예정  / ###완료###
		각 li는 background-image 적용 예정  / ###완료###
	*/
		#visual .btnV{width:10%; position:absolute; right:3%; bottom:15%; opacity:1; animation:blings 0.8s infinite alternate linear;}
		#visual .btnV p{width:100%; cursor:pointer; text-align:center;}
		#visual .btnV p:first-child{margin-bottom:10vh;}
		#visual .btnV p:last-child{transform:rotatex(180deg);}
		#visual .btnV p img{width:100%;}
		#visual ul{width:100%; height:3600px; margin-top:-900px;}
		#visual ul li{width:100%; height:900px; overflow:hidden; background-color:#ff0; color:#fff; background-size:cover; background-repeat:no-repeat; background-position:center center;}
		#visual ul li a{width:80%; padding-left:10%; padding-right:10%; display:block;}
		#visual ul a:link, #visual ul a:visited{color:#fff;/* background-color:rgba(0,0,0,0.3)*/;}
		#visual li strong{font-size:50px; margin-top:550px; display:block;}
		
		#visual .m_visual0{background-image:url("img/people/people04.jpg");}
		#visual .m_visual1{background-image:url("img/visual0.jpg");}
		#visual .m_visual2{background-image:url("img/beauty/beauty00_00.jpg"); background-position:center 70%;}
		#visual .m_visual3{background-image:url("img/people/people00.jpg"); background-position:center top;}
		#visual .m_visual4{background-image:url("img/fashion/fashion07.jpg");}
		

		@keyframes blings{
		0%{opacity:1;}
		100%{opacity:0.1;}
		}



	/*##container / main_cont / side_cont ####*/
	/* 
		side_cont와 sub_cont 내용물들은 동일
	*/
		#side_cont{width:47%; height:900px;/*background-color:#f27;*/ float:left; transition:all 0.5s linear;}
		#side_cont ul{width:100%; height:100%;}
		#side_cont ul li{width:50%; overflow:hidden; padding-top:200px; float:left; transition:all 0.5s linear;}
		#side_cont a{display:block; width:80%; height:100%; margin:0 auto;}
		#side_cont a:link, #side_cont a:visited{color:#000;}

		#side_cont ul .space{padding-top:300px;}
		
		#side_cont a .cont_img img, #sub_cont a .cont_img img{transform:scale(1.2);}
		
		/*기능넣기*/
		#side_cont a:hover .cont_img, #sub_cont a:hover .cont_img{border:3px solid rgba(255,0,0,1);}
		#side_cont a:hover .cont_img img, #sub_cont a:hover .cont_img img{transform:scale(1.1);}
		#side_cont a:hover .cont_title, #sub_cont a:hover .cont_title{color:rgba(255,000,000,1);}
		#side_cont a:hover .cate, #sub_cont a:hover .cate{color:#f77;}
		#side_cont a:hover .cont_desc, #sub_cont a:hover .cont_desc{text-decoration:underline #f50;}




	/*#### container / sub_cont ######*/
		#sub_cont{width:100%; height:1500px; margin:0 auto; /*background-color:#4aa;*/transition:height 0.5s linear;}
		#photo_zone{width:90%; height:1200px; padding:0 5%; margin:0 auto; overflow:hidden; transition:height 0.5s linear;/* background-color:#a1c;*/}
		#photo_zone ul{width:25%; float:left;}
		#photo_zone li{width:100%; overflow:hidden; margin-top:100px; float:left; transition:all 0.5s linear;}
		#photo_zone .right{float:right;}
		#photo_zone a{display:block; width:80%; height:100%; margin:0 auto;}
		#photo_zone a:link, #side_cont a:visited{color:#000;}
		
		#sub_cont #spc a{width:80%; text-align:center; background-color:#000; border:20px solid #000;}
		#sub_cont #spc .cont_img{width:95%; margin:0 auto; border:5px solid red; transition:all 0.5s linear;}
		#sub_cont #spc .cont_title{padding-top:20px; color:#f55; font-size:24px;}
		#sub_cont #spc .cont_desc{color:#fff; font-size:20px; padding-bottom:50px;}
		

		/* 추후 버튼에 기능을 넣어 게시물들을 더 나타나게 만들예정 */
		.btn_more{width:100%; height:70px; margin-top:100px; transition:all 0.5s linear;}
		.btn_more a{display:block; width:300px; height:100%; line-height:70px; font-size:16px; text-transform:uppercase; margin:0 auto; background-color:#000; color:#fff; text-align:center; transition:all 0.5s linear;}





	/*######### cont_runway #############*/
		/*
			강의 / 수업 영역

			- 여기도 슬라이드 기능 예정
		*/

		#cont_runway{width:100%; height:655px; padding-top:100px; margin:0 auto; overflow:hidden; position:relative;}
		#cont_runway .btnR p{width:5%; height:120px; position:absolute; top:250px;}
		#cont_runway .btnR p img{width:100%; height:100%;}
		#cont_runway .btnR p a{display:block; background:none;}
		#cont_runway .leftB{left:0;}
		#cont_runway .rightB{right:0;}

		#cont_runway ul{width:400%; height:100%; margin-left:-100%;}
		#cont_runway li{width:25%; height:100%; transition:all 0.5s linear; float:left;}
		#cont_runway li .runway_imgArea{width:55%; height:605px; padding-left:5%; float:left; transition:all 0.5s linear;}
		#cont_runway .runway_img0, #cont_runway .runway_img1, #cont_runway .runway_img2{width:31%; padding-left:2%; height:100%; /*padding-top:50px;*/ float:left; transition:all 0.5s linear;}
		#cont_runway .runway_img0 img, #cont_runway .runway_img1 img, #cont_runway .runway_img2 img{width:100%;}
		#cont_runway .runway_img1, #cont_runway .runway_img2{display:none;}
		#cont_runway .runway_info{width:30%; height:100%; padding-left:5%; float:left;}


		#cont_runway h2{width:150px; height:40px; line-height:40px; border:1px solid #000; text-align:center; text-transform:uppercase; font-size:16px;}

		/* 이미지 사이즈 1055px * 605px */

		#cont_runway .runway_info p{width:100%; height:100px; font-size:13px; padding:10px 0; letter-spacing:1px; line-height:23px;}
		#cont_runway h4{width:100%; height:50px; line-height:50px; font-size:22px; padding:10px 0; overflow:hidden; white-space:nowrap; text-overflow:ellipsis; font-family:romanT; letter-spacing:3px; font-weight:700;}
		#cont_runway h4 span{font-size:18px; padding-right:20px; color:#f05;}
		#cont_runway .designer_name{font-size:25px; letter-spacing:2px; font-family:romanT; font-weight:400;}

		/*버튼 눌러서 해당 주소로 이동*/
		#cont_runway .runway_info .btn_runway{width: 150px; height:70px; text-align:center; float:right;}
		#cont_runway a{display:block; width:100%; height:100%; background-color:#000;}

	
	
	
	/*##################### 구간 변화 영역 and 비디오 영역 ##############*/
		#transfer0{width:100%; height:1150px; background-color:#000; background-image:url("img/people/people27.jpg");background-repeat:no-repeat; background-position:center; background-size:100%; background-attachment:fixed; margin-top:30px; overflow:hidden;}
		.video0{height:800px; margin:20px auto 0; text-align:center; transition:all 0.5s linear;}
		.video0 video{height:100%; background-color:#000; padding:30px;}
		
		#transfer0 ul{width:100%; background-color:#000; padding-top:50px; height:250px; transition:all 0.5s linear; overflow:hidden;}
		#transfer0 ul li{width:18%; float:left; padding:0 1%; position:relative; transition:all 0.5s linear;}

		#transfer0 ul img{width:100%;}
		#transfer0 ul i{width:50px; position:absolute; left:50%; top:50%; transform:translate(-50%, -80%);}
		#transfer0 ul em{display:block; color:#fff; font-style:normal; font-size:16px; padding-top:10px;}
		.videoClip2{display:none;}
	
	
	/*###############  SNS #########################*/

		#sns_area{width:100%; height:1200px; overflow:hidden; background-color:#fff; padding-top:30px; font-family: 'Noto Serif KR', serif; letter-spacing:1px;}
		#sns_area div{width:100%;}
		#sns_area ul{width:900px; height:1500px; margin:0 auto;}
		#sns_area li{width:300px; height:375px; float:left; position:relative; transition:all 0.5s linear;}
		#sns_area li .sns_img{width:280px; height:355px; border:10px solid #fff; overflow:hidden;}
		#sns_area .sns_tag{width:280px; height:60px; line-height:60px; font-size:20px; background-color:rgba(0,0,0,0.5); color:#fff; position:absolute; text-indent:10px; left:10px; bottom:10px; text-align:center; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
		#sns_area img{height:100%;}
		#sns_area li a{width:100%; height:100%;}

		#sns_area li:hover .sns_img{border-color:#f00;}
		#sns_area li:hover .sns_tag{color:#f00;}

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
	
		
		#footerHead .footerV p{background-image:url("img/company/vo_01.jpg"); display:block; opacity:0.4;}
		#footerHead .footerV b{display:block; opacity:1;}
		#footerHead .footerV span{display:block; opacity:1;}
		#footerHead .footerA p{background-image:url("img/company/al_01.jpg");}
		#footerHead .footerG p{background-image:url("img/company/gq_01.jpg");}
		#footerHead .footerW p{background-image:url("img/company/w_01.jpg");}
		

	
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

	
	
	
	/*################# 미디어 쿼리 영역 ######################*/
		/*#######  pc 영역 1025~1280px ###########*/
		@media all and (min-width:1025px) and (max-width:1280px){
			#header{height:70px;}			
			h1{width:20%; height:50px; top:10px;}		
			#gnb div p img{width:24px; margin-top:25px; margin-left:15px;}
			#gnb li{line-height:70px; padding-right:10px;}
			#lnb{height:50px; top:10px;}
			#lnb .sideMenu{line-height:25px; font-size:12px;}
			#lnb .searchArea p{width:15px; padding-top:5px;}
			#lnb .searchArea form{top:12%; margin-right:100%; display:none;}
			#container .cate{height:30px; line-height:30px;}
			#container .cont_title{height:30px; line-height:30px; font-size:18px;}
			#container .cont_desc{padding-top:5px; font-size:12px; line-height:24px;}
			#sub_cont{height:1100px;}
			#photo_zone{height:950px;}
			#photo_zone li{margin-top:50px;}
			#sub_cont #spc a{border:15px solid #000;}
			#sub_cont #spc .cont_img{border:3px solid red;}
			#sub_cont #spc .cont_title{padding-top:10px; font-size:20px;}
			#sub_cont #spc .cont_desc{font-size:14px; padding-bottom:30px;}
			.btn_more{height:50px; margin-top:30px;}
			.btn_more a{width:200px; line-height:50px; font-size:14px;}
			#cont_runway{height:450px;}
			#cont_runway li .runway_imgArea{height:405px;}
			#cont_runway .runway_info p{height:80px;}
			#cont_runway h4{height:40px; line-height:40px; font-size:18px; padding:5px 0;}
			#cont_runway h4 span{font-size:16px;}
			#cont_runway .designer_name{font-size:20px;}
			#cont_runway .runway_info .btn_runway{width:120px; height:65px; margin-top:20px;}
		
		}
		
		
		
		
		/*########### 태블릿pc 768~1025px  ################*/
		@media all and (min-width:768px) and (max-width:1024px){
			#header{height:60px;}
			#header h1{width:20%; height:30px; top:20px;}
			#gnb div{width:15%;}
			#gnb div p img{width:25px; margin-top:20px; margin-left:15px;}
			#gnb ul{width:85%;}
			#gnb li{line-height:60px; padding-right:10px;}
			#lnb{width:25%; height:60px; top:10px;}
			#lnb .sns{width:90%; padding:0 5%;}
			#lnb .sns li{width:13%; margin-left:7%;}
			#lnb .sideMenu{width:75%; padding-right:5%; line-height:25px;}
			#lnb .sideMenu li{display:inline-block; margin-right:2%;}
			#lnb .sideMenu li:last-child{margin-right:20px;}
			#lnb .company{width:125px; padding-top:20px; right:5%; background-color:#fff;}
			#lnb .company li:last-child{margin-right:0;}
			#lnb .searchArea{width:10%; margin-right:10%; height:50%; float:right; position:relative;}
			#lnb .searchArea p{width:15px; padding-top:5px;}			
			#lnb .searchArea form{position:absolute; right:0; top:10%; margin-right:100%; display:none;}
			#lnb .searchArea fieldset{border:none;}
			#lnb .searchArea input{border:1px solid #ccc;}
			#container .cate{height:20px; line-height:20px; font-size:10px; color:#999;}
			#container .cont_title{height:30px; line-height:30px; font-size:18px;}
			#container .cont_desc{padding-top:5px; font-size:12px; line-height:20px;}
			#main_cont{height:600px;}
			#visual li strong{font-size:30px; margin-top:350px;}
			#side_cont{height:600px;}
			#side_cont ul li{padding-top:120px;}
			#side_cont ul .space{padding-top:160px;}
			#sub_cont{height:900px;}
			#photo_zone{height:800px}
			#photo_zone li{margin-top:60px;}
			#sub_cont #spc a{border:10px solid #000;}
			#sub_cont #spc .cont_title{padding-top:20px; font-size:20px;}
			#sub_cont #spc .cont_desc{font-size:16px; padding-bottom:20px;}	
			.btn_more{height:50px; margin-top:30px;}
			.btn_more a{width:200px; line-height:50px; font-size:12px;}
			#cont_runway{height:655px; padding-top:50px;}
			#cont_runway .btnR p{height:70px;}
			#cont_runway .runway_img0, #cont_runway .runway_img1{width:42%; height:48%; margin:1% 4%; padding:0; overflow:hidden;}
			#cont_runway .runway_img1{display:block;}
			#cont_runway .runway_info div{height:450px;}
			#cont_runway h2{width:120px; height:30px; line-height:30px; font-size:14px;}
			#cont_runway h4{height:40px; line-height:40px; font-size:20px;}
			#cont_runway h4 span{font-size:16px;}
			#cont_runway .designer_name{font-size:20px; padding-top:50px;}
			#cont_runway .runway_info .btn_runway{width:150px; height:60px;}
			#cont_runway .runway_info .btn_runway img{height:100%;}
			#transfer0{height:1250px; background-size:300%;}
			#transfer0 ul{width:100%; height:600px;}
			#transfer0 ul li{width:23%;}
			.video0{width:60%;}
			.video0 video{width:100%;}
			.videoClip2{display:block;}
			#sns_area{width:700px; height:1080px; margin:0 auto; padding:30px;}
			#sns_area ul{width:100%; overflow:visible;}
			#sns_area li{width:50%; overflow:hidden;}
			#sns_area li:last-child{display:none;}
			#sns_area li .sns_img{width:100%; height:380px; border:none;}
			#sns_area .sns_tag{width:100%; height:70px; line-height:70px; font-size:16px; background-color:rgba(0,0,0,0.8); left:0; bottom:0;}
			#sns_area img{width:100%;}
		}
		@media all and (min-width:768px) and (max-width:935px){
			#transfer0{height:1150px;}
			#transfer0 ul{height:400px; padding:30px 0; overflow:hidden;}
			#transfer0 ul li{width:42%; padding:0 4%;}
			.videoClip{display:none;}
		}
		@media all and (min-width:768px) and (max-width:830px){
			#cont_runway .btnR p{height:50px;}
			#transfer0{height:1100px;}
			#transfer0 ul{height:350px;}

		}

		/*####### 스마트폰 가로버전 ############*/
		@media all and (min-width:481px) and (max-width:767px){

			#headerMWrap, #visualM, #main_contM{display:block;}
			#header, #main_cont, #sub_cont{display:none;}
			
			hr{width:320px; margin:50px auto;}

			#headerMWrap{width:100%;}
			#headerM{width:100%; height:70px; margin:0 auto; background-color:#fff; border-bottom:1px solid #aaa; position:relative; z-index:2; overflow:hidden;}
			#headerM h1{width:150px; margin:15px auto 0;}
			#headerM h1 img{width:100%;}
			.menuM{width:30px; position:absolute; left:15px; top:20px; z-index:3;}
			.menuM img{width:100%;}
			.searchM{width:25px; position:absolute; right:10px; top:20px; z-index:3;}
			.searchM img{width:100%;}	
			#visualM{width:100%; margin:0 auto; background-image:url("img/visual0.jpg"); background-size:135%; color:#fff; position:relative;}
			.heading{width:100%; text-align:center; padding:30px 0 10px; background-color:rgba(0,0,0,0.8);}
			.heading .t1{font-size:16px; color:#ccc;}
			.heading h2{font-size:40px; color:#7487cf;}
			.heading .t2{width:250px; color:#ccc; font-size:12px; padding:5px 0; border-top:1px solid #555; border-bottom:1px solid #555; margin:0 auto;}
			.heading .t2 i{font-style:normal; color:#555;}
			.visualImg{width:100%; height:377px; background-color:rgba(0,0,0,0.8); text-align:center;}
			.visualImg img{width:320px; transform:scale(0.7); margin-top:-30px;}			
			#visualM ul{width:100%; height:100%; position:absolute; left:0; top:0; font-size:10px; font-weight:100;}
			#visualM li{width:47%; overflow:hidden; margin-top:20px;}
			#visualM h4{color:#0aa; font-size:8px;}
			#visualM .descTitle{color:#f00; font-size:10px; font-weight:700; letter-spacing:3px; padding:5px 0;}
			#visualM .descText{font-size:14px; padding-bottom:5px; color:#fff; line-height:15px;}
			#visualM .descDesc{font-weight:700; font-size:12px; line-height:13px;}
			#visualM .desc1{float:left; margin-top:240px; padding-left:3%;}
			#visualM .desc2{float:right; margin-top:270px; text-align:right; padding-right:3%;}
			#visualM .desc3{float:left; padding-left:3%;}
			#visualM .desc4{float:right; text-align:right; padding-right:3%;}			
			#main_contM{width:100%; margin-top:20px; position:relative;}
			
			#main_contM h2{width:80%; height:60px; line-height:60px; border-radius:5px; background-color:darkred; color:#fff; text-shadow:2px 2px 5px #000; text-indent:30px; font-size:20px; position:absolute; left:5%; top:-50px; box-shadow:5px 5px 10px #000;
			z-index:1; animation:shadow1 1s infinite linear alternate;}
			#main_contM .shadow{display:none;}

			#main_contM ul{width:100%; height:780px; margin:0 auto; overflow:hidden;}			
			#main_contM ul li{width:40%; overflow:hidden; padding:0 5% 50px; float:left; transition:all 0.5s linear;}
			#main_contM ul .right2{float:right;}
			#main_contM a{display:block; width:100%; margin:0 auto;}
			#main_contM a:link, #main_cont a:visited{color:#000;}
			#main_contM .cont_img{display:block; width:100%; margin:0 auto; background-color:#fff; overflow:hidden;}
			#main_contM .cont_img img{width:100%;}
			#main_contM .cont_text{display:block; width:100%; margin:0 auto; overflow:hidden;}
			#main_contM .cate{display:block; width:100%; height:20px; line-height:20px; font-size:10px; text-indent:5px; text-transform:uppercase; font-style:normal;  color:#f55; letter-spacing:10px; transition:font-size 3s linear, font-weight 3s linear;/*background-color:#123;*/}
			#main_contM .cont_title{display:block; width:100%; height:30px; line-height:30px; font-size:14px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis; /*background-color:#3a5;*/}
			#main_contM .cont_desc{display:block; width:100%; font-weight:400; font-size:12px; line-height:24px;/*background-color:#ff0;*/}
			#main_contM .btn_moreM{width:200px; height:50px; line-height:50px; background-color:#000; margin:30px auto 0;}
			#main_contM .btn_moreM a{display:block; width:100%; height:100%; color:#fff; text-align:center; text-transform:capitalize;}		
		
			#cont_runway{padding-top:0;}
			#cont_runway .btnR p{height:40px; top:60%;}
			#cont_runway .runway_img1, #cont_runway .runway_img2{display:block;}
			#cont_runway li{overflow:hidden;}
			#cont_runway li .runway_imgArea{width:1440px; height:250px; padding-left:0; float:none; animation:runway 30s infinite linear; transform:translatex(0);}
			#cont_runway .runway_img0, #cont_runway .runway_img1, #cont_runway .runway_img2{width:150px; padding-left:10px;}
			#cont_runway .runway_info{width:100%;}
			#cont_runway h2{height:30px; line-height:30px; font-size:14px;}
			#cont_runway .runway_info p{width:90%; padding:0; overflow:visible;}
			#cont_runway h4{height:40px; line-height:40px; font-size:15px; padding:0;}
			#cont_runway h4 span{font-size:14px;}
			#cont_runway .designer_name{font-size:16px;}
			#cont_runway .runway_info .btn_runway{height:50px; margin:30px auto 0; float:none;}
			#cont_runway a img{height:90%;}
			
			
			#transfer0{width:100%; height:1100px; overflow:hidden; background:none; background-color:#000;}
			.video0{width:80%; margin:0 auto; text-align:center; background-color:#000; padding:30px 0; transition:all 0.5s linear;}
			.video0 video{width:100%;}
			#transfer0 ul{width:100%; height:250px; overflow:hidden;}
			#transfer0 ul i{display:none;}
			#transfer0 ul li{width:23%; padding:0 1%;}
			
			#transfer0 li em{font-size:13px;}
			.videoClip{display:block;}
			#transfer0 ul .videoClip2{display:none;}
			#transfer0 ul li:nth-child(5){display:none;}
			
			#sns_area{height:750px; padding-top:0;}
			#sns_area ul{width:100%; height:1500px; margin:0;}
			#sns_area li{width:50%; float:left; position:relative; transition:all 0.5s linear; overflow:hidden;}
			#sns_area li .sns_img{width:100%; height:500px; border:none; overflow:hidden;}
			#sns_area .sns_tag{width:100%; height:30px; line-height:30px; font-size:14px; background-color:rgba(0,0,0,0.5); color:#fff; left:0; bottom:10%; text-align:center; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}



			#footer{height:160px; background-color:gold;	}
			#footerHead ul{height:50px; overflow:hidden;}
			#footerHead li{min-width:0; width:25%; height:50px; background-image:none;}
			#footerHead li div{display:none;}

			
			
			#footerHead li a{height:100%; padding-top:15px; position:static;}
			#footerHead li a i img{height:15px;}

		

			#footer #mainFooter{height:110px; position:relative; z-index:2;}
			#footer .footer_logo{width:125px; height:35px; padding-top:10px;}
			#footer .copy{font-size:10px; padding-top:20px;}
			#footer .legal{padding-top:5px;}
			#footer .legal a{font-size:10px;}			
			#footerHead .footerV p{display:none;}
			#footerHead .footerV b{display:none;}
			#footerHead .footerV span{display:none;}
			
			@keyframes runway{
			0%{transform:translatex(0);}
			100%{transform:translatex(-960px);}
			}	
		}
		
		@media all and (min-width:481px) and (max-width:625px){
			#transfer0{height:750px;}
			
			.video0{height:500px; margin:0 auto; text-align:center; transition:all 0.5s linear;}
			.video0 video{height:100%; background-color:#000; padding:0;}
		

			#transfer0 ul{width:100%; height:600px;}
			#transfer0 ul i{display:none;}
			#transfer0 ul li{width:23%; padding:0 1%; font-size:10px;}
			#transfer0 ul .videoClip{display:block;}
			#transfer0 ul .videoClip2{display:none;}
		
	
			#sns_area li .sns_img{height:400px;}
			#footerHead .footerV p{display:none;}
			#footerHead .footerV b{display:none;}
			#footerHead .footerV span{display:none;}

		}
		@media all and (min-width:481px) and (max-width:540px){
			#transfer0{height:950px;}
			#transfer0 ul{height:360px;}
			#transfer0 ul i{display:none;}
			#transfer0 ul li{width:44%; padding:0 3% 10px; font-size:10px;}
			#transfer0 ul .videoClip{display:block;}
			#transfer0 ul .videoClip2{display:none;}
			#sns_area li .sns_img{height:380px;}
			#footerHead .footerV p{display:none;}
			#footerHead .footerV b{display:none;}
			#footerHead .footerV span{display:none;}
		}
		
		
		/*########### 스마트폰 세로버전 #########*/
		@media all and (min-width:320px) and (max-width:480px){

			#headerMWrap, #visualM, #main_contM{display:block;}
			#header, #main_cont, #sub_cont{display:none;}
			
			hr{width:320px; margin:50px auto;}

			#headerMWrap{width:100%;}
			#headerM{width:100%; height:70px; margin:0 auto; background-color:#fff; border-bottom:1px solid #aaa; position:relative; z-index:2; overflow:hidden;}
			#headerM h1{width:150px; margin:15px auto 0;}
			#headerM h1 img{width:100%;}
			.menuM{width:30px; position:absolute; left:15px; top:20px; z-index:3;}
			.menuM img{width:100%;}
			.searchM{width:25px; position:absolute; right:10px; top:20px; z-index:3;}
			.searchM img{width:100%;}	
			#visualM{width:100%; margin:0 auto; background-image:url("img/visual0.jpg"); background-size:135%; color:#fff; position:relative;}
			.heading{width:100%; text-align:center; padding:30px 0 10px; background-color:rgba(0,0,0,0.8);}
			.heading .t1{font-size:16px; color:#ccc;}
			.heading h2{font-size:40px; color:#25a5cc;}
	
			.heading .t2{width:250px; color:#ccc; font-size:12px; padding:5px 0; border-top:1px solid #555; border-bottom:1px solid #555; margin:0 auto;}
			.heading .t2 i{font-style:normal; color:#555;}
			.visualImg{width:100%; height:377px; background-color:rgba(0,0,0,0.8); text-align:center;}
			.visualImg img{width:320px; transform:scale(0.7); margin-top:-30px;}			
			#visualM ul{width:100%; height:100%; position:absolute; left:0; top:0; font-size:10px; font-weight:100;}
			#visualM li{width:47%; overflow:hidden; margin-top:20px;}
			#visualM h4{color:#0aa; font-size:8px;}
			#visualM .descTitle{color:#f00; font-size:10px; font-weight:700; letter-spacing:3px; padding:5px 0;}
			#visualM .descText{font-size:14px; padding-bottom:5px; color:#fff; line-height:15px;}
			#visualM .descDesc{font-weight:700; font-size:12px; line-height:13px;}
			#visualM .desc1{float:left; margin-top:240px; padding-left:3%;}
			#visualM .desc2{float:right; margin-top:270px; text-align:right; padding-right:3%;}
			#visualM .desc3{float:left; padding-left:3%;}
			#visualM .desc4{float:right; text-align:right; padding-right:3%;}
			#main_contM{width:100%; margin-top:20px; position:relative;}
			#main_contM h2{width:90%; height:60px; line-height:60px; background-color:darkred; color:#fff; text-shadow:2px 2px 2px #300; text-indent:30px; font-size:20px; position:absolute; left:5%; top:-50px; box-shadow:3px 3px 4px #333;}
			#main_contM .shadow{display:none}

			#main_contM ul{width:320px; margin:0 auto;}
			#main_contM .hidden, #main_contM .right2{display:none;}
			#main_contM ul li{width:100%; overflow:hidden; padding-bottom:50px; transition:all 0.5s linear;}
			#main_contM a{display:block; width:100%; margin:0 auto;}
			#main_contM a:link, #main_cont a:visited{color:#000;}
			#main_contM .cont_img{display:block; width:100%; margin:0 auto; background-color:#fff; overflow:hidden;}
			#main_contM .cont_img img{width:100%;}
			#main_contM .cont_text{display:block; width:100%; margin:0 auto; overflow:hidden;}
			#main_contM .cate{display:block; width:100%; height:20px; line-height:20px; font-size:12px; font-weight:700; text-indent:5px; text-transform:uppercase; font-style:normal;  color:#f55; letter-spacing:10px; transition:font-size 3s linear, font-weight 3s linear;/*background-color:#123;*/}
			#main_contM .cont_title{display:block; width:100%; height:30px; line-height:30px; font-size:18px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis; /*background-color:#3a5;*/}
			#main_contM .cont_desc{display:block; width:100%; font-weight:400; font-size:12px; line-height:24px;/*background-color:#ff0;*/}
			#main_contM .btn_moreM{width:200px; height:50px; line-height:50px; background-color:#000; margin:0 auto;}
			#main_contM .btn_moreM a{display:block; width:100%; height:100%; color:#fff; text-align:center; text-transform:capitalize;}		
		
			#cont_runway{padding-top:0; height:500px;}
			#cont_runway .btnR p{height:30px;}
			#cont_runway .runway_img1, #cont_runway .runway_img2{display:block;}
			#cont_runway li{overflow:hidden;}
			#cont_runway li .runway_imgArea{width:1440px; height:250px; padding-left:0; float:none; animation:runway 30s infinite linear; transform:translatex(0);}
			#cont_runway .runway_img0, #cont_runway .runway_img1, #cont_runway .runway_img2{width:150px; padding-left:10px;}
			#cont_runway .runway_info{width:100%; height:250px;}
			#cont_runway h2{height:30px; line-height:30px; font-weight:400; font-size:14px; text-align:left; border-left:none; border-right:none;}
			#cont_runway .runway_info p{width:90%; height:50px; overflow:hidden; padding:0;}
			#cont_runway h4{height:40px; line-height:40px; font-size:18px; padding:0;}
			#cont_runway h4 span{font-size:14px;}
			#cont_runway .designer_name{font-size:18px; color:#33a;}
			#cont_runway .runway_info .btn_runway{display:none;}
			#cont_runway a img{height:90%;}
			
			#transfer0{width:100%; height:700px; overflow:hidden; background:none; background-color:#000;}
			.video0{width:320px; height:300px; margin:0 auto; text-align:center; background-color:#000; padding:0; transition:all 0.5s linear;}
			.video0 video{width:100%; margin:20px auto 0; padding:0; }
			.videoClip2{display:none;}
			#transfer0 ul li:nth-child(5){display:none;}
			#transfer0 ul{width:320px; height:500px; margin:0 auto;}
			#transfer0 ul li{width:48%; height:135px; padding:5px 1%; border-bottom:1px solid #ccc;}
			#transfer0 ul li:after{content:""; display:block; clear:both;}
			#transfer0 ul img{width:100%; float:none;}
			#transfer0 ul i{display:none;}
			#transfer0 ul em{width:96%; font-size:11px; padding:10px 2% 5px; float:none;}
			


			#sns_area{height:600px; padding-top:0;}
			#sns_area ul{width:100%; height:1500px; margin:0;}
			#sns_area li{width:50%; height:200px; float:left; position:relative; transition:all 0.5s linear; overflow:hidden;}
			#sns_area li .sns_img{width:100%; height:355px; border:none; overflow:hidden;}
			#sns_area img{transform:translatex(-10%);}
			#sns_area .sns_tag{width:100%; height:30px; line-height:30px; font-size:14px; background-color:rgba(0,0,0,0.5); color:#fff; left:0; bottom:10%; text-align:center; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
	/*############ footer ##################################################*/
			#footer{height:160px; background-color:gold;	}
			#footerHead ul{height:50px; overflow:hidden;}
			#footerHead li{min-width:0; width:25%; height:50px; background-image:none;}
			#footerHead li div{display:none;}

			
			
			#footerHead li a{height:100%; padding-top:15px; position:static;}
			#footerHead li a i img{height:15px;}

			#footerHead .footerV p{display:none;}
			#footerHead .footerV b{display:none;}
			#footerHead .footerV span{display:none;}

		

			#footer #mainFooter{height:110px; position:relative; z-index:2;}
			#footer .footer_logo{width:125px; height:35px; padding-top:10px;}
			#footer .copy{font-size:10px; padding-top:20px;}
			#footer .legal{padding-top:5px;}
			#footer .legal a{font-size:10px;}			
			
			@keyframes runway{
			0%{transform:translatex(0);}
			100%{transform:translatex(-960px);}
			}

		}

  </style>
  <script>
		//########### 제이쿼리 ####################################################################
		$(document).ready(function(){
		//############# 히든 메뉴 ###############
			$("#manu_bar").click(function(){
				$("#wrap").css({"height":"100vh","overflow":"hidden"});
				$("#hiddenMenu").css({"display":"block"});
				$("#hiddenMenu").stop().animate({"width":"100%","height":"100vh"}, 200, "linear", function(){
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
				$("#hiddenMenu").stop().animate({"width":"0"}, 200, "linear", function(){
					$("#hiddenMenu").css("display","none");			
				});
			});

		//############# 메인 비쥬얼 슬라이딩 윈도우 ################
			$("#visual .btnV p:eq(0)").click(function(){
				$("#visual ul").stop().animate({"marginTop":"-=900px"}, 300, "linear", function(){
					$(this).append($(this).find("li:first"));
					$(this).css("marginTop","-900px");
				});
			});
			$("#visual .btnV p:eq(1)").click(function(){
				$("#visual ul").stop().animate({"marginTop":"+=900px"}, 300, "linear", function(){
					$(this).prepend($(this).find("li:last"));
					$(this).css("marginTop","-900px");
				});
			});

		//################ sub_cont moreBtn ###############
			var mo=0;
			
			$(".btn_more").click(function(){
				if (mo==0)
				{
					$("#sub_cont").css("height","2800px");
					$("#photo_zone").css("height","2500px");
					$(this).find("a").text("원래 크기로 -");
					mo=1;
				}
				else if (mo==1)
				{
					$("#sub_cont").css("height","1500px");
					$("#photo_zone").css("height","1200px");
					$(this).find("a").text("more view +");
					mo=0;
				}
			});	
					
		// ############### runway 슬라이딩 윈도우 ############
			$("#cont_runway .leftB").click(function(){
				$("#cont_runway ul").stop().animate({"marginLeft":"-=100%"}, 700, "easeInOutCirc", function(){
					$(this).append($(this).find("li:first"));
					$(this).css("marginLeft","-100%");
				});
			});
			$("#cont_runway .rightB").click(function(){
				$("#cont_runway ul").stop().animate({"marginLeft":"+=100%"}, 700, "easeInOutCirc", function(){
					$(this).prepend($(this).find("li:last"));
					$(this).css("marginLeft","-100%");
				});
			});



		// ################  footer hover기능 #################
			$("#footerHead li").mouseover(function(){
				$("#footerHead li div p").css({
					"display":"none"
				});
				$(this).find("div p").css({
					"display":"block","animation":"back0 0.5s 1 linear","opacity":"0.4"
				});
			});	
			$("#footerHead li a").mouseover(function(){
				$("#footerHead li a b").css({
					"display":"none"
				});
				$(this).find("b").css({
					"display":"block","zIndex":"1","animation":"spin1 0.8s 1 linear"
				});
				$("#footerHead li a span").css({
					"display":"none"
				});
				$(this).find("span").css({
					"display":"block","zIndex":"1","animation":"spin2 0.8s 1 linear"
				});
			});
		
		////////////////////////////////// video 클릭시 비디오 전환 ////////////////////////////////////
	
			$("#transfer0 ul li a").click(function(){
				var vid=$(this).children("span").children("img").attr("src").substring(15,17);
				$(".video0 video").attr("src","video/video"+vid+".mp4");
				return false;
			});


		

		// ################### 자동 클릭으로 인한 슬라이딩 윈도우 넘기기
			var sel=setInterval(function(){ $(".btnV p:eq(0), .leftB").click(); },4000);

		// skip nav 이동방식 부드럽게 만들기
			for (var i=0; i<4; i++)
			{
				$("#skipNav .skip p:eq("+i+") a").bind("click focusOn" ,function(){
					var na=$(this).attr("href");
					var area=$(na).offset().top;
					$("body, html").stop().animate({scrollTop:area},500);
				});
			}
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
	<div id="skipNav">
			<div class="skip">
				<p class="mainCont">
					<a href="#mainCont" title="메인 영역">
						메인 영역 바로가기
					</a>
				</p>
				<p class="runwayA">
					<a href="#cont_runway" title="런웨이 영역">
						런웨이 영역 바로가기
					</a>
				</p>
				<p class="videoArea">
					<a href="#transfer0" title="비디오 영역">
						비디오 영역 바로가기
					</a>
				</p>
				<p class="snsArea">
					<a href="#sns_area" title="sns 영역">
						sns 영역 바로가기
					</a>
				</p>
				<p class="footer">
					<a href="#footer" title="꼬릿말 영역">
						꼬릿말 영역 바로가기
					</a>
				</p>
			</div>
		</div>
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
		<header id="headerMWrap">
			<div id="headerM">
				<h1><a href="index.php" title="vogue main"><img src="img/vogue_logo.png" alt="vogue"/></a></h1>
				<p class="menuM"><a href="#none" title="menu"><img src="img/icon/all_menu1.png" alt="메뉴"/></a></p>
				<p class="searchM"><a href="#none" title="search"><img src="img/icon/search_icon.png" alt="검색"/></a></p>
			</div>
		</header>
		<div id="container">
			<div id="visualM">
				<div class="heading">
					<p class="t1">COVID-19 동행 SALE</p>
					<h2>JULY</h2>
					<p class="t2">2020년 7월의소식지 <i>|</i> H E R A × CHANEL</p>
				</div>
				<p class="visualImg"><img src="img/vogue0.jpg" alt="메인 비쥬얼 이미지"/></p>
				<ul>
					<li class="desc1">
						<h4>CH.1</h4>
						<p class="descTitle">NEW</p>
						<p class="descText">HERMES<br/>ON STAGE</p>
						<p class="descDesc">무대위의 주인공<br/>interview</p>
					</li>
					<li class="desc2">
						<h4>CH.2</h4>
						<p class="descTitle">FASHION</p>
						<p class="descText">황혼에서<br/>새벽까지</p>
						<p class="descDesc">밤거리의 트랜드</p>
					</li>
					<li class="desc3">
						<h4>CH.3</h4>
						<p class="descTitle">HOT</p>
						<p class="descText">BEAUTY</p>
						<p class="descDesc">여름 메이크업<br/>찰떡 브론져 BEST8</p>
					</li>
					<li class="desc4">
						<h4>CH.4</h4>
						<p class="descTitle">정기구독시</p>
						<p class="descText">아워글래스</p>
						<p class="descDesc">립&amp;블러쉬</p>
					</li>
				</ul>
			</div>
			<div id="main_contM">
				<h2>New Clip</h2>
				<h2 class="shadow">&nbsp;</h2>
				<ul>
					<li class="space">
						<a href="#" title="김태리의 선과 악">
							<span class="cont_img"><img src="img/cont7.jpg" alt="김태리의 선과 악 이미지"/></span>
							<span class="cont_text">	
								<em class="cate">people</em>
								<strong class="cont_title">김태리의 선과악</strong>
								<b class="cont_desc">선과 악, 동화와 소설, 소년과 소녀, 아침과 밤, 과거와 미래, 아이와 어른… 그리하여 완성된 김태리의 진실 혹은 대담. 동굴 같은 드레스에서 빠져나온 김태리는 블랙 수트에 스니커즈 차림이었다. 우리는 스튜디오 구석 칸막이 뒤편에서 마주...</b>
							</span>
						</a>
					</li>
					<li class="right2">
						<a href="#" title="Dior Beauty n Jisoo">
							<span class="cont_img"><img src="img/cont16.jpg" alt="Dior Beauty &amp; Jisoo 이미지"/></span>
							<span class="cont_text">	
								<em class="cate">beauty</em>
								<strong class="cont_title">Dior Beauty &amp; Jisoo</strong>
								<b class="cont_desc">봄의 시작 3월, 디올이 ‘디올 어딕트’ 라인의 ‘스텔라 헤일로 샤인’을 발표한다. “디올은 여성이 더 아름답고 강인하고 담대하게 느끼도록 독려해요.” 지난봄 서울에 들러 &lt;보그&gt;와 촬영했던 슈퍼모델 카라...</b>
							</span>
						</a>
					</li>
					<li class="hidden">
						<a href="#" title="베일 벗은 싹쓰리 패션의 모든 것">
							<span class="cont_img"><img src="img/cont0.png" alt="베일 벗은 싹쓰리 패션의 모든 것 이미지"/></span>
							<span class="cont_text">
								<em class="cate">Fashion</em>
								<strong class="cont_title">베일 벗은 싹쓰리 패션의 모든 것</strong>
								<b class="cont_desc">유두래곤, 린다G, 비룡까지, 새 ‘부캐’를 얻은 세 사람의 일거수일투족은 연일 화제가 되며 싹쓰리 열풍을 몸소 증명하고 있죠. 그들의 패션 역시 ‘나, 비효과x효리 파워’의 시너지로 품절 사태를 일으...</b>
							</span>
						</a>
					</li>
					<li class="hidden right2">
						<a href="#" title="선미가 말하는 정체성">
							<span class="cont_img"><img src="img/cont6.png" alt="선미가 말하는 정체성 이미지"/></span>
							<span class="cont_text">
								<em class="cate">people</em>
								<strong class="cont_title">선미가 말하는 정체성</strong>
								<b class="cont_desc">선미의 정체성은 이 말로 함축된다. “아티스트라면 패션, 뷰티뿐 아니라 시대정신과 문화를 이끌어야죠.”선미는 친동생과 &lt;보그&gt; 촬영장에 왔다. 사진을 전공한 동생 이승동은 지난해 선미의 해외 투어부터 전담 사진가로 활약...</b>
							</span>
						</a>
					</li>
				</ul>
				<p class="btn_moreM">
					<a href="#none" title="view more">
						view more
					</a>
				</p>
			</div>
			<div id="main_cont">
				<!--###### 메인 슬라이드 영역 ###########-->
				<div id="visual">
					<div class="btnV">
						<p><a href="#none" title="위로"><img src="img/icon/arrowD.png" alt="위로 버튼"/></a></p>
						<p><a href="#none" title="아래"><img src="img/icon/arrowD.png" alt="아래 버튼"/></a></p>
					</div>
					<ul>
						<li class="m_visual0">
							<a href="desc/desc02.php" title="제이미">
								<strong>제이미가 된 조권, 신주협, MJ, 렌</strong>
								<span>
									뮤지컬 &lt;제이미&gt;에서 제이미가 된 조권, 신주협, MJ, 렌은 노래한다.
								</span>
							</a>
						</li>
						<li class="m_visual1">
							<a href="desc/desc01.php" title="입생로랑">
								<strong>입생로랑 뷰티만의 인텐스 누드와 대체 불가 현아의 짜릿한 만남</strong>
								<span>
									지금까지의 ‘누드’와는 확연히 다르다. 달콤하고 짜릿하며, 강렬하고 부드럽다.
								</span>
							</a>
						</li>
						<li class="m_visual2">
							<a href="desc/desc03.php" title="헤이즈">
								<strong>헤이즈의 핑크빛 얼굴</strong>
								<span>
									분홍은 그저 귀여운 색 이상의 가치가 있다. 자신만만하게 빛나는 ‘수향’ 핑크로 채색한 헤이즈의 얼굴.
								</span>
							</a>
						</li>
						<li class="m_visual3">
							<a href="desc/desc04.php" title="ShortHairIdeas">
								<strong>뜨는 프로듀서 다비가 궁금해</strong>
								<span>
									다비는 헤이즈의 1위 곡을 쏟아낸 프로듀서이자 재즈 알앤비 뮤지션이다. 
								</span>
							</a>
						</li>
						<li class="m_visual4">
							<a href="desc/desc05.php" title="구찌정신">
								<strong>31 Rue Cambon, Paris</strong>
								<span>
									“패션은 변하지만 스타일은 남는다.”
								</span>
							</a>
						</li>
					</ul>
				</div>
				<!--###### 사이드 게시물 ###############-->
				<div id="side_cont">
					<ul>
						<li class="space">
							<a href="desc/desc00.php" title="김태리의 선과 악">
								<span class="cont_img"><img src="img/cont7.jpg" alt="김태리의 선과 악 이미지"/></span>
								<span class="cont_text">	
									<em class="cate">people</em>
									<strong class="cont_title">김태리의 선과악</strong>
									<b class="cont_desc">선과 악, 동화와 소설, 소년과 소녀, 아침과 밤, 과거와 미래, 아이와 어른… 그리하여 완성된 김태리의 진실 혹은 대담. 동굴 같은 드레스에서 빠져나온 김태리는 블랙 수트에 스니커즈 차림이었다. 우리는 스튜디오 구석 칸막이 뒤편에서 마주...</b>
								</span>
							</a>
						</li>
						<li>
							<a href="desc/desc06.php" title="Dior Beauty n Jisoo">
								<span class="cont_img"><img src="img/cont16.jpg" alt="Dior Beauty &amp; Jisoo 이미지"/></span>
								<span class="cont_text">	
									<em class="cate">beauty</em>
									<strong class="cont_title">Dior Beauty &amp; Jisoo</strong>
									<b class="cont_desc">봄의 시작 3월, 디올이 ‘디올 어딕트’ 라인의 ‘스텔라 헤일로 샤인’을 발표한다. “디올은 여성이 더 아름답고 강인하고 담대하게 느끼도록 독려해요.” 지난봄 서울에 들러 &lt;보그&gt;와 촬영했던 슈퍼모델 카라...</b>
								</span>
							</a>
						</li>						
					</ul>
				</div>
			</div>
			<!--######## 게시물 종합 영역 ############-->
			<div id="sub_cont">
				<div id="photo_zone">
					<ul class="sub_left">
						<li>
							<a href="#" title="베일 벗은 싹쓰리 패션의 모든 것">
								<span class="cont_img"><img src="img/cont0.png" alt="베일 벗은 싹쓰리 패션의 모든 것 이미지"/></span>
								<span class="cont_text">
									<em class="cate">Fashion</em>
									<strong class="cont_title">베일 벗은 싹쓰리 패션의 모든 것</strong>
									<b class="cont_desc">유두래곤, 린다G, 비룡까지, 새 ‘부캐’를 얻은 세 사람의 일거수일투족은 연일 화제가 되며 싹쓰리 열풍을 몸소 증명하고 있죠. 그들의 패션 역시 ‘나, 비효과x효리 파워’의 시너지로 품절 사태를 일으...</b>
								</span>
							</a>
						</li>
						<li class="right">
							<a href="#" title="선미가 말하는 정체성">
								<span class="cont_img"><img src="img/cont6.png" alt="선미가 말하는 정체성 이미지"/></span>
								<span class="cont_text">
									<em class="cate">people</em>
									<strong class="cont_title">선미가 말하는 정체성</strong>
									<b class="cont_desc">선미의 정체성은 이 말로 함축된다. “아티스트라면 패션, 뷰티뿐 아니라 시대정신과 문화를 이끌어야죠.”선미는 친동생과 &lt;보그&gt; 촬영장에 왔다. 사진을 전공한 동생 이승동은 지난해 선미의 해외 투어부터 전담 사진가로 활약...</b>
								</span>
							</a>
						</li>
						<li>
							<a href="#" title="뜨는 프로듀서 다비가 궁금해">
								<span class="cont_img"><img src="img/people/people00.jpg" alt="뜨는 프로듀서 다비가 궁금해 이미지"/></span>
								<span class="cont_text">
									<em class="cate">people</em>
									<strong class="cont_title">뜨는 프로듀서 다비가 궁금해</strong>
									<b class="cont_desc">다비는 헤이즈의 1위 곡을 쏟아낸 프로듀서이자 재즈 알앤비 뮤지션이다. ‘당신의 물음에 답이 되어주고 싶어서’ 다비라 이름 지었다.
										요즘 어떤 프로듀서가 뜨거운지 음악 칼럼니스트 이대화에게 묻자 ‘다비(DAVII)’의 영상을 보내왔다. 헤이즈의 히트곡 대부분을 만든 프로듀서이자 재즈 피아노를 기반으로 알앤비를 하는 독특한 친....</b>
								</span>
							</a>
						</li>
						<li class="right">
							<a href="#" title="수지의 숨겨진 이미지">
								<span class="cont_img"><img src="img/fashion/fashion08.jpg" alt="수지의 숨겨진 이미지 이미지"/></span>
								<span class="cont_text">
									<em class="cate">fashion</em>
									<strong class="cont_title">수지의 숨겨진 이미지</strong>
									<b class="cont_desc">우리의 6월호 커버 모델 수지를 보면, 다들 여러 이미지가 연상될 것이다. 걸 그룹 미쓰에이 중 한 명으로 음악 방송에서 ‘Bad Girl Good Girl’을 파워풀하게 부르던 모습...</b>
								</span>
							</a>
						</li>
					</ul>
					<ul class="sub_left2">
						<li class="right">
							<a href="#" title="7월에 개봉하는 여자 영화 4">
								<span class="cont_img"><img src="img/cont2.jpg" alt="7월에 개봉하는 여자 영화 4 이미지"/></span>
								<span class="cont_text">
									<em class="cate">fashion</em>
									<strong class="cont_title">7월에 개봉하는 여자 영화 4</strong>
									<b class="cont_desc">벡델 테스트라는 것이 있다. 1985년 만화가 앨리슨 벡델이 고안한 것으로, 영화의 성 평등도를 측정하는 기준이다. 조건은 첫째, 이름을 가진 여자가 두 명 이상 나올 것. 둘째, 이들이 서로 대화할 것. 셋째, 대화 내용에...</b>
								</span>
							</a>
						</li>
						<li class="right">
							<a href="#" title="서울의 인기 젤라테리아 지도">
								<span class="cont_img"><img src="img/cont4.png" alt="서울의 인기 젤라테리아 지도 이미지"/></span>
								<span class="cont_text">
									<em class="cate">living</em>
									<strong class="cont_title">서울의 인기 젤라테리아 지도</strong>
									<b class="cont_desc">이제 젤라토 때문에 이탈리아가 그리워질 일은 없을 것 같습니다. 서울과 로마의 물리적 거리가 무색할 만큼 현지의 맛을 그대로 재현한 젤라테리아가 많거든요. 숙련된 젤라티에리가 운영하는 서울 시내 곳곳의...</b>
								</span>
							</a>
						</li>
						<li class="right">
							<a href="#" title="비 마이 러브(Bee My Love)">
								<span class="cont_img"><img src="img/fashion/fashion28.jpg" alt="비 마이 러브(Bee My Love) 이미지"/></span>
								<span class="cont_text">
									<em class="cate">fashion</em>
									<strong class="cont_title">비 마이 러브(Bee My Love)</strong>
									<b class="cont_desc">파리지앵 주얼러 쇼메(Chaumet)와 아시아를 대표하는 쇼메 앰배서더 배우 송혜교가 다시 한번 뭉쳤다. 2020년 여름을 위한 쇼메의 야심 찬 컬렉션, ‘비 마이 러브(Bee My Love)’ 캠페인을 위해서다. 쇼메의 하우스 시그니처인 ‘비 마이 러브’ 라인은 여름...</b>
								</span>
							</a>
						</li>
						<li class="right">
							<a href="#" title="빌리 아일리시가 바꾼 세상">
								<span class="cont_img"><img src="img/people/people11.jpg" alt="빌리 아일리시가 바꾼 세상 이미지"/></span>
								<span class="cont_text">
									<em class="cate">people</em>
									<strong class="cont_title">빌리 아일리시가 바꾼 세상</strong>
									<b class="cont_desc">슬라임 그린 가르마의 소녀, 룰 브레이커, 그래미의 여왕 그리고 안티 패션, 안티 팝. 우리가 ‘빌리 아일리시’라고 부르는 절대적 인물이다. 지난해 코첼라 뮤직 페스티벌은...</b>
								</span>
							</a>
						</li>
					</ul>
					<ul class="sub_right">
						<li>
							<a href="#" title="지루한 세상을 구하러 온 흑인 여배우들">
								<span class="cont_img"><img src="img/cont14.jpg" alt="지루한 세상을 구하러 온 흑인 여배우들 이미지"/></span>
								<span class="cont_text">
									<em class="cate">living</em>
									<strong class="cont_title">지루한 세상을 구하러 온 흑인 여배우들</strong>
									<b class="cont_desc">BLM(Black Lives Matter) 시위가 격화됨에 따라 할리우드도 영향을 받고 있다. 고전의 재평가가 이루어지면서 노예제 옹호자들을 그린 &lt;바람과 함께 사라지다&gt;(1939)가 HBO에서 퇴출됐다. 사실 할리우드...</b>
								</span>
							</a>
						</li>
						<li>
							<a href="#" title="당신의 머리카락, 제대로 관리하고 있나요?">
								<span class="cont_img"><img src="img/cont18.jpg" alt="당신의 머리카락, 제대로 관리하고 있나요? 이미지"/></span>
								<span class="cont_text">									
									<em class="cate">beauty</em>
									<strong class="cont_title">당신의 머리카락, 제대로 관리하고 있나요?</strong>
									<b class="cont_desc">‘아웃도어 보이스’, ‘더 윙’ 같은 회사의 브랜드 컨설팅을 해주고 있는 스물여덟 살의 다이애나 코헨(Dianna Cohen)은 매일 밤, 허리까지 내려오는 구불거리는 적갈색 머리칼을 빗질하는 걸로... </b>
								</span>
							</a>
						</li>
						<li>
							<a href="#" title="헤이즈의 핑크빛 얼굴">
								<span class="cont_img"><img src="img/beauty/beauty00.jpg" alt="헤이즈의 핑크빛 얼굴 이미지"/></span>
								<span class="cont_text">
									<em class="cate">beauty</em>
									<strong class="cont_title">헤이즈의 핑크빛 얼굴</strong>
									<b class="cont_desc">분홍은 그저 귀여운 색 이상의 가치가 있다. 자신만만하게 빛나는 ‘수향’ 핑크로 채색한 헤이즈의 얼굴. 어제 무슨 꿈 꿨어요? 이를 어째요? 일정이 늦게 끝나 잠을 못 잤는데. 오늘 촬영까지 남은 2시간, 어설프게 자면 오히려 더 피곤할 것 같더라고요. 그래서...</b>
								</span>
							</a>
						</li>
						<li class="right">
							<a href="#" title="1996 그때 그 영화">
								<span class="cont_img"><img src="img/living/living32.jpg" alt="1996 그때 그 영화 이미지"/></span>
								<span class="cont_text">
									<strong class="cont_title">1996 그때 그 영화</strong>
									<b class="cont_desc">2020년 여름 다시 찾아봐도 좋을 1996년 영화 10편.</b>
								</span>
							</a>
						</li>
					</ul>
					<ul class="sub_right2">
						<li class="right">
							<a href="#" title="Extraordinary Women">
								<span class="cont_img"><img src="img/cont17.jpg" alt="Extraordinary Women 이미지"/></span>
								<span class="cont_text">
									<em class="cate">fashion</em>
									<strong class="cont_title">Extraordinary Women</strong>
									<b class="cont_desc">여성으로 태어나 살아가는 모든 이를 찬사하기 위해 탄생한 피아제의 뉴 캠페인, 피아제의 특별한 여성들(Extraordinary Women) 여성이 주체적으로 자신을 정의하는 지금, 진화하는...</b>
								</span>
							</a>
						</li>
						<li id="spc" class="right">
							<a href="subscribe.php?username=<?=$_SESSION['username']?>" title="vogue 정기구독">
								<span class="cont_img"><img src="img/vogue0.jpg" alt="정기구독 이미지"/></span>
								<span class="cont_text">
									<strong class="cont_title">정기구독 신청</strong>
									<b class="cont_desc">최대 30% 할인혜택을 드립니다!</b>
								</span>
							</a>
						</li>
						<li class="right">
							<a href="#" title="한돈 샤퀴트리">
								<span class="cont_img"><img src="img/living/living31.jpg" alt="한돈 샤퀴트리 이미지"/></span>
								<span class="cont_text">
									<em class="cate">living</em>
									<strong class="cont_title">한돈 샤퀴트리</strong>
									<b class="cont_desc">‘샤퀴트리’라고 하면 뭔가 거창하고 럭셔리한 요리 같지만 쉽게 말해, 프랑스어로 다양한 부위를 이용해 만든 유럽의 가공육이라는 뜻입니다. 장기 보관을 위해 고기를 염장하거나 숙성시킨 소시지, 햄, 살라미, 프로슈토, 초리조 등을 모두 통칭하는 말이죠...</b>
								</span>
							</a>
						</li>
						<li>
							<a href="#" title="대마의 반란">
								<span class="cont_img"><img src="img/beauty/beauty27.jpg" alt="대마의 반란 이미지"/></span>
								<span class="cont_text">									
									<em class="cate">beauty</em>
									<strong class="cont_title">대마의 반란</strong>
									<b class="cont_desc">바이러스 포비아 시대에 우리는 안정과 평화를 수호하는 ‘그린 러시’ 신드롬을 갈망한다. 웰니스 생태계에 대세로 떠오른 대마의 반란. 코로나19가 지구를 점령한 이후 우리 여자들의 지갑은 좀처럼 쉽게 열리지 않는다. 
									그러나 이 시기에도 유례없이 호황을 맞은 분야도 있다. 자가 격리 시간을 채운...</b>
								</span>
							</a>
						</li>
					</ul>
				</div>
				<p class="btn_more">
					<a href="#none" title="more view">
						more view +
					</a>
				</p>
			</div>	
			<hr class="hr"/>
			<!--########## runway 영역 ###########-->
			<div id="cont_runway">
				<div class="btnR">
					<p class="leftB"><a href="#none" title="왼쪽"><img src="img/icon/arrowL.png" alt="왼쪽 버튼"/></a></p>
					<p class="rightB"><a href="#none" title="오른쪽"><img src="img/icon/arrowR.png" alt="오른쪽 버튼"/></a></p>
				</div>
				<ul>
					<li class="runway0">
						<div class="runway_imgArea">
							<p class="runway_img0"><img src="img/runway/runway01/runway01_00.jpg" alt=" runway0 이미지"/></p>
							<p class="runway_img0"><img src="img/runway/runway01/runway01_01.jpg" alt=" runway1 이미지"/></p>
							<p class="runway_img0"><img src="img/runway/runway01/runway01_02.jpg" alt=" runway2 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway01/runway01_03.jpg" alt=" runway2 이미지"/></p>
							<p class="runway_img1"><img src="img/runway/runway01/runway01_04.jpg" alt=" runway3 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway01/runway01_05.jpg" alt=" runway4 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway01/runway01_00.jpg" alt=" runway0 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway01/runway01_01.jpg" alt=" runway1 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway01/runway01_02.jpg" alt=" runway1 이미지"/></p>
						</div>
						<div class="runway_info">
							<h2>RUN WAY</h2>
							<div>
								<h4 class="runway_name">Fall/Winter 2020 Ready To Wear</h4>
								<p class="runway_desc">
									생로랑은 이번 시즌 라텍스 소재를 활용해 이브 생로랑의 8,90년대 클래식한 부르주아 무드에 관능미를 더했습니다. 블랙 베이스에 볼드 한 컬러로 터치된 클래식한 이브 생로랑의 착장들은 라텍스 소재의 원피스, 팬츠, 탑, 드레스를 만나 섹시함이 더해졌죠.
								</p>
								<h4 class="designer_name"><span>다자인 by</span>Saint Laurent</h4>
								<p class="designer_desc">
									1936년 8월 1일, 이브 생 로랑은 당시 프랑스령이었던 알제리 오랑(Oran)에서 태어났다. 크리스찬 디올은 이브 생 로랑의 스케치를 보고 그 자리에서 이브 생 로랑을 어시스턴트 디자이너로 채용했다. 
									이브 생 로랑은 크리스찬 디올의 오트 쿠튀르 컬렉션과 액세서리 디자인을 도우며 크리스찬 디올이 가장 많이 의지하고 조언을 구하는 디자이너로 성장했다.
								</p>
							</div>
							<p class="btn_runway">
								<a href="runway.php?username=<?=$_SESSION['username']?>" title="runway0 주소">
									<img src="img/icon/main_more_btn01.jpg" alt="runway0 버튼 이미지"/>
								</a>
							</p>
						</div>
					</li>
					<li class="runway1">
						<div class="runway_imgArea">
							<p class="runway_img0"><img src="img/runway0.jpg" alt=" runway0 이미지"/></p>
							<p class="runway_img0"><img src="img/runway1.jpg" alt=" runway1 이미지"/></p>
							<p class="runway_img0"><img src="img/runway2.jpg" alt=" runway2 이미지"/></p>
							<p class="runway_img2"><img src="img/runway3.jpg" alt=" runway2 이미지"/></p>
							<p class="runway_img1"><img src="img/runway4.jpg" alt=" runway3 이미지"/></p>
							<p class="runway_img2"><img src="img/runway5.jpg" alt=" runway4 이미지"/></p>
							<p class="runway_img2"><img src="img/runway0.jpg" alt=" runway0 이미지"/></p>
							<p class="runway_img2"><img src="img/runway1.jpg" alt=" runway1 이미지"/></p>
							<p class="runway_img2"><img src="img/runway2.jpg" alt=" runway1 이미지"/></p>
						</div>
						<div class="runway_info">
							<h2>RUN WAY</h2>
							<div>
								<h4 class="runway_name">Fall/Winter 2020 Ready To Wear</h4>
								<p class="runway_desc">
									다양한 동물들이 강렬한 인상을 주는 톰브라운의 패션쇼! 이 런웨이를 감상 하신다면 정말 끝까지 보게 될 정도로 몰입도가 상당 합니다. 남자와 여자의 경계를 허물고 같은 옷으로, 같은 원단으로 여자와 남자가 동시에 입는 패션쇼를 보이고 있는 톰브라운의 획기적인 패션쇼는 정말 대단합니다.
								</p>
								<h4 class="designer_name"><span>다자인 by</span>Thom Browne</h4>
								<p class="designer_desc">
									1965년 미국 펜실 베이다에서 출생한 톰 브라운은 윌리엄 알렌 고등학교를 졸업하였으며, 노트르담 대학에서 경제학을 전공하며 디자이너의 삶과는 다른 학문적인 소향을 기르게 되었다. 원래 그의 꿈은 배우였다고 한다. 그는 배우의 꿈을 이루지는 못했지만 친구의 영향으로 패션 디자이너의 꿈을 새롭게 키워나가며 패션의 중심지 뉴욕으로 향하게 된다.
								</p>
							</div>
							<p class="btn_runway">
								<a href="runway.php?username=<?=$_SESSION['username']?>" title="runway0 주소">
									<img src="img/icon/main_more_btn01.jpg" alt="runway0 버튼 이미지"/>
								</a>
							</p>
						</div>
					</li>
					<li class="runway2">
						<div class="runway_imgArea">
							<p class="runway_img0"><img src="img/runway/runway02/runway02_00.jpg" alt=" runway0 이미지"/></p>
							<p class="runway_img0"><img src="img/runway/runway02/runway02_01.jpg" alt=" runway1 이미지"/></p>
							<p class="runway_img0"><img src="img/runway/runway02/runway02_02.jpg" alt=" runway2 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway02/runway02_03.jpg" alt=" runway2 이미지"/></p>
							<p class="runway_img1"><img src="img/runway/runway02/runway02_04.jpg" alt=" runway3 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway02/runway02_05.jpg" alt=" runway4 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway02/runway02_00.jpg" alt=" runway0 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway02/runway02_01.jpg" alt=" runway1 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway02/runway02_02.jpg" alt=" runway1 이미지"/></p>
						</div>
						<div class="runway_info">
							<h2>RUN WAY</h2>
							<div>
								<h4 class="runway_name">Fall/Winter 2020 Ready To Wear</h4>
								<p class="runway_desc">
									이번 르메르 FW 2020-21 컬렉션에서는 톤다운 된 딥한 컬러감들이 눈길을 사로잡습니다. 르메르만의 도시적이고 고혹적인 브랜드 이미지와 찰떡인 컬러감이라고 생각합니다. 서늘하고 삭막한 분위기의 쇼장은 50, 60년대의 관공서 모습을 표현한 것 같습니다.
								</p>
								<h4 class="designer_name"><span>다자인 by</span>Lemaire</h4>
								<p class="designer_desc">
									크리스토프 르메르(Christophe Lamaire)는 1965년 프랑스에서 태어났습니다. 그 이후 입생로랑, 티에리 뭐글러, 크리스천 라크르 등에서 디자이너 활동 했던 그는 91년에 크리스토프 르메르(Christophe Lamaire)
									자신의 이름을 건 브랜드를 론칭하며 여성복 컬렉션으로 패션위크에 데뷔를 하였습니다.
								</p>
							</div>
							<p class="btn_runway">
								<a href="runway.php?username=<?=$_SESSION['username']?>" title="runway0 주소">
									<img src="img/icon/main_more_btn01.jpg" alt="runway0 버튼 이미지"/>
								</a>
							</p>
						</div>
					</li>
					<li class="runway3">
						<div class="runway_imgArea">
							<p class="runway_img0"><img src="img/runway/runway03/runway03_00.jpg" alt=" runway0 이미지"/></p>
							<p class="runway_img0"><img src="img/runway/runway03/runway03_01.jpg" alt=" runway1 이미지"/></p>
							<p class="runway_img0"><img src="img/runway/runway03/runway03_02.jpg" alt=" runway2 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway03/runway03_03.jpg" alt=" runway2 이미지"/></p>
							<p class="runway_img1"><img src="img/runway/runway03/runway03_04.jpg" alt=" runway3 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway03/runway03_05.jpg" alt=" runway4 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway03/runway03_00.jpg" alt=" runway0 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway03/runway03_01.jpg" alt=" runway1 이미지"/></p>
							<p class="runway_img2"><img src="img/runway/runway03/runway03_02.jpg" alt=" runway1 이미지"/></p>
						</div>
						<div class="runway_info">
							<h2>RUN WAY</h2>
							<div>
								<h4 class="runway_name">Fall/Winter 2020 Ready To Wear</h4>
								<p class="runway_desc">
									스텔라 맥카트니의 정책을 반영한 가죽, 모피, 깃털 등 동물에 관련된 것을 사용하지 않는다. 생산 과정 중 공기를 오염시키는 PVC, 화합물, 아조 염색 기법, 샌드블래스팅 을 사용하지 않는다. 아동 노동과 강제 노역 가능성이 높은 국가인 시리아, 우즈베키스탄, 투르크메니스탄에서 생산된 면을 사용하지 않는다.
								</p>
								<h4 class="designer_name"><span>다자인 by</span>Stella McCartney</h4>
								<p class="designer_desc">
									스텔라 맥카트니는 15세 때부터 크리스티앙 라크루아 첫 꾸뛰르 컬렉션을 도왔으며, 영국의 사빌로우에서 몇년간 기술을 터득하는 등 패션계에서 이미 오랜 견습기간을 가졌었다. 그녀가 브랜드 클로에의 디자이너로 역임되었을 때,
									많은 사람들이 아버지 폴 맥카트니의 후광으로 쉽게 디자이너가 되었다고 생각했다. 그녀의 첫 클로에 컬렉션은 성공적이었고, 쇠락의 길을 걷던 클로에를 성공적인 브랜드로 만들었다.
								</p>
							</div>
							<p class="btn_runway">
								<a href="runway.php?username=<?=$_SESSION['username']?>" title="runway0 주소">
									<img src="img/icon/main_more_btn01.jpg" alt="runway0 버튼 이미지"/>
								</a>
							</p>
						</div>
					</li>
				</ul>
			</div>
			<div id="transfer0">
				<div class="video0">
						<video controls autoplay muted loop>
							<source src="video/video.mp4" type="video/mp4"/>
						</video>
				</div>
				<ul>
					<li>
						<a class="video1" href="#none" title="영상 1">
							<span>
								<img src="img/video/video00.jpg" alt="비디오1 이미지"/>
							</span>
							<em>[73문73답] 헐리우드의 여신 마고 로비</em>
							<i><img src="img/icon/play.png" alt="재생"/></i>
						</a>
					</li>
					<li>
						<a href="#none" title="영상 2">
							<span>
								<img src="img/video/video01.jpg" alt="비디오2 이미지"/>
							</span>
							<em>반전 매력의 소유자, 뷰티 퀸 씨엘에게 근황을 물었다</em>
							<i><img src="img/icon/play.png" alt="재생"/></i>
						</a>
					</li>
					<li class="videoClip">
						<a href="#none" title="영상 3">
							<span>
								<img src="img/video/video02.jpg" alt="비디오3 이미지"/>
							</span>
							<em>샤넬 선글라스 - 보그 코리아와 샤넬의 패션필름</em>
							<i><img src="img/icon/play.png" alt="재생"/></i>
						</a>
					</li>
					<li class="videoClip">
						<a href="#none" title="영상 4">
							<span><img src="img/video/video03.jpg" alt="비디오4 이미지"/></span>
							<em>면접 대기실에 샤넬 신상백이 등장했다?!</em>
							<i><img src="img/icon/play.png" alt="재생"/></i>
						</a>
					</li>
					<li class="videoClip">
						<a href="#none" title="영상 5">
							<span><img src="img/video/video04.jpg" alt="비디오5 이미지"/></span>
							<em>[EN/CN/JA SUB]제니를 가장 행복하게 하는 쿠마의 애교는?</em>
							<i><img src="img/icon/play.png" alt="재생"/></i>
						</a>
					</li>
					<li class="videoClip videoClip2">
						<a href="#none" title="영상 6">
							<span><img src="img/video/video05.jpg" alt="비디오6 이미지"/></span>
							<em>배우 장기용이 거짓말을 하면 얼굴에 어떤 변화가?</em>
							<i><img src="img/icon/play.png" alt="재생"/></i>
						</a>
					</li>
					<li class="videoClip videoClip2">
						<a href="#none" title="영상 7">
							<span><img src="img/video/video06.jpg" alt="비디오7 이미지"/></span>
							<em>GUCCI/The Performers</em>
							<i><img src="img/icon/play.png" alt="재생"/></i>
						</a>
					</li>
					<li class="videoClip videoClip2">
						<a href="#none" title="영상 8">
							<span><img src="img/video/video07.jpg" alt="비디오8 이미지"/></span>
							<em>수지가 들려주는 "CUCCI", 백 활용법</em>
							<i><img src="img/icon/play.png" alt="재생"/></i>
						</a>
					</li>
				</ul>
			</div>
			<div id="sns_area">	
				<div>					
					<ul>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CC1kZJop7J5/" title="sns1"><img src="img/sns/sns00.jpg" alt="sns0 이미지"/></a></p>
							<p class="sns_tag">#parkseojun #seojun #parkseojoon</p>
						</li>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CDmC1uSBKqu/" title="sns2"><img src="img/sns/sns01.jpg" alt="sns1 이미지"/></a></p>
							<p class="sns_tag">#gigihadid #vogue #voguekorea</p>
						</li>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CD36CVQldSw/" title="sns3"><img src="img/sns/sns02.jpg" alt="sns2 이미지"/></a></p>
							<p class="sns_tag">#model #shooting #voguekorea</p>
						</li>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CD8YoZYhcFb/" title="sns4"><img src="img/sns/sns03.jpg" alt="sns3 이미지"/></a></p>
							<p class="sns_tag">#frukmagazine #britishvogue #voguekorea</p>
						</li>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CD5rq57JeiA/" title="sns5"><img src="img/sns/sns04.jpg" alt="sns4 이미지"/></a></p>
							<p class="sns_tag">#YSLbeauty #new #mywork</p>
						</li>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CDnJyExAa5P/" title="sns6"><img src="img/sns/sns07.jpg" alt="sns5 이미지"/></a></p>
							<p class="sns_tag">#voguekorea #repost #정장</p>
						</li>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CD4p9W0J5DL/" title="sns7"><img src="img/sns/sns08.jpg" alt="sns6 이미지"/></a></p>
							<p class="sns_tag">#itzyryujin #itzyyeji #itzysexy</p>
						</li>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CD0hTW4j9c_/" title="sns8"><img src="img/sns/sns05.jpg" alt="sns7 이미지"/></a></p>
							<p class="sns_tag">#irisvanherpen #couture #sensoryseas</p>
						</li>
						<li>
							<p class="sns_img"><a href="https://www.instagram.com/p/CDLQ3lPgoUq/" title="sns9"><img src="img/sns/sns06.jpg" alt="sns7 이미지"/></a></p>
							<p class="sns_tag">#fashioneditorial #fashion #fashionphotography</p>
						</li>
					</ul>
				</div>
			</div>
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
				<p class="legal"><a class="policyM" href="policy.php" title="개인정보 취급방침">개인정보 취급방침</a></p>
			</div>
		</div>
	</div>
 </body>
</html>
