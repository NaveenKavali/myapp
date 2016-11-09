<?php
$link = mysqli_connect('182.50.151.4', 'gadvise', 'p@ssw0rd');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
?>
