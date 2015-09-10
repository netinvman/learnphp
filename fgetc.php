<?php
$fp = fopen('data/4.txt', 'r');
if (!$fp) {
    echo 'can not open the file!';
}
while (false != ($char = fgetc($fp))) {
    echo "$char";
}
?>
