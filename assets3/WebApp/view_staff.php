<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Staff</title>
	 <link rel="stylesheet" href="bootstrap.css">
	 <link rel="stylesheet" href="styletry.css">
	 <script src="bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
		<header class="headerhe">
			<div class="row">
				<div class="col-sm-12 headerni">
					<label for="" style="color: white;">Admin ID</label>
		    		<div  class="header-button" style="float:right;">
			    		<input type="text" placeholder="Search">
			    		<button type="button" class="btn">
			    			<img src="images/search.png" alt="search" class="search-img" width="20px">
			    		</button>
		    			<button type="button" class="btn">Logout</button>
	    			</div>
				</div>
			</div>
		</header>
		<main>
			<div class="row">
				<div class="col-sm-2 sidebar" >
					<ul class="nav-ul">
						<li><a href="add_staff.php">Add Staff</a></li>
						<li><a href="view_staff.php" class="active">View Staff</a></li>
						<li><a href="attendance.php">Attendance</a></li>
						<li><a href="schedule.php">Schedule</a></li>
						<li><a href="job_details.php">Job Details</a></li>
					</ul>
				</div>
				<div class="col-sm-10 content" >
					<div class="row">
						<div class="col-sm-12">
						<?php

						  include_once("connectsql.php");
						  $sql = "SELECT * FROM staff";
						  $result = mysqli_query($connect,$sql);
						  if(mysqli_num_rows($result) > 0){
							  echo "<table class='table' border='1'>";
							  echo "<thead>
										<tr>
										    <th>Staff ID</th>
											<th>Name</th>
											<th>Birthday Date</th>
											<th>Cell Number</th>
											<th>Telephone Number</th>
											<th>Status</th>
											<th>Gender</th>
											 
										</tr>
									</thead>";
							  echo "<tbody>";
						     while($row = mysqli_fetch_assoc($result)){
							       echo "<tr><td style='text-align:center;'>".
								         $row['staff_id'].
										"</td><td>".
										 $row['fname'].' '.
										 $row['mname'].' '.
										 $row['lname'].
										 "</td><td>".
										  $row['birthdate'].
										   "</td><td>".
										  $row['cellnum'].
										   "</td><td>".
										  $row['telnum'].
										   "</td><td>".
										  $row['status'].
										   "</td><td>".
										  $row['gender'].
										 "</td><td>
										    <a href='staff_update.php?id=".$row['staff_id']."'>
										      <button class='btn btn-primary'>Update</button>
											</a>
											<a href='staff_delete.php?id=".$row['staff_id']."'>
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
			</div>
		</main>
		<footer>
			
		</footer>
	</div>
</body>
</html>