<?php
$filename = 'data/student.txt';
$student1 = "name:dog \t age:5 \t gender:male\n";
$student2 = "name:cat \t age:4 \t gender:female\n";
$student3 = "name:pig \t age:3 \t gender:female\n";
if (!$handle = fopen($filename, "w")) {
    echo "can not open the file 'filename'";
    exit;
}
if (!fwrite($handle, $student1)) {
    echo "can not write to the file '$filename'";
    exit;
}
echo "write \"$student1\" to the file \"$filename\"<br>";
fclose($handle);

$handle = fopen($filename, "a");
fwrite($handle, $student2);
echo "write \"$student2\" to the file \"$filename\"<br>";
fwrite($handle, $student3);
echo "write \"$student3\" to the file \"$filename\"<br>";
fclose($handle);
?>
