<!DOCTYPE html>
 
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>Admin_staff Index</title>
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
							 <li><a href="#" class="active">Staff</a></li>
							 <li><a href="#">Contact</a></li>
							 <li><a href="#">About</a></li>
							 <li><a href="#">Salary_report</a></li>
							 <li><a href="#">Deduction</a></li>
							 <li><a href="#">Department</a></li>
							 <li><a href="#"></a></li>
							 <li><a href="#"></a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   	 <div class="col-md-12">
				   		<br>
					  <form method="POST" action="insert.php">
					      <div>
							 <label>First Name:</label>
							 <input type="text" name="fname" class='form-control' required>
						  </div>
						  <div>
							<label>Middle Name:</label>
							<input type="text" name="mname" class='form-control' required>
						  </div>
						  <div>
						  <label>Last Name:</label>
						  <input type="text" name="lname" class='form-control' required>
						  </div>
						  <div>
						  <label>Birthdate:</label>
						  <input type="date" name="bday" class='form-control' required>
						  </div>
						  <div>
						  <label>Cellphone Number</label>
						  <input type="text" name="cellnum" class='form-control' required>
						  </div>
						  <div>
						  <label>Telephone Number</label>
						  <input type="text" name="telnum" class='form-control' required>
						  </div>
						  <div>
						  <label>Civil Status:</label>
						  <input type="text" name="status" class='form-control' required>
						  </div>
						  <div>
						  <label>Gender:</label>
						  <input type="text" name="gender" class='form-control' required>
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
