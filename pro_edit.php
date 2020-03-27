<?php
include 'header.php';
?>
<div class="agileinfo-grap">
<div class="grid-form1" style="background-image:url(images/b1.jpg)">


<html>
<head>
<script>
function tot()
{
var p1=document.getElementById("price").value;
var q1=document.getElementById("qty").value;
var total=(+p1)*(+q1);
//alert(total);
document.getElementById("result").value=total;
}
</script>
</head>

<?php
$product_id=$_REQUEST['product_id'];
mysql_connect("localhost","root","");
mysql_select_db('stationery');
$qry=mysql_query("select * from add_product where product_id='$product_id'");
$data=mysql_fetch_array($qry);
?>
<form action="pro_update.php" method="get">
<table border="10" width="300" align="center">
<h1 align="center">Update Product Details</h1>
<tr>
<td>product_id</td><td><input name="product_id" readonly value="<?php echo $data['product_id']?>"></td>
</tr>
<tr>
<td>category_name</td><td><input name="category_name" value="<?php echo $data['category_name']?>"></td>
</tr>
<tr>
<td>sub_cat_name</td><td><input name="sub_cat_name" value="<?php echo $data['sub_cat_name']?>"></td>
</tr>
<tr>
<td>product_name</td><td><input name="product_name" value="<?php echo $data['product_name']?>"></td>
</tr>
<tr>
<td>price</td><td><input name="price" readonly value="<?php echo $data['price']?>" id="price"></td>
</tr>
<tr>
<td>quantity</td><td><input name="quantity" value="<?php echo $data['quantity']?>" id="qty" onkeyup="tot()"></td>
</tr>
<tr>
<td>total</td><td><input name="total" value="<?php echo $data['total']?>" id="result"></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" value="update"></td>
</tr>
</table>
</form>
</html>


</div></div>
	
						<div class="clearfix"></div>
                   
	<!--//photoday-section-->	
	<!--w3-agileits-pane-->	
	<div class="w3-agileits-pane">
		
		  <div class="clearfix"></div>
	  </div>
	  <!--//w3-agileits-pane-->	
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->



<?php
include 'footer.php';
?>
