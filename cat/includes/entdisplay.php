<?php 
 session_start();
?>
<?php 
//   echo  $_SESSION['id'];
//   echo $id;
  $img = array();
  $i=0;
   $demo =  $_GET['id'];
//    $query = "SELECT * FROM health_images WHERE health_id = ' " .($_SESSION['id'])." ' ";
$query = "SELECT * FROM health_images WHERE health_id = '$demo' ";

  $res = mysqli_query($connection,$query) ;
//   $res = mysqli_query($connection,$query) OR die('query failed');

  
      while($row=mysqli_fetch_assoc($res))
      {
          $img[$i] = $row['health_image'];
          
          $i = $i+1;


      }


?>

<div class="slideshow-container ">
                            
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/<?php echo $img[0];?>" class="imgsize">
        <div class="text">Caption Text</div>
    </div>
                            
    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
            <img src="images/<?php echo $img[1];?>" class="imgsize">
        <div class="text">Caption Two</div>
    </div>
                            
    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/<?php echo $img[2];?>" class="imgsize">
        <div class="text">Caption Three</div>
    </div>
                            
</div>
                    
<div  style="text-align:center; padding:-10%;">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
</div>
                            
 <script>
    var slideIndex = 0;
    showSlides();
                            
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
        }
        </script>

        <section>
            <div class="infocon" style="background-color:rgb(248, 248, 248)" >            <!--div for info container-->
                <div class=" adjust ">                         <!--full info-->
                    <div> 
                        <?php
                        $id = $_GET['id'];
                        $query = "SELECT health_name,health_address,health_phone_no FROM healthcare WHERE health_id = '$id' ";
                        $res = mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $h_name=$row['health_name'];
                            $h_addr=$row['health_address'];
                            $h_phone =$row['health_phone_no'];

                            echo "<h1 class='hfont'>{$h_name}</h1>";
                            echo "<h3 class='tfont'>{$h_addr}</h3>";
                            echo "<h3>{$h_phone}</h3>";
                        }
                        ?>
                        
                    </div>   
                </div>                                  <!--full info ends here-->

                <div >               <!--description-->
                    <div >
                        <div>
                            <h1 class="gcolor adjust" >About</h1>
                            <?php
                             $id = $_GET['id']; 
                             $query = "SELECT health_about FROM healthcare WHERE health_id = '$id'";
                             $res=mysqli_query($connection,$query);
                             while($row=mysqli_fetch_assoc($res))
                             {
                                 $h_about=$row['health_about'];
                                 echo "<p class='pgraph'>{$h_about}</p>";
                             }

                             
                            ?>
                            
                        </div>
                    </div>    
                </div>              <!--description ends-->

                <div >                 <!-- department details-->
                    <h1 class=" gcolor adjust"> Faculty Details</h1>
                                       
                        <div class="infocon1" style="background-color:rgb(250, 250, 250)">
                            <?php
                            $id = $_GET['id'];
                            $query="SELECT * FROM departments dp INNER JOIN doctors d  ON d.dept_id=dp.dept_id  WHERE dp.health_id='$id' GROUP BY d.doc_name ";
                            $res=mysqli_query($connection,$query) OR die('query failed');
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $d_name=$row['doc_name'];
                                $dp_name=$row['dept_name'];
                                $d_specl=$row['doctor_specs'];

                                echo "<h2 class='adj'>{$d_name}</h2>";
                                echo "<h4 class='lfont adj'>{$dp_name}</h4>";
                                echo "<h4 class='lfont adj'>{$d_specl}</h4>";


                            }
                            ?>

                           
                        </div>

                       

                </div>                <!-- department details ends-->

                <br>
                <br>
                <br>
                <br>


                                









            </div>                <!--div for info container ends here-->
     </section>