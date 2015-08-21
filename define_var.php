<?php
define("CONSTANT", "hello world\n");
echo CONSTANT . "<br>";
echo Constant . "<br>";

define("GREETING", "Hello you\n", True);
echo GREETING . "<br>";
echo Greeting . "<br>";
define("MAXSIZE", "100\n");
echo MAXSIZE;
echo constant("MAXSIZE") . "<br>";

echo defined("ONE") . "<br>";
define("ONE", "Hello one");
echo defined("ONE") . "<br>";

?>
