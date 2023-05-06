<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
</head>
<body>
<h1>Welcome to my page!</h1>
<p>hello world</p>
<div class="banner_section layout_padding">
    @foreach($categories as $item)
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!--model-->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="best_text">best</div>
                                <div class="image_1"><img src="" alt="immg"></div>
                            </div>
                            <div class="col-md-5">
                                <h1 class="banner_taital">{{ $item -> nom }}</h1>
                                <p class="banner_text">Join a community of talented freelancers and unlock
                                    new opportunities to showcase your skills and earn a living doing what you love
                                </p>
                                <div class="contact_bt"><a href="{{route('tester')}}">Get Started</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>
</body>
</html>
