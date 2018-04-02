<?php 
	include_once("connection.php");
	/*$attend_id = $_POST['attend_id'];*/
	$staff_id = $_POST['staff_id'];
	 
	 
	$sql = "INSERT INTO attendance VALUES(null,'$staff_id')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../view_attendance.php'><<< Go Back</a>";
		header("Location:../view_attendance.php");
	}else{
		echo "Failed to Add! <a href='../view_attendane.php'><<< Go Back</a>";
		echo "Failed to Upabsences!".mysqli_error($connect);

	}
?>