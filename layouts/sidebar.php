<?php

    require_once '../config/init.php';
    $newArticles = new_article(5);
    $favoriteArticles = favorite(5);
?>

<div class="col-md-3 col-xs-12">
    <div class="card mb-3">
        <div class="card-header text-center">
            <h6 class="card-title">Berita Terbaru:</h6>
        </div>

        <div class="list-group">
            <?php while($item = mysqli_fetch_object($newArticles)) { ?>
                <a href="show.php?id=<?php echo $item->id; ?>" class="list-group-item list-group-item-action flex-column">
                    <div class="d-flex w-100 justify-content-between">
                        <div class="row">
                            <div class="col-4">
                                <img src="../assets/images/<?php echo $item->image; ?>" alt="" class="w-100">
                            </div>

                            <div class="col-8">
                                <h6 class="mb-1" style="color: blue;">
                                    <?php echo $item->judul; ?>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <small class="float-right">
                        <?php 
                            $date = date_create($item->created_at);
                            echo date_format($date, 'F j, Y'); 
                        ?>
                    </small>
                </a>
            <?php } ?>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card-header text-center">
            <h6 class="card-title">Berita Terpopuler:</h6>
        </div>

        <div class="list-group">
            <?php while($item = mysqli_fetch_object($favoriteArticles)) { ?>
                <a href="show.php?id=<?php echo $item->id; ?>" class="list-group-item list-group-item-action flex-column">
                    <div class="d-flex w-100 justify-content-between">
                        <div class="row mb-2">
                            <div class="col-4">
                                <img src="../assets/images/<?php echo $item->image; ?>" alt="" class="w-100">
                            </div>

                            <div class="col-8">
                                <h6 class="mb-1">
                                    <?php echo $item->judul; ?>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <small class="float-right">
                        <?php 
                            $date = date_create($item->created_at);
                            echo date_format($date, 'F j, Y'); 
                        ?>
                    </small>
                </a>
            <?php } ?>
        </div>
    </div>
</div>