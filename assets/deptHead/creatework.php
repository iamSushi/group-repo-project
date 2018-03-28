<?php 
	include_once("connection.php");
	$staff_id = $_POST['staff_id'];
	$salaryWage = $_POST['salaryWage'];
	$department = $_POST['department'];
	$allowance = $_POST['allowance'];
	$employmentStatus = $_POST['employmentStatus'];
	$deptHead = $_POST['deptHead'];

	$sql = "INSERT INTO job_details VALUES('','$salaryWage','$department','$allowance','$employmentStatus','$deptHead')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='work.php'><<< Go Back</a>";
	}else{
		echo mysqli_error($connect);
		echo "Failed to Add! <a href='work.php'><<< Go Back</a>";
	}
?>