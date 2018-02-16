<?php 
	include_once("connectsql.php");
	$staff_id = $_POST['staff_id'];
	$course = $_POST['course'];
	$schoolName = $_POST['schoolName'];
	$schoolAdd = $_POST['schoolAdd'];
	$yearEnd = $_POST['yearEnd'];
	$status = $_POST['status'];
	$percentage = $_POST['percentage'];
	 
	 

	$sql = "INSERT INTO college_background VALUES('$staff_id','$course','$schoolName','schoolAdd','$yearEnd','$status','$percentage')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='college_background.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='college_background.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>