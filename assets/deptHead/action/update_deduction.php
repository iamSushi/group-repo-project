<?php
	include_once("../../user/action/session.php");

	// $sid = $_GET['sid'];

	// $absences = mysqli_real_escape_string($connect,$_POST['absences']);
	// $late = mysqli_real_escape_string($connect,$_POST['late']);
	// $sss = mysqli_real_escape_string($connect,$_POST['sss']);
	// $bir = mysqli_real_escape_string($connect,$_POST['bir']);
	// $pagibig = mysqli_real_escape_string($connect,$_POST['pagibig']);
	// $philhealth = mysqli_real_escape_string($connect,$_POST['philhealth']);

	// $sql = "UPDATE job_details SET absences = '$absences', late = '$late', sss = '$sss', bir = '$bir', pagibig = '$pagibig', philhealth = '$philhealth' WHERE staff_id = '$sid'";

	// if(mysqli_query($connect, $sql)){
	// 	echo "Successfully Added! <a href='../deduction.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go Back!</a>";
	// }else{
	// 	echo "Failed to Delete!".mysqli_error($connect);
	// }
	
	if(isset($_POST['update'])){
		$sid = $_GET['sid'];

		$sss = mysqli_real_escape_string($connect,$_POST['sss']);
		$bir = mysqli_real_escape_string($connect,$_POST['bir']);
		$pagibig = mysqli_real_escape_string($connect,$_POST['pagibig']);
		$philhealth = mysqli_real_escape_string($connect,$_POST['philhealth']);


		$sql = "UPDATE job_details SET  sss = '$sss', bir = '$bir', pagibig = '$pagibig', philhealth = '$philhealth' WHERE staff_id = '$sid'";
		mysqli_query($connect, $sql);
		// echo "Successfully Added! <a href='../deduction.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go Back!</a>";
		header('location: ../deduction.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');

	}
?>