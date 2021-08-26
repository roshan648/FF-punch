<?php
//MIDASBUY TRUE ID FIX V1.3 BY ARPANTEK
include("setting.php");
if(isset($_POST['charId']) || isset($_POST['Token'])){

    $charId = $_POST['charId'];
    $Token = $_POST['Token'];

// LO UBAH JANGAN HARAP WORK TRUE ID NYA 
    $linkgan = "https://arpanrizki.my.id/api/trueid_pubgmv2/trueid.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $linkgan);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "charId=$charId&License=$License&Token=$Token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);      
    curl_setopt($c, CURLOPT_HEADER, 0);
    curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt'); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);

    print_r($response);
}

?>