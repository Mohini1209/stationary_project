<?php
include 'config.php';
$category_name=$_REQUEST['category_name'];
$qry=mysql_query("select * from stock where category_name='$category_name'")or die(mysql_error());
$data=mysql_fetch_array($qry)or die(mysql_error());

?>
<form action="list.php">
<table border="10" width="200">
<tr>
<td>Product Name</td>
<td><input name="category_name" readonly value="<?php echo $data['category_name']?>"></td>
</tr>
<tr>
<td>Type of Product</td>
<td><input name="sub_cat_name" readonly value="<?php echo $data['sub_cat_name']?>"></td>
</tr>
<tr>
<td>Product's Comapany</td>
<td><input name="product_name" readonly value="<?php echo $data['product_name']?>"></td>
</tr>
<tr>
<td>Price</td>
<td><input name="price" readonly value="<?php echo $data['price']?>"></td>
</tr>
<tr>
<td>Quantity</td>
<td><input name="quantity" readonly value="<?php echo $data['quantity']?>"></td>
</tr>
<tr>
<td>Total</td>
<td><input name="total" readonly value="<?php echo $data['total']?>"></td>
</tr>
</table>
</form>
