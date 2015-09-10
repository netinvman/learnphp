<?php
$handle = fopen("data/5.txt", "r");
$buffer = fgets($handle, 1024);
echo $buffer . "<br>";
fseek($handle, 5, SEEK_CUR);
$buffer = fgets($handle, 1024);
echo $buffer . "<br>";
fseek($handle, 0);
$buffer = fgets($handle, 1024);
echo $buffer . "<br>";
fclose($handle);
?>
