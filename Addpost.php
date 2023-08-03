<?php
ob_start();
$user='';
$type='';
session_start();
$user = $_SESSION['name'];
$doc='';
$type = $_SESSION['type'];
if($type == "D"){

    include 'Connect.php';
    
include "header.php";

?>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HLO</title>
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
                        <a  class="active-menu" href="Addpost.php"><i class="fas fa-mail-bulk fa-3x"></i>Add Posts&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</a>
                    </li>
                <!--  <li  >
                        <a  href="docedit.php"><i class="far fa-edit fa-3x"></i> Edit Info&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</a>
                    </li>-->	
                </ul>
               
            </div>
            
        </nav>   
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Posts</h2>   
                        <h5>Welcome  , Love to see you back. </h5>

      <div class="col-md-9 col-lg-10 main"><br>
      <?php
		if(isset($_SESSION['msg'])){
echo '<span class= "bg-success text-white px-4">';
	    echo $_SESSION['msg'];
      unset($_SESSION['msg']);
	}
  ?>
  </span>
        <h1 class="lead hidden-xs-down">Write Down an Article!</h1><hr>
        <form action="Addpost.php" method="POST"  enctype = "multipart/form-data">
          <div class="form-group">
			<label class="col-2">Post Title<span class="required"> *</span></label>
			<div class="col-10">
                <input type="text" class="form-control" name="posttitle" required="required">
            </div>    <hr>    	
        </div>
			<label class="col-2">Post Text<span class="required"> *</span></label>
			<div class="col-10">
			<textarea rows="15" cols="50" class="form-control" name="posttext" placeholder="Enter the Post text here."></textarea>
            </div>   <hr>
                    <label class="col-4">Post Image<span class="required"> *</span></label>
			<div class="col-2">
                <input type="file" name="image" required="required">
            </div> <hr>
          	<div class="col-10">
             <input type="submit" name ="Submit" value="Send" class="bts btscol">
</div>
    		    </div>
    		    
    		</form>
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
	$errors = array();
	$doc=$_SESSION['doc_name'];
	$docid = "SELECT Doc_ID FROM doc_account WHERE Doc_Name = '$doc'";
	$result=mysqli_query($db,$docid);
	$result1=mysqli_fetch_assoc($result);
	$resulta=$result1['Doc_ID'];
	
	if(isset($_POST['Submit']))
	{
	$files = "";
	$posttitle = mysqli_real_escape_string($db, $_POST['posttitle']);
	$posttext = mysqli_real_escape_string($db, $_POST['posttext']);

	$files = $_FILES['image'];

	$filename = $files['name'];
	$fileerror = $files['error'];
	$filetmp = $files['tmp_name'];

	$fileext = explode('.',$filename);
	$filecheck = strtolower(end($fileext));
	$fileexstored = array('png','jpg' ,'jpeg');
	
		if(in_array($filecheck,$fileexstored))
		{
			$destinationfile = 'posts/' .$filename;
			move_uploaded_file($filetmp,$destinationfile);
			$query = "INSERT INTO post_info(Doc_ID,Post_Img,Post_Head,Post_Txt) VALUES('$resulta','$destinationfile','$posttitle','$posttext')";
			mysqli_query($db , $query); 
      $_SESSION['msg'] = "Post added sucessfully";
      header('location:Addpost.php');
  		}	
		else
		{
			echo "not possible";
		}
	}

?>

<?php
}
else{
  include('404.html');
}
include("footer.php");

?>