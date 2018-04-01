<?php
	include('action/session.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="icon" href="img/logo.png">
	<title>Homepage</title>
</head>

<body>
	<div class="col-3">
		<div class="bg container">
			<div class="row-5 text-center">
				<img class="logo" src="img/logo.png" alt="">
			</div>
			<div class="row-7 text-center">
				<div class="row-12">
					<div class="row-3 container" style="background-color: rgba(74, 55, 55, 0.2); padding: 25px;">
						<div class="sidebar-text">
							<p>" You don't appreciate life until you get to the other side. Like lying in a hospital bed. Hospitaline is no place to
								be sick "</p>
						</div>
					</div>
					<div class="row-6 container" style="background-color: rgba(74, 55, 55, 0.2); padding: 25px;">
						<div class="sidebar-text">
							<p>For just a few dollars a dose, vaccines save lives and help reduce poverty. Unlike medical treatment, they provide a
								lifetime of protection from deadly and debilitating disease. They are safe and effective. They cut healthcare and treatment
								costs, reduce the number of hospital visits, and ensure healthier children, families and communities.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-9">
		<div class="row-2">
			<div class="container">
				<div class="float-left">
					<a href="">login</a>
					<span>/</span>
					<a href="">register</a>
				</div>
				<div class="float-right">
					<button class="btn btn-dark" type="button" data-toggle="modal" data-target="#admin">Admin</button>
					<button class="btn btn-dark" type="button" data-toggle="modal" data-target="#deptHead">Dept. Head</button>

					<div class="modal fade" id="admin">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1>Admin Login</h1>
								</div>
								<div class="modal-body">
									<form action="index.php" method="post">
										<div class="container">
											<?php include('action/errors.php'); ?>
											<div class="container form-group">
												<label for="username">Email Address</label>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-user"></i>
													</span>
													<input type="text" class="form-control" placeholder="your@email.com" name="admin_email">
												</div>
											</div>
											<div class="container form-group">
												<label>Password</label>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-lock"></i>
													</span>
													<input type="password" class="form-control" placeholder="Password" name="admin_password">
												</div>
											</div>
											<div class="container form-group">
												<button class="btn btn-dark" type="submit" name="admin_login">Login
														<span class="glyphicon glyphicon-send"></span>
												</button>
												<button class="btn btn-dark" type="button">Cancel</button>
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button class="btn btn-dark" type="button" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="deptHead">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1>Department Head</h1>
								</div>
								<div class="modal-body">
									<form action="index.php" method="post">
										<div class="container">
											<?php include('action/errors.php'); ?>
											<div class="container form-group">
												<label>Email Address</label>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-user"></i>
													</span>
													<input type="text" class="form-control" placeholder="your@email.com" name="head_email">
												</div>
											</div>
											<div class="container form-group">
												<label>Password</label>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-lock"></i>
													</span>
													<input type="password" class="form-control" placeholder="Password" name="head_password">
												</div>
											</div>
											<div class="container form-group">
												<label for="">Department</label>
												<select class="form-control" name="dept">
													<!-- <option value="Ophthalmology">Ophthalmology</option>
													<option value="Accident and emergency">Accident and emergency</option>
													<option value="Cardiology">Cardiology</option> -->
													<?php
													include_once("action/mysqlconn.php");
													$sql = "SELECT * FROM department";
													$result = mysqli_query($connect,$sql);
													if(mysqli_num_rows($result) > 0){
													while($row = mysqli_fetch_assoc($result)){
													?>
													<option  value="<?php echo $row['dept_name'] ?>"><?php echo $row['dept_name']?></option>	
													<?php
																	}
																}
													?>
												</select>
											</div>
											<div class="container form-group">
												<button class="btn btn-dark" type="submit" name="head_login">Login
														<span class="glyphicon glyphicon-send"></span>
												</button>
												<button class="btn btn-dark" type="button">Cancel</button>
											</div>
										</div>
									</form>
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
		<div class="row-6">
			<div class="row-12">
				<div class="col-6">
					<div class="row-12">
						<form action="index.php" method="post">
							<div class="container">
								<h2>login here . . .</h2>
							</div>
							<div class="container">
								<div class="container form-group">
									<?php include('action/errors.php'); ?>
									<div class=" col-11">
										<label for="">Username</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-user"></i>
											</span>
											<input class="form-control" type="text" name="email" placeholder="Email">
										</div>
									</div>
								</div>
								<div class="container form-group">
									<div class=" col-11">
										<label for="">Password</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-lock"></i>
											</span>
											<input class="form-control" type="password" name="password" placeholder="Password">
										</div>
									</div>
								</div>
								<div class="container form-group">
									<button type="submit" class="btn btn-dark" name="login">Login
											<span class="glyphicon glyphicon-send"></span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-6">
					<div class="row-12">
						<div class="container">
							<h2>or you can register here . . .</h2>
						</div>
						<form action="index.php" method="post">
							<!-- <div class="container row-2 form-group">
								<div class="col-5">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span>
										<input class="form-control" type="text" required placeholder="Firstname">
									</div>
								</div>
								<div class="col-1"></div>
								<div class="col-5">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span>
										<input class="form-control" type="text" required placeholder="Surname">
									</div>
								</div>
							</div> -->
							<div class="container">
								<div class="container  form-group">
									<div class="col-11">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-user"></i>
											</span>
											<input class="form-control" type="text" name="fname" required placeholder="Firstname">
										</div>
									</div>
								</div>
								<div class="container  form-group">
									<div class="col-11">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-user"></i>
											</span>
											<input class="form-control" type="text" name="sname" required placeholder="Surname">
										</div>
									</div>
								</div>
								<div class="container  form-group">
									<div class="col-11">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-envelope"></i>
											</span>
											<input class="form-control" type="text" name="reg_email" required placeholder="Email Address">
										</div>
									</div>
								</div>
								<div class="container  form-group">
									<div class="col-11">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-lock"></i>
											</span>
											<input class="form-control" type="password" name="reg_password" required placeholder="Password">
										</div>
									</div>
								</div>
								<div class="container form-group">
									<div class="col-11">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-lock"></i>
											</span>
											<input class="form-control" type="password" name="reg_repassword" required placeholder="Retype password">
										</div>
									</div>
								</div>
								<div class="container form-group">
									<div class="col-11">
										<div class="input-group">
											<button type="submit" class="btn btn-dark" name="register">Register
													<span class="glyphicon glyphicon-send"></span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
		<div class="row-3" style="background-color:#141719;">
			<div class="row-12 text-center">
				<div class="row-4 container">
					<ul class="list-inline container">
						<li class="foot-link">
							<a href="">HOME</a>
						</li>
						<li class="foot-link">
							<a href="">ABOUT</a>
						</li>
						<li class="foot-link">
							<a href="">SUPPORT</a>
						</li>
						<li class="foot-link">
							<a href="">CONTACT US</a>
						</li>
					</ul>
				</div>
				<div class="row-4 container">
					<ul class="list-inline">
						<li class="foot-link">
							<a href="">
								<img src="img/fb.png" alt="" style="margin-right:15px;">
							</a>
						</li>
						<li class="foot-link">
							<a href="">
								<img src="img/gg.png" alt="" style="margin-right:15px;">
							</a>
						</li>
						<li class="foot-link">
							<a href="">
								<img src="img/insta.png" alt="" style="margin-right:15px;">
							</a>
						</li>
						<li class="foot-link">
							<a href="">
								<img src="img/tt.png" alt="" style="margin-right:15px;">
							</a>
						</li>
					</ul>
				</div>
				<div class="row-4 container">
					<ul class="list-inline">
						<li class="foot-link">
							<a href="">Slack</a>
						</li>
						<li class="foot-link">
							<a href="">Trello</a>
						</li>
						<li class="foot-link">
							<a href="">Wordpress</a>
						</li>
						<li class="foot-link">
							<a href="">Github</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row-1" style="background-color:#23272b;">
			<div class="text-center container" style="margin-top: 5px;color:#b4ae8d;">
				<p>Copyright 2018 - All Rights Reserved - Design by: iamSushi</p>
			</div>
		</div>
	</div>
</body>

</html>