<?php
include 'connection.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font awesome link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- font family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Hope Builders Foundation</title>
  </head>
  <body>
    <!-- header section code start -->
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><h1 class="logo">Online Charity</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navjustify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="event.php">Events</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>

                <!--<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Staff
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Sign in</a></li>
                    <li><a class="dropdown-item" href="#">Sign up</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Member
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Sign in</a></li>
                    <li><a class="dropdown-item" href="#">Sign up</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Donor
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Sign in</a></li>
                    <li><a class="dropdown-item" href="#">Sign up</a></li>
                  </ul>
                </li> -->
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- header section code end -->

    <!-- banner section code start -->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="b-content">
              <div class="b-text">
                <h1>Join hands for a brighter tomorrow</h1>
                <p>With your help and support we can help more people. <br> Join hands for a brighter tomorrow.</p>
                <a href="donate.php"><button class="banner-btn">Donate Now</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner section code end -->

    <!-- about us section code start -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="about-title text-center">
              <h2>What We Do?</h2>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>

        <div class="row">
          <div class="col-md-4 my-4">
            <div class="a-item">
              <i class="fa fa-cutlery"></i>
              <h3>Raise fund for healthy food</h3>
              <p>All table variants then set that custom property to colorize the table cells. This way, we don’t get into trouble if semi-transparent colors are used as table backgrounds.</p>
            </div>
          </div>
          <div class="col-md-4 my-4">
            <div class="a-item">
              <i class="fa fa-heartbeat"></i>
              <h3>Provide medical facilities</h3>
              <p>All table variants then set that custom property to colorize the table cells. This way, we don’t get into trouble if semi-transparent colors are used as table backgrounds.</p>
            </div>
          </div>
          <div class="col-md-4 my-4">
            <div class="a-item">
              <i class="fa fa-handshake-o"></i>
              <h3>Help the homeless people</h3>
              <p>All table variants then set that custom property to colorize the table cells. This way, we don’t get into trouble if semi-transparent colors are used as table backgrounds.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 my-4">
            <div class="a-item">
              <i class="fa fa-home"></i>
              <h3>Old people</h3>
              <p>All table variants then set that custom property to colorize the table cells. This way, we don’t get into trouble if semi-transparent colors are used as table backgrounds.</p>
            </div>
          </div>
          <div class="col-md-4 my-4">
            <div class="a-item">
              <i class="fa fa-graduation-cap"></i>
              <h3>Education for poor children</h3>
              <p>All table variants then set that custom property to colorize the table cells. This way, we don’t get into trouble if semi-transparent colors are used as table backgrounds.</p>
            </div>
          </div>
          <div class="col-md-4 my-4">
            <div class="a-item">
              <i class="fa fa-usd"></i>
              <h3>Donation to poor</h3>
              <p>All table variants then set that custom property to colorize the table cells. This way, we don’t get into trouble if semi-transparent colors are used as table backgrounds.</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- about us section code end -->

    <!-- footer section code start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 f-title">
            <h1 class="logo">Online Charity</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="f-content-left">
              <p>With just a few clicks, you can make a meaningful difference from the comfort of your home. Our secure and user-friendly online platform allows you to donate, share, and connect with our mission seamlessly.</p>
              <div class="f-icon">
                <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
    					  <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
    				  </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="f-content-right">
              <h3>Contact Info</h3>
              <div class="d-flex f-contact">
                <span><i class="fa fa-map-marker"></i></span>
                <span> Plot # 15 Block B, Bashundhara R/A. Dhaka‐1229</span>
              </div>
              <div class="d-flex f-contact">
                <span><i class="fa fa-phone"></i></span>
                <span>+880 12345 6789</span>
              </div>
              <div class="d-flex f-contact">
                <span><i class="fa fa-envelope"></i></span>
                <span>admin@info.com</span>
              </div>
              <div class="a-btn">
                <a href="admin/index.php"><button class="admin-btn">Admin Login</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section code end -->


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

