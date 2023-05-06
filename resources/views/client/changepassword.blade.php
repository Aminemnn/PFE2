<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js
"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{asset('css/changepassword.css')}}">

</head>
<body>
<p style="margin-left: 33px;margin-top: 23px"><a href="{{route('settingclient')}}" style="text-decoration: none;color: black">EXIT</a></p>
<div class="container">
    <div class="row">
        <div class="col-8" id="col">
            <img src="../../../assets/6325247.png" id="img">
        </div>
        <div class="col-4" id="col2">
            <form action="{{ route('changepassword') }}" method="POST">
                @csrf
                <h1 style="font-family: 'Trebuchet MS';text-align: center">Change Password</h1>
                <br>
                <div class="mb-3">
                    <label for="inputPassword5" class="form-label" style="font-family: 'Trebuchet MS'">Old Password <span style="color: red">*</span></label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="old_password" required style="border-radius: 80px;padding: 20px;border-color: #F19B01">
                    @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputPassword5" class="form-label" style="font-family: 'Trebuchet MS'">New Password <span style="color: red">*</span></label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="new_password" required style="border-radius: 80px;padding: 20px;border-color: #F19B01">
                    @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputPassword5" class="form-label" style="font-family: 'Trebuchet MS'">Confirmed New Password <span style="color: red">*</span></label>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="new_password_confirmation" required style="border-radius: 80px;padding: 20px;border-color: #F19B01">
                    @error('new_password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-info" id="button" style="width: 100%;font-family: 'Trebuchet MS';background-color: #E1ECFE;color: black;border-color: #E1ECFE;padding: 10px;border-radius: 80px">Change</button>
                <br>

                <div class="card-body" style="width: 100%" id="result" class="d-none">

                    @if (session('status'))
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
                                title: 'Password change successfully'
                            })
                        </script>
                    @elseif (session('error'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: "Old Password Doesn't match!",
                            })
                        </script>
                @endif
            </form>

        </div>
    </div>
</div>

</body>
</html>
