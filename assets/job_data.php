<!DOCTYPE html>
 
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="bs/bootstrap.min.css">
      <link rel="stylesheet" href="css/admin.css">
      <title>JOB DETAILS</title>
  </head>
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
               <li><a href="add_staff.php">Add Staff</a></li>
               <li><a href="view_staff.php">View Staff</a></li>
               <li><a href="attendance.php">Attendance</a></li>
               <li><a href="schedule.php">Schedule</a></li>
               <li><a href="job_details.php" class="active">Job Details</a></li>
               <li><a href="#"></a></li>
               <li><a href="#"></a></li>
            </ul>
          </nav>
          </aside>
        </div>
        <section class="content">
             <div class="col-md-12">
              <br>
            <form method="POST" action="">
              <div>
             <h1>Job Details</h1>
              
              </div>
                <table>
                      <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Salary Wage</th>
                        <th>Allowance</th>
                        <th>Employment Status</th>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Maria Anders</td>
                        <td>Doctor</td>
                        <td>Nursing</td>
                        <td>70k/mo</td>
                        <td>2k</td>
                        <td>Hired</td>
                      </tr>
                  </table>




              <br>
              <button type="" class="btn btn-primary">
                <span class="glyphicon glyphicon-submit"></span><a href="" style="color:white">
                Update
              </a>
              </button>
              <button type="" class="btn btn-danger">
                <span class="glyphicon glyphicon-submit"></span><a href="" style="color:white">
                Delete
              </a>
              </button>
            </form>
          </div>
        </section>

</body>
</html>
