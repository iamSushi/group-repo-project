<?php 
	include_once("connectsql.php");
	$salary_id = $_POST['salary_id'];
	$deductDetails_id  = $_POST['deductDetails_id'];
	$salaryWage  = $_POST['salaryWage'];
	 
	 

	$sql = "INSERT INTO salary_details VALUES('$salary_id','$deductDetails_id','$salaryWage')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='salary_details.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='salary_details.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>