<!DOCTYPE html>
<?php
    include_once("sqlcon.php");



?>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bootstrap.css">
	    <link rel="stylesheet" href="style.css">
	    <title>Admin Index</title>
	</head>
	<body>
	    <header class="admin-header">
	    	<div  class="admin-header-admin"> 
	    		<div>
		    		<label for="" style="color:white;">Admin ID</label>
		    		<div  class="admin-header-button">
			    		<input type="text" placeholder="Search">
			    		<button type="button" class="btn">
			    			<img src="images/search.png" alt="search" class="search-img">
			    		</button>
		    			<button type="button" class="btn">Logout</button>
	    			</div>
	    		</div>
			</div>
	    </header>
	    <main>
	    	<div class="container">
		    	<aside>
		    		<nav>
					 	<ul class="admin-nav-ul">
							 <li><a href="add_staff.php">Add Staff</a></li>
							 <li><a href="view_staff.php">View Staff</a></li>
							 <li><a href="attendance.php">Attendance</a></li>
							 <li><a href="schedule.php">Schedule</a></li>
							 <li><a href="job_details.php">Job Details</a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   
				</section>
			</div>
		</main>
	    <footer>

	    </footer>
	</body>
</html>
