<?php
session_start();

// get the datas from POST and session
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$vcode = htmlspecialchars($_POST['vcode']);
$sessionVcode = $_SESSION['vcode'];

if ($vcode == $sessionVcode) {
    echo "register successfully!";
} else {
    echo "<script>alert('验证码输入错误，单击确定返回！');</script>";
    echo "<script>location='register.php'</script>";
}
?>
