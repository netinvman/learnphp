<?php
$filename = "data/student.txt";
$handle = fopen($filename, "r");
$buffer = fgets($handle, 1024);
fpassthru($handle);
fclose($handle);
?>
