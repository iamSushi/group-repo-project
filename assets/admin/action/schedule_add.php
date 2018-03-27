<?php 
	include_once("connection.php");
	/*$attend_id = $_POST['attend_id'];*/
	$staff_id = $_POST['staff_id'];
	 
	 
	$sql = "INSERT INTO schedule VALUES(null,'$staff_id')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../view_schedule.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='../view_schedule.php'><<< Go Back</a>";
		echo "Failed to Upabsences!".mysqli_error($connect);

	}
?>