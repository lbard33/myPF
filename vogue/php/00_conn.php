<?php
	////////////// 초기화 //////////////////////////////////////////////

	header("content-type:text/html; charset=utf-8");
	
	$conn=mysqli_connect("localhost","lbard","wndehr33##","vogue");
	
	if ($conn->connect_error){
		echo $conn->connect_errorno;
		exit;
	}

	$conn->set_charset("utf8");

?>