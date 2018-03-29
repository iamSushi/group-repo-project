<?php
	include_once("../../user/action/session.php");

	$sid = $_GET['sid'];
	$space = "";
	$sql = "UPDATE staff SET department = '$space' WHERE staff_id = $sid";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='../staff_dept.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go Back!</a>";
	}else{
		echo "Failed to Delete!".mysqli_error($connect);
		// echo "<br/> <a href='sign_up.php'>
		// <button> Go Back </a></button>";

	}

?>