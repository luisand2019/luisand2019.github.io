<?php
include("../res/x5engine.php");
$nameList = array("axy","aj6","lxn","d5d","2hk","f8n","7ge","xm7","m8a","4gw");
$charList = array("7","R","4","P","J","C","R","G","5","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
