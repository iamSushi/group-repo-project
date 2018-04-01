<?php
	include_once("../../user/action/session.php");

	$dept = $_GET['dept'];
	$sid = $_GET['sid'];
	$sql = "UPDATE staff SET department = '$dept' WHERE staff_id = '$sid'";
	
	if(mysqli_query($connect, $sql)){
		// echo "Successfuly Updated <a href='../staff_view.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";
		header('location: ../staff_view.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');
	}else{
		echo "Failed to Delete!".mysqli_error($connect);
	}
	

?>