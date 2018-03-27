<?php 
	include_once("connection.php");
	$attend_id = $_POST['attend_id'];
	$staff_id = $_POST['staff_id'];

	$sql = "INSERT INTO attendance VALUES('','$staff_id')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='attend.php'><<< Go Back</a>";
	}
	else
	{
		echo "Failed to Add! <a href='attend.php'><<< Go Back</a>";
	}
?>