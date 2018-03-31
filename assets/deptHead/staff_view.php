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
								<li><a href="sched_add.php<?php echo '?id='.$id.'&dept='.$_GET['dept'].''?>">Add Schedule</a></li>
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
				<div class="row-11" style="overflow-y:scroll; max-height: 690px;">
					<form class="container" action="" method="post">
						<?php
							$space = " ";
							$id = $_GET['id'];
							include_once("action/mysqlconn.php");
							$query = "SELECT * FROM staff";
							$result = mysqli_query($connect,$query);
							if(mysqli_num_rows($result) > 0){
							echo "<table class='table'>";
								echo "<tr>";
									echo "<th>Firstname</th>";
									echo "<th>Middlename</th>";
									echo "<th>Surname</th>";
									echo "<th>Birthdate</th>";
									echo "<th>Status</th>";
									echo "<th>Gender</th>";
									echo "<th>Department</th>";
									echo "<th></th>";
								echo "</tr>";
								while ($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['mname']."</td>";
									echo "<td>".$row['lname']."</td>";
									echo "<td>".$row['birthdate']."</td>";
									echo "<td>".$row['status']."</td>";
									echo "<td>".$row['gender']."</td>";
									echo "<td>".$row['department']."</td>";
									echo "<td>
										<a href='update.php?id=".$row['staff_id']."' class='btn btn-primary' style='width:85px;'>View</a>
										<a href='action/addexestaff.php?sid=".$row['staff_id']."&id=".$_GET['id']."&dept=".$_GET['dept']."' class='btn btn-warning' style='width:85px;'>Add</a>
									</td>";
								echo "</tr>";
								}
							echo "</table>";
							}
						?>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>