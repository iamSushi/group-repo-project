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
	<div class="col-sm-10 content">
		<div class="col-sm-12" style="padding: 0;">
			 <nav class="navbar navbar-inverse">
			 	 <div class="container-fluid" style="padding-left: 0;">
			 	 	<ul class="nav navbar-nav">
			 	 		 <li><a href="#" style="color: white;">Attendance Details</a></li>
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
		<div class="col-sm-12"><legend>Update Attendance Details</legend></div>
		<?php

				include_once("connection.php");

				$id = $_GET['id'];
				$sql = "SELECT * FROM department WHERE depart_id = '$id'";
				$result = mysqli_query($connect,$sql);
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
					?>

			 		<div class="col-sm-12">
			 			
			 			<form class="form-horizontal" method="POST" action="action/department_update_data.php">
			 					<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
						    	<!-- <div class="form-group">
						    										<label class="control-label col-sm-4">Attendance ID:</label>
						    										<div class="col-sm-5 inputGroupContainer">
						    											<div class="input-group">
						    												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						    												<input type="text" name="attend_id" class='form-control' required placeholder="Attendance ID" value="<?php echo $row['depart_id'];?>">
						    											</div>
						    										</div>
						    								   	</div> -->

							 	<div class="form-group">
									<label class="control-label col-sm-4">Department Name:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input type="text" name="depart_name" class='form-control' required placeholder="Departname Name" value="<?php echo $row['depart_name'];?>">
										</div>
									</div>
								</div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Department Head:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="depart_head" class='form-control' required placeholder="Department Head" value="<?php echo $row['depart_head'];?>">
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
					  	<?php
  			}
  		}
  ?>
		
	</div>
</body>
</html>s