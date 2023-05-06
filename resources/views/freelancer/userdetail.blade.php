<!-- page empty -->
<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">


<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 04:14:23 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Client details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('FreeAssets/images/favicon.ico')}}">

    <!-- plugin css -->
    <link href="{{asset('FreeAssets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset('FreeAssets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('FreeAssets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('FreeAssets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('FreeAssets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('FreeAssets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<x-freelancer-layout>
            <!-- container-fluid -->
            <div class="col-xxl-3">
                <div class="card" id="contact-view-detail">
                    <div class="card-body text-center">
                        <div class="position-relative d-inline-block">
                            <img src="{{asset('../../../uploads/photouser/'.$user->first()->image)}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                            <span class="contact-active position-absolute rounded-circle bg-success"><span class="visually-hidden"></span>
                        </div>
                        <h5 class="mt-4 mb-1">{{$user->first()->name}}</h5>
                        <p class="text-muted">{{$user->first()->role}}</p>

                        <ul class="list-inline mb-0">
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);" class="avatar-title bg-soft-success text-success fs-15 rounded">
                                    <i class="ri-phone-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);" class="avatar-title bg-soft-danger text-danger fs-15 rounded">
                                    <i class="ri-mail-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);" class="avatar-title bg-soft-warning text-warning fs-15 rounded">
                                    <i class="ri-question-answer-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h6 class="text-muted text-uppercase fw-semibold mb-3">Personal Information</h6>
                        <p class="text-muted mb-4">{{$user->first()->bio}}</p>
                        <div class="table-responsive table-card">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                <tr>
                                    <td class="fw-medium" scope="row">Designation</td>
                                    <td>{{$user->first()->categorie}} / {{$user->first()->sous_categorie}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Email ID</td>
                                    <td>{{$user->first()->email}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Phone No</td>
                                    <td>{{$user->first()->phone}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Adress</td>
                                    <td>{{$user->first()->adresse}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Level</td>
                                    <td>
                                        <span class="badge badge-soft-primary">{{$user->first()->level}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Date Of Creation</td>
                                    <td>{{$user->first()->created_at}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
</x-freelancer-layout>
<!-- END layout-wrapper -->




<!--end back-to-top-->




<!-- Theme Settings -->


<!-- JAVASCRIPT -->
<script src="{{asset('FreeAssets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('FreeAssets/js/plugins.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('FreeAssets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- Vector map-->
<script src="{{asset('FreeAssets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/jsvectormap/maps/world-merc.js')}}"></script>

<!-- Dashboard init -->
<script src="{{asset('FreeAssets/js/pages/dashboard-analytics.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('Freeassets/js/app.js')}}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 04:14:23 GMT -->
</html>
