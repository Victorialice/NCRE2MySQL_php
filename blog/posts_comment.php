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
//$id=$_POST['comment']['id'];
$commenter=$_POST['comment']['commenter'];
$body=$_POST['comment']['body'];
$post_id=$_POST['id'];
$sql="INSERT INTO comments(commenter,body,post_id,created_at,updated_at) 
  VALUES('$commenter','$body','$post_id',NOW(),NOW())";
//echo $sql;
$result=mysql_query($sql);
//echo $result;
if($result)
{
  header("Location:posts_show.php?id=$post_id");
}
?>
