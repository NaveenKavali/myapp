<?php 



// headers to tell that result is JSON
header('Content-type: application/json');

 $obj = json_decode($json, true);
print_r($obj);

?>
