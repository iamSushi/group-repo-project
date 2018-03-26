<?php 
	include_once("connection.php");
	$staff_id = $_POST['staff_id'];
	$salaryWage = $_POST['salaryWage'];
	$department = $_POST['department'];
	$allowance = $_POST['allowance'];
	$employmentStatus = $_POST['employmentStatus'];
	$dept_head = $_POST['dept_head'];
	 
	$sql = "INSERT INTO job_details VALUES('$staff_id','$salaryWage','$department','$allowance','$employmentStatus','$dept_head','$dept_head')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../job_details_view.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='../job_details_view.php'><<< Go Back</a>";
		echo "Failed to UpemploymentStatus!".mysqli_error($connect);

	}
?>