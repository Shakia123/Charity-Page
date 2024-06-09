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

    <!-- login section code start -->
    <section id="login">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="l-img">
              <img src="img/log1.png" alt="">
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="l-title">
              <h1>Admin Login</h1>
            </div>
            <div class="l-form">
              <form method="post">
                <div class="form-group"> 
                  <input type="text" name="fullname" placeholder="Full Name">
                </div>
                <div class="form-group"> 
                  <input type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group"> 
                  <input type="password" name="password" placeholder="Password">
                </div>
                <div>
                  <input type="submit" class="l-btn" value="Login"  name="log">
                    
                </div>
              </form>

              <?php
                if(isset($_POST['log'])){
                  $name   = $_POST['fullname'];
                  $email  = $_POST['email'];
                  $pass   = $_POST['password'];

                  //echo $name.' '.$email.' '.$pass;
                  
                  $mailcheck = "SELECT a_email FROM admin WHERE a_email = '$email'";
                  $mailcheck_res = mysqli_query ($con, $mailcheck);
                  $mailcount = mysqli_num_rows($mailcheck_res);

                  if($mailcount > 0){
                    echo 'This Email already exists!';
                  }else{

                    $add_user_sql = "INSERT INTO admin (a_name, a_email , a_password) 
                    VALUES ('$name', '$email', '$pass')";
                    $addUserRes = mysqli_query ($con, $add_user_sql);

                    if($addUserRes){
                      header('Location: donorInfo.php');
                      exit();
                    }else{
                      echo 'Error!!';
                    }
                  }
                }
                ob_end_flush();

              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- login section code end -->
    
</body>
</html>