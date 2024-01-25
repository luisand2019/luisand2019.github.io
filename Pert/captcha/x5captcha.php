<?php
include("../res/x5engine.php");
$nameList = array("d4w","y5y","ejv","5xc","ytl","s8k","48c","ggv","ejx","5jl");
$charList = array("2","8","H","W","T","M","2","8","5","D");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
