<?php

    require_once '../config/init.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $articles = byKategori($id);
    } else {
        header('Location: ../artikel/index.php');
    }

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
                <div class="card-columns">
                    <?php while($item = mysqli_fetch_object($articles)) { ?>
                        <div class="card" style="width: 18rem;">
                            <?php if(!empty($item->image)) { ?>
                                <img class="card-img-top" src="../assets/images/<?php echo $item->image; ?>" alt="Card image cap">
                            <?php } ?>

                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="show.php?id=<?php echo $item->id; ?>">
                                        <?php echo ucwords($item->judul); ?>
                                    </a>
                                </h5>

                                <p class="card-text">
                                    <?php echo excerpt($item->konten); ?>
                                </p>

                                <a href="show.php?id=<?php echo $item->id; ?>" class="btn btn-primary">Selengkapnya</a>
                            </div>

                            <div class="card-footer">
                                <small class="text-muted">
                                    <?php 
                                        $date = date_create($item->created_at);
                                        echo date_format($date, 'F j, Y'); 
                                    ?>.

                                    <?php echo $item->kategori; ?>
                                </small>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <?php require_once '../layouts/sidebar.php'; ?>
          </div>
        </div>

    </body>
    
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</html>