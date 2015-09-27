<?php
$link = mysql_connect('localhost', 'root', '123456') or die('connection failed: ' . mysql_error());
mysql_select_db('bookstore', $link) or die('database selection failed: ' . mysql_error());
$result = mysql_query("select * from members") or die("<br>table query failed: " . mysql_error());
$row = mysql_fetch_array($result);
while ($row) {
    echo $row[0] . '--' . $row[1] . '--' . $row['email'] . "<br>";
    $row = mysql_fetch_array($result);
}
?>
