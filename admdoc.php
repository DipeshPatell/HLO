<?php
session_start();
$user= $_SESSION['name'];
$type = $_SESSION['type'];
if($type == "A"){
    include 'Connect.php';
    $sql = "SELECT * FROM doc_account";
    if($result = mysqli_query($db, $sql)){
      if(mysqli_num_rows($result) > 0){  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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

    <title>HLO</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://kit.fontawesome.com/da6b9789f2.js" crossorigin="anonymous"></script>
<link href="assets/css/style.css" rel="stylesheet">
   <style>



   .btscol{
    background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 6px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
   }
   .bts{
  background-color: white; 
  color: black; 
  border: 2px solid #3fbbc0;
}

.bts:hover {
  background-color: #3fbbc0;
  color: white;
}
</style>
</head>
<body>
    <!-- Image and text -->
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
 
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>

      <nav class="nav-menu d-none d-lg-block">
      <ul>
          <li class="active">Welcome, <?php echo "$user"; ?></li>
      </ul>       
      </nav><!-- .nav-menu -->

      <a href="logout.php" class="appointment-btn scrollto" target="_self"> Logout  </a>

    </div>
  </header><!-- End Header --><br><br>


<!--/.Navbar -->
    <div id="wrapper">
        <br><br><br>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">           
                <ul class="nav" id="main-menu">	
                    
                      <li style="background-color:white">
                        <a  href="Adminpanel.php"><i class="fa fa-3x fa-question-circle" aria-hidden="true"></i>Manage Question&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;</a>
                    </li>
                    <li>
                        <a  href="admpost.php"><i class="fa fa-3x fa-pencil-square-o" aria-hidden="true"></i>View Posts&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
                    </li>
                  <li  >
                        <a  href="admuser.php"><i class="fa fa-users fa-3x" aria-hidden="true"></i>Manage Users&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;</a>
                    </li>	
                    <li  >
                        <a class="active-menu"  href="admdoc.php"><i class="fa fa-user-md fa-3x" aria-hidden="true"></i>Manage Doctors&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&ensp;</a>
                    </li>	
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage the Doctors</h2>   
                        <h5>Welcome  , Love to see you back. </h5>

      <div class="col-md-9 col-lg-10 main"><br>
        <h1 class="lead hidden-xs-down">Signed Accounts:</h1>
        <table style="table-layout: fixed; width: 100%" class="table table-hover">
            <thead>
              <tr>
                <th  style=" width: 25%"scope="col">ID</th>
                <th style=" width: 25%"scope="col">Name</th>
                <th style=" width: 25%"scope="col">Email</th>
                <th style=" width: 25%"scope="col">Created at</th>
                
              </tr>
            </thead>
            <tbody>
             <?php 
              while($rows=$result->fetch_assoc())
              {
             ?>
              <tr>
                <td style="word-wrap: break-word" ><?php echo $rows['Doc_ID'] ?></td>
               
                <td><?php echo $rows['Doc_Name']; ?></td><?php $ans = "doc"; ?></td>
                <td><?php echo $rows['Doc_Email']; ?></td>
                <td><?php echo $rows['D_Created']; ?></td>
                <td><?php echo'<a href="deleteans.php?id='.$rows['Doc_ID'].'&stat='.$ans.'" class=" btscol bts ">'?>
                      <i class="lni lni-trash"></i></i> Delete
                      </a></td>
              </tr> 
              <?php 
              }
              ?>
            </tbody>
          </table>
          </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
<?php
}
else{
  include('header.php');
  echo '  
        <br><br><br><h1>Sorry no records found.</h1><hr>';
        include('footer.php'); 
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

}else{
 include('404.html');}