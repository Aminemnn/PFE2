<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('FreeAssets/images/favicon.ico')}}">
    <!-- swiper css -->
    <link rel="stylesheet"  href="{{asset('FreeAssets/libs/swiper/swiper-bundle.min.css')}}">
    <!-- Layout config Js -->

    <!-- Bootstrap Css -->
    <link href="{{asset('FreeAssets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('FreeAssets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('FreeAssets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('FreeAssets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .range-wrap {
        position: relative;
        margin: 0 auto 3rem;
    }
    .range {
        width: 100%;
    }
    .bubble {
        background: red;
        color: white;
        padding: 4px 12px;
        position: absolute;
        border-radius: 4px;
        left: 50%;
        transform: translateX(-50%);
        top: 18px;
    }
    .bubble::after {
        content: "";
        position: absolute;
        width: 2px;
        height: 2px;
        background: red;
        top: -1px;
        left: 50%;
    }
</style>
<body>
<x-freelancer-layout>
    <section style="background-color: #eee;">
        <div class="page-content">
            <div class="container-fluid">

                <div class="position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg profile-setting-img">
                        <img src="{{asset('uploads/photouser/'.Auth::user()->coverture_img)}}" class="profile-wid-img" alt="">
                        <div class="overlay-content">
                            <div class="text-end p-3">
                                <form method="post" action="{{route('changecov')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                        <input id="profile-foreground-img-file-input" type="file" accept="Image/*" name="photocov" class="profile-foreground-img-file-input">
                                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                        </label>

                                    </div>
                                    <button type="submit" id="Changebtn" class="btn btn-warning" style="width: 100%" disabled>Change</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card mt-n5">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                        <img src="{{asset('uploads/photouser/'.Auth::user()->image)}}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                        <form method="post" action="{{route('changepro')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input id="profile-img-file-input" name="photopro" type="file" class="profile-img-file-input">
                                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                   <span class="avatar-title rounded-circle bg-light text-body">
                                                    <i class="ri-camera-fill"></i>
                                                    </span>
                                                </label>
                                                <div class="flex-shrink-0">
                                                    <button type="submit" id="change2btnn" class="btn btn-warning" disabled style="margin-top: 37px;position: relative;right: 66px">Change</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <h5 class="fs-16 mb-1" style="margin-top: 27px">{{Auth::user()->name}}</h5>
                                    <p class="text-muted mb-0">{{Auth::user()->categorie}}</p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-0">Portfolio</h5>
                                    </div>
                                </div>
                                <form method="post" action="{{route('update_account')}}">
                                    @csrf
                                    <div class="mb-3 d-flex">
                                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                                       <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                          <i class="ri-github-fill"></i>
                                        </span>
                                        </div>
                                        <input type="url" class="form-control" name="github" id="gitUsername" placeholder="Username" >
                                    </div>
                                    <div class="mb-3 d-flex">
                                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                                       <span class="avatar-title rounded-circle fs-16 bg-primary">
                                          <i class="ri-facebook-fill"></i>
                                       </span>
                                        </div>
                                        <input type="url" class="form-control" name="facebook" id="dribbleName" placeholder="Username" >
                                    </div>
                                    <div class="d-flex">
                                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                                       <span class="avatar-title rounded-circle fs-16 bg-danger">
                                           <i class="ri-linkedin-fill"></i>
                                       </span>
                                        </div>
                                        <input type="url" class="form-control" name="linkedin" id="pinterestName" placeholder="Username">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-warning" style="width: 100%">Save</button>
                                </form>
                                <br>

                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-xxl-9">
                        <div class="card mt-xxl-n5">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                            <i class="fas fa-home"></i> Personal Details
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                            <i class="far fa-user"></i> Change Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                                            <i class="far fa-envelope"></i> Privacy Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-4">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <form action="{{route('updateinfo')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="firstnameInput" name="name" placeholder="Enter your firstname" value="{{Auth::user()->name}}">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                        <input type="text" class="form-control" id="phonenumberInput" name="phone" placeholder="Enter your phone number" value="{{Auth::user()->phone}}">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" disabled id="emailInput" placeholder="Enter your email" value="{{Auth::user()->email}}">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="JoiningdatInput" class="form-label">Joining Date</label>
                                                        <input type="text" class="form-control" disabled data-provider="flatpickr" id="JoiningdatInput" data-date-format="d M, Y" data-deafult-date="24 Nov, 2021" value="{{Auth::user()->created_at}}" placeholder="Select date" />
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="designationInput" class="form-label">Designation</label>
                                                        <input type="text" class="form-control" id="designationInput" disabled placeholder="Designation" value="{{Auth::user()->categorie }} / {{Auth::user()->sous_categorie }}">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="cityInput" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="cityInput" name="ville" placeholder="City" value="{{Auth::user()->ville}}" />
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="countryInput" class="form-label">Country</label>
                                                        <input type="text" class="form-control"  id="countryInput" name="country" placeholder="Country" value="{{Auth::user()->country}}" />
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="zipcodeInput" class="form-label">Zip Code</label>
                                                        <input type="text" class="form-control" minlength="5" maxlength="6" name="code_postal" id="zipcodeInput" placeholder="Enter zipcode" value="{{Auth::user()->codepostal}}">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3 pb-2">
                                                        <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea" name="bio" placeholder="{{Auth::user()->bio}}" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="submit" class="btn btn-primary">Updates</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="changePassword" role="tabpanel">
                                        <form action="{{ route('changepassword') }}" method="POST">
                                            @csrf
                                            <div class="row g-2">
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                        <input type="password" class="form-control" name="old_password" id="oldpasswordInput" placeholder="Enter current password" required>

                                                    </div>
                                                    @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="newpasswordInput" class="form-label">New Password*</label>
                                                        <input type="password" class="form-control" name="new_password" id="newpasswordInput" placeholder="Enter new password" required>
                                                    </div>
                                                    @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                        <input type="password" class="form-control" name="new_password_confirmation" id="confirmpasswordInput" placeholder="Confirm password" required>
                                                    </div>
                                                    @error('new_password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success">Change Password</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>

                                    </div>
                                    <!--end tab-pane-->



                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="privacy" role="tabpanel">
                                        <form method="POST" action="{{route('deleted_account')}}">
                                            @csrf
                                            <div>
                                                @php
                                                    $existing_delete = App\Models\delete::where('id_user', Auth::user()->id)
                                                        ->first();
                                                @endphp
                                                <h5 class="card-title text-decoration-underline mb-3">Delete This Account:</h5>
                                                <p class="text-muted">Go to the Data & Privacy section of your profile Account. Scroll to "Your data & privacy options." Delete your Profile Account. Follow the instructions to delete your account :</p>
                                                @if($existing_delete)
                                                    <div>
                                                        <input type="password" class="form-control" disabled id="passwordInput" required placeholder="Enter your password" name="password"  style="max-width: 265px;">
                                                    </div>
                                                    <div class="hstack gap-2 mt-3">
                                                        <button type="submit" class="btn btn-soft-danger" disabled>Delete This Account</button>
                                                    </div>
                                                @else
                                                    <div>
                                                        <input type="password" class="form-control"  id="passwordInput" required placeholder="Enter your password" name="password"  style="max-width: 265px;">
                                                    </div>
                                                    <div class="hstack gap-2 mt-3">
                                                        <button type="submit" class="btn btn-soft-danger" >Delete This Account</button>
                                                    </div>
                                                @endif
                                            </div>
                                        </form>
                                        <br>
                                        <form method="POST" action="{{route('verified_account')}}">
                                            @csrf
                                            <div>
                                                <h5 class="card-title text-decoration-underline mb-3">Verified This Account:</h5>
                                                @if(Auth::user()->level<10)
                                                    <div>
                                                        <input type="password" class="form-control" disabled required id="passwordInput" placeholder="Enter your password" name="password" style="max-width: 265px;">
                                                    </div>
                                                    <div class="hstack gap-2 mt-3">
                                                        <button type="submit" class="btn btn-soft-success" disabled>Verified This Account</button>
                                                    </div>
                                                    <p class="text-danger">Your level does not allow you to take this step</p>
                                                @else
                                                    <div>
                                                        <input type="password" class="form-control"  required id="passwordInput" placeholder="Enter your password" name="password" style="max-width: 265px;">
                                                    </div>
                                                    <div class="hstack gap-2 mt-3">
                                                        <button type="submit" class="btn btn-soft-success" >Verified This Account</button>
                                                    </div>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
        </div>

    </section>
    @if(session('order_success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{session('order_success')}}'
            })
        </script>
    @endif
    @if(session('update_account_success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{session('update_account_success')}}'
            })
        </script>
    @endif
    @if(session('update_info_success'))
        <script>
            Swal.fire(
                'Updated!',
                '{{session('update_info_success')}}!',
                'success'
            )
        </script>
    @endif
    @if(session('change_password_sucess'))
        <script>
            Swal.fire(
                'Changed!',
                '{{session('change_password_sucess')}}!',
                'success'
            )
        </script>
    @endif
    @if(session('change_password_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{session('change_password_error')}}',
            })
        </script>
    @endif

    @if(session('verified_password_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{session('verified_password_error')}}',
            })
        </script>
    @endif
    @if(session('verified_success'))
        <script>
            Swal.fire(
                'Send!',
                '{{session('verified_success')}}!',
                'success'
            )
        </script>
    @endif
    @if(session('deleted_password_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{session('deleted_password_error')}}',
            })
        </script>
    @endif
    @if(session('deleted_success'))
        <script>
            Swal.fire(
                'Send!',
                '{{session('deleted_success')}}!',
                'success'
            )
        </script>
    @endif
</x-freelancer-layout>
<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;
    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>

<script>
    const allRanges = document.querySelectorAll(".range-wrap");
    allRanges.forEach(wrap => {
        const range = wrap.querySelector(".range");
        const bubble = wrap.querySelector(".bubble");

        range.addEventListener("input", () => {
            setBubble(range, bubble);
        });
        setBubble(range, bubble);
    });

    function setBubble(range, bubble) {
        const val = range.value;
        const min = range.min ? range.min : 0;
        const max = range.max ? range.max : 100;
        const newVal = Number(((val - min) * 100) / (max - min));
        bubble.innerHTML = val;

        // Sorta magic numbers based on size of the native UI thumb
        bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
    }
</script>
<!-- JAVASCRIPT -->
<script src="{{asset('FreeAssets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('FreeAssets/js/plugins.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('FreeAssets/libs/swiper/swiper-bundle.min.js')}}"></script>
<!-- profile init js -->
<script src="{{asset('FreeAssets/js/pages/profile-setting.init.js')}}"></script>
<!-- App js -->
<script src="{{asset('FreeAssets/js/app.js')}}"></script>
</body>
</html>
