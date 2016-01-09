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
$id=$_POST['post']['id'];
$name=$_POST['post']['name'];
$content=$_POST['post']['content'];
$sql="SELECT * from posts where id=$id";
$sql2="UPDATE posts SET id='$id', name='$name',title='$title',content='$content',created_at=NOW(),updated_at=NOW() WHERE id='$id'";
$result=mysql_query($sql2);
  if($result){
 
     header("Location: posts.php");
   }
?>
