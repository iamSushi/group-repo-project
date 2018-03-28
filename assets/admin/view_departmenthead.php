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
</head>
<body>
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link rel="stylesheet" href="css/styletry.css">
	  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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
	<div class="col-sm-10 ha" style="height: 100%;padding: 0">
		<div class="col-sm-12" style="padding: 0;">
			 <nav class="navbar navbar-inverse" style="border-radius: 0;border:none;">
					<div class="container-fluid" style="padding-left: 0;">
			 	 	<!-- <ul class="nav navbar-nav">
			 	 		<li><a href="add_department_head.php" class="activeh">Elect Department Head</a></li>
			 	 		<li><a href="view_department_head.php">View Department Head</a></li>
			 	 		<li><a href="#" style="color:white;">Search Department Head</a></li>
			 	 	</ul> -->
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
			 		<div class="col-sm-12">
			 			<div class="col-sm-10" style="margin-left:100px;">
			 				 <form class="search-form" role="search">
                                <div class="form-group md-form mt-0 pt-1 waves-light">
                                	<div class="input-group">
                                    	<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn"><button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></button></i></span>
                                    </div>
                                </div>
                            </form>
			 			</div>
			 			 
						<div class="col-sm-10 form-ni">
							<table border="1" class="table">
								<tr>
									<th>Staff ID</th>
									<th>Name</th>
									<th>BirthDate</th>
									<th>Cellphone Number</th>
									<th>Telephone Number</th>
									<th>Status</th>
									<th>Gender</th>
									<th></th>
								</tr>
								<tr>
									<td>1</td>
									<td>Joshua Perater</td>
									<td>April 15 1999</td>
									<td>0916231452</td>
									<td>9251151</td>
									<td>Single</td>
									<td>Male</td>
									<td>
										<a href='staff_update.php?id=".$row['staff_id']."'>
										      <button class='btn btn-primary'>Update</button>
											</a>
											<a  href='view_staff.php?id=".$row['staff_id']."'>
											  <button class='btn btn-danger' name='delete' id='delete'>Delete</button>
										</a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>john Ortiz</td>
									<td>October 16 1996</td>
									<td>0916452131</td>
									<td>30916425</td>
									<td>Maried</td>
									<td>Male</td>
									<td>
										<a href='staff_update.php?id=".$row['staff_id']."'>
										      <button class='btn btn-primary'>Update</button>
											</a>
											<a  href='view_staff.php?id=".$row['staff_id']."'>
											  <button class='btn btn-danger' name='delete' id='delete'>Delete</button>
										</a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Melinda Padrones</td>
									<td>july 6 1989</td>
									<td>09358049315</td>
									<td>0168132</td>
									<td>168213</td>
									<td>Female</td>
									<td>
										<a href='staff_update.php?id=".$row['staff_id']."'>
										      <button class='btn btn-primary'>Update</button>
											</a>
											<a  href='view_staff.php?id=".$row['staff_id']."'>
											  <button class='btn btn-danger' name='delete' id='delete'>Delete</button>
										</a>
									</td>
								</tr>
							</table>
						</div>
			 			 
					</div>
		
	</div>
</body>
</html>
</body>
</html>