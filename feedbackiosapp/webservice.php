<?php
$link = mysql_connect('182.50.151.4', 'gadvise', 'p@ssw0rd');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
