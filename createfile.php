<?php
$handle = fopen("hello/1.txt", "w");
fclose();
echo "'/hello/1.txt' " file create successfully.";
$handle = fopen("c:/temp.txt", "a");
fclose($handle);
echo "'c:/temp.txt' " file create successfully.";
?>
