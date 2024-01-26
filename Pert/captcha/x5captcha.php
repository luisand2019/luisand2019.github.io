<?php
include("../res/x5engine.php");
$nameList = array("8a8","wxk","8v4","tdu","ycc","6zp","wpf","l7v","sf3","ly4");
$charList = array("7","7","C","S","M","U","S","D","E","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
