<?php
include 'sub_header.php';
?>
<div class="agileinfo-grap">
<div class="grid-form1" style="background-image:url(images/b1.jpg)">

<center>
<h2 id="forms-horizontal" align="center">Stationery Stock Management</h2>
<h3 id="forms-horizontal" align="center">Admin Login!</h3>
<form class="form-horizontal" action="check.php" method="get">
<!--<table border="1" width="50" align="center" >-->

<div class="form-group">

<label for="inputEmail3" class="col-sm-4 control-label hor-form"><b>Username</b></label>
    <div class="col-sm-5">
      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label hor-form"><b>Password</b></label>
    <div class="col-sm-5">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
      <button type="submit" class="btn btn-default">Login</button>
	  <br>
	  <br>
	<?php
	   if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
         echo ("<font color='red'>Incorrect Username/Password</font>");
        }
	?>
    </div>
	
 
	 </div>
</div>  
</form>
</center>


</div>


</div>
	
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



