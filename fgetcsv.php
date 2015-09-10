<?php
$row = 1;
$handle = fopen("data/student.txt", "r");
while ($data = fgetcsv($handle, 1000, "\t")) {
    $num = count($data);
    echo "<p>line $row has $num items:<br>\n";
    $row++;
    for ($c=0; $c<$num; $c++) {
        echo $data[$c] . "<br>\n";
    }
}
fclose($handle);
?>
