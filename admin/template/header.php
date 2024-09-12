<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN DESA CANGKRING</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/css/be/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="../assets/css/ionicons.min.css">
  <!-- Main CSS -->
  <link rel="stylesheet" href="../assets/css/be/adminlte.min.css">

  <style>
    .table tr td {
      width: 20px;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="logout.php" class="nav-link text-primary"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="../assets/img/be/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SI KIMAK</span>
      </a>

      <?php
        include "../config/config.php";

        $stmt = $con->prepare("SELECT img FROM tbl_users WHERE id_user=?");
        $stmt->bind_param("i", $_SESSION['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
      ?>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../assets/img/<?= htmlspecialchars($data['img']) ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= htmlspecialchars($_SESSION['pengguna']) ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php if($_SESSION['lvluser'] == 1): ?>
              <li class="nav-item menu-open">
                <a href="index.php?page=home" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-clipboard"></i>
                  <p>
                    Posting
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Post Beranda</p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="index.php?page=tampil-beranda" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Data Beranda</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="index.php?page=tambah-beranda" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Tambah Data</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Post Berita</p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="index.php?page=tampil-berita" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Data Berita</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="index.php?page=tambah-berita" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Tambah Berita</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="index.php?page=galeri" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Galeri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=struktur-organisasi" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bullseye"></i>
                  <p>Visi Misi</p>
                  <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?page=data-vm" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Data Visi Misi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?page=tambah-vm" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Tambah Visi Misi</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="index.php?page=geografis" class="nav-link">
                  <i class="nav-icon fas fa-map"></i>
                  <p>Geografis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-bullhorn"></i>
                  <p>
                    Post Pengumuman
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?page=data" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Data Pengumuman</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?page=tambah" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Tambah Pengumuman</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="index.php?page=sejarah-desa" class="nav-link">
                  <i class="nav-icon fas fa-history"></i>
                  <p>Sejarah Desa</p>
                </a>
              </li>
            <?php elseif ($_SESSION['lvluser'] == 2): ?>
              <li class="nav-item menu-open">
                <a href="index.php?page=home" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-clipboard"></i>
                  <p>
                    Posting
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Post Berita</p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="index.php?page=tampil-berita" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Data Berita</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="index.php?page=tambah-berita" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Tambah Berita</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            <?php endif; ?>
            <li class="nav-item">
              <a href="index.php?page=user" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Akun</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">
                  <?php
                    // Check if 'page' exists in $_GET before using it
                    echo isset($_GET['page']) ? htmlspecialchars($_GET['page']) : "Home";
                  ?>
                </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
