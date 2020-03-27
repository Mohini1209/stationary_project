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


<?php
mysql_connect("localhost","root","");
mysql_select_db("stationery");
$qry=mysql_query("select * from sale ")or die(mysql_error());
?>
<h1 align="center">List of sold products</h1>
<table border="5" align="center" height="260px">
<tr><td><h4><b>Category Name</b></h4></td><td><h4><b>Subcategory Name</b></h4></td><td><h4><b>Product Name</b></h4></td><td><h4><b>Price</b></h4></td><td><h4><b>Quantity</b></h4></td>
<td><h4><b>Total</b></h4></td></tr>
<?php
while($data=mysql_fetch_array($qry)) 
{

$category_name=$data['category_name'];
$sub_cat_name=$data['sub_cat_name'];
$product_name=$data['product_name'];
$price=$data['price'];
$sale_quantity=$data['sale_quantity'];
$stotal=$data['stotal'];
?>
<tr>
<td><?php echo $category_name?></td>
<td><?php echo $sub_cat_name?></td>
<td><?php echo $product_name?></td>
<td><?php echo $price?></td>
<td><?php echo $sale_quantity?></td>
<td><?php echo $stotal?></td>
<?php
}
?>
</tr>
<tr>
<td colspan="10" align="center">
<a href="list.php"><button>Available Stock</button></a>
</td>
</tr>
</table>



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
