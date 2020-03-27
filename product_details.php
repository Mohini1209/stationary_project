
<?php
session_start();
if(!isset($_SESSION['username'])){
        //session is not set
        header('Location: http://localhost/stationary_project/project/index.php');
    }
include 'header.php';
?>
<div class="agileinfo-grap">
<div class="grid-form1" style="background-image:url(images/b1.jpg)">


<html>
<script src="js/lib.js" type="text/javascript"></script>
<script src="js/my_js.js" type="text/javascript"></script>
<script src="js/my_js1.js" type="text/javascript"></script>
<form action="insert_product.php" method="get">
<table border="2" align="center">
<h1 align="center">Add Product</h1>
<br/>
<tr>
<td><h4><b>Category Name</h4></b></td>
<td>
<select name="category_name" onchange="cat_subcat()" id="category_name" value=""required>
<option>select category</option>
<?php
include 'config.php';
$qry=mysql_query("select * from category");
while($data=mysql_fetch_array($qry))
{
?>
<option><?php echo $data['category_name']?></option>
<?php
}
?>
</td>
</tr>
<tr>
<td><h4><b>Subcategory</h4></b></td>
<td>
</select>
<select name="sub_cat_name" id="sub_cat_name">
<option>sub category</option>
</select>
</td>
</tr>
<tr>
<td><h4><b>Product</h4></b></td>
<td><input name="product_name" id="product_name" placeholder="product">
</select>
</td>
</tr>
<tr>
<td><h4><b>Quantity</h4></b></td>
<td><input name="quantity" id="quantity" placeholder="quantity"></td></tr>
<tr><td><h4><b>Price</h4></b></td><td><input name="price" id="price" onkeyup="multiply()" placeholder="price"></td></tr>
<tr><td><h4><b>Total</h4></b></td><td><input name="total" id="total" placeholder="total"></td></tr>
<script src="js/lib.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<tr><td colspan=2 align="center"><input type="submit" value="add product"></td></tr>
</html>
</tr>
</table>
</form>
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
