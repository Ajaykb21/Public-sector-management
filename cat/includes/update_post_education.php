<table class="table table-bordered table-hover">
                            <thead>
                                <tr> 
									                                
                                    <th>Education Name</th>
									<th>Education Image</th>
									<th>Education Address</th>
									<th>Education Contact</th>                                    
                                    <th>Course Name</th>                                   
                                    <th>Head of Institution</th>
                                    <th>Faculty Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM education  INNER JOIN courses ON education.e_id = courses.e_id INNER JOIN teachers ON teachers.c_id=courses.c_id AND teachers.e_id = education.e_id GROUP BY education.e_id";
                                $rows = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_assoc($rows))
                                {
									$e_name=$row['e_name'];
									$eid=$row['e_id'];
									$e_img=$row['e_img'];
									$e_add=$row['e_add'];
									$e_contact=$row['e_contact'];
									$cour_name=$row['c_name'];
									$e_head=$row['e_head'];
									$t_name=$row['t_name'];
                                    $cid=$row['c_id'];
									$tid=$row['t_id'];
									$bool='d';
                                    

									echo "<tr>";                         
                                    echo "<td>{$e_name}</td>";
									echo "<td><img width=80 height=50 src='../images/$e_img'></td>";
									echo "<td>{$e_add}</td>";
									echo "<td>{$e_contact}</td>";
									echo "<td>{$cour_name}</td>";
                                    echo "<td>{$e_head}</td>";
									echo "<td>{$t_name}</td>";
									echo "<td><a href='posts.php?source=update_post_education&eid={$eid}&cid={$cid}&tid={$tid}&del={$bool}'>Delete</a></td>";

                                    echo "<td><a href='posts.php?source=edit_post_e&eid={$eid}&cid={$cid}&tid={$tid}'>Update</a></td>";
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
		 $eid=$_GET['eid'];
		 $cid=$_GET['cid'];
		 $tid=$_GET['tid'];
		 $sql1 = "DELETE FROM education where e_id='$eid'";
		 $sql2="DELETE FROM  courses where c_id='$cid'"; 
		 $sql3="DELETE FROM  teachers where t_id='$tid'";
		 $res1=mysqli_query($connection,$sql1);
		 $res2=mysqli_query($connection,$sql2);
		 $res3=mysqli_query($connection,$sql3);
		 if($res1&&$res2&&$res3)
		 {
			 echo "<h1>deletion successful</h1>";
		 }
	 
 }

?>

