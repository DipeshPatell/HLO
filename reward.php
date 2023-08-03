<?php
include 'header.php';
?>

<center><img src="assets/img/reward.svg"  style="margin-top: 5%; margin-bottom: 5% ;" alt="child infoormation page" alt="child infoormation page" width="80%" id="image" ></center>

<h2 style="margin-left:2%">For Download</h2>
<script>
document.getElementById('download').click();
</script>
<a href="https://drive.google.com/file/d/1nVtGrfGxDEka_A4bC7miunvilRq7p8GR/view?usp=sharing" download id="download" > 
<button style="margin-left:20px" class="btn btn-primary btn-lg "> From Drive </button> 
<button onClick="window.print()" style="margin-left:10px" id="btnExport" class="btn btn-primary btn-lg">Print this page</button>


<?php
include 'footer.php';
?>