<?php 
	include_once("connectsql.php");
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$bday = $_POST['bday'];
	$cellnum = $_POST['cellnum'];
	$telnum = $_POST['telnum'];
	$status = $_POST['status'];
	$gender = $_POST['gender'];
	 
	 

	$sql = "INSERT INTO staff VALUES('','$fname','$mname','$lname','$bday','$cellnum','$telnum','$status','$gender')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='index.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='index.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>