<!DOCTYPE html>
 
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>leave Details</title>
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
							 <li><a href="#" class="active">Leave Details</a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   	 <div class="col-md-12">
				   		<br>
					  <form method="POST" action="leave_details_insert.php">
						  <div>
							<label>Staff ID:</label>
							<input type="text" name="staff_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Type Of Absence:</label>
						  <input type="text" name="typeOfAbsence" class='form-control' required>
						  </div>
						  <div>
						  <label>Department Head:</label>
						  <input type="text" name="deptHead" class='form-control' required>
						  </div>
						  <div>
						  <label>Date Start:</label>
						  <input type="text" name="dateStart" class='form-control' required>
						  </div>
						  <div>
						  <label>Date End:</label>
						  <input type="text" name="dateEnd" class='form-control' required>
						  </div>
						  <div>
						  <label>More Info:</label>
						  <input type="text" name="moreInfo" class='form-control' required>
						  </div>
						  <div>
						  <label>Extendded Leave:</label>
						  <input type="text" name="extendedLeave" class='form-control' required>
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
