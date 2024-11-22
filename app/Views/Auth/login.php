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
    <link rel="icon" href="<?= base_url('Assets/img/logo-banten.png') ?>" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>" />
    <title>Login - Bantenplace</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link href="<?= base_url('Assets/css/dashboard.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('Assets/plugins/charts-c3/plugin.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('Assets/plugins/maps-google/plugin.css') ?>" rel="stylesheet" />

    <!-- JS -->
    <script src="<?= base_url('Assets/js/require.min.js') ?>"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <script src="<?= base_url('Assets/js/dashboard.js') ?>"></script>
    <script src="<?= base_url('Assets/plugins/charts-c3/plugin.js') ?>"></script>
    <script src="<?= base_url('Assets/plugins/maps-google/plugin.js') ?>"></script>
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
                  <div class="card-title">Silahkan Login ke Akun Anda!</div>
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="Username" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Masukkan Username">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Ingatkan Saya</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" onclick="Login_Control()" class="btn btn-green btn-block">Login</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Anda Tidak Memiliki Akun? <a href="./register.html">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
