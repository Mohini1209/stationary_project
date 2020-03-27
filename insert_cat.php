<?php
include 'config.php';
$category_name=$_GET['category_name'];
$qry=mysql_query("insert into category(category_name)values('$category_name')");
if($qry==true)
{
header("location:sub_category.php");
}
else
{
echo"error";
}
?>