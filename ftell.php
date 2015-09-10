<?php
$fp = fopen("data/5.txt", "r");
$data = fgets($fp, 15);
echo ftell($fp);
fclose($fp);
?>
