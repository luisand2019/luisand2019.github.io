<?php
include("../res/x5engine.php");
$nameList = array("tat","xgh","cpp","sge","gfj","hds","6dh","u63","mfh","4g3");
$charList = array("N","E","6","R","U","A","L","C","3","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
