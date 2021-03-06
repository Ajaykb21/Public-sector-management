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
                            Blank Page
                            <small>Subheading</small>
                        </h1>

                        <div class="col-xs-6">
                            <form action="" method="post" >
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input type="text" name="cat_title" id="cat-title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input class="form-control btn btn-primary" type="submit" name="Add Category" value="Add Category">
                                </div>
                            </form>
                        </div>

                        <div class="col-xs-6">

                            <?php 
                              $query = "SELECT * FROM categories";
                              $cat_rows = mysqli_query($connection,$query);




                             ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                                           while($row = mysqli_fetch_assoc($cat_rows))
                                           {
                                            $cat_id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];

                                            echo "<tr>";

                                            echo "<td>{$cat_id}</td>";
                                            echo "<td>{$cat_title}</td>";

                                            echo "</tr>";
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