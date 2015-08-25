<?php
function foo()
{
    global $fruit;
include 'a_inc.php';
echo "$who like $fruit";
}
foo();
echo "<br>";
echo "$who like $fruit";
?>
