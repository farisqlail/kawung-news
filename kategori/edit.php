<?php

    require_once '../config/init.php';

    if(!isset($_SESSION['email'])) {
        header('Location: ../artikel/index.php');
    } else {
        if($user->role != 1) {
            header('Location: ../artikel/index.php');
        }
    }

    $error = '';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $kategori = findKategori($id);
        
        $item = mysqli_fetch_object($kategori);
    } else {
        header('Location: index.php');
    }

    if(isset($_POST['submit'])) {
        $data['keterangan'] = $_POST['keterangan'];

        if (!empty(trim($data['keterangan']))) {
            if(strlen($data['keterangan']) >= 4) {
                if(updateKategori($data, $id)) {
                    header('Location: index.php');
                } else {
                    $error = 'Ada masalah saat mengedit data!';
                }
            } else {
                $error = 'Keterangan kategori minimal 4 karakter!';
            }
        } else {
            $error = 'Keterangan tidak boleh kosong!';
        }
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
                <div class="card">
                    <div class="card-header text-center">
                        Tambahkan Kategori
                    </div>
                    
                    <form action="" method="post">
                        <div class="card-body">
                            <?php if(!empty($error)){ ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo $error; ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $item->keterangan; ?>">
                            </div>
                            
                        </div>

                        <div class="card-footer text-muted text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            <a href="index.php" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>

            <?php require_once '../layouts/sidebar.php'; ?>
          </div>
        </div>

    </body>
    
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</html>