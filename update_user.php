<?php
require_once"common.php";
$user_id=trim($_GET['user_id']);
$user_name=trim($_POST['user_name']);
$user_password=trim($_POST['user_password']);
$user_sex=trim($_POST['user_sex']);
$user_age=trim($_POST['user_age']);
$user_dept=trim($_POST['user_dept']);
$user_group=trim($_POST['user_group']);
$sql="UPDATE users SET user_name='".$user_name."',user_password='".$user_password."',user_sex='".$user_sex."',user_age=$user_age,user_dept=$user_dept,user_group=$user_group WHERE user_id=";
  $sql=$sql.$user_id;
if(mysql_query($sql,$con))
  echo"update user successfully!<br>";
else
  echo"fail to update user!<br>";
?>
