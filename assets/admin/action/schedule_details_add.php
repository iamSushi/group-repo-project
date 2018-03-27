<?php 
	include_once("connection.php");
	$sched_id = $_POST['sched_id'];
	$day = $_POST['day'];
	$morningTimeIn = $_POST['morningTimeIn'];
	$morningTimeOut = $_POST['morningTimeOut'];
	$afterTimeIn = $_POST['afterTimeIn'];
	$afterTimeOut = $_POST['afterTimeOut'];
	$totalHours = $_POST['totalHours'];
 
	
	
	$sql = "INSERT INTO schedule_details VALUES(null,'$sched_id','$day','$morningTimeIn','$morningTimeOut','$afterTimeIn','$afterTimeOut','$totalHours')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../view_schedule_details.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='../view_schedule_details.php'><<< Go Back</a>";
		echo "Failed to Uptelnum!".mysqli_error($connect);

	}
?>