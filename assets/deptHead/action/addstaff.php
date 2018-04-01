<?php
	include_once("../../user/action/session.php");
	// if(empty($_SESSION['email'])){
	// 	header('location: ../index.php');
	// }

	if (isset($_POST['submit'])){
		$fname = mysqli_real_escape_string($connect,$_POST['fname']);
		$mname = mysqli_real_escape_string($connect,$_POST['mname']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$dob = mysqli_real_escape_string($connect,$_POST['dob']);
		$gender = mysqli_real_escape_string($connect,$_POST['gender']);
		$status = mysqli_real_escape_string($connect,$_POST['status']);
		$email = mysqli_real_escape_string($connect,$_POST['email']);
		$type = "Staff";
		$dept = $_GET['dept'];
		$pass = "Password";
		$sql = "INSERT INTO staff VALUES('','$fname','$mname','$sname','$dob','','','$email','$status','$gender','$type','$dept','$pass')";
		mysqli_query($connect,$sql);
		header('location: ../staff_view.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');
	}
	// echo "Successfuly Updated <a href='../staff_view.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";

?>