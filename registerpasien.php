<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik | Registrasi Pasien</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
    <script src="https://kit.fontawesome.com/79ba4adbee.js" crossorigin="anonymous"></script>
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="index2.html"><b>Poli</b>klinik</a>
        </div>
        <form role="form" method="post" action="conf/auth_registerpasien.php">
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register a new account</p>

                    <form action="index.html" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama" placeholder="Full name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-location-pin"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="no_ktp" placeholder="No KTP">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-address-card"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="no_hp" placeholder="No HP">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-mobile-screen"></span>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>-->
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="register" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                </div>
        </form>

        <a href="login.html" class="text-center">I already have an account</a>
        <br>
    </div>
    <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="app/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="app/dist/js/adminlte.min.js"></script>
</body>

</html>