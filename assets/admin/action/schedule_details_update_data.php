<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$sched_id = $_POST['sched_id'];
	$day = $_POST['day'];
	$morningTimein = $_POST['morningTimein'];
	$morningTimeout = $_POST['morningTimeout'];
	$afternoonTimein = $_POST['afternoonTimein'];
	$afternoonTimeout = $_POST['afternoonTimeout'];
	$totalHours = $_POST['totalHours'];
	 
	$sql = "UPDATE schedule_details SET sched_id = '$sched_id', day = '$day', morningTimein = '$morningTimein', afternoonTimein ='$afternoonTimein', morningTimeout = '$morningTimeout',afternoonTimeout = '$afternoonTimeout',totalHours ='$totalHours' WHERE sched_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../view_schedule_details.php'><<< Go Back</a>";
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../view_schedule_details.php'><<< Go Back</a>";
	}

?>