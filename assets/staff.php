<!DOCTYPE html>
<?php
    include_once("sqlcon.php");
    // $fname = $_POST['firstname'];$mname = $_POST['middlename'];$lname = $_POST['lastname'];$dob = $_POST['birthdate'];$cnum = $_POST['cellnumber'];
    // $tnum = $_POST['telnumber'];$email = $_POST['emailadd'];$add1 = $_POST['addone'];$add2 = $_POST['addtwo'];$state = $_POST['state'];
    // $city = $_POST['city'];$pcode = $_POST['postcode'];$status = $_POST['status'];$sex = $_POST['gender'];$dept = $_POST['department'];

    // $sql = "INSERT INTO staff VALUES ('$fname','$mname','$lname','$dob','$cnum','$tnum','$email','$add1','$add2','$state','$city','$pcode','$status','$sex','$dept')";
    $fname = $mname = $lname = $dob =  $cnum = $tnum = $email = $add1 = $add2 = $state = $city = $pcode = $status = $sex = $dept = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['firstname'];$mname = $_POST['middlename'];$lname = $_POST['lastname'];$dob = $_POST['birthdate'];$cnum = $_POST['cellnumber'];
        $tnum = $_POST['telnumber'];$email = $_POST['emailadd'];$add1 = $_POST['addone'];$add2 = $_POST['addtwo'];$state = $_POST['state'];
        $city = $_POST['city'];$pcode = $_POST['postcode'];$status = $_POST['status'];$sex = $_POST['gender'];$dept = $_POST['department'];

        $sql = "INSERT INTO staff VALUES ('','$fname','$mname','$lname','$dob','$cnum','$tnum','$email','$add1','$add2','$state','$city','$pcode','$status','$sex','$dept')";

        if(mysqli_query($connect, $sql)){
    		echo "Successfully Added! <a href='staff.php'><<< Go Back</a>";
    	}else{
    		echo "Failed to Add! <a href='staff.php'><<< Go Back</a>";
    	}
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bs/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Staff</title>
</head>
<body>
    <header class="">

    </header>
    <main>
        <form class="flow-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="form-staff-width">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Firstname" required>
                </div>
                <div class="form-group">
                    <label for="">Middle Name</label>
                    <input type="text" class="form-control" name="middlename" placeholder="Middlename">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control"name="lastname" placeholder="Lastname" required>
                </div>
                <div class="form-group">
                    <label for="">BirthDate</label>
                    <input type="date" class="form-control" name="birthdate" placeholder="Birthdate" required>
                </div>
                <div class="form-group">
                    <label for="">Cellphone Number</label>
                    <input type="text" class="form-control" name="cellnumber" placeholder="Cell Number" required>
                </div>
                <div class="form-group">
                    <label for="">Telephone Number</label>
                    <input type="text" class="form-control" name="telnumber" placeholder="Tel Number">
                </div><div class="form-group">
                    <label for="">Email Address;</label>
                    <input type="email" class="form-control" name="emailadd" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="">Address 1</label>
                    <input type="text" class="form-control" name="addone" placeholder="Street">
                </div>
                <div class="form-group">
                    <label for="">Adress 2</label>
                    <input type="text" class="form-control" name="addtwo" placeholder="Barangay">
                </div>
                <div class="form-group">
                    <label for="">State</label>
                    <input type="text" class="form-control" name="state" placeholder="Province/State" required>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" class="form-control" name="city" placeholder="City" required>
                </div>
                <div class="form-group">
                    <label for="">Postal Code</label>
                    <input type="text" class="form-control" name="postcode" placeholder="Postal Code" required>
                </div>
                <div class="form-group">
                    <label for="">Marital Status</label>
                    <select class="btn btn-info form-control" name="status">
                        <option value="">Single</option>
                        <option value="">Married</option>
                        <option value="">Widow</option>
                        <option value="">Anualled</option>
                    </select><br>
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <select class="btn btn-info form-control" name="gender">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select><br>
                </div>

                <div class="form-group">
                    <label>Department:</label>
                    <select class="btn btn-info form-control" name="department">
                        <option value="">Staff</option>
                        <option value="">Accident and Emergency Department</option>
                        <option value="">Anaesthetics Department</option>
                        <option value="">X-ray Department</option>
                        <option value="">Cardiology Department</option>
                        <option value="">Chaplaincy Department</option>
                        <option value="">Intensive Care Department</option>
                        <option value="">Breast Screening Department</option>
                        <option value="">Elderly Services Department</option>
                        <option value="">Ear Nose and Throat Department</option>
                        <option value="">Gastroenterology Department</option>
                    </select>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary" target="_self">Submit</button>
                </div>
            </div>

        </form>
    </main>
    <footer>

    </footer>
</body>
</html>
