<!DOCTYPE html>
<?php
	include('../user/action/session.php');
	if(empty($_SESSION['email'])){
		header('location: ../user/index.php');
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	 <link rel="stylesheet" href="css/styletry.css">
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
											<li class="list-group-item"><a href="view_department.php">View Department</a></li>
											<li class="list-group-item"><a href="add_department.php">Add Department</a></li>
											<li class="list-group-item"><a href="view_department_head.php">Department Head</a></li>
											<li class="list-group-item"><a href="add_department_head.php">Elect Department Head</a></li>
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
							<!-- <div class="panel-group">
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
							</div> -->
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse4" data-toggle="collapse">Schedule</a></h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<ul class="list-group">
											<!-- <li class="list-group-item"><a href="add_schedule.php">Add Schedule</a></li>
											<li class="list-group-item"><a href="view_schedule.php">View Schedule</a></li>
											<li class="list-group-item"><a href="add_schedule.php">Add Schedule Details</a></li> -->
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
			 	 		 <li><a href="#" style="color: white;">Schedule Details</a></li>
			 	 	</ul>
			 	 	<div class="nav navbar-right nav-btn"><button class="btn"><a href="../user/index.php?logout='1'" style="text-decoration-style: none;">Logout</a></button></div>
			 	 	<ul class="nav navbar-right nav-btn">
				 	 	<div class="input-group">
							<form action="search_view_sched.php">
								 <div class="input-group">
									  <input type="text" class="form-control" placeholder="Search Schedule Details" aria-describedby="basic-addon1" name="search">
									  <span class="input-group-addon" id="basic-addon1" style="padding: 0;"><button class="btn" type="submit" name="send"><i class="glyphicon glyphicon-search"></i></button></span>
								</div> 
							</form>
						</div>
					</ul>
			 	 </div>
			 </nav>		
		</div>
		<div class="col-sm-12"><legend>Add Schedule Details</legend></div>
			 		<div class="col-sm-12">
			 			
			 			<form class="form-horizontal" method="POST" action="action/schedule_details_add.php">
						    	<div class="form-group">
									<label class="control-label col-sm-4">Schedule ID:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<!-- <input type="text" name="sched_id" class='form-control' required placeholder="Schedule ID"> -->
											<select name="sched_id" id="" class="form-control">
											<?php

												include_once("connection.php");

												
												$sql = "SELECT * FROM schedule";
												$result = mysqli_query($connect,$sql);
												if(mysqli_num_rows($result) > 0){
													while($row = mysqli_fetch_assoc($result)){
													?>
											  		<option  value="<?php echo $row['sched_id'] ?>"><?php echo 'ID='.$row['sched_id'].''?></option>	
											  		 <?php
												  			}
												  		}
												  ?>
											</select>
										</div>
									</div>
							   	</div>
							 	<div class="form-group">
									<label class="control-label col-sm-4">Day:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
											<input type="date" name="day" class='form-control' required placeholder="Day">
										</div>
									</div>
								</div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Morning Time In:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
											  <input type="time" name="morningTimeIn" class='form-control' required placeholder="Morning Time In">
										</div>
									</div>
								</div>
							    <div class="form-group">
									<label class="control-label col-sm-4">Morning Time Out:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
											 <input type="time" name="morningTimeOut" class='form-control' required placeholder="Morning Time Ouy">
										</div>
									</div>
							 	</div>
							 	<div class="form-group">
								    <label class="control-label col-sm-4">Afternoon Time In:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
											  <input type="time" name="afterTimeIn" class='form-control' required placeholder="Morning Time In">
										</div>
									</div>
								</div>
							    <div class="form-group">
									<label class="control-label col-sm-4">Afternoon Time Out:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
											 <input type="time" name="afterTimeOut" class='form-control' required placeholder="Morning Time Ouy">
										</div>
									</div>
							 	</div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">TotalHours:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
							     			<input type="text" name="totalHours" class='form-control' required placeholder="Total Hours">
							     		</div>
							     	</div>
							     </div>
							    
							   <br>
							   <div class="form-group">
							    <label for="" class="col-sm-4 control-label"></label>
							   		<div class="col-sm-5">
							  		<button type="submit" class="btn btn-primary" id="submit" name="submit" width="100px">Submit <span class="glyphicon glyphicon-send"></span></button>

							  </div>
							  </div>
					  		</form>
					  	</div>
		
	</div>
</body>
</html>