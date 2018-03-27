<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$staff_id = $_POST['staff_id'];
	$salaryWage = $_POST['scheddDetails_id'];
	$department = $_POST['department'];
	$allowance = $_POST['allowance'];
	$employmentStatus = $_POST['employmentStatus'];
	$deptHead = $_POST['deptHead'];
	
	$sql = "UPDATE job_details SET staff_id = '$staff_id', scheddDetails_id = '$scheddDetails_id', department = '$department', employmentStatus ='$employmentStatus', allowance = '$allowance', deptHead = '$deptHead' WHERE staff_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../patient_view.php'><<< Go Back</a>";
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../patient_view.php'><<< Go Back</a>";
	}

?>