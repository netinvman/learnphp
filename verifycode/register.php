<html>
<head>
<meta charset='utf-8'>
<title>注册用户</title>
</head>
<body>
<form action='check.php' method='post'>
用户名:<input type='text' name='username'>
<br>
密码:<input type='password' name='password'>
<br>
校验码:<input type='text' name='vcode'> <img src='verifycode.php'>
<br>
<input type='submit' value='提交'>
<input type='reset' value='重置'>
</form>
</body>
</html>
