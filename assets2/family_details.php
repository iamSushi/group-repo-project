<!DOCTYPE html>
 
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>Family Details</title>
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
							 <li><a href="#" class="active">Family Details</a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   	 <div class="col-md-12">
				   		<br>
					  <form method="POST" action="family_details_insert.php">
						  <div>
							<label>Staff ID:</label>
							<input type="text" name="staff_id" class='form-control' required>
						  </div>
						  <div>
						  <label>Fathers Name:</label>
						  <input type="text" name="fathersName" class='form-control' required>
						  </div>
						  <div>
						  <label>Mothers Name:</label>
						  <input type="text" name="mothersName" class='form-control' required>
						  </div>
						  <div>
						  <label>Fathers Age:</label>
						  <input type="text" name="fathersAge" class='form-control' required>
						  </div>
						  <div>
						  <label>Mothers Age:</label>
						  <input type="text" name="mothersAge" class='form-control' required>
						  </div>
						  <div>
						  <label>Siblings:</label>
						  <input type="text" name="siblings" class='form-control' required>
						  </div>
						  <div>
						  <label>Spouse Name:</label>
						  <input type="text" name="spouseName" class='form-control' required>
						  </div>
						  <div>
						  <label>Number of Children(s):</label>
						  <input type="text" name="numOfChildren" class='form-control' required>
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
