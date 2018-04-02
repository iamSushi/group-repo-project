<?php 
	include_once("connection.php");
	$staff_id = $_POST['staff_id'];
	$salaryWage = $_POST['salaryWage'];
	$allowance = $_POST['allowance'];
	$dept_head = $_POST['dept_head'];
	$sss = $_POST['sss'];
	$pagibig = $_POST['pagibig'];
	$phil = $_POST['phil'];
	$bir = $_POST['bir'];
	 
	$sql = "INSERT INTO job_details VALUES('$staff_id','$salaryWage','$allowance','$dept_head','$sss','$pagibig','$phil','$bir')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../view_job_details.php'><<< Go Back</a>";
		header("Location:../view_job_details.php");
	}else{
		echo "Failed to Add! <a href='../view_details_view.php'><<< Go Back</a>";
		echo "Failed to UpemploymentStatus!".mysqli_error($connect);
		 header("Location:../view_job_details.php");

	}
?>