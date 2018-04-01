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
				<div class="navbar navbar-inverse navbar-static-top">
					<ul class="nav navbar-nav navbar-left">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="staff_view.php<?php echo '?id='.$id.'&dept='.$_GET['dept'].''?>">All Staff</a></li>
								<li><a href="staff_dept.php<?php echo '?id='.$id.'&dept='.$_GET['dept'].''?>">My Staff</a></li>
								<li><a href="staff_add.php<?php echo '?id='.$id.'&dept='.$_GET['dept'].''?>">Add Staff</a></li>
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
								<li><a href="sched_view.php<?php echo '?id='.$id.'&dept='.$_GET['dept'].''?>">View Schedule</a></li>
							</ul>
						</li>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attendance
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Add Attendance</a></li>
								<li><a href="#">Check Attendance</a></li>
							</ul>
						</li> -->
						<li >
							<a href="deduction.php<?php echo '?id='.$id.'&dept='.$_GET['dept'].''?>" role="button" aria-haspopup="true" aria-expanded="false">Payroll</a>
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
				<form class="form-horizontal" method="POST" action="action/addstaff.php<?php echo '?id='.$id.'&dept='.$_GET['dept'].''?>">
					<div class="row-4"></div>
 					<div class="container row-8">
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Firstname:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<input type="text" class='form-control' name="fname" required placeholder="firstname">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4">Middlename:</label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="text" class='form-control' name="mname" required placeholder="middlename">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4">Surname:</label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="text" class='form-control' name="sname" required placeholder="surname">
								</div>
							</div>
						</div>
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Birthdate:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="date" class='form-control' name="dob" required>
								</div>
							</div>
					 	</div>
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Gender:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<select class="form-control" name="gender">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
					 	</div>
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Status:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<select class="form-control" name="status">
										<option value="Single">Single</option>
										<option value="Married">Married</option>
										<option value="Divorced">Divorced</option>
										<option value="Widowed">Widowed</option>
									</select>
								</div>
							</div>
					 	</div>
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Email Add:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="email" class='form-control' name="email" required placeholder="email address">
								</div>
							</div>
					 	</div>
					   	<div class="form-group" style="margin-bottom: 15px;">
					    	<label for="" class="col-sm-4 control-label"></label>
					   		<div class="col-sm-5">
					  			<button type="submit" class="btn btn-dark" name="submit" width="100px">Register <span class="glyphicon glyphicon-send"></span></button>
							</div>
					  	</div>
				  	</div>
		  		</form>

			</div>
		</div>
	</body>
</html>