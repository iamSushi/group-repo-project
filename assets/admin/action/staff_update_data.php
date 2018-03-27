<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$cellnum = $_POST['cellnum'];
	$telnum = $_POST['telnum'];
	$bday = $_POST['bday'];
	$email = $_POST['email'];
	$status = $_POST['status'];
	$type = $_POST['type'];
	$position = $_POST['position'];
	$password = $_POST['password'];
	 
	$sql = "UPDATE staff SET fname = '$fname', mname = '$mname', lname = '$lname', cellnum ='$cellnum', gender = '$gender',birthdate = '$bday',email ='$email', status ='$status', telnum ='$telnum' ,type ='$type' ,position ='$position', password = '$password' WHERE staff_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../view_staff.php'><<< Go Back</a>";
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../view_staff.php'><<< Go Back</a>";
	}

?>