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
$qry=mysql_query("select * from add_product")or die(mysql_error());
?>

<table border="5" align="center">
<h1 align="center">List of Products</h1>
<br/>
<tr><td><h4><b>Product id</h4></b></td><td><h4><b>Category Name</h4></b></td><td><h4><b>Subcategory Name</h4></b></td><td><h4><b>Product Name</h4></b></td>
<td><h4><b>Price</h4></b></td><td><h4><b>Quantity</h4></b></td><td><h4><b>Total</h4></b></td><td><h4><b>Action</h4></b></td></tr></b>
<?php
while($data=mysql_fetch_array($qry)) 
{
$product_id=$data['product_id'];
$category_name=$data['category_name'];
$sub_cat_name=$data['sub_cat_name'];
$product_name=$data['product_name'];
$price=$data['price'];
$quantity=$data['quantity'];
$total=$data['total'];
?>
<tr>
<td><?php echo $product_id?></td>
<td><?php echo $category_name?></td>
<td><?php echo $sub_cat_name?></td>
<td><?php echo $product_name?></td>
<td><?php echo $price?></td>
<td><?php echo $quantity?></td>
<td><?php echo $total?></td>
<td><a href="pro_delete.php?product_id=<?php echo $data['product_id']?>"><button>Delete</button></a>
<a href="pro_edit.php?product_id=<?php echo  $data['product_id']?>"><button>Edit</button></a></td>

<?php
}
?>
</tr>
</table>
<form action="search.php" method="post">
<table border="5" align="center">

<td><a href="search.php?category_name=<?php echo $data['category_name']?>"></a></td>
<br/>
<tr>
<td><h4><b>Select Category</h4></b></td>
<td>
 <select name="category_name">
 <option><h4><b>category</h4></b></option>
 <?php
 $qr=mysql_query("select * from category");
 while($dt=mysql_fetch_array($qr))
 {
 ?>
 <option><?php echo $dt['category_name']?></option>
 <?php
 }
?>

<input type="submit" value="search">
</select>
</td>
</tr>
</form>
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
