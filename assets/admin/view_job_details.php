<!DOCTYPE html>
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
											<li class="list-group-item"><a href="department.html">View Department</a></li>
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
											<li class="list-group-item"><a href="add_staff.html">Add Staff</a></li>
											<li class="list-group-item"><a href="view_staff.html">View Staff</a></li>
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
											<li class="list-group-item"><a href="add_attendance.html">Add Attendance</a></li>
											<li class="list-group-item"><a href="view_attendance.html">View Attendance</a></li>
											<li class="list-group-item"><a href="add_attendance_detaisl.html">Add Attendance Details</a></li>
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
											<li class="list-group-item"><a href="add_schedule.html">Add Schedule</a></li>
											<li class="list-group-item"><a href="view_schedule.html">View Schedule</a></li>
											 
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
											<li class="list-group-item"><a href="add_job_details.html">Add Job Details</a></li>
											 
											<li class="list-group-item"><a href="view_job_details.html">View Job Details</a></li>
											 
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
			 	 		 <li><a href="#" style="color: white;">View Job Details</a></li>
			 	 	</ul> 
			 	 	 
			 	 	<div class="nav navbar-right nav-btn"><button class="btn"><a href="../user/index.html" style="text-decoration-style: none;">Logout</a></button></div>
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
		<div class="col-sm-12"><legend>Attendance Details</legend></div>
			 		<div class="col-sm-12">
			 			
			 			<?php

	  include_once("connection.php");
	  $sql = "SELECT * FROM job_details";
	  $result = mysqli_query($connect,$sql);
	  if(mysqli_num_rows($result) > 0){
		  echo "<table class='table' border='1'>";
		  echo "<thead>
					<tr>
					    <th>Staff ID</th>
						<th>Salary Wage</th>
						<th>Department</th>
						<th>Allowance</th>
						<th>Employment Status</th>
						<th>Department Head</th>
						<th></th>
					</tr>
				</thead>";
		  echo "<tbody>";
	     while($row = mysqli_fetch_assoc($result)){
		       echo "<tr><td style='text-align:center;'>".
			         $row['staff_id'].
					"</td><td>".
					 $row['salaryWage'].
					"</td><td>".
					$row['department'].
					"</td><td>".
					$row['allowance'].
					"</td><td>".
					$row['employmentStatus'].
					"</td><td>".
					$row['deptHead'].
					 
					 
					 "</td>
					 <td>
					    <a href='job_details_update.php?id=".$row['staff_id']."'>
					      <button class='btn btn-primary'>Update</button>
						</a>
						<a href='action/job_details_delete.php?id=".$row['staff_id']."'>
						  <button class='btn btn-danger'>Delete</button>
						</a>
					 </td>
					 </tr>";
		 }
		 echo "</tbody>";
	  }
	?>
					  	</div>
		
	</div>
</body>
</html>