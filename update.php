<?php
$link = mysql_connect('localhost', 'root', '123456') or die('connection failed: ' . mysql_error());
mysql_select_db('bookstore', $link) or die('database selection failed: ' . mysql_error());
$myquery = "update orders set quantity=100";
$result = mysql_query($myquery) or die("<br>update failed: " . mysql_error());
$result = mysql_query("select * from orders") or die("query table 'orders' failed: " . mysql_error());
$rows = mysql_num_rows($result);
echo "record total: $rows <br>";
echo "<table border=1><tr><td>order_id</td>";
echo "<td>member_id</td><td>item_id</td><td>quantity</td></tr>";
for ($i = 0; $i < $rows; $i++) {
    mysql_fetch_array($result);
    echo "<tr><td> $row[0] </td><td> $row[1] </td>";
    echo "<td> $row[2] </td><td> $row[3] </td></tr>";
}
echo "</table>";
echo "update successfully!";
?>
