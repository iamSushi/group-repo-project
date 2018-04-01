<?php
	include_once("../../user/action/session.php");

	$sid = $_GET['sid'];
	$id = $_GET['id'];
	$dept = $_GET['dept'];

	$wage = mysqli_real_escape_string($connect,$_POST['wage']);
	$department = mysqli_real_escape_string($connect,$_POST['department']);
	$allowance = mysqli_real_escape_string($connect,$_POST['allowance']);
	$status = mysqli_real_escape_string($connect,$_POST['status']);
	// $depthead = mysqli_real_escape_string($connect,$_POST['depthead']);

	$sql = "SELECT * FROM job_details WHERE staff_id = '$sid'";
	$result = mysqli_query($connect,$sql);
	if(mysqli_num_rows($result) > 0){
		$sql = "UPDATE job_details SET salaryWage = '$wage', allowance = '$allowance' WHERE staff_id = '$sid'";
		mysqli_query($connect, $sql);
		echo "Successfuly Updated! <a href='../staff_dept.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";
	}else{
		$sqltwo = "INSERT INTO job_details VALUES('$sid','$wage','$allowance','$depthead','','','','')";
		if(mysqli_query($connect, $sqltwo)){
			// echo "Successfuly Added! <a href='../staff_dept.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";
			header('location: ../staff_dept.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');
		}else{
			echo "Failed to Add!".mysqli_error($connect);
		}
	}
?>