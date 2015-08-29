<?php
$var = 'ABCDEFGH:/MNRPQR/';
echo "original string: $var<hr>\n";
echo substr_replace($var, 'bob', 0) . "<br>";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br>";

echo substr_replace($var, 'bob', 0, 0) . "<br>";

echo substr_replace($var, 'bob', 10, -1) . "<br>";
echo substr_replace($var, 'bob', -7, -1) . "<br>";

echo substr_replace($var, '', 10, -1) . "<br>";
?>
