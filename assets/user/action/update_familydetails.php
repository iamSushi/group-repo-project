<?php
	include_once("session.php");
	if(empty($_SESSION['email'])){
		header('location: ../index.php');
	}

	if (isset($_POST['spouse_update'])){
		$fname = mysqli_real_escape_string($connect,$_POST['fname']);
		$mname = mysqli_real_escape_string($connect,$_POST['mname']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$dob = mysqli_real_escape_string($connect,$_POST['dob']);
		$contnum = mysqli_real_escape_string($connect,$_POST['contnum']);

		$id = $_GET['id'];

		$sql = "UPDATE family_details SET spouse_fname = '$fname', spouse_mname = '$mname', spouse_lname = '$sname', spouse_birthdate = '$dob', spouse_contnum = '$contnum' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);
	}

	if (isset($_POST['child_update'])){
		$count = mysqli_real_escape_string($connect,$_POST['count']);

		$id = $_GET['id'];

		$sql = "UPDATE family_details SET numOfChildren = '$count' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);	
	}

?>