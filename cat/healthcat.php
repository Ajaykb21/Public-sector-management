<?php 
  include "includes/connect.php";
?>
<html>
	<?php 
 		include "includes/healthheadcat.php";
	?>
   
	<body>
		<div>                                                <!--div of whole page-->

														<!-- including navigation bar -->
			<?php 
		  	include "includes/navbar.php";
			?>
			
				<!-- including background image and heading -->
			<?php 
		  	include "includes/healthbgimg.php";
			?>
						 
			<div>   				                                                          
				<?php 
					include "includes/healthfilter.php";
				?>
			  		   
				<div class="col-sm-7 catdisp" >  	                                              
	      			<?php	
	        			include "includes/healtheledisp.php";	
	      			?>               
      			</div>

			</div>  
				 
  
						
			      <!-- including scrolling effect -->
		  	<?php 
			  //	include "includes/posts.php";
		  	?>			
			    <!-- including footer section -->
		  	<?php 
			  	include "includes/healthpaging.php";
		  	?>

		</div>    <!--div of whole page ends here-->
	</body>	
</html>
<!--thank you-->