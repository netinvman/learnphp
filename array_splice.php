<?php
$input = array("red", "green", "blue", "yellow");
$back = array_splice($input, 2);

$input = array("red", "green", "blue", "yellow");
$back = array_splice($input, 1, -1);

$input = array("red", "green", "blue", "yellow");
$back = array_splice($input, 1, count(input), "orange");

$input = array("red", "green", "blue", "yellow");
$back = array_splice($input, -3, 2, array("black", "maroon"));
print_r($back);
echo "<br>";
print_r($input);

$input = array("red", "green", "blue", "yellow");
$back = array_splice($input, 3, 0, "purple");
?>
