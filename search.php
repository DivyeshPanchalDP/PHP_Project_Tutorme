<?php

include 'include/config.php';
session_start();
$user_id = '3';
$useername = 'p@gmail.com';
$usertype = 'Student';


if (isset($_SESSION['username'])){
  header('Location: student.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <title>Student</title>
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
        /* background:url("https://images.unsplash.com/photo-1577896851231-70ef18881754?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=900&ixid=MnwxfDB8MXxyYW5kb218MHx8VGVhY2hlcnx8fHx8fDE2NTEyMTU3NzM&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1920"); */
        /* background-repeat: repeat; */
        /* background-size: 1920px 900px; */
        /* padding:0 */
        background-image:url("image/n2.jpg")
    
    /*linear-gradient(to right, rgba(98,87,147,1) 0%, rgba(98,87,147,1) 33%, rgba(213,93,100,1) 33%, rgba(213,93,100,1) 66%, rgba(228,145,41,1) 66%);
  background-size: 50% 100%;  */    
      }
      .form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #ac868c2e;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
} 

  .card {
            
            max-width: 45rem;
            margin: 1rem auto;
            border-radius:20px;
            background-color: rgba(255, 255, 255, .15);  
            backdrop-filter: blur(69px);
            width:1000px
            
        }
        .col-md-4 {
    flex: 0 0 auto;
    width: 26.333333%;
}
    </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-scroll">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-size: 2.5rem; padding: 9px 23px;" href="student.php">STUDENT</a>
          <a class="nav-link" style="margin-top: 25px; text-decoration:none; color:white;" href="search1.php">Search</a>
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
                <a class="nav-link" href="scontact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sabout.php">About Us</a>
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

<br><br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div class="card">
        <h5 class="card-header">SEARCH TUTOR</h5>
            <div class="card-body">
                <form action="" method="POST">
                    <div>
                    <label for="med">MEDIUM</label>
                    </div>
                    <select name="medium" class="form-control" id="med">
                        <option value="">--Choose Medium--</option>
                        <option value="ENGLISH">ENGLISH</option>
                        <option value="HINDI">HINDI</option>
                    </select>

                    <div>
                    <label for="cls">CLASS</label>
                    </div>
                    <select name="class" class="form-control" id="cls">
                        <option value="">--Choose Class--</option>
                        <option value="FIRST - FIFTH">FIRST - FIFTH</option>
                        <option value="FIFTH - EIGHTH">FIFTH - EIGHTH</option>
                        <option value="EIGHTH - TENTH">EIGHTH - TENTH</option>
                        <option value="TENTH - TWELFTH">TENTH - TWELFTH</option>
                    </select>

                    <div>
                    <label for="sub">SUBJECT</label>
                    </div>
                    <select name="subject" class="form-control" id="sub">
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
                    <select name="hour" class="form-control" id="hr">
                        <option value="">--Choose Flexible hours--</option>
                        <option value="0 - 1 HOURS">0 - 1 HOURS</option>
                        <option value="0 - 2 HOURS">0 - 2 HOURS</option>
                        <option value="2 - 4 HOURS">2 - 4 HOURS</option>
                        <option value="4 - 6 HOURS">4 - 6 HOURS</option>
                    </select>

                    <div>
                    <label for="md">MODE</label>
                    </div>
                    <select name="mode" class="form-control" id="md">
                        <option value="">--Choose Mode--</option>
                        <option value="ONLINE">ONLINE</option>
                        <option value="OFFLINE">OFFLINE</option>
                    </select>

                    <div>
                    <label for="slry">SALARY</label>
                    </div>
                    <select name="salary" class="form-control" id="slry">
                        <option value="">--Choose Salary--</option>
                        <option value="0 - 5000">0 - 5000</option>
                        <option value="5000 - 10000">5000 - 10000</option>
                        <option value="10000 - 12000">10000 - 12000</option>
                    </select>

                    <div>
                    <label for="loc">LOCATION</label>
                    </div>
                    <select name="location" class="form-control" id="loc">
                        <option value="">--Choose Location--</option>
                        <option value="UDAIPUR">UDAIPUR</option>
                        <option value="JAIPUR">JAIPUR</option>
                        <option value="DELHI">DELHI</option>
                        <option value="MUMBAI">MUMBAI</option>
                    </select>
                    <br>
                    <div>
                        <button type="submit" name="search" class="btn btn-primary" style="float:right;">Search</button>
                    </div>
                </form>
            </div>
        </div> 
        </div>
        <div class="col-md-3"></div>
    </div>
<!-- </div> -->
<!-- <div class="container" style="border: 1px solid black; margin: 25px 0; position:relative;"> -->
    


<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">

        <?php 
        
        if(isset($_POST['search'])){
            $medium = $_POST['medium'];
            $class = $_POST['class'];
            $subject = $_POST['subject'];
            $hour = $_POST['hour'];
            $mode = $_POST['mode'];
            $salary = $_POST['salary'];
            $location = $_POST['location'];
            $select = mysqli_query($conn, "SELECT * FROM post WHERE medium = '$medium' AND class = '$class' AND subject = '$subject' AND hour = '$hour' AND mode = '$mode' AND salary = '$salary' AND location = '$location'") or die('query failed');
            if(mysqli_num_rows($select)){  
              echo '<br><br><br>
                  <h3><span>YOUR SEARCH RESULT</span></h3>
                  <br><br><br>'; 
            while($fetch = mysqli_fetch_assoc($select)){
                $t_id = $fetch['t_id'];
                $p_id = $fetch['p_id'];
                $sel = mysqli_query($conn, "SELECT register.username, register.email, register.mobile, register.gender, register.address, post.medium, post.subject, post.mode, post.hour, post.salary FROM register INNER JOIN post ON register.sno = $t_id AND post.p_id = $p_id");
                $output = mysqli_fetch_assoc($sel);
                if(mysqli_num_rows($sel) > 0){

                  // echo '<br><br><br>
                  // <br><h3 style="text-align:center; color: white;"><span style="border: 1px solid black; padding: 10px 25px;background-color:grey;border-radius:10px">YOUR SEARCH RESULT</span></h3><br><br>
                  // <br><br><br>';

                    ?>






        <div class="card">
        <h5 class="card-header">TUTOR INFORMATION</h5>
            <div class="card-body">
                
                
                  <table>
                    <tr>
                    <th>NAME:   </th>
                    <td><?php echo $output['username']; ?></td>
                    </tr>
                    <tr>
                    <th>EMAIL:   </th>
                    <td><?php echo $output['email']; ?></td>
                    </tr>
                    <tr>
                    <th>MOBILE:   </th>
                    <td><?php echo $output['mobile']; ?></td>
                    </tr>
                    <tr>
                    <th>GENDER:   </th>
                    <td><?php echo $output['gender']; ?></td>
                    </tr>
                    <tr>
                    <th>MEDIUM:   </th>
                    <td><?php echo $output['medium']; ?></td>
                    </tr>
                    <tr>
                    <th>SUBJECT:   </th>
                    <td><?php echo $output['subject']; ?></td>
                    </tr>
                    <tr>
                    <th>MODE:   </th>
                    <td><?php echo $output['mode']; ?></td>
                    </tr>
                    <tr>
                    <th>HOUR:   </th>
                    <td><?php echo $output['hour']; ?></td>
                    </tr>
                    <tr>
                    <th>SALARY:   </th>
                    <td><?php echo $output['salary']; ?></td>
                    </tr>
                    <tr>
                    <th>ADDRESS:   </th>
                    <td><?php echo $output['address']; ?></td>
                    </tr>
                  </table>
            </div>
        </div>
        <?php
                }
                else{
                  echo 'Data Not Found.';
                }
            }
          }
            else{
              echo '<br><br><h3>Teacher Not Found</h3><br>';
            }
        } 
        ?> 
        </div>
      <div class="col-md-4"></div>
    </div>
    </div>

<br><br><br>

<?php
include 'include/footer.php';
?>

</body>
</html>