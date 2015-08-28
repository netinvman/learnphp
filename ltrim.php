<?php
$text = "  ...i like php :) ...";
$trimmed = ltrim($text);
echo $trimmed;
echo "<br>";

$trimmed = ltrim($text, ". ");
echo $trimmed;
?>
