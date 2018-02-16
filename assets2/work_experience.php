<!DOCTYPE html>
 
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>Work Experience</title>
	</head>
	<body>
	    <header class="admin-header">
	    	<div  class="admin-header-admin"> 
	    		<div>
		    		<label for="" style="color:white;">Admin ID</label>
		    		<div  class="admin-header-button">
			    		<input type="text" placeholder="Search">
			    		<button type="button">SR</button>
		    			<button type="button">Logout</button>
	    			</div>
	    		</div>
			</div>
	    </header>
	    <main>
	    	<div>
		    	<aside>
		    		<nav>
					 	<ul class="admin-nav-ul">
							 <li><a href="#">Staff</a></li>
							 <li><a href="#">Contact</a></li>
							 <li><a href="#">About</a></li>
							 <li><a href="#">Salary_report</a></li>
							 <li><a href="#">Deduction</a></li>
							 <li><a href="#">Department</a></li>
							 <li><a href="#">Antendance</a></li>
							 <li><a href="#">Attendance Details</a></li>
							 <li><a href="#">College Background</a></li>
							 <li><a href="#">Contact Person</a></li>
							 <li><a href="#">Current Address</a></li>
							 <li><a href="#">Deduction Details</a></li>
							 <li><a href="#">Family Details</a></li>
							 <li><a href="#">High School Background</a></li>
							 <li><a href="#">Job Details</a></li>
							 <li><a href="#">Leave Details</a></li>
							 <li><a href="#">Permanent Address</a></li>
							 <li><a href="#">Salary Details</a></li>
							 <li><a href="#">Salary Details</a></li>
							 <li><a href="#">Schedule</a></li>
							 <li><a href="#">Schedule Details</a></li>
							 <li><a href="#" class="active">Work Experiance </a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   	 <div class="col-md-12">
				   		<br>
					  <form method="POST" action="work_experience_insert.php">
						  <div>
							<label>Staff ID:</label>
							<input type="text" name="staff_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Company Name:</label>
						  <input type="text" name="companyName" class='form-control' required>
						  </div>
						  <div>
						  <label>Employer Name:</label>
						  <input type="text" name="employerName" class='form-control' required>
						  </div>
						  <div>
						  <label>Employer Address:</label>
						  <input type="text" name="employerAdd" class='form-control' required>
						  </div>
						  <div>
						  <label>Employer Cellphone Number:</label>
						  <input type="text" name="employerCellNum" class='form-control' required>
						  </div>
						  <div>
							<label>Employer Telephone Number:</label>
							<input type="text" name="employerTelNum" class='form-control' required>
						  </div>
						  <div>
						  <label>Company Start:</label>
						  <input type="date" name="companyStart" class='form-control' required>
						  </div>
						  <div>
						  <label>Company End:</label>
						  <input type="date" name="companyEnd" class='form-control' required>
						  </div>
						  <div>
						  <label>Job Title:</label>
						  <input type="text" name="jobTitle" class='form-control' required>
						  </div>
						  <div>
						  <label>Department:</label>
						  <input type="text" name="department" class='form-control' required>
						  </div>
						  <div>
							<label>Work Area:</label>
							<input type="text" name="workArea" class='form-control' required>
						  </div>
						  <div>
						  <label>State:</label>
						  <input type="text" name="state" class='form-control' required>
						  </div>
						  <div>
						  <label>City:</label>
						  <input type="text" name="city" class='form-control' required>
						  </div>
						  <div>
						  <label>Country:</label>
						  <input type="text" name="country" class='form-control' required>
						  </div>
						  <div>
						  <label>More Information:</label>
						  <input type="text" name="moreInfo" class='form-control' required>
						  </div>
						  
						  
						   <br>
						  <button type="submit" class="btn btn-primary">
						  	<span class="glyphicon glyphicon-submit"></span>
						  	Submit
						  </button>
					  </form>
				  </div>
				</section>
			</div>
		</main>
	    <footer>

	    </footer>
	</body>
</html>
