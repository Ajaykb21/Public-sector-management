 <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>Post Title</th>
                                    <th>Post Category</th>
                                    <th>Post Status</th>
                                    <th>Post Image</th>
                                    <th>Post Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM posts INNER JOIN healthcare ON posts.post_id=healthcare.h_id INNER JOIN departments ON departments.dept_id = healthcare.h_id INNER JOIN doctors ON doctors.dept_id=departments.dept_id";
                                $rows = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_assoc($rows))
                                {
                                    $post_id=$row['post_id'];                                                                      
                                    $post_title = $row['post_title'];                                 
                                    $post_status = $row['post_status'];
                                    $post_image = $row['post_image'];
                                    $post_date = $row['post_date'];
                                    $did=$row['dept_id'];
                                    $doid=$row['doc_id'];
                                    

                                    echo "<tr>";                               
                                    echo "<td>{$post_title }</td>";
                                    echo "<td><img src='./images/$post_image'></td>";
                                    echo "<td>{$post_date}</td>";
                                    echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                                    echo "<td><a href='posts.php?source=edit_post&hid={$post_id}'>Update</a></td>";
                                    echo "</tr>";
                                }
                                 
                                 ?>
                            </tbody>
</table>
                               

<?php 
  if(isset($_GET['delete'])){
    $del_post_id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = {$del_post_id}";
    $del_query = mysqli_query($connection,$query);
  }
 ?>

 <?php 
  if(isset($_GET['update']))
  {
      $up_id=$_GET['update'];

  }
 ?>
