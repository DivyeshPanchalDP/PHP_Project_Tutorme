<?php

include 'include/config.php';
session_start();
$user_id = '3';
$useername = 'p@gmail.com';
$usertype = 'Student';


if (isset($_SESSION['username'])) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <style>
        /* body{
        background:url("https://images.unsplash.com/photo-1577896851231-70ef18881754?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=900&ixid=MnwxfDB8MXxyYW5kb218MHx8VGVhY2hlcnx8fHx8fDE2NTEyMTU3NzM&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1920");
        background-repeat: no-repeat;
        background-size: 1920px 900px;
      
      } */
        /* .footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  /* padding: 1rem; */
        /* background-color: #efefef; */
        /* text-align: center;
} */
         /* body{
            background: #333;
  background-image: 
    radial-gradient(ellipse at bottom left, rgba(0,163,203,1) 40%, rgba(0,163,203,0) 40%),
    radial-gradient(ellipse at top right, rgba(0,163,203,1) 30%, rgba(0,163,203,0) 30%),
    linear-gradient(to right, rgba(98,87,147,1) 0%, rgba(98,87,147,1) 33%, rgba(213,93,100,1) 33%, rgba(213,93,100,1) 66%, rgba(228,145,41,1) 66%);
  background-size: 50% 100%;
  
        }  */
         body{
            background-image:url("image/n3.jpg")
         }
        .search select {
            height: 60px;
            text-indent: 25px;
            border: 2px solid #d6d4d4;
        }

        .search select:focus {
            box-shadow: none;
            border: 2px solid blue;
        }

        .search .fa-search {
            position: absolute;
            top: 20px;
            left: 16px;
        }

        .search button {
            position: absolute;
            top: 5px;
            right: 5px;
            height: 50px;
            width: 110px;
            background: rgb(93, 93, 111);
        }

        .card {
            max-width: 45rem;
            margin: 1rem auto;
            border-radius:20px;
            background-color: rgba(255, 255, 255, .15);  
            backdrop-filter: blur(69px);
            width:1000px
            

        }
        .card-body {
    flex: 1 1 auto;
    padding: 1rem 1rem;
    align-self: center;
}


        .container table th {
            padding: 10px 25px;
        }

        .container table td {
            padding: 10px 10px;
        }

        .btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #ff0202;;
    border-radius: 38px;
}
.search select {
    height: 60px;
    text-indent: 25px;
    border: 2px solid #d6d4d4;
    border-radius: 60px;
}
.search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 50px;
    width: 110px;
    background: rgb(93, 93, 111);
    border-radius: 60px;
}
    </style>
    <script>
        function change() {
            document.getElementById("change").style.margin = "100px 0";
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-scroll">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-size: 2.5rem; padding: 9px 23px;" href="student.php">STUDENT</a>
            <a class="nav-link" style="margin-top: 25px; text-decoration:none; color:white;" href="search1.php">Search</a>
            <!-- <a class="nav-link" style="margin-top: 25px; text-decoration:none; color:white;" href="#">Notifications</a> -->
            <button class="navbar-toggler ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
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

        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <!-- <input type="text" name="search_here"  class="form-control" placeholder="Search here" /> -->
                        <select name="search_here" class="form-control" id="sub">
                            <option value=""> Search here </option>
                            <option value="ENGLISH">ENGLISH</option>
                            <option value="HINDI">HINDI</option>
                            <option value="MATHEMATICS">MATHEMATICS</option>
                            <option value="SCIENCE">SCIENCE</option>
                            <option value="PHYSICS">PHYSICS</option>
                            <option value="CHEMISTRY">CHEMISTRY</option>
                            <option value="BIOLOGY">BIOLOGY</option>
                            <option value="SOCIAL STUDIES">SOCIAL STUDIES</option>
                        </select>
                        <button type="submit" name="search_all" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2"><a id="filter" href="search.php" class="btn btn-danger" style="padding: 13px 25px;"><i class="fa fa-filter"></i> Filter</a></div>
        </div>
        <!-- </div> -->
        <br><br><br>


        <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">

        <?php

        if (isset($_POST['search_all'])) {
            $search = $_POST['search_here'];
            $select = mysqli_query($conn, "SELECT * FROM post WHERE subject = '$search'") or die('query failed');
            // $fetch = mysqli_fetch_assoc($select);
            if(mysqli_num_rows($select)){
            while ($fetch = mysqli_fetch_assoc($select)) {
                $t_id = $fetch['t_id'];
                $p_id = $fetch['p_id'];
                $sel = mysqli_query($conn, "SELECT register.username, register.email, register.mobile, register.gender, register.address, post.medium, post.subject, post.mode, post.hour, post.salary FROM register INNER JOIN post ON register.sno = $t_id AND post.p_id = $p_id");
                $output = mysqli_fetch_assoc($sel);
                if (mysqli_num_rows($sel) > 0) {
        ?>
                            <div class="card">
                                <h5 class="card-header" style="text-align: center;">TUTOR INFORMATION</h5>
                                <div class="card-body">


                                    <table>
                                        <tr>
                                            <th>NAME: </th>
                                            <td><?php echo $output['username']; ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <th>EMAIL: </th>
                                            <td><?php echo $output['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>MOBILE: </th>
                                            <td><?php echo $output['mobile']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>GENDER: </th>
                                            <td><?php echo $output['gender']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>MEDIUM: </th>
                                            <td><?php echo $output['medium']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>SUBJECT: </th>
                                            <td><?php echo $output['subject']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>MODE: </th>
                                            <td><?php echo $output['mode']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>HOUR: </th>
                                            <td><?php echo $output['hour']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>SALARY: </th>
                                            <td><?php echo $output['salary']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>ADDRESS: </th>
                                            <td><?php echo $output['address']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>



                        </div>
                        <div class="col-md-3"></div>
            <?php
                } else {
                    echo 'Data Not Found.';
                }
        }
    }
    else{
        echo '<br><br><br>
        <br><h3 style="text-align:center;color: white;"><span style="border: 1px solid black; padding: 10px 25px;background-color:grey;">Teacher Not Available</span></h3><br><br>
        <br><br><br>';
        
}
      ?> 



     <div class="row">
<div class="col-md-3"></div> 
<div class="col-md-6">
      
      <?php
    } else {  
        

        echo '<br>
        <br><h3 style="text-align:center;color: white;"><span style="border: 1px solid black; padding: 10px 55px;background-color:grey;border-radius:30px">Teachers List</span></h3><br><br>
        <br>';


        $select = mysqli_query($conn, "SELECT * FROM post ORDER BY p_id LIMIT 10") or die('query failed');
        if(mysqli_num_rows($select)){
            while ($fetch = mysqli_fetch_assoc($select)) {
                $t_id = $fetch['t_id'];
                $p_id = $fetch['p_id'];
                $sel = mysqli_query($conn, "SELECT register.username, register.email, register.mobile, register.gender, register.address, post.medium, post.subject, post.mode, post.hour, post.salary FROM register INNER JOIN post ON register.sno = $t_id AND post.p_id = $p_id");
                $output = mysqli_fetch_assoc($sel);
                if (mysqli_num_rows($sel) > 0) {
        
        
        ?>


<div class="card">
                                <h5 class="card-header" style="text-align: center;">TUTOR INFORMATION</h5>
                                <div class="card-body">


                                    <table>
                                        <tr>
                                            <th>NAME: </th>
                                            <td><?php echo $output['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>EMAIL: </th>
                                            <td><?php echo $output['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>MOBILE: </th>
                                            <td><?php echo $output['mobile']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>GENDER: </th>
                                            <td><?php echo $output['gender']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>MEDIUM: </th>
                                            <td><?php echo $output['medium']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>SUBJECT: </th>
                                            <td><?php echo $output['subject']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>MODE: </th>
                                            <td><?php echo $output['mode']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>HOUR: </th>
                                            <td><?php echo $output['hour']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>SALARY: </th>
                                            <td><?php echo $output['salary']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>ADDRESS: </th>
                                            <td><?php echo $output['address']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <?php
                } else {
                    echo 'Data Not Found.';
                }
        }
    }
    else{
        echo '<br><br><br>
        <br><h3 style="text-align:center;color: white;"><span style="border: 1px solid black; padding: 10px 25px;background-color:grey;border-radius:30px">Teacher Not Available</span></h3><br><br>
        <br><br><br>';
        
}
      ?> 
            <?php
        } ?>

    </div>
<div class="col-md-3"></div>
</div>
                    </div>

                    <!-- </table> -->
    </div>

    <br><br><br>    <!-- Footer  -->

    <?php
    include 'include/footer.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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