<?php
	include_once("../../user/action/session.php");

	$sid = $_GET['sid'];
	$id = $_GET['id'];
	$dept = $_GET['dept'];

	$wage = mysqli_real_escape_string($connect,$_POST['wage']);
	$department = mysqli_real_escape_string($connect,$_POST['department']);
	$allowance = mysqli_real_escape_string($connect,$_POST['allowance']);
	$status = mysqli_real_escape_string($connect,$_POST['status']);
	$depthead = mysqli_real_escape_string($connect,$_POST['depthead']);

	$sql = "UPDATE job_details SET salaryWage = '$wage', allowance = '$allowance', employmentStatus = '$status' ";
	if(mysqli_query($connect, $sql)){
		echo "Successfully Added!";
	}else{
		echo "Failed to Delete!".mysqli_error($connect);
	}



?>