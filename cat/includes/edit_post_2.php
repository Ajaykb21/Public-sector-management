<?php

 if($_GET['hid'] && $_GET['did'] &&$_GET['doid'])
 {

    $i=0;
    $j=0;
     $hid=$_GET['hid'];
     $did=$_GET['did'];
     $ddid=$_GET['doid'];
     $sql1 = "SELECT * FROM healthcare where h_id='$hid'";
     $sql2="SELECT * FROM departments where dept_id='$did'"; 
     $sql3="SELECT * FROM doctors where doc_id='$ddid'";
     $res1=mysqli_query($connection,$sql1);
     $res2=mysqli_query($connection,$sql2);
     $res3=mysqli_query($connection,$sql3);
     if($res1&&$res2&&$res3)
     {
         while($row=mysqli_fetch_assoc($res1))
         {
             $hname=$row['h_name'];
             $hadd=$row['h_add'];
             $hpno=$row['h_contact'];
             $himg=$row['h_img'];
             $habout=$row['h_about'];
         }

         while($row=mysqli_fetch_assoc($res2))
         {
             $dpname=$row['dept_name'];
         }

         while($row=mysqli_fetch_assoc($res3))
         {
             $dname=$row['doc_name'];
             $docspec=$row['doc_spec'];
         }
     }
 }

?>


<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="hospital_title">Hospital Name</label>
		<input type="text" name="hospital_title" value="<?php echo $hname; ?>" id="hospital_title" class="form-control">
		
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
		<label for="hospital_address">Hospital Address</label>
		<input type="text" name="hospital_address" value="<?php echo $hadd;?>" id="hospital_address" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="hospital_phoneno">Hospital Contact No</label>
		<input type="text" name="hospital_phoneno" value="<?php echo $hpno;?>" id="hospital_phoneno" class="form-control">
		
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
                            
							<input type="text" required="required" value="<?php echo $dname;?>" name="doc_name">
						 </td>
						 <td>
							<label for="BX_age">Department Name</label>
							<input type="text" required="required" class="small" value="<?php echo $dpname;?>" name="dept_name">
					     </td>
						 <td>
                         
						 <td>
                         <label for="BX_age">Doctor's Specialization</label>
						<input type="text"  class="small"  name="doc_specs" value="<?php echo $docspec;?>">
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
		<input type="submit" class="btn btn-primary" name="update_post" value="Update_Post">
		
	</div>

   

</form>

<?php 
 if(isset($_POST['update_post']))
 {
    $hname=$_POST['hospital_title'];
    $hadd=$_POST['hospital_address'];
    $hpno=$_POST['hospital_phoneno'];
    $hos_image = $_FILES['hospital_image']['name'];
    echo $hid;
  
    $hos_tmp_image = $_FILES['hospital_image']['tmp_name'];
    move_uploaded_file($hos_tmp_image, "../images/$hos_image");
    $dname=$_POST['doc_name'];
    $dpname=$_POST['dept_name'];
    $dspec=$_POST['doc_specs'];
    $habout=$_POST['hospital_content'];

    $sql1 = "UPDATE healthcare SET h_name='$hname',h_add='$hadd',h_contact='$hpno',h_about='$habout' WHERE h_id='$hid' ";
    $res1=mysqli_query($connection,$sql1);
    if($res1)
    {
        echo "success";
    }

    $sql2="UPDATE departments SET dept_name='$dpname' WHERE dept_id='$did'";
    $res2=mysqli_query($connection,$sql2);
    if($res2)
    {
        echo "dep success";
    }

    $sql3="UPDATE doctors SET doc_name='$dname',doc_spec='$dspec' WHERE doc_id='$ddid'";
    $res3=mysqli_query($connection,$sql3);
    if($res3)
    {
        echo "doctors success";
    }
 }

?>