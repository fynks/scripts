<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
date_default_timezone_set("Asia/Karachi");
$date = (new DateTime('NOW'))->format("d-m-y h:i:s")."\r\n";
$file = 'ip.txt';  //this is the file to which the IP address will be written; name it your way.

$fp = fopen($file, 'a');

fwrite($fp, $ipaddress);
fwrite($fp, $date);
fclose($fp);

?>
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=UTF-8>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<style>
body{
	text-align: center;
}
</style>
</head>
<body>
<h1>Ip logged</h1>
</body>
</html>
