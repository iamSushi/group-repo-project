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
			 			 <?php

	  include_once("connection.php");
	  $sql = "SELECT * FROM staff WHERE type='Staff'";
	  $result = mysqli_query($connect,$sql);
	  if(mysqli_num_rows($result) > 0){
		  echo "<table class='table' border='1'>";
		  echo "<thead>
					<tr>
					    <th>Staff ID</th>
						<th>Family Name</th>
						<th>Middle Name</th>
						<th>Birthdate</th>
						<th>Cellphone Number</th>
						<th>Telephone Number</th>
						<th>Email</th>
						<th>Status</th>
						<th>Gender</th>
						<th><th>

					</tr>
				</thead>";
		  echo "<tbody>";
	     while($row = mysqli_fetch_assoc($result)){
		       echo "<tr><td style='text-align:center;'>".
			         $row['staff_id'].
					"</td><td>".
					 $row['fname'].
					"</td><td>".
					$row['mname'].
					"</td><td>".
					$row['lname'].
					"</td><td>".
					$row['birthdate'].
					"</td><td>".
					$row['cellnum'].
					"</td><td>".
					$row['telnum'].
					"</td><td>".
					$row['email'].
					"</td><td>".
					$row['status'].
					"</td><td>".
					$row['gender'].
					"</td><td>".
					$row['type'].
					"</td><td>".
					$row['position'].
					"</td><td>".


					 
					 
					 
					 "</td>
					 <td>
					    <a href='updateschedule.php?id=".$row['sched_id']."'>
					      <button class='btn btn-primary'>Update</button>
						</a>
						<a href='delete.php?id=".$row['sched_id']."'>
						  <button class='btn btn-danger'>Delete</button>
						</a>
					 </td>
					 </tr>";
		 }
		 echo "</tbody>";
	  }
	?>
			</div>
			</div>
		</div>
	</body>
</html>