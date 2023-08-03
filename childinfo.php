<?php
include 'header.php';
?>

<center><img src="assets/img/childinfo.svg" alt="child infoormation page" width="80%" ></center>

<h2 style="margin-left:2%">For Download</h2>
<script>
document.getElementById('download').click();
</script>
<a href="https://drive.google.com/file/d/1hnQnBp6ZI5k_vJSFprbaksAQx-o6j0aj/view?usp=sharing" download id="download" > 
<button style="margin-left:20px" class="btn btn-primary btn-lg "> From Drive </button> </a>

<button onClick="window.print()" style="margin-left:20px" id="btnExport" class="btn btn-primary btn-lg">Print this page</button>

<?php
include 'footer.php';
?>