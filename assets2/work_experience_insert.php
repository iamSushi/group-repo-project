<?php 
	include_once("connectsql.php");
	$staff_id = $_POST['staff_id'];
	$companyName = $_POST['companyName'];
	$employerName = $_POST['employerName']; 
	$employerAdd = $_POST['employerAdd'];
	$employerCellNum = $_POST['employerCellNum'];
	$employerTelNum = $_POST['employerTelNum'];
	$companyStart = $_POST['companyStart'];
	$companyEnd = $_POST['companyEnd'];
	$jobTitle = $_POST['jobTitle'];
	$department = $_POST['department'];
	$workArea = $_POST['workArea'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$moreInfo = $_POST['moreInfo'];
	 

	$sql = "INSERT INTO work_experience VALUES('$staff_id','$companyName','$employerName','$employerAdd','$employerCellNum','$employerTelNum','$companyStart','$companyEnd','$jobTitle','$department','$workArea','$state','$city','$country','$moreInfo')";
	echo mysqli_error($connect);
	if(mysqli_query($connect, $sql) or mysqli_error($connect)){
		echo "Successfully Added! <a href='work_experience.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='work_experience.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>