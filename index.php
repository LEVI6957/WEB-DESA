<?php 
    include "config/config.php";

    // Redirect if no page is set
    if (!isset($_GET['page'])) {
        header("location: index.php?page=beranda");
        exit; // Ensure no further code is executed after redirection
    }

    // Fetch data from the database
    $sql = mysqli_query($con, "SELECT * FROM tbl_organisasi");

    if (!$sql) {
        die("Query failed: " . mysqli_error($con));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESA CANGKRING</title>

    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        /* Custom dropdown background */
        .navbar .dropdown-menu {
            background-color: #000;
        }
        /* Custom dropdown link color */
        .navbar .dropdown-menu .dropdown-item {
            color: #fff;
        }
        /* Change dropdown link color on hover */
        .navbar .dropdown-menu .dropdown-item:hover {
            background-color: #444;
            color: #fff;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-dark p-2">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/img/logo-sidoarjo.png" width="30" height="30" alt="Logo Sidoarjo">
            &nbsp; <span>DESA CANGKRING</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?page=beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=struktur-organisasi">Struktur Organisasi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil Desa
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item" href="index.php?page=visimisi">Visi & Misi</a></li>
                <li><a class="dropdown-item" href="index.php?page=sejarah">Sejarah Desa</a></li>
                <li><a class="dropdown-item" href="index.php?page=geografis">Geografis Desa</a></li>
                <li><a class="dropdown-item" href="index.php?page=demografis">Demografis Desa</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Layanan
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <li><a class="dropdown-item" href="index.php?page=berita">Berita</a></li>
                <li><a class="dropdown-item" href="index.php?page=pengumuman">Pengumuman</a></li>
                <li><a class="dropdown-item" href="index.php?page=galeri">Galeri</a></li>
                <li><a class="dropdown-item" href="index.php?page=eperpus" target="_blank">E-Perpustakaan</a></li>

              </ul>
            </li>
          </ul>
          <!-- Button Login -->
          <a href="admin/login.php" class="btn btn-outline-light ms-auto">Login</a>
        </div>
      </div>
    </nav>

    <header id="header">
        <div class="d-flex align-items-center p-3">
            <div class="container header-box mt-3">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="assets/img/logo-sidoarjo.png" width="80" height="80" class="img-fluid" alt="Logo Sidoarjo">
                        <h3 class="mt-2">SELAMAT DATANG DI WEBSITE DESA CANGKRING</h3>
                        <p>"Website desa dibangun dengan tujuan sebagai media pelayanan publik resmi desa, yang dibangun dan dikelola oleh tim desa setempat. Dengan memanfaatkan website penyelenggaraan pelayanan publik dapat dilakukan secara cepat dan mudah"</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="sec-article" class="mt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= isset($_GET['page']) ? $_GET['page'] : 'beranda' ?></li>
              </ol>
            </nav>

            <div class="row mt-3">
            <?php 
                $page = isset($_GET['page']) ? $_GET['page'] : 'beranda';

                switch ($page) {
                    case 'beranda':
                        include "kategori/beranda.php";
                        break;

                    case 'berita':
                        include "kategori/berita.php";
                        break;

                        case 'detail-berita':
                          include "kategori/detail-berita.php";
                          break;

                    case 'detail':
                        include "kategori/detail-post.php";
                        break;

                    case 'galeri':
                        include "kategori/galeri.php";
                        break;

                    case 'struktur-organisasi':
                        include "kategori/struktur-organisasi.php";
                        break;

                        case 'visimisi';
                        include "kategori/visimisi.php";
                        break;
                        
                        case 'eperpus';
                        include "kategori/eperpus.php";
                        break;

                        case 'demografis';
                        include "kategori/demografis.php";
                        break;

                        case 'geografis';
                        include "kategori/geografis.php";
                        break;

                        case 'pengumuman';
                        include "kategori/pengumuman.php";
                        break;

                        case 'detail-pengumuman':
                          include "kategori/detail-pengumuman.php";
                          break;

                        case 'sejarah';
                        include "kategori/sejarahdesa.php";
                        break;


                        case 'page';
                        include "kategori/page.php";
                        break;

                    default:
                        echo "<center><h3>Maaf. Halaman tidak ditemukan!</h3></center>";
                        break;
                }
             ?>
              
              <section class="location-section">
                <h3 style="text-align: center;">
                  
                </h3>
            <h3 style="text-align: center;">LOKASI DESA CANGKRING</h3>
            <div class="map-container" style="text-align: center;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6101039248974!2d110.65197811436138!3d-7.107463794887926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba1d8c7e3ef%3A0x50b1e4a5b08f9bdf!2sCangkring%2C%20Karanganyar%2C%20Demak%20Regency%2C%20Central%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1596026396498!5m2!1sen!2sid" width="1150" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
            </div>
        </div>
    </section>
    <footer id="footer" class="mt-5 p-3 bg-dark">
        <div class="container text-center">
            <p class="text-white">&copy; Created with ❤️ by UNNES GIAT 9 and RTS Tech</p>
        </div>
    </footer>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>
