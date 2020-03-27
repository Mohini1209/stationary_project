<?php
mysql_connect("localhost","root","");
mysql_select_db('stationery');
$sub_cat_name=$_GET['sub_cat_name'];
$category_name=$_GET['category_name'];
$qry=mysql_query("insert into sub_category(category_name,sub_cat_name) values('$category_name','$sub_cat_name')");
if($qry==true)
{
header("location:product_details.php");
}
else
{
echo"error";
}
?>
