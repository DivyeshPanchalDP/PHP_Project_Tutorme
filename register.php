<?php 

include 'include/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $userType = $_POST['userType'];
    $gender = $_POST['gender'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
    $address = $_POST['address'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM register WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO register (username, email, mobile, userType, gender, password, address) VALUES ('$username', '$email', '$mobile', '$userType', '$gender', '$password', '$address')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				// $username = "";
				// $email = "";
				// $_POST['password'] = "";
				// $_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <style>
        body {
            background-image:url("image/cr.webp") ;
        }
        .container {
            max-width: 550px;
        }
        .has-error label,
        .has-error input,
        .has-error textarea {
            color: red;
            border-color: red;
        }
        .list-unstyled li {
            font-size: 13px;
            padding: 4px 0 0;
            color: red;
        }
       .container .card{
            
    margin: 75px 0;
    border-radius: 15px;
    background-color: #6babeca1;
    OPACITY: 49;
    padding: 18px;
    width: 518px;
}
        
        .my-5 {
            margin-top: 16rem!important;
    margin-bottom: 3rem!important;
}
    </style>
  </head>

  <body>
    <!-- Navbar  -->

    <?php
      include 'include/header.php'
    ?>

<div class="container mt-5" >
        <div class="card my-5" style="margin: 100px 0; border-radius:15px;">
            <h5 class="card-header text-center">Registration form</h5>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" data-error="You must have a name." id="inputName" placeholder="Name" required>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="tel" class="form-control" name="mobile" id="inputtel" placeholder="Mobile" required>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Register As</label>
                        <input type="text" list="mmm" class="form-control" name="userType" maxlength="10" minlength="3" id="reg" placeholder="teacher/student" required>
                            <datalist id="mmm">
                  <option value="Teacher"></option>
                  <option value="Student"></option>
                </datalist>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <input list="mm" class="form-control" name="gender" maxlength="10" minlength="3" id="reg" placeholder="Male/Female/Other" required>
                            <datalist id="mm">
                  <option value="Male"></option>
                  <option value="Female"></option>
                  <option value="Other"></option>
                </datalist>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <div class="form-group">
                            <input type="password" name="password" data-minlength="4" class="form-control" id="inputPassword"
                                data-error="Have atleast 4 characters" placeholder="Password" required />
                            <!-- Error -->
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="form-group">
                            <input type="password" name="cpassword" class="form-control" id="inputConfirmPassword"
                                data-match="#inputPassword" data-match-error="Password don't match"
                                placeholder="Confirm" required />
                            <!-- Error -->
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" data-error="Please enter address." id="address"
                            placeholder="address" required=""></textarea>
                      
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" style="margin: 9px 0;" class="btn btn-primary btn-block form-control">Register</button>
                    </div>
                    <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
                </form>
            </div>
        </div>
    </div>







      <!-- <div class=" footer text-center text-white" style="background-color: #434b53;">
    <div class="p-4 pb-0">
      <section class="">
      <p class="d-flex justify-content-center align-items-center">
      <a href=""><i style="padding: 0 10px; color: red; font-size: 2rem;" class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href=""><i style="padding: 0 10px; color: white; font-size: 2rem;" class="fa fa-facebook-square" aria-hidden="true"></i></a>
      <a href=""><i style="padding: 0 10px; color: green; font-size: 2rem;" class="fa fa-whatsapp" aria-hidden="true"></i></a>
      </p>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © Copyright:
      <a class="text-white" style="text-decoration: none;" href="">TUTORME TEAM</a>
    </div>
</div> -->




<?php
// include 'include/footer.php';
?>


    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- <script type="text/javascript">
      $(document).ready(function () {
          $("loginModal").click(function () {
              $("login-modal").modal('show');
          });
  
          $("#ShowModal2").click(function () {
              $("#Modal2").modal('show');
          });
  
      });
  </script> -->
  </body>
</html>
