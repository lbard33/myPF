<?php

	include "00_conn.php";

	$useremail=$_POST["useremail"];
	$userpw=$_POST["userpw"];
	$userpw0=$_POST["userpw0"];
	$userpw00=$_POST["userpw00"];
	

	//echo $useremail.$userpw.$userpw0.$userpw00;

	$chksql="SELECT * FROM vogue_member WHERE useremail='$useremail'";
	
	$result=mysqli_query($conn, $chksql);

	$row=mysqli_fetch_array($result);

	if ($userpw0!=$userpw00 || $row['userpw']!=$userpw){
		
		echo "<script>alert('비밀번호가 동일하지 않습니다. 확인후 다시 시도해주시기 바랍니다.'); history.go(-1);</script>";
	}
	
	else{
	
		$sql="UPDATE vogue_member
		SET userpw='$userpw0' WHERE useremail='$useremail'";

		mysqli_query($conn, $sql);

		echo "<script>alert('성공적으로 변경되었습니다.');</script>";
	}

	mysqli_close($conn);

	echo "<meta http-equiv='Refresh' content='1; url=index.php'/>";

?>