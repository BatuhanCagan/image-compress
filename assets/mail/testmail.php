<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$from = "chameleoncompress@gmail.com";
$to = "batuh.cagan@gmail.com";
$subject = "Checking PHP mail";
$message = "PHP mail works just fine";
$headers = "From:" . $from
mail($to,$subject,$message,$headers);
echo "The mail message was sent.";
?>