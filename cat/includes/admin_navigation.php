 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MyCity Admin</a>
            </div>


            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>



                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ajay K B <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Insert <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                           
                            <li>
                                <a href="./posts.php?source=add_post_health">Add Health Care Post</a>
                            </li>
                              <li>
                                <a href="./posts.php?source=add_post_education">Add Education Post</a>
                            </li>
                              <li>
                                <a href="./posts.php?source=add_post_transport">Add Transport Post</a>
                            </li>
                              <li>
                                <a href="./posts.php?source=add_post_food and boarding">Add Food and Boarding Post</a>
                            </li>
                              <li>
                                <a href="./posts.php?source=add_post_tourism">Add Tourism Post</a>
                            </li>
                              
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown1"><i class="fa fa-fw fa-arrows-v"></i> Update <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown1" class="collapse">
                            
                            <li>
                                <a href="./posts.php?source=update_post_health">Update Health Care Post</a>
                            </li>
                              <li>
                                <a href="./posts.php?source=update_post_education">Update Education Post</a>
                            </li>
                              <li>
                                <a href="./posts.php?source=update_post_transport">Update Transport Post</a>
                            </li>
                              <li>
                                <a href="./posts.php?source=update_post_foodboarding">Update Food and Boarding Post</a>
                            </li>
                              <li>
                                <a href="./posts.php?source=update_post_tourism">Update Tourism Post</a>
                            </li>
                            <li>
                                <a href="./posts.php?source=edit_post_h">Edit Post Health</a>
                            </li>

                            <li>
                                <a href="./posts.php?source=edit_post_e">Edit Post Education</a>
                            </li>

                            <li>
                                <a href="./posts.php?source=edit_post_t">Edit Post Transport</a>
                            </li>

                            <li>
                                <a href="./posts.php?source=edit_post_to">Edit Post Transport</a>
                            </li>

                            <li>
                                <a href="./posts.php?source=edit_post_fb">Edit Food and Boarding Transport</a>
                            </li>
                              
                        </ul>
                    </li>
                   
                   
                   
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Categories</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Comments</a>
                    </li>


                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users_dropdown" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>