<?php
$link = mysql_connect('localhost', 'root', '123456') or die('connection to mysql server failed: ' . mysql_error());
mysql_select_db('bookstore', $link) or die('database selection failed: ' . mysql_error());
$result = mysql_query("select * from members") or die('table query failed: ' . mysql_error());
$row = mysql_fetch_assoc($result);
while ($row) {
    echo $row['member_id'] . '--' . $row['member_login'] . "<br>";
    $row = mysql_fetch_assoc($result);
}
?>
