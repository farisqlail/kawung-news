<?php

    require_once '../config/init.php';

    if(!isset($_SESSION['email'])) {
        header('Location: ../artikel/index.php');
    }

    $profile = mysqli_fetch_object(get_user($_SESSION['email']));

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kawung News</title>

        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/custom.css">
    </head>
    <body>
        
        <?php require_once '../layouts/navigation.php'; ?>

        <div class="container-fluid">
          <div class="row pt-4">
            <div class="col-md-9 col-xs-12 pl-4">
                <div class="card">
                    <div class="card-header text-center">
                        My Profile
                    </div>
                    
                    
                    <div class="card-body">
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Email: <?php echo $profile->email; ?>
                            </li>

                            <li class="list-group-item">
                                Nama Lengkap: <?php echo $profile->name; ?>
                            </li>

                            <li class="list-group-item">
                                Role: <?php echo ($profile->role > 0) ? 'Administrator' : 'Member'; ?>
                            </li>

                            <li class="list-group-item">
                                Bergabung Pada: <?php echo $profile->created_at; ?>
                            </li>
                          </ul>
                    </div>
                </div>
            </div>

            <?php require_once '../layouts/sidebar.php'; ?>
          </div>
        </div>

    </body>
    
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</html>