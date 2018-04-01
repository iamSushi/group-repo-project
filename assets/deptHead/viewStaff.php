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
				<?php
					$space = " ";
					$sid = $_GET['sid'];
					include_once("../user/action/session.php");
					$query = "SELECT * FROM staff WHERE staff_id = '$sid'";
					$result = mysqli_query($connect,$query);
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)):
				?>
				<form class="form-horizontal" method="POST" action="action/update_jobdetails.php<?php echo '?id='.$_GET['id'].'&sid='.$sid.'&dept='.$_GET['dept'].'' ?>">
					<div class="row-1"></div>
 					<div class="container row-11">
					 	<div class="form-group" style="margin-bottom: 15px;">
							<label class="control-label col-sm-4">Name:</label>
							<div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<input type="text" name="" value="<?php echo $row['fname'].$space.$row['mname'].$space.$row['lname'] ?>" class='form-control' placeholder="name">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4">Salary Wage:</label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="text" name="wage" value="" class='form-control' placeholder="php">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4">Department:</label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="text" name="department" value="<?php echo $row['department'] ?>" class='form-control' placeholder="">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4">Allowance:</label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="text" name="allowance" value="" class='form-control' placeholder="php">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4">Employment Status:</label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="text" name="status" value="<?php echo $row['type'] ?>" class='form-control' placeholder="">
								</div>
							</div>
						</div>
						<!-- <div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4">Department Head:</label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									<input type="text" name="depthead" value="" class='form-control' placeholder="">
								</div>
							</div>
						</div> -->
						<div class="form-group" style="margin-bottom: 15px;">
						    <label class="control-label col-sm-4"></label>
						    <div class="col-sm-5 inputGroupContainer">
								<div class="input-group">
									<button  type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</div>
				  	</div>
		  		</form>
				<?php endwhile;} ?>
			</div>
		</div>
	</body>
	<script src="js/script.js"></script>
</html>