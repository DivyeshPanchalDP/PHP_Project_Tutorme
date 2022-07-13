<?php

include 'include/config.php';

session_start([
  'cookie_lifetime' => 86400,
]);

$user_id = '1';
$useername = 'm@gmail.com';
$usertype = 'Teacher';

if (isset($_POST['post_submit'])) {
  $medium = $_POST['MEDIUM'];
  $class = $_POST['CLASS'];
  $subject = $_POST['SUB'];
  $hour = $_POST['HOUR'];
  $mode = $_POST['MODE'];
  $salary = $_POST['SALARY'];
  $location = $_POST['LOCATION'];
  $sql = "INSERT INTO post (t_id, medium, class, subject, hour, mode, salary, location) VALUES ('$user_id', '$medium', '$class', '$subject', '$hour', '$mode', '$salary', '$location')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('Your Post Added Successfully.')</script>";
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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">

  <style>
    body {
      background: url("image/o2.webp");
    }

    /* .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 33rem;
      padding: 2.5rem;
      margin: 250px auto;
      box-sizing: border-box;
      background: rgb(0 0 0 / 0%);
      border-radius: 0.625rem;

    } */

.settle{
  width: 48%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
}
.card{
            margin: 1rem auto;
            border-radius:20px;
            background-color: rgb(255 255 255 / 26%);
            width:69%;
}


    hr {
      border-top: 1px solid rgb(255, 255, 255);
    }



    input {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 15px auto;
      background-color: rgb(134, 62, 145);
      border-radius: 0.312rem;
      font-size: 1rem;
    }

    label {
      display: inline;
      text-align: right;
      border: none;
      outline: none;
      color: #030303;
      padding: 0.625rem 1.25rem;
      cursor: pointer;
      border-radius: 0.312rem;
      font-size: 1rem;
      font-weight: bold;
    }

    select {
      display: inline;
      margin: 10px auto;
      border: none;
      outline: none;
      padding: 0.40rem 1.25rem;
      cursor: pointer;
      border-radius: 0.312rem;
      font-size: 1rem;
    }

    .form-control {
      display: block;
      width: 100%;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #43585c00;
      background-clip: padding-box;
      border: 1px solid #000000;
      -webkit-appearance: none;
      border-radius: 28px;
      -moz-appearance: none;
      appearance: none;
      border-radius: 0.25rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn-primary {
      color: #fff;
      background-color: #25282bed;
      border-color: #1f2123;
    }
  </style>

</head>

<body>
  <div>

  <nav class="navbar navbar-expand-lg bg-dark navbar-scroll">
    <div class="container-fluid">
      <a class="navbar-brand" style="font-size: 2.5rem; padding: 9px 23px;" href="teacher.php">TEACHER</a>
      <a class="nav-link" style="margin-top: 25px; text-decoration:none; color:white;" href="post.php">Post</a>
      <!-- <a class="nav-link" style="margin-top: 25px; text-decoration:none; color:white;" href="#">Notifications</a> -->
      <button class="navbar-toggler ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
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
  </div>
  <div class="settle">
    <span style="color:black;margin:auto; display:table;font-size:1.0cm;font-weight:bold;">POST</span>
    <hr>
    <form action="" method="POST">

      <div>
        <label for="med">MEDIUM</label>
      </div>
      <select name="MEDIUM" class="form-control" id="med">
        <option value="">--Choose Medium--</option>
        <option value="ENGLISH">ENGLISH</option>
        <option value="HINDI">HINDI</option>
      </select>

      <div>
        <label for="cls">CLASS</label>
      </div>
      <select name="CLASS" class="form-control" id="cls">
        <option value="">--Choose Class--</option>
        <option value="FIRST - FIFTH">FIRST - FIFTH</option>
        <option value="FIFTH - EIGHTH">FIFTH - EIGHTH</option>
        <option value="EIGHTH - TENTH">EIGHTH - TENTH</option>
        <option value="TENTH - TWELFTH">TENTH - TWELFTH</option>
      </select>

      <div>
        <label for="sub">SUBJECT</label>
      </div>
      <select name="SUB" class="form-control" id="sub">
        <option value="">--Choose Subject--</option>
        <option value="ENGLISH">ENGLISH</option>
        <option value="HINDI">HINDI</option>
        <option value="MATHEMATICS">MATHEMATICS</option>
        <option value="SCIENCE">SCIENCE</option>
        <option value="PHYSICS">PHYSICS</option>
        <option value="CHEMISTRY">CHEMISTRY</option>
        <option value="BIOLOGY">BIOLOGY</option>
        <option value="SOCIAL STUDIES">SOCIAL STUDIES</option>
      </select>

      <div>
        <label for="hr">FLEXIBLE HOURS</label>
      </div>
      <select name="HOUR" class="form-control" id="hr">
        <option value="">--Choose Flexible hours--</option>
        <option value="0 - 1 HOURS">0 - 1 HOURS</option>
        <option value="0 - 2 HOURS">0 - 2 HOURS</option>
        <option value="2 - 4 HOURS">2 - 4 HOURS</option>
        <option value="4 - 6 HOURS">4 - 6 HOURS</option>
      </select>

      <div>
        <label for="md">MODE</label>
      </div>
      <select name="MODE" class="form-control" id="md">
        <option value="">--Choose Mode--</option>
        <option value="ONLINE">ONLINE</option>
        <option value="OFFLINE">OFFLINE</option>
      </select>

      <div>
        <label for="slry">SALARY</label>
      </div>
      <select name="SALARY" class="form-control" id="slry">
        <option value="">--Choose Salary--</option>
        <option value="0 - 5000">0 - 5000</option>
        <option value="5000 - 10000">5000 - 10000</option>
        <option value="10000 - 12000">10000 - 12000</option>
      </select>

      <div>
        <label for="loc">LOCATION</label>
      </div>
      <select name="LOCATION" class="form-control" id="loc">
        <option value="">--Choose Location--</option>
        <option value="UDAIPUR">UDAIPUR</option>
        <option value="JAIPUR">JAIPUR</option>
        <option value="DELHI">DELHI</option>
        <option value="MUMBAI">MUMBAI</option>
      </select>
      <br>
      <div>
        <button type="submit" name="post_submit" class="btn btn-primary" style="float:right;">ADD POST</button>
      </div>
    </form>
  <!-- </div> -->

<br><br><br>


  <?php
  $select = mysqli_query($conn, "SELECT * FROM post WHERE t_id = '$user_id' ORDER BY p_id ") or die('query failed');
  if (mysqli_num_rows($select)) {
    echo '<br><h3>My Previous Posts</h3><br>';
    while ($output = mysqli_fetch_assoc($select)) { ?>

      <!-- <div class="container-fluid"> -->
        <br>
        <div class="row">
          <!-- <div class="col-md-4"></div> -->
          <div>
            <div class="card">
              <!-- <h5 class="card-header" style="text-align: center;">TUTOR INFORMATION</h5> -->
              <div class="card-body">
                <table>
                  <tr>
                    <th>TEACHING MEDIUM: </th>
                    <td><?php echo $output['medium']; ?></td>

                  </tr>
                  <tr>
                    <th>CLASSES: </th>
                    <td><?php echo $output['class']; ?></td>
                  </tr>
                  <tr>
                    <th>SUBJECT: </th>
                    <td><?php echo $output['subject']; ?></td>
                  </tr>
                  <tr>
                    <th>FLEXIBLE HOURS: </th>
                    <td><?php echo $output['hour']; ?></td>
                  </tr>
                  <tr>
                    <th>TEACHING MODE: </th>
                    <td><?php echo $output['mode']; ?></td>
                  </tr>
                  <tr>
                    <th>OFFERED SALARY: </th>
                    <td><?php echo $output['salary']; ?></td>
                  </tr>
                  <tr>
                    <th>LOCATION: </th>
                    <td><?php echo $output['location']; ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-4"></div> -->
        </div>
      <!-- </div> -->

  <?php
    }
  } else {
    echo '<br><h3>No Previous Post</h3><br>';
  }
  ?>

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
  //  include 'include/footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

</body>

</html>