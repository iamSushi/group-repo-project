<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM schedule_details where sched_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='views.php'><<< Go Back</a>";
	}else{


		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='views.php'><<< Go Back</a>";
	}

?>