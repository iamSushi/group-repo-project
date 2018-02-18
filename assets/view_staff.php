<!DOCTYPE html>
 
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>VIEW STAFF</title>
	</head>
	<body>
	    <header class="admin-header">
	    	<div  class="admin-header-admin"> 
	    		<div>
		    		<label for="" style="color:white;">VIEW STAFF</label>
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
							 <li><a href="add_staff.php">Add Staff</a></li>
							 <li><a href="view_staff.php" class="active">View Staff</a></li>
							 <li><a href="attendance.php">Attendance</a></li>
							 <li><a href="schedule.php">Schedule</a></li>
							 <li><a href="job_details.php">Job Details</a></li>
							 <li><a href="#"></a></li>
							 <li><a href="#"></a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">"<table class='table' border='1'>
							  <thead>
										<tr>
										    <th>Name</th>
											<th>Birthday</th>
											<th>Contact Number</th>
											<th>Gender</th>
											<th>Status</th>
										</tr>
									</thead>
							  <tbody>
							  	<tr><td style='text-align:center>
								         $row['dedctDetails_id'].
								         "</td><td>
								         	
								         </td><td>
								         	
								         </td><td>
								         	
								         </td><td>
								         	
								         </td><td>
								
										    
										      <button class='btn btn-primary'>Update</button>
											</a>
											
											  <button class='btn btn-danger'>Delete</button>
											</a>
										 </td>
										 </tr>
							 
							 </tbody>
						  
						
				</section>
			</div>
		</main>
	    <footer>

	    </footer>
	</body>
</html>
