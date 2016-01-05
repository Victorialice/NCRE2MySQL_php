<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['user_id'])){
	header("Location:login.php");
	exit();
}
//包含数据库连接文件
include('../common.php');
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_query = mysql_query("select user_sex, user_age from users where user_id = '$user_id' limit 1");
$row = mysql_fetch_array($user_query);
echo '<h2>用户信息：</h2>';
echo '<span style="color:red">用户ID</span>：',$user_id,'<br />';
echo '<br/>';
echo '<span style="color:blue">用户名</span>：',$user_name,'<br />';
echo '<br/>';
echo '<span style="color:green">用户 sex</span>：',$row[0],'<br />';
echo '<br/>';
echo '<span style="color:#c2f">用户 age</span>：',$row[1],'<br />';
echo '<br/>';
echo '<a href="login.php?action=logout">注销</a> 登录<br />';
?>
<h2 style="color:blue"><a href="index.html">Go to index</a></h2>
</body>
</html>
