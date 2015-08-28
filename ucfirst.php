<?php
$foo = 'hello world!';
$foo = ucfirst($foo);
echo $foo . "<br>";

$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);
echo $bar;

$bar = ucfirst(strtolower($bar));
echo $bar;
?>
