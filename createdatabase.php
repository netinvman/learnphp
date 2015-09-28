<?php
$link = mysql_connect('localhost', 'root', '123456') or die("connection failed: " . mysql_error());
$myquery = "create database test3";
$result = mysql_query($myquery, $link) or die("create databse failed: " . mysql_error());
echo "create databse successfully.";
?>
