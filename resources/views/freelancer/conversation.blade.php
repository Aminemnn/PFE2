<!--          ***** Chat ********* -->
<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">
<head>
    <meta charset="utf-8" />
    <title>chat  | Job4Free</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon"  href="{{asset('FreeAssets/images/favicon.ico')}}">
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

<x-freelancer-layout>
<body>

<!-- Begin page -->


<!-- removeNotificationModal -->
<!-- /.modal -->
<!-- ========== App Menu ========== -->

<!-- Left Sidebar End -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="chat-leftsidebar">
                    <div class="px-4 pt-4 mb-3">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">

                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="Add Contact">

                                    <!-- Button trigger modal -->
                                </div>
                            </div>
                        </div>
                        <div class="search-box">
                            <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                    </div> <!-- .p-4 -->

                    <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#chats" role="tab">
                                Chats
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="chats" role="tabpanel">
                            <div class="chat-room-list pt-3" data-simplebar>
                                <div class="d-flex align-items-center px-4 mb-2">
                                    <div class="flex-grow-1">
                                        <h4 class="mb-0 fs-11 text-muted text-uppercase">Direct Messages</h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="New Message">

                                            <!-- Button trigger modal -->

                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$id}}" id="id_conv">
                                <div class="chat-message-list">
                                    <ul class="list-unstyled chat-list chat-user-list" id="userList">
                                        @foreach($con as $con)
                                            @if($con->id==$id)
                                        <li id="contact-id-2" data-name="direct-message" class style="background-color: #cdf3ff">
                                            <a href="javascript: void(0);" class="unread-msg-user">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                        <div class="avatar-xxs">
                                                            @if($con->user_id1==Auth::user()->id)
                                                            <img src="{{asset('uploads/photouser/'.$con->img_user2)}}" class="rounded-circle img-fluid userprofile" alt="">
                                                            @else
                                                                <img src="{{asset('uploads/photouser/'.$con->img_user1)}}" class="rounded-circle img-fluid userprofile" alt="">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        @if($con->user_id1==Auth::user()->id)
                                                        <p class="text-truncate mb-0">{{$con->name_user2}}</p>
                                                        @else
                                                            <p class="text-truncate mb-0">{{$con->name_user1}}</p>
                                                        @endif

                                                    </div>

                                                </div>
                                                <p style="margin-left: 31px;font-weight: normal"><a href="{{route('freelancerconversation',['id'=>$con->id])}}" style="margin-top:-20px">{{$con->last_message}}</a></p>
                                            </a>
                                        </li>
                                            @else
                                                <li id="contact-id-2" data-name="direct-message" class >
                                                    <a href="javascript: void(0);" class="unread-msg-user">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                <div class="avatar-xxs">
                                                                    @if($con->user_id1==Auth::user()->id)
                                                                        <img src="{{asset('uploads/photouser/'.$con->img_user2)}}" class="rounded-circle img-fluid userprofile" alt="">
                                                                    @else
                                                                        <img src="{{asset('uploads/photouser/'.$con->img_user1)}}" class="rounded-circle img-fluid userprofile" alt="">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                @if($con->user_id1==Auth::user()->id)
                                                                    <p class="text-truncate mb-0">{{$con->name_user2}}</p>
                                                                @else
                                                                    <p class="text-truncate mb-0">{{$con->name_user1}}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p style="margin-left: 31px;font-weight: normal"><a href="{{route('freelancerconversation',['id'=>$con->id])}}" style="margin-top:-20px">{{$con->last_message}}</a></p>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="chat-message-list">

                                    <ul class="list-unstyled chat-list chat-user-list mb-0" id="channelList">
                                    </ul>
                                </div>
                                <!-- End chat-message-list -->
                            </div>
                        </div>
                    </div>
                    <!-- end tab contact -->
                </div>
                <!-- end chat leftsidebar -->
                <!-- Start User chat -->
                <div class="user-chat w-100 overflow-hidden">

                    <div class="chat-content d-lg-flex">
                        <!-- start chat conversation section -->
                        <div class="w-100 overflow-hidden position-relative">
                            <!-- conversation user -->
                            <div class="position-relative">
                                <div class="position-relative" id="users-chat">
                                    <div class="p-3 user-chat-topbar">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4 col-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                        <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1">
                                                            <i class="ri-arrow-left-s-line align-bottom"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                                @if($conversation->first()->user_id1==Auth::user()->id)
                                                                    <img src="{{asset('uploads/photouser/'.$conversation->first()->img_user2)}}" class="rounded-circle avatar-xs" alt="">
                                                                @else
                                                                    <img src="{{asset('uploads/photouser/'.$conversation->first()->img_user1)}}" class="rounded-circle avatar-xs" alt="">
                                                                @endif
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate mb-0 fs-16">
                                                                    @if($conversation->first()->user_id1==Auth::user()->id)
                                                                    <a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">{{$conversation->first()->name_user2}}
                                                                    </a>
                                                                    @else
                                                                        <a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">{{$conversation->first()->name_user1}}
                                                                        </a>
                                                                        @endif
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-4">
                                                <ul class="list-inline user-chat-nav text-end mb-0">
                                                    <li class="list-inline-item m-0">
                                                        <div class="dropdown">
                                                            <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i data-feather="search" class="icon-sm"></i>
                                                            </button>
                                                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                                <div class="p-2">
                                                                    <div class="search-box">
                                                                        <input type="text" class="form-control bg-light border-light" placeholder="Search here..." onkeyup="searchMessages()" id="searchMessage">
                                                                        <i class="ri-search-2-line search-icon"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                        <button type="button" class="btn btn-ghost-secondary btn-icon" data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">
                                                            <i data-feather="info" class="icon-sm"></i>
                                                        </button>
                                                    </li>

                                                    <li class="list-inline-item m-0">
                                                        <div class="dropdown">
                                                            <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i data-feather="more-vertical" class="icon-sm"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item d-block d-lg-none user-profile-show" href="#"><i class="ri-user-2-fill align-bottom text-muted me-2"></i> View Profile</a>
                                                                <a class="dropdown-item" href="#"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i> Archive</a>
                                                                <a class="dropdown-item" href="#"><i class="ri-mic-off-line align-bottom text-muted me-2"></i> Muted</a>
                                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end chat user head -->
                                    <div class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar>





                                                   <ul class="list-unstyled chat-conversation-list" id="users-conversation" >


                                                   </ul>




                                        <!-- end chat-conversation-list -->
                                    </div>
                                    <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoard" role="alert">
                                        Message copied
                                    </div>
                                </div>

                                <div class="position-relative" id="channel-chat">
                                    <div class="p-3 user-chat-topbar">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4 col-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                        <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">Lisa Parker</a></h5>
                                                                <p class="text-truncate text-muted fs-14 mb-0 userStatus"><small>24 Members</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-4">
                                                <ul class="list-inline user-chat-nav text-end mb-0">
                                                    <li class="list-inline-item m-0">
                                                        <div class="dropdown">
                                                            <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i data-feather="search" class="icon-sm"></i>
                                                            </button>
                                                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                                <div class="p-2">
                                                                    <div class="search-box">
                                                                        <input type="text" class="form-control bg-light border-light" placeholder="Search here..." onkeyup="searchMessages()" id="searchMessage">
                                                                        <i class="ri-search-2-line search-icon"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                        <button type="button" class="btn btn-ghost-secondary btn-icon" data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">
                                                            <i data-feather="info" class="icon-sm"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end chat user head -->
                                    <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar>
                                        <ul class="list-unstyled chat-conversation-list" id="channel-conversation">
                                        </ul>
                                        <!-- end chat-conversation-list -->

                                    </div>
                                    <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoardChannel" role="alert">
                                        Message copied
                                    </div>
                                </div>

                                <!-- end chat-conversation -->

                                <div class="chat-input-section p-3 p-lg-4">


                                        <div class="row g-0 align-items-center">
                                            <div class="col">
                                                <div class="chat-input-feedback">
                                                    Please Enter a Message
                                                </div>
                                                <input type="text" required class="form-control chat-input bg-light border-light" id="chat-input" placeholder="Type your message..." autocomplete="off">
                                                @if ($conversation->first()->user_id1==Auth::user()->id)
                                                <input type="hidden" id="userid" value="{{$conversation->first()->user_id2}}">
                                                @else
                                                <input type="hidden" id="userid" value="{{$conversation->first()->user_id1}}">
                                                @endif
                                                @if ($conversation->first()->name_user1==Auth::user()->name)
                                                <input type="hidden" id="nameuser" value="{{$conversation->first()->name_user2}}">
                                                @else
                                                <input type="hidden" id="nameuser" value="{{$conversation->first()->name_user1}}">
                                                @endif
                                                @if ($conversation->first()->name_user1==Auth::user()->name)
                                                <input type="hidden" id="imguser" value="{{$conversation->first()->img_user2}}">
                                                @else
                                                <input type="hidden" id="imguser" value="{{$conversation->first()->img_user1}}">
                                                @endif
                                                <input type="hidden" id="convid" value="{{$conversation->first()->id}}">
                                            </div>
                                            <div class="col-auto">
                                                <div class="chat-input-links ms-2">
                                                    <div class="links-list-item">
                                                        <button type="submit" class="btn btn-success chat-send waves-effect waves-light" onclick="updated__message()">
                                                            <i class="ri-send-plane-2-fill align-bottom"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                </div>
                                <div class="replyCard">
                                    <div class="card mb-0">
                                        <div class="card-body py-3">
                                            <div class="replymessage-block mb-0 d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h5 class="conversation-name"></h5>
                                                    <p class="mb-0"></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button" id="close_toggle" class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                                        <i class="bx bx-x align-middle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat-wrapper -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!-- Compose Modal -->
    <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header p-3 bg-light">
                    <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3 position-relative">
                            <input type="text" class="form-control email-compose-input" data-choices data-choices-limit="15" value="support@themesbrand.com" data-choices-removeItem placeholder="To">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="ck-editor-reverse">
                            <div id="email-editor"></div>
                            <div class="ck ck-reset ck-editor ck-rounded-corners" dir="ltr" lang="en" aria-labelledby="ck-editor__label_e6437d2a8ebaaeb1322f15c2addc951d7" >
                                <label class="ck ck-label ck-voice-label" id="ck-editor__label_e6437d2a8ebaaeb1322f15c2addc951d7"> Rich Text Editor </label>
                                <div class="ck ck-editor__top ck-reset_all" role="presentation">
                                    <div class="ck ck-sticky-panel" style="display: none;"></div>
                                </div>
                                <div class="ck ck-editor__main" role="presentation">
                                    <div class="ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline ck-blurred" lang="en" dir="ltr" role="textbox" aria-label="Rich Text Editor, main" contenteditable="true">
                                        <p>
                                            <br data-cke-filler="true">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal">Discard</button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

</div>
<!-- end main content-->
</body>
</x-freelancer-layout>
<!-- JAVASCRIPT -->
<script src="{{asset('FreeAssets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('FreeAssets/js/plugins.js')}}"></script>
<!-- apexcharts -->
<script src="{{asset('FreeAssets/libs/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/fg-emoji-picker/fgEmojiPicker.js')}}"></script>
<!-- App js -->
<script src="{{asset('FreeAssets/js/pages/chat.init.js')}}"></script>

<script src="{{asset('FreeAssets/js/app.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    setInterval(function() {
        var id = $('#id_conv').val(); // Remplacez 123 par la valeur réelle de l'id que vous souhaitez utiliser

        $(document).ready(function() {
        $.ajax({
            url: '/get-message/'+ id,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                var message='';
                for(var i=0;i<response.length;i++){
                    if(response[i].id_expediteur=={{Auth::user()->id}}){
            message+='<li class="chat-list right" id="chat-list-1">';
            message+='<div class="conversation-list">';
            message+='<div class="user-chat-content">';
            message+='<div class="ctext-wrap">';
            message+='<div class="ctext-wrap-content">'
            message+='<p class="mb-0 ctext-content" id="text_message">'+response[i].message+'</p>';
            message+='</div>';
            message+='</div>';
            if(response[i].read=="false"){
                message += '<p style="text-align:right;color:gray;">Send</p>';
            }else{
                message+='<p style="text-align:right;color:gray;">Vu</p>'
            }
            message+='</div>';

            message+='</div>';

            message+='</li>';
        }else{

            message+='<li class="chat-list right" id="chat-list-1" style="margin-right:870px">';
            message+='<div class="conversation-list">';
            message+='<div class="user-chat-content">';
            message+='<div class="ctext-wrap">';
            message+='<div class="ctext-wrap-content" style="background-color: white;color: black;">'
            message+='<p class="mb-0 ctext-content" id="text_message">'+response[i].message+'</p>';
            message+='</div>';
            message+='</div>';
            message+='</div>';
            message+='</div>';
            message+='</li>';
        }
        }
        $("#users-conversation").html(message);

            },
            error: function(xhr, status, error) {
                // Gérer les erreurs de la requête AJAX
                console.error(error);
            }
        });
        });
    }, 1000);
    </script>

<script>
    function updated__message(){
        $(document).ready(function (){
            var message = $('#chat-input').val();
            var userId = $('#userid').val();
            var convoId = $('#convid').val();
            var name_user= $('#nameuser').val();
            var img_user= $('#imguser').val();
        $.ajax({
            url: '{{ route("send_message") }}',
            type: 'POST',
            data: {
                '_token': '{{ csrf_token() }}',
                message: message,
                userId: userId,
                convid: convoId,
                name_user:name_user,
                img_user:img_user,
            },
            success: function(response) {
                console.log("amine");
                $('#chat-input').val('');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // La requête a échoué
                console.error(errorThrown);
            }
        });
        });
    }
</script>
<script>
    setInterval(function () {
        $(document).ready(function() {
            $.ajax({
                url: '/get_last_message',
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    },1000);
</script>
</html>
