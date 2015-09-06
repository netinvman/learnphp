<?php
$password = "forway";
$cpassword = "forway";
echo 'strlen($password): ' . strlen($password);
echo "<br>";
echo 'strlen($cpassword): ' . strlen($cpassword);
echo "<br>";
if (empty($password) || empty($cpassword)) {
    die("password can't be empty!");
} elseif ((strlen($password) < 5) || (strlen($password) > 15)) {
    die("password must be between 5 and 15.");
} elseif (!(strlen($password) == strlen($cpassword))) {
    die("passwords do not mach!");
} elseif (!($password === $cpassword)) {
    die("passwords is not matched!");
} else {
    for ($i = 0; $i < strlen($password); $i++) {
        echo "*";
    }
}
?>
