<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mysuru City</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">

  <!-- adding icon to the title -->
  <link rel="shortcut icon" type="" href="img/micon.png">

  <!-- google fonts linking -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet">

  <!-- using font awesome -->
  <link rel="stylesheet" type="" href="css/font-awesome/css/font-awesome.min.css">

  <!-- bootstrap css -->
  <link rel="stylesheet" type="" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- animated css -->
  <link rel="stylesheet" type="" href="css/animation/animate.css">

  <!-- linking css file to html -->
  <link rel="stylesheet" type="" href="css/style.css">
</head>

<body data-targer=".mycity-top-nav" data-spy="scroll" data-offset="65">


  <section id="home">

    <header>
      <nav class="navbar mycity-top-nav navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div id="mycity-nav-wrapper">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mycity-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
           
                  <a class="navbar-brand" href="#home">MyCity</a>
              </div>

              <div class="collapse navbar-collapse" id="mycity-menu">
                <ul class="nav navbar-nav" id="menu-items">
                  <li><a class="smooth-scroll"href="#home">Home</a></li>
                  <li><a class="smooth-scroll"href="#categories">Categories</a></li>
                  <li><a class="smooth-scroll"href="#about">About</a></li>
                  <li><a class="smooth-scroll"href="#overview">Overview</a></li>
                </ul>

                <!-- <ul class="nav navbar-nav navbar-right" id="menu-items">
                  <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul> -->
              </div>

          </div>
          

          

        </div>
      </nav>
    </header>


    <div id="home-cover" class="bg-parallax animated fadeIn">

      <div id="home-content-box">

        <div id="home-content-box-inner" class="text-center">

          <div id="home-heading" class="animated zoomIn">

            <h3>WATCH OUT<br>ENTIRE CITY IN ONE PLACE</h3>

          </div>

          <div id="home-btn" class="animated zoomIn">
            <a class="btn  btn-lg btn-general btn-white" role="button" href="#categories" title="view our website">GO TOUR</a>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- categories section -->

  <section id="categories">
    <div class="content-box">
      <div class="content-header wow animated fadeInDown data-wow-duration="2s" data-wow-delay=".5s" ">
        <h3>Categories</h3>
        <div class="content-header-underline">
        </div>
      </div>
      <div class="container">
        <div class="row wow animated fadeInUp data-wow-duration="2s" data-wow-delay=".5s"">
          <div class="col-lg-4">
            <div class="content-item ">
              <div class="content-item-icon">
                <a href="cat/healthcat.php"><i class="fa fa-hospital-o fa-3x" aria-hidden="true"></i></a>
                
              </div>

              <div class="content-item-title">
                <h3>Hospitals</h3>
              </div>

              <div class="content-item-desc">
                <p>To enjoy the glow of good health, you must exercise.
                    </p>
              </div>

            </div>
          </div>

          <div class="col-lg-4">
              <div class="content-item">
                <div class="content-item-icon">
                  <a href="cat/foodcat.php"><i class="fa fa-cutlery fa-3x" aria-hidden="true"></i></a>
                  
                </div>
    
                <div class="content-item-title">
                  <h3>Food and Boarding</h3>
                </div>
    
                <div class="content-item-desc">
                  <p> The basic needs from which Beyond that, it is the beginning of self-deception.</p>
                </div>
    
              </div>
    
            </div>

               
        <div class="col-lg-4">
            <div class="content-item">
              <div class="content-item-icon">
                <a href="cat/tourcat.php"><i class="fa fa-globe fa-3x" aria-hidden="true"></i></a>
              </div>
  
              <div class="content-item-title">
                <h3>Tourism</h3>
              </div>
  
              <div class="content-item-desc">
                <p>A good traveller has no fixed plans, and is not intent on arriving</p>
              </div>
  
            </div>
  
          </div>

        </div>

   
        <div class="row wow animated fadeInUp data-wow-duration="2s" data-wow-delay=".5s"">
          <div class="col-lg-4">
            <div class="content-item">
              <div class="content-item-icon">
                <a href="cat/educat.php"><i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i></a>
              </div>

              <div class="content-item-title">
                <h3>Education</h3>
              </div>

              <div class="content-item-desc">
                <p>Education is not preperation for life;education is life itself.</p>
              </div>

            </div>

          </div>
          <div class="col-lg-4">
              <div class="content-item">
                  <div class="content-item-icon">
                    <a href="cat/transcat.php"><i class="fa fa-train fa-3x" aria-hidden="true"></i></a>
                  </div>
    
                  <div class="content-item-title">
                    <h3>Transports</h3>
                  </div>
    
                  <div class="content-item-desc">
                    <p>Understading a City is nothing but knowing about public transports</p>
                  </div>
    
                </div>
          </div>
          <div class="col-lg-4">
              <div class="content-item">
                  <div class="content-item-icon">
                    <a href=""><i class="fa fa-film fa-3x" aria-hidden="true"></i></a>
                  </div>
    
                  <div class="content-item-title">
                    <h3>Entertainment</h3>
                  </div>
    
                  <div class="content-item-desc">
                    <p>The use of Entertainment sectors in public is more important than living a faint life</p>
                  </div>
    
                </div>
          </div>
        </div>

      </div>


    </div>
    </div>
  </section>

  <section id="about">

    <!-- about right side image mark up -->
    <div id="about-bg-diagonal" class="bg-parallax">

    </div>

    <!-- about left side content -->
    <div class="container">
      <div class="rows">
        <div class="col-lg-4">
          <div id="about-content-box">
            <div id="about-content-box-outer">
              <div id="about-content-box-inner">
                  <div class="content-header wow animated fadeInDown data-wow-duration="2s" data-wow-delay=".5s" ">
                      <h3>About MyCity</h3>
                      <div class="content-header-underline">
                      </div>
                  </div>

                  <div id="about-desc" class="wow animated fadeInDown data-wow-duration="2s" data-wow-delay=".5s"">
                    <p>A Content Management System which includes information about major public sectors.Our website acts as a rule of thumb for any information they need.The User can have an overview at the bottom.Each Category provides a sequence of results in an order and convienent fashion.</p>
                  </div>

                  <div id="about-btn" class="wow fadeInUp animated data-wow-duration="2s" data-wow-delay=".5s"">
                    <a href="#overview" role="button" class="btn btn-lg btn-general btn-blue">Overview</a>
                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- overview section -->
 <section id="overview">
    <div class="content-box">
        <div class="content-header wow animated fadeInDown data-wow-duration="2s" data-wow-delay=".5s" ">
          <h3>Overview</h3>
          <div class="content-header-underline">
          </div>
        </div>
    </div>

    <div class="container">
      <div class="row wow animated  fadeInUp data-wow-duration="2s" data-wow-delay=".5s"">
        <div class="col-lg-3">
          <div class="img-wrapper">
            <a href="img/use2.jpg">
              <img src="img/use2.jpg" alt="Health Care">
            </a>
          </div>
        </div>
        <div class="col-lg-3">
            <div class="img-wrapper">
                <a href="img/use3.jpg">
                  <img src="img/use3.jpg" alt="Resturants">
                </a>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="img-wrapper">
                <a href="img/use4.jpg">
                  <img src="img/use4.jpg" alt="Food and Boarding">
                </a>
              </div>
        </div>
        <div class="col-lg-3">
          <div class="img-wrapper">
              <a href="img/demo3.jpg">
                <img src="img/demo3.jpg" alt="Tourism">
              </a>
            </div>
      </div>


      </div>

      <div class="row wow animated fadeInUp data-wow-duration="2s" data-wow-delay=".5s"">
          <div class="col-lg-3">
              <div class="img-wrapper">
                  <a href="img/demo4.jpg">
                    <img src="img/demo4.jpg" alt="Health Care">
                  </a>
                </div>
          </div>
          <div class="col-lg-3">
              <div class="img-wrapper">
                  <a href="img/demo5.jpg">
                    <img src="img/demo5.jpg" alt="Health Care">
                  </a>
                </div>
          </div>
          <div class="col-lg-3">
              <div class="img-wrapper">
                  <a href="img/demo6.jpg">
                    <img src="img/demo6.jpg" alt="Health Care">
                  </a>
                </div>
          </div>
          <div class="col-lg-3">
            <div class="img-wrapper">
                <a href="img/demo2.jpg">
                  <img src="img/demo2.jpg" alt="Health Care">
                </a>
              </div>
        </div>
        </div>
    </div>
   
 </section>

 <!-- contact section -->
 <footer>
    <div id="contact">
        <div class="content-box">
          <div class="container-fluid" style="background-color:gray">
            <div class="row">
              <div class="col-lg-1"> 
     
              </div>
     
              <div class="col-lg-4">
                <div class="contact-header">
                  <h3>MyCity</h3>
     
                </div>
     
                <div class="contact-desc">
                  <p style="color:white">A Content Management System which includes information about major public sectors.Our website acts as a rule of thumb for any information they need.The User can have an overview at the bottom.Each Category provides a sequence of results in an order and convienent fashion.</p>
     
                </div>
                <br>
                <br>
     
                <div class="contact-icons">
                  <a href="http://www.facebook.com"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
                  &nbsp;
                  &nbsp;
                  &nbsp;
                  <a href="http://www.youtube.com"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a>
                  &nbsp;
                  &nbsp;
                  &nbsp;
                  <a href="http://www.googleplus.com"><i class="fa fa-google-plus-official fa-3x" aria-hidden="true"></i></a>
                </div>
     
              </div>
     
              <div class="col-lg-1"></div>
              <div class="col-lg-4">
                <div class="contact-header">
                  <h3>Contact Us</h3>
                </div>
                <div class="contact-form-wrapper">
                  <form action="" method="">
                    <div class="form-group">
                      <input type="text" name="fullname" placeholder="fullname" class="form-control">
                      <input type="email" name="email" placeholder="emailid" class="form-control">
                      <textarea name="comments" id="comments" cols="5" rows="8" class="form-control" placeholder="comments"></textarea>
                      <input type="submit" name="submit" value="submit" class=" form-control btn btn-sm">
                    </div>
                  </form>
                </div>
              </div>
     
              <div class="col-lg-2"></div>
     
            </div>

            <div id="footer-bottom">
                
              <!-- <div class="container-fluid"> -->
                  <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                      <div id="footer-menu">
                        <ul>
                          <li><a href="#home">Home</a>/</li>
                          <li><a href="#categories">Categories</a>/</li>
                          <li><a href="#about">About</a>/</li>
                          <li><a href="#overview">Overview</a>/</li>
                          <li><a href="#contact">Contact</a></li>
                        </ul>
                      </div>
                    
                      
                    </div>
                  </div>
                <!-- </div>   -->
      
              </div>


     
          </div>    
        </div>
    </div>

      
 </footer>



  <!-- linking jquery to html -->

  <script src="js/jquery.js">
  </script>

  <!-- bootstrap js -->
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <!-- wow js -->
  <script src="js/wow/wow.min.js"></script>
  <!-- <script>
    new WOW().init();
  </script> -->


  <!-- linking js file to html -->
  <script src="js/custom.js">
  </script>
</body>

</html>