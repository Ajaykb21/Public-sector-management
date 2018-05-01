<table class="table table-bordered table-hover">
                            <thead>
                                <tr> 
									                                
                                    <th>Health Name</th>
									<th>Health Image</th>
									<th>Health Address</th>
									<th>Health Contact</th>                                    
                                    <th>Department Name</th>                                   
                                    <th>Doctor Name</th>
                                    <th>Doctor Specialization</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM healthcare  INNER JOIN departments ON departments.h_id = healthcare.h_id INNER JOIN doctors ON doctors.dept_id=departments.dept_id GROUP BY healthcare.h_id";
                                $rows = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_assoc($rows))
                                {
									$h_name=$row['h_name'];
									$hid=$row['h_id'];
									$h_img=$row['h_img'];
									$h_add=$row['h_add'];
									$h_contact=$row['h_contact'];
									$dpname=$row['dept_name'];
									$docname=$row['doc_name'];
									$docsp=$row['doc_spec'];
                                    $did=$row['dept_id'];
									$doid=$row['doc_id'];
									$bool='d';
                                    

									echo "<tr>";                         
                                    echo "<td>{$h_name}</td>";
									echo "<td><img width=80 height=50 src='../images/$h_img'></td>";
									echo "<td>{$h_add}</td>";
									echo "<td>{$h_contact}</td>";
									echo "<td>{$dpname}</td>";
                                    echo "<td>{$docname}</td>";
									echo "<td>{$docsp}</td>";
									echo "<td><a href='posts.php?source=update_post_health&hid={$hid}&did={$did}&doid={$doid}&del={$bool}'>Delete</a></td>";

                                    echo "<td><a href='posts.php?source=edit_post_h&hid={$hid}&did={$did}&doid={$doid}'>Update</a></td>";
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

