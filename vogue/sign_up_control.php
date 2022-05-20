<?php

	include "00_conn.php";

	
	$email=$_POST['email'];
	$userpw=$_POST['userpw'];
	$userpwChk=$_POST['userpwChk'];
	$username=$_POST['username'];
	$phone=$_POST['phone'];
	//////////////////////////////////////// sms
	$sms=$_POST['sms'];



	///////////////////////////////// 생년 월일 합치기
	$lunarSolar=$_POST['lunarSolar'];
	$b_year=$_POST['b_year'];
	$b_month=$_POST['b_month'];
	$b_date=$_POST['b_date'];
	//////////////////////////////////// 생년월일 미선택시 공백 만들기
	if($lunarSolar=="selected" || $b_year=="year" || $b_month=="month" || $b_date=="day"){
		$birth="";
	}
	else{
		$birth=$lunarSolar." ".$b_year." ".$b_month." ".$b_date;
	}
	//////////////////////////////////////// 주소 
	$postcode=$_POST['postcode'];
	$address=$_POST['address'];
	$address2=$_POST['address2'];
	//////////////////////////////////////////// 주소 미입력시 공백만들기
	if ($postcode!="" && $address!=""){
		$addr=$address." ".$address2;
	}
	else{
		$addr="";
	}
	/////////////////////////////////// 휴면 기간
	$sleep=$_POST['sleepW'];


	// 데이터 불러와 지는지 확인
	//echo $email.$userpw.$username.$phone.$sms.$birth.$postcode.$addr.$sleepW;
	if ($email=="" || $userpw=="" || $username=="" || $phone=="" ){
		echo "<p style='font-size:30px; text-align:center; color:red;'>빈칸이 있습니다. 채워주시길 바랍니다</p>";
		echo "<script>history.go(-1); </script>";
	}
	else if($userpw!=$userpwChk){
		echo "<p style='font-size:30px; text-align:center; color:blue;'>비밀번호가 일치하지 않습니다. 확인해주시기 바랍니다.</p>";
		echo "<script>history.go(-1); </script>";
	}
	else{	
		$sql="INSERT INTO vogue_member
		(useremail, userpw, username, userphone, SMS, userbirthday, postcode, address, sleep)
		VALUES
		('$email','$userpw','$username','$phone','$sms','$birth','$postcode','$addr','$sleep')";

		$result=mysqli_query($conn, $sql);
		
	}
	



	
	mysqli_close($conn);
	echo "<meta http-equiv='Refresh' content='1; url=completed.php'/>"; 
?>
