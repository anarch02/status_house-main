@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Chat</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dastyle</a></li>
                            <li class="breadcrumb-item active">Chat</li>
                        </ol>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="chat-box-left">
                <div data-simplebar>
                    <div class="tab-content chat-list" id="pills-tabContent" >
                        <div class="tab-pane fade show active" id="general_chat">
                            @foreach ($chats as $chat)
                            <a href="" class="media">
                                <div class="media-left">
                                    <img src="{{ asset('admin/images/users/user-8.jpg') }}" alt="user" class="rounded-circle thumb-md">
                                </div><!-- media-left -->
                                <div class="media-body">
                                    <div>
                                        <h6>{{ $chat->full_name }}</h6>
                                        <p>How are you Friend...</p>
                                    </div>
                                    <div>
                                        <span>15 Feb</span>
                                    </div>
                                </div><!-- end media-body -->
                            </a> <!--end media-->
                            @endforeach

                        </div><!--end general chat-->
                    </div><!--end tab-content-->
                </div>
            </div><!--end chat-box-left -->

            <div class="chat-box-right">
                <div class="chat-header">
                    <a href="" class="media">
                        <div class="media-left">
                            <img src="{{ asset('admin/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-md">
                        </div><!-- media-left -->
                        <div class="media-body">
                            <div>
                                <h6 class="m-0">{{ $last_chat->full_name }}</h6>
                                <p class="mb-0">{{ $last_chat->name }}</p>
                            </div>
                        </div><!-- end media-body -->
                    </a><!--end media-->
                </div><!-- end chat-header -->
                <div class="chat-body" data-simplebar>
                    <div class="chat-detail">
                        @foreach ($messages as $message)
                        <div class="media">
                            @if (!$message->is_bot)
                            <div class="media-img">
                                <img src="{{ asset('admin/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-md">
                            </div>
                            @endif
                            <div class="media-body {{ ($message->is_bot) ? 'reverse' : ' ' }}">
                                <div class="chat-msg">
                                    <p>{{ $message->text }}</p>
                                </div>
                            </div>
                            @if ($message->is_bot)
                            <div class="media-img">
                                <img src="{{ asset('admin/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-md">
                            </div>
                            @endif
                        </div><!--end media-->
                        @endforeach
                    </div>  <!-- end chat-detail -->
                </div><!-- end chat-body -->
            </div><!--end chat-box-right -->
        </div> <!-- end col -->
    </div><!-- end row -->

</div><!-- container -->
@endsection
