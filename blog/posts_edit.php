<!DOCTYPE html>
<!-- saved from url=(0034)http://localhost:3000/posts/1/edit -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Blog</title>
</head>
<body style="background: #EEEEEE;">

<h1>Editing post</h1>
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
  $sql="SELECT * FROM posts WHERE id= $_GET[id]";
  $result=mysql_query($sql);
  $rows=mysql_fetch_array($result);
?>

<form accept-charset="UTF-8" action="posts_update.php" class="edit_post" id="edit_post_1" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="9xuwyVq6WHbPSVXfYCPdQqemsgtIpezgD/sjD9+uunw="></div>

  <div class="field">
    <label for="post_name">ID</label><br>
    <input id="post_name" name="post[id]" size="30" type="text" value="<?php echo $_GET['id'] ?>">
  </div>

  <div class="field">
    <label for="post_name">Name</label><br>
    <input id="post_name" name="post[name]" size="30" type="text" value="<?php echo $rows['name'];?>">
  </div>
  <div class="field">
    <label for="post_title">Title</label><br>
    <input id="post_title" name="post[title]" size="30" type="text" value="<?php echo $rows['title'];?> ">
  </div>
  <div class="field">
    <label for="post_content">Content</label><br>
    <textarea cols="40" id="post_content" name="post[content]" rows="20"><?php echo $rows['content']?></textarea>
  </div>
  <div class="actions">
    <input name="commit" type="submit" value="Update Post">
  </div>
</form>

<a href="posts.php">Show</a> |
<a href="posts_show.php">Back</a>




</body></html>
