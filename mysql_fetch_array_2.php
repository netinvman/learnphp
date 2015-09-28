<?php
$link = mysql_connect('localhost', 'root', '123456') or die('connection failed: ' . mysql_error());
mysql_select_db('bookstore', $link) or die('database selection failed: ' . mysql_error());
$result = mysql_query("select count(*) as order_num, sum(quantity) as total from orders") or die("query table 'orders' failed: " . mysql_error());
echo "<table border=1><tr><td>order nums</td>";
echo "<td>order total</td></tr>";
$row = mysql_fetch_array($result);
echo "<tr><td>" . $row['order_num'] . "</td> <td>" . $row['total'] . "</td></tr>";
echo "</table>";
?>
