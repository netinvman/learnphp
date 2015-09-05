<?php
$string = "The quick brown fox jumped over the lazy dog.";
$pattern[0] = "/quick/";
$pattern[1] = "/brown/";
$pattern[2] = "/fox/";

$replacement[2] = "bear";
$replacement[1] = "black";
$replacement[0] = "slow";
print preg_replace($pattern, $replacement, $string);
echo "<br>";

// sort the array with the keys
ksort($pattern);
ksort($replacement);
print preg_replace($pattern, $replacement, $string);
?>
