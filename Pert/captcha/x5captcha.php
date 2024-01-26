<?php
include("../res/x5engine.php");
$nameList = array("cce","guc","w8x","8ma","kke","ptn","zn2","nky","47e","vfu");
$charList = array("6","J","6","X","Z","5","W","P","H","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
