<?php
$input = array("a", "b", "two" => "c", "d", "e");
$output = array_slice($input, 2);
$output = array_slice($Input, -2, 1);
$output = array_slice($input, 0, 3);

print_r(array_slice($input, 2, -1));
echo "<br>";

print_r(array_slice($input, 2, -1, true));
?>
