<!DOCTYPE html>
<!-- saved from url=(0031)http://localhost:3000/posts/new -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Blog</title>
</head>
<body style="background: #EEEEEE;">

<h1>New post</h1>

<form accept-charset="UTF-8" action="posts_create.php" class="new_post" id="new_post" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="9xuwyVq6WHbPSVXfYCPdQqemsgtIpezgD/sjD9+uunw="></div>

  <div class="field">
    <label for="post_name">Name</label><br>
    <input id="post_name" name="post[name]" size="30" type="text">
  </div>
  <div class="field">
    <label for="post_title">Title</label><br>
    <input id="post_title" name="post[title]" size="30" type="text">
  </div>
  <div class="field">
    <label for="post_content">Content</label><br>
    <textarea cols="40" id="post_content" name="post[content]" rows="20"></textarea>
  </div>
  <div class="actions">
    <input name="commit" type="submit" value="Create Post">
  </div>
</form>

<a href="posts.php">Back</a>




</body></html>
