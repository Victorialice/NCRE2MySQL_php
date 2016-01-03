<?php
$con=mysql_connect("localhost:3306","root","")
or die("fail to connect mysql database!<br>");
mysql_select_db("mysql_test1",$con)or die("fail to select database!<br>");
mysql_query("set names 'gbk'");
$sql="DELETE FROM customers";
$sql=$sql." WHERE cust_name='zhuwenqian'";
echo "<br> ".$sql;
echo "<br>";
if (mysql_query($sql,$con))
  echo"delete the customer successfully! <br>";
else
  echo"fail to delete the customer!<br>";
?>

