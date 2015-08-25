<?php
echo "random sort: <br>";
$numbers = array(1, 2, 3, 4, 5);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

// reverse sort
$input = array("php", 4.0, "hello");
$result = array_reverse($input);
echo "<br>reverse sort: <br>";
print_r($result);

// preserve keys for reverse sort
echo "preserve kyeys for reverse sort: <br>";
$result_keyed = array_reverse($input, TRUE);
print_r($result_keyed);
?>
