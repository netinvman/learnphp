<?php
$link = mysql_connect('localhost', 'root', '123456') or die("connection failed: " . mysql_error());
if (mysql_select_db("test3", $link)
    echo "select database 'test3'<br>";
else
    echo "select database failed: " . mysql_error());

$myquery = "create table if not exists t_user(name varchar(20) not null, pwd varchar(10)";
$result = mysql_query($myquery) or die("<br>create table 't_user' failed: " . mysql_error());
echo "create table 't_user' successfully!";
?>
