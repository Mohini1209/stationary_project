<?php
include 'config.php';
$product_name=$_POST['product_name'];
$sub_cat_name=$_POST['sub_cat_name'];
$category_name=$_POST['category_name'];
$qry=mysql_query("select * from add_product where product_name='$product_name' &&sub_cat_name='$sub_cat_name' &&category_name='$category_name'");
$data=mysql_fetch_array($qry);
echo $data['price'];
?>

