<?php
include 'header.php';
?>
<html>
<head>
<title>Due Date</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

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


<link href="assets/css/h&f.css" rel="stylesheet">
<link href="assets/css/Bmi.css" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
function calc()
{
var day = document.first.len11.value;
var mon = document.first.len12.value;
var year = document.first.len13.value;
var ylen = year.length;
var d = new Array("SUNDAY", "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY");
var m = new Array("JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER",
"DECEMBER");
var curd = new Date(year,mon-1,day);
var res2 = curd.getMonth();
var res = new Date();
var diff =
Date.UTC(res.getFullYear(),res.getMonth()-1,res.getDay(),0,0,0)
- Date.UTC(curd.getFullYear(),curd.getMonth()-1,curd.getDay(),0,0,0);
var secleft = diff/1000/60;
var hrsleft = secleft/60;
var daysleft = hrsleft/24;
//if(res2 == (mon-1) && daysleft < 300 && year!="")
if (year!="" && ylen>3)
{
var fd1 = new Date(year, mon-1, parseInt(day)+10);
document.first.fd1.value = d[fd1.getDay()]+", "+m[fd1.getMonth()]+" "+fd1.getDate()+", "+fd1.getFullYear();
var fd2 = new Date(year, mon-1, parseInt(day)+20);
document.first.fd2.value = d[fd2.getDay()]+", "+m[fd2.getMonth()]+" "+fd2.getDate()+", "+fd2.getFullYear();
var cd = new Date(year, mon-1, parseInt(day)+14);
document.first.cd.value = d[cd.getDay()]+", "+m[cd.getMonth()]+" "+cd.getDate()+", "+cd.getFullYear();
var fte = new Date(year, mon-1, parseInt(day)+84);
document.first.fte.value = d[fte.getDay()]+", "+m[fte.getMonth()]+" "+fte.getDate()+", "+fte.getFullYear();
var ste = new Date(year, mon-1, parseInt(day)+189);
document.first.ste.value = d[ste.getDay()]+", "+m[ste.getMonth()]+" "+ste.getDate()+", "+ste.getFullYear();
var dd = new Date(year, mon-1, parseInt(day)+280);
document.first.dd.value = d[dd.getDay()]+", "+m[dd.getMonth()]+" "+dd.getDate()+", "+dd.getFullYear();
}
else{
alert("Invalid Date");
}
}
function isNumber(evt) {evt = (evt) ? evt : window.event;var charCode = (evt.which) ? evt.which : evt.keyCode;if (charCode > 31 && (charCode < 48 || charCode > 57)) {return false;}return true;
}
function chk(){
var sds = document.getElementById('dum');
if(sds == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");
document.getElementById("tab").style.visibility="hidden";
}
var sdss = document.getElementById("dumdiv");
if(sdss == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
}
window.onload=chk;
</script>
<style>
.leftt
{float:left;
color: #3D366F; font-size:13px;
}
.tbox
{
width:45% !important;
}
.frms {border: 1px solid #ddd;border-radius: 0.3em;color: #333;font-family: Tahoma,Geneva,sans-serif;font-size: 0.9em;line-height: 1.2em;margin: 0 auto;padding: 10px;width:50%;
}
.frms input[type="text"], [type="password"], [type="file"], textarea, select {background: none repeat scroll 0 0 #fff;border: 1px solid #ddd;border-radius: 0.35em;height: 35px;margin-bottom: 15px;margin-top: 5px;padding: 0 0.5%;width: 99%;
}
.frms input[type="submit"], input[type="reset"], input[type="button"], button, .yellow_button, .blue_button {border: medium none;border-radius: 0.3em;color: #fff;cursor: pointer;font-weight: bold;margin: 10px 0;padding: 7px 14px;
}
.frms input[type="reset"] {background: none repeat scroll 0 0 #ee765d;border-bottom: 3px solid #d95e44;text-shadow: 1px 1px 0 #8c3736;
}
input[type="button"], button, .blue_button {background: none repeat scroll 0 0 #468cd2;border-bottom: 3px solid #3277bc;text-shadow: 1px 1px 0 #214d73;
}
.new
{padding: 16px;
}
@media only screen and (max-width:480px)
{.frms {width:90% !important;}.tbox
{
width:95% !Important;
}.frms input[type="text"], [type="password"], [type="file"], textarea, select {width:95% !important;}}

</style>

</head>

<div class id="cen">
<h2>Pregnancy Calculator</h2>
</div>
<div class='clear'></div>
<form id='tab' name=first class='frms'>
<div>
<label>Date of Last Menstrual Period:</label>
<div class="group_con">
  <div class="form-group">
<label class='leftt'>Date </label><select name=len11><option name=1 value=1>1</option>
<option name=2 value=2>2</option><option name=3 value=3>3</option><option name=4 value=4>4</option>
<option name=5 value=5>5</option><option name=6 value=6>6</option><option name=7 value=7>7</option><option name=8 value=8>8</option>
<option name=9 value=9>9</option><option name=10 value=10>10</option><option name=11 value=11>11</option>
<option name=12 value=12>12</option><option name=13 value=13>13</option><option name=14 value=14>14</option>
<option name=15 value=15>15</option><option name=16 value=16>16</option><option name=17 value=17>17</option>
<option name=18 value=18>18</option><option name=19 value=19>19</option><option name=20 value=20>20</option>
<option name=21 value=21>21</option><option name=22 value=22>22</option><option name=23 value=23>23</option>
<option name=24 value=24>24</option><option name=25 value=25>25</option><option name=26 value=26>26</option>
<option name=27 value=27>27</option><option name=28 value=28>28</option><option name=29 value=29>29</option>
<option name=30 value=30>30</option><option name=31 value=31>31</option>
</select></div>
<div class="group_con"><label class='leftt'>Month</label><select name=len12><option name=1 value=1>1</option>
<option name=2 value=2>2</option><option name=3 value=3>3</option><option name=4 value=4>4</option><option name=5 value=5>5</option>
<option name=6 value=6>6</option><option name=7 value=7>7</option><option name=8 value=8>8</option><option name=9 value=9>9</option>
<option name=10 value=10>10</option><option name=11 value=11>11</option><option name=12 value=12>12</option></select>
</div>
<div class='group_con'><label class='leftt'>Year</label>
<input name=len13 type=text onkeypress="return isNumber(event)" maxlength='4'>
</div></div>
<div align='center'><input type=button
name=cc value=Calculate onClick="calc()">
<input type="reset" value="Reset">
</div>
<div align='center'><h5>Due Date, Conception Date Calculation Results:</h5></div><label class='leftt'>Estimated Fertility Dates :</label><br><br>
<span><input type=text readonly
class='tbox' name=fd1 style='float:left;'></span>
<span class='new'>
to
</span>
<span><input type=text readonly
class='tbox' name=fd2> </span><div> <label class='leftt'>Estimated Conception Date :</label>
<input type=text readonly name=cd> </div><div> <label class='leftt'>First Trimester Ends(12 Weeks) :</label>
<input type=text readonly name=fte> </div>
<div> <label class='leftt'>Second Trimester Ends(27 Weeks):</label>
<input type=text readonly name=ste> </div>
<div> <label class='leftt'>Estimated Due Date(40 Weeks) :</label>
<input type=text readonly name=dd> </div><script type="text/javascript"></script>
</form>
<div id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;"><a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="https://www.hscripts.com">&copy;h</a></div>
</div>
</div>

 <?php
 include 'footer.php'
 ?>