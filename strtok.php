<?php
$string = "This is\tan example\nstring";
$tok = strtok($string, " \n\t");
while ($tok) {
    echo "word=$tok<br>";
    $tok = strtok(" \n\t");
}
?>
