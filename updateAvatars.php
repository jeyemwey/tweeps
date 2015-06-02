<?php

include "init.inc.php";

include "data/Codebird.WakeUp.php";

//set up query
$sql = (string) "";

//Loop through Tweeps
foreach ($tweeps as $tweep) {
	$Avatar = (string) $cb->users_show("screen_name=" . $tweep['name_twitter'])->profile_image_url;
	$Avatar = str_replace("normal", "bigger", $Avatar);
	
	$tweep['twitter_image'] = $Avatar;

	print_r($tweep);

	//update!
	$db->update("tweeps", "name_twitter", $tweep["name_twitter"], $tweep);
}