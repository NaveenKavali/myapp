<?php
$link = mysqli_connect('46.101.84.49', 'root', 'jpqH9dPR5L');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
