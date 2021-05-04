<!DOCTYPE html>
<html lang="hu">
<head>
  <title>14th Central and Eastern European Proteomic Conference</title>
  <meta charset="utf-8">
  <meta name="description" content="CEEPC">
  <meta name="keywords" content=" CEEPC, 14th CEEPC, Proteomic Conference, Drahos, Vekey ">
	<meta name="author" content=" Research Center for Natural Sciences ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="preload">
<?php
    include("../includes/header.php");
?>
 <!-------------------------------------------- BAL OLDAL --------------------------------------------->

  <div class="container-fluid text-center" >    
  <div class="row content">
	<?php
    include("../includes/baloldal.php");
	?>
<!--------------------------------------------- MAIN PART --------------------------------------------->	
    <div class="col-sm-8 text-left kozep">
		
		<?php 
$path="";
include 'common.php';
?>
  <h1><span class="c3">14<sup>th</sup> CEEPC</span> <span class="c3" lang="HU">Company Registration Form</span></h1>
<br>


<p class="MsoNormal">Company representatives wishing to attend the meeting (or social program) <span class="c3">MUST</span> register as&nbsp;<a href="../registration">participants</a> as well.</p>

        <p >It is possible to send or modify your registration untill 30<sup>th</sup> June, 2020.&nbsp;</p>

        <p >

<?php
    if (isset($_GET["id"])) {UpdateVars($_GET["id"], $logfiletxt);    } ?>

    <form method="post" action="registered.php" enctype="multipart/form-data">
        <input name="CheckForm" value="Rendben" type="hidden" /> 

        
		
		<br>
		<!----------------- asd ---------------------->
		<p class="c10">Company details:</p><hr>
		<table width="90%" align="center" border="0" >
			<tbody>
				<tr>
					<td width="20%" ><b>Company name:&nbsp;</b> </td>
					<td width="70%"><input name="TName" value="<?php echo $TName ?>" size="80" class="input-res"  type="text"/></td>
				</tr>
			</tbody>
		</table><br><br>
		<p class="c10">Contact person details:</p><hr>
<table width="90%" align="center" border="0" >
<tbody>
<tr>
<td class="required">Name: &nbsp;</td>
<td><input name="TCName" value="<?php echo $TCName ?>" size="90" class="input-res"type="text" /></td>
</tr>
<tr>
<td class="required">Mailing address: &nbsp;</td>
<td><input name="TAddr" value="<?php echo $TAddr ?>" size="100" class="input-res" type="text"/></td>
</tr>

<tr>
<td class="required">Phone:&nbsp;</td>
<td><input name="TPhone" value="<?php echo $TPhone ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td class="required">E-mail:&nbsp;</td>
<td><input name="TEmail" value="<?php echo $TEmail ?>" size="86" class="input-res" type="text" /></td>
</tr>
<tr>
<td class="required">Billing address: </td>
<td><input name="TBill1" value="<?php echo $TBill1 ?>" size="86" class="input-res" type="text" /><br>
    <input name="TBill2" value="<?php echo $TBill2 ?>" size="86" class="input-res" type="text" /><br>
	<input name="TBill3" value="<?php echo $TBill3 ?>" size="86" class="input-res" type="text" /></td>
</tr>

</tbody>
</table>
<br><hr>
<table width="90%" align="center" border="0" >
<tbody class="color">
<tr class="color">
<td colspan="2">
<table width="100%" align="center" border="0" >
<tbody class="color">
<tr>
<td width="45%">Company logo to be displayed on website (high resolution):&nbsp;</td>
<td ><span ><input name="FLogo" size="20" type="file"  class="input-res" /><?php if ($LOGO_EXT !=
        "None")
            echo '<br>&nbsp;&nbsp;&nbsp(You have already uploaded your logo. To modify it, please, upload again)';
        else
            echo '(Please send your logo)'; ?>&nbsp;</span></td>
</tr>
</tbody>
</table>
</td>
<tr class="color">
<td  width="60%" class="required ">Advertisment page to be printed in the conference proceedings ( C5 size, B&amp;W):&nbsp;</td>
<td><input name="FAdv" size="20" type="file" class="input-res" /><span class="c4"><?php if ($ADV_EXT !=
        "None")
            echo '<br>&nbsp;&nbsp;&nbsp(You have already uploaded your advertisment. To modify it, please, upload again)';
        else
            echo ' (Please send your advertisment)'; ?>&nbsp;</span></td>
</tr>
<tr class="color">
<td class="required">Clicking on the company logo should lead to:&nbsp;</td>
<td></td>
</tr>
<tr >
<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input tabindex="1" name="WEB" value="1" <?php if ($WEB == 1)   echo 'Checked'; ?> type="radio" /> &nbsp;Following web address:&nbsp;<input name="TURL"  class="input-res" value="<?php echo $TURL ?>" size="79"  type="text" /></td>



</tr>
<tr>
<td colspan="2" >&nbsp;&nbsp;&nbsp;&nbsp;<input tabindex="2" name="WEB" value="2" <?php if ($WEB == 2)echo 'Checked'; ?> type="radio" /> &nbsp; Following advertisment page (please upload your it in HTML format (no scripting), in a ZIP archive </td>

</tr>
<tr class="color">
<td colspan="2" >  
<table width="100%" align="center" border="0" >
<tbody class="color">
<tr>
<td width="20%">Upload advertisement: &nbsp; </td>
<td><input name="FAdv2" size="20" type="file"  class="input-res"/><span class="c4"><?php if ($ADV2_EXT !=
        "None")
            echo '(You have already uploaded your advertisment. To modify it, please, upload again)';
        else
            echo ' (Please send your advertisment)'; ?></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<br><hr><br>
<table  style="width: 100%; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2" class="price">
<tbody>
<tr>
<td style="background-color: rgb(220, 220, 220); font-weight: bold;" colspan="1" rowspan="1" >1. Exhibition booth package <input name="eboot" value="1" 
type="checkbox" <?php if ($EBoot==1) echo "checked"; ?> />  <span style=""> </span></td>
<td style="text-align: rigth !important; background-color: rgb(220, 220, 220); font-weight: bold;" colspan="1" rowspan="1" class="price">&#8364; 900</td>
</tr>
</tbody>
</table>
<p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="" lang="EN-US"><span style=""><span style="font-family: &quot;Times New Roman&quot;; font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;"></span></span></span><span style="" lang="EN-US"></span></p><p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="" lang="EN-US"></span></p><ul><li><span style="" lang="EN-US">1
desk with two chairs (ca. 4 m2), possibility to put up a poster behind
you
(max. 2 m wide, no poster board provided) <o:p></o:p></span></li><li><span style="" lang="EN-US">1
black &amp; white C5 size advertisement in the abstract book<o:p></o:p></span></li><li><span style="" lang="EN-US">1 complimentary full delegate registration<o:p></o:p></span></li><li><span style="" lang="EN-US">listed
among the sponsors on webpage and in the abstract book <o:p></o:p></span></li><li><span style="" lang="EN-US">Exhibition
hours are from 13<sup>th</sup> Oct, 16:00 till 16<sup>th</sup>
Oct, 18:00. <span style="" lang="EN-US"></span><span style="" lang="EN-US"><o:p></o:p></span></span></li></ul>



<p class="MsoNormal" style="margin-left: 18pt; text-align: justify;"><span style="" lang="EN-US"><o:p>&nbsp;</o:p></span></p>
<table style="background-color: rgb(220, 220, 220); width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="font-weight: bold;">2. Scientific
lecture <input name="scilec" value="1" 
type="checkbox" <?php if ($Scilec==1) echo "checked"; ?> /><span style=""></span></td>
<td style="text-align: right; font-weight: bold;" class="price"> &#8364; 700</td>
</tr>
</tbody>
</table>
<p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="" lang="EN-US"><span style=""></span></span><span style="" lang="EN-US"></span></p><p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="" lang="EN-US"></span></p>
<ul><li><span style="" lang="EN-US">15
minutes, scientific content is required<span style=""><span style="font-family: &quot;Times New Roman&quot;; font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;"> &nbsp;</span></span></span></li><li><span style="" lang="EN-US"><span style=""><span style="font-family: &quot;Times New Roman&quot;; font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;"></span></span></span><span style="" lang="EN-US">Limited
number is available; acceptance is ranked on the basis of company&#8217;s
sponsorship.<o:p></o:p></span></li></ul>
<p class="MsoNormal" style="margin-left: 18pt; text-align: justify;"><span style="" lang="EN-US"><o:p>&nbsp;</o:p></span></p>
<table style="background-color: rgb(220, 220, 220); width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="font-weight: bold;">3. Company
poster <input name="compost" value="1" 
type="checkbox" <?php if ($Compost==1) echo "checked"; ?> /><span style=""></span></td>
<td style="text-align: right; font-weight: bold;" class="price"> &#8364; 100</td>
</tr>
</tbody>
</table>
<p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="font-size: 12pt;" lang="EN-US"></span><span style="" lang="EN-US"><span style=""><span style="font-family: &quot;Times New Roman&quot;; font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;"></span></span></span></p><span style="font-family: &quot;Times New Roman&quot;; font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">&nbsp;</span><ul><li>Scientific
or commercial topic, put up for one poster session (like all science
posters)&nbsp;poster
board side (height: 1.2 m x width: 0.9 m)<o:p></o:p></li></ul><br /><table style="background-color: rgb(220, 220, 220); width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody><tr><td style="font-weight: bold;">4. Registration fee <input name="promo" value="1" 
type="checkbox" <?php if ($Promo==1) echo "checked"; ?> /><span style=""> </span></td><td style="text-align: right; font-weight: bold;" class="price">                               
  
           
&#8364; 200</td></tr>
</tbody></table><br />
<ul><li><span style="" lang="EN-US"><span style=""><span style="font-family: &quot;Times New Roman&quot;; font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;"></span></span></span><span style="" lang="EN-US">For company representatives per person. This includes the get-together party, coffee breaks, and a free
copy of the Abstract Book.<o:p></o:p></span></li></ul>

<p class="MsoNormal" style="text-align: justify;"><span style="font-size: 12pt;" lang="EN-US"><o:p>&nbsp;</o:p></span></p>
<table style="background-color: rgb(220, 220, 220); width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody><tr><td style="font-weight: bold;">5. BRONZE
Sponsorship <input name="bronze" value="1" 
type="checkbox" <?php if ($Bronze==1) echo "checked"; ?> /> <span style="">            </span></td><td style="text-align: right; font-weight: bold;" class="price">                                                                             
&#8364; 1500</td></tr>
</tbody></table>
<b style="">&nbsp;</b><br /><ul><li><span style="" lang="EN-US">Recognized
as Bronze Sponsor, the company&#8217;s logo with a printed acknowledgement
appearing
on the Conference Website and in all Conference documentations. <o:p></o:p></span>
<span style="" lang="EN-US"><span style=""><span style="font-family: &quot;Times New Roman&quot;; font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">&nbsp;</span></span></span></li><li><span style="" lang="EN-US">Exhibition
Booth package </span>
</li>
<li><span style="" lang="EN-US">2 complimentary full delegate registration <o:p></o:p></span></li>
<li><span style="" lang="EN-US">1
complimentary company poster <o:p></o:p></span></li></ul>
<p class="MsoNormal" style="text-align: justify; text-indent: 35.4pt;"><span style="font-size: 12pt;" lang="EN-US"><o:p>&nbsp;</o:p></span></p>
<table style="background-color: rgb(220, 220, 220); width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody><tr><td style="font-weight: bold;">6. SILVER
Sponsorship <input name="silver" value="1" 
type="checkbox" <?php if ($Silver==1) echo "checked"; ?> /> <span style="">       </span></td><td style="text-align: right; font-weight: bold;" class="price">                                                                                    
&#8364; 2000</td></tr>
</tbody></table>
<p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="font-size: 12pt;" lang="EN-US"></span><br /><span style="" lang="EN-US"><span style=""><span style="font-family: &quot;Times New Roman&quot;; font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;"></span></span></span><span style="" lang="EN-US"></span></p><ul><li><span style="" lang="EN-US">Recognized
as Silver Sponsor, the company&#8217;s logo with a printed acknowledgement
appearing
on the Conference Website and in all Conference documentations. <o:p></o:p></span>&nbsp;<span style="" lang="EN-US"></span></li><li><span style="" lang="EN-US">Exhibition
Booth package <o:p></o:p></span>&nbsp;<span style="" lang="EN-US"></span></li><li><span style="" lang="EN-US">2
complimentary company posters&nbsp;</span>&nbsp;</li><li><span style="" lang="EN-US">opportunity
to distribute a one page leaflet in the Conference Bag</li> 
<li>1 page color advertisement in the Abstract Book</li> 
<li>3 complimentary full delegate registrations </li></ul>
<p class="MsoNormal" style="text-align: justify;"><span style="" lang="EN-US"><o:p>&nbsp;</o:p></span></p>
<table style="background-color: rgb(220, 220, 220); width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody><tr><td style="font-weight: bold;">7. GOLD
Sponsorship <input name="gold" value="1" 
type="checkbox" <?php if ($Gold==1) echo "checked"; ?>/> <span style="">          </span></td><td style="text-align: right; font-weight: bold;" class="price">                                                                        
&#8364; 4000</td></tr>
</tbody></table>
<span style="font-size: 12pt;" lang="EN-US"><b style="">&nbsp;</b></span><br /><ul><li>Recognized
as Gold Sponsor, the company&#8217;s logo with a printed acknowledgement
appearing on
the Conference Website and in all Conference documentations.&nbsp;</li><li>Double
size exhibition space (ca. 8 m<sup>2</sup>, with 2 tables,
4 chairs &#8211; note that
ONLY Gold Sponsors can have double size exhibitions)&nbsp;</li>
<li>Choice about placing in the exhibition hall</li>
<li>1 or 2 page color advertisement in the abstract book (either one page on
the inside cover or a two-side full page used also as a separator in the
Abstract Book)</li>
<li>opportunity to distribute various leaflets or other items in the Conference Bag</li>
<li>1 complimentary scientific lecture</li>
<li>4 complimentary full delegate registrations</li>
<li>2 complimentary company posters;&nbsp;exhibited on both poster sessions </li></ul>

<p class="MsoNormal" style="text-align: justify;"><span style="font-size: 12pt;" lang="EN-US"><o:p>&nbsp;</o:p></span></p><br /><table style="background-color: rgb(220, 220, 220); width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody><tr><td style="font-weight: bold;">8. Other sponsorship options – details to be discussed as appropriate <input name="Other" value="1" 
type="checkbox" <?php if ($Other==1) echo "checked"; ?> /> <span style="">               </span></td><td style="text-align: right; font-weight: bold;">                                                                                      
</td></tr>
</tbody></table>
<p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="" lang="EN-US"><span style=""></span></span><span style="" lang="EN-US"></span></p><p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="" lang="EN-US"></span></p><ul>

<li>Sponsoring the Welcome Drink</li>
<li>Sponsoring the Congress Dinner, Coffee Breaks</li>
<li>Sponsoring/supplying delegate bags</li>
<li>Sponsoring/supplying notepads and pens</li>
<li>Sponsor WiFi availability at the Meeting for all delegates</li>
<li>Company logo printed on the name badges</li>

</ul>
<p class="MsoNormal" style="margin-left: 36pt; text-align: justify; text-indent: -18pt;"><span style="" lang="EN-US"><span style=""><br />
</span></span><span style="" lang="EN-US"><o:p>&nbsp;</o:p></span></p>


<span class="c9">Comments to the organizer:
        <br /></span>
        <br />
         
        <textarea cols="80" rows="5" name="TComments"  class="input-res">
<?php if ($TComments != "")
    echo $TComments;
else
    echo 'Write here your comments' ?>
</textarea> 

        <p class="c14"><input value="Submit" name="B1" type="submit" /><input value="Reset" name="B2" type="reset" /></p><input name="Confirmed" value="<?php echo $Confirmed ?>" type="hidden" /> <input name="UID" value="<?php echo $UID ?>" type="hidden" /> <input name="LOGO_EXT" value="<?php echo $LOGO_EXT ?>" type="hidden" /> <input name="ADV_EXT" value="<?php echo $ADV_EXT ?>" type="hidden" /> <input name="ADV2_EXT" value="<?php echo $ADV2_EXT ?>" type="hidden" />
    </form>

		
		
		<!----------------- asd ---------------------->
		
		
		
		
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