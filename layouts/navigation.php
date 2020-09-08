<?php
  // require_once 'config/init.php';
  // $errors = '';

  $tags = getKategori();
  
  if(isset($_GET['cari'])) {
    $cari = $_GET['cari'];
      
    if(empty(trim($_GET['cari']))) {
      $error = 'Kotak pencarian belum diisi';
    } else {
      $articles = search($cari);
    }
  }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo $base_url; ?>artikel/index.php">
    <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
    Kawung News
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
            if(isset($_SESSION['email'])) { 
              echo ucwords($user->name); 
            } else {
              echo 'Auth';
            }
          ?>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if(isset($_SESSION['email'])) { ?>
            <a class="dropdown-item" href="<?php echo $base_url; ?>auth/profile.php">My Profile</a>
            <a class="dropdown-item" href="<?php echo $base_url; ?>auth/logout.php">Logout</a>
          <?php } else { ?>
            <a class="dropdown-item" href="<?php echo $base_url; ?>auth/register.php">Register</a>
            <a class="dropdown-item" href="<?php echo $base_url; ?>auth/login.php">Login</a>
          <?php } ?>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Artikel
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo $base_url; ?>artikel/index.php">Artikel</a>
          <a class="dropdown-item" href="<?php echo $base_url; ?>artikel/create.php">Terbitkan Artikel</a>
          <!-- <div class="dropdown-divider"></div> -->
          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php while($tag = mysqli_fetch_object($tags)) { ?>
            <a class="dropdown-item" href="<?php echo $base_url; ?>artikel/bykategori.php?id=<?php echo $tag->id; ?>"><?php echo $tag->keterangan; ?></a>
          <?php } ?>
        </div>
      </li>
      
      <?php if(isset($_SESSION['email'])) { ?>
        <?php if($user->role == 1) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Setting Kategori
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $base_url; ?>kategori/index.php">Kategori</a>
              <a class="dropdown-item" href="<?php echo $base_url; ?>kategori/create.php">Tambah Kategori</a>
            </div>
          </li>
        <?php } ?>
      <?php } ?>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form action="../artikel/index.php" method="get" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>