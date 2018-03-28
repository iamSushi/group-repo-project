<?php
	include_once("session.php");
	if(empty($_SESSION['email'])){
		header('location: ../index.php');
	}

	if (isset($_POST['college_update'])){
		$course = mysqli_real_escape_string($connect,$_POST['course']);
		$sadd = mysqli_real_escape_string($connect,$_POST['sadd']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$state = mysqli_real_escape_string($connect,$_POST['state']);
		$country = mysqli_real_escape_string($connect,$_POST['country']);
		$postCode = mysqli_real_escape_string($connect,$_POST['postCode']);
		$date = mysqli_real_escape_string($connect,$_POST['date']);
		$average = mysqli_real_escape_string($connect,$_POST['average']);
		$standing = mysqli_real_escape_string($connect,$_POST['standing']);
		$city = mysqli_real_escape_string($connect,$_POST['city']);
		
		$id = $_GET['id'];

		$sql = "UPDATE college_background SET course = '$course', schoolName = '$sname', schoolAdd = '$sadd', state = '$state', country = '$country', city = '$city', postCode = '$postCode', yearEnd = '$date', status = '$standing', percentage = '$average' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);
	}

	if (isset($_POST['high_update'])){
		$sadd = mysqli_real_escape_string($connect,$_POST['sadd']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$state = mysqli_real_escape_string($connect,$_POST['state']);
		$country = mysqli_real_escape_string($connect,$_POST['country']);
		$postCode = mysqli_real_escape_string($connect,$_POST['postCode']);
		$date = mysqli_real_escape_string($connect,$_POST['date']);
		$average = mysqli_real_escape_string($connect,$_POST['average']);
		// $standing = mysqli_real_escape_string($connect,$_POST['standing']);
		$city = mysqli_real_escape_string($connect,$_POST['city']);

		$id = $_GET['id'];

		$sql = "UPDATE highschool_background SET schoolName = '$sname', schoolAdd = '$sadd', state = '$state', country = '$country', city = '$city', postCode = '$postCode', year_end = '$date',  average = '$average' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);	
	}
	echo "Successfuly Updated <a href='../studiesbg.php?id=".$id."'>Go back!</a>";
?>