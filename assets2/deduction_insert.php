<?php 
	include_once("connectsql.php");
	$staff_id = $_POST['staff_id'];
	 
	 

	$sql = "INSERT INTO deduction VALUES('','$staff_id')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='deduction.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='deduction.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>