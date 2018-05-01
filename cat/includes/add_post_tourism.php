
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="tourism_title">Tourist Place</label>
		<input type="text" name="tourism_title" id="tourism_title" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_owner">Post Owner</label>
		<input type="text" name="post_owner" id="post_owner" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="tourism_tags">Tourist Place Tags</label>
		<input type="text" name="tourism_tags" id="tourism_tags" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="tourism_address">Tourist Place Address</label>
		<input type="text" name="tourism_address" id="tourism_address" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="tourism_distance">Tourist Place Distance</label>
		<input type="text" name="tourism_distance" id="tourism_distance" class="form-control" placeholder="in km">
		
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" id="post_status" class="form-control" placeholder="pending" disabled>
		
	</div>

	<div class="form-group">
		<label for="tourism_image">Tourist Place Image</label>
		<input type="file" name="tourism_image1" id="tourism_image" class="form-control" multiple="multiple">
		
	</div>

	<div class="form-group">
		<label for="tourism_image">Tourist Place Image</label>
		<input type="file" name="tourism_image2" id="tourism_image" class="form-control" multiple="multiple">
		
	</div>

	<div class="form-group">
		<label for="tourism_image">Tourist Place Image</label>
		<input type="file" name="tourism_image3" id="tourism_image" class="form-control" multiple="multiple">
		
	</div>



	

   
  

	<div class="form-group">
		<label for="tourism_content">About Tourist Place</label>
		<textarea name="tourism_content" id="tourism_content" cols="30" rows="10" class="form-control"></textarea>
		
	</div>

    <div class="form-group">
		<label for="tourism_rating">Tourist Place Rating</label>
		<input type="text" name="tourism_rating" id="tourism_rating" class="form-control" placeholder="0-5">
		
	</div>

    <div class="form-group">
		<label for="tourism_time">Tourist Place Time</label>
		<input type="text" name="tourism_time" id="tourism_time" class="form-control">
		
	</div>


	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_post" value="publish_post">
		
	</div>

   

</form>








<?php
session_start();

if(isset($_POST["create_post"]))
  {
  	$toid=0;
     $tour_title = $_POST['tourism_title'];
     $tour_owner = $_POST['post_owner'];
     $tour_tags = $_POST['tourism_tags'];
     $tour_address = $_POST['tourism_address'];
     $tour_distance = $_POST['tourism_distance'];
     $tour_content = $_POST['tourism_content'];
     $tour_rating = $_POST['tourism_rating'];
     $tour_time = $_POST['tourism_time'];

    
     $post_status = 'pending';
     $tour_image1 = $_FILES['tourism_image1']['name'];
	 $tour_tmp_image1 = $_FILES['tourism_image1']['tmp_name'];

	 $tour_image2 = $_FILES['tourism_image2']['name'];
	 $tour_tmp_image2 = $_FILES['tourism_image2']['tmp_name'];
	 
	 $tour_image3 = $_FILES['tourism_image3']['name'];
	 $tour_tmp_image3 = $_FILES['tourism_image3']['tmp_name'];
	 

	 move_uploaded_file($tour_tmp_image1, "../images/$tour_image1");
	 move_uploaded_file($tour_tmp_image2, "../images/$tour_image2");
	 move_uploaded_file($tour_tmp_image3, "../images/$tour_image3");

    

	$sql="insert into tourism(t_name,t_img,t_add,t_dist,t_rate,t_about,t_time) values('$tour_title','$tour_image1',' $tour_address','$tour_distance',' $tour_rating','$tour_content','$tour_time')";
	if(mysqli_query($connection,$sql))
	{
		echo "tourism query success";
	}
	$toid=mysqli_insert_id($connection);
	echo $toid;

	$query="INSERT INTO tourism_images(t_id,t_img)";
	$query.="VALUES ('$toid','$tour_image1'),('$toid','$tour_image2'),('$toid','$tour_image3')";

	

	
	if(mysqli_query($connection,$query))
	{
		echo "tourism image success";
	}

	}
    
    
  

 ?>
