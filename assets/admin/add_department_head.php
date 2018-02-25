<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="css/styletry.css">
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	  
	 <script src="bootstrap.js"></script>
</head>
<body>
	<div class=" main-container">
		<header class="headerhe">
			<div class="row">
				<div class="col-sm-12 headerni">
					<nav class="navbar navbar-inverse">
					<label for="" style="color: white;">Admin ID</label>
		    		<div  class="admin-header-button" style="float:right;">
			    		<input type="text" placeholder="Search">
			    		<button type="button" class="btn">
			    			<i class="glyphicon glyphicon-search"></i>
			    		</button>
		    			<button type="button" class="btn">Logout</button>
	    			</div>
	    			</nav>
				</div>
			</div>
		</header>
		<main>
			<div class="row">
				<div class="col-sm-2 col-md-2 sidebar" >
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
				<div class=" content" >
					<div class="col-sm-12">
						<div class="col-sm-10 form-ni">
							<form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
						    	<div class="form-group">
									<label class="control-label col-sm-4">First Name:</label>
									<div class="col-sm-7 col-md-6 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input type="text" name="fname" class='form-control' required placeholder="First Name">
										</div>
									</div>
							   	</div>
							 	<div class="form-group">
									<label class="control-label col-sm-4">Middle Name:</label>
									<div class="col-sm-7 col-md-6 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" name="fname" class='form-control' required placeholder="Middle Name">
										</div>
									</div>
								</div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Last Name:</label>
								    <div class="col-sm-7 col-md-6 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" name="fname" class='form-control' required placeholder="Last Name">
										</div>
									</div>
								</div>
							    <div class="form-group">
									<label class="control-label col-sm-4">Birthdate:</label>
									<div class="col-sm-7 col-md-6 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="date" name="bday" class='form-control' required>
										</div>
									</div>
							 	</div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Cellphone Number:</label>
							     	<div class="col-sm-7 col-md-6 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							     			<input type="text" name="cellphone" class="form-control" required placeholder="Cellphone Number">
							     		</div>
							     	</div>
							     </div>
							    <div class="form-group">
									<label class="control-label col-sm-4">Telephone Number:</label>
									<div class="col-sm-7 col-md-6 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								    <input type="text" name="telnum" class='form-control' required placeholder="Telephone Number">
								    	</div>
								    </div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">Civil Status:</label>
									<div class="col-sm-7 col-md-6 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" name="bday" class='form-control' required placeholder="Civil Status">
										</div>
									</div>
							 	</div>
							 	<div class="form-group">
								  	<label class="control-label col-sm-4">Gender:</label>
								  	<div class="col-sm-7 col-md-6 inputGroupContainer">
								  		<div class="input-group">
								  			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								  	<input type="text" name="gender" class='form-control' required placeholder="Gender">
								  		</div>
								  	</div>
							    </div>
							    <div class="form-group">
								  	<label class="control-label col-sm-4">Department:</label>
								  	<div class="col-sm-7 col-md-6 inputGroupContainer">
								  		<div class="input-group">
								  			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								  	<input type="text" name="department" class='form-control' required placeholder="Department">
								  		</div>
								  	</div>
							    </div>
							   <br>
							   <div class="form-group">
							    <label for="" class="col-sm-4 control-label"></label>
							   		<div class="col-sm-7 col-md-6">
							  		<button type="submit" class="btn btn-primary" id="submit" name="submit" width="100px">Submit<span class="glyphicon glyphicon-send"></span></button>

							  </div>
							  </div>
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