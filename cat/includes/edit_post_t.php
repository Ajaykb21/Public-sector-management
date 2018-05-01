<?php

    if($_GET['tid'] && $_GET['bid'] &&$_GET['rid'])
    {
   
       $i=0;
       $j=0;
        $tid=$_GET['tid'];
        $bid=$_GET['bid'];
        $rid=$_GET['rid'];
        $sql1 = "SELECT * FROM transports where trans_id='$tid'";
        $query1="SELECT * FROM bus_transports WHERE trans_id='$tid'";
        $query2="SELECT * FROM rail_transports WHERE trans_id='$tid'";

        $sql2="SELECT COUNT(*) as busc FROM bus_transports where trans_id='$tid'";
        $sql3="SELECT COUNT(*) as trainc FROM rail_transports  where trans_id='$tid' ";
        
        $transid=array();

        $busname=array();
        $bustime=array();
        $busprice=array();

        $trainname=array();
        $traintime=array();
        $trainprice=array();

        $busid=array();
        $trainid=array();
       
        
        $res1=mysqli_query($connection,$sql1);
        $query1res=mysqli_query($connection,$query1);
        $query2res=mysqli_query($connection,$query2);
        $res2=mysqli_query($connection,$sql2);
        $res3=mysqli_query($connection,$sql3);
        $q1=mysqli_fetch_assoc($res2);
        $q2=mysqli_fetch_assoc($res3);

        echo $q1['busc'].$q2['trainc'];
        
       


        while($row=mysqli_fetch_assoc($res1))
        {
            $tname=$row['trans_name'];
            $tadd=$row['trans_add'];
            $tpno=$row['trans_contact'];
            $timg=$row['trans_img'];
            $tsrc=$row['trans_src'];
            $tdst=$row['trans_dst'];
           
        }
        
           
                while($row=mysqli_fetch_assoc($query1res))
                {
                    $busid[]=$row['b_id'];
                    $busname[]=$row['b_name'];
                    $bustime[]=$row['b_time'];
                    $busprice[]=$row['b_price'];
                    $busdur=$row['b_dur'];
                    
                }
                while($row=mysqli_fetch_assoc($query2res))
                {
                    $trainid[]=$row['r_id'];
                    $trainname[]=$row['r_name'];
                    $traintime[]=$row['r_time'];
                    $trainprice[]=$row['r_price'];
                    $traindur=$row['r_dur'];
                    
                    
                }
               


            }     
            
                
            

        
        
   ?>
   
   
   <form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label for="transport_title">Transport Name</label>
           <input type="text" name="transport_title" value="<?php echo $tname; ?>" id="transport_title" class="form-control">
           
       </div>
   
   
      
   
   
        
            
              
           
   
       
   
       <div class="form-group">
           <label for="transport_address">Transport Address</label>
           <input type="text" name="transport_address" value="<?php echo $tadd;?>" id="transport_address" class="form-control">
           
       </div>
   
       <div class="form-group">
           <label for="transport_phoneno">Transport Contact No</label>
           <input type="text" name="transport_phoneno" value="<?php echo $tpno;?>" id="transport_phoneno" class="form-control">
           
       </div>
   
       
   
       <div class="form-group">
           <label for="transport_image">Transport Image</label>
           <input type="file" name="transport_image" id="transport_image" class="form-control" multiple="multiple">
           
       </div>
   
       <p> 
                       <input type="button" value="Add Bus and Train Details" onClick="addRow('dataTable')" /> 
                       <input type="button" value="Remove Bus and Train  Details" onClick="deleteRow('dataTable')"  /> 
                       <p>(All acions apply only to entries with check marked check boxes only.)</p>
       </p>
       
   
   
       <table id="dataTable" class="form" border="1">
           <thead>
               <th>Bus Name</th>
               <th>Bus Time</th>
               <th>Bus Price</th>
               <th>Train Name</th>
               <th>Train Time</th>
               <th>Train Price</th>
               
           </thead>
                     <tbody>
                <tr>
                         <p>
                          
                </tr>
                   
                         <?php 


                         for($i=0,$j=0;$i<$q1['busc'],$j<$q2['trainc'];$i++,$j++)
                         {
                             echo "<tr>";
                             echo "<td>
                             <input type='text' name='bus_name[{$busid[$i]}]' value={$busname[$i]}></td>";
                             echo "<td>
                             <input type='text' name='bus_time[{$busid[$i]}]' value={$bustime[$i]}></td>";
                             echo "<td>
                             <input type='text' name='bus_price[{$busid[$i]}]' value={$busprice[$i]}></td>";
                             echo "<td>
                             <input type='text' name='train_name[{$trainid[$j]}]' value={$trainname[$j]}></td>";
                             echo "<td>
                             <input type='text' name='train_time[{$trainid[$j]}]' value={$traintime[$j]}></td>";
                             echo "<td>
                             <input type='text' name='train_price[{$trainid[$j]}]' value={$trainprice[$j]}></td>";


                            
                            //  echo "<td>
                            //  <input type='text' name='doc_spec[{$docid[$i]}]' value={$docspec[$i]}></td>";
                             echo "<input type='hidden' name=id1[] value='{$busid[$i]}' >";
                             echo "<input type='hidden' name=id2[] value='{$trainid[$j]}' >";
                             
                             
                             echo "</tr>";                           
                         }
                         
                         
                       
                         ?>  
                   
                           
                        </p>
                       </tr>
                       </tbody>
                   </table>


    <div class="form-group">
		<label for="bus_duration">Duration by Bus</label>
		<input type="text" name="bus_duration" id="bus_duration" value="<?php echo $busdur;?>" class="form-control" placeholder="0-72">
		
    </div>

    <div class="form-group">
		<label for="train_duration">Duration by Train</label>
		<input type="text" name="train_duration" id="train_duration" value="<?php echo $traindur;?>" class="form-control" placeholder="0-72">
		
    </div>
           
   
       <div class="form-group">
           <label for="transport_source">Transport Source</label>
           <input name="transport_source" id="transport_source" value="<?php echo $tsrc; ?>" type="text" class="form-control">
           
       </div>

       <div class="form-group">
           <label for="transport_destination">Transport Destination</label>
           <input name="transport_destination" id="transport_destination" value="<?php echo $tdst; ?>" type="text"  class="form-control">
           
       </div>
   
      
   
       <div class="form-group">
           <input type="submit" class="btn btn-primary" name="update_post" value="Update_Post">
           
       </div>
   
      
   
   </form>
   
   <?php 
    if(isset($_POST['update_post']))
    {
       $transname=$_POST['transport_title'];
       $transadd=$_POST['transport_address'];
       $transpno=$_POST['transport_phoneno'];
       $transsrc=$_POST['transport_source'];
       $transdst=$_POST['transport_destination'];
      
       $trans_image = $_FILES['transport_image']['name'];
       

       $sql1 = "UPDATE transports SET trans_name='$transname',trans_add='$transadd',trans_contact='$transpno',trans_src='$transsrc',trans_dst='$transdst' WHERE trans_id='$tid' ";
       $res1=mysqli_query($connection,$sql1);
       if($res1)
       {
           echo "success";
       }
     
       $trans_tmp_image = $_FILES['transport_image']['tmp_name'];
       move_uploaded_file($trans_tmp_image, "../images/$trans_image");
      

       
       foreach($_POST['id1'] as $id1)
       {
         
          echo gettype($id1);
          echo "over";
            $i=0;
          $udid=$id1;
          
              $field1=$_POST['bus_name'][$id1];
              $field2=$_POST['bus_time'][$id1];
              $field3=$_POST['bus_price'][$id1];
              echo $field1;
              echo $field2;
              echo $field3;

                  $qry1="UPDATE bus_transports SET b_name='$field1' WHERE b_id='$udid'";
                  $res1=mysqli_query($connection,$qry1) or die ("Query failed");

                  $qry2="UPDATE bus_transports SET b_time='$field2' WHERE b_id='$udid'";
                  $res2=mysqli_query($connection,$qry2) or die ("Query failed");

                  $qry3="UPDATE bus_transports SET b_price='$field3' WHERE b_id='$udid'";
                  $res3=mysqli_query($connection,$qry3) or die ("Query failed");


                  
              
          
        }
      
          
        foreach($_POST['id2'] as $id2)
        {
          
           echo gettype($id2);
           echo "over";
             
           $udid=$id2;
          
         
               
               $field4=$_POST['train_name'][$id2];
               $field5=$_POST['train_time'][$id2];
               $field6=$_POST['train_price'][$id2];
           
               echo $field4;
               echo $field5;
               echo $field6;

                   $qry1="UPDATE rail_transports SET r_name='$field4' WHERE r_id='$udid'";
                   $res1=mysqli_query($connection,$qry1) or die ("Query failed");

                   $qry2="UPDATE rail_transports SET r_time='$field5' WHERE r_id='$udid'";
                   $res2=mysqli_query($connection,$qry2) or die ("Query failed");

                   $qry3="UPDATE rail_transports SET r_price='$field6' WHERE r_id='$udid'";
                   $res3=mysqli_query($connection,$qry3) or die ("Query failed");
 
                   
               
           
         } 
        }  
        
            
            
   