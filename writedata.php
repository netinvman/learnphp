<?php
$filename = 'hello/1.txt';
$somecontent = "i am writed first!\n";
$somecontent1 = "i am writed later!\n";

if (is_writable($filename)) {
    if (!$handle = fopen($filename, "w") {
        print "can't open the file '$filename'";
        exit;
}
    if (!fwrite($handle, $somecontent)) {
        print "can't write the file $filename";
        exit;
    }
    fclose($handle);

    $handle = fopen($filename, "w");
    fwrite($handle, $somecontent1);
    fclose($handle);
    print "write \" $somecontent1 \" to file $filename successfully.";
} else {
    print "file $filename can't be writed.";
}
?>
