<?php
$file = fopen("./ip.txt","a");
$ip_address1 = $_SERVER['HTTP_CLIENT_IP'];
$ip_address2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ip_address3 = $_SERVER['REMOTE_ADDR'];
echo $ip_address1;
echo fwrite($file,$ip_address1);
fclose($file);
?>
