<? php
	include('./user/action/session.php')
	if (empty($SESSION['email'])){
		header('location:index.php');
	}
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/bootstrap.js"></script>
		<link rel="icon" href="img/logo.png">
		<title>Schedule</title>
	</head>
	<body>
		<div class="col-2">
			<div class="row-12 sidebar" style="background-color: #D5D8DC">
				<div class="row-6">
					<div class="row-2 container text-center">
						<p>Your Profile</p>
					</div>
					<div class="row-7 text-center">
						<img src="img/avatar.png" alt="" style="width: 200px; height: 200px;">
					</div>
					<div class="row-3 container text-center">
						<h4>James Kenneth Mark Omamalin Sinadjan</h4>
					</div>
				</div>
				<div class="row-5 container text-center">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse1" data-toggle="collapse">Work Details</a></h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="work.php">Details</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse2" data-toggle="collapse">Schedule</a></h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="add.php">Add Schedule</a></li>
											<li class="list-group-item"><a href="view.php">View Schedule</a></li>
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
											<li class="list-group-item"><a href="addattendance.php">Add Attendance</a></li>
											<li class="list-group-item"><a href="attend.php">View Attendance</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse4" data-toggle="collapse">Deductions</a></h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="deds.php">Staff Deductions</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse5" data-toggle="collapse">View Profile</a></h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse">
										<ul class="list-group">
											<li class="list-group-item"><a href="../user/about_me.php">Staff Profile</a></li>
										</ul>
									</div>
								</div>
							</div>
				</div>
			</div>
		</div>
		<div class="col-10">
			<div class="row-1">
				<nav class="navbar navbar-inverse navbar-static-top">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse navHeaderCollapse">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="view.php" class="active" style="background-color: #0f0f0f">View Schedule</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right" style="margin-right: 15px;">
							<li>
								<a href="" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="../user/index.php?logout='1'">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row-10">
				<div class="col-sm-12"><legend>Schedule</legend></div>
			 		<div class="col-sm-12">
			 			 <?php

	  include_once("connection.php");
	  $sql = "SELECT * FROM schedule_details";
	  $result = mysqli_query($connect,$sql);
	  if(mysqli_num_rows($result) > 0){
		  echo "<table class='table' border='1'>";
		  echo "<thead>
					<tr>
					    <th>Schedule Details ID</th>
						<th>Schedule ID</th>
						<th>Day</th>
						<th>Morning Time In</th>
						<th>Morning Time Out</th>
						<th>Afternoon Time In</th>
						<th>Afternoon Time Out</th>
						<th>Total Number of Hours</th>
						<th></th>
					</tr>
				</thead>";
		  echo "<tbody>";
	     while($row = mysqli_fetch_assoc($result)){
		       echo "<tr><td style='text-align:center;'>".
			         $row['schedDetails_id'].
					"</td><td>".
					 $row['sched_id'].
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
					    <a href='attendance_details_update.php?id=".$row['sched_id']."'>
					      <button class='btn btn-primary'>Update</button>
						</a>
						<a href='delete.php?id=".$row['sched_id']."'>
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
		</div>
	</body>
</html>