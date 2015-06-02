<?php

include "vendor/autoload.php";
include "app/classes/JSONDB.php";


//Initialize Libraries
$db = new JsonDB("data/");

$tweeps = $db->selectAll("tweeps");