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
							 <li><a href="#" class="active">Staff</a></li>
							 <li><a href="#">Contact</a></li>
							 <li><a href="#">About</a></li>
							 <li><a href="#">Salary_report</a></li>
							 <li><a href="#">Deduction</a></li>
							 <li><a href="#">Department</a></li>
							 <li><a href="#">Antendance</a></li>
							 <li><a href="#">Attendance Details</a></li>
							 <li><a href="#"></a></li>
						</ul>
					</nav>
		    	</aside>
		        <section class="content">
				   	  <?php

						  include_once("connectsql.php");
						  $sql = "SELECT * FROM deduction_details";
						  $result = mysqli_query($connect,$sql);
						  if(mysqli_num_rows($result) > 0){
							  echo "<table class='table' border='1'>";
							  echo "<thead>
										<tr>
										    <th>Deduction Details ID</th>
											<th>Deduction ID</th>
											<th>Attendance Details</th>
											<th>Leave ID</th>
											<th>SSS</th>
											<th>Pag-ibig</th>
											 <th>philHeath</th>
											<th>Bir</th>
										</tr>
									</thead>";
							  echo "<tbody>";
						     while($row = mysqli_fetch_assoc($result)){
							       echo "<tr><td style='text-align:center;'>".
								         $row['dedctDetails_id'].
								         "</td><td>".
										 $row['deduction_id'].
										"</td><td>".
										 $row['atenDetails_id'].
										 "</td><td>".
										  $row['leave_id'].
										   "</td><td>".
										  $row['pagibig'].
										   "</td><td>".
										  $row['philheath'].
										   "</td><td>".
										  $row['bir'].
										    
										 "</td><td>
										    <a href='deduction_details_update.php?id=".$row['staff_id']."'>
										      <button class='btn btn-primary'>Update</button>
											</a>
											<a href='deduction_details_delete.php?id=".$row['staff_id']."'>
											  <button class='btn btn-danger'>Delete</button>
											</a>
										 </td>
										 </tr>";
							 }
							 echo "</tbody>";
						  }
						?>
				</section>
			</div>
		</main>
	    <footer>

	    </footer>
	</body>
</html>
