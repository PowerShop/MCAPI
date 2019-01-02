<?php
    session_start();
    include_once('../sys/header.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Test Function</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body class="col-md-12 mx-auto mt-3 text-center font">
    <div class="card text-white bg-success">
      <img class="card-img-top" alt="">
      <div class="card-body">
        <h4 class="card-title">Profile</h4>
        <p class="card-text">Your Profile!</p>
      </div>
    </div>
    <div class="card mt-2">
        <img class="card-img-top" alt="">
        <div class="card-body">
            <!-- <h4 class="card-title"></h4> -->
            <p class="card-text">Username : <?php @ini_set('display_errors', '0'); echo $_SESSION['user']; ?><br />Point : 0</p>
        </div>
    </div>
    <!-- PHP -->
        <?php
            @ini_set('display_errors', '0');
                use Min\MinMin;

                    require_once __DIR__ . '/src/ApiClass.php';

                    $api = new MinMin();

                        $username = $_GET['user'];
                        $password = $_GET['pass'];
                        
                        if(!isset($_SESSION['user']))
                        {
                            $api->Login($username,$password);
                        }
                            if(isset($_SESSION['user']))
                            {
                                // echo $_SESSION['user'];
                            }                        
                            ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
