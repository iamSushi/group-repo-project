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
		<title>Contact</title>
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
							<li><a href="studiesbg.php">Studies Background</a></li>
							<li class="active"><a href="contactperson.php">Contact Person</a></li>
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
							<legend><h2>First contact person</h2></legend>
						</div>
						<div class="container row-1 form-group">
							<div class=" col-11">
								<label for="">Firstname</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
						</div>
						<div class="container row-1 form-group">
							<div class=" col-5">
								<label for="">Middlename</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
							<div class="col-1"></div>
							<div class=" col-5">
								<label for="">Surname</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
						</div>
						<div class="container row-1 form-group">
							<div class="col-5">
								<label for="">Birthdate</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
									<input class="form-control" type="date" required>
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">Gender</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
									<select class="form-control" required="">
	                                    <option value="">Male</option>
	                                    <option value="">Female</option>
	                                </select>
								</div>
							</div>
						</div>
						<div class="container row-1 form-group">
							<div class="col-11">
								<label for="">Email address</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
						</div>
						<div class="container row-1 form-group">
							<div class="col-5">
								<label for="">Contact number</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">Status</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-heart-empty"></i></span>
									<select class="form-control">
	                                    <option value="">Single</option>
	                                    <option value="">Married</option>
	                                    <option value="">Divorced</option>
	                                    <option value="">Widowed</option>
	                                </select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row-12">
						<div class="container form-group">
							<legend><h2>Second contact person (Optional)</h2></legend>
						</div>
						<div class="container row-1 form-group">
							<div class=" col-11">
								<label for="">Firstname</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
						</div>
						<div class="container row-1 form-group">
							<div class=" col-5">
								<label for="">Middlename</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
							<div class="col-1"></div>
							<div class=" col-5">
								<label for="">Surname</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
						</div>
						<div class="container row-1 form-group">
							<div class="col-5">
								<label for="">Birthdate</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
									<input class="form-control" type="date"  required>
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">Gender</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
									<select class="form-control" required="">
	                                    <option value="">Male</option>
	                                    <option value="">Female</option>
	                                </select>
								</div>
							</div>
						</div>
						<div class="container row-1 form-group">
							<div class="col-11">
								<label for="">Email address</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input class="form-control" type="email" required>
								</div>
							</div>
						</div>
						<div class="container row-1 form-group">
							<div class="col-5">
								<label for="">Contact number</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
									<input class="form-control" type="text" required>
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-5">
								<label for="">Status</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-heart-empty"></i></span>
									<select class="form-control">
	                                    <option value="">Single</option>
	                                    <option value="">Married</option>
	                                    <option value="">Divorced</option>
	                                    <option value="">Widowed</option>
	                                </select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-1">
				<div class="container row-1">
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
	</body>
</html>