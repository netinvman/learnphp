<?php
$foo = 'hello world!';
$foo = ucwords($foo);
echo $foo . "<br>";

$bar = 'HELLO WORLD!';
$bar = ucwords($bar);
echo $bar . "<br>";

$bar = ucwords(strtolower($bar));
echo $bar . "<br>";
?>
