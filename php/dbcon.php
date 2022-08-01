<?php
	header("content-type:text/html; charset=utf-8");
	$dbcon = mysqli_connect("localhost","root","whgusska153","login");
	// $dbcon = mysqli_connect("localhost","dotsisi154","sinof154!","dotsisi154");

   //dbcon.php 파일만 파일질라에 업로드


	if($dbcon->connect_error){
		echo $dbcon-> connect_errorno;
		exit;
	}

	$dbcon -> set_charset("utf8");
?>