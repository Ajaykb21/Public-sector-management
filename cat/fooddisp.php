<?php 
  include "includes/connect.php";
?>

<html>
    <?php 
        include "includes/foodheaddisp.php";
    ?>

    <body>
        <div>
            <header>
                <?php
                    include "includes/navbar.php"; 
                ?>
            </header>

            <div style="margin-top:-1.5%;">                                 
                <div class="col-sm-1">   
                <h1></h1>
            </div>
            
            <div class="col-sm-8 main1" >  

             <?php 
              include "includes/fooddisplay.php";
             ?>

            <?php
               include "includes/comment.php";
            ?>

            </div>
        </div>
    </div>
</body>
</html>