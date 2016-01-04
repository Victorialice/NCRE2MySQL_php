<?php
$con=mysql_connect("localhost:3306","root","")
or die("fail to connect mysql database!<br>");
mysql_select_db("db_user",$con) or die("fail to select database!<br>");
mysql_query("set names 'gbk'");
?>
