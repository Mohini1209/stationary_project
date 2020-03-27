<?php
mysql_connect("localhost","root","");
mysql_select_db('stationery');
$product_id=$_GET['product_id'];
$category_name=$_GET['category_name'];
$sub_cat_name=$_GET['sub_cat_name'];
$product_name=$_GET['product_name'];
$price=$_GET['price'];
$quantity=$_GET['quantity'];
$total=$_GET['total'];
$qry=mysql_query("update add_product set category_name='$category_name',sub_cat_name='$sub_cat_name',product_name='$product_name',
price='$price',quantity='$quantity',total='$total' where product_id='$product_id'")or die(mysql_error());
if($qry==true)
{
header("location:list.php");
}
else
{
echo "error";
}
?>