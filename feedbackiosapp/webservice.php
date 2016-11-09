<?php
$link = mysqli_connect('166.62.28.136', 'gadvise', 'p@ssw0rd');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
