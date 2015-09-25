<?php
$link = mysql_connect('localhost', 'root', '123456')
        or die("connection failed" . mysql_error());
if (mysql_select_db('bookstore', $link)
    echo "selected database 'bookstore'";
else:
    echo "selection of database failed: " . mysql_error();
?>
