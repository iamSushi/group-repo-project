<?php
	include_once("../../user/action/session.php");

	$sid = $_GET['sid'];
	$id = $_GET['id'];
	$dept = $_GET['dept'];

	$date = mysqli_real_escape_string($connect,$_POST['date']);
	$absences = mysqli_real_escape_string($connect,$_POST['absences']);
	$late = mysqli_real_escape_string($connect,$_POST['late']);
	// $depthead = mysqli_real_escape_string($connect,$_POST['depthead']);

	$sql = "INSERT INTO awol VALUES('','$sid','$date','$absences','$late')";
	mysqli_query($connect,$sql);

	header('location: ../monthlyreports.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');

	// if(mysqli_num_rows($result) > 0){
	// 	$sql = "UPDATE job_details SET salaryWage = '$wage', allowance = '$allowance' WHERE staff_id = '$sid'";
	// 	mysqli_query($connect, $sql);
	// 	echo "Successfuly Updated! <a href='../staff_dept.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";
	// }else{
	// 	$sqltwo = "INSERT INTO job_details VALUES('$sid','$wage','$allowance','$depthead','','','','')";
	// 	if(mysqli_query($connect, $sqltwo)){
	// 		// echo "Successfuly Added! <a href='../staff_dept.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";
	// 		header('location: ../staff_dept.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');
	// 	}else{
	// 		echo "Failed to Add!".mysqli_error($connect);
	// 	}
	// }
?>