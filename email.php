<?php
$email = "hello 163.com";
if (empty($email)) {
    die("email address can't be empty.");
} elseif ((strlen($email) < 5) || (strlen($email) > 50)) {
    die("email address 's length must be between 5 and 50.");
} elseif (!ereg("@", $email)) {
    die("email address is not valid, please input it again!");
} else {
    echo $email;
}
?>
