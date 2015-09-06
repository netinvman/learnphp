<?php
$name = "123";
if (empty($name)) {
    die("name can't be empty!");
} elseif ((strlen($name) < 5)|| (strlen($name) > 50)) {
    die("name 's length must be betwen 5 and 15.");
    }
else {
    echo $name;
}
?>
