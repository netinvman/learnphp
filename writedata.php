<?php
$filename = "data/1.txt";
$somecontent = "i am writed first!\n";
$somecontent1 = "i am writed later!\n";

if (is_writable($filename)) {
    if (!$handle = fopen($filename, "w")) {
        echo "can't open the file '$filename'";
        exit();
    }
    if (!fwrite($handle, $somecontent)) {
        echo "can't write the file $filename";
        exit();
    }
    echo "write '$somecontent' to file '$filename' successfully.<br>";
    fclose($handle);

    $handle = fopen($filename, "w");
    fwrite($handle, $somecontent1);
    fclose($handle);
    echo "write '$somecontent1' to file '$filename' successfully.";
} else {
    echo "file $filename can't be writed.";
}
?>
