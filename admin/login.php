<?php 
include "../config/config.php";

if(isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

    $sql = mysqli_query($con, "SELECT * FROM tbl_users WHERE username='$user' AND password='$pass'");

    // Ambil Data Lv User
    $data = mysqli_fetch_array($sql);
    
    // Ambil Data True or False
    $cek = mysqli_num_rows($sql);

    if($cek > 0) {
        session_start();

        // Passing Data
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['user'] = $data['username'];
        $_SESSION['pengguna'] = $data['nama_pengguna'];
        $_SESSION['lvluser'] = $data['id_lvuser'];
        
        header("location:index.php?page=home");
    } else {
        echo "<script>alert('Maaf, Username atau Password Salah')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn Admin - SI Blogger</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #ece9e6, #ffffff);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .login-box {
            max-width: 400px;
            width: 100%;
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .login-box:before {
            content: '';
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            background: #f8f9fa;
            border-radius: 50%;
            z-index: -1;
            box-shadow: 0 0 0 15px #e9ecef, 0 0 0 30px #f8f9fa;
        }
        .card-header {
            margin-bottom: 30px;
            text-align: center;
        }
        .card-header .h1 {
            font-size: 2rem;
            font-weight: 600;
            color: #333;
        }
        .login-box-msg {
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 30px;
            color: #666;
        }
        .form-control {
            border-radius: 25px;
            border: none;
            background: #f0f0f0;
            padding: 12px 20px;
            margin-bottom: 20px;
            transition: all 0.3s;
            padding-right: 40px;
        }
        .form-control:focus {
            background: #e6e6e6;
            box-shadow: none;
            outline: none;
        }
        
        .btn-primary {
            background: #6c63ff;
            border: none;
            border-radius: 25px;
            padding: 12px;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background: #5b52e4;
        }
        .btn-primary:focus {
            box-shadow: none;
            outline: none;
        }
        .login-box .input-group {
            position: relative;
        }
    </style>
</head>
<body>
<div class="login-box">
    <div class="card-header">
        <h1 class="h1">Login</h1>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Masukan ID Dan Password</p>

        <form method="POST">
            <div class="input-group mb-3">
                <input type="text" name="user" class="form-control" placeholder="Username" required>
                
            </div>
            <div class="input-group mb-3">
                <input type="password" name="pass" class="form-control" placeholder="Password" required>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Log In</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
