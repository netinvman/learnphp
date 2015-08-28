<?php
function test() {
    static $a = 0;
    echo $a . "<br>";
    $a++;
}
for ($i = 0; $i < 10; $i++) {
    test();
}
?>
