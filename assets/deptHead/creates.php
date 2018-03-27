<?php 
	include_once("connection.php");
	$attendDetails_id = $_POST['attendDetails_id'];
	$attend_id = $_POST['attend_id'];
	$schedDetails_id = $_POST['schedDetails_id'];
	$tardiness = $_POST['tardiness'];
	$overtime = $_POST['overtime`'];
	$absences = $_POST['absences'];
	$holiday = $_POST['holiday'];
	$holidayName = $_POST['holidayName'];
	$dailyTotalHours = $_POST['dailyTotalHours'];

	$sql = "INSERT INTO schedule_details VALUES('','$sched_id','$day','$morningTimein','$morningTimeout','$afternoonTimein','$afternoonTimeout','$totalHours')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='view.php'><<< Go Back</a>";
	}
	else
	{
		echo "Failed to Add! <a href='view.php'><<< Go Back</a>";
	}
?>