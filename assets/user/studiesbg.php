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
		<title>Education</title>
	</head>
	<body>
		<div class="col-2">
			<div class="row-12 sidebar">
				<div class="row-6">
					<div class="row-2 container text-center">
						<p>Your Profile</p>
					</div>
					<div class="row-7 text-center">
						<img src="img/avatar.png" alt="" style="width: 200px; height: 200px;">
					</div>
					<div class="row-3 container text-center">
						<p>James Sinadjan</p>
						<p>Staff</p>
					</div>
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
							<li><a href="basicinfo.php">Basic Information</a></li>
							<li><a href="parentsdetails.php">Parents Details</a></li>
							<li><a href="familydetails.php">Family Details</a></li>
							<li class="active"><a href="studiesbg.php">Studies Background</a></li>
							<li><a href="contactperson.php">Contact Person</a></li>
							<li><a href="others.php">Others</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right" style="margin-right: 15px;">
							<li>
								<a href="" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="about_me.php">Your Profile</a></li>
									<li><a href="settings.php">Settings</a></li>
									<li><a href="index.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row-10">
				<div class="col-6">
					<div class="row-12">
						<div class="container form-group">
							<legend><h2>College Background</h2></legend>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class=" col-11">
								<label for="">Course</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
									<input class="form-control" type="text" required placeholder="course">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class=" col-11">
								<label for="">School name</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
									<input class="form-control" type="text" required placeholder="school name">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class=" col-11">
								<label for="">School address</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
									<input class="form-control" type="text" required placeholder="school address">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-5">
								<label for="">State</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required placeholder="state">
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">City</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required placeholder="city">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-5">
								<label for="">Country</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required placeholder="country">
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">Postal code</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text"  required placeholder="postal code">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-5">
								<label for="">Year graduated</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<input class="form-control" type="date" required placeholder="year graduated">
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">Average</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
									<input class="form-control" type="text" required placeholder="average">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-11">
								<label for="">Graduation standing</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
									<input class="form-control" type="text" required placeholder="standing">
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
					</div>
				</div>
				<div class="col-6">
					<div class="row-12">
						<div class="container form-group">
							<legend><h2>High School Background</h2></legend>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-11">
								<label for="">School name</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
									<input class="form-control" type="text" required placeholder="school name">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-11">
								<label for="">School address</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
									<input class="form-control" type="text" required  placeholder="school address">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-5">
								<label for="">State</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
									<input class="form-control" type="text" required placeholder="state">
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">City</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-plane"></i></span>
									<input class="form-control" type="text" required placeholder="city">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-5">
								<label for="">Country</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
									<input class="form-control" type="text" required placeholder="country">
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">Postal code</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
									<input class="form-control" type="text"  required placeholder="zip code">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="margin-bottom: 15px;">
							<div class="col-5">
								<label for="">Year graduated</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									<input class="form-control" type="text" required placeholder="year graduated" >
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">Average</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
									<input class="form-control" type="text" required placeholder="average">
								</div>
							</div>
						</div>
						<div class="container row-1 form-group" style="padding-top: 30px;">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="">Check if this is your current address!
								</label>
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
					</div>
				</div>
			</div>
		</div>
	</body>
</html>