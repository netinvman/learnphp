<?php
$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    print "\$a 's current value: $v<br>";
}

$b = array(1, 2, 3, 17);
$i = 0;
foreach ($b as $v) {
    print "\$b[$i] => $v<br>";
    $i++;
}

$c = array("one" => 1, "two" => 2, "three" => 3, "seventeen" => 17);
foreach ($c as $k => $v) {
    print "\$c[$k] => $v<br>";
}

$d[0][0] = "a";
$d[0][1] = "b";
$d[1][0] = "y";
$d[1][1] = "z";
foreach ($d as $v1) {
    foreach ($v1 as $v2) {
        print "\$d 's current value: $v2<br>";
    }
}

foreach (array(1, 2, 3, 4, 5) as $v) {
    print "dynamic array 's current value: $v<br>";
}
?>
