<?php
// sort
echo "sort<br>";
$fruit = array("lemon", "orange", "banana", "apple");
sort($fruit);
foreach ($fruit as $key => $val) {
    echo "fruit[" . $key . "] = " . $val . "<br>";
}

// asort
echo "asort<br>";
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruit);
foreach ($fruit as $key => $val) {
    echo "$key => $val <br>";
}

// ksort
echo "ksort<br>";
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruit);
foreach ($fruit as $key => $val) {
    echo "$key = $val <br>";
}

// rsort
echo "rsort<br>";
$fruit = array("lemon", "orange", "banana", "apple");
rsort($fruit);
foreach ($fruit as $key => $val) {
    echo "$key = $val <br";
}

//arsort
echo "arsort<br";
$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruit);
foreach ($fruit as $key => $val) {
    echo "$key = $val <br>";
}

//krsort
echo "krsort<br>";
krsort($fruit);
foreach ($fruit as $key => $val) {
    echo "$key = $val <br>";
}



?>
