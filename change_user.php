<?php require_once"common.php";?>
<html>
<head><title>update user</title></head>
<body>
<h3>update user</h3>
<form id="add_user" name="add_user" method="post"action="update_user.php? user_id=<?php echo trim($_GET['user_id']);?>">
user name:<input type="text" name="user_name"/><br/>
user password:<input type="text" name="user_password"/><br/>
user sex:<input type="text" name="user_sex"/><br/>
user age:<input type="text" name="user_age"/><br/>
department:<select name="user_dept">
<option value=0>please choose department</option>
<?php
$sql="select * from dept";
$result=mysql_query($sql,$con);
while($rows=mysql_fetch_row($result)){
  echo"<option value=".$rows[0].">".$rows[1]."</option>";
}
?>
</select><br/>
usergroup name:<select name="user_group">
<option value=o>please choose user group</option>
<?php
$sql="select * from usergroup";
$result=mysql_query($sql,$con);
while($rows=mysql_fetch_row($result)){
  echo"<option value=".$rows[0].">".$rows[1]."</option>";
}
?>
</select><br/>
<br/>
<input type="submit" value="update user data"/>
</form>
</body>
</html>
