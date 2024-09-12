<?php 

include "../config/config.php";

// Ensure $con is a valid connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = intval($_GET['id']); // Ensure $id is an integer

// Fetch existing data from the database
$sql = mysqli_query($con, "SELECT * FROM tbl_pengumuman WHERE id_pengumuman='$id'");
if (!$sql) {
    die("Query failed: " . mysqli_error($con));
}

$data = mysqli_fetch_array($sql);
?>

<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card card-primary">
            <div class="card-header">
                <h5>Form <?= htmlspecialchars($_GET['page']) ?></h5>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="Judul">Judul isi</label>
                            <input type="text" name="Judul" placeholder="Masukkan Judul" class="form-control" value="<?= htmlspecialchars($data['Judul']) ?>" required>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <label for="file">Masukkan File Gambar</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <label for="text">isi</label>
                            <textarea class="form-control" name="isi" cols="30" rows="10" required><?= htmlspecialchars($data['isi']) ?></textarea>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button name="submit" class="btn btn-primary btn-block">Edit Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
if (isset($_POST['submit'])) {
    $Judul = htmlspecialchars($_POST['Judul']);
    $isi = htmlspecialchars($_POST['isi']);

    // Set Upload Gambar
    $ekstensi_boleh = array('png', 'jpg');
    $gambar = $_FILES['file']['name'];
    $ex = explode('.', $gambar);
    $ekstensi = strtolower(end($ex));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if (!empty($gambar)) {
        if (in_array($ekstensi, $ekstensi_boleh)) {
            if ($ukuran < 2000000) {
                $target_dir = '../assets/file/post/';
                $target_file = $target_dir . uniqid() . '.' . $ekstensi; // Use unique filename
                if (move_uploaded_file($file_tmp, $target_file)) {
                    // Update query using prepared statement
                    $stmt = $con->prepare("UPDATE tbl_pengumuman SET img=?, Judul=?, isi=? WHERE id_pengumuman=?");
                    if ($stmt) {
                        $stmt->bind_param("sssi", basename($target_file), $Judul, $isi, $id);
                        if ($stmt->execute()) {
                            echo "<script>alert('Data Berhasil Diubah!')</script>";
                            echo "<script>window.location.href='index.php?page=data'</script>";
                        } else {
                            echo "<script>alert('Gagal mengupdate data.')</script>";
                        }
                        $stmt->close();
                    } else {
                        echo "<script>alert('Gagal mempersiapkan pernyataan SQL.')</script>";
                    }
                } else {
                    echo "<script>alert('Gagal mengunggah gambar.')</script>";
                }
            } else {
                echo "<script>alert('Ukuran gambar terlalu besar.')</script>";
            }
        } else {
            echo "<script>alert('Format gambar tidak diperbolehkan.')</script>";
        }
    } else {
        // No new image, keep the old image
        $gambar = $data['img'];
        $stmt = $con->prepare("UPDATE tbl_pengumuman SET Judul=?, isi=? WHERE id_pengumuman=?");
        if ($stmt) {
            $stmt->bind_param("ssi", $Judul, $isi, $id);
            if ($stmt->execute()) {
                echo "<script>alert('Data Berhasil Diubah!')</script>";
                echo "<script>window.location.href='index.php?page=data'</script>";
            } else {
                echo "<script>alert('Gagal mengupdate data.')</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Gagal mempersiapkan pernyataan SQL.')</script>";
        }
    }
}
?>
