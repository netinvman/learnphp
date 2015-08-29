<?php
echo "use space to separate the string: <br>";
$pizza = "a1 a2 a3 a4 a5 a6";
// use space to separatea the string
$pieces = explode(" ", $pizza);
echo $pieces[0] . "<br>";
echo $pieces[1] . "<br>";

// use list
echo "save the variables to list:<br>";
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user . "<br>";
echo $pass . "<br>";

echo "limit the separated string:<br>";
$limit = "a;b;c;d;e;f;";
$back = explode(";", $limit, 3);
print_r($back);
?>
