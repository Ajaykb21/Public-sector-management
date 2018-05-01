<?php

    if($_GET['fid'] && $_GET['boid'])
    {
   
       $i=0;
       $j=0;
        $fid=$_GET['fid'];
        $boid=$_GET['boid'];

        echo $boid;
        
        $sql1 = "SELECT * FROM foods where f_id='$fid'";
        $query1="SELECT * FROM boardings WHERE f_id='$fid'";
        

        $sql2="SELECT COUNT(*) as boarc FROM boardings where f_id='$fid'";
       
        
        $foodid=array();
        $boardid=array();

        $boarprice=array();
        $boarfac=array();
       
       
        
        $res1=mysqli_query($connection,$sql1);
        $query1res=mysqli_query($connection,$query1);
        
        $res2=mysqli_query($connection,$sql2);
    
        $q1=mysqli_fetch_assoc($res2);

        echo $q1['boarc'];
       
       


        while($row=mysqli_fetch_assoc($res1))
        {
            $fname=$row['f_name'];
            $fadd=$row['f_add'];
            $fpno=$row['f_contact'];
            $fimg=$row['f_img'];
            $frate=$row['f_rate'];
            $fdist=$row['f_dist'];
            $fweb=$row['f_web'];
            $fcont=$row['f_about'];
            $foodid=$row['f_id'];
           
        }
        
           
                while($row=mysqli_fetch_assoc($query1res))
                {
                    $boardid[]=$row['bo_id'];
                    $boarprice[]=$row['bo_price'];
                    $boarfac[]=$row['bo_fac'];
                    
                }

                echo "<pre>";
                print_r($boardid);
                echo "</pre>";

                echo "<pre>";
                print_r($boarfac);
                echo "</pre>";
                
               


     }     
            
                
            

        
        
   ?>
   
   
   <form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label for="foboarding_title">Resturant Name</label>
           <input type="text" name="foboarding_title" value="<?php echo $fname; ?>" id="foboarding_title" class="form-control">
           
       </div>
   
   
      
   
   
        
            
              
           
   
       
   
       <div class="form-group">
           <label for="foboarding_address">Resturant Address</label>
           <input type="text" name="foboarding_address" value="<?php echo $fadd;?>" id="foboarding_address" class="form-control">
           
       </div>
   
       <div class="form-group">
           <label for="foboarding_phoneno">Resturant Contact No</label>
           <input type="text" name="foboarding_phoneno" value="<?php echo $fpno;?>" id="foboarding_phoneno" class="form-control">
           
       </div>
   
       
   
       <div class="form-group">
           <label for="foboarding_image">Resturant Image</label>
           <input type="file" name="foboarding_image" id="foboarding_image" class="form-control" multiple="multiple">
           
       </div>
   
       <p> 
                       <input type="button" value="Add Boarding Details" onClick="addRow('dataTable')" /> 
                       <input type="button" value="Remove Boarding Details" onClick="deleteRow('dataTable')"  /> 
                       <p>(All acions apply only to entries with check marked check boxes only.)</p>
       </p>
       
   
   
       <table id="dataTable" class="form" border="1">
           <thead>
               <th>Boarding Price</th>
               <th>Boarding Facilities</th>
               
           </thead>
                     <tbody>
                <tr>
                         <p>
                          
                </tr>
                   
                         <?php 


                         for($i=0;$i<$q1['boarc'];$i++)
                         {
                             echo "<tr>";
                             echo "<td>
                             <input type='text' name='boar_price[{$boardid[$i]}]' value={$boarprice[$i]}></td>";
                             echo "<td>
                             <input type='text' name='boar_fac[$boardid[$i]}]' value={$boarfac[$i]}></td>";
                            
                            //  echo "<td>
                            //  <input type='text' name='doc_spec[{$docid[$i]}]' value={$docspec[$i]}></td>";
                             echo "<input type='hidden' name=id1[] value='{$boardid[$i]}' >";
                             echo "<input type='hidden' name=id2[] value='{$boardid[$i]}' >";
                             
                             
                             echo "</tr>";                           
                         }
                         
                         
                       
                         ?>  
                   
                           
                        </p>
                       </tr>
                       </tbody>
                   </table>
           
   
                   <div class="form-group">
		<label for="foboarding_rate">Food and Boarding Rating</label>
		<input type="text" name="foboarding_rate" id="foboarding_rate" value="<?php echo $frate;?>" class="form-control" placeholder="0-5">
		
	</div>

	
    <div class="form-group">
		<label for="foboarding_dist">Food and Boarding Distance</label>
		<input type="text" name="foboarding_dist" id="foboarding_dist" value="<?php echo $fdist;?>" class="form-control" placeholder="in km">
		
	</div>

    <div class="form-group">
		<label for="foboarding_url">Food and Boarding Website URL</label>
		<input type="url" name="foboarding_url" id="foboarding_url" value="<?php echo $fweb;?>" class="form-control" >
		
    </div>
    
    <div class="form-group">
		<label for="foboarding_url">Food and Boarding Descrpition</label>
		<textarea name="foboarding_content" id="foboarding_content" cols="30" rows="10" class="form-control"><?php echo $fcont;?></textarea>
		
	</div>


	
       <div class="form-group">
           <input type="submit" class="btn btn-primary" name="update_post" value="Update_Post">
           
       </div>
   
      
   
   </form>
   
   <?php 
    if(isset($_POST['update_post']))
    {
       $fname=$_POST['foboarding_title'];
       $fadd=$_POST['foboarding_address'];
       $fpno=$_POST['foboarding_phoneno'];
       $frate = $_POST['foboarding_rate'];
       $fdist = $_POST['foboarding_dist'];
       $furl = $_POST['foboarding_url'];
      
       $f_image = $_FILES['foboarding_image']['name'];
       

       $sql1 = "UPDATE foods SET f_name='$fname',f_add='$fadd',f_contact='$fpno',f_rate='$frate',f_dist='$fdist',f_web='$furl' WHERE f_id='$fid' ";
       $res1=mysqli_query($connection,$sql1);
       if($res1)
       {
           echo "success";
       }
     
       $f_tmp_image = $_FILES['foboarding_image']['tmp_name'];
       move_uploaded_file($f_tmp_image, "../images/$f_image");
      

       
       foreach($_POST['id1'] as $id1)
       {
         
          
          $udid=$id1;
          echo $udid;
          
              $field1=$_POST['boar_price'][$id1];
              echo $field1;
              $field2=$_POST['boar_fac'][$id1];
              
              echo $field1;
              echo $field2;
             
                  $qry1="UPDATE boardings SET bo_price='$field1',bo_fac='$field2' WHERE bo_id='$udid'";
                  $res1=mysqli_query($connection,$qry1) or die ("Query failed");

                  


    }

//     foreach($_POST['id2'] as $id2)
//     {
//         echo "<pre>";
//         print_r($_POST['id2']);
//         echo "</pre>";
      
       
       
      
//        $udid=$id2;
       
           
//            $field2=$_POST['boar_fac'][$id2];
//            echo $field2;
         
//            echo $field2;
//                $qry2="UPDATE boardings SET bo_fac='$field2' WHERE bo_id='$udid'";
//                $res2=mysqli_query($connection,$qry2) or die ("Query failed");

               


//  }
   
      
          
       
}  
        
            
            
   