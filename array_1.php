<?php
$array = array(1, 2, 3, 4, 5);
print_r($array);
echo "<br>";

foreach ($array as $k => $v) {
    unset($array[$k]);
}
print_r($array);
echo "<br>";
$array[] = 6;
print_r($array);
echo "<br>";

$array= array_values($array);
$array[] = 7;
print_r($array);
?>
