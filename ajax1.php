<option>select product</option>
<?php
include 'config.php';
$sub_cat_name=$_POST['sub_cat_name'];
$category_name=$_POST['category_name'];

$qry=mysql_query("select * from add_product where sub_cat_name='$sub_cat_name'&&category_name='$category_name'");
while($data=mysql_fetch_array($qry))
{
?>
<option><?php echo $data['product_name']?></option>
<?php
}
?>