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
		<title>Profile</title>
	</head>
	<body style="overflow-y: hidden;">
		<div class="col-2" style="background-color:#a44141;">
			<div class="row-6">
				<?php
					$space = " ";
					$id = $_GET['id'];
					include_once("action/mysqlconn.php");
					// $query = "SELECT member.member_id, member.firstName, member.middleName, member.surName, member.emailAdd, member.status, member.gender, member.position, address.member_id, address.addOne, address.addTwo, address.addTre FROM member LEFT JOIN address ON member.member_id = address.member_id WHERE emailAdd = '$email'";
					// $query = "SELECT * FROM staff WHERE email = '$email'";
					$query = "SELECT * FROM staff WHERE staff_id = '$id'";
					$result = mysqli_query($connect,$query);
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)):
				?>
				<form action="">
					<div class="container text-center">
						<p>Your Profile</p>
					</div>
					<div class="text-center">
						<img src="img/avatar.png" alt="" style="width: 200px; height: 200px;">
					</div>
					<div class="container text-center">
						<p><?php echo $row['fname'].$space.$row['lname'] ?></p>
						<p><?php echo $row['type'] ?></p>
						<p><?php echo $row['department'] ?></p>
					</div>
				</form>
				<?php endwhile;} ?>
			</div>
		</div>
		<div class="col-10">
			<div>
				<div class="row-1 navbar navbar-inverse navbar-static-top">
					<ul class="nav navbar-nav navbar-left">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="staff_view.php<?php echo '?id='.$id.''?>">All Staff</a></li>
								<li><a href="staff_dept.php<?php echo '?id='.$id.''?>">My Staff</a></li>
								<li><a href="staff_add.php<?php echo '?id='.$id.''?>">Add Staff</a></li>
								<!-- <li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li> -->
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Schedule
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">View Schedule</a></li>
								<li><a href="#">Add Schedule</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attendance
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Add Attendance</a></li>
								<li><a href="#">Check Attendance</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payroll
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Deduction</a></li>
								<li><a href="#">Payment</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">
						<li>
							<a href="" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="../user/index.php?logout='1'" style="color: red !important;">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<form class="form-horizontal" method="POST" action="">
					<div class="row-1"></div>
 					<div class="container row-11">
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Day:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<input type="text" name="day" class='form-control' required placeholder="Day">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4">Morning Time In:</label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									  <input type="text" name="morningTimein" class='form-control' required placeholder="Morning Time In">
								</div>
							</div>
						</div>
					    <div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Morning Time Out:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									 <input type="text" name="morningTimeout" class='form-control' required placeholder="Morning Time Out">
								</div>
							</div>
					 	</div>
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">afternoon Time In:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									 <input type="text" name="afternoonTimein" class='form-control' required placeholder="Afternoon Time In">
								</div>
							</div>
					 	</div>
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Afternoon Time Out:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									 <input type="text" name="afternoonTimeout" class='form-control' required placeholder="Afternoon Time Out">
								</div>
							</div>
					 	</div>
					    <div class="form-group" style="margin-bottom: 15px;">
					     	<label for="" class="control-label col-sm-4">TotalHours:</label>
					     	<div class="col-sm-5 inputGroupContainer">
					     		<div class="input-group">
					     			<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
					     			<input type="text" name="totalHours" class='form-control' required placeholder="Total Hours">
					     		</div>
					     	</div>
					    </div>
					   	<div class="form-group" style="margin-bottom: 15px;">
					    <label for="" class="col-sm-4 control-label"></label>
					   		<div class="col-sm-5">
					  		<button type="submit" class="btn btn-primary" id="submit" name="submit" width="100px">Submit <span class="glyphicon glyphicon-send"></span></button>
							</div>
					  	</div>
				  	</div>
		  		</form>

			</div>
		</div>
	</body>
</html>