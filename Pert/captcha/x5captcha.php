<?php
include("../res/x5engine.php");
$nameList = array("hte","ak7","4hg","nr7","wuk","2yk","gk8","vt7","xu6","zap");
$charList = array("E","E","3","T","U","8","Z","8","G","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
