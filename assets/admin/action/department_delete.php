<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM department where dept_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='../view_department.php'><<< Go Back</a>";
		header("Location:../view_department.php");
	}else{


		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='../view_department.php'><<< Go Back</a>";
		header("Location:../view_department.php");
	}

?>