<?php
	include_once("../../user/action/session.php");

	$dept = $_GET['dept'];
	$sid = $_GET['sid'];
	$sql = "UPDATE staff SET department = '$dept' WHERE staff_id = '$sid'";
	mysqli_query($connect,$sql);

	echo "Successfuly Updated <a href='../staff_dept.php?id=".$_GET['id']."&dept=".$_GET['dept']."'>Go back!</a>";

?>