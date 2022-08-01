<?php
	
	include "dbcon.php";

	$q = $_REQUEST['q'];
	


	
	$sql = "SELECT * FROM login WHERE mail='$q' ";
	$result = mysqli_query($dbcon, $sql);


	$row = mysqli_fetch_array($result);
	

	$row['mail'] = isset($row['mail']) ? $row['mail'] : 'no';

	if($row['mail'] == $q){
		echo "<strong style='color:red;'>중복된 아이디, 사용 불가능</strong>";
	}
	else{
		echo "<strong style='color:blue'>사용 가능한 아이디</strong>";
	}

?>