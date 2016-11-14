<?php 

$dbconn3 = pg_connect("host=ec2-54-243-47-46-compute-1.amazonaws.com port=5432 dbname=d1pdd9cb9tq855 user=vikas.y@moldtekindia.com.usgt2 password=mttl@123");
if($dbconn3){
echo 'connected';
}
else {
echo 'not connected';
}


?>
