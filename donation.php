
<?php
ob_start();
include 'connection.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die('User ID is required.');
}
$user_query = "SELECT name FROM userinfo WHERE id = '$id'";
$user_result = mysqli_query($con, $user_query);
$user = mysqli_fetch_assoc($user_result);
if (!$user) {
    die('User not found.');
}
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
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- header section code end -->

    <!-- banner2 section code start -->
    <section id="banner2">
      <div class="container">
        <div class="row">
          <div class="b2-content text-left">
            <h1>Every donation counts</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- banner2 section code end -->
    
    <!-- Donation section code start -->
    <section id="donation">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-form">
                        <h2 class="mb-4">Donante</h2>
                        <form method="post">
                            <div class="form-group mb-2"> 
                                <label class="text-align-left mb-2">Amount</label>
                                <input type="number" name="amount">
                            </div>
                            <div>
                                <input type="submit" class="l-btn" value="Donate"  name="donate">  
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['donate'])) {
                            $amount = $_POST['amount'];

                            // Insert donation with user ID
                            $sql6 = "INSERT INTO amount(id, amount) VALUES ('$id', '$amount')";
                            $res6 = mysqli_query($con, $sql6);

                            if ($res6) {
                                header('Location: index.php');
                                exit();
                            } else {
                                echo 'Error!!';
                            }
                        }
                        ob_end_flush();
                        ?>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    <!-- Donation section code end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>