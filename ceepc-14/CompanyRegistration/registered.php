<?php
include 'common.php';


while (list($k, $val) = each($_POST)) {
    // a $val nem tartalmazhat $separator karaktert! Ezt csereljuk le ";"-re!!!
    $val = implode(":", explode($separator, $val));

    if ($k == "TName")
        $TName = $val;
    if ($k == "TCName")
        $TCName = $val;
    if ($k == "TAddr")
        $TAddr = $val;
    if ($k == "TPhone")
        $TPhone = $val;
    if ($k == "TFax")
        $TFax = $val;
    if ($k == "TEmail")
        $TEmail = $val;
    if ($k == "TBill1")
        $TBill1 = $val;
    if ($k == "TBill2")
        $TBill2 = $val;
    if ($k == "TBill3")
        $TBill3 = $val;
    if ($k == "WEB")
        $WEB = $val;
    if ($k == "TURL")
        $TURL = $val;
    if ($k == "TComments")
        $TComments = $val;
    if ($k == "Confirmed")
        $Confirmed = $val;
    if ($k == "UID")
        $UID = $val;
    if ($k == "LOGO_EXT")
        $LOGO_EXT = $val;
    if ($k == "ADV_EXT")
        $ADV_EXT = $val;
    if ($k == "ADV2_EXT")
        $ADV2_EXT = $val;
    if ($k == "CheckForm")
        $CheckForm = $val;
	
	if ($k == "eboot")
        $EBoot = $val;
	if ($k == "scilec")
        $Scilec = $val;
    if ($k == "compost")
        $Compost = $val;
	if ($k == "promo")
        $Promo = $val;    
	if ($k == "bronze")
        $Bronze = $val;
 	if ($k == "silver")
        $Silver = $val;
	if ($k == "gold")
        $Gold = $val;
	if ($k == "Other")
        $Other = $val;



    if ($k != "Submit") {
        $content .= "$k: $val\n";
    }
}

if ($CheckForm != "Rendben") {
    echo 'There was an error while transferring data (files are too big or wrong connection). Please try again!';
    exit;
}


// check the email fields for validity ("lopott" kod alapjan)
$TEmail = trim($TEmail);
if (!$IsAdmin) {
    if (strlen($TEmail) > 64)
        $TEmail = substr($TEmail, 1, 64);
    if (preg_match("/^[A-Z0-9.%-]+@[A-Z0-9.%-]+.[A-Z]{2,4}$/", $TEmail)) {
        header("Location: $error");
        exit;
    }
}

if ($UID == "None")
    $UID = GetuniqeID();

$LOGO_EXT = Upload('FLogo', 'LOGO', $LOGO_EXT);
$ADV_EXT = Upload('FAdv', 'FADV', $ADV_EXT);
$ADV2_EXT = Upload('FAdv2', 'FADV2', $ADV2_EXT);

FillLoginfo();
$content .= "REMOTE HOST: " . $_SERVER["REMOTE_ADDR"] . "\n";

// Ha nem letezik a file keszitsuk el
if (!file_exists($logfiletxt)) {
    $fp = fopen($logfiletxt, "w");
    printfirstline($fp);
    fclose($fp);
}


// A File betoltese
if (file_exists($logfiletxt)) {
    $temparray = file($logfiletxt);
    for ($index = 1; $index < count($temparray); $index++) {
        $entry = explode($separator, $temparray[$index]);
        if (!strcasecmp($entry[0], $UID)) { //Megegyezik a uniqueID akkor csereljuk ki
            $changed = true;
            $entry[0] = "DeLeTe";
            $temparray[$index] = implode($entry, $separator);
        }
    } // end of for cycle

    if ($changed == true) // Ha megvaltozott akkor mentsuk el!
        {
        // Mentes a File-ba!
        $fp = fopen($logfiletxt, "w");
        printfirstline($fp);
        for ($index = 1; $index < count($temparray); $index++) {
            if (strncmp($temparray[$index], "DeLeTe", 6))
                fputs($fp, $temparray[$index]);
        }
        fclose($fp);
    }
    // Irjuk az ujat hozza
    $logfile = fopen($logfiletxt, "a+");
    fwrite($logfile, $loginfo);
    fclose($logfile);
} //end of file-exist


//elkuldendo szoveg
$download = "Dear Colleague,\n\n";

if ($changed) {
    $download .= "Your registration has been changed\n";
    $immssubject = "Company Registartion Change";
    $subject = "14th CEEPC Company Registration Change";

} else {
    $download .= "Your company have been registered for " . $CONF_NAME . "\n";
    //$download .= "You have to confirm your registration by clicking on the following link:\n\n";
    //$download .= $WEBSITE . "/confirm.php?id=" . $UID . "\n\n";
    //$download .= "Note that, all unconfirmed registration will be deleted! \n\n";
}

$download .= "If you wish to modify your registration, please click on the following link:\n";
$download .= $WEBSITE . "/index.php?id=" . $UID . "\n\n";
$download .= "Looking forward to meeting you in Hungary!\n";
$download .= "The Organizing Comittee";


if ($ADMIN_IP != "127.0.0.1") // Ha nem otthonrol kuldjuk
    {

    // Elkuldi az instrukciokat az adott email cimre
    mail($TEmail, $subject, $download, $emailheaders);


    // Email az adminisztratornak
    mail($immsadmin, $immssubject, $content . '/n' . $download, $emailheaders);

} else {
    print 'Content=' . $content;
    print 'Loginfo=' . $loginfo;
    print 'Download=' . $download;
}


if ($changed == true) {
    header("Location: $changed_website");
} else {
    header("Location: $registered");
}

exit;
?>