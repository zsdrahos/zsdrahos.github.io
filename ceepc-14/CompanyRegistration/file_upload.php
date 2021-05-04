<?php
$name=$_FILES['myFile']['name'];
$size=$_FILES['myFile']['size'];

if ($name=="" && $size==0) 	echo 'Nincs file';
if ($name=="" && $size!=0)	echo 'Ezt nem ertem !!!!!';
if ($name!="" && $size==0) 	echo 'Tul nagy a file!';
if ($name!="" && $size!=0) 	echo 'Feltoltes OK.';

echo '<br>';

print_r($_FILES);
exit;
?>