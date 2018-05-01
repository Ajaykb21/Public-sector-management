<?php 
  include "includes/admin_header.php";
 ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include "includes/admin_navigation.php"; ?>




        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome Owner
                            <small>Owner's Name</small>
                        </h1>

                     

                      

                              <?php 

                              if(isset($_GET['source']))
                       {
                        $source = $_GET['source'];
                       }
                       else
                       {
                        $source = '';
                       }
                       switch($source)
                       {
                        case 'add_post_health': include "includes/add_post_health.php" ; break;
                        case 'add_post_education': include "includes/add_post_education.php" ; break;
                        case 'add_post_transport': include "includes/add_post_transport.php" ; break;                        
                        case 'add_post_food and boarding': include "includes/add_post_food and boarding.php" ; break;
                        case 'add_post_tourism': include "includes/add_post_tourism.php" ; break;

                        case 'update_post_health': include "includes/update_post_health.php" ; break;
                        case 'update_post_transport': include "includes/update_post_transport.php" ; break;
                        case 'update_post_education': include "includes/update_post_education.php" ; break;
                        case 'update_post_foodboarding': include "includes/update_post_foodboarding.php" ; break;
                        case 'update_post_tourism': include "includes/update_post_tourism.php" ; break;
                        case 'edit_post_h': include "includes/edit_post_h.php" ; break;
                        case 'edit_post_e': include "includes/edit_post_e.php" ; break;
                        case 'edit_post_t': include "includes/edit_post_t.php" ; break;
                        case 'edit_post_to': include "includes/edit_post_to.php" ; break;
                        case 'edit_post_fb': include "includes/edit_post_fb.php" ; break;
                        
                      }

                      ?>
 
                            </tbody>
                       </table>
                       


                      
                       

                       

                    
                      
                    </div>
                       
                </div>
            </div>
                <!-- /.row -->

        </div>
            <!-- /.container-fluid -->

    </div>
        <!-- /#page-wrapper -->

    <?php 
       include "includes/admin_footer.php";
     ?>