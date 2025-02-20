<!-- <?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');

//inisialisasi session
session_start();

//mengecek apakah form registrasi di submit atau tidak
$nama_user = $_POST['nama_user'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$password  = $_POST['password'];
 
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="node_modules/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="name_user">Username</label>
                                            <input id="name_user" type="text" class="form-control" name="name_user" autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="name">Nama Lengkap</label>
                                            <input id="name" type="text" class="form-control" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input id="password2" type="password" class="form-control" name="password-confirm">
                                        </div>
                                    
                                    <div class="form-group col-6">
                                        <label for="alamat">Alamat</label>
                                        <input id="alamat" type="alamat" class="form-control" name="alamat">
                                        <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="no_hp">No. Hp</label>
                                        <input id="no_hp" type="no_hp" class="form-control" name="no_hp">
                                       
                                    </div>
                                    </div>

                                    <div class="form-divider"
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Level</label>
                                            <select class="form-control selectric">
                                                <option>Admin</option>
                                                <option>Siswa</option>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group col-6">
                                            <label>Province</label>
                                            <select class="form-control selectric">
                                                <option>West Java</option>
                                                <option>East Java</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                            <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                    </div>
                                    <p class="btn-right">Anda sudah punya akun? <a href="index.php">Login </a></p>
                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $nama_user = $_POST['nama_user'];
                                        $email = $_POST['email'];
                                        $password = md5($_POST['password']);
                                        $level = $_POST['level'];
                                        $nama_lengkap = $_POST['nama_lengkap'];
                                        $alamat = ($_POST['alamat']);
                                        $no_hp = ($_POST['no_hp']);
                                    
                                        if ($password == $cpassword) {
                                            $sql = "SELECT * FROM tb_user WHERE email='$email'";
                                            $result = mysqli_query($koneksi, $sql);
                                            if (!$result->num_rows > 0) {
                                                $sql = "INSERT INTO tb_user (username, password, nama_lengkap, email, alamat, no_hp)
                                                        VALUES ('$nama_user','$email', '$password','$level','$nama_lengkap','$alamat','$no_hp' )";
                                                $result = mysqli_query($koneksi, $sql);
                                                if ($result) {
                                                    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                                                    $nama_user= "";
                                                    $email = "";
                                                    $_POST['password'] = "";
                                                    $level = "";
                                                    $nama_lengkap = "";
                                                    $alamat = "";
                                                    $no_hp = "";
                                                } else {
                                                    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                                                }
                                            } else {
                                                echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
                                            }
                                            
                                        } else {
                                            echo "<script>alert('Password Tidak Sesuai')</script>";
                                        }
                                    }
                                    
                                    ?>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="assets/js/page/auth-register.js"></script>
</body>
</html>