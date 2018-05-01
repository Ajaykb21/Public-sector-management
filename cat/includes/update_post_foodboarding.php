<table class="table table-bordered table-hover">
                            <thead>
                                <tr> 
									                                
                                    <th>Resturant Name</th>
									<th>Resturant Image</th>
									<th>Resturant Rating</th>
									<th>Boarding Facilities</th>
									<th>Boarding Price</th>
									<th>More Info</th>
									
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM foods  INNER JOIN boardings ON foods.f_id = boardings.f_id  GROUP BY foods.f_id";
                                $rows = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_assoc($rows))
                                {
									$f_name=$row['f_name'];
									$fid=$row['f_id'];
									$boid=$row['bo_id'];
									$f_img=$row['f_img'];
									$h_add=$row['f_add'];
									$f_contact=$row['f_contact'];
									$f_rate=$row['f_rate'];
									$f_dist=$row['f_dist'];
									$f_web=$row['f_web'];
									$f_web=$row['f_web'];
									$bo_fac=$row['bo_fac'];
									$bo_price=$row['bo_price'];
									
									$bool='d';
                                    

									echo "<tr>";                         
                                    echo "<td>{$f_name}</td>";
									echo "<td><img width=80 height=50 src='../images/$f_img'></td>";
									echo "<td>{$f_rate}</td>";
									echo "<td>{$bo_fac}</td>";
									echo "<td>{$bo_price}</td>";
                                    echo "<td>{$f_web}</td>";
									
									echo "<td><a href='posts.php?source=update_post_foodboarding&fid={$fid}&boid={$boid}&del={$bool}'>Delete</a></td>";

                                    echo "<td><a href='posts.php?source=edit_post_fb&fid={$fid}&boid={$boid}'>Update</a></td>";
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
		 $hid=$_GET['hid'];
		 $did=$_GET['did'];
		 $ddid=$_GET['doid'];
		 $sql1 = "DELETE FROM healthcare where h_id='$hid'";
		 $sql2="DELETE FROM  departments where dept_id='$did'"; 
		 $sql3="DELETE FROM  doctors where doc_id='$ddid'";
		 $res1=mysqli_query($connection,$sql1);
		 $res2=mysqli_query($connection,$sql2);
		 $res3=mysqli_query($connection,$sql3);
		 if($res1&&$res2&&$res3)
		 {
			 echo "<h1>deletion successful</h1>";
		 }
	 
 }

?>

