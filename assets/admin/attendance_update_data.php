<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$staff_id = $_POST['staff_id'];
	 
	 
	$sql = "UPDATE attendance SET staff_id = '$staff_id' WHERE attend_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../view_attendance.php'><<< Go Back</a>";
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../view_attendance.php'><<< Go Back</a>";
	}

?>