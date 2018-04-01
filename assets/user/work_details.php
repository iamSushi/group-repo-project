<?php
	include('action/session.php');
	if(empty($_SESSION['email'])){
		header('location: index.php');
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
		<title>Job Details</title>
	</head>
	<body>
		<div class="row-3">
			<div class="container-sides">
				<div class="col-12">
					<?php
						$space = " ";
						$email = $_SESSION['email'];
						$id = $_GET['id'];
						include_once("action/session.php");
						// $query = "SELECT member.member_id, member.firstName, member.middleName, member.surName, member.emailAdd, member.status, member.gender, member.position, address.member_id, address.addOne, address.addTwo, address.addTre FROM member LEFT JOIN address ON member.member_id = address.member_id WHERE emailAdd = '$email'";
						// $query = "SELECT * FROM staff WHERE email = '$email'";
						$query = "SELECT staff.staff_id, staff.fname, staff.mname, staff.lname, staff.status, staff.gender, staff.type, staff.department, staff.password, current_address.staff_id, current_address.addOne, current_address.addTwo, current_address.addTre, current_address.state, current_address.city FROM staff INNER JOIN current_address ON staff.staff_id = current_address.staff_id WHERE staff.staff_id = '$id'";
						$result = mysqli_query($connect,$query);
						if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)):
					?>
								<form action="">
									<div class="col-3 text-center">
										<img src="img/avatar.png" alt="" style="width:180px;height: 180px;padding-top: 5px; ">
									</div>
									<div class="col-9">
										<div class="row-4">
											<div class="container">
												<label>Name:</label>
												<h5><?php echo $row['fname'].$space.$row['mname'].$space.$row['lname'] ?></h5>
											</div>
										</div>
										<div class="row-4">
											<div class="container">
												<label>Address:</label>
												<h5><?php echo $row['addOne'].$space.$row['addTwo'].$space.$row['addTre'].$space.$row['city'].$space.$row['state'] ?></h5>
											</div>
										</div>
										<div class="row-4">
											<div class="col-4 container">
												<label>Position:</label>
												<h5><?php echo $row['department'] ?></h5>
											</div>
											<div class="col-4 container">
												<label>Status:</label>
												<h5><?php echo $row['status'] ?></h5>
											</div>
											<div class="col-4 container">
												<label>Gender:</label>
												<h5><?php echo $row['gender'] ?></h5>
											</div>
										</div>
									</div>
								</form>
					<?php endwhile;} ?>
				</div>
			</div>
		</div>
		<div class="row-9">
			<div class="container-sides">
				<div class="col-12">
					<div class="row-1">
						<div class="">
							<nav class="navbar navbar-inverse navbar-static-top">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="collapse navbar-collapse navHeaderCollapse">
									<ul class="nav navbar-nav navbar-left">
										<li><a href="about_me.php<?php echo '?id='.$id.''?>">About</a></li>
										<li><a class="active" href="work_details.php<?php echo '?id='.$id.''?>">Work</a></li>
										<li><a href="contact_person.php<?php echo '?id='.$id.''?>">Contact</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right" style="margin-right: 15px;">
										<li>
											<a href="" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="basicinfo.php<?php echo '?id='.$id.''?>">Edit Profile</a></li>
												<li><a href="index.php?logout='1'" style="color: red !important;">Logout</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
					<div class="row-11">
						<div class="col-3" style="background-color: #be4141;">
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse1" data-toggle="collapse"><a href="work_details.php<?php echo '?id='.$id.''?>">Work Details</a></a></h4>
									</div>
								</div>
							</div>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel panel-heading">
										<h4 class="panel-title"><a href="#collapse2" data-toggle="collapse"><a href="work_schedule.php<?php echo '?id='.$id.''?>">Schedule</a></a></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-9">
							<div class="row-12">
							<?php
								$space = " ";
								$email = $_SESSION['email'];
								$id = $_GET['id'];
								include_once("action/session.php");
								$query = "SELECT staff.department, staff.type, job_details.deptHead, job_details.allowance, job_details.salaryWage FROM staff INNER JOIN job_details ON staff.staff_id = job_details.staff_id WHERE job_details.staff_id = '$id'";
								$result = mysqli_query($connect,$query);
								if(mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_assoc($result)):
							?>
								<form action="">
									<div class="container form-group">
										<legend><h2>Job Details</h2></legend>
									</div>
									<div class="container form-group form-horizontal">
										<div class="inputGroupContainer">
											<div class="input-group">
												<span class="input-group-addon">Department:</span>
												<span class='form-control'><?php echo $row['department'] ?></span>
											</div>
										</div>
									</div>
									<div class="container form-group form-horizontal">
										<div class="inputGroupContainer">
											<div class="input-group">
												<span class="input-group-addon">Department Head:</span>
												<span class='form-control'><?php echo $row['deptHead'] ?></span>
											</div>
										</div>
									</div>
									<div class="container form-group form-horizontal">
										<div class="inputGroupContainer">
											<div class="input-group">
												<span class="input-group-addon">Allowance:</span>
												<span class='form-control'><?php echo $row['allowance'] ?></span>
											</div>
										</div>
									</div>
									<div class="container form-group form-horizontal">
										<div class="inputGroupContainer">
											<div class="input-group">
												<span class="input-group-addon">Salary Wage:</span>
												<span class='form-control'><?php echo $row['salaryWage'] ?></span>
											</div>
										</div>
									</div>
									<div class="container form-group form-horizontal">
										<div class="inputGroupContainer">
											<div class="input-group">
												<span class="input-group-addon">Employment Status:</span>
												<span class='form-control'><?php echo $row['type'] ?></span>
											</div>
										</div>
									</div>
								</form>
							<?php endwhile;} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>