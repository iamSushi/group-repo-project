<!DOCTYPE html>
<?php
    include_once("sqlcon.php");



?>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="bs/bootstrap.min.css">
	    <link rel="stylesheet" href="css/admin.css">
	    <title>Admin Index</title>
	</head>
	<body>
	    <header class="admin-header">
	    	<div class="admin-header-admin">
	    		<label for="" style="color:white;">Admin ID</label>
	    		<button class="btn btn-default admin-header-button">Logout</button>
	    	</div>
	    	<div>
				<nav>
				 	<ul class="admin-nav-ul">
						 <li><a href="#">Staff</a></li>
						 <li><a href="#">Contact</a></li>
						 <li><a href="#">About</a></li>
						 <li><a href="#">Salary_report</a></li>
						 <li><a href="#">Deduction</a></li>
						 <li><a href="#">Department</a></li>
						 <li><a href="#"></a></li>
						 <li><a href="#"></a></li>
					</ul>
				</nav>
			</div>
	    </header>
	    <main>
	         <div style="margin-left:25%;padding:1px 16px;height:1000px;">
			  <h2>Fixed Full-height Side Nav</h2>
			  <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
			  <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
			  <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
			  <p>Some text..</p>
			  <p>Some text..</p>
			  <p>Some text..</p>
			  <p>Some text..</p>
			  <p>Some text..</p>
			  <p>Some text..</p>
			  <p>Some text..</p>
			</div>
				    </main>
	    <footer>

	    </footer>
	</body>
</html>
