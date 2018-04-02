<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$salaryWage = $_POST['salaryWage'];
	$sss = $_POST['sss'];
	$allowance = $_POST['allowance'];
	$pagibig = $_POST['pagibig'];
	$deptHead = $_POST['deptHead'];
	$bir = $_POST['bir'];
	$phil = $_POST['phil'];
	 
	$sql = "UPDATE job_details SET salaryWage = '$salaryWage', sss = '$sss', allowance = '$allowance', deptHead ='$deptHead', pagibig = '$pagibig',bir = '$bir',philhealth ='$phil' WHERE staff_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../view_schedule_details.php'><<< Go Back</a>";
		header("Location:../view_job_details.php");
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../view_schedule_details.php'><<< Go Back</a>";}
		 

?>