<?php
	include "00_conn.php";

	$useremail=$_POST["userid"];
	$userpw=$_POST["userpw"];

	//	echo $useremail.$userpw;


	$sql="SELECT *FROM vogue_member WHERE useremail='$useremail' AND userpw='$userpw'";

	$result=mysqli_query($conn, $sql);

	$row=mysqli_fetch_array($result);

	if ($row['useremail']==$useremail && $row['userpw']==$userpw){

		session_start();
		$_SESSION['username']=$row['username'];
		$_SESSION['useremail']=$row['useremail'];
		$_SESSION['userphone']=$row['userphone'];
		$_SESSION['SMS']=$row['SMS'];
		$_SESSION['userbirthday']=$row['userbirthday'];
		$_SESSION['postcode']=$row['postcode'];
		$_SESSION['address']=$row['address'];
		$_SESSION['sleep']=$row['sleep'];

		echo "<p style='font-size:25px; text-align:center;'>환영합니다. <span style='color:red;'>".$row["username"]."</span>님 모든 서비스를 이용하실 수 있습니다</p>}";

	}
	else{
		echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.'); history.go(-1); </script>";
	}
	
	mysqli_close($conn);

	echo "<meta http-equiv='Refresh' content='1; url=index.php'/>";

?>