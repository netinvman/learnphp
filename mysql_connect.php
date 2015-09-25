<?php
$link = mysql_connect('localhost', 'root', '123456');
if (!$link) {
    die('onnection failed: ' . mysql_error());
}
echo 'server information: ' . mysql_get_host_info($link);
mysql_close($link);
?>
