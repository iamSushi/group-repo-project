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
		<title>Index</title>
	</head>
	<body>
		<div class="col-2">
			<div class="row-12 sidebar" style="background-color: #D5D8DC">
				<div class="row-6">
					<div class="row-2 container text-center" style="text-decoration-color: red;">
						<h4>Department Head</h4>
					</div>
					<div class="row-7 text-center">
						<img src="img/staff.png" alt="" style="width: 200px; height: 200px;">
					</div>
				</div>
			</div>
		</div>
		<div class="col-10">
			<div class="row-1">
				<nav class="navbar navbar-inverse navbar-static-top">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					</button>
					<div class="collapse navbar-collapse navHeaderCollapse">
						<ul class="nav navbar-nav navbar-right" style="margin-right: 15px;">
							<li>
								<a href="" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="../user/index.html">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row-10">
				<div class="col-sm-12"><legend>Staffs</legend></div>
			 		<div class="col-sm-12">
			 			 
						<div class="col-sm-10 form-ni">
							<table border="1" class="table">
								<tr>
			                        <th>Staff ID</th>
			                        <th>Staff Name</th>
			                        <th>Birthdate</th>
			                        <th>Contact Number</th>
			                        <th>Status</th>
			                        <th>Gender</th>
			                        <th></th>
			                      </tr>
			                      <tr>
			                        <td>001</td>
			                        <td>James Kenneth</td>
			                        <td>1997-02-04</td>
			                        <td>+639363732919</td>
			                        <td>Single</td>
			                        <td>Male</td>
			                        <td><a href="work.php" div class="">
										<button class="btn btn-dark" type="button">View  <span class="glyphicon glyphicon-send"></span></button>
									</div></td>
			                    </tr>
			                     <tr>
			                        <td>002</td>
			                        <td>Joshua Brian</td>
			                        <td>1998-02-04</td>
			                        <td>+639363732919</td>
			                        <td>Single</td>
			                        <td>Male</td>
			                        <td><a href="work.php" div class="">
										<button class="btn btn-dark" type="button">View  <span class="glyphicon glyphicon-send"></span></button>
									</div></td>
			                    </tr>
			                     <tr>
			                        <td>003</td>
			                        <td>John Christian</td>
			                        <td>1996-02-04</td>
			                        <td>+639363732919</td>
			                        <td>Single</td>
			                        <td>Male</td>
			                        <td><a href="work.php" div class="">
										<button class="btn btn-dark" type="button">View  <span class="glyphicon glyphicon-send"></span></button>
									</div></td>
			                    </tr>
			                     <tr>
			                        <td>0014/td>
			                        <td>Zek Ezikiel</td>
			                        <td>1996-02-04</td>
			                        <td>+639363732919</td>
			                        <td>Single</td>
			                        <td>Female</td>
			                        <td><a href="work.php" div class="">
										<button class="btn btn-dark" type="button">View  <span class="glyphicon glyphicon-send"></span></button>
									</div></td>
			                    </tr>
			                     <tr>
			                        <td>005</td>
			                        <td>Maria Anders</td>
			                        <td>1998-02-04</td>
			                        <td>+639363732919</td>
			                        <td>Single</td>
			                        <td>Female</td>
			                        <td><a href="work.php" div class="">
										<button class="btn btn-dark" type="button">View  <span class="glyphicon glyphicon-send"></span></button>
									</div></td>
			                    </tr>
							</table>
						</div>
					</div>
					
				</div>
			</div>
			</div>
		</div>
	</body>
</html>