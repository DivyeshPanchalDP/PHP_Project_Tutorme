<?php 

include 'include/config.php';

error_reporting(0);

session_start();

$user_id = '1';
$useername = 'm@gmail.com';
$usertype = 'Teacher';


if (isset($_POST['submit'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];
    $mobile = $_POST['phone'];
    $message = $_POST['mesg'];
			$sql = "INSERT INTO contact (userid, name, email, mobile, message) VALUES ('$user_id', '$username', '$email', '$mobile', '$message')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Your Message Submitted Successfully.')</script>";
				$username = "";
				$email = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
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
  </head>
  <style>
    body{
      background-image:url("image/g2.jpg")
    }
  .btn-danger {
    color: #fff;
    background-color: #291e74;
    border-color: #dc3545;
    border-radius: 10px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
    border-radius: 14px;
}
  </style>
  <body>
    <!-- Navbar  -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-scroll">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-size: 2.5rem; padding: 9px 23px;" href="teacher.php">TEACHER</a>
          <a class="nav-link" style="margin-top: 25px; text-decoration:none; color:white;" href="post.php">Post</a>
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

    <!-- Contact form -->

    <div style="padding: 33px 5px;">
      <div
        class="row"
        style="padding: 50px 5px;"
      >
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="info-box" style="text-align: center; color: #100573">
            <i class="fa fa-home" style="font-size: 2rem"></i>
            <h3>Address</h3>
            <p>CTAE, Udaipur</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="info-box" style="text-align: center; color: #100573">
            <i class="fa fa-envelope" style="font-size: 2rem"></i>
            <h3>Email</h3>
            <p>tutorme@gmail.com</p>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>

      <!-- <div class="alert">Submitted Successfully </div> -->
      <!-- onsubmit="sendEmail(); reset(); return false;"  -->
      <form action="" method="POST" id="contactForm">
        <div class="row form" style="padding-top: 25px; opacity: 0.8">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="card text-dark bg-secondary">
              <div class="card-body" style="margin-right: 19px;">
                <h2 style="float: left; color: #100573">Contact Form</h2>
                <div class="input-fields">
                  <br />
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="input form-control"
                    placeholder="Name" style="margin: 10px;"
                    required
                  />
                  <input
                    type="text"
                    id="emailid"
                    name="email"
                    class="input form-control"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                    placeholder="Email Address" style="margin: 10px;"
                    required
                  />
                  <input
                    type="tel"
                    id="phone"
                    name="phone"
                    class="input form-control"
                    pattern="^[6789]\d{9,9}$"
                    placeholder="Phone" style="margin: 10px;"
                    required
                  />
                </div>
                <div class="msg">
                  <textarea
                    placeholder="Your Query"
                    id="msgContent"
                    name="mesg"
                    rows="3"
                    class="form-control" style="margin: 10px;"
                    required
                  ></textarea>
                  <button
                    type="Submit"
                    value="Send"
                    name="submit"
                    class="btn btn-danger"
                    style="float: right"
                  >Contact</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </form>
    </div>

    <!-- Footer  -->

    <?php 
      include 'include/footer.php';
      ?>



    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- For Auto Play text -->
    <script>
      var typed = new Typed(".auto-type", {
        strings: ["CODING", "STUDYING", "UNDERSTANDING"],
        typespeed: 300,
        backspeed: 300,
        loop: true,
      });
    </script>
  </body>
</html>
