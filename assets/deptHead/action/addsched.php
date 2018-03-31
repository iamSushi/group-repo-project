<?php
	error_reporting(E_ERROR);

	include_once("../../user/action/session.php");

	// $time1 = mysqli_real_escape_string($connect,strtotime($_POST['morningTimein']));
	$sid = $_GET['sid'];
	$id = $_GET['id'];
	$dept = $_GET['dept'];
	$day = mysqli_real_escape_string($connect,$_POST['day']);
	$time1 = mysqli_real_escape_string($connect,$_POST['morningTimein']);
	$time2 = mysqli_real_escape_string($connect,$_POST['morningTimeout']);
	$time3 = mysqli_real_escape_string($connect,$_POST['afternoonTimein']);
	$time4 = mysqli_real_escape_string($connect,$_POST['afternoonTimeout']);

	$x = $time2 - $time1;
	$y = $time4 - $time3;
	$z = $x + $y;

	$sql = "INSERT INTO schedule_details VALUES('','$sid','$id','$dept','$day','$time1','$time2','$time3','$time4','$z')";
	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../sched_view.php?id=".$id."&dept=".$dept."'>Go Back!</a>";
	}else{
		echo "Failed to Delete!".mysqli_error($connect);
		// echo "<br/> <a href='sign_up.php'>
		// <button> Go Back </a></button>";

	}



?>