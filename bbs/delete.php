<?php 
require('config.inc.php');
if (!$_SESSION['username']) {
	echo '<p>请先<a href="create_user.php">注册</a>，
		  或者<a href="logon_form.php">登录</a>或后进行操作。<br>&nbsp;</p>';
}
else
{
   $id=$_GET['id'];
   $username=$_SESSION['username'];
   $sql="SELECT name from forum_topic WHERE name='$username' and id=$id";
   echo $sql; //added for debug
   $result=mysql_query($sql);
   if(!$result)
       {ExitMessage("you don't have the authority to delete!");}
   else
      {$sql2="DELETE FROM forum_topic WHERE id=$id";
      $result2=mysql_query($sql2);
      $sql3="DELETE FROM forum_reply WHERE topic_id=$id";
       $result3=mysql_query($sql3);
    if($result2 AND $result3)
        { 
            header("Location: main_forum.php");
        }
    else{
            ExitMessage("fail to operate database!");
    }
  }
}
?>
