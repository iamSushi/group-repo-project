<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$depart_name = $_POST['depart_name'];
	$depart_head = $_POST['depart_head'];
	 
	 
	$sql = "UPDATE department SET depart_name = '$depart_name', depart_head = '$depart_head' WHERE depart_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../view_department.php'><<< Go Back</a>";
		header("Location:../view_department.php");
	}else{

		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../view_department.php'><<< Go Back</a>";
	}

?>