<?php 
	include_once("connectsql.php");
	$staff_id  = $_POST['staff_id'];
	$schoolName  = $_POST['schoolName'];
	$schoolAdd  = $_POST['schoolAdd'];
	$yearEnd  = $_POST['yearEnd'];
	$status  = $_POST['status'];
	$percentage  = $_POST['percentage'];
		 
	 

	$sql = "INSERT INTO highschool_background VALUES('$staff_id','$schoolName','$schoolAdd','$yearEnd','$status','$percentage')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='highschool_background.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='highschool_background.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>