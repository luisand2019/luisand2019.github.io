<?php
include("../res/x5engine.php");
$nameList = array("x57","xwa","ael","8l5","pwz","tz8","np5","r3t","rdt","5ax");
$charList = array("T","G","Y","M","Z","R","D","W","V","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
