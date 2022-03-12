<?php
 
/*Special thanks to: 
@dbrurcell
*/ 
 
header('Content-type: Application/x-mpegURL');  
error_reporting(0); 
$jono = fopen('error_log', 'w'); 
fwrite($jono,'Mau Ngapain...?');  

//contoh ambil single channel usee
$v4nt4t = "http://hi.hi-back.masuk.web.id/c.m3u8?shinta=2022&coday=f846bc691110108f73cb55c2f4049864&cdy=274ad4786c3abca69fa097b85867d9a4446503011668def857b1c03bafabba51"; 
$chn = curl_init($v4nt4t); 
curl_setopt($chn, CURLOPT_RETURNTRANSFER, true); 
$kops = 'User-Agent: Mozilla/5.0 (Linux; Android 11; vivo 1904) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.115 Mobile Safari/537.36'; 
curl_setopt($chn, CURLOPT_HTTPHEADER, $kops); 
$get = curl_exec($chn);
echo $get;

?>
