<?php
$result_json = array('name' => 'naveen', 'age' => '16');


// headers to tell that result is JSON
header('Content-type: application/json');

// send the result now
echo json_encode($result_json);
?>
