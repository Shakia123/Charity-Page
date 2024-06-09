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
    <title>Admin</title>
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
                  <a class="nav-link active" aria-current="page" href="index.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="volunteerinfo.php">Volunteer Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="donorInfo.php">Donor Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Event.html">Events</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- header section code end -->

    <!-- banner2 section code start -->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="b-content text-left">
            <h1>Donor Information</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- banner2 section code end -->

    <!-- table section code start -->
    <section id="info-table">
        <div class="container">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        <?php 
                        $sql2 = "SELECT * FROM userinfo";
                        $res2 = mysqli_query($con, $sql2);

                        $serial = 0;

                        while($row  = mysqli_fetch_assoc($res2)){
                            $id      = $row['id'];
                            $name    = $row['name'];
                            $email   = $row['email'];
                            $phone   = $row['phone'];
                            $address = $row['address'];
                            $pass    = $row['Password'];

                            $serial++;

                            ?>

                            <tr>
                                <th scope="row"><?php echo $serial; ?></th>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $phone; ?></td>
                                <td><?php echo $address; ?></td>
                                <td><?php echo $pass; ?></td>
                                <td>
                                    <a href="editDonor.php?editid=<?php echo $id;?>"class="badge bg-success">Edit</a>
                                    <a href="donorinfo.php?delid=<?php echo $id;?>"class="badge bg-danger">Delete</a>

                                </td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- table section code end -->


    <?php 
    
    if(isset($_GET['delid'])){

        $delet_id = $_GET['delid'];

        $sql3 = "DELETE FROM userinfo WHERE id = '$delet_id'";
        $res3 = mysqli_query($con, $sql3);

        if($res3){
          header('Location: donorInfo.php');
          exit();
        }else{
            echo 'Not deleted';
        }
    }

    ob_end_flush();
    ?> 


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>