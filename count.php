<?php
$a = array(1, 3, 5);
$result = count($a);
echo "\$a 's item number: " . $result;

$b[0] = 7;
$b[5] = 9;
$b[10] = 11;
$result = count($b);
echo "<br>\$b 's item number: " . $result . "<br>";

$result = count(null);
echo "\$result: " . $result . "<br>";

$result = count(false);
echo "\$result: " . $result . "<br>";

$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
?>
