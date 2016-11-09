<?php
$link = mysqli_connect('localhost', 'gadvise', 'p@ssw0rd');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
