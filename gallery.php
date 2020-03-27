<?php
include 'header.php';
?>

<div class="agileinfo-grap">
<div class="grid-form1"style="background-image:url(images/b1.jpg)">
<h1 align="center"><i>STATIONARY PRODUCTS</i></h1>
<script src="js/js.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/css.css" />


<div class="slider" id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"  ><!-- innermost wrapper element -->
		<img src="images/s3.jpg" alt="First" class="slide" align="middle" width="100" height="100"><!-- slides -->
		<img src="images/s5.jpg" alt="Second" class="slide"/>
		<img src="images/s2.jpg" alt="Third" class="slide"/>
		<img src="images/s6.jpg" alt="Fourth" class="slide"/>
		<img src="images/s7.jpg" alt="Fifth" class="slide"/>
		<img src="images/s8.jpg" alt="Sixth" class="slide"/>
	</div>



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



