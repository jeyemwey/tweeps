<?php

include "vendor/autoload.php";

//Initialize Libraries
$db = new \philwc\JsonDB("data/");

$tweeps = $db->selectAll("tweeps");