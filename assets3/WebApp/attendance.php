<!DOCTYPE html>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Attendance</title>
	 <link rel="stylesheet" href="bootstrap.css">
	 <link rel="stylesheet" href="styletry.css">
	 <script src="bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
		<header class="headerhe">
			<div class="row">
				<div class="col-sm-12 headerni">
					<label for="" style="color: white;">Admin ID</label>
		    		<div  class="admin-header-button" style="float:right;">
			    		<input type="text" placeholder="Search">
			    		<button type="button" class="btn">
			    			<img src="images/search.png" alt="search" class="search-img" width="20px">
			    		</button>
		    			<button type="button" class="btn">Logout</button>
	    			</div>
				</div>
			</div>
		</header>
		<main>
			<div class="row">
				<div class="col-sm-2 sidebar" >
					<ul class="nav-ul">
						<li><a href="add_staff.php">Add Staff</a></li>
						<li><a href="view_staff.php">View Staff</a></li>
						<li><a href="attendance.php" class="active">Attendance</a></li>
						<li><a href="schedule.php">Schedule</a></li>
						<li><a href="job_details.php">Job Details</a></li>
					</ul>
				</div>
				<div class="col-sm-10 content" >
					<div class="row">
						<div class="col-sm-12">
							 <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
					      <div>
							 <label>Attendance ID:</label>
							 <input type="text" name="attend_id" class='form-control' required>
						  </div>
						  <div>
							<label>Schedule Details ID:</label>
							<input type="text" name="schedDetails_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Tardiness:</label>
						  <input type="text" name="tardiness" class='form-control' required>
						  </div>
						  <div>
						  <label>Overtime:</label>
						  <input type="text" name="overtime" class='form-control' required>
						  </div>
						  <div>
						  <label>Absences:</label>
						  <input type="text" name="absences" class='form-control' required>
						  </div>
						  <div>
						  <label>Holiday:</label>
						  <input type="text" name="holiday" class='form-control' required>
						  </div>
						  <div>
						  <label>Holiday Name:</label>
						  <input type="text" name="holidayName" class='form-control' required>
						  </div>
						  <div>
						  <label>Daily Total Hours:</label>
						  <input type="text" name="dailyTotalHours" class='form-control' required>
						  </div>
						   <br>
						  <button type="submit" class="btn btn-primary">
						  	<span class="glyphicon glyphicon-submit"></span>
						  	Submit
						  </button>
					  </form>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			
		</footer>
	</div>
</body>
</html>