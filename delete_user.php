<?php require_once "common.php";?>
<html>
<head><title>delete user</title>
</head>
<body>
<a href="/asdfasdf" id="result_logo" onmousedown="return c({'fm':'tab','tab':'logo'})">asdddddddddddddddddd</a>
<?php
$user_id=trim($_GET['user_id']);
$sql="DELETE FROM users WHERE user_id=";
$sql=$sql.$user_id;
if(mysql_query($sql,$con))
  echo"delete user successfully!<br>";
else
  echo"fail to delete user!<br>";
?>
</body>
</html>


