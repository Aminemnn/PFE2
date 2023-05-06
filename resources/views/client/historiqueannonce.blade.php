<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Historique</title>
    <link rel="stylesheet" type="text/css" href="{{asset('homeAssets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .col-sm-4{
        margin-top: 13px;
    }
</style>
<body>

<div class="news_section layout_padding" style="background-color: whitesmoke">
    <div class="container">
        <h1 class="news_taital" style="color: black;">Project Historique</h1>
        <p class="news_text" style="color: #000000">historique in dashboard and slider in homepage </p>
        <div class="news_section_2 layout_padding">
            <div class="row">
                @foreach($postes as $postes)
                <div class="col-sm-4" style="transform: scale(0.8)">
                    <div class="box_main_1" style="border-radius: 25px">
                        <div class="padding_15">
                            <h2 class="speed_text">{{$postes->title}}</h2>
                            <div class="post_text">Post by : {{$postes->name_user}} <span style="float: right;">{{$postes->created_at}}</span></div>
                            <p class="long_text">{{$postes->description}}</p>
                            <div class="row align-items-center px-2 mt-4 mb-2">
                                <div class="col-sm-6" >
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <span class="material-symbols-outlined">
                                            </span>
                                            <span class="text-sm me-3 ">{{$postes->price}}</span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark my-3">
                                        <form action="{{route('deleteannonce')}}" method="post" onsubmit=" return confirm('are you sure')">
                                            @csrf
                                            <button type="submit" class="btn btn-warning" style="width: 100%" name="delete" value="{{$postes->id}}">Delete</button>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                    @if(session('delete'))
                        <script>
                            Swal.fire(
                                'Deleted!',
                                '{{session('delete')}}',
                                'success'
                            )
                        </script>
                    @elseif(session('errordelete'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: "You Can't delete because this poste linked with customer",
                            })
                        </script>
                    @endif
            </div>
        </div>
    </div>
</div>

</body>
</html>
