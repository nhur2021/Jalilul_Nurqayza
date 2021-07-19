<?php
//PHP File to Create a hello_there.php File once User Run this Program
$file = "hello_there.php"; //This is the Name of the PHP File.
$php = fopen($file, "w") or die("Unable to open file!"); //Once File is Create will open the file using this PHP Function
fwrite($php, "This is a Program to create Hello_There.php File"); //Once the file is Open We will write a Simple Sentence on the File.
fclose($php); //After Writing on the File. We will close the File using this functions.

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header("Content-Type: text/plain");
readfile($file);

?>
	