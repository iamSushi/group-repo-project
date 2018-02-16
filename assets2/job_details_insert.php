<?php 
	include_once("connectsql.php");
	$staff_id  = $_POST['staff_id'];
	$salaryWage   = $_POST['salaryWage'];
	$department   = $_POST['department'];
	$allowance   = $_POST['allowance'];
	$employmentStatus   = $_POST['employmentStatus'];
	$deptHead = $_POST['deptHead'];

		 
	 

	$sql = "INSERT INTO job_details VALUES('$staff_id','$salaryWage','$department','$allowance','$employmentStatus','$deptHead')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='job_details.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='job_detailsphp'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>