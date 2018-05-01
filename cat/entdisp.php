<?php 
  include "includes/connect.php";
?>

<html>
    <?php 
        include "includes/entheaddisp.php";
    ?>

    <body>
        <div>
            <header>
                <?php
                    include "includes/navbar.php"; 
                ?>
            </header>

            <div style="margin-top:-1.5%;">                                 
                <div class="col-sm-1" style="background-color:darkorchid;">   
                <h1>hi</h1>
            </div>
            
            <div class="col-sm-8 main1" >  

             <?php 
              include "includes/entdisplay.php";
             ?>

             <?php
               include "includes/comment.php";
            ?>

            </div>
        </div>
    </div>
</body>
</html>