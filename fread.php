<?php
$fp = fopen('data/4.txt', 'r');
$contents = fread($fp, 10);
echo $contents . "<br>";
fclose($fp);

$handle = fopen("http://www.zhaozhou.gov.cn", "rb");
$contents = "";
do {
    $data = fread($handle, 8192);
    if (strlen($data) == 0) {
        break;
    }
    $contents .= $data;
} while(true);

echo $contents;
fclose($handle);
?>
