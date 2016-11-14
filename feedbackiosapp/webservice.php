<?php 

$result_json = array('name' => 'test', 'age' => '16');

// headers to tell that result is JSON
header('Content-type: application/json');

// send the result now
echo json_encode($result_json);

$asObjects = json_decode($string);

$asAssociativeArray = json_decode($string, true);

foreach ($asObjects as $obj) {
    echo $obj->name;
}

foreach ($asAssociativeArray as $arr) {
    echo $arr['name'];
}
?>
