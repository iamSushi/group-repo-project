<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM attendance_details where attenDetails_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='../view_attendance_details.php'><<< Go Back</a>";
	}else{


		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='../equipment_view.php'><<< Go Back</a>";
	}

?>