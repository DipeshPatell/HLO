<?php 
include('header.php');
include 'Connect.php';

$type=$_SESSION['type'];
if($type =='U')
{

?>



<link href="login.css" rel="stylesheet">
<body>
<div class="signup-form">
    <form action="vaccine.php" method="post" class="form-horizontal">

		<div class="row">
        	<div class="col-8 offset-4">
				<h2>Vaccine Remainder.</h2>
			</div>	
      	</div>
		<div>
		<p class= "bg-success text-white px-4"> 
	<?php
	$Date=date('Y-m-d');
	?>
		
		
		<div class="form-group row">
        <label class="col-form-label col-4">Name<span class="required"> *</span></label>
			<div class="col-8">
                <input type="text" class="form-control" name="name" required="required">
            </div>        	
        </div>
		<div class="form-group row">
			<label class="col-form-label col-4">Date of Birth<span class="required"> *</span></label>
			<div class="col-8">
                <input type="date" class="form-control" name="birthdate" min="<?php echo date('Y-m-d', strtotime($Date. '- 18 years'))?>" required="required">
            </div>        	
        </div>      	
		<div class="form-group row">
			<div class="col-8 offset-4">
				<button type="submit" class="btn btn-primary btn-lg" name="login_user">Send</button>
			</div>  
			
		</div>		      
    </form>
	<?php
	}
	else{
		?>
		<div>
		
		<p class= "bg-success text-white px-4"> 
		<?php
	echo"Login is required to use this feature.";
          ?>
	</p>
		</div>
	<?php } ?>
</div>
</body>
</html>