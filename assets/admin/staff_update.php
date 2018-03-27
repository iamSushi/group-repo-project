   <!DOCTYPE html>
   <?php
	include('../user/action/session.php');
	if(empty($_SESSION['email'])){
		header('location: index.php');
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/styletry.css">
	<!-- <link rel="stylesheet" href="css/bootstrap-theme.css"> -->
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.js"></script>
	
</head>
<body>
	<div class="col-sm-2 sidebar">
		<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse1" data-toggle="collapse">Department</a></h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="#">View Department</a></li>
											<!-- <li class="list-group-item"><a href="view_department_head.html">Department Head</a></li>
											<li class="list-group-item"><a href="add_department_head.html">Elect Department Head</a></li> -->
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse2" data-toggle="collapse">Staff</a></h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="add_staff.php">Add Staff</a></li>
											<li class="list-group-item"><a href="view_staff.php">View Staff</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse3" data-toggle="collapse">Attendance</a></h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="add_attendance.php">Add Attendance</a></li>
											<li class="list-group-item"><a href="view_attendance.php">View Attendance</a></li>
											<li class="list-group-item"><a href="add_attendance_details.php">Add View Attendance</a></li>
											<li class="list-group-item"><a href="view_attendance_details.php">View Attendance Details</a></li>	 
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse4" data-toggle="collapse">Schedule</a></h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="add_schedule.php">Add Schedule</a></li>
											<li class="list-group-item"><a href="view_schedule.php">View Schedule</a></li>
											<li class="list-group-item"><a href="add_schedule.php">Add Schedule Details</a></li>
											<li class="list-group-item"><a href="view_schedule_details.php">View Schedule Details</a></li>
											 
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse5" data-toggle="collapse">Job Details</a></h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="add_job_details.php">Add Job Details</a></li>
											<li class="list-group-item"><a href="view_job_details.php">View Job Details</a></li>
										</ul>
									</div>
								</div>
							</div>
	</div>
	<div class="col-sm-10 content">
		<div class="col-sm-12" style="padding: 0;">
			 <nav class="navbar navbar-inverse">
			 	 <div class="container-fluid" style="padding-left: 0;">
			 	 	<ul class="nav navbar-nav">
			 	 		<li><a href="#" class="activeh" style="color: white;">Staff</a></li>
			 	 	</ul>
			 	 	<div class="nav navbar-right nav-btn"><button class="btn"><a href="../user/index.php?logout='1'" style="text-decoration-style: none;">Logout</a></button></div>
			 	 	<ul class="nav navbar-right nav-btn">
				 	 	<div class="input-group">
							 <div class="input-group">
								  <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon1">
								  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-search"></i></span>
							</div> 
						</div>
					</ul>
			 	 </div>
			 </nav>		
		</div>
		<div class="col-sm-12"><legend>Staff Form Registration</legend></div>
				<?php

				include_once("connection.php");

				$id = $_GET['id'];
				$sql = "SELECT * FROM staff WHERE staff_id = '$id'";
				$result = mysqli_query($connect,$sql);
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
					?>
			 		<div class="col-sm-12">
			 			
			 			 <form class="form-horizontal" method="POST" action="action/staff_update_data.php">
		  		<input type="hidden" name="id" value ="<?php echo $id ?>" >
		    	<div class="form-group">
					<label class="control- label col-sm-4">First Name:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="fname" class='form-control'  required placeholder="First Name" value="<?php echo $row['fname'];?>">
						</div>
					</div>
			   	</div>
			 	<div class="form-group">
					<label class="control- label col-sm-4">Middle Name:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" name="mname" class='form-control'  required placeholder="Middle Name" value="<?php echo $row['mname'];?>">
						</div>
					</div>
				</div>
				<div class="form-group">
				    <label class="control- label col-sm-4">Last Name:</label>
				    <div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" name="lname" class='form-control'  required placeholder="Last Name" value="<?php echo $row['lname'];?>">
						</div>
					</div>
				</div>
			    <div class="form-group">
					<label class="control- label col-sm-4">Birthdate:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
					<input type="date" name="bday" class='form-control'  required value="<?php echo $row['birthdate'];?>">
						</div>
					</div>
			 	</div>
			     <div class="form-group">
			     	<label for="" class="control- label col-sm-4">Cellphone Number:</label>
			     	<div class="col-sm-5 inputGroupContainer">
			     		<div class="input-group">
			     			<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
			     			<input type="text" name="cellnum" class="form-control"  required placeholder="Cellphone Number" value="<?php echo $row['cellnum'];?>">
			     		</div>
			     	</div>
			     </div>
			    <div class="form-group">
					<label class="control- label col-sm-4">Telephone Number:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
				    <input type="text" name="telnum" class='form-control'  required placeholder="Telephone Number" value="<?php echo $row['telnum'];?>">
				    	</div>
				    </div>
				</div>
				<div class="form-group">
					<label class="control- label col-sm-4">Email:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				    <input type="text" name="email" class='form-control'  required placeholder="Email" value="<?php echo $row['email'];?>">
				    	</div>
				    </div>
				</div>
				<div class="form-group">
					<label class="control- label col-sm-4">Civil Status:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					 		<select name="status" id="status" class="form-control" value="<?php echo $row['status'];?>" >
					 			<option value="single">Single</option>
					 			<option value="merried">Merried</option>
					 			<option value="widow">Widow</option>
					 		</select>
						</div>
					</div>
			 	</div>
			 	<div class="form-group">
				  	<label class="control- label col-sm-4">Gender:</label>
				  	<div class="col-sm-5 inputGroupContainer">
				  		<div class="input-group">
				  			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				   		<select name="gender" id="gender" class="form-control" value="<?php echo $row['gender'];?>" >
				   			<option value="male">Male</option>
				   			<option value="female">Female</option>
				   		</select>
				  		</div>
				  	</div>
			    </div>
			    <div class="form-group">
					<label class="control- label col-sm-4">Type:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				    <input type="text" name="type" class='form-control'  required placeholder="Type" value="<?php echo $row['type'];?>">
				    	</div>
				    </div>
				</div>
				 <div class="form-group">
					<label class="control- label col-sm-4">Position:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				    <input type="text" name="position" class='form-control'  required placeholder="Position" value="<?php echo $row['position'];?>">
				    	</div>
				    </div>
				</div>
				 <div class="form-group">
					<label class="control- label col-sm-4">Password:</label>
					<div class="col-sm-5 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				    <input type="text" name="password" class='form-control'  required placeholder="Password" value="<?php echo $row['password'];?>">
				    	</div>
				    </div>
				</div>
			   <br>
			   <div class="form-group">
			    <label for="" class="col-sm-4 control- label"></label>
			   		<div class="col-sm-5">
			  		<button type="submit" class="btn btn-primary" id="submit" name="submit" width="100px">Submit <span class="glyphicon glyphicon-send"></span></button>

			  </div>
			  </div>
	  		</form>
	  		  <?php
  			}
  		}
  ?>
					  	</div>
		
	</div>
</body>
</html> 