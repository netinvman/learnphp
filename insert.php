<?php
$link = mysql_connect('localhost', 'root', '123456') or die('connection failed: ' . mysql_error());
if (mysql_select_db('bookstore', $link)
    echo "select the database 'bookstore'<br>";
else
    echo "database selection failed: " . mysql_error();

$myquery = "insert into orders (member_id, item_id, quantity) values (1, 5, 10)";
$result = mysql_query($myquery) or die("<br>insertion failed: " . mysql_error());

$result = mysql_query("select * from orders") or die("<br>query table 'orders' failed: " . mysql_error());
$rows = mysql_num_rows($result);
echo "record total: $rows <br>";
echo "<table border=1><tr><td>order_id</td>";
echo "<td>member_id</td><td>quantity</td></tr>";
for ($i = 0; $i < $rows; $i++) {
$row = mysql_fetch_array($result);
echo "<tr><td> $row[0] </td><td> $row[1] </td>";
echo "<td> $row[2] </td><td> $row[3] </td></tr>";
}
echo "</table>";
echo "insert record successfully.";
?>
