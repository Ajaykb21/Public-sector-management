<table class="table table-bordered table-hover">
                            <thead>
                                <tr> 
									                                
                                    <th>Transports Name</th>
									<th>Transports Image</th>
									<th>Transports Address</th>
									<th>Transports Contact</th>                                    
                                    <th>Bus Name</th>                                   
                                    <th>Bus Time</th>
                                    <th>Train Name</th>
                                    <th>Train Time</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM bus_transports bt INNER JOIN transports t ON t.trans_id = bt.trans_id INNER JOIN rail_transports rt ON rt.trans_id=t.trans_id GROUP BY t.trans_id";
                                $rows = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_assoc($rows))
                                {
									$t_name=$row['trans_name'];
									$tid=$row['trans_id'];
									$t_img=$row['trans_img'];
									$t_add=$row['trans_add'];
									$t_contact=$row['trans_contact'];
									$busname=$row['b_name'];
									$railname=$row['r_name'];
									$bustime=$row['b_time'];
									$railtime=$row['r_time'];
									
                                    $rid=$row['r_id'];
									$bid=$row['b_id'];
									$bool='d';
                                    

									echo "<tr>";                         
                                    echo "<td>{$t_name}</td>";
									echo "<td><img width=80 height=50 src='../images/$t_img'></td>";
									echo "<td>{$t_add}</td>";
									echo "<td>{$t_contact}</td>";
									echo "<td>{$busname}</td>";
                                    echo "<td>{$bustime}</td>";
                                    echo "<td>{$railname}</td>";
                                    echo "<td>{$railtime}</td>";
									
									echo "<td><a href='posts.php?source=update_post_transport&tid={$tid}&bid={$bid}&rid={$rid}&del={$bool}'>Delete</a></td>";

                                    echo "<td><a href='posts.php?source=edit_post_t&tid={$tid}&bid={$bid}&rid={$rid}'>Update</a></td>";
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
		 $tid=$_GET['tid'];
		 $bid=$_GET['bid'];
		 $rid=$_GET['rid'];
		 $sql1 = "DELETE FROM transports where trans_id='$tid'";
		 $sql2="DELETE FROM  bus_transports where b_id='$bid'"; 
		 $sql3="DELETE FROM  rail_transports where r_id='$rid'";
		 $res1=mysqli_query($connection,$sql1);
		 $res2=mysqli_query($connection,$sql2);
		 $res3=mysqli_query($connection,$sql3);
		 if($res1&&$res2&&$res3)
		 {
			 echo "<h1>deletion successful</h1>";
		 }
	 
 }

?>

