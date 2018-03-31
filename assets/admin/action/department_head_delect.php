<?php 
	
	include_once("connection.php");
	$id = $_GET['id'];
	 
	 
	 
	$sql = "UPDATE staff SET type ='staff'  WHERE staff_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../view_staff.php'><<< Go Back</a>";
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../view_staff.php'><<< Go Back</a>";
	}

?>