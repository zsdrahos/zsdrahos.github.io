<!DOCTYPE html>
<html lang="hu">
<head>
  <title>14th Central and Eastern European Proteomic Conference</title>
  <meta charset="utf-8">
  <meta name="description" content="CEEPC">
  <meta name="keywords" content=" CEEPC, 14th CEEPC, Proteomic Conference, Drahos, Vekey ">
	<meta name="author" content=" Hungarian Academy of Sciences, Research Center for Natural Sciences ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="preload" >
<?php
    include("../includes/header.php");
?>
 <!-------------------------------------------- BAL OLDAL --------------------------------------------->

  <div class="container-fluid text-center" >    
  <div class="row content" >
	 
	<?php
    include("../includes/baloldal.php");
	?>
	
<!--------------------------------------------- MAIN PART --------------------------------------------->	
    <div class="col-sm-8 text-left kozep">
		<?php 
$path="";
include 'common.php';


// A regisztracionak vege ezert mar csak azt irja ki, hogy vege a regisztracionak. 
//print "<h2 style=\"text-align: center;\">Registration is closed.</h2>";
//exit();


?>


  
    
 <?php  if (isset($_GET["id"])) { UpdateVars($_GET["id"], $logfiletxt); }  ?>

            <form method="post" action="registred.php" name="regform" enctype="multipart/form-data" >
                <h1><span class="c3">14<sup>th</sup> CEEPC</span> <span class="c3" lang="HU">Registration Form</span></h1>
                <br />
	         <p align="justify"> Participation at the CEEPC is free for scientists, but only registered participants can take part at the meeting. In case of over-superscription (which is likely) the organizers retain the right to reject people who applied. 
		The organizers may also ask the applicants for a CV and/or letter of support from a prominent scientist.</p>
		<br />
                <p class="c6" align="justify">Every participant has to fill a registration form! 
				Note that, you can modify your registration or submit abstract by 30th June 2020. Registration deadline 30th June, 2020. You will be informed about its acceptance by the 11th July. </p>
		
	
				
<div style="line-height:150%;">
                <p class="c7"><span class="c5" lang="EN">&nbsp;&nbsp;</span></p>

                <p class="c10">I want to participate (please choose) <font size="4">
  <select size="1" name="D1" style="font-family: Times New Roman; ">
  <option <?php if ($D1=="1") echo 'selected' ?> value="1">as a participant</option>
  <!--  <option <?php if ($D1=="2") echo 'selected' ?> value="2">at the Magyar Proteomikai Fórum</option>
  <option <?php if ($D1=="3") echo 'selected' ?> value="3">at both Conferences</option> -->
  //<option <?php if ($D1=="0") echo 'selected' ?> value="0">as a company representative</option>
  </select></font>.</p><br />

                <p class="c10">My personal details:</p><hr>

<table align="center" style="width: 90%; text-align: left; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td width="20%" >Title:&nbsp; </td>
<td width="80%"><select size="1" name="D2" style="font-family: Times New Roman; ">
  <option <?php if ($D2=="Ms") echo 'selected' ?> value="Ms">Ms.</option>
  <option <?php if ($D2=="Mrs") echo 'selected' ?> value="Mrs">Mrs.</option>
  <option <?php if ($D2=="Mr") echo 'selected' ?> value="Mr">Mr.</option>  </select></td>
</tr>
<tr>
<td class="required">First name(s): &nbsp;</td>
<td><input name="TFirst" value="<?php echo $TFirst ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td class="required">Family name: &nbsp;</td>
<td><input name="TFamily" size="86"  value="<?php echo $TFamily ?>" class="input-res" type="text" /></td>
</tr>

<tr>
<td class="required">Institute/ Department:&nbsp;</td>
<td><input name="TMailing" value="<?php echo $TMailing ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td class="required">City:&nbsp;</td>
<td><input name="TCity" value="<?php echo $TCity ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td class="required">Country: </td>
<td><input name="TCountry" value="<?php echo $TCountry ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td>Phone:&nbsp;</td>
<td><input name="TPhone" value="<?php echo $TPhone ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td class="required">E-mail:&nbsp;</td>
<td><input name="TEmail2" value="<?php echo $TEmail2 ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td class="required">Retype E-mail:&nbsp;</td>
<td><input name="TEmail" value="<?php echo $TEmail ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td>
Billing address:&nbsp;&nbsp;<a href="" data-toggle="modal" data-target="#myModal2"><i class="fa fa-info-circle" style="font-size:24px"></i></a></td>

  
			  <div class="modal fade " id="myModal2" role="dialog">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h1 class="modal-title">Billing information:</h1>
					</div>
					<div class="modal-body">
					<p>
Billing address should only be filled in if you would like to receive an invoice of the conference dinner<br></p>
					</div>
				   
				  </div>
				</div>
			  </div>

<td> <input name="TBill1" value="<?php echo $TBill1 ?>" size="86" class="input-res" type="text" /><br>
     <input name="TBill2" value="<?php echo $TBill2 ?>" size="86" class="input-res" type="text" />
	 <input name="TBill3" value="<?php echo $TBill3 ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td>I wish to present  </td>
<td><select size="1" name="D3" style="font-family: Times New Roman; ">
<option <?php if ($D3=="no") echo 'selected' ?> value="no">no presentation</option> 
 <option <?php if ($D3=="poster") echo 'selected' ?> value="poster">a poster</option>
  <option <?php if ($D3=="oral") echo 'selected' ?> value="oral">an oral presentation</option>
  
  </select> <br>(please choose)</td>
</tr>
<tr>
<td>Title of the presentation:&nbsp;</td>
<td><input name="TTitle" value="<?php echo $TTitle ?>" size="79" class="input-res" type="text" /></td>
</tr>
<tr>
<td>Abstract:&nbsp;</td>
<td> <input name="FAbstract" size="20" type="file" class="input-res" /> <?php if ($Abstract=="1") echo '(You have already uploaded your abstract. To modify it, please, upload again)'; else echo' (Please upload MSWord file using the following template: <a href="../abstract-template.docx">abstract template.docx</a>)'; ?></td>
</tr>
</tbody>
</table>


               
			   <br><br>




                

               

               
                <big>Optional programs: </big><hr>
			
			
				
<table align="center" style="width: 90%; text-align: left; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="width: 39px;"><input type="checkbox" name="CIMMS" value="1" <?php if ($CIMMS=="1") echo 'checked'; ?> /> </td>
      <td style="width: 1328px;"><b> Get-together Party (free for accepted participants): 13th October, 18:00-20:00  </b></td>
    </tr>
     <tr style="background-color: rgb(255, 255, 204);">
      <td style="width: 39px;"><input type="checkbox" name="CTour" value="1" <?php if ($CTour=="1") echo 'checked' ; ?> /> </td>
      <td style="width: 1328px;"><b> <a href="../dinner.php" target="_blank">Conference Dinner:</a> (Thursday evening) 7000 HUF ca. 25€</b><br />
    </tr>

    <tr>
    <td colspan="2" rowspan="1"> <br>Special requirements: <br />
    <input type="checkbox" name="CVeget" value="1" <?php if ($CVeget=="1") echo 'checked' ; ?> /> &nbsp;&nbsp; I prefer vegetarian food.</td>
    </tr>
	<tr>
      <td colspan="2" rowspan="1"><br>
	  Please write your comments or requests here:<br>
	  <textarea cols="80" rows="10" name="Comment" class="input-res"><?php echo $Comment; ?> </textarea><br/> </td>
    </tr>
  </tbody>
</table>

<br />
<br />
I would like to receive emails about the next conferences &nbsp; &nbsp; <input type="checkbox" name="subscribe" value="1"  id="subscribe" <?php if ($subscribe == "1") echo 'checked'; ?>   /> 
<br />


<br />
I have read and agree to the <a href="" data-toggle="modal" data-target="#myModal">Terms, Conditions and Privacy Policy</a>&nbsp;&nbsp;  <input type="checkbox" name="gdprAcc" value="1"  id="gdprAcc" <?php if ($Confirmed != "0") echo 'checked'; ?>   /> 
<br />

			  <div class="modal fade " id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h1 class="modal-title">Terms, Conditions and Privacy Policy</h1>
					</div>
					<div class="modal-body">
					 <?php include '../Terms-Conditions-Privacy-Policy.php';?> 
					</div>
				   
				  </div>
				</div>
			  </div>

<br />
To avoid spam robots, please type here the number of <b> previous CEEPC conferences</b >: &nbsp; <input type="text" name="IMMSNr" ID="field1" value="<?php if ($Confirmed != "0") echo '13'; ?>" />  
<br /><br />

<input type="hidden" value="0" id="theValue" />
<div
 style="text-align: center; color: rgb(51, 102, 255); font-weight: bold;"
 id="myDiv"></div>
                <p class="c22_c3" align="center" style="font-size: large;"><br />
                <a href="javascript: submitform()">Submit </a><br /><br />

               </p><input name="Confirmed" value="<?php echo $Confirmed ?>" type="hidden" /><input name="UID" value="<?php echo $UID ?>" type="hidden" /><input name="Abstract" value="<?php echo $Abstract ?>" type="hidden" /><input name="EXT" value="<?php echo $EXT ?>" type="hidden" /></div>
            </form>&nbsp;&nbsp;

  
  

<script type="text/javascript">
function addEvent() 
{
  var ni = document.getElementById('myDiv');
  var numi = document.getElementById('theValue');
  var num = (document.getElementById("theValue").value -1)+ 2;
  numi.value = num;
  var divIdName = "my"+num+"Div";
  var newdiv = document.createElement('div');
  newdiv.setAttribute("id",divIdName);
  //newdiv.innerHTML = "Element Number " + num + " has been added! <a href=\"javascript:;\" onclick=\"removeElement(\'"+divIdName+"\')\">Remove the element &quot;"+divIdName+"&quot;</a>";
  newdiv.innerHTML = "<br />Please be patient! The page will be updated soon!";
  ni.appendChild(newdiv);
}
            
function submitform()
{  
  //Validate email address
   
  var success=1;
  var error="Error:\n";
 
  var x=document.forms[0].TEmail.value;
  var x2=document.forms[0].TEmail2.value;
  var atpos=x.indexOf("@");
  var dotpos=x.lastIndexOf(".");
  
  

  if (document.forms[0].TFamily.value.length < 2)
  {
     error = error + "Please type your name!\n"; 
     success=0;     
  }
  
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
    error = error + "Please type a valid e-mail address!\n";
    success=0;
  }
  
    if (document.forms[0].TCountry.value.length < 2)
  {
     error = error + "Please type your country!\n"; 
     success=0;     
  }

  if (x!=x2)
  {
    error = error + "Email adresses does not match, please check!\n";
    success=0;
  }
  
    if(!document.getElementById('gdprAcc').checked) {error = error + "Please read and agree to the Terms and Conditions and Privacy Policy \n"; 
     success=0;     }
 
  
  if (document.forms[0].IMMSNr.value != "13")
  {
     error = error + "The last edit box should contain 13! \nPlease type in the correct value!"; 
     success=0;     
  }
  


  if (success==1)
  {  
    addEvent();
    document.forms[0].submit(); 
  } else 
  {    
    alert(error);
  }

}
</script> 
            
</div>
    



	 
<!------------------------------------------- MAIN PART END ------------------------------------------->	
 
<!-------------------------------------------- JOBB OLDAL --------------------------------------------->
	
	<?php
    include("../includes/jobboldal.php");
	?>
	
    </div>
  </div>
<!--------------------------------------------- SPONZOR ----------------------------------------------->


<!--------------------------------------------- FOOTER ----------------------------------------------->
<?php
    include("../includes/footer.php");
?>
<!------------------------------------------- FOOTER END --------------------------------------------->



<script type="text/javascript" src="jquery.js"></script>
</body>
</html>