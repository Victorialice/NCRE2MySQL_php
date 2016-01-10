<?php
$con=mysql_connect("localhost:3306","root","");
if(mysql_errno())
{
  echo"fail to connect database serve<br>";
  die();
  }
mysql_select_db("blog_development_20160109",$con);
if(mysql_errno())
{
  echo"fail to select database!<br>";
    die();
}
?>
<?php
  $sql="DELETE  FROM posts WHERE post_id=$_GET[id]";
  //echo $sql;
  $result=mysql_query($sql);
  //echo $result;
   if($result)
   { 
     header("Location:posts.php");
   }
?>


