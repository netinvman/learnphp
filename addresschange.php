<?php
$myNum = 100;
function addressChange($number)
{
    $number++;
    echo $number . "<br>";
}
addressChange(&$myNum);
echo $myNum;
?>
