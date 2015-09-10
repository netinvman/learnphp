<?php
$filename = 'data/2.txt';
$handle = fopen($filename, "w");
fwrite($handle, "1\n");
fwrite($handle, "2\n");
fwrite($handle, "3\n");
fwrite($handle, "4\n");
fwrite($handle, "5\n");
fwrite($handle, "6\n");
fclose($handle);
echo "successfully!";
?>
