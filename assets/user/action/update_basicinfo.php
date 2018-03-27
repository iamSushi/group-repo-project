<?php
	include_once("mysqlconn.php");
	// $id = $_GET['id'];
	$errors = array();
	if (isset($_POST['about_update'])){
		$fname = mysqli_real_escape_string($connect,$_POST['fname']);
		$mname = mysqli_real_escape_string($connect,$_POST['mname']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$dob = mysqli_real_escape_string($connect,$_POST['dob']);
		$gender = mysqli_real_escape_string($connect,$_POST['gender']);
		$email = mysqli_real_escape_string($connect,$_POST['email']);
		$contnum = mysqli_real_escape_string($connect,$_POST['contnum']);
		$status = mysqli_real_escape_string($connect,$_POST['status']);
		if(empty($fname)){
			array_push($errors, "Firstname is Required!");
		}
		if(empty($mname)){
			array_push($errors, "Middlename is Required!");
		}
		if(empty($sname)){
			array_push($errors, "Surname is Required!");
		}
		if(empty($dob)){
			array_push($errors, "Birthdate is Required!");
		}
		if(empty($gender)){
			array_push($errors, "Gender is Required!");
		}
		if(empty($email)){
			array_push($errors, "Email is Required!");
		}
		if(empty($contnum)){
			array_push($errors, "Contact Number is Required!");
		}
		if(empty($status)){
			array_push($errors, "Status is Required!");
		}
		if(count($errors) == 0){
			 // $password = md5($pass);
			// $sql = "INSERT INTO staff VALUES('','$fname','','$sname','','','','$email','','','$type','','$pass')";
			$sql = "UPDATE about_me SET fname = '$fname' WHERE staff_id = '$id'";
			mysqli_query($connect,$sql);
			$_SESSION['email'] = $email;
			// $_SESSION['success'] = "You are now logged in";
			header('location: about_me.php');
		}
	}



?>