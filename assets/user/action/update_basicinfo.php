<?php
	include_once("mysqlconn.php");

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

		$sql = "UPDATE staff SET fname = '$fname', mname ='$mname',lname ='lname' WHERE staff_id = '$id'";
		mysqli_query($connect,$sql);
		mysqli_error($connect);
	}
		


	// $fname = $_POST['fname'];
	// $mname = $_POST['mname'];
	// $sname = $_POST['sname'];
	// $dob = $_POST['dob'];
	// $gender = $_POST['gender'];
	// $email = $_POST['email'];
	// $contnum = $_POST['contnum'];
	// $status = $_POST['status'];
	
	// $_SESSION['email'] = $email;
	// $_SESSION['success'] = "You are now logged in";
	// header("location: basicinfo.php?id=".$row['staff_id']."");

?>