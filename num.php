<?php
$con=mysql_connect("localhost:3306", "root", "") // it's equvialent to terminal command:  mysql -u root -p
or die("fail to connect mysql database!<br>");
mysql_select_db("mysql_test1", $con) or die("fail to choose database!<br>"); //it's equvialent to sql:  use mysql_test1
mysql_query("set names 'gbk'"); 
$sql="SELECT * FROM customers";
$sql=$sql." WHERE cust_sex='F'";
$result=mysql_query($sql,$con); // it's equvialent to sql: SELECT * FROM customers WHERE cust_sex='F';
if($result)
{
  echo "query successfully!<br>";
  $num=mysql_num_rows($result);
  echo "nihao, alice <br>";
  echo "the number of female customer in database mysql_test1 is: ".$num;
}
else
  echo "failed to query";
?>
