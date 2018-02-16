<?php 
	include_once("connectsql.php");
	$staff_id = $_POST['staff_id'];
	$addOne  = $_POST['addOne'];
	$addTwo  = $_POST['addTwo'];
	$addTre  = $_POST['addTre'];
	$state  = $_POST['state'];
	$city  = $_POST['city'];
	$country  = $_POST['country'];
	$postCode  = $_POST['postCode'];
	 
	 

	$sql = "INSERT INTO current_address VALUES('$staff_id','$addOne','$addTwo','$addTre','$state','$city','$country','$postCode')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='current_address.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='current_address.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>