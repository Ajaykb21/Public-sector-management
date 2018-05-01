<?php 
  include "includes/connect.php";
?>
<html>
	<?php 
 		include "includes/tourheadcat.php";
	?>
   
	<body>
		<div>                                                <!--div of whole page-->

														<!-- including navigation bar -->
			<?php 
		  	include "includes/navbar.php";
			?>
			
				<!-- including background image and heading -->
			<?php 
		  	include "includes/tourbgimg.php";
			?>
						 
			<div>   				                                                          
				<?php 
					include "includes/tourfilter.php";
				?>
			  		   
				<div class="col-sm-7 catdisp" >  	                                              
	      			<?php	
	        			include "includes/toureledisp.php";	
	      			?>               
      			</div>

			</div>  
				 
  
						
			      <!-- including scrolling effect -->
		  	<?php 
			  //	include "includes/posts.php";
		  	?>			
			    <!-- including footer section -->
		  	<?php 
			  	include "includes/tourpaging.php";
		  	?>

		</div>    <!--div of whole page ends here-->
	</body>	
</html>
<!--thank you-->