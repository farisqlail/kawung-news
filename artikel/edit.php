<?php

    require_once '../config/init.php';

    if(!isset($_SESSION['email'])) {
        header('Location: ../artikel/index.php');
    }

    $error = '';
    $kategori = getKategori();

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $article = find($id);
        
        $item = mysqli_fetch_object($article);

        if ($user->role == 0) {
            if($item->user_id != $user->id) {
                header('Location: ../artikel/index.php');
            }
        }

    } else {
        header('Location: index.php');
    }

    if(isset($_POST['submit'])) {
        $data['judul'] = $_POST['judul'];
        $data['kategori'] = $_POST['kategori'];
        $data['konten'] = $_POST['konten'];
        $data['nama_file'] = $_FILES['gambar']['name'];
        $tmp_file = $_FILES['gambar']['tmp_name'];

        if (!empty(trim($data['judul'])) && !empty(trim($data['konten']))) {
            if(strlen($data['judul']) >= 6 && strlen($data['konten']) >= 10) {
                if(update($data, $id)) {
                    if (!empty($data['nama_file']) && $data['nama_file'] != $item->image) {
                        $path = '../assets/images/'.$data['nama_file'];
                        unlink('../assets/images/'.$item->image);
                        move_uploaded_file($tmp_file, $path);
                    }

                    header('Location: index.php');
                } else {
                    $error = 'Ada masalah saat mengedit data!';
                }
            } else {
                $error = 'Judul minimal 6 karakter <br> 
                            Konten minimal 10 karakter';
            }
        } else {
            $error = 'Judul dan Konten tidak boleh kosong!';
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
                        Sunting Artikel
                    </div>

                    <form action="" method="post" enctype="multipart/form-data">
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
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $item->judul; ?>">
                            </div>

                            <div class="form-group">
                                <label for="kategori">Kategori Artikel</label>
                                <select class="form-control" name="kategori" id="kategori" value="<?php echo $item->kategori_id; ?>">
                                    <?php while($field = mysqli_fetch_object($kategori)) { ?>
                                        <option value="<?php echo $field->id; ?>" <?php echo ($field->id == $item->kategori_id)? 'selected' : ''; ?>><?php echo $field->keterangan; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="konten">Konten</label>
                                <textarea class="form-control" name="konten" id="konten"><?php echo planText($item->konten); ?>
                                </textarea>
                            </div>
            
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control" name="gambar" id="gambar">
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