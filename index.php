<?php

$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
echo $query['hi'];
// headers to tell that result is JSON
header('Content-type: application/json');

 $obj = json_decode($json, true);
print_r($obj);
?>
