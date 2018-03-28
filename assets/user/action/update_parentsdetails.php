<?php
	include_once("session.php");
	if(empty($_SESSION['email'])){
		header('location: ../index.php');
	}

	if (isset($_POST['father_update'])){
		$fname = mysqli_real_escape_string($connect,$_POST['fname']);
		$mname = mysqli_real_escape_string($connect,$_POST['mname']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$dob = mysqli_real_escape_string($connect,$_POST['dob']);
		$contnum = mysqli_real_escape_string($connect,$_POST['contnum']);
		$occupation = mysqli_real_escape_string($connect,$_POST['occupation']);

		$id = $_GET['id'];

		$sql = "UPDATE family_details SET fathers_fname = '$fname', fathers_mname = '$mname', fathers_lname = '$sname', fathers_birthdate = '$dob', fathers_contnum = '$contnum', fathers_occupation = '$occupation' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);
	}

	if (isset($_POST['mother_update'])){
		$fname = mysqli_real_escape_string($connect,$_POST['fname']);
		$mname = mysqli_real_escape_string($connect,$_POST['mname']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$dob = mysqli_real_escape_string($connect,$_POST['dob']);
		$contnum = mysqli_real_escape_string($connect,$_POST['contnum']);
		$occupation = mysqli_real_escape_string($connect,$_POST['occupation']);

		$id = $_GET['id'];

		$sql = "UPDATE family_details SET mothers_fname = '$fname', mothers_mname = '$mname', mothers_lname = '$sname', mothers_birthdate = '$dob', mothers_contnum = '$contnum', mothers_occupation = '$occupation' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);
	}
	echo "Successfuly Updated <a href='../parentsdetails.php?id=".$id."'>Go back!</a>";
?>