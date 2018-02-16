<?php 
	include_once("connectsql.php");
	$staff_id = $_POST['staff_id'];
	$day = $_POST['day'];
	$morningTimeIn = $_POST['morningTimeIn']; 
	$morningTimeOut = $_POST['morningTimeOut'];
	$afternoonTimeIn = $_POST['afternoonTimeIn'];
	$afternoonTimeOut = $_POST['afternoonTimeOut'];
	$totalHours = $_POST['totalHours'];
	 

	$sql = "INSERT INTO schedule_details VALUES('','$staff_id','$day','$morningTimeIn','$morningTimeOut','$afternoonTimeIn','$afternoonTimeOut','$totalHours')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='schedule_details.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='schedule_details.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>