<?php
$i = 1;
while ($i <= 10) {
    print $i++ . "-";
}
print "<br>";

$i = 1;
while ($i <= 10):
    print $i . "-";
    $i++;
endwhile;
print "<br>";

$i = 1;
while ($i < 20):
    print $i . "-";
    $i++;
    if ($i > 10) break;
endwhile;
print "<br>";

$i = 1;
do {
    if ($i < 5)
        print "now output $i <br>";
    $i++;
    if ($i > 5)
        break;
} while(1);
?>
