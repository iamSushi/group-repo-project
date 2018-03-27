<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$staff_id = $_POST['staff_id'];
 
	
	$sql = "UPDATE schedule SET staff_id = '$staff_id' WHERE sched_id   = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../patient_view.php'><<< Go Back</a>";
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../patient_view.php'><<< Go Back</a>";
	}

?>