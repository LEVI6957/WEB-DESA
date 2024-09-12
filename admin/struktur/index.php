<?php 
include "../config/config.php";

// Cek apakah koneksi database berhasil
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = mysqli_query($con, "SELECT * FROM tbl_organisasi");
$data = mysqli_fetch_array($sql);
?>

<div class="row">
    <div class="col-lg-6 col-xs-12">
        <div class="card card-primary">
            <div class="card-header">
                <h5>Struktur Organisasi Saat Ini</h5>
            </div>
            <div class="card-body">
                <?php if (!empty($data['image'])): ?>
                    <img src="../assets/img/struktur/<?= htmlspecialchars($data['image']) ?>" style="width: 100%; height: auto;" alt="Struktur Organisasi">
                <?php else: ?>
                    <p>Tidak ada gambar yang diunggah</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xs-12">
        <div class="card card-primary">
            <div class="card-header">
                <h5>Form Unggah Gambar Struktur Organisasi</h5>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Pilih Gambar</label>
                        <input type="file" name="file" class="form-control" required>
                        <p class="text-danger mt-1" style="font-size: 12px;">Ekstensi File yang diperbolehkan: jpg, png; Ukuran max: 2MB</p>
                    </div>
                    <div class="form-group">
                        <button name="submit" class="btn btn-primary btn-block">Unggah Gambar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
if(isset($_POST['submit'])) {
    $ekstensi_boleh = array('png', 'jpg');
    $gambar = $_FILES['file']['name'];
    $ex = explode('.', $gambar);
    $ekstensi = strtolower(end($ex));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(!empty($gambar)) {
        if(in_array($ekstensi, $ekstensi_boleh) === true) {
            if($ukuran < 2000000) {
                $upload_path = '../assets/img/struktur/' . $gambar;

                // Periksa apakah folder upload ada dan dapat ditulis
                if (is_writable('../assets/img/struktur/')) {
                    if(move_uploaded_file($file_tmp, $upload_path)) {
                        // Hapus gambar lama jika ada
                        if (!empty($data['image']) && file_exists('../assets/img/struktur/'. $data['image'])) {
                            unlink('../assets/img/struktur/'. $data['image']);
                        }

                        // Update gambar baru di database
                        $sql = mysqli_query($con, "UPDATE tbl_organisasi SET image='$gambar'");

                        if($sql) {
                            echo "<script>alert('Gambar Berhasil Diunggah!')</script>";
                            echo "<script>window.location.href='index.php?page=struktur-organisasi'</script>";
                        } else {
                            echo "<script>alert('Gagal memperbarui gambar di database: " . mysqli_error($con) . "')</script>";
                        }
                    } else {
                        echo "<script>alert('Gagal mengunggah gambar. Periksa izin folder upload.')</script>";
                    }
                } else {
                    echo "<script>alert('Folder upload tidak dapat ditulis. Periksa izin folder.')</script>";
                }
            } else {
                echo "<script>alert('Ukuran file tidak boleh lebih dari 2MB')</script>";
            }
        } else {
            echo "<script>alert('Ekstensi file tidak sesuai. Hanya jpg dan png yang diperbolehkan.')</script>";
        }
    } else {
        echo "<script>alert('Mohon pilih file yang akan diunggah')</script>";
    }
}
?>
