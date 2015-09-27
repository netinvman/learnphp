<?php
$link = mysql_connect('localhost', 'root', '123456') or die("connection failed: " . mysql_error());
mysql_select_db("bookstore", $link) or die("selection database failed: " . mysql_error());
$result = mysql_query("select * from categories") or die("table query failed: " . mysql_error());
$row = mysql_fetch_row($result);
while ($row) {
    echo $row[0] . '--' . $row[1]. "<br>";
    $row = mysql_fetch_row($result);
}
mysql_free_result($result);
?>
