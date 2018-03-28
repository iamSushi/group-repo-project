<?php 
	include_once("connection.php");
	$schedDetails_id = $_POST['schedDetails_id'];
	$sched_id = $_POST['sched_id'];
	$day = $_POST['day'];
	$morningTimein = $_POST['morningTimein'];
	$morningTimeout = $_POST['morningTimeout'];
	$afternoonTimein = $_POST['afternoonTimein'];
	$afternoonTimeout = $_POST['afternoonTimeout'];
	$totalHours = $_POST['totalHours'];

	$sql = "INSERT INTO schedule_details VALUES('schedDetails_id','$sched_id','$day','$morningTimein','$morningTimeout','$afternoonTimein','$afternoonTimeout','$totalHours')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='views.php'><<< Go Back</a>";
	}
	else
	{
		echo mysqli_error($connect);
		echo "Failed to Add! <a href='views.php'><<< Go Back</a>";
	}
?>