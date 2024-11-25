<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Bantenplace</title>
    
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('Assets/img/logo-banten.png') ?>" type="image/x-icon"/>

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('Assets/css/dashboard.css') ?>">
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="<?= base_url('Assets/img/logo-banten.png') ?>" class="img-fluid" alt="Logo">
              </div>
              <form class="card" action="/auth/attemptLogin" method="post">
                <?= csrf_field(); ?>
                <div class="card-body p-6">
                  <div class="card-title">Silahkan Login ke Akun Anda!</div>
                  <div class="form-group">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="Username" placeholder="Masukkan Username" required>
                  </div>
                  <div class="form-group">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-green btn-block">Login</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted mt-3">
                Anda Tidak Memiliki Akun? <a href="<?= base_url('/register') ?>">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
