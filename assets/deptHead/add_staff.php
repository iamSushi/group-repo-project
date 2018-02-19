<!DOCTYPE html>
 
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>ADD STAFF</title>
	</head>
	<body>
	    <header class="admin-header">
	    	<div  class="admin-header-admin"> 
	    		<div>
		    		<label for="" style="color:white;"><a href="staff.php">Department Head</a></label>
		    		<div  class="admin-header-button">
			    		<input type="text" placeholder="Search">
			    		<button type="button" class="btn">
			    			<img src="images/search.png" alt="search" class="search-img" width="20px">
			    		</button>
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
							 <li><a href="add_staff.php" class="active">Add Staff</a></li>
							 <li><a href="view_staff.php">View Staff</a></li>
							 <li><a href="attendance.php">Attendance</a></li>
							 <li><a href="schedule.php">Schedule</a></li>
							 <li><a href="job_details.php">Job Details</a></li>
							 <li><a href="#"></a></li>
							 <li><a href="#"></a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   	 <div class="col-md-12">
				   		<br>
					  <form method="POST" action="contact_person_insert.php">
						  <div>
						  <label>Name:</label>
						  <input type="text" name="name" class='form-control' required>
						  </div>
						  <div>
						  <label>Birthdate:</label>
						  <input type="text" name="birthdate" class='form-control' required>
						  </div>
						  <div>
						  <label>Gender:</label>
						  <input type="text" name="gender" class='form-control' required>
						  </div>
						  <div>
						  <label>Marital Status:</label>
						  <input type="text" name="status" class='form-control' required>
						  </div>
						  <div>
						  <label>Contact Number:</label>
						  <input type="text" name="contactNum" class='form-control' required>
						  </div>
						  <div>
						  <label>Address:</label>
						  <input type="text" name="address" class='form-control' required>
						  </div>
						  <div>
						  <label>Email:</label>
						  <input type="text" name="email" class='form-control' required>
						  </div>
						  <div>
						  <label>Spouse Name:</label>
						  <input type="text" name="spouse" class='form-control' required>
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
