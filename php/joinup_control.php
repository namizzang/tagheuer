<?php

    include "dbcon.php";

    // $title=$_POST['title'];
    $fName=$_POST['first_name'];
    $sName=$_POST['surname'];
    $email=$_POST['email'];
    $pw=$_POST['password'];

    # post3 (우편번호)
	$post3 = $_POST['post3'];

	# add1	(기본주소)
	$add1 = $_POST['add1'];

	# add2 (상세주소)
	$add2 = $_POST['add2'];


	// $address = $post3." ".$add1." ".$add2;

    if(!empty($fName) && !empty($sName) && !empty($email) && !empty($pw)){
		
		// $sql = "INSERT INTO login(fName, sName, mail, pw) 
		$sql = "INSERT INTO user(fName, sName, mail, pw) 
		VALUES
		('$fName', '$sName','$email', '$pw')";
		
		$result = mysqli_query($dbcon, $sql);
	}

	/*
		[정보가 넘어갔다면]
			
			$result 안에 정보가 담기지만 true도 같이 생성됨!
			* 정보가 잘 넘어갔다면 이라는 비교수식으로

			$result == true	, 정보가 넘어갔다는 표현!

		매우중요)
			$result만 작성해도 알아서 true 인식하기 때문에 
			비교수식을 만들지 않아도 문제없음!
	*/

	if($result){
		echo "<script>alert('회원가입에 성공했습니다.')</script>";
		echo "<script>location.replace('login.php');</script>";
	}
	else{
		echo "<script>alert('회원가입에 실패했습니다.')</script>";
		echo "<script>location.replace('joinup.php');</script>";
	}
	

?>