<?php
 $con = mysql_connect("localhost:3306", "root", "");
if(!$con)
{

  echo "fail to connect!<br>";
  echo "error number:".myysql.error()."<br>";
  echo "error message:".mysql_errror()."<br>";
  die(); //quit the execution
}
echo "connect successfully!<br>";
?>
