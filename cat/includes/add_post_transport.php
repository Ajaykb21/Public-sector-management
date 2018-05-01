
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="transport_title">Transports Name</label>
		<input type="text" name="transport_title" id="transport_title" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_owner">Post Owner</label>
		<input type="text" name="post_owner" id="post_owner" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="transport_tags">Transports Tags</label>
		<input type="text" name="transport_tags" id="transport_tags" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="transport_address">Transports Address</label>
		<input type="text" name="transport_address" id="transport_address" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="transport_phoneno">Transports Contact No</label>
		<input type="text" name="transport_phoneno" id="transport_phoneno" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" id="post_status" class="form-control" placeholder="pending" disabled>
		
	</div>

	<div class="form-group">
		<label for="transport_image">Transports Image</label>
		<input type="file" name="transport_image1" id="transport_image" class="form-control" multiple="multiple">
		
	</div>

	<div class="form-group">
		<label for="transport_image">Transports Image</label>
		<input type="file" name="transport_image2" id="transport_image" class="form-control" multiple="multiple">
		
	</div>

	<div class="form-group">
		<label for="transport_image">Transports Image</label>
		<input type="file" name="transport_image3" id="transport_image" class="form-control" multiple="multiple">
		
	</div>



	

    <p> 
					<input type="button" value="Add Bus and Train Details" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Bus and Train  Details" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
	</p>

    <table id="dataTable" class="form table-responsive" border="1">
                  <tbody>
                    <tr>
                      <p>
                        <td><input type="checkbox"  name="chk[]" checked="checked" /></td>
                        
						<td>
                        <label>Bus Name</label>
                        <input type="text" required="required" name="bus_name[]">
                     </td>
                   
                     <td>
                        <label for="BX_age">Bus Time</label>
                        <input type="text" required="required" class="small"  name="bus_time[]">
                     </td>

                     <td>
                        <label for="BX_age">Bus Price</label>
                        <input type="text" required="required" class="small"  name="bus_price[]">
                     </td>
                    <td>
                        <label>Train Name</label>
                        <input type="text" required="required" name="train_name[]">
                     </td>
                     <td>
                        <label for="BX_age">Train Time</label>
                        <input type="text" required="required" class="small"  name="train_time[]">
                     </td>

                     <td>
                        <label for="BX_age">Train Price</label>
                        <input type="text" required="required" class="small"  name="train_price[]">
                     </td>
                    
                    
                 
                    </tr>

                    
                    </tbody>
                </table>

	<div class="form-group">
        <label for="transport_source">Transportation Source</label>
        <input type="text" name="transport_source" id="transport_source" class="form-control">
		
		
	</div>

    <div class="form-group">
		<label for="transport_destination">Transportation Destination</label>
		<input type="text" name="transport_destination" id="transport_destination" class="form-control" >
		
    </div>

    <div class="form-group">
		<label for="bus_duration">Duration by Bus</label>
		<input type="text" name="bus_duration" id="bus_duration" class="form-control" placeholder="0-72">
		
    </div>

    <div class="form-group">
		<label for="train_duration">Duration by Train</label>
		<input type="text" name="train_duration" id="train_duration" class="form-control" placeholder="0-72">
		
    </div>

    <div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_post" value="publish_post">
		
	</div>

    
    

</form>








<?php
session_start();

if(isset($_POST["create_post"]))
  {
  	$hid=0;
     $tra_title = $_POST['transport_title'];
     $post_owner = $_POST['post_owner'];
     $tra_tags = $_POST['transport_tags'];
     $tra_address = $_POST['transport_address'];
     $tra_phno = $_POST['transport_phoneno'];
     $tra_src = $_POST['transport_source'];
     $tra_dst = $_POST['transport_destination'];
     $bus_dur = $_POST['bus_duration'];
     $train_dur = $_POST['train_duration'];
     $post_status = 'pending';
     $tra_image1 = $_FILES['transport_image1']['name'];
	 $tra_tmp_image1 = $_FILES['transport_image1']['tmp_name'];

	 $tra_image2 = $_FILES['transport_image2']['name'];
	 $tra_tmp_image2 = $_FILES['transport_image2']['tmp_name'];
	 
	 $tra_image3 = $_FILES['transport_image3']['name'];
	 $tra_tmp_image3 = $_FILES['transport_image3']['tmp_name'];
	 
	 
	 	 
   
     $bus_name = $_POST['bus_name'];
     $bus_time = $_POST['bus_time'];
     $bus_price = $_POST['bus_price'];
   

     $train_name = $_POST['train_name'];
     $train_time = $_POST['train_time'];
     $train_price = $_POST['train_price'];
  
     
    
    
     
     $bname_len=count($bus_name);
     $btime_len=count($bus_time);
     $bprice_len=count($bus_price);
     
     $tname_len=count($train_name);
     $ttime_len=count($train_time);
     $tprice_len=count($train_price);
  


    
     echo $bname_len." ".$btime_len." ".$bprice_len;
     echo $tname_len." ".$ttime_len." ".$tprice_len;
     $record=array();
	 $fields=array();
	 $values=array();

	 move_uploaded_file($tra_tmp_image1, "../images/$tra_image1");
	 move_uploaded_file($tra_tmp_image2, "../images/$tra_image2");
	 move_uploaded_file($tra_tmp_image3, "../images/$tra_image3");

    

	$sql="insert into transports(trans_name,trans_img,trans_add,trans_contact,trans_src,trans_dst) values('$tra_title','$tra_image1',' $tra_address','$tra_phno',' $tra_src','$tra_dst')";
	if(mysqli_query($connection,$sql))
	{
		echo "transport query success";
	}
	$transid=mysqli_insert_id($connection);
	echo $transid;

	$query="INSERT INTO transports_images(trans_id,trans_img)";
	$query.="VALUES ('$transid','$tra_image1'),('$transid','$tra_image2'),('$transid','$tra_image3')";

	
	
	if(mysqli_query($connection,$query))
	{
		echo "transports image success";
	}

	for($i=0,$j=0;$i<$bname_len,$j<$tname_len;$i++,$j++)
	{     
		
	  
	   echo $bus_name[$i].$bus_time[$i].$bus_price[$i].$bus_dur;
       echo $train_name[$j].$train_time[$j].$train_price[$j].$train_dur;
       

	   $query4="INSERT INTO bus_transports(b_name,b_time,b_price,b_dur,trans_id) values ('$bus_name[$i]','$bus_time[$i]','$bus_price[$i]','$bus_dur','$transid')";
	   $res3=mysqli_query($connection,$query4);
	   if($res3)
	   {
		   echo 'complete'.$i."success";
       }
       
       $query5="INSERT INTO rail_transports(r_name,r_time,r_price,r_dur,trans_id) values ('$train_name[$j]','$train_time[$j]','$train_price[$j]','$train_dur','$transid')";
	   $res4=mysqli_query($connection,$query5);
	   if($res4)
	   {
		   echo 'complete'.$i."success";
	   }


	}
   

	}
    
    
  

 ?>
