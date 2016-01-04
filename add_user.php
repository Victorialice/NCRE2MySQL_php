<?php require_once "common.php";?>
<html>
<head><title>add user</title>
</head>
<body>
<h3>add user</h3>
<form id="add_user" name="add_user" method="post" action="insert_user.php">
user name:<input type="text"name="user_name"/><br/>
user password:<input type="text"name="user_password"/><br/>
user sex:<input type="text"name="user_sex"/><br/>
user age:<input type="text"name="user_age"/><br/>
department:<select name="user_dept">
<?php
$sql="select * from dept";
$result=mysql_query($sql,$con);
while($rows=mysql_fetch_row($result)){
  echo"<option value=".$rows[0].">".$rows[1]."</option>";
}
?>
</select><br/>
usergroup name:<select name="user_group">
<?php
$sql="select * from usergroup";
$result=mysql_query($sql,$con);
while($rows=mysql_fetch_row($result)){
  echo"<option value=".$rows[0].">".$rows[1]."</option>";
}
?>
</select><br/>
<br/>
<input type="submit" value="add"/>
</form>
</body>
</html>
