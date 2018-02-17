<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Job Details</title>
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
		    		<div  class="admin-header-button" style="float:right;">
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
						<li><a href="view_staff.php">View Staff</a></li>
						<li><a href="attendance.php">Attendance</a></li>
						<li><a href="schedule.php">Schedule</a></li>
						<li><a href="job_details.php"  class="active">Job Details</a></li>
					</ul>
				</div>
				<div class="col-sm-10 content" >
					<div class="row">
						<div class="col-sm-12">
							 <form method="POST" action="job_details_insert.php">
						  <div>
							<label>Staff ID:</label>
							<input type="text" name="staff_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Salary Wage:</label>
						  <input type="text" name="salaryWage" class='form-control' required>
						  </div>
						  <div>
						  <label>Department:</label>
						  <input type="text" name="department" class='form-control' required>
						  </div>
						  <div>
						  <label>Allowance:</label>
						  <input type="text" name="allowance" class='form-control' required>
						  </div>
						  <div>
						  <label>Employment Status:</label>
						  <input type="text" name="employmentStatus" class='form-control' required>
						  </div>
						  <div>
						  <label>Department Head:</label>
						  <input type="text" name="deptHead" class='form-control' required>
						  </div>
						   <br>
						  <button type="submit" class="btn btn-primary">
						  	<span class="glyphicon glyphicon-submit"></span>
						  	Submit
						  </button>
					  </form>
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