<?php
function square($num)
{
    return $num * $num;
}
echo "returned value: " . square(4) . '<br>';

function small_numbers()
{
    return array(0, 1, 2);
}
list($zero, $one, $two) = small_numbers();
echo "returned value: <br>$zero<br>$one<br>$two";
?>
