<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM deduction_details where deductDetails_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='viewdeds.php'><<< Go Back</a>";
	}else{


		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='viewdeds.php'><<< Go Back</a>";
	}

?>