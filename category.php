


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
<form action="insert_cat.php" method="get">
<table border="2" align="center">
<h1 align="center">Add Category</h1>
<tr>
<td><h4><b>Category Name</b></h4></td>
<td><input type="text" name="category_name"value=""required></td>
</tr>
<br/>
<tr>
<td colspan=2 align="center"><input type="submit" value="ADD"></td>
</tr>
</table>
</form>
</html>
<br/><br/>




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
