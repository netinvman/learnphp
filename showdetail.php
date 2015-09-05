<?php
echo "你的账号是： " . $_POST["login"];
echo "<br>";
echo "你的姓名是： " . $_POST["yourname"];
echo "<br>";
echo "你的密码是： " . $_POST["passwd"];
echo "<br>";
echo "你的密码查询问题是： " . $_POST["question"];
echo "<br>";
echo "你的查询密码答案是： " . $_POST["question2"];
echo "<br>";
echo "你的出生日期是： " . $_POST["byear"] . "年" . $_POST["bmonth"] . "月" . $_POST["bday"] . "日";
echo "<br>";
echo "你的性别是： " . $_POST["gender"];
echo "<br>";
echo "你的爱好是：<br>";
foreach ($_POST["hobby"] as $hobby) {
	echo $hobby . "<br>";
}
?>