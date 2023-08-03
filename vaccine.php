<?php
include('header.php');

$original_date = $_POST['birthdate'];
 
// Creating timestamp from given date
$timestamp = strtotime($original_date);
 
// Creating new date format from that timestamp
$Date = date("d-m-Y", $timestamp);

$name=$_POST['name'];

?><br><br><br>
	
<table  style="table-layout: fixed; width: 100%" id="vaccine" class="table table-hover" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<div class="row">
        	<div class="col-8 offset-4">
            <th colspan="6"><h2 style="color: #3fbbc0;">Vaccine Remainder of <?php echo"$name";?></h2></th>
			</div>	
      	</div>
</tr>
<tr>
<td class="rtecenter" dir="LTR" colspan="6"><strong>National Immunization Schedule&nbsp;</strong></td>
</tr>
<tr>
<td dir="LTR"><strong>Vaccine&nbsp;</strong></td>
<td dir="LTR"><strong>When to give&nbsp;</strong></td>
<td dir="LTR"><strong>Dates&nbsp; &nbsp; &nbsp;</strong></td>
<td dir="LTR"><strong>Dose&nbsp;</strong></td>
<td dir="LTR"><strong>Route</strong></td>
<td dir="LTR"><strong>Site</strong></td>
</tr>
<tr>
<td class="rtecenter" dir="LTR" colspan="6"><strong>For Infants&nbsp;</strong></td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;"> BCG&nbsp;</td></a>
<td dir="LTR">At birth or as early as possible till one year of age&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 0 months'))," To " ,date('d-m-Y', strtotime($Date. ' + 1 years')); ?>&nbsp;</td></a>
<td dir="LTR">0.1ml&nbsp; (0.05ml until 1 month of age)&nbsp;</td>
<td>Intra -dermal</td>
<td>Left Upper Arm</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">Hepatitis B Birth dose&nbsp;</td></a>
<td dir="LTR">At birth or as early as possible within 24 hours&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 0 months'))," To " ,date('d-m-Y', strtotime($Date. ' + 1 days'));?> &nbsp;</td></a>
<td dir="LTR">0.5 ml&nbsp;</td>
<td>Intramuscular</td>
<td>Anterolateral side of mid thigh-LEFT</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">OPV Birth dose&nbsp;</td></a>
<td dir="LTR">At birth or as early as possible within the first 15 days&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 0 months'))," To " ,date('d-m-Y', strtotime($Date. ' + 14 days'));?>&nbsp;</td></a>
<td dir="LTR">2 drops&nbsp;</td>
<td>Oral</td>
<td>-</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">OPV 1,2 &amp; 3&nbsp;</td></a>
<td dir="LTR">&nbsp;At 6 weeks, 10 weeks &amp; 14 weeks&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 6 weeks'))," , " ,date('d-m-Y', strtotime($Date. ' + 10 weeks'))," , ",date('d-m-Y', strtotime($Date. ' + 14 weeks'));?>&nbsp;</td></a>
<td dir="LTR">2 drops&nbsp;</td>
<td>Oral</td>
<td>-</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">IPV (inactivated Polio Vaccine)</td></a>
<td dir="LTR">&nbsp;14 weeks&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 14 weeks'));?>&nbsp;</td>
<td dir="LTR">0.5 ml&nbsp;</td>
<td>Intramuscular</td>
<td>Anterolateral side of mid thigh-RIGHT</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">Pentavelant&nbsp; 1,2 &amp; 3&nbsp;</td></a>
<td dir="LTR">&nbsp;At 6 weeks, 10 weeks &amp; 14 weeks&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 6 weeks'))," , " ,date('d-m-Y', strtotime($Date. ' + 10 weeks'))," , ",date('d-m-Y', strtotime($Date. ' + 14 weeks'));?>&nbsp;</td></a>
<td dir="LTR">0.5 ml&nbsp;</td>
<td>Intramuscular</td>
<td>Anterolateral side of mid thigh-LEFT</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">Rota Virus Vaccine</td></a>
<td dir="LTR">&nbsp;At 6 weeks, 10 weeks &amp; 14 weeks&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 6 weeks'))," , " ,date('d-m-Y', strtotime($Date. ' + 10 weeks'))," , ",date('d-m-Y', strtotime($Date. ' + 14 weeks'));?>&nbsp;</td></a>
<td dir="LTR">5 drops&nbsp;</td>
<td>Oral</td>
<td>-</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">Measles 1<sup>st</sup>&nbsp;Dose&nbsp;</td></a>
<td dir="LTR">9 completed months-12 months. (give up to 5 years if not received at 9-12 months age)&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 9 months'))," to " ,date('d-m-Y', strtotime($Date. ' + 12 months'))," else Upto ",date('d-m-Y', strtotime($Date. ' + 5 years'));?>&nbsp;</td></a>
<td dir="LTR">0.5 ml&nbsp;</td>
<td>Subcutaneous</td>
<td>Right Upper Arm</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">Vitamin A, 1<sup>st</sup>&nbsp;Dose&nbsp;</td></a>
<td dir="LTR">At 9 months with measles&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 9 months'));?>&nbsp;</td></a>
<td dir="LTR">1 ml&nbsp; (1 lakh IU)&nbsp;</td>
<td>Oral</td>
<td>-</td>
</tr>
<tr>
<td class="rtecenter" dir="LTR" colspan="6"><strong>For children</strong></td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">DPT 1<sup>st&nbsp;</sup>&nbsp;booster&nbsp;</td></a>
<td dir="LTR">16-24 months&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 16 months'))," to " ,date('d-m-Y', strtotime($Date. ' + 24 months'));?>&nbsp;</td></a>
<td dir="LTR">0.5 ml&nbsp;</td>
<td>Intramuscular</td>
<td>Anterolateral side of mid thigh-LEFT</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">OPV Booster&nbsp;</td></a>
<td dir="LTR">16-24 months&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 16 months'))," to " ,date('d-m-Y', strtotime($Date. ' + 24 months'));?>&nbsp;</td></a>
<td dir="LTR">2 drops&nbsp;</td>
<td>Oral</td>
<td>&nbsp;</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">Measles 2<sup>nd</sup>&nbsp; dose&nbsp;</td></a>
<td dir="LTR">16-24 Months&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 16 months'))," to " ,date('d-m-Y', strtotime($Date. ' + 24 months'));?>&nbsp;</td></a>
<td dir="LTR">0.5 ml&nbsp;</td>
<td>Subcutaneous</td>
<td>Right Upper Arm</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">Vitamin A&nbsp; (2<sup>nd</sup>&nbsp;to 9<sup>th</sup>&nbsp;dose)&nbsp;</td></a>
<td dir="LTR">16 months with DPT/OPV booster, then, one dose every 6 month up to the age of 5 years)&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo "First at ",date('d-m-Y', strtotime($Date. ' + 16 months'))," then every 6 months till " ,date('d-m-Y', strtotime($Date. ' + 5 years'));?>&nbsp;</td></a>
<td dir="LTR">2 ml&nbsp; (2 lakh IU)&nbsp;</td>
<td>Oral</td>
<td>-</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">DPT 2<sup>nd</sup>&nbsp;Booster&nbsp;</td></a>
<td dir="LTR">5-6 years&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 5 years'))," to " ,date('d-m-Y', strtotime($Date. ' + 6 years'));?>&nbsp;</td></a>
<td dir="LTR">0.5 ml.&nbsp;</td>
<td>Intramuscular</td>
<td>Left Upper Arm</td>
</tr>
<tr>
<td dir="LTR"><a href="" style="color: #3fbbc0;">TT&nbsp;</td></a>
<td dir="LTR">10 years &amp; 16 years&nbsp;</td>
<td dir="LTR"><a style="color: #3fbbc0;"><?php echo date('d-m-Y', strtotime($Date. ' + 10 years'))," & " ,date('d-m-Y', strtotime($Date. ' + 16 years'));?>&nbsp;</td></a>
<td dir="LTR">0.5 ml&nbsp;</td>
<td>Intramuscular</td>
<td>Upper Arm</td>
</tr>
</tbody>
</table>
<hr>
<div class="form-group row">
<input type="button" id="btnExport" style="margin-left:10px" class="btn btn-primary btn-lg" value="Export as PDF" onclick="Export()"/> 
<button onClick="window.print()" style="margin-left:10px" id="btnExport" class="btn btn-primary btn-lg">Print this page</button>
</div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('vaccine'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Vaccine.pdf");
                }
            });
        }
    </script>
<?php
include('footer.php');
?>


