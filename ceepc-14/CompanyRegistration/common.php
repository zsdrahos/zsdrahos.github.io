<?php


//Email targy mezo
$subject = "CEEPC Company Registration";
$dirname = "doc"; // Ide masolja az abstractokat

//A megfelelo feldolgozas utani oldal cime
$registered = "reg_success.php";
$changed_website = "changed.php";
//Hiba eseten mutatando oldal
$error = "error.php";

//Az aki a regisztracios infot kapja
$immsadmin = "proteomics@ttk.hu";

//Website cime, itt talalhato a php script
$WEBSITE="http://proteomics.ttk.hu/14thceepc/CompanyRegistration";

$CONF_NAME = "14th Central and Eastern European Proteomic Conference";


//Valtozok beallitasa

//Fontos valtozok nullazasa, Biztos ami ziccer !
unset($content, $email, $loginfo, $content, $changed, $remove);

//default ertekek

$TName = "";
$TCName = "";
$TAddr = "";
$TPhone = "";
$TFax = "";
$TEmail = "";
$TBill1 = "";
$TBill2 = "";
$TBill3 = "";
$TURL = "";
$TComments = "";
$WEB = "1";

$Confirmed = "0";
$UID = "None";
$LOGO_EXT = "None";
$ADV_EXT = "None";
$ADV2_EXT = "None";
$CheckForm = "Err";

$EBoot = "0";
$Scilec = "0";
$Compost = "0";
$Promo = "0";    
$Bronze = "0";
$Silver = "0";
$Gold = "0";
$Other  = "0";


$loginfo = "";
$content = "";
$changed = false;
$moreinfo = false;


//Email headers
$emailheaders = "From: \"14th CEEPC\" <proteomics@ttk.hu>";

// LogFile
$logfiletxt = "logfile.csv";

$separator = ","; // Separator character used in file
$immssubject = "Company.Registration";

if (substr(php_uname(), 0, 7) == "Windows") { //Windows operacios rendszer alatt fut a script (azaz otthon)
    $ADMIN_IP = "127.0.0.1";
    $IsAdmin = true;

} else { // Linux alatt fut, azaz a cric-en akkor az ms.chemres.hu az adminisztrator
    $ADMIN_IP = "192.168.4.93";
    $IsAdmin = ($_SERVER["REMOTE_ADDR"] == $ADMIN_IP);
}


function printfirstline($file_)
{
    fputs($file_, "UID,LOGO_EXT,Confirmed, Adv_EXT, Adv2_ExT, Company, Name, Address, Phone, Fax, Email, Billing1, Billing2, Billing3, WEB, Web address, Exhibition, Lecture, Poster, Promo, Bronze, Silver, Gold, Other, Comments, Date, IP Address\n");
}

function FillLoginfo()
{
    global $UID, $LOGO_EXT, $Confirmed, $ADV_EXT, $ADV2_EXT, $TName, $TCName, $TAddr,
        $TPhone, $TFax, $TEmail, $TBill1, $TBill2, $TBill3, $WEB, $TURL, $EBoot, $Scilec, $Compost, $Promo, $Bronze, $Silver, $Gold, $Other, $TComments, $separator,
        $loginfo;


    $loginfo .= "$UID" . $separator . "$LOGO_EXT" . $separator . "$Confirmed" . $separator . "$ADV_EXT" . $separator;
    $loginfo .= "$ADV2_EXT" . $separator . "$TName" . $separator . "$TCName" . $separator;
    $loginfo .= "$TAddr" . $separator . "$TPhone" . $separator . "$TFax" . $separator . "$TEmail" . $separator;
    $loginfo .= "$TBill1" . $separator . "$TBill2" . $separator . "$TBill3" . $separator . "$WEB" . $separator;
    $loginfo .= "$TURL" . $separator. "$EBoot" . $separator. "$Scilec" . $separator. "$Compost" . $separator. "$Promo" . $separator;
	$loginfo .= "$Bronze" . $separator. "$Silver" . $separator . "$Gold". $separator. "$Other " . $separator. "$TComments" . $separator;

    // Datum hozzairasa a file-hoz
    $arr = getdate();
    $loginfo .= $arr["mon"] . "/" . $arr["mday"] . "/" . $arr["year"] . $separator;
    //Remote address
    $loginfo .= $_SERVER["REMOTE_ADDR"] . $separator;
    $loginfo .= " \n";

}

function UpdateVars($id_, $logfiletxt_)
{
    global $separator;
    if (file_exists($logfiletxt_)) {
        $temparray_ = file($logfiletxt_);
        for ($index = 1; $index < count($temparray_); $index++) {
            $entry = explode($separator, $temparray_[$index]);
            if (!strcasecmp($entry[0], $id_)) { //Megegyezik a uniqueID akkor szedjuk ki!
                global $UID, $LOGO_EXT, $Confirmed, $ADV_EXT, $ADV2_EXT, $TName, $TCName, $TAddr,
                    $TPhone, $TFax, $TEmail, $TBill1, $TBill2, $TBill3, $WEB, $TURL, $EBoot, $Scilec, $Compost, $Promo, $Bronze, $Silver, $Gold, $Other, $TComments;

                $i = 0;

                $UID = $entry[$i++];
                $LOGO_EXT = $entry[$i++];
                $Confirmed = $entry[$i++];
                $ADV_EXT = $entry[$i++];
                $ADV2_EXT = $entry[$i++];
                $TName = $entry[$i++];
                $TCName = $entry[$i++];
                $TAddr = $entry[$i++];
                $TPhone = $entry[$i++];
                $TFax = $entry[$i++];
                $TEmail = $entry[$i++];
                $TBill1 = $entry[$i++];
                $TBill2 = $entry[$i++];
                $TBill3 = $entry[$i++];
                $WEB = $entry[$i++];
                $TURL = $entry[$i++];
                $EBoot = $entry[$i++];
				$Scilec = $entry[$i++];
				$Compost = $entry[$i++];
				$Promo = $entry[$i++];    
				$Bronze = $entry[$i++];
				$Silver = $entry[$i++];
				$Gold = $entry[$i++];
				$Other  = $entry[$i++];
                $TComments = $entry[$i++];
            }
        } // end of for cycle
    }
}


function GetuniqeId()
{
    srand((double)microtime() * rand(1000000, 9999999)); // Seed random number generator
    $arrChar = array(); // New array
    $uId = ""; // Write prefix in the uniq id

    for ($i = 65; $i < 90; $i++) {
        array_push($arrChar, chr($i)); // Add A-Z to array
        array_push($arrChar, strtolower(chr($i))); // Add a-z to array
    }
    for ($i = 48; $i < 57; $i++) {
        array_push($arrChar, chr($i)); // Add 0-9 to array
    }
    for ($i = 0; $i < 20; $i++) {
        $uId .= $arrChar[rand(0, count($arrChar) - 1)]; // Write random picked chars in the uniq id
    }
    return $uId;
}

function Upload($id, $fid, $EXT)
{
    global $content, $dirname, $UID, $WEBSITE;

    if ($_FILES[$id]['name'] != "") {
        // File letoltese
        if ($_FILES[$id]['size'] < 15 * 1024 * 1024 && $_FILES[$id]['size'] > 0) {
            $EXT = substr($_FILES[$id]['name'], -4);
            $content .= 'Return Code: ' . $_FILES[$id]['error'] . "\n";
            $content .= $WEBSITE . '/' .$dirname . '/' . $UID . '_' . $fid . $EXT . "\n";
            $content .= 'Uploading ' . $_FILES[$id]['name'] . ' (' . $_FILES[$id]['type'] . ', ' . ceil($_FILES[$id]['size'] / 1024) . " Kb).\n";
            move_uploaded_file($_FILES[$id]['tmp_name'], $dirname . '/' . $UID . '_' . $fid .
                $EXT);
        } else {
            echo 'Sorry, we only accept files under 15 MB for upload.';
            exit;
        }
    }
    return $EXT;
}
?>