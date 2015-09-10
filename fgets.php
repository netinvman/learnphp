<?php
$handle = fopen("data/student.txt", "r");
while (!feof($handle)) {
    $buffer = fgets($handle, 1024);
    echo $buffer . "<br>";
}
fclose($handle);
?>
