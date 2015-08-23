<?php
$foo = array("bob", "fred", "jussi");
$bar = each($foo);
echo "\$bar 's current content: ";
print_r($bar);

$foo = array("Robert" => "Bob", "Seppo" => "Sepi");
$bar_1 = each($foo);
echo "<br>\$bar_1 's current content: ";
print_r($bar_1);

$fruit = array('a' => "apple", 'b' => "banana", 'c' => "cranberry");
reset($fruit);
echo "<br>\$fruit 's all item:<br>";
while (list($key, $val1) = each($fruit)) {
    echo "$key => $val1<br>";
}
?>
