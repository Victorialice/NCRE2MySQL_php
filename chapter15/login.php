<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<form action="logincheck.php" method="post">
	user name：<input type="text" name="user_name" />
	 <br />
	 密码：<input type="password" name="password" />
	 <br />
	 <input type="submit" name="submit" value="Login" />
	 &nbsp;&nbsp;&nbsp;&nbsp;
<a href="../add_user.php">注册</a>
<h2 style="color:blue"><a href="index.html">Go to index</a></h2>
</form>
<?php
//注销登录
if($_GET['action'] == "logout"){
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	exit;
}
?>
</body>
</html>
