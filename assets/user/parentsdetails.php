<?php
	include('../user/action/session.php');
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
		<title>Parents Details</title>
	</head>
	<body>
		<div class="col-2">
			<div class="row-12 sidebar">
				<div class="row-6">
					<?php
						$space = " ";
						$email = $_SESSION['email'];
						$id = $_GET['id'];
						include_once("action/session.php");
						$query = "SELECT * FROM staff WHERE staff_id = '$id'";
						$result = mysqli_query($connect,$query);
						if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)):
					?>
					<form action="">
						<div class="row-2 container text-center">
							<p>Your Profile</p>
						</div>
						<div class="row-7 text-center">
							<img src="img/avatar.png" alt="" style="width: 200px; height: 200px;">
						</div>
						<div class="row-3 container text-center">
							<p><?php echo $row['fname'].$space.$row['lname'] ?></p>
							<p><?php echo $row['position'] ?></p>
						</div>
					</form>
					<?php endwhile;} ?>
				</div>
				<div class="row-5 container text-center">
					<p>" My Motto "</p>
					<p>It's important to celebrate your failures as much as your successes. If you celebrate your failures really well, and if you get to the motto and say, 'Wow, I failed, I tried, I was wrong, I learned something,' then you realize you have no fear, and when your fear goes away, you can move the world.</p>
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
							<li><a href="basicinfo.php<?php echo '?id='.$id.''?>">Basic Information</a></li>
							<li class="active"><a href="parentsdetails.php<?php echo '?id='.$id.''?>">Parents Details</a></li>
							<li><a href="familydetails.php<?php echo '?id='.$id.''?>">Family Details</a></li>
							<li><a href="studiesbg.php<?php echo '?id='.$id.''?>">Studies Background</a></li>
							<li><a href="contactperson.php<?php echo '?id='.$id.''?>">Contact Person</a></li>
							<li><a href="others.php<?php echo '?id='.$id.''?>">Others</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right" style="margin-right: 15px;">
							<li>
								<a href="" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="about_me.php<?php echo '?id='.$id.''?>">Your Profile</a></li>
									<li><a href="settings.php<?php echo '?id='.$id.''?>">Settings</a></li>
									<li><a href="index.php?logout='1'" style="color: red !important;">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row-10">
				<div class="col-6">
					<div class="row-12">
						<div class="row-6">
							<?php
								$space = " ";
								$id = $_GET['id'];
								// include_once("action/update_basicinfo.php");
								include_once("action/session.php");
								$query = "SELECT * FROM family_details WHERE staff_id = '$id'";

								$result = mysqli_query($connect,$query);
								if(mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_assoc($result)):
							?>
							<div class="container form-group">
								<legend><h2>Father's Details</h2></legend>
							</div>
							<div class="container row-2 form-group" style="margin-bottom: 15px;">
								<div class=" col-11">
									<label for="">Firstname</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" required placeholder="firstname" value="<?php echo $row['fathers_fname'] ?>">
									</div>
								</div>
							</div>
							<div class="container row-2 form-group" style="margin-bottom: 15px;">
								<div class=" col-5">
									<label for="">Middlename</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" required placeholder="middlename" value="<?php echo $row['fathers_mname'] ?>">
									</div>
								</div>
								<div class="col-1"></div>
								<div class="col-5">
									<label for="">Surname</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" required placeholder="surname" value="<?php echo $row['fathers_lname'] ?>">
									</div>
								</div>
							</div>
							<div class="container row-2 form-group" style="margin-bottom: 15px;">
								<div class="col-5">
									<label for="">Birthdate</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
										<input class="form-control" type="date" required value="<?php echo $row['fathers_birthdate'] ?>">
									</div>
								</div>
								<div class="col-1"></div>
								<div class="col-5">
									<label for="">Contact number</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
										<input class="form-control" type="text" required placeholder="+639 *** ****" value="<?php echo $row['fathers_contnum'] ?>">
									</div>
								</div>
							</div>
							<div class="container row-2 form-group" style="margin-bottom: 15px;">
								<div class=" col-11">
									<label for="">Occupation</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" required placeholder="occupation" value="<?php echo $row['fathers_occupation'] ?>">
									</div>
								</div>
							</div>
							<div class="container row-1 form-group" style="margin-bottom: 15px;">
								<button class="btn btn-dark" type="button" data-toggle="modal" data-target="#update">Update  <span class="glyphicon glyphicon-send"></span></button>
								
								<div class="modal fade" id="update">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<h2>Update Success!</h2>
											</div>
											<div class="modal-footer">
												<button class="btn btn-dark" type="button" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile;} ?>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row-12">
						<div class="row-6">
							<?php
								$space = " ";
								$id = $_GET['id'];
								// include_once("action/update_basicinfo.php");
								include_once("action/session.php");
								$query = "SELECT * FROM family_details WHERE staff_id = '$id'";

								$result = mysqli_query($connect,$query);
								if(mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_assoc($result)):
							?>
							<div class="container form-group">
								<legend><h2>Mother's Details</h2></legend>
							</div>
							<div class="container row-2 form-group" style="margin-bottom: 15px;">
								<div class=" col-11">
									<label for="">Firstname</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" required placeholder="firstname" value="<?php echo $row['mothers_fname'] ?>">
									</div>
								</div>
							</div>
							<div class="container row-2 form-group" style="margin-bottom: 15px;">
								<div class=" col-5">
									<label for="">Middlename</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" required placeholder="middlename" value="<?php echo $row['mothers_mname'] ?>">
									</div>
								</div>
								<div class="col-1"></div>
								<div class=" col-5">
									<label for="">Surname</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" required placeholder="surname" value="<?php echo $row['mothers_lname'] ?>">
									</div>
								</div>
							</div>
							<div class="container row-2 form-group" style="margin-bottom: 15px;">
								<div class="col-5">
									<label for="">Birthdate</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
										<input class="form-control" type="date" required value="<?php echo $row['mothers_birthdate'] ?>">
									</div>
								</div>
								<div class="col-1"></div>
								<div class="col-5">
									<label for="">Contact number</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
										<input class="form-control" type="text" required placeholder="+639 *** ****" value="<?php echo $row['mothers_contnum'] ?>">
									</div>
								</div>
							</div>
							<div class="container row-2 form-group" style="margin-bottom: 15px;">
								<div class=" col-11">
									<label for="">Occupation</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" required placeholder="occupation" value="<?php echo $row['mothers_occupation'] ?>">
									</div>
								</div>
							</div>
							<div class="container row-1 form-group" style="margin-bottom: 15px;">
								<button class="btn btn-dark" type="button" data-toggle="modal" data-target="#update">Update  <span class="glyphicon glyphicon-send"></span></button>
								
								<div class="modal fade" id="update">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<h2>Update Success!</h2>
											</div>
											<div class="modal-footer">
												<button class="btn btn-dark" type="button" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile;} ?>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>