<?php 
 session_start();
?>
<?php 

  $img = array();
  $i=0;
   $demo =  $_GET['id'];

$query = "SELECT * FROM food&boarding_images WHERE f_id = '$demo' ";

  $res = mysqli_query($connection,$query) ;


  
      while($row=mysqli_fetch_assoc($res))
      {
          $img[$i] = $row['fb_img'];
          
          $i = $i+1;


      }


?>

<div class="slideshow-container ">
                            
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/<?php echo $img[0];?>" class="imgsize">
        <div class="text"></div>
    </div>
                            
    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
            <img src="images/<?php echo $img[1];?>" class="imgsize">
        <div class="text"></div>
    </div>
                            
    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/<?php echo $img[2];?>" class="imgsize">
        <div class="text"></div>
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
                        $query = "SELECT f_name,f_add,f_contact,f_web FROM foods WHERE f_id = '$id' ";
                        $res = mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $f_name=$row['f_name'];
                            $f_addr=$row['f_add'];
                            $f_phone =$row['f_contact'];
                            $f_web=$row['f_web'];

                            echo "<h1 class='hfont'>{$f_name}</h1>";
                            echo "<h3 class='tfont'>{$f_addr}</h3>";
                            echo "<h3>{$f_phone}</h3>";
                            echo "<h3>{$f_web}</h3>";
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
                             $query = "SELECT f_about FROM foods WHERE f_id = '$id'";
                             $res=mysqli_query($connection,$query);
                             while($row=mysqli_fetch_assoc($res))
                             {
                                 $h_about=$row['f_about'];
                                 echo "<p class='pgraph'>{$f_about}</p>";
                             }

                             
                            ?>
                           
                        </div>
                    </div>    
                </div>              <!--description ends-->

                <div >                 <!-- department details-->
                    <h1 class=" gcolor adjust"> Details</h1>
                                       
                        <div class="infocon1" style="background-color:rgb(250, 250, 250)">
                            <?php
                            $id = $_GET['id'];
                            $query="SELECT * FROM foods f INNER JOIN boarding b ON f.f_id=b.f_id  WHERE f.f_id='$id' ;
                            $res=mysqli_query($connection,$query) OR die('query failed');
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $f_dist=$row['f_dist'];
                                $f_rating=$row['f_rating'];
                                $bo_fac=$row['bo_fac'];
                                $bo_price=$row['bo_price'];
                                echo "<h3 class='adj'>{$f_dist}</h3>";
                                echo "<h3 class='lfont adj'>{$f_rating}</h3>";
                                echo "<h3 class='lfont adj'>{$bo_fac}</h3>";
                                echo "<h3 class='lfont adj'>{$bo_price}</h3>";
                                


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