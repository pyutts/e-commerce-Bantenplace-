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
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('Assets/img/logo-banten.png') ?>" />
    <!-- Generated: 2018-04-06 16:27:42 +0200 -->
    <title>Dashboard - Bantenplace</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?= base_url('Assets'); ?>/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="<?= base_url('Assets'); ?>/css/dashboard.css" rel="stylesheet" />
    <script src="<?= base_url('Assets'); ?>//js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?= base_url('Assets'); ?>//plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?= base_url('Assets'); ?>//plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?= base_url('Assets'); ?>//plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?= base_url('Assets'); ?>//plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?= base_url('Assets'); ?>//plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <!-- Start Header -->
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./index.html">
                <img src="<?= base_url('Assets/img/logo-banten.png') ?>" class="header-brand-img" alt="logo">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                    <span class="nav-unread"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <!-- Mesaage dropdown -->
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                      <div>
                        <strong>Mangku Alit</strong> Baru Saja Memesan: Paket Banten 1.
                        <div class="small text-muted">10 Menit lalu</div>
                      </div>
                    </a>
                   <!-- End Mesaage dropdown -->
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Hilangkan Semua Notifikasi</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Agus Wiadnyana</span>
                      <small class="text-muted d-block mt-1">Admin</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-user"></i> Profil
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-settings"></i> Pengaturan
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="float-right"><span class="badge badge-primary">6</span></span>
                      <i class="dropdown-icon fe fe-mail"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-send"></i> Pesan
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="./index.html" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Store</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./cards.html" class="dropdown-item ">Cards design</a>
                      <a href="./charts.html" class="dropdown-item ">Charts</a>
                      <a href="./pricing-cards.html" class="dropdown-item ">Pricing cards</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./maps.html" class="dropdown-item ">Maps</a>
                      <a href="./icons.html" class="dropdown-item ">Icons</a>
                      <a href="./store.html" class="dropdown-item ">Store</a>
                      <a href="./blog.html" class="dropdown-item ">Blog</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./profile.html" class="dropdown-item ">Profile</a>
                      <a href="./login.html" class="dropdown-item ">Login</a>
                      <a href="./register.html" class="dropdown-item ">Register</a>
                      <a href="./forgot-password.html" class="dropdown-item ">Forgot password</a>
                      <a href="./400.html" class="dropdown-item ">400 error</a>
                      <a href="./401.html" class="dropdown-item ">401 error</a>
                      <a href="./403.html" class="dropdown-item ">403 error</a>
                      <a href="./404.html" class="dropdown-item ">404 error</a>
                      <a href="./500.html" class="dropdown-item ">500 error</a>
                      <a href="./503.html" class="dropdown-item ">503 error</a>
                      <a href="./email.html" class="dropdown-item ">Email</a>
                      <a href="./empty.html" class="dropdown-item ">Empty page</a>
                      <a href="./rtl.html" class="dropdown-item ">RTL mode</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="./form-elements.html" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
                  </li>
                  <li class="nav-item">
                    <a href="./gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header -->

        <!-- Start Tilte Dashboard -->
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Dashboard
              </h1>
            </div>
            <!-- End Tilte Dashboard -->
            
            <!-- Statistik Awal -->
            <div class="row row-cards">
              <div class="col-sm-6 col-lg-3">
                <div class="card p-5">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-blue mr-3">
                      <i class="fe fe-dollar-sign"></i>
                    </span>
                    <div>
                      <h4 class="m-0"><a href="javascript:void(0)">132 <small>Sales</small></a></h4>
                      <small class="text-muted">12 waiting payments</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card p-5">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                      <i class="fe fe-shopping-cart"></i>
                    </span>
                    <div>
                      <h4 class="m-0"><a href="javascript:void(0)">78 <small>Orders</small></a></h4>
                      <small class="text-muted">32 shipped</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card p-5">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-red mr-3">
                      <i class="fe fe-users"></i>
                    </span>
                    <div>
                      <h4 class="m-0"><a href="javascript:void(0)">1,352 <small>Members</small></a></h4>
                      <small class="text-muted">163 registered today</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card p-5">
                  <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-yellow mr-3">
                      <i class="fe fe-message-square"></i>
                    </span>
                    <div>
                      <h4 class="m-0"><a href="javascript:void(0)">132 <small>Comments</small></a></h4>
                      <small class="text-muted">16 waiting</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Statistik -->
            <div class="row row-cards row-deck">
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                      <thead>
                        <tr>
                          <th class="text-center w-1"><i class="icon-people"></i></th>
                          <th>User</th>
                          <th>Usage</th>
                          <th class="text-center">Payment</th>
                          <th>Activity</th>
                          <th class="text-center">Satisfaction</th>
                          <th class="text-center"><i class="icon-settings"></i></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>Elizabeth Martin</div>
                            <div class="small text-muted">
                              Registered: Mar 9, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>42%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%"
						     aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="payment payment-visa"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>4 minutes ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.42" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">42%</div>
                            </div>
                          </td>
                          <td class="text-center">
                            <div class="item-action dropdown">
                              <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <!-- end Data 1-->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <!-- Start Invoice -->
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <!-- Data 1 -->
                        <tr>
                          <th class="w-1">No.</th>
                          <th>Invoice Subject</th>
                          <th>Client</th>
                          <th>VAT No.</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Start Data 1 -->
                        <tr>
                          <td><span class="text-muted">001401</span></td>
                          <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                          <td>Carlson Limited</td>
                          <td>87956621</td>
                          <td>15 Dec 2017</td>
                          <td><span class="status-icon bg-success"></span> Paid</td>
                          <td>$887</td>
                          <td class="text-right">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                            <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                            </div>
                          </td>
                          <td>
                            <a class="icon" href="javascript:void(0)">
                              <i class="fe fe-edit"></i>
                            </a>
                          </td>
                        </tr>
                        <!-- End Data 1 -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- End Invoice -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Main Konten -->

      <!-- Start Footer -->
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html">
                      <b>Home Page Bantenku</b>
                    </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2024 <b>Bantenplace</b> Hak Cipta dilindungi undang - undang.
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer -->
    </div>
  </body>
</html>