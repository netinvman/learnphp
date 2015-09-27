<?php
$link = mysql_connect('localhost', 'root', '123456') or die('connection failed' . mysql_error());
mysql_select_db('booksotre') or die('selectin for database failed: ' . mysql_error());
$result = mysql_query("select name, category_id from categories") or die("<br>table query failed: " . mysql_error());
$row = mysql_fetch_row($result);
while ($row) {
    echo $row[0] . '--' . $row[1] . "<br>";
    $row = mysql_fetch_row($result);
}
?>
