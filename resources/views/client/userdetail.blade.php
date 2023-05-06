<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">

    <style>
    body{margin-top:20px;}
    .icon-box.medium {
        font-size: 20px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }
    .icon-box {
        font-size: 30px;
        margin-bottom: 33px;
        display: inline-block;
        color: #ffffff;
        height: 65px;
        width: 65px;
        line-height: 65px;
        background-color: #59b73f;
        text-align: center;
        border-radius: 0.3rem;
    }
    .social-icon-style2 li a {
        display: inline-block;
        font-size: 14px;
        text-align: center;
        color: #ffffff;
        background: #59b73f;
        height: 41px;
        line-height: 41px;
        width: 41px;
    }
    .rounded-3 {
        border-radius: 0.3rem !important;
    }

    .social-icon-style2 {
        margin-bottom: 0;
        display: inline-block;
        padding-left: 10px;
        list-style: none;
    }

    .social-icon-style2 li {
        vertical-align: middle;
        display: inline-block;
        margin-right: 5px;
    }

    a, a:active, a:focus {
        color: #616161;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    .text-secondary, .text-secondary-hover:hover {
        color: #59b73f !important;
    }
    .display-25 {
        font-size: 1.4rem;
    }

    .text-primary, .text-primary-hover:hover {
        color: #ff712a !important;
    }

    p {
        margin: 0 0 20px;
    }

    .mb-1-6, .my-1-6 {
        margin-bottom: 1.6rem;
    }
</style>
</head>
<body>
<x-client-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
            <div class="card border-0 shadow">
                <img src="{{asset('../../../uploads/photouser/'.$user->first()->image)}}" alt="...">
                <div class="card-body p-1-9 p-xl-5">
                    <div class="mb-4">
                        <h3 class="h4 mb-0">{{$user->first()->name}}</h3>
                        <span class="text-info">{{$user->first()->sous_categorie}}</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3 text-secondary"><i class="far fa-envelope display-25 me-3 text-secondary"></i>{{$user->first()->email}}</li>
                        <li class="mb-3 text-secondary"><i class="fas fa-mobile-alt display-25 me-3 text-secondary"></i>{{$user->first()->phone}}</li>
                        <li class="mb-3 text-secondary"><i class="fas fa-map-marker-alt display-25 me-3 text-secondary"></i>{{$user->first()->adresse}}</li>
                    </ul>
                    <ul class="social-icon-style2 ps-0" >
                        <button type="button" class="btn btn-success" style="width: 250% ; "><a href="#" style="text-decoration: none;color: whitesmoke">Contact<i class="fa-regular fa-envelope" style="margin-left:5px"></i></a></button>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ps-lg-1-6 ps-xl-5">

                <div class="mb-5 wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="mb-0 text-info">#Education</h2>
                    </div>
                    <div class="row mt-n4">
                        @foreach($diplome as $diplome)
                        <div class="col-sm-6 col-xl-4 mt-4">
                            <div class="card text-center border-0 rounded-3">
                                <div class="card-body">
                                    <i class="ti-bookmark-alt icon-box medium rounded-3 mb-4"></i>
                                    <h3 class="h5 mb-3">{{$diplome->titre_diplome}}</h3>
                                    <p class="mb-0"><strong>Country : </strong>{{$diplome->country}}</p>
                                    <p class="mb-0"><strong>Institute : </strong>{{$diplome->institut}}</p>
                                    <p class="mb-0"><strong>Year : </strong>{{$diplome->annee}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-5 wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="mb-0 text-info">#Experience</h2>
                    </div>
                    <div class="row mt-n4">
                        @foreach($experience as $experience)
                            <div class="col-sm-6 col-xl-4 mt-4">
                                <div class="card text-center border-0 rounded-3">
                                    <div class="card-body">
                                        <i class="ti-bookmark-alt icon-box medium rounded-3 mb-4"></i>
                                        <h3 class="h5 mb-3">{{$experience->title}}</h3>
                                        <p class="mb-0"><strong>Post : </strong>{{$experience->poste}}</p>
                                        <p class="mb-0"><strong>Company Name : </strong>{{$experience->societe}}</p>
                                        <p class="mb-0"><strong>Location : </strong>{{$experience->location}}</p>
                                        <p class="mb-0"><strong>Start date : </strong>{{$experience->datedeb}}</p>
                                        <p class="mb-0"><strong>end date : </strong>{{$experience->datefin}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="mb-0 text-info">#Skills</h2>
                    </div>
                    <div class="progress-style1">
                        @foreach($skill as $skill)
                        <div class="progress-text">
                            <div class="row">
                                <div class="col-6 fw-bold">{{$skill->name}}</div>
                                <div class="col-6 text-end">{{$skill->level}}</div>
                            </div>
                        </div>
                        <div class="custom-progress progress rounded-3 mb-4">
                            <div class="progress-bar bg-warning" style="width:{{$skill->level}}%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-client-layout>
</body>
</html>
