<!DOCTYPE html>
 
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>Attendance Details</title>
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
							 <li><a href="#" class="active">Attendance Details</a></li>
							 <li><a href="#"></a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   	 <div class="col-md-12">
				   		<br>
					  <form method="POST" action="attendance_details_insert.php">
					      <div>
							 <label>Attendance ID:</label>
							 <input type="text" name="attend_id" class='form-control' required>
						  </div>
						  <div>
							<label>Schedule Details ID:</label>
							<input type="text" name="schedDetails_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Tardiness:</label>
						  <input type="text" name="tardiness" class='form-control' required>
						  </div>
						  <div>
						  <label>Overtime:</label>
						  <input type="text" name="overtime" class='form-control' required>
						  </div>
						  <div>
						  <label>Absences:</label>
						  <input type="text" name="absences" class='form-control' required>
						  </div>
						  <div>
						  <label>Holiday:</label>
						  <input type="text" name="holiday" class='form-control' required>
						  </div>
						  <div>
						  <label>Holiday Name:</label>
						  <input type="text" name="holidayName" class='form-control' required>
						  </div>
						  <div>
						  <label>Daily Total Hours:</label>
						  <input type="text" name="dailyTotalHours" class='form-control' required>
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
