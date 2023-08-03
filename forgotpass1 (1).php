<?php
session_start();
ob_start();
include ('Connect.php');
include ('header.php');
?>


<body>
<div class="signup-form">
	<div>
		<p class= "bg-success text-white px-4"> 
		<?php
			if(isset($_SESSION['msg']))
	  {
		  echo $_SESSION['msg'];
	  }
      else{
		  echo $_SESSION['msg']="";
	  }
	?></p></div>
    <form action="#" method="post" class="form-horizontal">
      	<div class="row">
        	<div class="col-8 offset-4">
				<h2>Forgot Password</h2>
			</div>	
		  </div>			
		  
		<div class="form-group row">
			<label class="col-form-label col-4">New password<span class="required"> *</span></label>
			<div class="col-8">
                <input type="password" class="form-control" name="forgot" required="required">
            </div>        	
        </div>
        <div class="form-group row">
			<label class="col-form-label col-4">Confrim Password<span class="required"> *</span></label>
			<div class="col-8">
                <input type="password" class="form-control" name="forgot1" required="required">
            </div>        	
        </div>
		<div class="form-group row">
			<div class="col-8 offset-4">
              <button type="submit" name="submit-pass" class="btn btn-primary btn-lg">Submit</button> 
			</div>  
			
		</div>		      
    </form>
	<?php
	  

	  if(isset($_POST['submit-pass']))
		{
			if(isset($_GET['token'])){
				$token = $_GET['token'];
			}
			$newpassword = mysqli_real_escape_string($db,$_POST['forgot']);
			$cpassword = mysqli_real_escape_string($db,$_POST['forgot1']);

			
			if($newpassword === $cpassword)
			{
			   $password = md5($newpassword);
			   $updatequery = "UPDATE user_account SET User_Pwd='$password' Where User_Token='$token'";
				   
				$iquery= mysqli_query($db,$updatequery);

				if($iquery)
				{
					 $_SESSION['msg']="your password has been updated";
					 header('location:login.php');
				}
				else
				{
					 $_SESSION['msg']="your password is not updated";
					 header('location:forgotpass.php');
				}
			}
			else
			{
			   $_SESSION['msg']="your password is not updated";
			   echo"password are not matching";
			}
		   
		   }
		   
		   else{
			   $_SESSION['msg']="no token found";
		   
			   
		   }
		   
	 ?>
</div>
</body>
</html>