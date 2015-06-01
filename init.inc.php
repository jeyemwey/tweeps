<?php

include "vendor/autoload.php";

$db = new \philwc\JsonDB("data/");

header("Content-Type: text/json");

echo json_encode($db->selectAll("tweeps"));