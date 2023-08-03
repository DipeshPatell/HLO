<?php

	$files = $_FILES['image'];

$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));
$fileexstored = array('png','jpg' ,'jpeg');

#image code is from here

$files1 = $_FILES['image1'];

$filename1 = $files1['name'];
$fileerror = $files1['error'];
$filetmp1 = $files1['tmp_name'];

$fileext1 = explode('.',$filename1);
$filecheck1 = strtolower(end($fileext1));
$fileexstored1 = array('png','jpg' ,'jpeg');

if(in_array($filecheck,$fileexstored))
		{
			$destinationfile = 'upload/' .$filename;
            move_uploaded_file($filetmp,$destinationfile);

            $query = "INSERT INTO doc_account(Doc_Name,Doc_Qualification,Doc_Image,Doc_Certificate,Doc_Experience,Doc_Address,Doc_Email,Doc_Pwd,Doc_Token,D_Valid) VALUES('$username','$qualification','$destinationfile1','$destinationfile','$experience','$address' ,'$email','$password','$token','inactive')";
			mysqli_query($db , $query);
        }
            ?>
            <html>
            <body>
            <form action="images.php" method="post" class="form-horizontal" enctype = "multipart/form-data">
            <div class="form-group row">
			<label class="col-form-label col-4">Your-Photo<span class="required"> *</span></label>
			<div class="col-8">
                <input type="file" name="image1" id  = "image" class="form-control">
            </div>  
		</div>
        </form>
        </body>
        </html>