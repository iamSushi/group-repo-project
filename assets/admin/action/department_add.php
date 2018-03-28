<?php 
	include_once("connection.php");
	$depart_name = $_POST['depart_name'];
	$depart_head = $_POST['depart_head'];
	 
	 
	
	$sql = "INSERT INTO department VALUES(null,'$depart_id','$depart_name')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../view_department.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='../view_department.php'><<< Go Back</a>";
		echo "Failed to Upabsences!".mysqli_error($connect);

	}
?>