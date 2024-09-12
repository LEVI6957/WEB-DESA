<?php
$id = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM visimisi WHERE id='$id'");
$data = mysqli_fetch_array($sql);

?>

<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card card-primary">
            <div class="card-header">
                <h5>Edit <?= $_GET['page'] ?> Form</h5>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control" value="<?= $data['judul'] ?>">
                        </div>
                        <div class="col-lg-6 mt-3">
                            <input type="hidden" name="tanggal" value="<?= date("Y-m-d"); ?>">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <label for="konten">Masukkan Konten</label>
                            <textarea class="form-control" name="konten" cols="30" rows="10"><?= $data['konten'] ?></textarea>
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
    if(isset($_POST['submit'])) {
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $date = $_POST['tanggal'];
        $konten = $_POST['konten'];

        // Perform necessary update operations here

        $sql = mysqli_query($con, "UPDATE visimisi SET  judul='$judul', konten='$konten' WHERE id='$id'");
        echo "<script>alert('Data Berhasil Di ubah!')</script>";
        echo "<script>window.location.href='index.php?page=data-vm'</script>";
    }
?>