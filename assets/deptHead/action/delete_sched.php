<?php
	include_once("../../user/action/session.php");

	$sid = $_GET['sid'];
	$space = "";
	$sql = "DELETE FROM schedule_details WHERE sched_id = '$sid'";

	if(mysqli_query($connect, $sql)){
		// echo "Successfully Deleted! <a href='../sched_view.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go Back!</a>";
		header('location: ../sched_view.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');
	}else{
		echo "Failed to Delete!".mysqli_error($connect);
	}

?>