
<div class=" col-sm-11 ">                                              <!--for paging-->
	<div class="container">                                     
		<div >  
			<div class="center" style="margin-top:10%;" >
				<div class="pagination">
					<a href="#">&laquo;</a>

					<?php 
					

					for($i=0;$i<$nopage;$i++)
					{
						echo "<a href='educat.php?page={$i}'>{$i}</a>";
					}
					?>

					
					<a href="#">&raquo;</a>
				</div>
			</div>
		</div>
	</div>                                                            
</div>                           