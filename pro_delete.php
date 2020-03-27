<?php
$product_id=$_REQUEST['product_id'];
mysql_connect("localhost","root","");
mysql_select_db('stationery');
$qry=mysql_query("delete from add_product where product_id='$product_id'");
if($qry==true)
{
header("location:list.php");
}
else
{
echo "error";
}
?>