<?php
$info = array('coffee', 'brown', 'caffeine');
list($drink, $color, $power) = $info;
echo "$drink 's color is $color, $power<br>";

list($drink,,$power) = $info;
echo "$drink, $power<br>";

list(,,$power) = $info;
echo "$power!<br>";
?>
