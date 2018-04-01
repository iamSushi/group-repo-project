<?php
	include_once("../../user/action/session.php");

	$aid = $_GET['aid'];

	$sql = "DELETE FROM awol WHERE awol_id = '$aid'";
	mysqli_query($connect,$sql);
	if(mysqli_query($connect,$sql)){
		header('location: ../monthlyreports.php?id='.$_GET['id'].'&dept='.$_GET['dept'].'');
	}else{
		echo "bobo".mysqli_error($connect);
	}
	

?>