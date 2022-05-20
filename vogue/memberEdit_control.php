<?php

	include "00_conn.php";

	$email=$_POST['email'];
	$userpw=$_POST['userpw'];

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

	$sqlemail="SELECT * FROM vogue_member WHERE useremail='$email'";
	$result=mysqli_query($conn, $sqlemail);

	$row=mysqli_fetch_array($result);
	
	$row['userpw']==$userpw



	if ($email=="" || $userpw=="" || $username=="" || $phone=="" ){
		echo "<p style='font-size:30px; text-align:center; color:red;'>빈칸이 있습니다. 채워주시길 바랍니다</p>";
		echo "<script>history.go(-1); </script>";
	}
	else if($row['userpw']!=$userpw){
		echo "<p style='font-size:30px; text-align:center; color:blue;'>비밀번호가 일치하지 않습니다. 확인해주시기 바랍니다.</p>";
		echo "<script>history.go(-1); </script>";
	}
	else{	
		$sql="UPDATE vogue_member
		SET userphone='$phone', SMS='$sms', userbirthday='$birth', postcode='$postcode', address='$addr', sleep='$sleep' WHERE useremail='$email'";
	

		mysqli_query($conn, $sql);
		
		echo "<script>alert('수정이 완료 되었습니다.');</script>";
	}
	



	
	mysqli_close($conn);

	echo "<meta http-equiv='Refresh' content='1; url=index.php'/>"; 

?>