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
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./index.html">
                <img src="<?= base_url('Assets/img/logo-banten.png') ?>" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                    <span class="nav-unread"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                      <div>
                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                        <div class="small text-muted">10 minutes ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                      <div>
                        <strong>Alice</strong> started new task: Tabler UI design.
                        <div class="small text-muted">1 hour ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                      <div>
                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                        <div class="small text-muted">2 hours ago</div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="float-right"><span class="badge badge-primary">6</span></span>
                      <i class="dropdown-icon fe fe-mail"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-send"></i> Message
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                    </a>
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
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Interface</a>
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
                  <li class="nav-item">
                    <a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Dashboard
              </h1>
            </div>
            <div class="row">
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-blue">+5%</div>
                        <h3 class="mb-1">423</h3>
                        <div class="text-muted">Users online</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-1" style="height: 100%; max-height: 64px; position: relative;" class="c3"><svg width="214" height="64" style="overflow: hidden;"><defs><clipPath id="c3-1732262066230-clip"><rect width="215" height="62"></rect></clipPath><clipPath id="c3-1732262066230-clip-xaxis"><rect x="-31" y="-20" width="277" height="18"></rect></clipPath><clipPath id="c3-1732262066230-clip-yaxis"><rect x="-29" y="-4" width="19" height="86"></rect></clipPath><clipPath id="c3-1732262066230-clip-grid"><rect width="215" height="62"></rect></clipPath><clipPath id="c3-1732262066230-clip-subchart"><rect width="215"></rect></clipPath></defs><g transform="translate(-0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="107.5" y="31" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="215" height="62" style="opacity: 0;"></rect><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="144" x2="144" y1="0" y2="62" style="visibility: hidden;"></line></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="-15.357142857142858" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-1" x="20.642857142857142" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-2" x="56.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-3" x="92.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-4" x="128.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-5" x="164.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-6" x="199.64285714285714" y="0" width="30.714285714285715" height="62"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-data1" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"><path class=" c3-shape c3-shape c3-line c3-line-data1" d="M0,20.409090909090914L36,6.545454545454548L72,48.13636363636363L108,6.545454545454548L144,45.36363636363637L180,31.5L215,6.545454545454548" style="stroke: rgb(70, 127, 207); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"><path class=" c3-shape c3-shape c3-area c3-area-data1" d="M0,20.409090909090914L36,6.545454545454548L72,48.13636363636363L108,6.545454545454548L144,45.36363636363637L180,31.5L215,6.545454545454548L215,62L180,62L144,62L108,62L72,62L36,62L0,62Z" style="fill: rgb(70, 127, 207); opacity: 0.1;"></path></g><g class=" c3-selected-circles c3-selected-circles-data1"></g><g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1" style="cursor: pointer;"><circle class=" c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(70, 127, 207); opacity: 0;" cx="0" cy="20.409090909090914"></circle><circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(70, 127, 207); opacity: 0;" cx="36" cy="6.545454545454548"></circle><circle class="c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(70, 127, 207); opacity: 0;" cx="72" cy="48.13636363636363"></circle><circle class=" c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(70, 127, 207); opacity: 0;" cx="108" cy="6.545454545454548"></circle><circle class="c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(70, 127, 207); opacity: 0;" cx="144" cy="45.36363636363637"></circle><circle class="c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(70, 127, 207); opacity: 0;" cx="180" cy="31.5"></circle><circle class="c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(70, 127, 207); opacity: 0;" cx="215" cy="6.545454545454548"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(107.5,26)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-data1"></g></g></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip-xaxis)" transform="translate(0,62)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="215" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(36, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(72, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(180, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(215, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><path class="domain" d="M0,6V0H215V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,56)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">5</tspan></text></g><g class="tick" transform="translate(0,49)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,42)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">15</tspan></text></g><g class="tick" transform="translate(0,35)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">25</tspan></text></g><g class="tick" transform="translate(0,21)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,14)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">35</tspan></text></g><g class="tick" transform="translate(0,7)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><path class="domain" d="M0,1H0V62H0"></path></g><g class="c3-axis c3-axis-y2" transform="translate(215,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,56)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,50)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,44)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,38)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,32)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,26)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,20)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,14)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,8)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V62H6"></path></g></g><g transform="translate(-0.5,64.5)" style="visibility: hidden;"><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="215" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066230-clip-xaxis)" style="visibility: hidden; opacity: 1;"><g class="tick" transform="translate(0, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(36, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(72, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(180, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(215, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><path class="domain" d="M0,6V0H215V6"></path></g></g><g transform="translate(0,64)" style="visibility: hidden;"></g><text class="c3-title" x="107" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 15.6406px; left: 86.5px;"><table class="c3-tooltip"><tbody><tr class="c3-tooltip-name--data1"><td class="name"><span style="background-color:#467fcf"></span>Users online</td><td class="value">12</td></tr></tbody></table></div></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-red">-3%</div>
                        <h3 class="mb-1">423</h3>
                        <div class="text-muted">Users online</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-2" style="height: 100%; max-height: 64px; position: relative;" class="c3"><svg width="214" height="64" style="overflow: hidden;"><defs><clipPath id="c3-1732262066241-clip"><rect width="215" height="62"></rect></clipPath><clipPath id="c3-1732262066241-clip-xaxis"><rect x="-31" y="-20" width="277" height="18"></rect></clipPath><clipPath id="c3-1732262066241-clip-yaxis"><rect x="-29" y="-4" width="19" height="86"></rect></clipPath><clipPath id="c3-1732262066241-clip-grid"><rect width="215" height="62"></rect></clipPath><clipPath id="c3-1732262066241-clip-subchart"><rect width="215"></rect></clipPath></defs><g transform="translate(-0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="107.5" y="31" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="215" height="62" style="opacity: 0;"></rect><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="0" x2="0" y1="0" y2="62" style="visibility: hidden;"></line></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="-15.357142857142858" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-1" x="20.642857142857142" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-2" x="56.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-3" x="92.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-4" x="128.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-5" x="164.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-6" x="199.64285714285714" y="0" width="30.714285714285715" height="62"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-data1" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"><path class=" c3-shape c3-shape c3-line c3-line-data1" d="M0,20.409090909090914L36,6.545454545454548L72,48.13636363636363L108,6.545454545454548L144,45.36363636363637L180,31.5L215,6.545454545454548" style="stroke: rgb(231, 76, 60); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"><path class=" c3-shape c3-shape c3-area c3-area-data1" d="M0,20.409090909090914L36,6.545454545454548L72,48.13636363636363L108,6.545454545454548L144,45.36363636363637L180,31.5L215,6.545454545454548L215,62L180,62L144,62L108,62L72,62L36,62L0,62Z" style="fill: rgb(231, 76, 60); opacity: 0.1;"></path></g><g class=" c3-selected-circles c3-selected-circles-data1"></g><g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1" style="cursor: pointer;"><circle class="c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(231, 76, 60); opacity: 0;" cx="0" cy="20.409090909090914"></circle><circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(231, 76, 60); opacity: 0;" cx="36" cy="6.545454545454548"></circle><circle class="c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(231, 76, 60); opacity: 0;" cx="72" cy="48.13636363636363"></circle><circle class="c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(231, 76, 60); opacity: 0;" cx="108" cy="6.545454545454548"></circle><circle class="c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(231, 76, 60); opacity: 0;" cx="144" cy="45.36363636363637"></circle><circle class="c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(231, 76, 60); opacity: 0;" cx="180" cy="31.5"></circle><circle class="c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(231, 76, 60); opacity: 0;" cx="215" cy="6.545454545454548"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(107.5,26)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-data1"></g></g></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip-xaxis)" transform="translate(0,62)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="215" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(36, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(72, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(180, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(215, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><path class="domain" d="M0,6V0H215V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,56)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">5</tspan></text></g><g class="tick" transform="translate(0,49)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,42)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">15</tspan></text></g><g class="tick" transform="translate(0,35)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">25</tspan></text></g><g class="tick" transform="translate(0,21)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,14)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">35</tspan></text></g><g class="tick" transform="translate(0,7)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><path class="domain" d="M0,1H0V62H0"></path></g><g class="c3-axis c3-axis-y2" transform="translate(215,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,56)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,50)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,44)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,38)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,32)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,26)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,20)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,14)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,8)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V62H6"></path></g></g><g transform="translate(-0.5,64.5)" style="visibility: hidden;"><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="215" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066241-clip-xaxis)" style="visibility: hidden; opacity: 1;"><g class="tick" transform="translate(0, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(36, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(72, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(180, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(215, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><path class="domain" d="M0,6V0H215V6"></path></g></g><g transform="translate(0,64)" style="visibility: hidden;"></g><text class="c3-title" x="107" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 32.6406px; left: 19.5px;"><table class="c3-tooltip"><tbody><tr class="c3-tooltip-name--data1"><td class="name"><span style="background-color:#e74c3c"></span>Users online</td><td class="value">30</td></tr></tbody></table></div></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-green">-3%</div>
                        <h3 class="mb-1">423</h3>
                        <div class="text-muted">Users online</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-3" style="height: 100%; max-height: 64px; position: relative;" class="c3"><svg width="214" height="64" style="overflow: hidden;"><defs><clipPath id="c3-1732262066253-clip"><rect width="215" height="62"></rect></clipPath><clipPath id="c3-1732262066253-clip-xaxis"><rect x="-31" y="-20" width="277" height="18"></rect></clipPath><clipPath id="c3-1732262066253-clip-yaxis"><rect x="-29" y="-4" width="19" height="86"></rect></clipPath><clipPath id="c3-1732262066253-clip-grid"><rect width="215" height="62"></rect></clipPath><clipPath id="c3-1732262066253-clip-subchart"><rect width="215"></rect></clipPath></defs><g transform="translate(-0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="107.5" y="31" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="215" height="62" style="opacity: 0;"></rect><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="0" x2="0" y1="0" y2="62" style="visibility: hidden;"></line></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="-15.357142857142858" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-1" x="20.642857142857142" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-2" x="56.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-3" x="92.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-4" x="128.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-5" x="164.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-6" x="199.64285714285714" y="0" width="30.714285714285715" height="62"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-data1" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"><path class=" c3-shape c3-shape c3-line c3-line-data1" d="M0,20.409090909090914L36,6.545454545454548L72,48.13636363636363L108,6.545454545454548L144,45.36363636363637L180,31.5L215,6.545454545454548" style="stroke: rgb(94, 186, 0); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"><path class=" c3-shape c3-shape c3-area c3-area-data1" d="M0,20.409090909090914L36,6.545454545454548L72,48.13636363636363L108,6.545454545454548L144,45.36363636363637L180,31.5L215,6.545454545454548L215,62L180,62L144,62L108,62L72,62L36,62L0,62Z" style="fill: rgb(94, 186, 0); opacity: 0.1;"></path></g><g class=" c3-selected-circles c3-selected-circles-data1"></g><g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1" style="cursor: pointer;"><circle class="c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(94, 186, 0); opacity: 0;" cx="0" cy="20.409090909090914"></circle><circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(94, 186, 0); opacity: 0;" cx="36" cy="6.545454545454548"></circle><circle class="c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(94, 186, 0); opacity: 0;" cx="72" cy="48.13636363636363"></circle><circle class="c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(94, 186, 0); opacity: 0;" cx="108" cy="6.545454545454548"></circle><circle class="c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(94, 186, 0); opacity: 0;" cx="144" cy="45.36363636363637"></circle><circle class="c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(94, 186, 0); opacity: 0;" cx="180" cy="31.5"></circle><circle class="c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(94, 186, 0); opacity: 0;" cx="215" cy="6.545454545454548"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(107.5,26)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-data1"></g></g></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip-xaxis)" transform="translate(0,62)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="215" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(36, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(72, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(180, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(215, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><path class="domain" d="M0,6V0H215V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,56)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">5</tspan></text></g><g class="tick" transform="translate(0,49)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,42)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">15</tspan></text></g><g class="tick" transform="translate(0,35)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">25</tspan></text></g><g class="tick" transform="translate(0,21)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,14)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">35</tspan></text></g><g class="tick" transform="translate(0,7)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><path class="domain" d="M0,1H0V62H0"></path></g><g class="c3-axis c3-axis-y2" transform="translate(215,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,56)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,50)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,44)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,38)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,32)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,26)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,20)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,14)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,8)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V62H6"></path></g></g><g transform="translate(-0.5,64.5)" style="visibility: hidden;"><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="215" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066253-clip-xaxis)" style="visibility: hidden; opacity: 1;"><g class="tick" transform="translate(0, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(36, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(72, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(180, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(215, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><path class="domain" d="M0,6V0H215V6"></path></g></g><g transform="translate(0,64)" style="visibility: hidden;"></g><text class="c3-title" x="107" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 42.6406px; left: 19.5px;"><table class="c3-tooltip"><tbody><tr class="c3-tooltip-name--data1"><td class="name"><span style="background-color:#5eba00"></span>Users online</td><td class="value">30</td></tr></tbody></table></div></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-yellow">9%</div>
                        <h3 class="mb-1">423</h3>
                        <div class="text-muted">Users online</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-4" style="height: 100%; max-height: 64px; position: relative;" class="c3"><svg width="214" height="64" style="overflow: hidden;"><defs><clipPath id="c3-1732262066265-clip"><rect width="215" height="62"></rect></clipPath><clipPath id="c3-1732262066265-clip-xaxis"><rect x="-31" y="-20" width="277" height="18"></rect></clipPath><clipPath id="c3-1732262066265-clip-yaxis"><rect x="-29" y="-4" width="19" height="86"></rect></clipPath><clipPath id="c3-1732262066265-clip-grid"><rect width="215" height="62"></rect></clipPath><clipPath id="c3-1732262066265-clip-subchart"><rect width="215"></rect></clipPath></defs><g transform="translate(-0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="107.5" y="31" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="215" height="62" style="opacity: 0;"></rect><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="0" x2="0" y1="0" y2="62" style="visibility: hidden;"></line></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="-15.357142857142858" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-1" x="20.642857142857142" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-2" x="56.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-3" x="92.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-4" x="128.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-5" x="164.64285714285714" y="0" width="30.714285714285715" height="62"></rect><rect class=" c3-event-rect c3-event-rect-6" x="199.64285714285714" y="0" width="30.714285714285715" height="62"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-data1" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"><path class=" c3-shape c3-shape c3-line c3-line-data1" d="M0,20.409090909090914L36,6.545454545454548L72,48.13636363636363L108,6.545454545454548L144,45.36363636363637L180,31.5L215,6.545454545454548" style="stroke: rgb(241, 196, 15); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"><path class=" c3-shape c3-shape c3-area c3-area-data1" d="M0,20.409090909090914L36,6.545454545454548L72,48.13636363636363L108,6.545454545454548L144,45.36363636363637L180,31.5L215,6.545454545454548L215,62L180,62L144,62L108,62L72,62L36,62L0,62Z" style="fill: rgb(241, 196, 15); opacity: 0.1;"></path></g><g class=" c3-selected-circles c3-selected-circles-data1"></g><g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1" style="cursor: pointer;"><circle class="c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(241, 196, 15); opacity: 0;" cx="0" cy="20.409090909090914"></circle><circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(241, 196, 15); opacity: 0;" cx="36" cy="6.545454545454548"></circle><circle class="c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(241, 196, 15); opacity: 0;" cx="72" cy="48.13636363636363"></circle><circle class="c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(241, 196, 15); opacity: 0;" cx="108" cy="6.545454545454548"></circle><circle class="c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(241, 196, 15); opacity: 0;" cx="144" cy="45.36363636363637"></circle><circle class=" c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(241, 196, 15); opacity: 0;" cx="180" cy="31.5"></circle><circle class=" c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(241, 196, 15); opacity: 0;" cx="215" cy="6.545454545454548"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(107.5,26)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-data1" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-data1"></g></g></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip-xaxis)" transform="translate(0,62)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="215" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(36, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(72, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(180, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(215, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><path class="domain" d="M0,6V0H215V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,56)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">5</tspan></text></g><g class="tick" transform="translate(0,49)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,42)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">15</tspan></text></g><g class="tick" transform="translate(0,35)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">25</tspan></text></g><g class="tick" transform="translate(0,21)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,14)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">35</tspan></text></g><g class="tick" transform="translate(0,7)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><path class="domain" d="M0,1H0V62H0"></path></g><g class="c3-axis c3-axis-y2" transform="translate(215,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,56)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,50)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,44)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,38)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,32)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,26)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,20)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,14)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,8)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V62H6"></path></g></g><g transform="translate(-0.5,64.5)" style="visibility: hidden;"><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="215" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://localhost:8080/home-dashboard#c3-1732262066265-clip-xaxis)" style="visibility: hidden; opacity: 1;"><g class="tick" transform="translate(0, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(36, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(72, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(144, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(180, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(215, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><path class="domain" d="M0,6V0H215V6"></path></g></g><g transform="translate(0,64)" style="visibility: hidden;"></g><text class="c3-title" x="107" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 6.64062px; left: 19.5px;"><table class="c3-tooltip"><tbody><tr class="c3-tooltip-name--data1"><td class="name"><span style="background-color:#f1c40f"></span>Users online</td><td class="value">30</td></tr></tbody></table></div></div>
                      </div>
                    </div>
                    <script>
                      require(['c3', 'jquery'], function (c3, $) {
                      	$(document).ready(function() {
                      		var chart = c3.generate({
                      			bindto: '#chart-bg-users-4',
                      			padding: {
                      				bottom: -10,
                      				left: -1,
                      				right: -1
                      			},
                      			data: {
                      				names: {
                      					data1: 'Users online'
                      				},
                      				columns: [
                      					['data1', 30, 40, 10, 40, 12, 22, 40]
                      				],
                      				type: 'area'
                      			},
                      			legend: {
                      				show: false
                      			},
                      			transition: {
                      				duration: 0
                      			},
                      			point: {
                      				show: false
                      			},
                      			tooltip: {
                      				format: {
                      					title: function (x) {
                      						return '';
                      					}
                      				}
                      			},
                      			axis: {
                      				y: {
                      					padding: {
                      						bottom: 0,
                      					},
                      					show: false,
                      					tick: {
                      						outer: false
                      					}
                      				},
                      				x: {
                      					padding: {
                      						left: 0,
                      						right: 0
                      					},
                      					show: false
                      				}
                      			},
                      			color: {
                      				pattern: ['#f1c40f']
                      			}
                      		});
                      	});
                      });
                    </script>
                  </div>
                </div>
                <!-- end Statistik -->
            <div class="row row-cards">

              <div class="col-sm-6 col-lg-3">
                <div class="card p-3">
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
                <div class="card p-3">
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
                <div class="card p-3">
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
                <div class="card p-3">
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
            <div class="row row-cards row-deck">
              <div class="col-lg-6">
                <div class="card card-aside">
                  <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-klaasen-54203-500.jpg)"></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                    <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div>
                      <div>
                        <a href="./profile.html" class="text-default">Rose Bradley</a>
                        <small class="d-block text-muted">3 days ago</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-aside">
                  <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-marcu-114194-500.jpg)"></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">Well, I didn't vote for you.</a></h4>
                    <div class="text-muted">Well, we did do the nose. Why? Shut up! Will you shut up?! You don't frighten us, English pig-dog...</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/16.jpg)"></div>
                      <div>
                        <a href="./profile.html" class="text-default">Peter Richards</a>
                        <small class="d-block text-muted">3 days ago</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/female/17.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>Michelle Schultz</div>
                            <div class="small text-muted">
                              Registered: Feb 21, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>0%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-red" role="progressbar" style="width: 0%"
						     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="payment payment-googlewallet"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>5 minutes ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.0" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">0%</div>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/female/21.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>Crystal Austin</div>
                            <div class="small text-muted">
                              Registered: Mar 28, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>96%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-green" role="progressbar" style="width: 96%"
						     aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="payment payment-mastercard"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>a minute ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.96" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">96%</div>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/male/32.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>Douglas Ray</div>
                            <div class="small text-muted">
                              Registered: Jan 6, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>6%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-red" role="progressbar" style="width: 6%"
						     aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="payment payment-shopify"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>a minute ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.06" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">6%</div>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/female/12.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>Teresa Reyes</div>
                            <div class="small text-muted">
                              Registered: Feb 23, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>36%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-red" role="progressbar" style="width: 36%"
						     aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="payment payment-ebay"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>2 minutes ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.36" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">36%</div>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/female/4.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>Emma Wade</div>
                            <div class="small text-muted">
                              Registered: Mar 10, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>7%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-red" role="progressbar" style="width: 7%"
						     aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="payment payment-paypal"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>a minute ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.07" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">7%</div>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/female/27.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>Carol Henderson</div>
                            <div class="small text-muted">
                              Registered: Feb 12, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>80%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-green" role="progressbar" style="width: 80%"
						     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="payment payment-visa"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>9 minutes ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.8" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">80%</div>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar d-block" style="background-image: url(demo/faces/male/20.jpg)">
                              <span class="avatar-status bg-green"></span>
                            </div>
                          </td>
                          <td>
                            <div>Christopher Harvey</div>
                            <div class="small text-muted">
                              Registered: Jan 12, 2018
                            </div>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>83%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-green" role="progressbar" style="width: 83%"
						     aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="payment payment-googlewallet"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <div>8 minutes ago</div>
                          </td>
                          <td class="text-center">
                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.83" data-thickness="3" data-color="blue">
                              <div class="chart-circle-value">83%</div>
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
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Browser Stats</h4>
                  </div>
                  <table class="table card-table">
                    <tr>
                      <td width="1"><i class="fa fa-chrome text-muted"></i></td>
                      <td>Google Chrome</td>
                      <td class="text-right"><span class="text-muted">23%</span></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-firefox text-muted"></i></td>
                      <td>Mozila Firefox</td>
                      <td class="text-right"><span class="text-muted">15%</span></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-safari text-muted"></i></td>
                      <td>Apple Safari</td>
                      <td class="text-right"><span class="text-muted">7%</span></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-internet-explorer text-muted"></i></td>
                      <td>Internet Explorer</td>
                      <td class="text-right"><span class="text-muted">9%</span></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-opera text-muted"></i></td>
                      <td>Opera mini</td>
                      <td class="text-right"><span class="text-muted">23%</span></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-edge text-muted"></i></td>
                      <td>Microsoft edge</td>
                      <td class="text-right"><span class="text-muted">9%</span></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h2 class="card-title">Projects</h2>
                  </div>
                  <table class="table card-table">
                    <tr>
                      <td>Admin Template</td>
                      <td class="text-right">
                        <span class="badge badge-default">65%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Landing Page</td>
                      <td class="text-right">
                        <span class="badge badge-success">Finished</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Backend UI</td>
                      <td class="text-right">
                        <span class="badge badge-danger">Rejected</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Personal Blog</td>
                      <td class="text-right">
                        <span class="badge badge-default">40%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>E-mail Templates</td>
                      <td class="text-right">
                        <span class="badge badge-default">13%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>Corporate Website</td>
                      <td class="text-right">
                        <span class="badge badge-warning">Pending</span>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Members</h3>
                  </div>
                  <div class="card-body o-auto" style="height: 15rem">
                    <ul class="list-unstyled list-separated">
                      <li class="list-separated-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/12.jpg)"></span>
                          </div>
                          <div class="col">
                            <div>
                              <a href="javascript:void(0)" class="text-inherit">Amanda Hunt</a>
                            </div>
                            <small class="d-block item-except text-sm text-muted h-1x">amanda_hunt@example.com</small>
                          </div>
                          <div class="col-auto">
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
                          </div>
                        </div>
                      </li>
                      <li class="list-separated-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/21.jpg)"></span>
                          </div>
                          <div class="col">
                            <div>
                              <a href="javascript:void(0)" class="text-inherit">Laura Weaver</a>
                            </div>
                            <small class="d-block item-except text-sm text-muted h-1x">lauraweaver@example.com</small>
                          </div>
                          <div class="col-auto">
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
                          </div>
                        </div>
                      </li>
                      <li class="list-separated-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/29.jpg)"></span>
                          </div>
                          <div class="col">
                            <div>
                              <a href="javascript:void(0)" class="text-inherit">Margaret Berry</a>
                            </div>
                            <small class="d-block item-except text-sm text-muted h-1x">margaret88@example.com</small>
                          </div>
                          <div class="col-auto">
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
                          </div>
                        </div>
                      </li>
                      <li class="list-separated-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/2.jpg)"></span>
                          </div>
                          <div class="col">
                            <div>
                              <a href="javascript:void(0)" class="text-inherit">Nancy Herrera</a>
                            </div>
                            <small class="d-block item-except text-sm text-muted h-1x">nancy_83@example.com</small>
                          </div>
                          <div class="col-auto">
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
                          </div>
                        </div>
                      </li>
                      <li class="list-separated-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/male/34.jpg)"></span>
                          </div>
                          <div class="col">
                            <div>
                              <a href="javascript:void(0)" class="text-inherit">Edward Larson</a>
                            </div>
                            <small class="d-block item-except text-sm text-muted h-1x">edward90@example.com</small>
                          </div>
                          <div class="col-auto">
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
                          </div>
                        </div>
                      </li>
                      <li class="list-separated-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="avatar avatar-md d-block" style="background-image: url(demo/faces/female/11.jpg)"></span>
                          </div>
                          <div class="col">
                            <div>
                              <a href="javascript:void(0)" class="text-inherit">Joan Hanson</a>
                            </div>
                            <small class="d-block item-except text-sm text-muted h-1x">joan.hanson@example.com</small>
                          </div>
                          <div class="col-auto">
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
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-12">
                <div class="row">
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-blue">+5%</div>
                        <h3 class="mb-1">423</h3>
                        <div class="text-muted">Users online</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-1" style="height: 100%"></div>
                      </div>
                    </div>
                    <script>
                      require(['c3', 'jquery'], function (c3, $) {
                      	$(document).ready(function() {
                      		var chart = c3.generate({
                      			bindto: '#chart-bg-users-1',
                      			padding: {
                      				bottom: -10,
                      				left: -1,
                      				right: -1
                      			},
                      			data: {
                      				names: {
                      					data1: 'Users online'
                      				},
                      				columns: [
                      					['data1', 30, 40, 10, 40, 12, 22, 40]
                      				],
                      				type: 'area'
                      			},
                      			legend: {
                      				show: false
                      			},
                      			transition: {
                      				duration: 0
                      			},
                      			point: {
                      				show: false
                      			},
                      			tooltip: {
                      				format: {
                      					title: function (x) {
                      						return '';
                      					}
                      				}
                      			},
                      			axis: {
                      				y: {
                      					padding: {
                      						bottom: 0,
                      					},
                      					show: false,
                      					tick: {
                      						outer: false
                      					}
                      				},
                      				x: {
                      					padding: {
                      						left: 0,
                      						right: 0
                      					},
                      					show: false
                      				}
                      			},
                      			color: {
                      				pattern: ['#467fcf']
                      			}
                      		});
                      	});
                      });
                    </script>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-red">-3%</div>
                        <h3 class="mb-1">423</h3>
                        <div class="text-muted">Users online</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-2" style="height: 100%"></div>
                      </div>
                    </div>
                    <script>
                      require(['c3', 'jquery'], function (c3, $) {
                      	$(document).ready(function() {
                      		var chart = c3.generate({
                      			bindto: '#chart-bg-users-2',
                      			padding: {
                      				bottom: -10,
                      				left: -1,
                      				right: -1
                      			},
                      			data: {
                      				names: {
                      					data1: 'Users online'
                      				},
                      				columns: [
                      					['data1', 30, 40, 10, 40, 12, 22, 40]
                      				],
                      				type: 'area'
                      			},
                      			legend: {
                      				show: false
                      			},
                      			transition: {
                      				duration: 0
                      			},
                      			point: {
                      				show: false
                      			},
                      			tooltip: {
                      				format: {
                      					title: function (x) {
                      						return '';
                      					}
                      				}
                      			},
                      			axis: {
                      				y: {
                      					padding: {
                      						bottom: 0,
                      					},
                      					show: false,
                      					tick: {
                      						outer: false
                      					}
                      				},
                      				x: {
                      					padding: {
                      						left: 0,
                      						right: 0
                      					},
                      					show: false
                      				}
                      			},
                      			color: {
                      				pattern: ['#e74c3c']
                      			}
                      		});
                      	});
                      });
                    </script>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-green">-3%</div>
                        <h3 class="mb-1">423</h3>
                        <div class="text-muted">Users online</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-3" style="height: 100%"></div>
                      </div>
                    </div>
                    <script>
                      require(['c3', 'jquery'], function (c3, $) {
                      	$(document).ready(function() {
                      		var chart = c3.generate({
                      			bindto: '#chart-bg-users-3',
                      			padding: {
                      				bottom: -10,
                      				left: -1,
                      				right: -1
                      			},
                      			data: {
                      				names: {
                      					data1: 'Users online'
                      				},
                      				columns: [
                      					['data1', 30, 40, 10, 40, 12, 22, 40]
                      				],
                      				type: 'area'
                      			},
                      			legend: {
                      				show: false
                      			},
                      			transition: {
                      				duration: 0
                      			},
                      			point: {
                      				show: false
                      			},
                      			tooltip: {
                      				format: {
                      					title: function (x) {
                      						return '';
                      					}
                      				}
                      			},
                      			axis: {
                      				y: {
                      					padding: {
                      						bottom: 0,
                      					},
                      					show: false,
                      					tick: {
                      						outer: false
                      					}
                      				},
                      				x: {
                      					padding: {
                      						left: 0,
                      						right: 0
                      					},
                      					show: false
                      				}
                      			},
                      			color: {
                      				pattern: ['#5eba00']
                      			}
                      		});
                      	});
                      });
                    </script>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-value float-right text-yellow">9%</div>
                        <h3 class="mb-1">423</h3>
                        <div class="text-muted">Users online</div>
                      </div>
                      <div class="card-chart-bg">
                        <div id="chart-bg-users-4" style="height: 100%"></div>
                      </div>
                    </div>       
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
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
                        <tr>
                          <td><span class="text-muted">001401</span></td>
                          <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                          <td>
                            Carlson Limited
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            15 Dec 2017
                          </td>
                          <td>
                            <span class="status-icon bg-success"></span> Paid
                          </td>
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
                        <tr>
                          <td><span class="text-muted">001402</span></td>
                          <td><a href="invoice.html" class="text-inherit">UX Wireframes</a></td>
                          <td>
                            Adobe
                          </td>
                          <td>
                            87956421
                          </td>
                          <td>
                            12 Apr 2017
                          </td>
                          <td>
                            <span class="status-icon bg-warning"></span> Pending
                          </td>
                          <td>$1200</td>
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
                        <tr>
                          <td><span class="text-muted">001403</span></td>
                          <td><a href="invoice.html" class="text-inherit">New Dashboard</a></td>
                          <td>
                            Bluewolf
                          </td>
                          <td>
                            87952621
                          </td>
                          <td>
                            23 Oct 2017
                          </td>
                          <td>
                            <span class="status-icon bg-warning"></span> Pending
                          </td>
                          <td>$534</td>
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
                        <tr>
                          <td><span class="text-muted">001404</span></td>
                          <td><a href="invoice.html" class="text-inherit">Landing Page</a></td>
                          <td>
                            Salesforce
                          </td>
                          <td>
                            87953421
                          </td>
                          <td>
                            2 Sep 2017
                          </td>
                          <td>
                            <span class="status-icon bg-secondary"></span> Due in 2 Weeks
                          </td>
                          <td>$1500</td>
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
                        <tr>
                          <td><span class="text-muted">001405</span></td>
                          <td><a href="invoice.html" class="text-inherit">Marketing Templates</a></td>
                          <td>
                            Printic
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            29 Jan 2018
                          </td>
                          <td>
                            <span class="status-icon bg-danger"></span> Paid Today
                          </td>
                          <td>$648</td>
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
                        <tr>
                          <td><span class="text-muted">001406</span></td>
                          <td><a href="invoice.html" class="text-inherit">Sales Presentation</a></td>
                          <td>
                            Tabdaq
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            4 Feb 2018
                          </td>
                          <td>
                            <span class="status-icon bg-secondary"></span> Due in 3 Weeks
                          </td>
                          <td>$300</td>
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
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">First link</a></li>
                    <li><a href="#">Second link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Third link</a></li>
                    <li><a href="#">Fourth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Fifth link</a></li>
                    <li><a href="#">Sixth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Other link</a></li>
                    <li><a href="#">Last link</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              Premium and Open Source dashboard template with responsive and high quality UI. For Free!
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                    <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>