<?php

    require_once '../config/init.php';

    $perPage = 20; 
    $page    = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start   = ($page > 1) ? ($page * $perPage) - $perPage : 0;  
    $articles = get($start, $perPage);

    $prev = $page - 1;
    $next = $page + 1;

    $result  = all();
    $total   = mysqli_num_rows($result);
    $pages   = ceil($total/$perPage);

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
                                    <a class="text-primary" href="show.php?id=<?php echo $item->id; ?>">
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

                <nav aria-label="Page navigation example" class="mt-5">
                    <ul class="pagination justify-content-center">
                        <?php for($pageNumber = 1; $pageNumber <= $pages; $pageNumber++){ ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $pageNumber; ?>"><?php echo $pageNumber; ?></a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>

            <?php require_once '../layouts/sidebar.php'; ?>
          </div>
        </div>

    </body>
    
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</html>