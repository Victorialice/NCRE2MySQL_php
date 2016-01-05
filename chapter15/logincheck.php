<?php
include('../common.php');

	if(isset($_POST["submit"]) && $_POST["submit"] == "Login")
	{
		$user_name = $_POST["user_name"];
		$psw = $_POST["password"];
		if($user_name == "" || $psw == "")
		{
			echo "<script>alert('请输入UserName或密码！'); history.go(-1);</script>";
		}
		else
		{
                        $sql = "select user_id,user_name from users where user_name = '$_POST[user_name]' and user_password = '$psw'";
			$result = mysql_query($sql);
			$num = mysql_num_rows($result);
			if($num)
			{
				$row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中 usernmae
				session_start(); 
				$_SESSION['user_id'] = $row[0];  
				$_SESSION['user_name'] = $row[1];  
				header("Location:my.php");
				echo $row[0];
			}
			else
			{
				echo "<script>alert('用户名或密码不正确！');</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

?>
