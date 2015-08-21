<?php
for ($i = 1; $i <= 10; $i++) {
    print $i . "-";
}
print "<br>";

for ($i = 1; ; $i++) {
    if ($i > 10) break;
    print $i . "-";
}
print "<br>";

$i = 1;
for (;;) {
    if ($i > 10) break;
    print $i . "-";
    $i++;
}
print "<br>";

for ($i = 1; $i <= 10; print $i . "-", $i++);
?>
