<?php
$a = 123456;
$b = 123.456;
$c = -1.3e8;
// numeric to string
echo $a . "abc<br>";
echo $b . "cde<br>";
echo $c . "abc<br>";

// string to numeric
$foo = 1 + "10.5";
echo $foo . "<br>";
$foo = 1 + "-1.3e3";
echo $foo . "<br>";
$foo = 1 + "bob-1.3e3";
echo $foo . "<br>";
$foo = 1 + "bob3";
echo $foo . "<br>";
$foo = 4 + "10.2 Little Piggies";
echo $foo . "<br>";
$foo = "10.0 pigs" + 1;
echo $foo . "<br>";
$foo = "10.0 pigs" + 1.0;
echo $foo . "<br>";
$foo = 1 +  "010";
echo $foo . "<br>";
$foo = 1 + "0x10";
echo $foo . "<br>";
$foo = 1 + "\x10";
echo $foo . "<br>";
$foo = 1 + "\x35";
echo $foo . "<br>";
$foo = 1 + "0x\x41\x31";
echo $foo . "<br>";
?>
