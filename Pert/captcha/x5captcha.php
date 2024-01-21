<?php
include("../res/x5engine.php");
$nameList = array("dt5","f5z","pyj","p76","63l","f8j","mll","gv4","hxx","ymu");
$charList = array("6","N","G","2","U","A","E","J","R","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
