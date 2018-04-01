<?php
	error_reporting(E_ERROR);

	include_once("../../user/action/session.php");

	$id = $_GET['id'];
	$dept = $_GET['dept'];
	$sid = $_GET['sid'];
	$day = mysqli_real_escape_string($connect,$_POST['day']);
	$staff = mysqli_real_escape_string($connect,$_POST['staff']);
	$time1 = mysqli_real_escape_string($connect,$_POST['morningTimein']);
	$time2 = mysqli_real_escape_string($connect,$_POST['morningTimeout']);
	$time3 = mysqli_real_escape_string($connect,$_POST['afternoonTimein']);
	$time4 = mysqli_real_escape_string($connect,$_POST['afternoonTimeout']);

	$x = $time2 - $time1;
	$y = $time4 - $time3;
	$z = $x + $y;

	$sql = "INSERT INTO schedule_details VALUES('','$sid','$day','$time1','$time2','$time3','$time4','$z')";
	if(mysqli_query($connect, $sql)){
		// echo "Successfully Added! <a href='../sched_view.php?id=".$id."&dept=".$dept."'>Go Back!</a>";
		header('location: ../sched_view.php?id='.$id.'&dept='.$dept.'');
	}else{
		echo "Failed to Add!".mysqli_error($connect);
		// echo "<br/> <a href='sign_up.php'>
		// <button> Go Back </a></button>";

	}



?>