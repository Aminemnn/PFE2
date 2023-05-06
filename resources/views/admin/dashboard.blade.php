<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JOB4FREE Admin Dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="E:\bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('AdminDashAssets/vendors/typicons.font/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('AdminDashAssets/vendors/css/vendor.bundle.base.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('AdminDashAssets/css/vertical-layout-light/style.css')}}">
    <!-- end-inject -->
    <link rel="shortcut icon" href="{{asset('AdminDashAssets/images/favicon.png')}}">
</head>
<body>
<!-- Pro Banner
<div class='row' id='proBanner'>
    <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
          <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
          <a href="https://www.bootstrapdash.com/product/celestial-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
          <i class="typcn typcn-delete-outline" id="bannerClose"></i>
        </span>
    </div>
</div>-->
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="{{route('admin')}}"><img src="{{asset('AdminDashAssets/images/LOGO.png')}}" alt="logo"/></a>
            <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>

        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <!--   <ul class="navbar-nav mr-lg-2">
                  <li class="nav-item  d-none d-lg-flex">
                      <a class="nav-link" href="#">
                          Calendar
                      </a>
                  </li>
                  <li class="nav-item  d-none d-lg-flex">
                      <a class="nav-link active" href="#">
                          Statistic
                      </a>
                  </li>
                  <li class="nav-item  d-none d-lg-flex">
                      <a class="nav-link" href="#">
                          Employee
                      </a>
                  </li>
              </ul> -->
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item d-none d-lg-flex  mr-2">
                    <a class="nav-link" href="#">
                        Help
                    </a>
                </li>

                <li class="nav-item dropdown d-flex">
                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                        <i class="typcn typcn-message-typing"></i>
                        <span class="count bg-success">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('AdminDashAssets/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('AdminDashAssets/images//faces/face2.jpg')}}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('AdminDashAssets/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown  d-flex">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="typcn typcn-bell mr-0"></i>
                        <span class="count bg-danger">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="typcn typcn-info-large mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="typcn typcn-cog mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Settings</h6>
                                <p class="font-weight-light small-text mb-0">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="typcn typcn-user-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <!-- logout and settings dropdown-->
                    <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                        <i class="sidebar-profile-image">  <!-- typcn typcn-user-outline mr-0 -->
                            <img src="{{asset('AdminDashAssets/images/faces/face29.png')}}" alt="image">
                        </i>
                        <!-- in this section we gonna import profile name and profile pic from database -->
                        <span class="nav-profile-name">Evan Morales</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="typcn typcn-cog text-primary"></i>
                            Settings
                        </a>
                        <!-- LOGOUT ACTION -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="route('logout')"
                               onclick="event.preventDefault();
                                 this.closest('form').submit();"  >
                                <i class="typcn typcn-power text-primary"></i>
                                Logout
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close typcn typcn-delete-outline"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles primary"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default border"></div>
                </div>
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <!--the vertical nav -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" data-aos="fade-right">
            <ul class="nav">
                <li class="nav-item">
                    <!--        there se Profile section (icone + name )
                          <div class="d-flex sidebar-profile">
                              <div class="sidebar-profile-image">
                                  <img src="<(//'AdminDashAssets/images/faces/face29.png')}}" alt="image">
                                  <span class="sidebar-status-indicator"></span>
                              </div>
                              <div class="sidebar-profile-name">
                                  <p class="sidebar-name">
                                      Kenneth Osborne
                                  </p>
                                  <p class="sidebar-designation">
                                      Welcome
                                  </p>
                              </div>
                          </div>-->
                    <!-- SEARCH BAR-->
                    <div class="nav-search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                            <div class="input-group-append">
                  <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                    <p class="sidebar-menu-title">Dash menu</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin')}}">
                        <i class="typcn typcn-device-desktop menu-icon"></i>
                        <span class="menu-title">Dashboard
                            <!--New     <span class="badge badge-primary ml-3">New</span>-->
                        </span>
                    </a>
                </li>
                <!-- First List-->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">User Management</span>
                        <i class="typcn typcn-chevron-right menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('freelancerManagement')}}">
                                        Freelancers List
                                    </a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('ClientManagement')}}">
                                        Clients List
                                    </a>
                                </li>
                        </ul>
                    </div>
                </li>
                <!-- standard-->
                <!--there-->
                <ul class="sidebar-legend">
                    <li>
                        <p class="sidebar-menu-title">Category</p>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">#Sales</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">#Growth</a></li>
                </ul>
        </nav>
        <!--end vertical nav -->
        <!-- partial -->

        <div class="main-panel"  data-aos="fade-up">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0 font-weight-bold">Kenneth Osborne</h3>
                        <p>Your last login: 21h ago from newzealand.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
    </div>
</footer>
<!-- partial -->

<!-- main-panel ends -->

<!-- page-body-wrapper ends -->


<!-- container-scroller -->
<!-- base:js -->
<script src="{{asset('AdminDashAssets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('AdminDashAssets/js/off-canvas.js')}}"></script>
<script src="{{asset('AdminDashAssets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('AdminDashAssets/js/template.js')}}"></script>
<script src="{{asset('AdminDashAssets/js/settings.js')}}"></script>
<script src="{{asset('AdminDashAssets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('AdminDashAssets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('AdminDashAssets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('AdminDashAssets/js/dashboard.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    AOS.init();
</script>
<!-- End custom js for this page-->
</body>
</html>
