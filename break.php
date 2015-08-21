<?php
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break 1;
        case 10:
            echo "At 10; quitting<br>";
            break 2;
        default:
            break;
}
}
?>
