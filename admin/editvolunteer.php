<?php

ob_start();

include 'connection.php';
?>


<!DOCTYPE html>
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
    <title>Charity</title>
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
                  <a class="nav-link" href="volunteerinfo.php">Volunteer Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="donorInfo.php">Donor Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Event.html">Events</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- header section code end -->

    <!-- banner section code start -->
    <section id="banner2">
      <div class="container">
        <div class="row">
          <div class="b-content text-left">
            <h1>Edit Volunteer Information</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- banner section code end -->

    <!-- edit section code start -->
    <section id="edit">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="l-form">

              <?php 
              
              if(isset($_GET['editid'])){

                $editid = $_GET['editid'];

                $sql4 = "SELECT * FROM volunteer WHERE id = '$editid'";
                $res4 = mysqli_query($con, $sql4);

                $row = mysqli_fetch_assoc($res4);

                $name    = $row['name'];
                $email   = $row['email'];
                $phone   = $row['phone'];
                $address = $row['address'];
                $pass    = $row['password'];

                ?>
                <form method="post">
                  <div class="form-group mb-2"> 
                    <input type="text" name="fullname" placeholder="Full Name" value="<?php echo $name;?>">
                  </div>
                  <div class="form-group mb-2"> 
                    <input type="email" name="email" placeholder="Email" value="<?php echo $email;?>">
                  </div>
                  <div class="form-group mb-2"> 
                    <input type="tel" name="Phone" placeholder="Phone Number" value="<?php echo $phone;?>">
                  </div>
                  <div class="form-group mb-2"> 
                    <input type="text" name="address" placeholder="Address" value="<?php echo $address;?>">
                  </div>
                  <div class="form-group mb-2"> 
                    <input type="password" name="password" placeholder="Password" value="<?php echo $pass;?>">
                  </div>
                  <div>
                    <input type="submit" class="l-btn" value="Update Information"  name="update_user">  
                  </div>
                </form>

                <?php

                if(isset($_POST['update_user'])){
                  //echo 'click';

                  $name    = $_POST['fullname'];
                  $email   = $_POST['email'];
                  $phone   = $_POST['Phone'];
                  $address = $_POST['address'];
                  $pass    = $_POST['password'];

                  $sql5 = "UPDATE volunteer SET name='$name', email='$email', phone='$phone', address='$address', Password='$pass'
                  WHERE id = '$editid'";
                  $re5 = mysqli_query($con, $sql5);

                  if($re5){
                    header('Location: volunteerinfo.php');
                    exit();
                  }else{
                    echo 'Error!';
                  }

                }

                ?>

                <?php
              }
              
              ob_end_flush();
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- edit section code end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>