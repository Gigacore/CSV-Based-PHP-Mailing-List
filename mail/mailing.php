<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$mailinglist = array("$name, $email",);
$file = fopen("list.csv","a");
foreach ($mailinglist as $line)
{fputcsv($file,explode(',',$line));}
fclose($file);
?>