<?php

include "init.inc.php";

include "data/Codebird.WakeUp.php";

//set up query
$sql = (string) "";

//Loop through Tweeps
foreach ($tweeps as $tweep) {
	$res = $cb->users_show("screen_name=" . $tweep['name_twitter']);
	$Avatar = (string) $res->profile_image_url;
	$Avatar = str_replace("normal", "bigger", $Avatar);
	
	$tweep['twitter_image'] = $Avatar;

	//update!
	$db->update("tweeps", "name_twitter", $tweep["name_twitter"], $tweep);
	echo "Updated: " . $tweep["name_twitter"] . PHP_EOL;
}