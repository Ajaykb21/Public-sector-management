
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="hospital_title">Hospital Name</label>
		<input type="text" name="hospital_title" id="hospital_title" class="form-control">
		
	</div>


   


     <!--  <div>
       	    <select name="post_category" id="cat_id">
       	    	<option value="select_c" name="select_c">Select a Category</option> -->

       	   <?php
		  // $query = "SELECT * FROM categories";
		  // $rows = mysqli_query($connection,$query);

		  // while($row = mysqli_fetch_assoc($rows))
		  // {
		  // 	$cat_title = $row['cat_title'];
		  // 	echo "<option name='$cat_title' value='$cat_title'>";
		  // 	echo $cat_title;
		  // 	echo "</option>";
		  // } 

		 ?>

	    	<!--  <option value="Health Care" name="Health Care"></option>
	    	 <option value="Education" name="Education"></option>
	    	  <option value="Tourism" name="tourism"></option>
	    	 <option value="Food and Boarding" name="Food and Boarding"></option>
	    	 <option value="Transport" name="Transport"></option>
	    	 <option value="Entertainment" name="Entertainment"></option> -->
	      <!--  </select>
	
       </div> -->


	 
		<!-- <ul class="dropdown-menu" >
			<li ><a href="#">Health Care</a></li>
			<li><a href="#">Education</a></li>
			<li><a href="#">Tourism</a></li>
			<li><a href="#">Transport</a></li>
			<li><a href="#">Food and Boarding</a></li>
			<li><a href="#">Entertainment</a></li>
		</ul> -->
		

	<div class="form-group">
		<label for="post_owner">Post Owner</label>
		<input type="text" name="post_owner" id="post_owner" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="hospital_tags">Hospital Tags</label>
		<input type="text" name="hospital_tags" id="hospital_tags" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="hospital_address">Hospital Address</label>
		<input type="text" name="hospital_address" id="hospital_address" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="hospital_phoneno">Hospital Contact No</label>
		<input type="text" name="hospital_phoneno" id="hospital_phoneno" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" id="post_status" class="form-control" placeholder="pending" disabled>
		
	</div>

	<div class="form-group">
		<label for="hospital_image">Hospital Image</label>
		<input type="file" name="hospital_image" id="hospital_image" class="form-control" multiple="multiple">
		
	</div>

	

    <p> 
					<input type="button" value="Add Doctor Details" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Doctor Details" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
	</p>

    <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox"  name="chk[]" checked="checked" /></td>
						<td>
							<label>Doctor Name</label>
							<input type="text" required="required" name="doc_name[]">
						 </td>
						 <td>
							<label for="BX_age">Department Name</label>
							<input type="text" required="required" class="small"  name="dept_name[]">
					     </td>
						 <td>
                         <label for="BX_age">Doctor Time</label>
						<input type="text"  class="small"  name="doc_time[]">
							
						 </td>
						 <td>
                         <label for="BX_age">Doctor's Specialization</label>
						<input type="text"  class="small"  name="doc_specs[]">
						 </td>
							</p>
                    </tr>
                    </tbody>
                </table>

	<div class="form-group">
		<label for="hospital_content">Hospital Content</label>
		<textarea name="hospital_content" id="hospital_content" cols="30" rows="10" class="form-control"></textarea>
		
	</div>

    <div class="form-group">
		<label for="health_rating">Healthcare Rating</label>
		<input type="text" name="health_rating" id="health_rating" class="form-control" placeholder="0-5">
		
	</div>

    <div class="form-group">
		<label for="health_dist">Healthcare Distance</label>
		<input type="text" name="health_dist" id="health_dist" class="form-control" placeholder="0-15">
		
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
     $hos_title = $_POST['hospital_title'];
     $post_owner = $_POST['post_owner'];
     $hos_tags = $_POST['hospital_tags'];
     $hos_address = $_POST['hospital_address'];
     $hos_phno = $_POST['hospital_phoneno'];
     $post_status = 'pending';
     $hos_image = $_FILES['hospital_image']['name'];
     $hos_tmp_image = $_FILES['hospital_image']['tmp_name'];
    //  foreach($)
     $doc_name = $_POST['doc_name'];
     
     $doc_time = $_POST['doc_time'];
    
     $doc_specs=$_POST['doc_specs'];
    
     $dep_name = $_POST['dept_name'];
     
     $hos_content = $_POST['hospital_content'];
     $hos_rating=$_POST['health_rating'];
     $hos_dist=$_POST['health_dist'];
     $post_date = date('d-m-y');
     $dname_len=count($doc_name);
     $dtime_len=count($doc_time);
     $dspecs_len=count($doc_specs);
     $dep_len=count($dep_name);
     echo $dname_len." ".$dtime_len." ".$dspecs_len." ".$dep_len;
     $record=array();
	 $fields=array();
	 $values=array();

     move_uploaded_file($hos_tmp_image, "../images/$hos_image");

    //  foreach($record as $key => $file)
    //  {
    //      $files[$key]['filename'] = $file;
    //      $files[$key]['title'] = $title[$key];
    //      $files[$key]['description'] = $description[$key];
    //  }

	// $sql = "CALL inserthealth('$hos_title','$hos_image',' $hos_address','$hos_phno',' $hos_content')";
	// if(mysqli_query($connection,$sql))
	// {
	// 	echo "query success";
	// }

	$sql="insert into healthcare(h_name,h_img,h_add,h_contact,h_about) values('$hos_title','$hos_image',' $hos_address','$hos_phno',' $hos_content')";
	if(mysqli_query($connection,$sql))
	{
		echo "health query success";
	}
	$hid=mysqli_insert_id($connection);
	echo $hid;

	$sql2="INSERT INTO posts(post_id,owner_name,post_title,post_cat,post_status,post_image,post_date)";
	$sql2.="values ('$hid','ajeya','$hos_title','healthcare','pending','$hos_image',CURRENT_TIMESTAMP())";

	if(mysqli_query($connection,$sql2))
	{
		echo "posts success";
	}





















	 
    //  if(is_array($dep_name))
    //  {
    //      $query2="INSERT INTO departments(dept_name,health_id) VALUES";
    //      $value_array=array();
    //      foreach($dep_name  as $a=>$b )
    //      {
	// 	 $fields=implode(',',$fields);
	// 	 $values=implode(',',$values);
    //      }
    //      $query2 .= implode(',', $value_array);
         
    //      $dep_res = mysqli_query($connection,$query2) or die('department query failed');

    //  }
    
    

	for($i=0;$i<$dep_len;$i++)
	{     
		
	   $query2 = "INSERT INTO departments(dept_name,h_id) VALUES ('$dep_name[$i]','$hid')";
	   $res1=mysqli_query($connection,$query2);  
	   $id=mysqli_insert_id($connection);
	   echo "departments id:".$id;
	   echo $doc_name[$i].$doc_time[$i];
	   $query4="INSERT INTO doctors(doc_name,doc_spec,dept_id) values ('$doc_name[$i]','$doc_specs[$i]','$id')";
	   $res3=mysqli_query($connection,$query4);
	   if($res3)
	   {
		   echo 'complete'.$i."success";
	   }

	}
   

	}
    
    
  

 ?>
