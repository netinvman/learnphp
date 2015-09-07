<?php
$filename = 'hello.txt';
$catalog = "hello";
//file check
if (file_exists($filename)) {
    print "'$filename' " . "file exist!<br>";
} else {
    print "'$filename' " . "file not exist!<br>";
}
// directory check
if (file_exists($catalog)) {
    print "'$catalog' " . "directory exist!";
} else {
    print "'$catalog' " . "directory not exist!";
}
?>
