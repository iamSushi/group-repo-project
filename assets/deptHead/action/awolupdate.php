<?php
	include_once("../../user/action/session.php");

	$sid = $_GET['sid'];
	$id = $_GET['id'];
	$dept = $_GET['dept'];

	$date = mysqli_real_escape_string($connect,$_POST['date']);
	$absences = mysqli_real_escape_string($connect,$_POST['absences']);
	$late = mysqli_real_escape_string($connect,$_POST['late']);
	// $depthead = mysqli_real_escape_string($connect,$_POST['depthead']);

	$sql = "INSERT INTO awol VALUES('$sid','$date','$absences','$late')";
	mysqli_query($connect,$sql);

	header('location: ../staff_dept.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');

?>