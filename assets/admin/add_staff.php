<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="css/styletry.css">
	  
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
						<li><a href="#" class="active">Add Staff</a></li>
						<li><a href="view_staff.php">View Staff</a></li>
						<li><a href="add_department_head.php">Add Department Head</a></li>
						<li><a href="view_department_head.php">View Department Head</a></li>
						<li><a href="attendance.php">Attendance</a></li>
						<li><a href="schedule.php">Schedule</a></li>
						<li><a href="job_details.php">Job Details</a></li>
					</ul>
				</div>
				<div class="col-sm-10 content" >
					<div class="row">
						<div class="col-sm-12">
							<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
						    	<div>
									<label>First Name:</label>
									<input type="text" name="fname" class='form-control' required>
							   	</div>
							 	<div>
									<label>Middle Name:</label>
									<input type="text" name="mname" class='form-control' required>
								</div>
								<div>
								    <label>Last Name:</label>
								    <input type="text" name="lname" class='form-control' required>
								</div>
							    <div>
									<label>Birthdate:</label>
									<input type="date" name="bday" class='form-control' required>
							 	</div>
							    <div>
									<label>Cellphone Number</label>
									<input type="text" name="cellnum" class='form-control' required>
							    </div>
							    <div>
									<label>Telephone Number</label>
								    <input type="text" name="telnum" class='form-control' required>
								</div>
								<div>
									<label>Civil Status:</label>
								  	<input type="text" name="status" class='form-control' required>
							    </div>
							    <div>
								  	<label>Gender:</label>
								  	<input type="text" name="gender" class='form-control' required>
							    </div>
							   <br>
							  <button type="submit" class="btn btn-primary" id="submit" name="submit">
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
<?php 
	 
	if(isset($_POST['submit'])){
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
	}
?>
</html>