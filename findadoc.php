<?php
session_start();
include 'header.php';
include 'Connect.php';
 ?>
  <!-- Find a Doctor-->
    <title>Find Doc</title>
    <link rel="stylesheet" href="sym.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">


  <!-- Coded of the search bar-->
  <body><br><br><br><br><br>

<h1 style="text-align:center;font-size:60px;color:#3fbbc0;">Find Doctor.</h1>
<br><br>
<form autocomplete="off" action="findadoc.php" method="GET">
<div  class="autocomplete" style="width:300px;height:200px;margin-left:37%;margin-bottom:-6%">
  <input id="myInput" type="text" name="Pin" placeholder="Your Pin Number" required>
</div>
<input type="submit">
</form>
</div>
<table style="table-layout: fixed; width: 100%" class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th style="margin-left:10%" scope="col">Qualification</th>
                <th style=" width: 45%" scope="col">Address</th>
              
                <th scope="col">Experience</th> 
              </tr>
            </thead>
            <tbody>
             <?php 
		
			 if(isset($_GET['Pin']))
			{
				$search = mysqli_real_escape_string($db,$_GET['Pin']);
				$query = "SELECT * from doc_account WHERE Doc_Pin LIKE '%".$search."%'";
				$search_result = filterTable($query);
			
			}
			else
			{				
				$query = "SELECT * FROM doc_account" ;
			    $search_result = filterTable($query);
      }
			function filterTable($query)
			{
				$db = mysqli_connect("localhost", "root", "", "hlo");
				$filter_Result = mysqli_query($db, $query);
				return $filter_Result;
			}
       
             ?>
       <?php while($rows = mysqli_fetch_array($search_result)):
        $name=$rows['Doc_Name'];?>
              <tr>
                <td><?php echo'<a href="docdetail.php?id='.$rows['Doc_ID'].'">'; echo "DR.$name";?></a></td>
                <td><?php echo $rows['Doc_Qualification']; ?></td>
                <td style="word-wrap: break-word" ><?php echo $rows['Doc_Address']; ?></td>
                
                <td><?php echo $rows['Doc_Experience']; ?></td>
              </tr> 
           <?php endwhile;?>
            </tbody>
          </table>
          <br> <br> <br> <br>
           
<?php
include('footer.php');
?>