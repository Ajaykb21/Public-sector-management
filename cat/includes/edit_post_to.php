<?php

    if($_GET['toid'])
    {
   
       $i=0;
       $j=0;
        $toid=$_GET['toid'];
        $sql1 = "SELECT * FROM tourism where t_id='$toid'";
        

       
        
        $res1=mysqli_query($connection,$sql1);
       
        
      


        while($row=mysqli_fetch_assoc($res1))
        {
            $toname=$row['t_name'];
            $toadd=$row['t_add'];
            $toimg=$row['t_img'];
            $todist=$row['t_dist'];
            $torate=$row['t_rate'];
            $toabout=$row['t_about'];
         
            $totime=$row['t_time'];
           
        }
        
           
               
               


     }     
            
                
            

        
        
   ?>
   
   
   <form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="tourism_title">Tourist Place</label>
		<input type="text" name="tourism_title" id="tourism_title" value="<?php echo $toname;?>" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_owner">Post Owner</label>
		<input type="text" name="post_owner" id="post_owner" class="form-control">
		
	</div>

	

	<div class="form-group">
		<label for="tourism_address">Tourist Place Address</label>
		<input type="text" name="tourism_address" id="tourism_address" value="<?php echo $toadd;?>" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="tourism_distance">Tourist Place Distance</label>
		<input type="text" name="tourism_distance" id="tourism_distance" value="<?php echo $todist;?>" class="form-control" placeholder="in km">
		
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" id="post_status" class="form-control" placeholder="pending" disabled>
		
	</div>

	<div class="form-group">
		<label for="tourism_image">Tourist Place Image</label>
		<input type="file" name="tourism_image1" id="tourism_image" value="<?php echo $toimg;?>" class="form-control" multiple="multiple">
		
	</div>

	



	

   
  

	<div class="form-group">
		<label for="tourism_content">About Tourist Place</label>
		<textarea name="tourism_content" id="tourism_content" value="" cols="30" rows="10" class="form-control"><?php echo $toabout;?></textarea>
		
	</div>

    <div class="form-group">
		<label for="tourism_rating">Tourist Place Rating</label>
		<input type="text" name="tourism_rating" id="tourism_rating" value="<?php echo $torate;?>" class="form-control" placeholder="0-5">
		
	</div>

    <div class="form-group">
		<label for="tourism_time">Tourist Place Time</label>
		<input type="text" name="tourism_time" value="<?php echo $totime;?>" id="tourism_time" class="form-control">
		
	</div>


	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Update" name="update_post" value="publish_post">
		
	</div>

   

</form>
   
<?php 

if(isset($_POST["update_post"]))
{
  
   $tour_title = $_POST['tourism_title'];
   $tour_owner = $_POST['post_owner'];
  
   $tour_address = $_POST['tourism_address'];
   $tour_distance = $_POST['tourism_distance'];
   $tour_content = $_POST['tourism_content'];
   $tour_rating = $_POST['tourism_rating'];
   $tour_time = $_POST['tourism_time'];
   $tour_rate = $_POST['tourism_rating'];

  
   $post_status = 'pending';
   $tour_image1 = $_FILES['tourism_image1']['name'];
   $tour_tmp_image1 = $_FILES['tourism_image1']['tmp_name'];

   
   

   move_uploaded_file($tour_tmp_image1, "../images/$tour_image1");
   

  

  $sql="UPDATE tourism SET t_name='$tour_title',t_img='$tour_image1',t_add='$tour_address',t_dist='$tour_distance',t_rate='$tour_rate',t_about='$tour_content',t_time='$tour_time' WHERE t_id='$toid'";
  if(mysqli_query($connection,$sql))
  {
      echo "tourism query success";
  }
  

 }
   
?>  
        
            
            
   