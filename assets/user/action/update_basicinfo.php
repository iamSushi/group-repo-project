<?php
	include_once("session.php");
	if(empty($_SESSION['email'])){
		header('location: ../index.php');
	}
	
	if (isset($_POST['about_update'])){
		$fname = mysqli_real_escape_string($connect,$_POST['fname']);
		$mname = mysqli_real_escape_string($connect,$_POST['mname']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$dob = mysqli_real_escape_string($connect,$_POST['dob']);
		$gender = mysqli_real_escape_string($connect,$_POST['gender']);
		$email = mysqli_real_escape_string($connect,$_POST['email']);
		$contnum = mysqli_real_escape_string($connect,$_POST['contnum']);
		$status = mysqli_real_escape_string($connect,$_POST['status']);

		$id = $_GET['id'];

		$sql = "UPDATE staff SET fname = '$fname', mname ='$mname', lname ='$sname', birthdate = '$dob', gender = '$gender', email = '$email', cellnum = '$contnum', status = '$status' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);
		// echo "update success <a href='../basicinfo.php?thisuser='$id'>Go back!</a>";
		// mysqli_error($connect);
		// header("location: basicinfo.php?id=".$id."");
		// header("location: basicinfo.php");
	}

	if (isset($_POST['add_update'])){
		$addOne = mysqli_real_escape_string($connect,$_POST['addOne']);
		$addTwo = mysqli_real_escape_string($connect,$_POST['addTwo']);
		$addTre = mysqli_real_escape_string($connect,$_POST['addTre']);
		$state = mysqli_real_escape_string($connect,$_POST['state']);
		$city = mysqli_real_escape_string($connect,$_POST['city']);
		$country = mysqli_real_escape_string($connect,$_POST['country']);
		$postCode = mysqli_real_escape_string($connect,$_POST['postCode']);

		$id = $_GET['id'];

		$sql = "UPDATE current_address SET addOne = '$addOne', addTwo = '$addTwo', addTre = '$addTre', state = '$state', city = '$city', country = '$country', postCode = '$postCode' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);
		// $_GET['staff_id'] = $id;
	}
	echo "Successfuly Updated <a href='../basicinfo.php?id=".$id."'>Go back!</a>";
?>