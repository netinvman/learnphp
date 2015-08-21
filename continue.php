<?php
$i = 0;
while ($i++ < 5) {
    if ($i == 2)
        continue;
    echo "i am $i<br>";
}

$i = 0;
while ($i++ < 5) {
    echo "outside<br>";
    while (1) {
        echo "&nbsp;&nbsp;middle<br>";
        while (1) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;inside<br>";
            $i = 6;
            continue 3;
        }
    }
}
?>
