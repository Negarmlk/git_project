<?php
$db=mysql_connect('localhost','root','');
mysqli_select_db($db,'db1');
mysqli_query($db,"SET NAMES 'UTF8'");
// fix bug
// fix
$username=htmlentities(addslashes($_POST['username'];),ENT_QUOTES,'UTF8');
$password=htmlentities(addslashes($_POST['password'];),ENT_QUOTES,'UTF8');
$q="SELECT * FROM users WHERE username = '$username' 
            AND password ='$password'";
$r=mysqli_query($db,$q);
$user=mysqli_fetch_assoc($r);
if (isset($user['id']))
{
    print "login ok";
}
else
{
    print "login fail";
}
?>	
			