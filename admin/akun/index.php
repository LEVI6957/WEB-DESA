<?php 
    include "../config/config.php"; 

    if (!isset($_SESSION['id'])) {
        header("Location: akun/index.php");
        exit();
    }

    $sql = mysqli_query($con, "SELECT * FROM tbl_users WHERE id_user='$_SESSION[id]'");
    $data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .card-custom {
            border-radius: 10px;
        }
        .form-control-custom {
            border-radius: 5px;
        }
        .btn-custom {
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
        }
        .bg-primary-custom {
            background-color: #0d6efd;
        }
        .text-primary-custom {
            color: #0d6efd;
        }
        .card-header-custom {
            border-bottom: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="card card-custom shadow-sm border-0">
                    <div class="card-header card-header-custom bg-primary-custom text-white text-center">
                        <h5>Informasi Akun</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="../assets/img/<?= $data['img'] ?>" class="profile-img mb-3" alt="Profile Picture">
                        <h5 class="text-primary-custom text-uppercase"><?= $data['nama_pengguna'] ?></h5>
                        <p class="text-muted">
                            Level User: <?= ($_SESSION['lvluser'] == 1) ? "Admin" : "User"; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-12">
                <div class="card card-custom shadow-sm border-0">
                    <div class="card-header card-header-custom bg-primary-custom text-white text-center">
                        <h5>Edit Akun</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-3">
                                    <label for="user">Username</label>
                                    <input type="text" name="user" id="user" class="form-control form-control-custom" placeholder="Masukkan Username" value="<?= $data['username'] ?>">
                                </div>
                                <div class="col-lg-6 col-12 mb-3">
                                    <label for="pass">Password</label>
                                    <input type="password" name="pass" id="pass" class="form-control form-control-custom" placeholder="Masukkan Password">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="file">Unggah Gambar</label>
                                    <input type="file" name="file" id="file" class="form-control form-control-custom">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="pengguna">Nama Pengguna</label>
                                    <input type="text" name="pengguna" id="pengguna" class="form-control form-control-custom" placeholder="Masukkan Nama Pengguna" value="<?= $data['nama_pengguna'] ?>">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary btn-custom w-100" name="submit">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php if ($_SESSION['lvluser'] == 1) { ?>
                <div class="col-12 mt-4">
                    <div class="card card-custom shadow-sm border-0">
                        <div class="card-header card-header-custom bg-primary-custom text-white text-center">
                            <h5>Form Tambah Akun</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-3">
                                        <label for="user">Username</label>
                                        <input type="text" name="user" id="user" class="form-control form-control-custom" placeholder="Masukkan Username">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-3">
                                        <label for="pass">Password</label>
                                        <input type="password" name="pass" id="pass" class="form-control form-control-custom" placeholder="Masukkan Password">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-3">
                                        <label for="file">Unggah Gambar</label>
                                        <input type="file" name="file" id="file" class="form-control form-control-custom">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-3">
                                        <label for="lvluser">Level User</label>
                                        <select name="lvluser" id="lvluser" class="form-control form-control-custom">
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="pengguna">Nama Pengguna</label>
                                        <input type="text" name="pengguna" id="pengguna" class="form-control form-control-custom" placeholder="Masukkan Nama Pengguna">
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-custom w-100" name="tambah">Tambah Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tabel Daftar Pengguna -->
                <div class="col-12 mt-4">
                    <div class="card card-custom shadow-sm border-0">
                        <div class="card-header card-header-custom bg-primary-custom text-white text-center">
                            <h5>Daftar Pengguna</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama Pengguna</th>
                                        <th>Level</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        $users = mysqli_query($con, "SELECT * FROM tbl_users");
                                        while ($row = mysqli_fetch_array($users)) {
                                            $level = ($row['id_lvuser'] == 1) ? 'Admin' : 'User';
                                            echo "
                                            <tr>
                                                <td>{$no}</td>
                                                <td>{$row['username']}</td>
                                                <td>{$row['nama_pengguna']}</td>
                                                <td>{$level}</td>
                                                <td><img src='../assets/img/{$row['img']}' width='50' height='50' class='rounded-circle'></td>
                                                <td>
                                                    <a href='akun/editakun.php?id={$row['id_user']}' class='btn btn-warning btn-sm'>Edit</a>
                                                    <a href='akun/delete_user.php?id={$row['id_user']}' onclick='return confirm(\"Apakah anda yakin ingin menghapus data ini?\")' class='btn btn-danger btn-sm'>Hapus</a>
                                                </td>
                                            </tr>";
                                            $no++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php 
    if (isset($_POST['submit'])) {
        $id = $_SESSION['id'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pengguna = $_POST['pengguna'];

        $ekstensi_boleh = array('png', 'jpg');
        $gambar = $_FILES['file']['name'];
        $ex = explode('.', $gambar);
        $ekstensi = strtolower(end($ex));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];

        if (!empty($gambar)) {
            if (in_array($ekstensi, $ekstensi_boleh) === true) {
                if ($ukuran < 2000000) {
                    move_uploaded_file($file_tmp, '../assets/img/'. $gambar);
                    $sql = mysqli_query($con, "UPDATE tbl_users SET username='$user', password='".md5($pass)."', nama_pengguna='$pengguna', img='$gambar' WHERE id_user='$id'");
                    echo "<script>alert('Data Berhasil Diubah!')</script>";
                    echo "<script>window.location.href='index.php'</script>";
                } else {
                    echo "<script>alert('Ukuran tidak boleh lebih dari 2MB')</script>";
                }
            } else {
                echo "<script>alert('Ekstensi file tidak sesuai')</script>";
            }
        } else {
            if (!empty($pass)) {
                $sql = mysqli_query($con, "UPDATE tbl_users SET username='$user', password='".md5($pass)."', nama_pengguna='$pengguna' WHERE id_user='$id'");
                echo "<script>alert('Data Berhasil Diubah!')</script>";
                echo "<script>window.location.href='index.php'</script>";
            } else {
                echo "<script>alert('Password wajib diisi!')</script>";
            }
        }
    }

    if (isset($_POST['tambah'])) {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $pengguna = $_POST['pengguna'];
        $lvluser = $_POST['lvluser'];

        $ekstensi_boleh = array('png', 'jpg');
        $gambar = $_FILES['file']['name'];
        $ex = explode('.', $gambar);
        $ekstensi = strtolower(end($ex));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];

        if (in_array($ekstensi, $ekstensi_boleh) === true) {
            if ($ukuran < 2000000) {
                move_uploaded_file($file_tmp, '../assets/img/'. $gambar);
                $sql = mysqli_query($con, "INSERT INTO tbl_users (username, password, nama_pengguna, img, id_lvuser) VALUES ('$user', '$pass', '$pengguna', '$gambar', '$lvluser')");
                echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
                echo "<script>window.location.href='index.php'</script>";
            } else {
                echo "<script>alert('Ukuran tidak boleh lebih dari 2MB')</script>";
            }
        } else {
            echo "<script>alert('Ekstensi file tidak sesuai')</script>";
        }
    }
?>
