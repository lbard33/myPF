<?php

	include "00_conn.php";

	$q=$_REQUEST["q"];


	/*
		REQUEST는 슈퍼 전역변수로. 
		
		GET방식과 POST방식 두개다 포함하고있음
		그래서 부분적 정보를 넘기거나 이용할때 혹은 ajax를 통해서 넘겨줄때는 REQUEST를 많이 사용함
	
		
		members 테이블에서 일치하는 id가 있는지 확인하기	
	
	*/
	$sql="SELECT * FROM vogue_member WHERE useremail='$q'";

	$result=mysqli_query($conn, $sql);

	// 한줄씩 읽기

	$row=mysqli_fetch_array($result);



	if($row['useremail']==$q)
	{
		echo "<strong style='color:red; '>중복된 아이디 입니다. 사용 불가능</strong>";
	}
	else{
		echo "<strong style='color:blue; '>사용 가능한 아이디 입니다.</strong>";
	}
?>