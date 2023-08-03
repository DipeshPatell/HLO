<?php
 $type='';
 session_start();
 $type=$_SESSION["type"];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-colock-time"></i>
      </div>
      <div class="d-flex align-items-center">
        <!--
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
        -->
      </div>
    </div>
  </div>
 <?php
 if($type=='U')
 {
   ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a style="margin:-80px"href="index.php" class=" mr-auto"><img src="assets/img/logo.png" alt=""></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>

          <li><a href="Sym.php">Symptom checker</a></li>
          <li class="drop-down"><a href="">Q&A.</a>
          <ul>
            <li><a href="qa.php">Ask a Question.</a></li>
            <li><a href="quemain.php">Answered Question's</a></li>
          </ul>
          </li>
          <li><a href="findadoc.php">Find A doctor</a></li>
           <li class="drop-down"><a href="">Health Info.</a>
          <ul>
            <li><a href="Bmi.php">BMI</a></li>
            <li><a href="duedate.php">Due Date Calculator</a></li>
            <li><a href="vaccine1.php">Vaccine Reminder</a></li>
            <li><a href="postmain.php">Latest Posts</a></li>
          </ul>
        </li> 
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="logout1.php" class="appointment-btn scrollto" target="_self"> Logout  </a>

    </div>
  </header><!-- End Header --><br><br>
  <?php
  }
  elseif($type=='D')
  {
  ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a style="margin:-80px"href="index.php" class=" mr-auto"><img src="assets/img/logo.png" alt=""></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>

          <li><a href="Sym.php">Symptom checker</a></li>
          <li><a href="Docpanel.php">Docpannel</a></li>
           <li class="drop-down"><a href="">Health Info.</a>
          <ul>
            <li><a href="Bmi.php">BMI</a></li>
            <li><a href="duedate.php">Due Date Calculator</a></li>
            <li><a href="postmain.php">Latest Posts</a></li>
          </ul>
        </li> 
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="logout1.php" class="appointment-btn scrollto" target="_self"> Logout  </a>

    </div>
  </header><!-- End Header --><br><br>
  <?php
  }
  else
  {
  ?>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a style="margin:-80px"href="index.php" class=" mr-auto"><img src="assets/img/logo.png" alt=""></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>

          <li><a href="Sym.php">Symptom checker</a></li>
          <li class="drop-down"><a href="">Q&A.</a>
          <ul>
            <li><a href="quemain.php">Answered Question's</a></li>
          </ul>
          </li>
          <li><a href="findadoc.php">Find A doctor</a></li>
           <li class="drop-down"><a href="">Health Info.</a>
          <ul>
            <li><a href="Bmi.php">BMI</a></li>
            <li><a href="duedate.php">Due Date Calculator</a></li>
            <li><a href="postmain.php">Latest Posts</a></li>
          </ul>
        </li> 
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="login.php" class="appointment-btn scrollto" target="_self"> Login  </a>

    </div>
  </header><!-- End Header --><br><br>
  <?php
  }
  ?>