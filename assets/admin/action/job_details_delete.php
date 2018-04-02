<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM job_details where staff_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='../view_job_details.php'><<< Go Back</a>";
		header("Location:../view_job_details.php");
	}else{


		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='../view_job_details.php'><<< Go Back</a>";
		header("Location:../view_job_details.php");
	}

?>n