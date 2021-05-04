<?php
$path="../";

include 'common.php';


//Email targy mezo
$subject="CEEPC Registration";
$dirname="xsertyuertYT56";		// Ide masolja az abstractokat
$WEBCIM = "http://proteomics.ttk.hu/14thceepc";

//A megfelelo feldolgozas utani oldal cime
$registered="registred.php";

//Hiba eseten mutatando oldal
$error="error.html";

//Az aki a regisztracios infot kapja
$immsadmin="proteomics@ttk.hu";



  while (list($k, $val) = each($_POST)) 
  {
       // a $val nem tartalmazhat $separator karaktert! Ezt csereljuk le ":"-re!!!
       $val = implode(":", explode($separator, $val));

       if ($k == "D1") 			$D1 		= $val;       
       if ($k == "D2") 			$D2 		= $val;
       if ($k == "TFamily") 	$TFamily 	= $val;
       if ($k == "TFirst") 		$TFirst 	= $val;
       if ($k == "TMailing")	$TMailing 	= $val;
       if ($k == "TCity") 		$TCity 		= $val;
       if ($k == "TCountry")	$TCountry 	= $val;
       if ($k == "TPhone") 		$TPhone 	= $val;
       if ($k == "TEmail2") 	$TEmail2 	= $val;
       if ($k == "TEmail") 		$TEmail 	= $val;
       
	   if ($k == "TBill1") 		$TBill1 	= $val;
       if ($k == "TBill2") 		$TBill2 	= $val;
       if ($k == "TBill3") 		$TBill3 	= $val;
       
	   if ($k == "D3") 			$D3 		= $val;
       if ($k == "TTitle") 		$TTitle 	= $val;
       if ($k == "CIMMS") 		$CIMMS 		= $val;    
       if ($k == "CTour") 		$CTour 		= $val;
       if ($k == "CVeget") 		$CVeget 	= $val;
       if ($k == "subscribe")	$subscribe 	= $val;
       if ($k == "Comment") 	$Comment 	= str_replace( "\r", "", str_replace("\n", "   ", $val));
       
       if ($k == "Confirmed")	$Confirmed 	= $val;
	   if ($k == "gdprAcc")		$gdprAcc 	= $val;
       if ($k == "UID") 		$UID 		= $val;
       if ($k == "EXT") 		$EXT 		= $val;
       if ($k == "Abstract") 	$Abstract 	= $val;
       
       if ($k == "IMMSNr"){ $IMMSNr = $val;}
      
       if ($k != "Submit")
       {
          $content .= "$k: $val\n";
       }
  }
 
  
  
  
  $adatok .= $D1 == 1 ? "I want to participate: as a participant" : "I want to participate: as a company representative";
  $adatok .= "\nTitle: " .$D2;
  $adatok .= "\nFamily name: " .$TFamily;
  $adatok .= "\nFirst name: " .$TFirst;
  $adatok .= "\nInstitute/Department: " .$TMailing;
  $adatok .= "\nCity: " .$TCity;
  $adatok .= "\nCountry: " .$TCountry;
  $adatok .= "\nPhone: " .$TPhone;
  $adatok .= "\nEmail: " .$TEmail2;
  //$adatok .= "\nEmail-Re: " .$TEmail;
  $adatok .= "\nBilling address: " .$TBill1 . " " .$TBill2 . " " .$TBill3;
  $adatok .= "\nI wish to present: " .$D3;
  $adatok .= "\nTitle of the presentation: " .$TTitle;
  $adatok .= $CIMMS == 1 ? "\nGet-together Party: Yes" : "\nGet-together Party: No";
  $adatok .= $CTour == 1 ? "\nConference Dinner: Yes" : "\nConference Dinner: No";
  $adatok .= $CVeget == 1 ? "\nVegetarian food: Yes" : "\nVegetarian food: No";
  $adatok .= $subscribe == 1 ? "\nEmails about the next conferences: Yes" : "\nEmails about the next conferences: No";
  $adatok .= "\nComment: " .$Comment 	= str_replace( "\r", "", str_replace("\n", "   ", $Comment));
 //$adatok .= $Abstract == 1 ? "\nAbstract uploaded: Yes" : "\nAbstract uploaded: No";
  
  
  
  
 // check the email fields for validity ("lopott" kod alapjan)
 
 if (!$IsAdmin)
 {
   if (strlen($TEmail) >64 ) $TEmail = substr($TEmail,1,64);
   if (preg_match("/^[A-Z0-9.%-]+@[A-Z0-9.%-]+.[A-Z]{2,4}$/", $TEmail)) 
   {
      echo '<link rel="stylesheet" type="text/css" href="../style.css"><B><FONT SIZE=10><h1 style="text-align:CENTER">There is an error in your input!</B></FONT> </P><P ALIGN=\"CENTER\">&nbsp;</P> <P>Wrong E-mail address. Please correct it and try again.</P></DIV> </BODY></HTML>';
      exit;
   }
   
 }
//duplikacio csekkolas

//duplikacio csekkolas vége


if ($UID=="None") $UID=GetuniqeID();

// Abstract feltoltese
if ($_FILES['FAbstract']['error']!=UPLOAD_ERR_NO_FILE)
{
  // File letoltese
  if ($_FILES['FAbstract']['size'] < 500000)
  {
      if ($_FILES['FAbstract']['size']>0)
      {
        $EXT = substr($_FILES['FAbstract']['name'],-4);
        if ($EXT[0]!= '.') $EXT = '.' . $EXT;
        $content .= 'Return Code: ' . $_FILES['FAbstract']['error'] . "\n";
        $content .= $WEBCIM.'/registration/'. $dirname.'/'.$UID.$EXT."\n";
        
        $content .= 'Uploading ' . $_FILES['FAbstract']['name'] . ' (' .
        $_FILES['FAbstract']['type'] . ', ' .
        ceil($_FILES['FAbstract']['size'] / 1024) . " Kb).\n";
        move_uploaded_file($_FILES['FAbstract']['tmp_name'],
                               $dirname.'/' . $UID. $EXT);
        $Abstract="1";
      }
  } else
  {
      echo '<link rel="stylesheet" type="text/css" href="../style.css"><B><FONT SIZE=10><h1 style="text-align:CENTER">Sorry, we only accept files under 500 Kb for upload. Please, remove the figures from your abstract.';
      //print_r($_FILES);
      exit;
  }
}
 

 $loginfo .= "$UID".$separator."$EXT".$separator."$Confirmed".$separator."$gdprAcc".$separator."$Abstract".$separator;
 $loginfo .= "$D1".$separator."$D2".$separator."$TFamily".$separator."$TFirst".$separator."$TMailing".$separator;
 $loginfo .= "$TCity".$separator."$TCountry".$separator."$TPhone".$separator."$TEmail2".$separator."$TEmail".$separator."$TBill1".$separator."$TBill2".$separator ."$TBill3".$separator;
 $loginfo .= "$D3".$separator."$TTitle".$separator."$CIMMS".$separator;
 $loginfo .= "$CTour".$separator."$CVeget".$separator."$Comment".$separator."$subscribe".$separator;


// Datum hozzairasa a file-hoz
 $arr = getdate();
 $loginfo .= $arr["mon"]."/".$arr["mday"]."/".$arr["year"].$separator;


//Remote address
$content .= "REMOTE HOST: ".$_SERVER["REMOTE_ADDR"]."\n";
$loginfo .= $_SERVER["REMOTE_ADDR"].$separator;
$loginfo .="$Accepted".$separator." \n";


// Ha nem letezik keszitsuk el
if (!file_exists($logfiletxt))
{
   $fp = fopen($logfiletxt,"w");
   printfirstline($fp);
   
   fclose($fp);
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
    $entry[0]="DeLeTe";
    $temparray[$index] = implode($entry,$separator);
  }  
 }  // end of for cycle
 
 
 
 if ($changed==FALSE)		// Email duplikáció csekkolás
 {
	$TEmail = trim($TEmail);
	$temparray = file($logfiletxt);  
	$i = 1;
	$db = 0;
		$file=$logfiletxt;
		$fopen = fopen($file, "r");
		$fread = fread($fopen,filesize($file));
		fclose($fopen);
		$remove = "\n";
		$split = explode($remove, $fread);
		$array[] = null;
		$tab = ",";
		foreach ($split as $string)
		{
			$row = explode($tab, $string);
			array_push($array,$row);
		}
	   /*echo "<pre>";
		print_r($array);
		echo "</pre>";
		echo count($temparray);*/

	if (file_exists($logfiletxt))
	{ 
	$UID_repl = "";
	for ($i = 1; $i< count($temparray)+1; $i++)
	   {   
		   if (strcasecmp($TEmail, $array[$i][13]) == 0)
		   {$db++;
			$UID_repl = $array[$i][0];
	   }
			
	   }
	} 

	if ($db != 0)
	{
		echo '  <link rel="stylesheet" type="text/css" href="../style.css"><B><FONT SIZE=10><h1 style="text-align:CENTER">You have already registered. </B></FONT> </h1><P >&nbsp;</P> <P style="text-align:CENTER">Please check your email and modify you registration there, or click on this link.</P></DIV> </BODY></HTML> ';
		echo ' <p style="text-align:CENTER"><a  href="'.$WEBCIM .'/registration/index.php?id=' . $UID_repl.' "> '.$WEBCIM . '/registration/index.php?id='. $UID_repl.'</a>';
		
		$download  = "Dear Colleague,\n\n";
		$download .= "You have already registered for 14th Central and Eastern European Proteomic Conference \n";
		$download .= "If you wish to modify your registration/abstract, please click on the following link:\n";
		$download .= $WEBCIM. "/registration/index.php?id=" . $UID_repl . "\n\n";
		
		$download .= "If you haven't already confirmed your registration please do so by clicking on the following link:\n";
		$download .= $WEBCIM . "/registration/confirm_.php?id=" . $UID_repl . "\n\n";
		$download .= "Note that all unconfirmed registrations will be deleted! \n\n";
		
		$download .= "Looking forward to meeting you in Hungary!\n";
		$download .= "The Organizing Comittee";

		$content .= "\n".'Click here to accept registration: ' . $WEBCIM . '/registration/accept.php?id='. $UID_repl. '&acc=Yes'."\n";
		$content .= 'Click here to put on pending: '. $WEBCIM .'/registration/accept.php?id='. $UID_repl. '&acc=Pending'."\n";
		$content .= 'Click here to refuse registration: '. $WEBCIM . '/registration/accept.php?id='. $UID_repl. '&acc=No'."\n";
		$content .= 'Click here to delete registration: '. $WEBCIM . '/registration/accept.php?id='. $UID_repl. '&acc=DeLeTe'."\n";

	 $subject="CEEPC Registration Information";
	 // Elkuldi az instrukciokat az adott email cimre
	 mail($TEmail, $subject, $download, $emailheaders);
	// Email az adminisztratornak
	 //mail($immsadmin,$immssubject , $content."\n\n".$download, $emailheaders.$headers);
		
	   exit;
	}
 }

 if ($changed==TRUE)		// Ha megvaltozott akkor mentsuk el!
 {
   // Mentes a File-ba! 
   $fp = fopen($logfiletxt,"w");
   printfirstline($fp);
   for($index = 1; $index < count($temparray); $index++)
   {
      if (strncmp($temparray[$index],"DeLeTe", 6))
      fputs($fp,$temparray[$index]);
   }
   fclose($fp);
 } 
 // Irjuk az ujat hozza
 $logfile = fopen ($logfiletxt,"a+");
 fwrite($logfile, $loginfo);
 fclose($logfile);
} //end of file-exist


if ($IsAdmin)
{
  // Ha a localhost-rol nezzuk drahos-nak kuldje el!!
  $email = "drahos@chemres.hu";
  $immsadmin = "drahos@chemres.hu";
}

//elkuldendo szoveg
$download  = "Dear Colleague,\n\n";
if ($changed)
{
  $download .= "Your registration has been changed\n";
  $immssubject ="CEEPC.Change";
  $subject="CEEPC Registration Change";

} else
{
  $download .= "You have been registered for 14th Central and Eastern European Proteomic Conference \n";
  $download .= "You have to confirm your registration by clicking on the following link:\n\n";
  $download .= $WEBCIM . "/registration/confirm_.php?id=" . $UID . "\n\n";
  $download .= "Note that all unconfirmed registrations will be deleted! \n\n";
}


$download .= "Please check below, if all information about you is correct; if not, you can change that in the webpage. \n\nREGISTRATION DETAILS\n\n";
$download .= $adatok ."\n";
$download .= "\nIf you wish to modify your registration/abstract, please click on the following link:\n";
$download .= $WEBCIM . "/registration/index.php?id=" . $UID . "\n\n";
$download .= "Looking forward to meeting you in Hungary!\n";
$download .= "The Organizing Comittee";


if ($ADMIN_IP!="127.0.0.1")	// Ha nem otthonrol kuldjuk
{

 // Elkuldi az instrukciokat az adott email cimre
 mail($TEmail, $subject, $download, $emailheaders);


//Regisztracio elfogadasa
$content .= "\n".'Click here to accept registration: ' . $WEBCIM . '/registration/accept.php?id='. $UID. '&acc=Yes'."\n";
$content .= 'Click here to put on pending: '. $WEBCIM .'/registration/accept.php?id='. $UID. '&acc=Pending'."\n";
$content .= 'Click here to refuse registration: '. $WEBCIM . '/registration/accept.php?id='. $UID. '&acc=No'."\n";
$content .= 'Click here to delete registration: '. $WEBCIM . '/registration/accept.php?id='. $UID. '&acc=DeLeTe'."\n";


 // Email az adminisztratornak
 mail($immsadmin,$immssubject , $content."\n\n".$download, $emailheaders	);
} 


if ($changed==TRUE)
{
  //header ("Location: changed.html");
  /**/
  echo '<link rel="stylesheet" type="text/css" href="style.css"><B><FONT SIZE=10><h1 style="text-align:CENTER">Your registration information have been changed</B></FONT> </P>';

} else
{
  //header ("Location: $registered");
  echo '<link rel="stylesheet" type="text/css" href="style.css"><B><FONT SIZE=10><h1 style="text-align:CENTER">Thank you for your registration!</B></FONT> </P>
		<P ALIGN=\"CENTER\">&nbsp;</P>
		<P>You will receive an E-mail soon describing how to confirm your registration. Note that all unconfirmed registrations will be deleted!</P>';  
}

?>
			<br />
             &nbsp;&nbsp;
        </div>
    </div>
</body>
</html>
