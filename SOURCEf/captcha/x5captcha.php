<?php
include("../res/x5engine.php");
$nameList = array("ns6","t4l","vux","xlg","ax4","flf","2uk","svl","x2n","y8r");
$charList = array("J","W","Z","7","N","J","J","8","D","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
