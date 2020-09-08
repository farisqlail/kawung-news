<?php

    require_once '../config/init.php';

    if(!isset($_SESSION['email'])) {
        header('Location: ../artikel/index.php');
    } else {
        if($user->role != 1) {
            header('Location: ../artikel/index.php');
        }
    }
    
    $kategori = getKategori();

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
                <div class="row">
                    <div class="container">
                        <div class="card">
                            <div class="card-header text-center">
                                Table Kategori
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <th>Id</th>
                                            <th>Keterangan</th>
                                            <th>Created At</th>
                                            <th>Jumlah Artikel</th>
                                            <th>Action</th>
                                        </thead>

                                        <tbody>
                                            <?php while($item = mysqli_fetch_object($kategori)) { ?>
                                                <tr>
                                                    <td><?php echo $item->id; ?></td>
                                                    <td><?php echo $item->keterangan; ?></td>
                                                    <td><?php echo $item->created_at; ?></td>
                                                    <td><?php echo $item->jumlah; ?> Post</td>

                                                    <td>
                                                        <a href="edit.php?id=<?php echo $item->id; ?>" class="btn btn-sm btn-success">
                                                            <span class="glyphicon glyphicon-pencil"></span>
                                                            Edit
                                                        </a>

                                                        <a href="delete.php?id=<?php echo $item->id; ?>" class="btn btn-sm btn-danger">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                            Hapus
                                                        </a>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                            </div>

                            <div class="panel-body">
                                
                            </div>

                        </div> -->
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