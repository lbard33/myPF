<?php
	
	header ("content-type:text/html; charset=utf-8");
	
	/*
		DB 정보 필요없음,
		네트워크에 있는 session 정보만 삭제하기
	*/

	session_start();

	# 1  - 세션 시작하기

	session_unset();
	# 2 -  세션 삭제하기
	
	
	session_destroy();
	# 3 -  세션 파기하기

	echo "<p style='text-align:center; color:blue;'>로그아웃 되었습니다.</p>";
	echo "<meta http-equiv='Refresh' content='1; url=index.php'/>";



?>