<?php 
	session_start();
	include_once("mysqlconn.php");

	$fname = "";
	$sname = "";
	$email = "";
	$staff_id ="";
	$errors = array();
	if (isset($_POST['register'])){
		$fname = mysqli_real_escape_string($connect,$_POST['fname']);
		$sname = mysqli_real_escape_string($connect,$_POST['sname']);
		$email = mysqli_real_escape_string($connect,$_POST['reg_email']);
		$pass = mysqli_real_escape_string($connect,$_POST['reg_password']);
		$repass = mysqli_real_escape_string($connect,$_POST['reg_repassword']);
		$type = "Staff";
		if(empty($fname)){
			array_push($errors, "Firstname is Required!");
		}
		if(empty($sname)){
			array_push($errors, "Surname is Required!");
		}
		if(empty($email)){
			array_push($errors, "Email is Required!");
		}
		if(empty($pass)){
			array_push($errors, "Password is Required!");
		}
		if($pass != $repass){
			array_push($errors, "Password dont match!");
		}
		if(count($errors) == 0){
			 // $password = md5($pass);
			$sql = "INSERT INTO staff VALUES('','$fname','','$sname','','','','$email','','','$type','','$pass')";
			mysqli_query($connect,$sql);
			$_SESSION['email'] = $email;
			$sqltwo = "SELECT * FROM staff WHERE email = '$email'";
			mysqli_query($connect,$sqltwo);
			$result = mysqli_query($connect,$sqltwo);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					$sid = $row['staff_id'];
					$sqlone = "INSERT INTO work_experience VALUES('$sid','','','','','','','','','','','','','','')";
					$sqltwo = "INSERT INTO current_address VALUES('$sid','','','','','','','')";
					$sqltre = "INSERT INTO college_background VALUES('$sid','','','','','','','','','','')";
					$sqlfor = "INSERT INTO contact_person VALUES('$sid','','','','','','','','')";
					$sqlfve = "INSERT INTO family_details VALUES('$sid','','','','','','','','','','','','','','','','','','','','','')";
					$sqlsix = "INSERT INTO highschool_background VALUES('$sid','','','','','','','','')";
					$sqlsvn = "INSERT INTO job_details VALUES('$sid','','','','','','','','','')";
					mysqli_query($connect,$sqlone);
					mysqli_query($connect,$sqltwo);
					mysqli_query($connect,$sqltre);
					mysqli_query($connect,$sqlfor);
					mysqli_query($connect,$sqlfve);
					mysqli_query($connect,$sqlsix);
					mysqli_query($connect,$sqlsvn);

					header("location: basicinfo.php?id=".$sid."");
				}
			}
		}
	}
	if (isset($_POST['login'])){
		$email = mysqli_real_escape_string($connect,$_POST['email']);
		$pass = mysqli_real_escape_string($connect,$_POST['password']);
		$type = "Staff";
		// $stand = mysqli_real_escape_string($connect,$_POST['standing']);
		if(empty($email)){
			array_push($errors, "Input Email!");
		}
		if(empty($pass)){
			array_push($errors, "Input Password!");
		}
		if(count($errors) == 0){
			// $password = md5($password);
			$query = "SELECT * FROM staff WHERE email = '$email' AND password = '$pass' AND type = '$type'";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) == 1){
				while($row = mysqli_fetch_assoc($result)){
					$_SESSION['email'] = $email;
					header("location: about_me.php?id=".$row['staff_id']."");
				}
				
			}else{
				array_push($errors, "The email/password/ is incorrect");
			}
		}
	}
	if (isset($_POST['admin_login'])){
		$email = mysqli_real_escape_string($connect,$_POST['admin_email']);
		$pass = mysqli_real_escape_string($connect,$_POST['admin_password']);
		$type = "Admin";
		if(empty($email)){
			array_push($errors, "Input Email!");
		}
		if(empty($pass)){
			array_push($errors, "Input Password!");
		}
		if(count($errors) == 0){
			// $password = md5($password);
			$query = "SELECT * FROM staff WHERE email = '$email' AND password = '$pass' AND type = '$type'";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../admin/view_staff.php');
			}else{
				array_push($errors, "The email/password/ is incorrect");
			}
		}
	}
	if (isset($_POST['head_login'])){
		$email = mysqli_real_escape_string($connect,$_POST['head_email']);
		$pass = mysqli_real_escape_string($connect,$_POST['head_password']);
		$dept = mysqli_real_escape_string($connect,$_POST['dept']);
		$type = "Head";
		if(empty($email)){
			array_push($errors, "Input Email!");
		}
		if(empty($pass)){
			array_push($errors, "Input Password!");
		}
		if(count($errors) == 0){
			// $password = md5($password);
			$query = "SELECT * FROM staff WHERE email = '$email' AND password = '$pass' AND department = '$dept' AND type = '$type'";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					$sqltwo = "SELECT * FROM staff WHERE email = '$email'";
					mysqli_query($connect,$sqltwo);
					header("location: ../deptHead/staff_view.php?id=".$row['staff_id']."&dept=".$row['department']."");
				}
			}else{
				array_push($errors, "The email/password is incorrect");
			}
		}
	}
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['email']);
		header('location: index.php');
	}

	if (isset($_POST['about_update'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$sname = $_POST['sname'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$contnum = $_POST['contnum'];
		$status = $_POST['status'];
		$id = $_GET['id'];
		$sql = "UPDATE staff SET fname = '$fname' WHERE satff_id ='$id'";
		mysqli_query($connect,$sql);
	}
?>