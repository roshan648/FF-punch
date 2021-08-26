<?php
// GET COUNTRY FLAG ACCORDING IP ADDRESS BY ARPANTEK
function get_client_flag() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ip = get_client_flag();
$ch = curl_init('http://arpanrizki.my.id/api/get_flag/country.php?ip='.$ip.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$arpantek_flag = curl_exec($ch);
curl_close($ch);
?>