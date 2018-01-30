<?php
    include_once("sqlcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bs/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>STAFF</title>
</head>
<body>
    <header class="">

    </header>
    <main>
        <form action="" class="flow-control">
            <div class="form-staff-width">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Middle Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">BirthDate</label>
                    <input type="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Cellphone Number</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Telephone Number</label>
                    <input type="text" class="form-control">
                </div><div class="form-group">
                    <label for="">Email Address;</label>
                    <input type="email" class="form-control" value="email add">
                </div>
                <div class="form-group">
                    <label for="">Telephone Number</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Address 1</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Adress 2</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">State</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Postal Code</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Marital Status</label>
                    <select class="btn btn-info form-control" name="">
                        <option value="">Single</option>
                        <option value="">Married</option>
                        <option value="">Widow</option>
                        <option value="">Anualled</option>
                    </select><br>
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <select class="btn btn-info form-control" name="">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select><br>
                </div>

                <div class="form-group">
                    <label>Department:</label>
                    <select class="btn btn-info form-control" name="">
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
                        <option value="">Malakas</option>
                        <option value="">Malakas</option>
                        <option value="">Malakas</option>
                        <option value="">Malakas</option>
                        <option value="">Malakas</option>
                        <option value="">Malakas</option>
                        <option value="">Malakas</option>
                        <option value="">Malakas</option>
                    </select><br>
                </div>
            </div>

        </form>
    </main>
    <footer>

    </footer>
</body>
</html>
