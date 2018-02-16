<?php 
	include_once("connectsql.php");
	$staff_id  = $_POST['staff_id'];
	$typeOfAbsence  = $_POST['typeOfAbsence'];
	$deptHead = $_POST['deptHead'];
	$dateStart  = $_POST['dateStart'];
	$dateEnd  = $_POST['dateEnd'];
	$moreInfo  = $_POST['moreInfo'];
	$extendedLeave  = $_POST['extendedLeave'];

		 
	 

	$sql = "INSERT INTO  leave_details VALUES('','$staff_id','$typeOfAbsence','$deptHead','$dateStart','$dateEnd','$moreInfo','$extendedLeave')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='leave_details.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='leave_details.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>