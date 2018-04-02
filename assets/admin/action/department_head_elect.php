<?php 
	
	include_once("connection.php");
	$id = $_GET['id'];
	$dept = $_POST['dept'];
	 
	 
	 
	$sql = "UPDATE staff SET type ='Head', department ='$dept' WHERE staff_id = '$id'";

	if(mysqli_query($connect, $sql)){ 
		echo "Successfully Updated! <a href='../view_staff_.php'><<< Go Back</a>";
		header("Location:../view_department_head.php");
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../view_staff.php'><<< Go Back</a>";
		header("Location:../view_department_head.php");
	}

?>