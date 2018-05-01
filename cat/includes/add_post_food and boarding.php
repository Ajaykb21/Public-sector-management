
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="foboarding_title">Food and Boarding Name</label>
		<input type="text" name="foboarding_title" id="foboarding_title" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_owner">Post Owner</label>
		<input type="text" name="post_owner" id="post_owner" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="foboarding_tags">Food and Boarding Tags</label>
		<input type="text" name="foboarding_tags" id="foboarding_tags" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="foboarding_address">Food and Boarding Address</label>
		<input type="text" name="foboarding_address" id="foboarding_address" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="foboarding_phoneno">Food and Boarding Contact No</label>
		<input type="text" name="foboarding_phoneno" id="foboarding_phoneno" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" id="post_status" class="form-control" placeholder="pending" disabled>
		
	</div>

	<div class="form-group">
		<label for="foboarding_image">Food and Boarding Image</label>
		<input type="file" name="foboarding_image1" id="foboarding_image" class="form-control" multiple="multiple">
		
	</div>

	<div class="form-group">
		<label for="foboarding_image">Food and Boarding Image</label>
		<input type="file" name="foboarding_image2" id="foboarding_image" class="form-control" multiple="multiple">
		
	</div>

	<div class="form-group">
		<label for="foboarding_image">Food and Boarding Image</label>
		<input type="file" name="foboarding_image3" id="foboarding_image" class="form-control" multiple="multiple">
		
	</div>



	

    <p> 
					<input type="button" value="Add Boarding Details" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Boarding Details" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
	</p>

    <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox"  name="chk[]" checked="checked" /></td>
						<td>
							<label>Boarding Price</label>
							<input type="text" required="required" name="bo_price[]">
						 </td>
						 <td>
							<label for="BX_age">Boarding Facilities</label>
							<input type="text" required="required" class="small"  name="bo_fac[]">
					     </td>
						 <!-- <td>
                         <label for="BX_age">Boarding Rating</label>
						<input type="text"  class="small"  name="bo_rate[]">
							
						 </td>
						 -->
							</p>
                    </tr>
                    </tbody>
                </table>


    <div class="form-group">
		<label for="foboarding_rate">Food and Boarding Rating</label>
		<input type="text" name="foboarding_rate" id="foboarding_rate" class="form-control" placeholder="0-5">
		
	</div>

	
    <div class="form-group">
		<label for="foboarding_dist">Food and Boarding Distance</label>
		<input type="text" name="foboarding_dist" id="foboarding_dist" class="form-control" placeholder="in km">
		
	</div>

    <div class="form-group">
		<label for="foboarding_url">Food and Boarding Website URL</label>
		<input type="url" name="foboarding_url" id="foboarding_url" class="form-control" >
		
	</div>

	<div class="form-group">
		<label for="foboarding_url">Food and Boarding Descrpition</label>
		<textarea name="foboarding_content" id="foboarding_content" cols="30" rows="10" class="form-control"></textarea>
		
	</div>


	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="create_post" value="publish_post">
		
	</div>

   

</form>








<?php
session_start();

if(isset($_POST["create_post"]))
  {
  	$fid=0;
     $fo_title = $_POST['foboarding_title'];
     $post_owner = $_POST['post_owner'];
     $fo_tags = $_POST['foboarding_tags'];
     $fo_address = $_POST['foboarding_address'];
     $fo_phno = $_POST['foboarding_phoneno'];
     $fo_content = $_POST['foboarding_content'];
     $fo_rate = $_POST['foboarding_rate'];
     $fo_dist = $_POST['foboarding_dist'];
     $fo_url = $_POST['foboarding_url'];
     $post_status = 'pending';
     $fo_image1 = $_FILES['foboarding_image1']['name'];
	 $fo_tmp_image1 = $_FILES['foboarding_image1']['tmp_name'];

	 $fo_image2 = $_FILES['foboarding_image2']['name'];
	 $fo_tmp_image2 = $_FILES['foboarding_image2']['tmp_name'];
	 
	 $fo_image3 = $_FILES['foboarding_image3']['name'];
	 $fo_tmp_image3 = $_FILES['foboarding_image3']['tmp_name'];
	 
	 
	 	 
   
     $bo_price = $_POST['bo_price'];
     $bo_fac = $_POST['bo_fac'];
     
     
     
     
     $boprice_len=count($bo_price);
     $bofac_len=count($bo_fac);
     
     echo $boprice_len." ".$bofac_len;
    

	 move_uploaded_file($fo_tmp_image1, "../images/$fo_image1");
	 move_uploaded_file($fo_tmp_image2, "../images/$fo_image2");
	 move_uploaded_file($fo_tmp_image3, "../images/$fo_image3");

    

	$sql="insert into foods(f_name,f_img,f_add,f_contact,f_rate,f_dist,f_web,f_about) values('$fo_title','$fo_image1',' $fo_address','$fo_phno','$fo_rate','$fo_dist','$fo_url','$fo_content')";
	if(mysqli_query($connection,$sql))
	{
		echo "foods query success";
	}
	$fid=mysqli_insert_id($connection);
	echo $fid;

	$query="INSERT INTO food&boarding_images(fb_id,fb_img)";
	$query.="VALUES ('$fid','$fo_image1'),('$fid','$fo_image2'),('$fid','$fo_image3')";

	

	if(mysqli_query($connection,$query))
	{
		echo "foods image success";
	}

	for($i=0;$i<$boprice_len;$i++)
	{     
		
	   $query2 = "INSERT INTO boardings(bo_price,bo_fac,f_id) VALUES ('$bo_price[$i]','$bo_fac[$i]','$fid')";
	   $res1=mysqli_query($connection,$query2);  
	   $id=mysqli_insert_id($connection);
	   echo "boarding id:".$id;
	  

	}
   

	}
    
    
  

 ?>
