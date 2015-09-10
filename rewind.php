<?php
$handle = fopen("data/student.txt", "r");
$buffer = fgets($handle, 1024);
echo $buffer . "<br>";
$buffer = fgets($handle, 1024);
echo $buffer . "<br>";
rewind($handle);
$buffer = fgets($handle, 1024);
echo $buffer . "<br>";
fclose($handle);
?>
