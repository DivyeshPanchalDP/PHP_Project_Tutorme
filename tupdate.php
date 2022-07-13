<?php 

include 'include/config.php';

error_reporting(0);

session_start();
$user_id = '1';
$useername = 'm@gmail.com';
$usertype = 'Teacher';

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['update'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $userType = $_POST['userType'];
    $gender = $_POST['gender'];
	// $password = md5($_POST['password']);
	// $cpassword = md5($_POST['cpassword']);
    $address = $_POST['address'];

	// if ($password == $cpassword) {
		// $sql = "SELECT * FROM register WHERE email='$email'";
		// $result = mysqli_query($conn, $sql);
		// if (!$result->num_rows > 0) {
			$sql = "UPDATE register SET username = '$username', email = '$email', mobile = '$mobile', userType = '$userType', gender = '$gender', address = '$address' where sno = '$user_id'";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Updated Successfully.')</script>";
				// $username = "";
				// $email = "";
				// $_POST['password'] = "";
				// $_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		// } else {
		// 	echo "<script>alert('Woops! Email Already Exists.')</script>";
		// }
		
	// } else {
	// 	echo "<script>alert('Password Not Matched.')</script>";
	// }
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <style>
        body {
            background-image:url("image/d5.jpg");
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
        .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff4a;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}
    </style>
  </head>

  <body>
    <!-- Navbar  -->

   
<nav class="navbar navbar-expand-lg bg-dark navbar-scroll">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-size: 2.5rem; padding: 9px 23px;" href="teacher.php">TEACHER</a>
          <a class="nav-link" style="margin-top: 25px; text-decoration:none; color:white;" href="#">Post</a>
          <!-- <a class="nav-link" style="margin-top: 25px; text-decoration:none; color:white;" href="#">Notifications</a> -->
          <button
            class="navbar-toggler ps-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <ul class="navbar-nav ml-auto" style="margin-top: 25px;">
              <li class="nav-item">
                <a class="nav-link" href="tcontact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tabout.php">About Us</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container" style="margin: 75px 0;">
<?php
  $select = mysqli_query($conn, "SELECT * FROM register WHERE sno = '$user_id'") or die('query failed');
  $fetch = mysqli_fetch_assoc($select);
  if(mysqli_num_rows($select) > 0){ ?>
        <div class="card" style="margin: 75px 0; border-radius:15px;">
            <h5 class="card-header text-center">Updation form</h5>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" data-error="You must have a name." id="inputName" value="<?php echo $fetch['username']; ?>" required>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo $fetch['email']; ?>" required>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="tel" class="form-control" name="mobile" id="inputtel" value="<?php echo $fetch['mobile']; ?>" required>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Register As</label>
                        <input type="text" list="mmm" class="form-control" name="userType" maxlength="10" minlength="3" id="reg" value="<?php echo $fetch['userType']; ?>" required>
                            <datalist id="mmm">
                  <option value="Teacher"></option>
                  <option value="Student"></option>
                </datalist>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <input list="mm" class="form-control" name="gender" maxlength="10" minlength="3" id="reg" value="<?php echo $fetch['gender']; ?>" required>
                            <datalist id="mm">
                  <option value="Male"></option>
                  <option value="Female"></option>
                  <option value="Other"></option>
                </datalist>
                        <!-- Error -->
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- <div class="form-group">
                        <label>Password</label>
                        <div class="form-group">
                            <input type="password" name="password" data-minlength="4" class="form-control" id="inputPassword"
                                data-error="Have atleast 4 characters" value="<?php echo $fetch['password']; ?>" disabled/>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="form-group">
                            <input type="password" name="cpassword" class="form-control" id="inputConfirmPassword"
                                data-match="#inputPassword" data-match-error="Password don't match"
                                value="<?php echo $fetch['password']; ?>" disabled />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" data-error="Please enter address." id="address"
                        value="<?php echo $fetch['address'];?>" required="">
                      
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="update" style="margin: 9px 0;" class="btn btn-primary btn-block form-control">Send</button>
                    </div>
                    <!-- <p class="login-register-text">Have an account? <a href="teacher.php">Go to Profile</a>.</p> -->
                </form>
            </div>
        </div>
    </div>

    <?php  
  } else {
    echo 'No record found';
  }
  ?>




<br><br><br><br>


    <!-- <div class=" footer text-center text-white" style="background-color: #434b53;">
    <div class="p-4 pb-0">
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <button type="button" class="btn btn-outline-light" style="border-radius: 500px;">
            Sign up!
          </button>
        </p>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" style="text-decoration: none;" href="">TutorMe.com</a>
    </div>
</div> -->



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
