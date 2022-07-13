<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <title>tabout</title>
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
   

      body,
      html {
        height: 100%;
        margin: 0;
        top: 0;
        left: 0;
        overflow-x: hidden;
        box-sizing: border-box;
        background-image: url("image/i6.jpg");
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
      

      /********************* ABOUT ****************************/
      body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d87;
    color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

    </style>
  </head>
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


    <!-- About us -->


    <div class="about-section">
        <h1>About Us</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
      </div>
      
      <br><br>
      <h2 style="text-align:center">Our Team</h2>
<br><br>

<div class="container-fluid">
<div class="row">
  <div class="col-md-3">
          <div class="card-body" style="text-align: center;">
            <img src="image/manshu.jpg" alt="Manshu" style="width:75%; border-radius:25px;">
            <div class="card-footer" style="text-align: center;">
              <h2>Manshu</h2>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
        <div class="card-body" style="text-align: center;">
            <img src="image/nisheeka.jpeg" alt="Nisheeka" style="width:75%; border-radius:25px;">
            <div class="card-footer" style="text-align: center;">
              <h2>Nisheeka</h2>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
        <div class="card-body" style="text-align: center;">
            <img src="image/Nikhilesh.jpg" alt="Nikhilesh" style="width:75%; border-radius:25px;">
            <div class="card-footer" style="text-align: center;">
              <h2>Divyesh</h2>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
        <div class="card-body" style="text-align: center;">
            <img src="image/abhishek.jpg" alt="Abhishek" style="width:75%; border-radius:25px;">
            <div class="card-footer" style="text-align: center;">
              <h2>Abhishek</h2>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
  </div>
</div>

     <br><br><br>


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
