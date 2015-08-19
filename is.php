<?php
$a = 0.1;
$b = 'hi';
$c = True;
if (is_numeric($a))
    echo '$a is numeric<br>';
else
    echo '$a is not numeric<br>';

if (is_int($a))
    echo '$a is int<br>';
else
    echo '$a is not int<br>';

if (is_string($b))
    echo '$b is string<br>';
else
    echo '$b is not string<br>';

if (is_bool($c))
    echo '$c is bool<br>';
else
    echo '$c is not bool<br>';

?>
