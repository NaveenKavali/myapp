<?php
$link = mysqli_connect('ec2-54-243-47-46.compute-1.amazonaws.com', 'awskdtjguszwxc', 'UyHMcmVteZBhy79KkdcZKG-Fae');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
?>
