<?php
$con=mysql_connect("localhost:3306","root","")
or die("fail to connect mysql database!<br>");
mysql_select_db("mysql_test1",$con)or die("fail to select database!<br>");
mysql_query("set names 'gbk'");
$sql="SELECT cust_name FROM customers";
$sql=$sql." WHERE cust_id=908";
echo $sql;
echo"<br>";
$result=mysql_query($sql,$con);
  if($result)
  {
    echo"query customer successfully!<br>";
    $array=mysql_fetch_array($result,MYSQL_NUM);
    if($array)
    {
      echo"read the data of the customer! <br>";
      echo"the name of the customers you want to query is:".$array[0];
    }
    else echo"fail to read the data of the customer!<br>";
  }     
  else
    echo"fail to query customer!<br>";
?>
