<?php
echo gettype((bool)"") . "<br>";
echo gettype((bool)1) . "<br>";
echo gettype((bool)-2) . "<br>";
echo gettype((bool)"foo") . "<br>";
echo gettype((bool)2.3e5) . "<br>";
echo gettype((bool)array(12)) . "<br>";
echo gettype((bool)array()) . "<br>";
?>
