
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
mysql_select_db('stationery');
?>
<form action="insert_sub_cat.php" method="get">
<table border="5" align="center">
<h1 align="center">Add Sub category</h1>
<br/>
<tr>
<td><h4><b>Select Category</h4></b></td>
<td>
 <select name="category_name">
 <option><h4><b>category</h4></b></option>
 <?php
 $qry=mysql_query("select * from category");
 while($data=mysql_fetch_array($qry))
 {
 ?>
 <option><?php echo $data['category_name']?></option>
 <?php
 }
?>
</select>
</td>
</tr>
<tr>
<td><h4><b>Subcategory</h4></b></td><td><input type="text" name="sub_cat_name"></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" value="ADD"></td>
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

