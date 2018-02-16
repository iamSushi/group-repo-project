<?php 
	include_once("connectsql.php");
	$staff_id = $_POST['staff_id'];
	 
	 
	 

	$sql = "INSERT INTO salary_report VALUES('','$staff_id')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='salary_report.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='salary_report.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>