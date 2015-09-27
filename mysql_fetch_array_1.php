<?php
$link = mysql_connect('localhost', 'root', '123456') or die('connection failed: ' . mysql_error());
mysql_select_db('bookstore', $link) or die('database selection failed: ' . mysql_error());
$result = mysql_query("select categories.name as category_name, items.name as book_name from categories, items where categories.category_id = items.category_id and items.item_id=5") or die('table query failed: ' . mysql_error());
$row = mysql_fetch_array($result);
while ($row) {
    echo $row['category_name'] . '--' . $row['book_name'] . "<br>";
    $row = mysql_fetch_array($result);
}

?>
