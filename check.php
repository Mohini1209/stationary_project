<?php
include 'config.php';
$username=$_GET['username'];
$password=$_GET['password'];
$qry=mysql_query("select * from login where username='$_GET[username]' && password='$_GET[password]'");
$count=mysql_num_rows($qry);
echo $count;
if($count>0)
{
session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;
header("location:home.php");
}
else
{
 header("location:index.php?msg=failed");

}

?>