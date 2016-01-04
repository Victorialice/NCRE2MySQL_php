<?php
require_once"common.php";
$user_name=trim($_POST['user_name']);
$user_password=trim($_POST['user_password']);
$user_sex=trim($_POST['user_sex']);
$user_age=trim($_POST['user_age']);
$user_dept=trim($_POST['user_dept']);
$user_group=trim($_POST['user_group']);
$sql="INSERT INTO users(user_id,user_name,user_password,user_sex,user_age,user_dept,user_group)";
$sql=$sql."
  VALUES(NULL,'".$user_name."','".$user_password."','".$user_sex."','".$user_age."','".$user_dept."','".$user_group."')";
if(mysql_query($sql,$con))
  echo"add user successfully!<br>";
else
  echo"fail to add user!<br>";
?>
