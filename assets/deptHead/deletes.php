<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM attendance_details where attend_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='attend.php'><<< Go Back</a>";
	}else{


		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='attend.php'><<< Go Back</a>";
	}

?>