<?php 
	
	include_once("connection.php");
	$id = $_POST['id'];
	$attend_id = $_POST['attend_id'];
	$scheddDetails_id = $_POST['scheddDetails_id'];
	$tardiness = $_POST['tardiness'];
	$overtime = $_POST['overtime'];
	$absences = $_POST['absences'];
	$holiday = $_POST['holiday'];
	$holidayName = $_POST['holidayName'];
	$dailyTotalHours = $_POST['dailyTotalHours'];
	 
	$sql = "UPDATE attendance_details SET attend_id = '$attend_id', scheddDetails_id = '$scheddDetails_id', tardiness = '$tardiness', absences ='$absences', overtime = '$overtime', holiday = '$holiday', holidayName ='$holidayName', dailyTotalHours ='$dailyTotalHours' WHERE attendDetails_id = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='../patient_view.php'><<< Go Back</a>";
	}else{


		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='../patient_view.php'><<< Go Back</a>";
	}

?>