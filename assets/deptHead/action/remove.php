<?php
	include_once("../../user/action/session.php");

	$sid = $_GET['sid'];
	$space = "";
	$sql = "DELETE FROM schedule_details WHERE schedDetails_id = $sid";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='../sched_view.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go Back!</a>";
	}else{
		echo "Failed to Delete!".mysqli_error($connect);
		// echo "<br/> <a href='sign_up.php'>
		// <button> Go Back </a></button>";

	}

?>