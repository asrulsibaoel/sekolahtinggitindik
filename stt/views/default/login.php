<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Area | Siakad Sekolah Tinggi Tindik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link href="<?php echo $base_url?>/assets/theme/css/style.css" rel="stylesheet">
        <link href="<?php echo $base_url?>/assets/theme/css/style.css" rel="stylesheet">
        <link href="<?php echo $base_url?>/assets/theme/css/ui.css" rel="stylesheet">
        <link href="<?php echo $base_url?>/assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
        <link href="<?php echo $base_url?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body class="account2" data-page="login">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <i class="user-img icons-faces-users-03"></i>
            <div class="account-info" align="justify">
                <a href="#" class="logo"></a>
				<p>Selamat datag di Sistem Informasi Akademik <b>Sekolah Tinggi Tindik</b> <br><br>Silahkan login dengan hak ases yang telah diberikan oleh admin.</p>
            </div>
            <div class="account-form">
                <form class="form-signin" role="form" action="#" method="post">
                    <h3>Silahkan <strong>Log in</strong> Ke Akun Anda</h3>
                    <div class="append-icon">
                        <input type="text" name="username" id="name" class="form-control form-white username" placeholder="Username" required>
                        <i class="icon-user"></i>
                    </div>
                    <div class="append-icon m-b-20">
                        <input type="password" name="password" class="form-control form-white password" placeholder="Password" required>
                        <i class="icon-lock"></i>
                    </div>
                    <div  class="append-icon m-b-20">
                    <select input type = "text" name="Masuk_Sebagai" class="form-control form-white dropdown" placeholder="dropdown" required>
                    <i class="icon-lock"></i>
         <option value="KR">Karyawan</option>
         <option value="DS">Dosen</option>
         <option value="MH">Mahasiswa</option>
       </select><br /><br />
                    </div>
                    <button type="submit" id="submit-form" name="login" class="btn btn-lg btn-dark btn-rounded ladda-button" data-style="expand-left">Log In
					</button>
                </form>
            </div>
            <?php
                  if(isset($_POST['username'])){
                    $cek = cek_login($_POST['username'],$_POST['password']);
                    if($cek == TRUE){
                      go($base_url);
                    }else{
                      echo '<br>';
                      echo error("Kombinasi username dan password salah");
                    }
                  }
                ?>
        </div>
        <!-- END LOCKSCREEN BOX -->
        <p class="account-copyright">
            <span>Copyright © 2015 </span><span>Siakad Sekolah Tinggi Tindik V. Beta</span>
        </p>
        <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/plugins/gsap/main-gsap.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/backstretch/backstretch.min.js"></script>
        <script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="assets/js/pages/login-v2.js"></script>
    </body>
</html>