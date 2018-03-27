<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$attend_id = $_POST['attend_id'];
	$schedDetails_id = $_POST['schedDetails_id'];
	$tardiness = $_POST['tardiness'];
	$overtime = $_POST['overtime'];
	$absences = $_POST['absences'];
	$holiday = $_POST['holiday'];
	$holidayName = $_POST['holidayName'];
	$dailyTotalHours = $_POST['dailyTotalHours'];
	 
	$sql = "UPDATE attendance_details SET attend_id = '$attend_id', schedDetails_id = '$schedDetails_id', tardiness = '$tardiness', absences ='$absences', overtime = '$overtime', holiday = '$holiday', holidayName ='$holidayName', dailyTotalHours ='$dailyTotalHours' WHERE attenDetails_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../view_attendance_details.php'><<< Go Back</a>";
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../view_attendance_details.php'><<< Go Back</a>";
	}

?>