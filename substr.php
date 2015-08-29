<?php
$rest = substr("abcdef", 1);
$rest = substr("abcdef", 1, 3);
$rest = substr("abcdef", 0, 4);
$rest = substr("abcdef", 0, 8);

$string = "abcdef";
echo $string[0];
echo $string[3];

$rest = substr("abcdef", -1);
$rest = substr("abcdef", 2, -1);
$rest = substr("abcdef", 4, -4);
$rest = substr("abcdef", -3, -1);
?>
