<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="shortcut icon" href="{{asset('contents/admin')}}/assets/images/favicon.ico">
    <link href="{{asset('contents/admin')}}/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('contents/admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('contents/admin')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('contents/admin')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{asset('contents/admin')}}/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
  </head>
  <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="wrapper">
      <div class="leftside-menu">
        <a href="index.html" class="logo text-center logo-light">
          <span class="logo-lg">
            <img src="{{asset('contents/admin')}}/assets/images/logo.png" alt="" height="16">
          </span>
          <span class="logo-sm">
            <img src="{{asset('contents/admin')}}/assets/images/logo_sm.png" alt="" height="16">
          </span>
        </a>
        <div class="h-100" id="leftside-menu-container" data-simplebar>
          <ul class="side-nav">
            <li class="side-nav-title side-nav-item">Navigation</li>


            <li class="side-nav-item">
              <a href="{{url('dashboard')}}" class="side-nav-link">
                <i class="uil-home"></i>
                <span> Dashboards </span>
              </a>
            </li>
            <li class="side-nav-item">
              <a href="apps-chat.html" class="side-nav-link">
                <i class="uil-user"></i>
                <span> Users </span>
              </a>
            </li>

            <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                <i class="uil-cog"></i>
                <span> Manage </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarEmail">
                <ul class="side-nav-second-level">
                  <li>
                    <a href="apps-email-inbox.html">Basic Information</a>
                  </li>
                  <li>
                    <a href="apps-email-read.html">Contact Information</a>
                  </li>
                  <li>
                    <a href="apps-email-read.html">Social Media</a>
                  </li>
                  <li>
                    <a href="apps-email-read.html">Contents</a>
                  </li>
                  <li>
                    <a href="apps-email-read.html">Pages</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="side-nav-item">
                <a href="{{url('/')}}" target="_blank" class="side-nav-link">
                    <i class="uil-globe"></i>
                    <span>Live Site</span>
                  </a>
                </li>
            <form method="POST" action="{{route('logout')}}" id="logout-form">
                @csrf
            <li class="side-nav-item">
                <a href="{{route('logout')}}" class="side-nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout"></i>
                    <span>Logout</span>
                  </a>
                </li>
            </form>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="content-page">
        <div class="content">
          <div class="navbar-custom">
            <ul class="list-unstyled topbar-menu float-end mb-0">
              <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <i class="dripicons-bell noti-icon"></i>
                  <span class="noti-icon-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">
                  <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                      <span class="float-end">
                        <a href="javascript: void(0);" class="text-dark">
                          <small>Clear All</small>
                        </a>
                      </span>Notification
                    </h5>
                  </div>
                  <div style="max-height: 230px;" data-simplebar>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                      <div class="notify-icon bg-primary">
                        <i class="mdi mdi-comment-account-outline"></i>
                      </div>
                      <p class="notify-details">Caleb Flakelar commented on Admin <small class="text-muted">1 min ago</small>
                      </p>
                    </a>
                  </div>
                  <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all"> View All </a>
                </div>
              </li>

              <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <span class="account-user-avatar">
                    <img src="{{asset('contents/admin')}}/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                  </span>
                  <span>
                    <span class="account-user-name">{{Auth::user()->name}}</span>
                    <span class="account-position">Founder</span>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                  <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                  </div>
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>My Account</span>
                  </a>
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-edit me-1"></i>
                    <span>Settings</span>
                  </a>
                  <form method="POST" action="{{route('logout')}}" id="logout-form">
                    @csrf
                    <a href="{{route('logout')}}" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout"></i>
                        <span>Logout</span>
                      </a>
                </form>
                </div>
              </li>
            </ul>
            <button class="button-menu-mobile open-left">
              <i class="mdi mdi-menu"></i>
            </button>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <div class="page-title-right">
                  <form class="d-flex">
                    <div class="input-group">
                      <input type="text" class="form-control form-control-light" id="dash-daterange">
                      <span class="input-group-text bg-primary border-primary text-white">
                        <i class="mdi mdi-calendar-range font-13"></i>
                      </span>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                      <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary ms-1">
                      <i class="mdi mdi-filter-variant"></i>
                    </a>
                  </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
              </div>
            </div>
          </div>
          @yield('content')
        </div>
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <script>
                  document.write(new Date().getFullYear())
                </script> © Hyper - Coderthemes.com
              </div>
              <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-md-block">
                  <a href="javascript: void(0);">About</a>
                  <a href="javascript: void(0);">Support</a>
                  <a href="javascript: void(0);">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="{{asset('contents/admin')}}/assets/js/vendor.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/app.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/vendor/apexcharts.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/pages/demo.dashboard.js"></script>
  </body>
</html>
