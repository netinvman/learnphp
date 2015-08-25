<?php
$transport = array("foot", "bike", "car", "plane");
$mode = current($transport);
echo "current value: " . $mode . "<br>";

$mode = next($transport);
echo "current value: " . $mode . "<br>";

$mode = next($transport);
echo "current value: " . $mode . "<br>";

$mode = prev($transport);
echo "current value: " . $mode . "<br>";

$mode = end($transport);
echo "current value: " . $mode . "<br>";

reset($transport);
$mode = current($transport);
echo "current value: " . $mode . "<br>";
?>
