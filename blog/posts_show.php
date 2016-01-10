<!DOCTYPE html>
<!-- saved from url=(0029)http://localhost:3000/posts/1 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Blog</title>
<style type="text/css">
  #comment_body{
   width: 800px;
  } 
</style>
</head>
<body style="background: #EEEEEE;">

<p id="notice"></p>
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
  $sql="SELECT * FROM posts WHERE id=$_GET[id]";
  $result=mysql_query($sql);
  $rows=mysql_fetch_array($result);
?>


<p>
<b>Name:</b>
<?php echo $rows['name'];?>
</p>

<p>
<b>Title:</b>
<?php echo $rows['title'];?>
</p>

<p>
<b>Content:</b>
<?php echo $rows['content'];?>
</p>
<h2>Comments</h2>
<div class="comment" style="border: 1px solid #ccc;width:400px;margin:5px;padding:5px">
<?php
  $sql="SELECT * FROM comments WHERE post_id= $_GET[id]";
  $result=mysql_query($sql);

  $num_rows = mysql_num_rows($result);
  if($num_rows)
  {

  while($rows=mysql_fetch_array($result))
        {
?>
<div class="comment" style="border: 1px solid #ccc;width:400px;margin:5px;padding:5px">
<p>
<b>Commenter:</b>
<?php echo $rows['commenter']?>
</p>

<p>
<b>Comment:</b>
<?php echo $rows['body']?>
</p>

<p>
<a href="comment_destory.php?id=<?php echo $rows[id]?>">Destroy Comment</a>
</p>
</div>
<?php 
        }//结束循环
  }
  else{
        echo "<p><strong>没有记录</strong></p>";
  }
?>
<h2>Add a comment:</h2>

<form accept-charset="UTF-8" action="posts_comment.php" class="new_comment" id="new_comment" method="post"><div style="margin:0;padding:0;display:inline">
<input name="utf8" type="hidden" value="✓">
<input name="authenticity_token" type="hidden" value="9xuwyVq6WHbPSVXfYCPdQqemsgtIpezgD/sjD9+uunw="></div>

<?php $id=$_GET[id]; ?>
 <input name="id" type="hidden" value="<? echo $id; ?>">

  <div class="field">
  <label for="comment_commenter">Commenter</label><br>
  <input id="comment_commenter" name="comment[commenter]" size="30" type="text">
</div>
<div class="field">
  <label for="comment_body">Body</label><br>
  <textarea cols="40" id="comment_body" name="comment[body]" rows="20"></textarea>
</div>
<div class="actions">
  <input name="commit" type="submit" value="Create Comment" >
</div>
</form>

<br>

<a href="posts_edit.php">Edit Post</a> |
<a href="posts.php">Back to Posts</a> |





