<?php
$link = mysqli_connect('11.58.0.19', 'gadvise', 'p@ssw0rd');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
