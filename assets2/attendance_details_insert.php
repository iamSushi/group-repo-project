<?php 
	include_once("connectsql.php");
	$attend_id = $_POST['attend_id'];
	$schedDetails_id = $_POST['schedDetails_id'];
	$tardiness = $_POST['tardiness'];
	$overtime = $_POST['overtime'];
	$absences = $_POST['absences'];
	$holiday = $_POST['holiday'];
	$holidayName = $_POST['holidayName'];
	$dailyTotalHours = $_POST['dailyTotalHours'];
	 
	 

	$sql = "INSERT INTO attendance_details VALUES('','$attend_id','$schedDetails_id','$tardiness','$overtime','$absences','$holiday','$holidayName','$dailyTotalHours')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='attendance_details.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='attendance_details.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>