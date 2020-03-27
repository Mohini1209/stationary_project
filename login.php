<html>
<body>
<form>
<table border="1" width="50" align="center">
<h1 align="center">Login Here!</h1>
<tr><td>username</td><td><input name="username" type="password" value=""required></td></tr>
<tr><td>password</td><td><input name="password" type="password" value=""required></td></tr>
<tr><td colspan=2 align="center"><input type="submit" value="submit" name="submit"></td></tr></table></form>
<body>
</html>
<?php
if(isset($_GET['submit'])==TRUE)
{

mysql_connect("localhost","root","");
mysql_select_db('stationery');
$username=$_GET['username'];
$password=$_GET['password'];
$qry=mysql_query("select * from login where username='$_GET[username]' && password='$_GET[password]'");
$count=mysql_num_rows($qry);
if($count>0)
{
session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;
header("location:category.php");
}
else
{

header("location:index.php");
}
?>
