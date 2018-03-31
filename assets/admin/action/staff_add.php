<?php 
	include_once("connection.php");
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$bday = $_POST['bday'];
	$cellphone = $_POST['cellphone'];
	$telnum = $_POST['telnum'];
	$email = $_POST['email'];
	$status = $_POST['status'];
	$gender = $_POST['gender'];
	$type = $_POST['type'];
	$department = $_POST['department'];
	$password = $_POST['password'];
	
	
	$sql = "INSERT INTO staff VALUES(null,'$fname','$mname','$lname','$bday','$cellphone','$telnum','$email','$status','$gender','$type','$department','$password')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../view_staff.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='../view_staff.php'><<< Go Back</a>";
		echo "Failed to Uptelnum!".mysqli_error($connect);

	}
?>