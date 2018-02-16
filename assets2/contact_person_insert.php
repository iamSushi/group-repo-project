<?php 
	include_once("connectsql.php");
	$staff_id = $_POST['staff_id'];
	$name  = $_POST['name'];
	$contactNum  = $_POST['contactNum'];
	$address  = $_POST['address'];
	$gender  = $_POST['gender'];
	 

	$sql = "INSERT INTO contact_person VALUES('$staff_id','$name','$contactNum','$address','$gender')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='contact_person.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='contact_person.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>