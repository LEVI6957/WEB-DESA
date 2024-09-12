<?php

// Tangani form submit
if (isset($_POST['submit'])) {
    $judul = htmlspecialchars($_POST['judul']);
    $isi = htmlspecialchars($_POST['isi']);
    
    // Definisikan ekstensi file yang diperbolehkan dan batas ukuran
    $allowed_extensions = ['png', 'jpeg', 'jpg'];
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    
    // Ambil ekstensi file dan periksa
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    if ($file_error === UPLOAD_ERR_OK) {
        if (in_array($file_ext, $allowed_extensions) && $file_size <= 2000000) {
            $target_dir = '../assets/file/pengumuman/';
            $target_file = $target_dir . basename($file_name);
            
            // Pastikan file tidak sudah ada
            if (!file_exists($target_file)) {
                if (move_uploaded_file($file_tmp, $target_file)) {
                    // Persiapkan dan jalankan pernyataan SQL
                    $stmt = $con->prepare("INSERT INTO tbl_pengumuman (img, judul, isi) VALUES (?, ?, ?)");
                    if ($stmt) {
                        $stmt->bind_param("sss", $file_name, $judul, $isi);
                        if ($stmt->execute()) {
                            echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
                            echo "<script>window.location.href='index.php?page=data'</script>";
                        } else {
                            echo "<script>alert('Gagal menambahkan data.')</script>";
                        }
                        $stmt->close();
                    } else {
                        echo "<script>alert('Gagal mempersiapkan pernyataan SQL.')</script>";
                    }
                } else {
                    echo "<script>alert('Gagal mengunggah img.')</script>";
                }
            } else {
                echo "<script>alert('File dengan nama yang sama sudah ada.')</script>";
            }
        } else {
            echo "<script>alert('Ekstensi file tidak diperbolehkan atau ukuran file terlalu besar.')</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan saat mengunggah file.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah <?= htmlspecialchars($_GET['page']) ?></title>
    <!-- Add your CSS files here -->
</head>
<body>
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h5>Tambah <?= htmlspecialchars($_GET['page']) ?></h5>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control" required>
                            </div>

                            <div class="col-lg-6 mt-3">
                                <input type="file" name="file" class="form-control" required>
                                <p class="text-danger mt-1" style="font-size: 12px;">Ekstensi File yang diperbolehkan: jpg, jpeg, png max. 2MB</p>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" name="isi" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <button name="submit" class="btn btn-primary btn-block">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
