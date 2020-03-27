<?php
include 'config.php';
$category_name=$_GET['category_name'];
$sub_cat_name=$_GET['sub_cat_name'];
$product_name=$_GET['product_name'];
$quantity=$_GET['quantity'];
$price=$_GET['price'];
$total=$_GET['total'];
$qry=mysql_query("insert into add_product(category_name,sub_cat_name,product_name,quantity,price,total)
 values('$category_name','$sub_cat_name','$product_name','$quantity','$price','$total')")or die(mysql_error());
if($qry==true)
{
header("location:list.php");
}
else
{
echo"error";
}
?>
