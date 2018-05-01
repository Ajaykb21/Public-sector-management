<?php 
 session_start();
?>
<?php 
//   echo  $_SESSION['id'];
//   echo $id;
  $img = array();
  $i=0;
   $demo =  $_GET['id'];

$query = "SELECT * FROM education_images WHERE e_id = '$demo' ";

  $res = mysqli_query($connection,$query) ;


  
      while($row=mysqli_fetch_assoc($res))
      {
          $img[$i] = $row['e_img'];
          
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
                        $query = "SELECT e_name,e_add,e_contact FROM education WHERE e_id = '$id' ";
                        $res = mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $e_name=$row['e_name'];
                            $e_addr=$row['e_add'];
                            $e_phone =$row['e_contact'];

                            echo "<h1 class='hfont'>{$e_name}</h1>";
                            echo "<h3 class='tfont'>{$e_addr}</h3>";
                            echo "<h3>{$e_phone}</h3>";
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
                             $query = "SELECT e_about FROM education WHERE e_id = '$id'";
                             $res=mysqli_query($connection,$query);
                             while($row=mysqli_fetch_assoc($res))
                             {
                                 $e_about=$row['e_about'];
                                 echo "<p class='pgraph'>{$e_about}</p>";
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
                            $query="SELECT * FROM courses c INNER JOIN teachers t  ON c.c_id=t.e_id  WHERE c.e_id='$id' GROUP BY t.t_name ";
                            $res=mysqli_query($connection,$query) OR die('query failed');
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $t_name=$row['t_name'];
                                $c_name=$row['c_name'];
                                $t_contact=$row['t_contact'];

                                echo "<h2 class='adj'>{$t_name}</h2>";
                                echo "<h4 class='lfont adj'>{$c_name}</h4>";
                                echo "<h4 class='lfont adj'>{$t_contact}</h4>";


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