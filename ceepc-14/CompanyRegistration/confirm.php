<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<TITLE>Confirmation</TITLE>
</HEAD>
<BODY LINK="#0000ff" VLINK="#800080" BGCOLOR="#E9E9E9">
<P>

<?php

include "common.php";
if (isset($_GET["id"])) {
    UpdateVars($_GET["id"], $logfiletxt);
} else {
    echo 'Incorrect parameters';
}

// A File betoltese
if (file_exists($logfiletxt)) {
    $temparray = file($logfiletxt);
    for ($index = 1; $index < count($temparray); $index++) {
        $entry = explode($separator, $temparray[$index]);
        if (!strcasecmp($entry[0], $UID)) { //Megegyezik a uniqueID akkor csereljuk ki
            $changed = true;
            $entry[2] = "1";
            $temparray[$index] = implode($entry, $separator);
        }
    } // end of for cycle

    if ($changed == true) // Ha megvaltozott akkor mentsuk el!
        {
        // Mentes a File-ba!
        $fp = fopen($logfiletxt, "w");
        printfirstline($fp);
        for ($index = 1; $index < count($temparray); $index++) {
            fputs($fp, $temparray[$index]);
        }
        fclose($fp);
        echo 'Your registration has been confirmed. Thank you!';
    } else {
        echo 'Incorrect parameters';
    }
}
?>

</P></BODY>
</HTML>
