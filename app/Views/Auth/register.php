<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?= base_url('Assets/favicon.ico') ?>" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('Assets/favicon.ico') ?>" />
    <title>Register - Responsive Admin Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?= base_url('Assets/js/require.min.js') ?>"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="<?= base_url('Assets/css/dashboard.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('Assets/js/dashboard.js') ?>"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?= base_url('Assets/plugins/charts-c3/plugin.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('Assets/plugins/charts-c3/plugin.js') ?>"></script>
    <!-- Google Maps Plugin -->
    <link href="<?= base_url('Assets/plugins/maps-google/plugin.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('Assets/plugins/maps-google/plugin.js') ?>"></script>
    <!-- Input Mask Plugin -->
    <script src="<?= base_url('Assets/plugins/input-mask/plugin.js') ?>"></script>
</head>
<body class="">
<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-6">
                        <img src="<?= base_url('Assets/img/logo-banten.png') ?>" class="h-8"  height="1000px"  alt="Logo">
                    </div>
                    <form class="card" action="" method="post">
                        <div class="card-body p-6">
                            <div class="card-title">Buat Akun Baru</div>
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" id="Alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" placeholder="Masukkan Kode Pos" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Masukkan Password" required>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" />
                                    <span class="custom-control-label">Setuju dengan <a href="terms.html">Syarat & Ketentuan</a></span>
                                </label>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-green btn-block">Create new account</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center text-muted">
                        Sudah memiliki akun? <a href="<? base_url() ?>">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
