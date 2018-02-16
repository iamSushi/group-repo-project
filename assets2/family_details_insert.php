<?php 
	include_once("connectsql.php");
	$staff_id  = $_POST['staff_id'];
	$fathersName  = $_POST['fathersName'];
	$mothersName  = $_POST['mothersName'];
	$fatheresAge  = $_POST['fatheresAge'];
	$mothersAge  = $_POST['mothersAge'];
	$siblings  = $_POST['siblings'];
	$spouseName  = $_POST['spouseName'];
	$numOfChildren  = $_POST['numOfChildren'];
		 
	 

	$sql = "INSERT INTO family_details VALUES('$staff_id','$fathersName','$mothersName','$fathersAge','$mothersAge','$siblings','$spouseName','numOfChildren')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='family_details.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='family_details.php'><<< Go Back</a>" ;
		echo mysqli_error($connect);
	}
?>