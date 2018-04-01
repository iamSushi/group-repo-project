<?php
	include_once("../../user/action/session.php");

	$sid = $_GET['sid'];

	$absences = mysqli_real_escape_string($connect,$_POST['absences']);
	$late = mysqli_real_escape_string($connect,$_POST['late']);
	$sss = mysqli_real_escape_string($connect,$_POST['sss']);
	$bir = mysqli_real_escape_string($connect,$_POST['bir']);
	$pagibig = mysqli_real_escape_string($connect,$_POST['pagibig']);
	$philhealth = mysqli_real_escape_string($connect,$_POST['philhealth']);

	$sql = "UPDATE job_details SET absences = '$absences', late = '$late', sss = '$sss', bir = '$bir', pagibig = '$pagibig', philhealth = '$philhealth' WHERE staff_id = '$sid'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../deduction.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go Back!</a>";
	}else{
		echo "Failed to Delete!".mysqli_error($connect);
	}
	
	// $result = mysqli_query($connect,$sql);
	// if(mysqli_num_rows($result) > 0){
	// 	$sql = "UPDATE job_details SET salaryWage = '$wage', allowance = '$allowance', depthead = '$depthead' WHERE staff_id = '$sid'";
	// 	mysqli_query($connect, $sql);
	// 	echo "Successfuly Updated! <a href='../staff_dept.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";
	// }else{
	// 	$sqltwo = "INSERT INTO job_details VALUES('$sid','$wage','$allowance','$depthead','','','','','','')";
	// 	if(mysqli_query($connect, $sqltwo)){
	// 		echo "Successfuly Added! <a href='../staff_dept.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";
	// 	}else{
	// 		echo "Failed to Add!".mysqli_error($connect);
	// 	}
	// }
?>