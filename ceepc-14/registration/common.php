<?php
//Valtozok beallitasa 

//Fontos valtozok nullazasa, Biztos ami ziccer !
unset($content,$email,$loginfo, $content, $changed, $remove, $adatok);


//default ertekek
$D1	="1";
$D2	="Mr";

$TFamily	="";
$TFirst		="";
$TMailing	="";
$TCity		="";
$TCountry	="";
$TPhone		="";
$TEmail2	="";
$TEmail		="";
$TTitle		="";
$TBill1 = "";
$TBill2 = "";
$TBill3 = "";
$D3	= "no";
$Abstract	="0";


/**/
$CVeget		="0";
$CTour		="0";

$IMMSNr     = "0";
$gdprAcc 	= "0";
$subscribe  = "0";
//not used

//not used

$Confirmed		= "0";

$UID			= "None";
$EXT			= "None";
$Accepted		= "No";

//new variables for conrerence registration and packages
	
	
	$CIMMS     = "0"; //comes to imms
	

	
	$Comment   = " "; //comment
	
$loginfo="";
$content="";
$adatok="";
$changed = FALSE;
$moreinfo = FALSE;

//Email headers
$emailheaders =  "From: \"14th CEEPC\" <proteomics@ttk.hu>";

// LogFile 
$logfiletxt="logfile.csv";

$separator = ",";	        // Separator character used in file
$immssubject = "CEEPC.Regisztracio";

if (substr(php_uname(), 0, 7) == "Windows")
{ //Windows operacios rendszer alatt fut a script (azaz otthon)
  $ADMIN_IP="127.0.0.1";
  $IsAdmin = TRUE;
  //$REMOTE_ADDR="remote addr";

} else
{ // Linux alatt fut, azaz a cric-en akkor az E1.11B az adminisztrator
  $ADMIN_IP="10.110.106.11";
  $IsAdmin = ($_SERVER["REMOTE_ADDR"]==$ADMIN_IP);
}

function printfirstline($file_)
{
  fputs($file_,"UID, EXT, Confirmed, gdprAcc, Abstract, Attendee, Mr/Ms, Family, First, Address, City, Country, Phone, Email2, Email, Line1, Line2, Line3, Presentation, Title,  GetTogether, Conf Dinner, Vegetarian, Comment, Subscribe, Date, IP Address, Accepted, \n");
}

function UpdateVars($id_, $logfiletxt_)
{
  global $separator;
  if (file_exists($logfiletxt_))
  {
   $temparray_ = file($logfiletxt_);
   for($index = 1; $index < count($temparray_); $index++)
   {
    $entry = explode($separator,$temparray_[$index]);
    if(!strcasecmp($entry[0],$id_) )
    {	//Megegyezik a uniqueID akkor szedjuk ki!
    global $UID, $EXT, $Confirmed, $gdprAcc, $Abstract, $D1, $D2, $TFamily, $TFirst, $TMailing, $TCity, $TCountry, $TPhone, $TEmail2, $TEmail, $TBill1, $TBill2, $TBill3, $D3, $TTitle, $CIMMS, $CTour, $CVeget, $Comment, $IMMSNr, $subscribe, $Accepted;

	$i=0;
	
	$UID		= $entry[$i++];	
	$EXT		= $entry[$i++];
   	$Confirmed	= $entry[$i++];
	$gdprAcc	= $entry[$i++];
	$Abstract	= $entry[$i++];
 	$D1		    = $entry[$i++];
	$D2		    = $entry[$i++];
	$TFamily	= $entry[$i++];
	$TFirst		= $entry[$i++];
	$TMailing	= $entry[$i++];
 	$TCity		= $entry[$i++]; 
	$TCountry	= $entry[$i++];
	$TPhone		= $entry[$i++];
	$TEmail2	= $entry[$i++];
	$TEmail		= $entry[$i++];
 	$TBill1		= $entry[$i++];
 	$TBill2		= $entry[$i++];
 	$TBill3		= $entry[$i++];
	$D3		    = $entry[$i++];
	$TTitle		= $entry[$i++];
	$CIMMS      = $entry[$i++];
	$CTour		= $entry[$i++];
    $CVeget		= $entry[$i++];
    $Comment    = $entry[$i++];
    
	$subscribe	= $entry[$i++];
	$IMMSNr     = $entry[$i++];
    $Accepted	= $entry[$i++];
    }  
   }  // end of for cycle
  }
}


function GetuniqeId() 
{ 
  srand((double)microtime()*rand(1000000,9999999)); // Seed random number generator 
  $arrChar=array(); // New array 
  $uId=""; // Write prefix in the uniq id 

  for($i=65;$i<90;$i++) 
  { 
    array_push($arrChar,chr($i)); // Add A-Z to array 
    array_push($arrChar,strtolower(chr($i))); // Add a-z to array 
  } 
  for($i=48;$i<57;$i++) 
  { 
    array_push($arrChar,chr($i)); // Add 0-9 to array 
  } 
  for($i=0;$i<20;$i++) 
  { 
    $uId.=$arrChar[rand(0,count($arrChar)-1)]; // Write random picked chars in the uniq id 
  } 
  return $uId; 
} 
