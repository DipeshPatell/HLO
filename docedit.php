<?php
session_start();
$user = $_SESSION['name'];
$type = $_SESSION['type'];
if($type == "D"){

    include 'Connect.php';
  $sql = "SELECT * FROM doc_account where Doc_Name = '$user'";
  if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){  
    
include("header.php");

?>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>docedit</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/da6b9789f2.js" crossorigin="anonymous"></script>
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
    <div id="wrapper">
       <br><br>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">           
                <ul class="nav" id="main-menu">	
                    
                      <li style="background-color:white">
                        <a  href="Docpanel.php"><i class="fa fa-3x fa-question-circle" aria-hidden="true"></i>Answer Questions&ensp;&emsp;&emsp;&emsp;&emsp;</a>
                    </li>
                    <li>
                        <a  href="Addpost.php"><i class="fas fa-mail-bulk fa-3x"></i>Add Posts&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</a>
                    </li>
                  <li  >
                        <a  class="active-menu" href="docedit.php"><i class="far fa-edit fa-3x"></i> Edit Info&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Update your Info here.</h2>   
                        <h5>Welcome , Love to see you back. </h5>
                        <?php
		if(isset($_SESSION['msg'])){
echo '<span class= "bg-success text-white px-4">';
	    echo $_SESSION['msg'];
      unset($_SESSION['msg']);
	}
  ?>
  </span>
      <div class="col-md-9 col-lg-10 main"><br>
        <h1 class="lead hidden-xs-down">Update the info.</h1>
        <table style="table-layout: fixed; width: 100%" class="table table-hover">
            <thead>
              <tr>
                <th style=" width: 15%" scope="col">Name</th>
                <th style=" width: 15%"scope="col">Qualification</th>
                <th style=" width: 20%"scope="col">Experience</th>
                <th style=" width: 50%"scope="col">Address</th>
                <!--<th style=" width: 20%"scope="col">Password</th>-->
              
                
              </tr>
            </thead>
            <tbody>
             <?php 
              while($rows=$result->fetch_assoc())
              {
                  $pass=$rows['Doc_Pwd'];

             ?>
              <tr>
                <td><?php echo $rows['Doc_Name'] ?></td>
                <td><?php echo $rows['Doc_Qualification'] ?></td>
                <td><?php echo $rows['Doc_Experience'] ?></td>
                <td><?php echo $rows['Doc_Address'] ?></td>
                <td><?php echo'<a href="docedit1.php?id='.$rows['Doc_ID'].'" class=" btscol bts ">'?>
                <i class="lni lni-trash"></i></i> Update
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

}
else{
  include('404.html');
}
include("footer.php");
?>