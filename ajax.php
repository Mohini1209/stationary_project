<option>select sub category</option>
<?php
include 'config.php';
$category_name=$_POST['category_name'];

$qry=mysql_query("select * from sub_category where category_name='$category_name'");
while($data=mysql_fetch_array($qry))
{
?>
<option><?php echo $data['sub_cat_name']?></option>
<?php
}
?>