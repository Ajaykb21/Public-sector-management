<?php

    if($_GET['eid'] && $_GET['cid'] &&$_GET['tid'])
    {
   
       $i=0;
       $j=0;
        $eid=$_GET['eid'];
        $cid=$_GET['cid'];
        $tid=$_GET['tid'];
        $sql1 = "SELECT * FROM education where e_id='$eid'";
        $query1="SELECT * FROM courses WHERE e_id='$eid'";
        $query2="SELECT * FROM teachers t INNER JOIN courses c ON t.c_id=c.c_id INNER JOIN education e  ON e.e_id =c.e_id HAVING e.e_id='$eid'";

        $sql2="SELECT COUNT(*) as courc FROM courses where e_id='$eid'";
        $sql3="SELECT COUNT(*) as facc FROM teachers t INNER JOIN courses c ON t.c_id=c.c_id INNER JOIN education e  ON e.e_id =c.e_id GROUP BY e.e_id HAVING e.e_id='$eid' ";
        
        $courid=array();
        $courname=array();
        $facname=array();
        $faccont=array();
        $courdur=array();
        $facid=array();
       
        
        $res1=mysqli_query($connection,$sql1);
        $query1res=mysqli_query($connection,$query1);
        $query2res=mysqli_query($connection,$query2);
        $res2=mysqli_query($connection,$sql2);
        $res3=mysqli_query($connection,$sql3);
        $q1=mysqli_fetch_assoc($res2);
        $q2=mysqli_fetch_assoc($res3);
        
       


        while($row=mysqli_fetch_assoc($res1))
        {
            $ename=$row['e_name'];
            $eadd=$row['e_add'];
            $epno=$row['e_contact'];
            $eimg=$row['e_img'];
            $ehead=$row['e_head'];
            $eabout=$row['e_about'];
        }
        
           
                while($row=mysqli_fetch_assoc($query1res))
                {
                    $courid[]=$row['c_id'];
                    $courname[]=$row['c_name'];
                    $courdur[]=$row['c_dur'];
                    $cnoseats=$row['c_noseats'];
                    $cach=$row['c_ach'];
                }
                while($row=mysqli_fetch_assoc($query2res))
                {
                    $facname[]=$row['t_name'];
                    $facid[]=$row['t_id'];
                    $faccont[]=$row['t_contact'];
                }
               


            }     
            
                
            

        
        
   ?>
   
   
   <form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label for="education_title">Institution Name</label>
           <input type="text" name="education_title" value="<?php echo $ename; ?>" id="education_title" class="form-control">
           
       </div>
   
   
       <div class="form-group">
		<label for="education_head">Institution Head</label>
		<input type="text" name="education_head" id="education_head" value="<?php echo $ehead; ?>" class="form-control">
		
	</div>
   
   
        
            
              
           
   
       
   
       <div class="form-group">
           <label for="education_address">Institution Address</label>
           <input type="text" name="education_address" value="<?php echo $eadd;?>" id="education_address" class="form-control">
           
       </div>
   
       <div class="form-group">
           <label for="education_phoneno">Institution Contact No</label>
           <input type="text" name="education_phoneno" value="<?php echo $epno;?>" id="education_phoneno" class="form-control">
           
       </div>
   
       
   
       <div class="form-group">
           <label for="education_image">Institution Image</label>
           <input type="file" name="education_image" id="education_image" class="form-control" multiple="multiple">
           
       </div>
   
       <p> 
                       <input type="button" value="Add Faculty Details" onClick="addRow('dataTable')" /> 
                       <input type="button" value="Remove Faculty Details" onClick="deleteRow('dataTable')"  /> 
                       <p>(All acions apply only to entries with check marked check boxes only.)</p>
       </p>
       
   
   
       <table id="dataTable" class="form" border="1">
           <thead>
               <th>Faculty Name</th>
               <th>Course  Name</th>
               <th>Faculty Contact</th>
               <th>Course Duration</th>
           </thead>
                     <tbody>
                <tr>
                         <p>
                          
                </tr>
                   
                         <?php 


                         for($i=0,$j=0;$i<$q1['courc'],$j<$q2['facc'];$i++,$j++)
                         {
                             echo "<tr>";
                             echo "<td>
                             <input type='text' name='fac_name[{$facid[$j]}]' value={$facname[$j]}></td>";
                             echo "<td>
                             <input type='text' name='cour_name[{$courid[$i]}]' value={$courname[$i]}></td>";
                             echo "<td>
                             <input type='text' name='fac_cont[{$facid[$j]}]' value={$faccont[$j]}></td>";
                             echo "<td>
                             <input type='text' name='cour_dur[{$courid[$i]}]' value={$courdur[$i]}></td>";
                            //  echo "<td>
                            //  <input type='text' name='doc_spec[{$docid[$i]}]' value={$docspec[$i]}></td>";
                             echo "<input type='hidden' name=id1[] value='{$facid[$i]}' >";
                             echo "<input type='hidden' name=id2[] value='{$courid[$j]}' >";
                             echo "<input type='hidden' name=id3[] value='{$facid[$j]}' >";
                             echo "<input type='hidden' name=id4[] value='{$courid[$j]}' >";
                             
                             
                             echo "</tr>";                           
                         }
                         
                         
                       
                         ?>  
                   
                           
                        </p>
                       </tr>
                       </tbody>
                   </table>
           
   
       <div class="form-group">
           <label for="education_content">Institution Content</label>
           <textarea name="education_content" id="education_content" cols="30" rows="10" class="form-control"><?php echo $eabout;?></textarea>
           
       </div>
   
       <div class="form-group">
		<label for="course_seats">Seats Available</label>
		<input type="text" name="course_seats" id="course_seats" value="<?php echo $cnoseats;?>" class="form-control" placeholder="0-120">
		
	</div>

    <div class="form-group">
		<label for="education_ach">Institution Achievements</label>
		<input type="text" name="education_ach" id="education_ach" value="<?php echo $cach;?>" class="form-control" placeholder="Top Percentage">
		
	</div>
   
       <div class="form-group">
           <input type="submit" class="btn btn-primary" name="update_post" value="Update_Post">
           
       </div>
   
      
   
   </form>
   
   <?php 
    if(isset($_POST['update_post']))
    {
       $ename=$_POST['education_title'];
       $eadd=$_POST['education_address'];
       $epno=$_POST['education_phoneno'];
       $ehead=$_POST['education_head'];
       $econt=$_POST['education_content'];
       $edu_image = $_FILES['education_image']['name'];
       

       $sql1 = "UPDATE education SET e_name='$ename',e_add='$eadd',e_contact='$epno',e_about='$econt',e_head='ehead' WHERE e_id='$eid' ";
       $res1=mysqli_query($connection,$sql1);
       if($res1)
       {
           echo "success";
       }
     
       $edu_tmp_image = $_FILES['education_image']['tmp_name'];
       move_uploaded_file($edu_tmp_image, "../images/$edu_image");
      

       
       foreach($_POST['id1'] as $id1)
       {
         
          echo gettype($id1);
          echo "over";
            $i=0;
          $udid=$id1;
          
              $field1=$_POST['fac_name'][$id1];
              $field2=$_POST['fac_cont'][$id1];
              echo $field1;
              echo $field2;
                  $qry1="UPDATE teachers SET t_name='$field1' WHERE t_id='$udid'";
                  $res1=mysqli_query($connection,$qry1) or die ("Query failed");

                  $qry2="UPDATE teachers SET t_contact='$field2' WHERE t_id='$udid'";
                  $res2=mysqli_query($connection,$qry2) or die ("Query failed");


                  
              
          
        }
      
          
        foreach($_POST['id2'] as $id2)
        {
          
           echo gettype($id2);
           echo "over";
             
           $udid=$id2;
          
         
               
               $field1=$_POST['cour_name'][$id2];
               $field2=$_POST['cour_dur'][$id2];
               echo $field1;
               echo $field2;
                   $qry1="UPDATE courses SET c_name='$field1' WHERE c_id='$udid'";
                   $res1=mysqli_query($connection,$qry1) or die ("Query failed");

                   $qry2="UPDATE courses SET c_dur='$field2' WHERE c_id='$udid'";
                   $res2=mysqli_query($connection,$qry2) or die ("Query failed");

                   $qry3="UPDATE courses SET c_noseats='$cnoseats',c_ach='$cach' WHERE c_id='$udid'";
                   $res3=mysqli_query($connection,$qry3) or die ("Query failed");
 
                   
               
           
         } 
        }  
        
            
            
   