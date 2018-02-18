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
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
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
               <li><a href="view_staff.php" class="active">View Staff</a></li>
               <li><a href="attendance.php">Attendance</a></li>
               <li><a href="schedule.php">Schedule</a></li>
               <li><a href="job_details.php">Job Details</a></li>
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
             <h1>Staff</h1>
              
              </div>
                <table>
                      <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Birthdate</th>
                        <th>Contact Number</th>
                        <th>Status</th>
                        <th>Gender</th>
                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Maria Anders</td>
                        <td>1998-02-04</td>
                        <td>+639363732919</td>
                        <td>Single</td>
                        <td>Female</td>
                        <td>
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
                        </td>
                      </tr>

                      <tr>
                        <td>002</td>
                        <td>Joshua Brian</td>
                        <td>2000-05-20</td>
                        <td>+639363732918</td>
                        <td>Single</td>
                        <td>Male</td>
                        <td>
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
                        </td>
                      </tr>
                      <tr>
                        <td>003</td>
                        <td>John Christian</td>
                        <td>1996-02-06</td>
                        <td>+639363732917</td>
                        <td>Single</td>
                        <td>Male</td>
                        <td>
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
                        </td>
                      </tr>
                      <tr>
                        <td>004</td>
                        <td>James Mark</td>
                        <td>1996-04-15</td>
                        <td>+639363732916</td>
                        <td>Single</td>
                        <td>Male</td>
                        <td>
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
                        </td>
                      </tr>
                  </table>
            </form>
          </div>
        </section>

</body>
</html>
