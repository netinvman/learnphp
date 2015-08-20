<?php
$myName = "little";
$yourName = &$myName;
$myName = "littlePig<br>";
print "$yourName";
$yourName = "litlecat<br>";
print "$myName";
?>
