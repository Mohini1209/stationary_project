<?php
include 'config.php';
$category_name=$_GET['category_name'];
$sub_cat_name=$_GET['sub_cat_name'];
$product_name=$_GET['product_name'];
$sale_quantity=$_GET['sale_quantity'];
$price=$_GET['price'];
$stotal=$_GET['stotal'];
$qry=mysql_query("select * from add_product where category_name='$category_name'&&sub_cat_name='$sub_cat_name'&&product_name='$product_name'");
$data=mysql_fetch_array($qry);
$final_quantity=$data['quantity']-$sale_quantity;
$final_total=$data['total']-$stotal;
$qry=mysql_query("update add_product set quantity='$final_quantity' where category_name='$category_name'&&sub_cat_name='$sub_cat_name'&&product_name='$product_name'");
$qry=mysql_query("update add_product set total='$final_total' where category_name='$category_name'&&sub_cat_name='$sub_cat_name'&&product_name='$product_name'");

$qry=mysql_query("insert into sale(category_name,sub_cat_name,product_name,sale_quantity,price,stotal)
 values('$category_name','$sub_cat_name','$product_name','$sale_quantity','$price','$stotal')")or die(mysql_error());
if($qry==true)
{
header("location:sale_list.php");
}
else
{
echo"error";
}
?>
