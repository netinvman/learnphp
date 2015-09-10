<?php
$lines = file("http://www.zhaozhou.gov.cn");
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b>:" . htmlspecialchars($line) . "<br>\n";
}
?>
