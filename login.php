
<?php 

include 'include/config.php';

// error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($conn, $email);
	$password = $_POST['password'];
	$password = mysqli_real_escape_string($conn, $password);
	$password = md5($_POST['password']);
	$usertype = $_POST['userType'];
	$usertype = mysqli_real_escape_string($conn, $usertype);

	$sql = "SELECT sno, username, userType FROM register WHERE email = '$email' AND password = '$password' AND userType = '$usertype'";
	$result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['email'];
		$_SESSION['userType'] = $row['userType'];
		$_SESSION['user_id'] = $row['sno'];

		if($usertype == "Teacher"){
			header("Location: teacher.php");
		}
		else if($usertype == "Student"){
			header("Location: student.php");
		}
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <style>
      body,
      html {
        height: 100%;
        margin: 0;
        top: 0;
        left: 0;
        overflow-x: hidden;
        box-sizing: border-box;
        background: url("image/g4.jpg");
        background-size: cover;

      }
      /******************** Navbar *************************/
      .navbar{
          padding: 15px;
          /* border-radius: 15px;
          margin: 5px; */
      }
      .navbar .container-fluid .navbar-brand {
        color: aliceblue;
        text-decoration: none;
      }
      .navbar .container-fluid .collapse .nav-item .nav-link {
        color: aliceblue;
      }

/* login  */

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25rem;
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 0.625rem;
}

.box h2 {
  margin: 0 0 1.875rem;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #fff;
  outline: none;
  background: transparent;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: #03a9f4;
  font-size: 0.75rem;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color: #03a9f4;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
}

.box input[type="submit"]:hover {
  background-color: #1cb1f5;
}

.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  /* padding: 1rem; */
  /* background-color: #efefef; */
  text-align: center;
}
    </style>
  </head>
  <body>
    <!-- Navbar  -->

    <?php 
      include 'include/header.php';
      ?>

 <!-- login form -->

    <div class="box">
        <h2>Login</h2>
        <form action="" method="POST">
          <div class="inputBox">
            <input type="email" name="email" required value="">
            <label>Username</label>
          </div>
          <div class="inputBox">
            <input type="password" name="password" required value=""
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                   title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            <label>Password</label>
          </div>
          <div class="inputBox">
            <input list="mmm" type="logintype" name="userType" required  value="">
            <datalist id="mmm">
                  <option value="Teacher"></option>
                  <option value="Student"></option>
                </datalist>
            <label>Login As</label>
          </div>
          <input type="submit" name="submit" value="Sign In">
        </form>
      </div>

     <!-- Footer  -->
     
     <div class=" footer text-center text-white" style="background-color: #434b53;">
    <!-- Grid container -->
    <div class="p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
      <p class="d-flex justify-content-center align-items-center">
      <a href=""><i style="padding: 0 10px; color: red; font-size: 2rem;" class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href=""><i style="padding: 0 10px; color: white; font-size: 2rem;" class="fa fa-facebook-square" aria-hidden="true"></i></a>
      <a href=""><i style="padding: 0 10px; color: green; font-size: 2rem;" class="fa fa-whatsapp" aria-hidden="true"></i></a>
      </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © Copyright:
      <a class="text-white" style="text-decoration: none;" href="">TUTORME TEAM</a>
    </div>
    <!-- Copyright -->
</div>

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
