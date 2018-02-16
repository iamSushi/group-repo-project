<!DOCTYPE html>
 
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>Deduction Details</title>
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
							 <li><a href="#" class="active">Deduction Details</a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   	 <div class="col-md-12">
				   		<br>
					  <form method="POST" action="deduction_details_insert.php">
					  	 <div>
							<label>Deduction Details ID:</label>
							<input type="text" name="deducDetails_id" class='form-control' required>
						  </div>
						  <div>
							<label>Deduction ID:</label>
							<input type="text" name="deduction_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Attendance Details ID:</label>
						  <input type="text" name="attenDetails_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Leave ID:</label>
						  <input type="text" name="leave_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Social Secuity System:</label>
						  <input type="text" name="sss" class='form-control' required>
						  </div>
						  <div>
						  <label>Pag-ibig:</label>
						  <input type="text" name="pagibig" class='form-control' required>
						  </div>
						  <div>
						  <label>PhilHealth:</label>
						  <input type="text" name="philhealth" class='form-control' required>
						  </div>
						  <div>
						  <label>BIR:</label>
						  <input type="text" name="country" class='form-control' required>
						  </div>
						  <div>
						  <label>Post Code:</label>
						  <input type="text" name="bir" class='form-control' required>
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
