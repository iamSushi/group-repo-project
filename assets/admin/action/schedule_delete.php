<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM schedule where sched_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='../view_attendance.php'><<< Go Back</a>";
	}else{


		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='../view_attendance.php'><<< Go Back</a>";
	}

?>