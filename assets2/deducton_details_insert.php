<?php 
	include_once("connectsql.php");
	$deducDetails_id = $_POST['deducDetails_id'];
	$deduction_id = $_POST['deduction_id'];
	$attenDetails_id = $_POST['attenDetails_id'];
	$leave_id = $_POST['leave_id'];
	$sss = $_POST['sss'];
	$pagibig = $_POST['pagibig'];
	$philhealth = $_POST['philhealth'];
	$bir = $_POST['bir'];
	 
	 

	$sql = "INSERT INTO deduction_details VALUES('$deducDetails_id','$deduction_id','$attenDetails_id','$leave_id','$sss','$pagibig','$philhealth','$bir')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='deduction_details.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='deduction_details.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>