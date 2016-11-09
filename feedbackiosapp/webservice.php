
<?php
    $db_connection = pg_connect("host=ec2-54-243-47-46.compute-1.amazonaws.com dbname=d1pdd9cb9tq855 user=awskdtjguszwxc password=UyHMcmVteZBhy79KkdcZKG-Fae");

if (!$db_connection) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
?>
