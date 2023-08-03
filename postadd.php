<?php
include 'Connect.php';
include('header.php');
Session_start();
?>
<html>
<head>
<title>PostAdd</title>
<link href="assets/css/Bmi.css" rel="stylesheet">
<link href="assets/css/login.css" rel="stylesheet">
</head>
<body>
       
     <form action="" method="post" class="form-horizontal" enctype = "multipart/form-data">
      	
	 <div class="signup-form">		
	 <div class="row">
        	<div class="col-8 offset-4">
				<h2>Add-Post</h2>
			</div>	
      	</div>
		<div class="form-group row">
			<label class="col-form-label col-4">Post_Image<span class="required"> *</span></label>
			<div class="col-8">
                <input type="file" class="form-control" name="image" required="required">
            </div> 
		</div>
		<div class="form-group row">
			<label class="col-form-label col-4">Post-Title<span class="required"> *</span></label>
			<div class="col-8">
                <input type="text" class="form-control" name="posttitle" required="required">
            </div>        	
        </div>
		<div class="form-group row">
			<label class="col-form-label col-4">Post-Text<span class="required"> *</span></label>
			<div class="col-8">
			<textarea rows="4" cols="50" class="form-control" name="posttext" placeholder="Enter the Post text here."></textarea>
            </div>        	
        </div>
		<div class="form-group row">
				<div class="col-8 offset-4">
					<button type="submit" name = "Submit" class="btn btn-primary btn-lg">Add Post</button>
					</div>
			</div> 
  
      </div>
    </form>

<?php
	$errors = array();
	$doc=$_SESSION['doc_name'];
	$docid = "SELECT Doc_ID FROM doc_account WHERE Doc_Name = '$doc'";
	if(isset($_POST['Submit'])){
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
		
		
			$query = "INSERT INTO post_info(Doc_ID,Post_Img,Post_Head,Post_Txt) VALUES('$docid','$destinationfile','$posttitle','$posttext')";
			mysqli_query($db , $query); 
			echo $query;
	
			
			}	
		}

?>


<?php
include('footer.php')
?>
</body>
</html>