<?php
$link = mysql_connect('localhost', 'root', '123456') or die('connection failed: ' . mysql_error());

if (mysql_select_db('bookstore', $link))
    echo "select the database 'booksotre'<br>";
else
    echo 'database selection failed: ' . mysql_error());

result = mysql_query("select * from aaa", $link) or die("query of table 'aaa' failed: " . mysql_error());

result = mysql_query("select * from items") or die("query of table 'items' failed" . mysql_error());
?>
