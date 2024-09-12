<?php 
  ob_start();
  session_start();

  include "../config/config.php";

  if(!$_SESSION['user']) {
    header("location: login.php");
  }

  require_once "template/header.php";
?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <?php 

          if(isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
              case 'home':
                include "dashboard/index.php";
                break;

              case 'tampil-beranda':
                include "beranda/data-beranda.php";
                break;

              case 'tambah-beranda':
                include "beranda/tambah-beranda.php";
                break;

              case 'hapus-beranda':
                include "beranda/hapus-beranda.php";
                break;

              case 'edit-beranda':
                include "beranda/edit-beranda.php";
                break;

              case 'tampil-berita':
                include "berita/data-berita.php";
                break;

              case 'tambah-berita':
                include "berita/tambah-berita.php";
                break;

              case 'hapus-berita':
                include "berita/hapus-berita.php";
                break;

              case 'edit-berita':
                include "berita/edit-berita.php";
                break;

              case 'galeri':
                include "galeri/index.php";
                break;

              case 'hapus-galeri':
                include "galeri/hapus-galeri.php";
                break;

              case 'struktur-organisasi':
                include "struktur/index.php";
                break;

              case 'data-vm':
                include "visimisi/data-vm.php";
                break;
                  
              case 'tambah-vm':
                include "visimisi/tambah-vm.php";
                break;

              case 'tambah-vm':
                include "visimisi/tambah-vm.php";
                break;

              case 'hapus-vm':
                include "visimisi/hapus-vm.php";
                break;
              
              case 'edit-vm':
                include "visimisi/edit-vm.php";
                break;
                    
                    case 'data':
                      include "pengumuman/data.php";
                      break;
      
                    case 'tambah':
                      include "pengumuman/tambah.php";
                      break;
      
                    case 'hapus':
                      include "pengumuman/hapus.php";
                      break;
      
                    case 'edit':
                      include "pengumuman/edit.php";
                      break;
      
              case 'user':
                include "akun/index.php";
                break;

              default:
                echo "<center><h3>Maaf. Halaman tidak ditemukan!</h3></center>";
                break;
            }
          } else {
            include "dashboard/index.php";
          }

         ?>

      </div>
      <!-- /. New Row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php 

  require_once "template/footer.php";

?>