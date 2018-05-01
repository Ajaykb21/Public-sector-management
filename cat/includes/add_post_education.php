
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="education_title">Institution Name</label>
		<input type="text" name="education_title" id="education_title" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_owner">Post Owner</label>
		<input type="text" name="post_owner" id="post_owner" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="hospital_tags">Education Tags</label>
		<input type="text" name="education_tags" id="education_tags" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="education_address">Institution Address</label>
		<input type="text" name="education_address" id="education_address" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="education_phoneno">Institution Contact No</label>
		<input type="text" name="education_phoneno" id="education_phoneno" class="form-control">
		
    </div>
    
    <div class="form-group">
		<label for="education_head">Institution Head</label>
		<input type="text" name="education_head" id="education_head" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" id="post_status" class="form-control" placeholder="pending" disabled>
		
	</div>

	<div class="form-group">
		<label for="education_image">Institution Image</label>
		<input type="file" name="education_image1" id="education_image" class="form-control" multiple="multiple">
		
	</div>

	<div class="form-group">
		<label for="education_image">Institution Image</label>
		<input type="file" name="education_image2" id="education_image" class="form-control" multiple="multiple">
		
	</div>

	<div class="form-group">
		<label for="education_image">Institution Image</label>
		<input type="file" name="education_image3" id="education_image" class="form-control" multiple="multiple">
		
	</div>



	

    <p> 
					<input type="button" value="Add Faculty Details" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Faculty Details" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
	</p>

    <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox"  name="chk[]" checked="checked" /></td>
						<td>
							<label>Faculty Name</label>
							<input type="text" required="required" name="fac_name[]">
						 </td>
						 <td>
							<label for="BX_age">Course Name</label>
							<input type="text" required="required" class="small"  name="cour_name[]">
					     </td>
						 <td>
                         <label for="BX_age">Faculty Contact</label>
						<input type="text"  class="small"  name="fac_cont[]">
							
						 </td>
						 <td>
                         <label for="BX_age">Course Duration</label>
						<input type="text"  class="small"  name="cour_dur[]">
						 </td>
							</p>
                    </tr>
                    </tbody>
                </table>

	<div class="form-group">
		<label for="education_content">Institution Content</label>
		<textarea name="education_content" id="education_content" cols="30" rows="10" class="form-control"></textarea>
		
	</div>

    <div class="form-group">
		<label for="course_seats">Seats Available</label>
		<input type="text" name="course_seats" id="course_seats" class="form-control" placeholder="0-120">
		
	</div>

    <div class="form-group">
		<label for="education_ach">Institution Achievements</label>
		<input type="text" name="education_ach" id="education_ach" class="form-control" placeholder="Top Percentage">
		
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
     $edu_title = $_POST['education_title'];
     $post_owner = $_POST['post_owner'];
     $edu_tags = $_POST['education_tags'];
     $edu_address = $_POST['education_address'];
     $edu_phno = $_POST['education_phoneno'];
     $edu_head=$_POST['education_head'];
     $edu_ach=$_POST['education_ach'];
     $cour_seats=$_POST['course_seats'];
     $post_status = 'pending';
     $edu_image1 = $_FILES['education_image1']['name'];
	 $edu_tmp_image1 = $_FILES['education_image1']['tmp_name'];

	 $edu_image2 = $_FILES['education_image2']['name'];
	 $edu_tmp_image2 = $_FILES['education_image2']['tmp_name'];
	 
	 $edu_image3 = $_FILES['education_image3']['name'];
	 $edu_tmp_image3 = $_FILES['education_image3']['tmp_name'];
	 
	 
	 	 
   
     $fac_name = $_POST['fac_name'];
     
     $cour_name = $_POST['cour_name'];
    
     $fac_cont=$_POST['fac_cont'];
    
     $cour_dur = $_POST['cour_dur'];
     
     $edu_content = $_POST['education_content'];
     $cour_seats=$_POST['course_seats'];
     $edu_ach=$_POST['education_ach'];
	 $post_date = date('d-m-y');
	 
	 
     $facname_len=count($fac_name);
     $courname_len=count($cour_name);
     $faccont_len=count($fac_cont);
     $courdur_len=count($cour_dur);
  
     $record=array();
	 $fields=array();
	 $values=array();

	 move_uploaded_file($edu_tmp_image1, "../images/$edu_image1");
	 move_uploaded_file($edu_tmp_image2, "../images/$edu_image2");
	 move_uploaded_file($edu_tmp_image3, "../images/$edu_image3");

    

	$sql="insert into education(e_name,e_img,e_add,e_contact,e_head,e_about) values('$edu_title','$edu_image1',' $edu_address','$edu_phno',' $edu_head','$edu_content')";
	if(mysqli_query($connection,$sql))
	{
		
	}
	$eid=mysqli_insert_id($connection);


	$query="INSERT INTO education_images(e_id,e_img)";
	$query.="VALUES ('$eid','$edu_image1'),('$eid','$edu_image2'),('$eid','$edu_image3')";

	

	

	if(mysqli_query($connection,$query))
	{
		
	}

	for($i=0;$i<$courname_len;$i++)
	{     
		
	   $query2 = "INSERT INTO courses(c_name,c_dur,c_noseats,c_ach,e_id) VALUES ('$cour_name[$i]','$cour_dur[$i]','$cour_seats','$edu_ach','$eid')";
	   $res1=mysqli_query($connection,$query2);  
	   $id=mysqli_insert_id($connection);
	
	   $query4="INSERT INTO teachers(t_name,t_contact,c_id,e_id) values ('$fac_name[$i]','$fac_cont[$i]','$id','$eid')";
	   $res3=mysqli_query($connection,$query4);
	  

	}
   

	}
    
    
  

 ?>
