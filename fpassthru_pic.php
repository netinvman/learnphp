<?php
$filename = 'data/student.txt';
$handle = fopen($filename, "rb");
header("Content-Type: image/png");
header("Content-Length: ".filesize($filename));
fpassthru($handle);
exit;
?>
