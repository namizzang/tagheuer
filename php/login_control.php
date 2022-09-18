<?php
   include "dbcon.php";
   
   //login.php에서 입력받은 id, userpw
   $userid = $_POST['userid'];
   $userpw = $_POST['userpw'];

   // $sql = "SELECT * FROM login WHERE mail = '$userid' AND pw='$userpw' ";
   $sql = "SELECT * FROM user WHERE mail = '$userid' AND pw='$userpw' ";

   $result = mysqli_query($dbcon,$sql);

   $row = mysqli_fetch_array($result);

   if($row['mail'] == $userid && $row['pw'] == $userpw){

		session_start();
		$_SESSION['mail'] = $userid;

      echo "<script>alert('로그인 완료')</script>";
		echo "<script>location.replace('../index.html');</script>";
	}
	else{
		echo "<script>alert('ID 혹은 비밀번호를 확인해 주세요!')</script>";
      echo "<script>location.replace('login.php');</script>";
	}
   
   //결과가 존재하면 세션 생성
   if ($row != false){
      $_SESSION['userid'] = $row['userid'];
      $_SESSION['username'] = $row['username'];
      echo "<script>location.replace('index.html');</script>";
      exit;
   }
   
   //결과가 존재하지 않으면 로그인 실패
   if($row == null){
      echo "<script>alert('ID 혹은 비밀번호를 확인해 주세요!')</script>";
      echo "<script>location.replace('login.html');</script>";
      exit;
   }
   ?>
