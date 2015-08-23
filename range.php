<?php
// Generate array(0, 1, 2, 3, 4, 5)
foreach (range(0, 5) as $number) {
    echo $number;
}
echo "<br>";
// array(0, 10, 20, 30, 40)
foreach (range(0, 40, 10) as $number) {
    echo $number;
}
echo "<br>";
// char array
foreach (range('a', 'd') as $letter) {
    echo $letter;
}
echo "<br>";
//array array('c', 'b', 'a')
foreach (range('c', 'a') as $letter) {
    echo $letter;
}
?>
