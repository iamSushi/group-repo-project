<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM schedule_details where schedDetails_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='view.php'><<< Go Back</a>";
	}else{


		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='view.php'><<< Go Back</a>";
	}

?>