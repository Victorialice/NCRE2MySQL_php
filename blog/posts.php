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

<table>
  <tbody><tr>
    <th>Name</th>
    <th>Title</th>
    <th>Content</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>

<?php 
$sql="select * from posts";
  $result = mysql_query($sql);
  //循环输出输出记录列表
  while($rows=mysql_fetch_array($result))
  { 
    echo "<tr><td>".$rows["name"]."</td>";
    echo "<td>".$rows["title"]."</td>";
    echo "<td>".$rows["content"]."</td>";
    echo "<td><a href='posts_show.php?id=$rows[id]'>Show</a></td>";
  }
?>
  <a href="posts_new.php">create a post</a>
