<?php 
	include_once("connection.php");
	$attend_id = $_POST['attend_id'];
	$schedDetails_id = $_POST['schedDetails_id'];
	$tardiness = $_POST['tardiness'];
	$overtime = $_POST['overtime'];
	$absences = $_POST['absences'];
	$holiday = $_POST['holiday'];
	$holiday = $_POST['holidayName'];
	$dailyTotalHours = $_POST['dailyTotalHours'];
	$sql = "INSERT INTO attendance_details VALUES(null,'$attend_id','$schedDetails_id','$tardiness','$overtime','$absences','$holiday','$holiday','$dailyTotalHours')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='../attendance_details_view.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='../attendane_details_view.php'><<< Go Back</a>";
		echo "Failed to Upabsences!".mysqli_error($connect);

	}
?>