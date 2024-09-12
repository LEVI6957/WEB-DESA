<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card card-primary">
            <div class="card-header">
                <h5>Form <?= $_GET['page'] ?></h5>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control">
                        </div>
                        <div class="col-lg-6 mt-3">
                            <input type="hidden" name="tanggal" value="<?= date("Y-m-d"); ?>">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <textarea class="form-control" name="konten" cols="30" rows="10"></textarea>
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

<?php
if(isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $date = $_POST['tanggal'];
    $konten = $_POST['konten'];

    // Add your file upload logic here before inserting into the database

    // Insert data into database after file upload
    $sql = mysqli_query($con, "INSERT INTO visimisi VALUES ('', '$judul', '$konten', '$date')");
    
    if ($sql) {
        echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
        echo "<script>window.location.href='index.php?page=data-vm'</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data')</script>";
        
    }
}
?>