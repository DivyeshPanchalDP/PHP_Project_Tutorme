<?php

include 'include/config.php';

session_start([
  'cookie_lifetime' => 86400,
]);

$user_id = '1';
$useername = 'm@gmail.com';
$usertype = 'Teacher';

if (isset($_SESSION['username'])){
  header('Location: teacher.php');
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <title>Teachers</title>
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
       body{
        background-image: url("image/D4.jpg");
   
      } 
      .box {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 25rem;
    margin: 2.5rem 0;
    padding: 2.5rem;
    box-sizing: border-box;
    background: #41464b00;
    border-radius: 2rem;
}

.box h1 {
  margin: 0 0 1rem;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box h5{
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
  font-size: 0.9rem;
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


<div class="container">
  <?php
  $select = mysqli_query($conn, "SELECT * FROM register WHERE sno = '$user_id'") or die('query failed');
  $fetch = mysqli_fetch_assoc($select);
  if(mysqli_num_rows($select) > 0){ ?>



      <div class="box">
        <h1><u>PROFILE</u></h1>
        <h5><?php echo $fetch['username']; ?></h5>
        <form action="" method="">
          <div class="inputBox">
            <input type="email" name="email" required value="<?php echo $fetch['email']; ?>" disabled>
            <label>EMAIL:</label>
          </div>
          <div class="inputBox">
            <input type="text" name="password" required value="<?php echo $fetch['mobile']; ?>" disabled>
            <label>MOBILE:</label>
          </div>
          <div class="inputBox">
            <input type="text" name="password" required value="<?php echo $fetch['gender']; ?>" disabled>
            <label>GENDER:</label>
          </div>
          <div class="inputBox">
            <input list="mmm" type="logintype" name="userType" required  value="<?php echo $fetch['userType']; ?>" disabled>
            <datalist id="mmm">
                  <option value="Teacher"></option>
                  <option value="Student"></option>
                </datalist>
            <label>PROFILE:</label>
          </div>
          <div class="inputBox">
            <input type="text" name="password" required value="<?php echo $fetch['address']; ?>" disabled>
            <label>ADDRESS:</label>
          </div>
          <a  style="float: right;" href="tupdate.php" class="btn btn-primary" name="submit"> UPDATE PROFILE</a>
        </form>
      </div>
      

  <?php  
  } else {
    echo 'No record found';
  }
  ?>
  
</div>



</body>
</html>