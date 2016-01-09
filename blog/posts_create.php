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
//echo $_POST['post']['name'];
//echo $_POST['post']['title'];
//echo $_POST['post']['content'];
//echo $_POST['post']['id'];
   $id=$_POST['post']['id'];
   $name=$_POST['post']['name'];
   $title=$_POST['post']['title'];
   $content=$_POST['post']['content'];
   $sql="INSERT INTO posts(id,name,title,content,created_at,updated_at)
     VALUES('$id','$name','$title','$content',NOW(),NOW())";
   $result=mysql_query($sql);
   if($result)
   { 
     header("Location: posts.php");
   }
  ?>

