<?
define('DB_USER',   "root");
define('DB_PASSWORD',   "");
define('DB_HOST',  "php_bbs");
define('ADMIN_USER',"admin");
$invalidchars=array(
  "'",
  ";",
  "=",
  "\\",
  "/"
);
$badwords=array
  ("fuck","shit","wanker","cunt","gay",
  "nigger","bastard","tosser","dipshit",
  "homosexual","nigga","gaylord","retard",
  "asshole","slut","prick","cock","pussy",
);
function CheckEmail($email)
{
  $check="/^[0-9a-zA-Z_-]+@[0-9a-zA-Z_-]+(\.[0-9a-zA-Z_-]+){0,3}$/"
    if(preg_match($check.$email)){
      return true;
    }
    else{
      return false;
    }
}
function ExitMessage($message,$url='')
{ 
  echo'<p class="message">';
  echo$message;
  echo'<br>';
  if($url){
    echo'<a href="'.$url.'">goback</a>';
  }else{
    echo'<a href="#" onclick="window.history.go(-1);">goback</a>';
  }
  echo'</p>';
  exit;
}
function ClearSpecialChars($str)
{ 
  global $invalidchars;
  $str=trim($str);
  $str=str_replace($invalidchars,"".$str);
  return $str;
}
function FilterBadwords($str)
{
  global $badwords;
  $replacement=array("[ensored]","***");
  for($i=0;$i<sizeof($badwords);$i++)
  {
    srand((double)microtime()*1000000);
    $rand_key=(rand()%sizeof($replacement));
    $str=eregi_replace($badwors[$i],$replacements[$rand_kry],$str);
  }
  return $str;
}
session_start();
$db=mysql_pconnect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$db)
{dei('<b>fail to connect database!</b>');
exit;
}
mysql_select_db(DB_NAME);
?>

