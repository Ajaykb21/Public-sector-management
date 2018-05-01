<table class="table table-bordered table-hover">
                            <thead>
                                <tr> 
									                                
                                    <th>Tourist Place Name</th>
									<th>Tourist Place Image</th>
									<th>Tourist Place Distance</th>
									<th>Tourist Place Rating</th>
									<th>Tourist Place Time</th>
									
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM tourism";
                                $rows = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_assoc($rows))
                                {
									$to_name=$row['t_name'];
									$toid=$row['t_id'];
									$to_img=$row['t_img'];
									$to_add=$row['t_add'];
									$to_dist=$row['t_dist'];
									$to_rate=$row['t_rate'];
									$to_about=$row['t_about'];
									$to_time=$row['t_time'];
									
									$bool='d';
                                    

									echo "<tr>";                         
                                    echo "<td>{$to_name}</td>";
									echo "<td><img width=80 height=50 src='../images/$to_img'></td>";
									echo "<td>{$to_dist}</td>";
									echo "<td>{$to_rate}</td>";
									echo "<td>{$to_time}</td>";
									echo "<td><a href='posts.php?source=update_post_tourism&toid={$toid}&del={$bool}'>Delete</a></td>";

                                    echo "<td><a href='posts.php?source=edit_post_to&toid={$toid}'>Update</a></td>";
                                    echo "</tr>";
                                }
                                 
                                 ?>
                            </tbody>
</table>

<?php 
 if(isset($_GET['del']))
 {
	 echo $_GET['del'];
	 
	
		$i=0;
		$j=0;
		 $toid=$_GET['toid'];
		
		 $sql1 = "DELETE FROM tourism where t_id='$toid'";
		
		 $res1=mysqli_query($connection,$sql1);
		
		 if($res1)
		 {
			 echo "<h1>deletion successful</h1>";
		 }
	 
 }

?>

