<?php 



// headers to tell that result is JSON
header('Content-type: application/json');

// send the result now
echo json_encode($result_json);
 $json = file_get_contents('https://feedbackiosapp.herokuapp.com/feedbackiosapp/webservice.php'); 
 $obj = json_decode($json, true);
echo $obj;

?>
