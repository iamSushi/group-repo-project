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
			 	 		 <li><a href="#" style="color: white;">Add Attendance Details</a></li>
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
		<div class="col-sm-12"><legend>Schedule Details</legend></div>
					<div class="col-sm-1"></div>
			 		<div class="col-sm-10">
			 			<?php
						  include_once("connection.php");
						  $sql = "SELECT * FROM staffsched";
						  $result = mysqli_query($connect,$sql);
						  if(mysqli_num_rows($result) > 0){
							  echo "<table class='table'>";
							  echo "<thead>
										<tr>
										    <th>Schedule Details ID</th>
											<th>Staff</th>
										 
											<th>Day</th>
											<th>Morning Time In</th>
											<th>Morning Time Out</th>
											<th>Afternoon Time In</th>
											<th>Afternon Time Out</th>
											<th>Total Hours</th>
											<th></th>
											<th></th>
										</tr>
									</thead>";
							  echo "<tbody>";
						     while($row = mysqli_fetch_assoc($result)){
							       echo "<tr><td style='text-align:center;'>".
								         $row['sched_id'].
										"</td><td>".
										 $row['fname'].' '.
										 $row['mname'].' '.
										 $row['lname'].' '.
										  /*"</td><td>".
										 $row['head_id'].
										  "</td><td>".
										 $row['department'].*/
										 "</td><td>".
										 $row['day'].
										"</td><td>".
										 $row['morningTimein'].
										  "</td><td>".
										 $row['morningTimeout'].
										"</td><td>".
										 $row['afternoonTimein'].
										  "</td><td>".
										 $row['afternoonTimeout'].
										"</td><td>".
										 $row['totalHours'].
										 
										 "</td>
										 <td>
										    <a href='update_schedule_details.php?id=".$row['sched_id']."'>
										      <button class='btn btn-primary'>Update</button>
											</a>
										</td>
					 					<td>
											<a href='action/attendance_details_delete.php?id=".$row['sched_id']."'>
											  <button class='btn btn-danger'>Delete</button>
											</a>
										 </td>
										 </tr>";
							 }
							 echo "</tbody>";
						  }
						?>
					  	</div>
					  	<div class="col-sm-1"></div>
		
	</div>
</body>
</html>