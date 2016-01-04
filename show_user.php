<?php require_once"common.php";?>
<html>
<head><title>show user</title>
</head>
<body>
<h3>show user</h3>
<form id="show_user"name="show_user"method="post"action="select_user.php">
user name:<input type="text" name="show_user_name"/><br/>
user department:<select name="show_user_dept">
<option value=0>all department</option>
<?php
$sql="select * from dept";
$result=mysql_query($sql,$con);
while($rows=mysql_fetch_row($result)){
  echo"<option value=".$rows[0].">".$rows[1]."</option>";
}
?>
</select><br/>
<input type="submit" value="show"/>
</form>
</body>
</html>

