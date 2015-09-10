<?php
$filename = 'data/3.txt';
$handle = fopen($filename, "w");
fwrite($handle, "<b>i like dancing very much!</b>\n");
fwrite($handle, "<br>i like singing very much!\n");
fclose($handle);

// function fgets 's output
echo "function fgets 's output:<br>";
$handle = fopen($filename, "r");
while (!feof($handle)) {
    $buffer = fgets($handle, 1024);
    echo $buffer;
}
fclose($handle);

// function fgetss 's output
echo "<br>function fgetss 's output:<br>";
$handle = fopen($filename, "r");
while(!feof($handle)) { 
    $buffer = fgetss($handle, 1024);
    echo $buffer;
}
fclose($handle);
?>
