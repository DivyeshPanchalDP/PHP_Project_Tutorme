<?php
include 'include/config.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <title>Index</title>
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">




    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <style>
     
      .bg {
        background-image: url("image/c2.jpg");
        
      }
      /* .card { 
      ...
       box-shadow: 0 0 50px rgba(0, 0, 0, 0.315);
       grid-template-rows: 210px 250px 20px;
       background: #1d1d1d;
       color:white;
       text-align: justify;
      }
      .card-text p {
      ...
       font-size:14px;
      }*/

      .card {
        margin: -52px;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    border: none;
    border-radius: 3.25rem;
    flex-wrap: nowrap;
    align-items: center;
    background-color: #fefefe00;
}


     

.container-fluid1 .card {
    position: relative;
    border-radius: 50px;
    border:0;
    
}


.container-fluid1 .card .icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #2e91ad;
    transition: 0.7s;
    z-index: 1;
   
}

.svg-inline--fa {
    display: var(--fa-display,inline-block);
    height: 1em;
    overflow: visible;
    vertical-align: -1.125em;
}



.container-fluid1 .card .icon .fa {
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 180px;
    transition: 0.7s;
    color: #fff;
}

i {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
    transition: 0.7s;
    color: #fff;
}

.container-fluid1 .card .face {
    width: 300px;
    height: 200px;
    transition: 0.5s;
}

.container-fluid1 .card .face.face1 {
    position: relative;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}

.container-fluid1 .card:hover .face.face1{
    background: #ff0057;
    transform: translateY(0px);
}

.container-fluid1 .card .face.face1 .content {
    opacity: 1;
    transition: 0.5s;
}

.container-fluid1 .card:hover .face.face1 .content {
    opacity: 1;
}

.container-fluid1 .card .face.face1 .content i{
    max-width: 100px;
}

.container-fluid1 .card .face.face2 {
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0,0,0,0.8);
    transform: translateY(-100px);
}

.container-fluid1 .card:hover .face.face2{
    transform: translateY(0);
}


.container .card:nth-child(1) .icon {
    background: #e07768;
}

.container .card:nth-child(2) .icon {
    background: #6eadd4;
}

.container .card:nth-child(3) .icon {
    background: #4aada9;
}



.container-fluid1 .card .face.face2 .content h3 {
    margin: 0 0 10px 0;
    padding: 0;
    color: #fff;
    font-size: 24px;
    text-align: center;
    color: #414141;
} 








    </style>
  </head>
  <body>
    <div class="bg">
      <!-- Navbar  -->

      <nav class="navbar navbar-expand-lg navbar-scroll">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-size: 2rem;" href="index.php">TUTOR ME</a>
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
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      
      <!-- Auto typing and Scroll -->

      <div class="container">
        <div class="centered">
          <h1>Hello I'm <span class="auto-type"></span></h1>
          <div class="icon-scroll">
            <a href="#scroll">
            <div class="mouse">
              <div class="wheel">
              </div>
            </div></a>
            <div class="icon-arrows">
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <br />
    <br />

<!-- ______ -->

<div id="scroll" class="container-fluid1">
  <div  class="row">
    <div class="col-md-2"></div>
    <div class="col-md-3">
    <div class="card"style="text-align:center">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <i class='fa fa-user' style='font-size:116px'></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        TOTAL REGISTERED TEACHERS
                    </h3>
                    <?php
$select = mysqli_query($conn, "SELECT * FROM register WHERE userType = 'Teacher'") or die('query failed');
$fetch = mysqli_fetch_assoc($select);
if($count = mysqli_num_rows($select)){
?>
<span style="font-size: 250%" ><?php echo $count; ?></span>
<?php
}
?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-3">
    <div class="card" style="text-align:center">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                    <i class='fa fa-users' aria-hidden="true" style='font-size:110px'></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                      TOTAL REGISTERED STUDENTS
                    </h3>
                    <div class="counter" >
                    <?php
$select = mysqli_query($conn, "SELECT * FROM register WHERE userType = 'Student'") or die('query failed');
$fetch = mysqli_fetch_assoc($select);
if($count = mysqli_num_rows($select)){
?>
<span style="font-size: 250%"><?php echo $count; ?></span>
<?php
}
?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>



<!-- ______ -->




    <!-- <div id="scroll" class="container-fluid">
  <div  class="row">
    <div class="col-md-2"></div>
    <div class="col-md-3">
      <div class="card" style="text-align: center;">
        <div class="card-body">
          <div class="icon">
          <i class='fa fa-user' style='font-size:116px'></i>
          </div>
          <div class="counter" style="font-size: 3rem;">

<?php
$select = mysqli_query($conn, "SELECT * FROM register WHERE userType = 'Teacher'") or die('query failed');
$fetch = mysqli_fetch_assoc($select);
if($count = mysqli_num_rows($select)){
?>
<span><?php echo $count; ?></span>
<?php
}
?>
          </div>
          <div class="card-footer">
            TOTAL REGISTERED TEACHERS
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-3">
    <div class="card" style="text-align: center;">
        <div class="card-body">
          <div class="icon">
          <i class='fa fa-users' style='font-size:116px'></i>
          </div>
          <div class="counter" style="font-size: 3rem;">
          <?php
$select = mysqli_query($conn, "SELECT * FROM register WHERE userType = 'Student'") or die('query failed');
$fetch = mysqli_fetch_assoc($select);
if($count = mysqli_num_rows($select)){
?>
<span><?php echo $count; ?></span>
<?php
}
?>
          </div>
          <div class="card-footer">
            TOTAL REGISTERED STUDENTS
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div> -->






    
    <!-- <div class="container-fluid">
      <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-6">
          <div class="search">
            <i class="fa fa-search"></i>
            <input type="text" class="form-control" placeholder="Search here" />
            <button class="btn btn-primary">Search</button>
          </div>
        </div>
      </div>
    </div> -->
    <br />
    <br />
    <br />
<!-- Footer  -->

<footer class="text-center text-white" style="background-color: #434b53;">
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
</footer>


<script src="https://kit.fontawesome.com/ac26654ca2.js" crossorigin="anonymous"></script>


<!-- Script for Blur Scrolling transition -->
<script src="https://code.jquery.com/jquery-3.6.0.js">
</script>
<script type="text/javascript">
    $(window).scroll(function(){
      var scroll =$(window).scrollTop();
      $('.bg').css({
        filter: "blur(" + (scroll/10) + "px)"
      })
    })
</script>

<script type="text/javascript">
      // $(".counter").counterUp({delay:10,time:1200 });
      $('.counter').counterUp({
    delay: 10,
    time: 1000
});
    </script>

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
