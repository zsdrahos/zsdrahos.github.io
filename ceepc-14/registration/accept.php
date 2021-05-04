<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<TITLE>Confirmation</TITLE>
</HEAD>
<BODY LINK="#0000ff" VLINK="#800080" BGCOLOR="#E9E9E9">
<P>

<?php 

  include "common.php"; 
  if ((isset($_GET["id"])) && (isset($_GET["acc"])))
  {
    UpdateVars($_GET["id"], $logfiletxt);
    $Accepted = $_GET["acc"];
  } else 
  {
	echo '<link rel="stylesheet" type="text/css" href="style.css"><B><FONT SIZE=10><h1 style="text-align:CENTER">Incorrect parameters';
	exit;
  }

// A File betoltese
if (file_exists($logfiletxt))
{
 $temparray = file($logfiletxt);
 for($index = 1; $index < count($temparray); $index++)
 {
  $entry = explode($separator,$temparray[$index]);
  if(!strcasecmp($entry[0],$UID) )
  {	//Megegyezik a uniqueID akkor csereljuk ki 
    $changed = TRUE;  
    $entry[27]=$Accepted;
    if($Accepted=="DeLeTe")
    { $entry[0]="DeLeTe"; }
    $temparray[$index] = implode($entry,$separator);
  }  
 }  // end of for cycle

 if ($changed==TRUE)		// Ha megvaltozott akkor mentsuk el!
 {
   // Mentes a File-ba! 
   $fp = fopen($logfiletxt,"w");
   printfirstline($fp);
   for($index = 1; $index < count($temparray); $index++)
   {
      fputs($fp,$temparray[$index]);
   }
   fclose($fp);
   echo '<link rel="stylesheet" type="text/css" href="style.css"><B><FONT SIZE=10><h1 style="text-align:CENTER">Your registration has been accepted. Thank you!</B></FONT></p>';
 } else
 {
	echo '<link rel="stylesheet" type="text/css" href="style.css"><B><FONT SIZE=10><h1 style="text-align:CENTER">Incorrect parameters';
 }
}
?>

</P></BODY>
</HTML>
