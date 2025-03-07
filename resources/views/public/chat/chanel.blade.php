<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Chat | Vhato - Responsive Bootstrap 5 Chat App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Vhato - Responsive Chat App Template in HTML. A fully featured HTML chat messenger template in Bootstrap 5" name="description" />
    <meta name="keywords" content="Vhato chat template, chat, web chat template, chat status, chat template, communication, discussion, group chat, message, messenger template, status"/>
    <meta content="Themesbrand" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" id="tabIcon">

    <!-- glightbox css -->
    <link rel="stylesheet" href="assets/libs/glightbox/css/glightbox.min.css">

    <!-- One of the following themes -->
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css" /> <!-- 'classic' theme -->

    <!-- swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <!-- Bootstrap Css -->

    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="layout-wrapper d-lg-flex">

    @include('public.chat.layout.sidbar')
    <!-- end chat-leftsidebar -->

    <!-- Start User chat -->
    <div class="user-chat w-100 overflow-hidden">

        <div class="chat-content d-lg-flex">
            <!-- start chat conversation section -->
            <div class="w-100 overflow-hidden position-relative">
                <!-- conversation user -->
                <div id="users-chat" class="position-relative">
                    <div class="py-3 user-chat-topbar">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-8">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                                        <a href="javascript: void(0);" class="btn-primary user-chat-remove fs-18 p-1"><i
                                                class="bx bx-chevron-left align-middle"></i></a>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                <img src="{{$chat_target->first()->image}}" class="rounded-circle avatar-sm" alt="">
                                                <span class="user-status"></span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate mb-0 fs-18"><a href="#"
                                                        class="user-profile-show text-reset">{{$chat_target->first()->name}}</a></h6>
                                                <p id="ONLILE" class="text-truncate text-muted mb-0 status"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-4">
                                <ul class="list-inline user-chat-nav text-end mb-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-search'></i>
                                            </button>
                                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                <div class="search-box p-2">
                                                    <input type="text" class="form-control" placeholder="Search.."
                                                        id="searchChatMessage">
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                            data-bs-target=".audiocallModal">
                                            <i class='bx bxs-phone-call'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                            data-bs-target=".videocallModal">
                                            <i class='bx bx-video'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                            data-bs-target=".pinnedtabModal">
                                            <i class='bx bx-bookmark'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn user-profile-show">
                                            <i class='bx bxs-info-circle'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none user-profile-show"
                                                    href="#">View Profile <i class="bx bx-user text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                    href="#" data-bs-toggle="modal" data-bs-target=".audiocallModal">Audio <i
                                                        class="bx bxs-phone-call text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                    href="#" data-bs-toggle="modal" data-bs-target=".videocallModal">Video <i
                                                        class="bx bx-video text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                    href="#">Archive <i class="bx bx-archive text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                    href="#">Muted <i class="bx bx-microphone-off text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                    href="#">Delete <i class="bx bx-trash text-muted"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- end chat user head -->

                    <!-- start chat conversation -->

                    <div class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar>
                        <ul class="list-unstyled chat-conversation-list" id ="Chat-Body">
                            @foreach ($Messages as  $Message)
                            <li class="chat-list right" id="2">
                                <div class="conversation-list">
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content" id="2">
                                                <p class="mb-0 ctext-content">
                                                    {{$Message->content}}
                                                </p>
                                            </div>
                                            <div class="align-self-start message-box-drop d-flex">
                                                <!-- Emoji Dropdown -->
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-emotion-happy-line"></i>
                                                    </a>
                                                    <div class="dropdown-menu emoji-dropdown-menu">
                                                        <div class="hstack align-items-center gap-2 px-2 fs-25">
                                                            <a href="javascript:void(0);">💛</a>
                                                            <a href="javascript:void(0);">🤣</a>
                                                            <a href="javascript:void(0);">😜</a>
                                                            <a href="javascript:void(0);">😘</a>
                                                            <a href="javascript:void(0);">😍</a>
                                                            <div class="avatar-xs">
                                                                <a href="javascript:void(0);" class="avatar-title bg-soft-primary rounded-circle fs-19 text-primary">+</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- More Options Dropdown -->
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#" id="reply-message-0" data-bs-toggle="collapse" data-bs-target=".replyCollapse">
                                                            Reply <i class="bx bx-share ms-2 text-muted"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">
                                                            Forward <i class="bx bx-share-alt ms-2 text-muted"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#" id="copy-message-0">
                                                            Copy <i class="bx bx-copy text-muted ms-2"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                                            Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                                            Mark as Unread <i class="bx bx-message-error text-muted ms-2"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" href="#">
                                                            Delete <i class="bx bx-trash text-muted ms-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name">
                                            <small class="text-muted time">{{ jdate($Message->updated_at)->format('h:i A');}}</small>
                                            <span class="text-success check-message-icon">
                                                <i class="bx bx-check-double"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show" id="copyClipBoard"
                        role="alert">
                        Message copied
                    </div>
                    <!-- end chat conversation end -->
                </div>



                <!-- conversation group -->
                <div id="channel-chat" class="position-relative">
                    <div class="py-3 user-chat-topbar">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-8">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                                        <a href="javascript: void(0);" class="btn-primary user-chat-remove fs-18 p-1"><i
                                                class="bx bx-chevron-left align-middle"></i></a>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3">
                                                <img src="assets/images/users/user-dummy-img.jpg" class="rounded-circle avatar-sm"
                                                    alt="">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate mb-0 fs-18"><a href="#"
                                                        class="user-profile-show text-reset">Design Phase 2</a></h6>
                                                <p class="text-truncate text-muted mb-0"><small>24 Members</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-4">
                                <ul class="list-inline user-chat-nav text-end mb-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-search'></i>
                                            </button>
                                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                <div class="search-box p-2">
                                                    <input type="text" class="form-control" placeholder="Search..">
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                            data-bs-target=".groupvideocallModal">
                                            <i class='bx bx-video'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn user-profile-show">
                                            <i class='bx bxs-info-circle'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none user-profile-show"
                                                    href="#">View Profile <i class="bx bx-user text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                    href="#" data-bs-toggle="modal" data-bs-target=".audiocallModal">Audio <i
                                                        class="bx bxs-phone-call text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                    href="#" data-bs-toggle="modal" data-bs-target=".videocallModal">Video <i
                                                        class="bx bx-video text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                    href="#">Archive <i class="bx bx-archive text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                    href="#">Muted <i class="bx bx-microphone-off text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                    href="#">Delete <i class="bx bx-trash text-muted"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end chat user head -->

                    <!-- start chat conversation -->

                    <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar>
                        <ul class="list-unstyled chat-conversation-list" id="channel-conversation">
                        </ul>
                    </div>
                    <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoardChannel"
                        role="alert">
                        message copied
                    </div>
                    <!-- end chat conversation end -->
                </div>

                <!-- start chat input section -->
                @if($chat_target->first()->manager == auth()->id())

                <div class="position-relative">
                    <div class="chat-input-section p-4 border-top">

                        <form id="chatinput-form" enctype="multipart/form-data">
                            <div class="row g-0 align-items-center">
                                <div class="file_Upload"></div>
                                <div class="col-auto">
                                    <div class="chat-input-links me-md-2">
                                        <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-placement="top" title="More">
                                            <button type="button"
                                                class="btn btn-link text-decoration-none btn-lg waves-effect"
                                                data-bs-toggle="collapse" data-bs-target="#chatinputmorecollapse"
                                                aria-expanded="false" aria-controls="chatinputmorecollapse">
                                                <i class="bx bx-dots-horizontal-rounded align-middle"></i>
                                            </button>
                                        </div>
                                        <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-placement="top" title="Emoji">
                                            <button type="button"
                                                class="btn btn-link text-decoration-none btn-lg waves-effect emoji-btn"
                                                id="emoji-btn">
                                                <i class="bx bx-smile align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <div class="chat-input-feedback">
                                            Please Enter a Message
                                        </div>
                                        <input  autocomplete="off" type="text"
                                            class="form-control form-control-lg bg-light border-0 chat-input" autofocus
                                            id="chat-input" placeholder="Type your message...">
                                            <input id="chanel_id" type="text" value="{{$chat_target->first()->id}}" style="display: none" >
                                            <input id="sender_id" type="text" value="{{auth()->id()}}" style="display: none" >
                                        {{-- <div class="chat-input-typing">
                                            <span class="typing-user d-flex">Victoria Lane
                                                is
                                                typing
                                                <span class="typing ms-2">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                            </span>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="chat-input-links ms-2 gap-md-1">
                                        <div class="links-list-item d-none d-sm-block"
                                            data-bs-container=".chat-input-links" data-bs-toggle="popover"
                                            data-bs-trigger="focus" data-bs-html="true" data-bs-placement="top"
                                            data-bs-content="<div class='loader-line'><div class='line'></div><div class='line'></div><div class='line'></div><div class='line'></div><div class='line'></div></div>">
                                            <button type="button"
                                                class="btn btn-link text-decoration-none btn-lg waves-effect"
                                                onclick="audioPermission()">
                                                <i class="bx bx-microphone align-middle"></i>
                                            </button>
                                        </div>
                                        <div class="links-list-item">
                                            <button type="button"
                                                onclick="sendMessage()"
                                                class="btn btn-primary btn-lg chat-send waves-effect waves-light"
                                                data-bs-toggle="collapse" data-bs-target=".chat-input-collapse1.show">
                                                <i class="bx bxs-send align-middle" id="submit-btn"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="chat-input-collapse chat-input-collapse1 collapse" id="chatinputmorecollapse">
                            <div class="card mb-0">
                                <div class="card-body py-3">
                                    <!-- Swiper -->
                                    <div class="swiper chatinput-links">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="text-center px-2 position-relative">
                                                    <div>
                                                        <input id="attachedfile-input" type="file" class="d-none"
                                                            accept=".zip,.rar,.7zip,.pdf" multiple>
                                                        <label for="attachedfile-input"
                                                            class="avatar-sm mx-auto stretched-link">
                                                            <span
                                                                class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                                <i class="bx bx-paperclip"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase mt-3 mb-0 text-body text-truncate">
                                                        Attached</h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2">
                                                    <div class="avatar-sm mx-auto">
                                                        <div
                                                            class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                            <i class="bx bxs-camera"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                            class="text-body stretched-link"
                                                            onclick="cameraPermission()">Camera</a></h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2 position-relative">
                                                    <div>
                                                        <input id="galleryfile-input" type="file" class="d-none"
                                                            accept="image/png, image/gif, image/jpeg" multiple>
                                                        <label for="galleryfile-input"
                                                            class="avatar-sm mx-auto stretched-link">
                                                            <span
                                                                class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                                <i class="bx bx-images"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0">Gallery
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2">
                                                    <div>
                                                        <input id="audiofile-input" type="file" class="d-none"
                                                            accept="audio/*" multiple>
                                                        <label for="audiofile-input"
                                                            class="avatar-sm mx-auto stretched-link">
                                                            <span
                                                                class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                                <i class="bx bx-headphone"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0">Audio</h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2">
                                                    <div class="avatar-sm mx-auto">
                                                        <div
                                                            class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                            <i class="bx bx-current-location"></i>
                                                        </div>
                                                    </div>

                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                            class="text-body stretched-link"
                                                            onclick="getLocation()">Location</a></h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2">
                                                    <div class="avatar-sm mx-auto">
                                                        <div
                                                            class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                            <i class="bx bxs-user-circle"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                            class="text-body stretched-link" data-bs-toggle="modal"
                                                            data-bs-target=".contactModal">Contacts</a></h5>
                                                </div>
                                            </div>

                                            <div class="swiper-slide d-block d-sm-none">
                                                <div class="text-center px-2">
                                                    <div class="avatar-sm mx-auto">
                                                        <div
                                                            class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                            <i class="bx bx-microphone"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                            class="text-body stretched-link">Audio</a></h5>
                                                </div>
                                            </div>
                                        </div>
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
                                        <button type="button" id="close_toggle"
                                            class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                            <i class="bx bx-x align-middle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endif
                <!-- end chat input section -->
            </div>
            <!-- end chat conversation section -->
            <!-- start User profile detail sidebar -->
            @include('public.chat.layout.UserProfile')

            <!-- end User profile detail sidebar -->
        </div>
        <!-- end user chat content -->
    </div>
    <!-- End User chat -->

    <!-- Start Add contact Modal -->
    <div class="modal fade" id="addContact-exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="addContact-exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-header-colored shadow-lg border-0">
                <div class="modal-header">
                    <h5 class="modal-title text-white fs-16" id="addContact-exampleModalLabel">Create Contact</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label for="addcontactemail-input" class="form-label">Email</label>
                            <input type="email" class="form-control" id="addcontactemail-input"
                                placeholder="Enter Email">
                        </div>
                        <div class="mb-3">
                            <label for="addcontactname-input" class="form-label">Name</label>
                            <input type="text" class="form-control" id="addcontactname-input" placeholder="Enter Name">
                        </div>
                        <div class="mb-0">
                            <label for="addcontact-invitemessage-input" class="form-label">Invatation Message</label>
                            <textarea class="form-control" id="addcontact-invitemessage-input" rows="3"
                                placeholder="Enter Message"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Invite</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add contact Modal -->

    <!-- audiocall Modal -->
    <div class="modal fade audiocallModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border border-0 overflow-hidden">
                <div class="modal-body p-0">
                    <div class="text-center p-4 pb-0">

                        <div class="avatar-xl mx-auto mb-4">
                            <img src="assets/images/users/avatar-7.jpg" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <div>
                            <h5 class="fs-22 text-truncate mb-0">Victoria Lane</h5>
                            <p class="text-muted">05:45</p>
                        </div>

                        <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
                            <a href="" class="avatar-sm">
                                <div class="avatar-title bg-soft-danger text-danger fs-20 rounded-circle">
                                    <i class="bx bx-video-recording"></i>
                                </div>
                            </a>
                            <a href="" class="avatar-sm">
                                <div class="avatar-title bg-soft-success text-success fs-20 rounded-circle">
                                    <i class="bx bx-volume-full"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="avatar-sm">
                                <div class="avatar-title bg-soft-info text-info fs-20 rounded-circle">
                                    <i class="bx bx-user-plus"></i>
                                </div>
                            </a>
                        </div>

                        <div class="mt-4">
                            <button type="button" class="btn btn-danger avatar-md call-close-btn rounded-circle"
                                data-bs-dismiss="modal">
                                <span class="avatar-title bg-transparent fs-24">
                                    <i class="mdi mdi-phone-hangup"></i>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="p-4 bg-primary-gradient mt-n4">
                        <div class="d-flex audio-call-menu">
                            <div class="flex-grow-1">
                                <button type="button" class="btn btn-light avatar-sm">
                                    <span class="avatar-title bg-transparent fs-20">
                                        <i class="ri-question-answer-line"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-light avatar-sm">
                                    <span class="avatar-title bg-transparent fs-20">
                                        <i class="bx bx-microphone-off"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- audiocall Modal -->

    <!-- videocall Modal -->
    <div class="modal fade videocallModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-body p-0">
                    <div class="videocall-overlay"></div>
                    <div class="video-call-title position-absolute top-0 start-50 translate-middle-x mt-3 text-center">
                        <h5 class="fs-22 text-truncate text-white">Victoria Lane</h5>
                        <span class="badge text-white fs-12">05:27</span>
                    </div>

                    <img src="assets/images/users/avatar-2.jpg" alt="" class="videocallModal-bg">
                    <div>
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-lg video-call-profile rounded">
                    </div>
                    <div class="position-absolute start-0 end-0 bottom-0">
                        <div class="text-center">
                            <button type="button" class="btn btn-danger avatar-md call-close-btn rounded-circle"
                                data-bs-dismiss="modal">
                                <span class="avatar-title bg-transparent fs-24">
                                    <i class="mdi mdi-phone-hangup"></i>
                                </span>
                            </button>
                        </div>

                        <div class="p-4 bg-primary-gradient mt-n4">
                            <div class="d-flex gap-4 justify-content-center video-call-menu mt-2">
                                <a href="javascript:void(0);" class="btn btn-light avatar-sm rounded-circle">
                                    <span class="avatar-title bg-transparent fs-20">
                                        <i class="bx bx-microphone-off"></i>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-light avatar-sm rounded-circle me-4">
                                    <span class="avatar-title bg-transparent fs-20">
                                        <i class="bx bx-video-off"></i>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-light avatar-sm rounded-circle ms-5">
                                    <span class="avatar-title bg-transparent fs-20">
                                        <i class="bx bx-volume-full"></i>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-light avatar-sm rounded-circle">
                                    <span class="avatar-title bg-transparent fs-20">
                                        <i class="bx bx-refresh"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- groupvideocall Modal -->
    <div class="modal fade groupvideocallModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-body p-0 overflow-hidden">
                    <div class="videocall-overlay"></div>
                    <div class="video-call-title position-absolute top-0 start-0 mt-3 ms-3">
                        <h5 class="user-profile-show fs-22 text-truncate text-white">Reporting</h5>
                        <span class="badge text-white fs-11">05:27</span>
                    </div>
                    <img src="assets/images/users/avatar-7.jpg" alt="" class="videocallModal-bg rounded" />
                    <ul class="list-unstyled groud-call-user vstack gap-3 position-absolute end-0 top-0 p-3">
                        <li>
                            <a href="javascript:void(0);"><img src="assets/images/users/avatar-11.jpg" alt=""
                                    class="avatar-lg rounded"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="assets/images/users/avatar-6.jpg" alt=""
                                    class="avatar-lg rounded" /></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="assets/images/users/avatar-3.jpg" alt=""
                                    class="avatar-lg rounded" /></a>
                        </li>
                    </ul>
                    <div class="position-absolute video-call-menu start-0 end-0 bottom-0 mb-3">
                        <div class="hstack justify-content-center gap-3">
                            <a href="javascript:void(0);" class="btn btn-light avatar-sm rounded-circle">
                                <span class="avatar-title bg-transparent fs-20">
                                    <i class="bx bx-microphone-off"></i>
                                </span>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light avatar-sm rounded-circle me-4">
                                <span class="avatar-title bg-transparent fs-20">
                                    <i class="bx bx-video-off"></i>
                                </span>
                            </a>
                            <button type="button"
                                class="btn btn-danger avatar-sm call-close-btn shadow-none rounded-circle"
                                data-bs-dismiss="modal">
                                <span class="avatar-title bg-transparent fs-24">
                                    <i class="mdi mdi-phone-hangup"></i>
                                </span>
                            </button>
                            <a href="javascript:void(0);" class="btn btn-light avatar-sm rounded-circle ms-4">
                                <span class="avatar-title bg-transparent fs-20">
                                    <i class="bx bx-volume-full"></i>
                                </span>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light avatar-sm rounded-circle">
                                <span class="avatar-title bg-transparent fs-20">
                                    <i class="bx bx-refresh"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- Start add group Modal -->
    <div class="modal fade" id="addgroup-exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="addgroup-exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-header-colored border-0">
                <div class="modal-header">
                    <h5 class="modal-title text-white fs-16" id="addgroup-exampleModalLabel">Create New Group</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-4">
                            <label for="addgroupname-input" class="form-label">Group Name</label>
                            <input type="text" class="form-control" id="addgroupname-input"
                                placeholder="Enter Group Name">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Group Members</label>
                            <div class="mb-3">
                                <button class="btn btn-light btn-sm" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#groupmembercollapse" aria-expanded="false"
                                    aria-controls="groupmembercollapse">
                                    Select Members
                                </button>
                            </div>

                            <div class="collapse" id="groupmembercollapse">
                                <div class="card border">
                                    <div class="card-header">
                                        <h5 class="fs-15 mb-0">Contacts</h5>
                                    </div>
                                    <div class="card-body py-2 px-0">
                                        <div data-simplebar style="max-height: 180px;">
                                            <div>
                                                <div class="contact-list-title">
                                                    A
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck1" checked>
                                                            <label class="form-check-label" for="memberCheck1">Albert
                                                                Rodarte</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck2">
                                                            <label class="form-check-label" for="memberCheck2">Allison
                                                                Etter</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div>
                                                <div class="contact-list-title">
                                                    C
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck3">
                                                            <label class="form-check-label" for="memberCheck3">Craig
                                                                Smiley</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div>
                                                <div class="contact-list-title">
                                                    D
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck4">
                                                            <label class="form-check-label" for="memberCheck4">Daniel
                                                                Clay</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div>
                                                <div class="contact-list-title">
                                                    I
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck5">
                                                            <label class="form-check-label" for="memberCheck5">Iris
                                                                Wells</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div>
                                                <div class="contact-list-title">
                                                    J
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck6">
                                                            <label class="form-check-label" for="memberCheck6">Juan
                                                                Flakes</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck7">
                                                            <label class="form-check-label" for="memberCheck7">John
                                                                Hall</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck8">
                                                            <label class="form-check-label" for="memberCheck8">Joy
                                                                Southern</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div>
                                                <div class="contact-list-title">
                                                    M
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck9">
                                                            <label class="form-check-label" for="memberCheck9">Michael
                                                                Hinton</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck10">
                                                            <label class="form-check-label" for="memberCheck10">Mary
                                                                Farmer</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div>
                                                <div class="contact-list-title">
                                                    P
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck11">
                                                            <label class="form-check-label" for="memberCheck11">Phillis
                                                                Griffin</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div>
                                                <div class="contact-list-title">
                                                    R
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck12">
                                                            <label class="form-check-label" for="memberCheck12">Rocky
                                                                Jackson</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div>
                                                <div class="contact-list-title">
                                                    S
                                                </div>

                                                <ul class="list-unstyled contact-list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="memberCheck13">
                                                            <label class="form-check-label" for="memberCheck13">Simon
                                                                Velez</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="addgroupdescription-input" class="form-label">Description</label>
                            <textarea class="form-control" id="addgroupdescription-input" rows="3"
                                placeholder="Enter Description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top-dashed">
                    <button type="button" class="btn btn-link link-danger m-0" data-bs-dismiss="modal"><i
                            class="ri-close-line"></i> Close</button>
                    <button type="button" class="btn btn-primary m-0">Create Groups</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End add group Modal -->

    <!-- Start Add pinned tab Modal -->
    <div class="modal fade pinnedtabModal" tabindex="-1" role="dialog" aria-labelledby="pinnedtabModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-header-colored border-0">
                <div class="modal-header">
                    <h5 class="modal-title text-white fs-16" id="pinnedtabModalLabel">Bookmark</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <div>
                                <h5 class="fs-16 mb-0">10 Pinned tabs</h5>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <div>
                                <button type="button" class="btn btn-sm btn-warning"><i
                                        class="bx bx-plus align-middle"></i> Pin</button>
                            </div>
                        </div>
                    </div>
                    <div class="chat-bookmark-list mx-n4" data-simplebar style="max-height: 299px;">
                        <ul class="list-unstyled chat-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/pdf-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1"><a href="#"
                                                class="p-0">design-phase-1-approved.pdf</a></h5>
                                        <p class="text-muted fs-13 mb-0">12.5 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/link-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1"><a href="#" class="p-0">Bg Pattern</a></h5>
                                        <p class="text-muted fs-13 mb-0">https://bgpattern.com/</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/image-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1"><a href="#" class="p-0">Image-001.jpg</a>
                                        </h5>
                                        <p class="text-muted fs-13 mb-0">4.2 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/link-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1"><a href="#" class="p-0">Images</a></h5>
                                        <p class="text-muted fs-13 mb-0">https://images123.com/</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/link-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1"><a href="#" class="p-0">Bg Gradient</a>
                                        </h5>
                                        <p class="text-muted fs-13 mb-0">https://bggradient.com/</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/image-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1"><a href="#" class="p-0">Image-012.jpg</a>
                                        </h5>
                                        <p class="text-muted fs-13 mb-0">3.1 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/zip-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1"><a href="#" class="p-0">analytics
                                                dashboard.zip</a></h5>
                                        <p class="text-muted fs-13 mb-0">6.7 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Open <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Edit <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#pills-bookmark" class="link-success">View All <i
                                    class="ri-arrow-right-line ms-2 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add pinned tab Modal -->

    <!-- forward Modal -->
    <div class="modal fade forwardModal" tabindex="-1" role="dialog" aria-labelledby="forwardModalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-header-colored border-0">
                <div class="modal-header">
                    <h5 class="modal-title text-white fs-16">Share this Message</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div>
                        <div class="replymessage-block mb-2">
                            <h5 class="conversation-name">Jean Berwick</h5>
                            <p class="mb-0">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                        </div>
                        <textarea class="form-control" placeholder="Type your message..." rows="2"></textarea>
                    </div>
                    <hr class="my-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control bg-light border-0 pe-0" placeholder="Search here..">
                        <button class="btn btn-light" type="button" id="forwardSearchbtn-addon"><i
                                class='bx bx-search align-middle'></i></button>
                    </div>

                    <div class="d-flex align-items-center px-1">
                        <div class="flex-grow-1">
                            <h4 class="mb-0 fs-11 text-muted text-uppercase">Contacts</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn btn-sm btn-primary">Share All</button>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 150px;" class="mx-n4 px-1">
                        <div>
                            <div class="contact-list-title">
                                A
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Albert Rodarte</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Allison Etter</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list A -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                C
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Craig Smiley</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list C -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                D
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Daniel Clay</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Doris Brown</h5>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list D -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                I
                            </div>

                            <ul class="list-unstyled contact-list">

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Iris Wells</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list I -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                J
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Juan Flakes</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">John Hall</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Joy Southern</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list J -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                M
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Mary Farmer</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Mark Messer</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Michael Hinton</h5>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list M -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                O
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Ossie Wilson</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list O -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                P
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Phillis Griffin</h5>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Paul Haynes</h5>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list P -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                R
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Rocky Jackson</h5>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list R -->

                        <div class="mt-3">
                            <div class="contact-list-title">
                                S
                            </div>

                            <ul class="list-unstyled contact-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Sara Muller</h5>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Simon Velez</h5>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 m-0">Steve Walker</h5>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list S -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forward Modal -->

    <!-- contactModal -->
    <div class="modal fade contactModal" tabindex="-1" role="dialog" aria-labelledby="pinnedtabModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-header-colored border-0">
                <div class="modal-header">
                    <h5 class="modal-title text-white fs-16" id="pinnedtabModalLabel">Contacts</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Search here.." id="searchContactModal"
                            onkeyup="searchContactOnModal()" aria-label="Example text with button"
                            aria-describedby="contactSearchbtn-addon">
                        <button class="btn btn-danger" type="button" id="contactSearchbtn-addon"><i
                                class='bx bx-search align-middle'></i></button>
                    </div>
                    <div class="d-flex align-items-center px-1">
                        <div class="flex-grow-1">
                            <h4 class=" fs-12 text-muted text-uppercase">Contacts</h4>
                        </div>
                    </div>
                    <div class="contact-modal-list px-1" data-simplebar style="max-height: 258px;">
                        <div>
                            <div class="contact-list-title">
                                A
                            </div>

                            <ul class="list-unstyled contact-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-info rounded-circle">
                                                A
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Albert Rodarte</h5>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-10.jpg" alt=""
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Allison Etter</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list A -->

                        <div class="mt-2">
                            <div class="contact-list-title">
                                C
                            </div>

                            <ul class="list-unstyled contact-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-danger rounded-circle">
                                                C
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Craig Smiley</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list C -->

                        <div class="mt-2">
                            <div class="contact-list-title">
                                D
                            </div>

                            <ul class="list-unstyled contact-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-4.jpg" alt=""
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Daniel Clay</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-8.jpg" alt=""
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Doris Brown</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list D -->

                        <div class="mt-2">
                            <div class="contact-list-title">
                                I
                            </div>

                            <ul class="list-unstyled contact-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-12.jpg" alt=""
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Iris Wells</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list I -->

                        <div class="mt-2">
                            <div class="contact-list-title">
                                J
                            </div>

                            <ul class="list-unstyled contact-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-success rounded-circle">
                                                J
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Juan Flakes</h5>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-info rounded-circle">
                                                J
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">John Hall</h5>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Joy Southern</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list J -->

                        <div class="mt-2">
                            <div class="contact-list-title">
                                M
                            </div>

                            <ul class="list-unstyled contact-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-primary rounded-circle">
                                                M
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Mary Farmer</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-dark rounded-circle">
                                                M
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Mark Messer</h5>
                                    </div>
                                    <div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-warning rounded-circle">
                                                M
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Michael Hinton</h5>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list M -->

                        <div class="mt-2">
                            <div class="contact-list-title">
                                O
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-6.jpg" alt=""
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Ossie Wilson</h5>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list O -->

                        <div class="mt-2">
                            <div class="contact-list-title mb-0">
                                P
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-10.jpg" alt=""
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Phillis Griffin</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-info rounded-circle">
                                                P
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Paul Haynes</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end contact list P -->

                        <div class="mt-2">
                            <div class="contact-list-title mb-0">
                                R
                            </div>

                            <ul class="list-unstyled contact-list">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-success rounded-circle">
                                                R
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Rocky Jackson</h5>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list R -->

                        <div class="mt-2">
                            <div class="contact-list-title">
                                S
                            </div>

                            <ul class="list-unstyled contact-list mb-0">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-11.jpg" alt=""
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Sara Muller</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-warning rounded-circle">
                                                S
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Simon Velez</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <div class="avatar-title bg-danger rounded-circle">
                                                S
                                            </div>
                                        </div>
                                        <h5 class="fs-14 mb-0 ms-2">Steve Walker</h5>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- end contact list S -->
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-link" data-bs-dismiss="modal"><i
                            class="ri-close-fill align-bottom"></i> Cancel</a>
                    <button type="button" class="btn btn-primary"><i class="bx bxs-send align-middle"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- contactModal -->
</div>
<!-- end  layout wrapper -->

<!-- Style switcher -->
<div id="style-switcher">
    <ul class="list-unstyled mb-0 vstack gap-2">
        <li>
            <a data-bs-toggle="offcanvas" href="#theme-settings-offcanvas"
                class="settings bg-soft-success text-success rounded"><i class="mdi mdi-cog mdi-spin"></i></a>
        </li>
        <li>
            <a href="javascript:void(0);" class="settings bg-soft-danger text-danger rounded"><i
                    class="ri-shopping-bag-3-line"></i></a>
        </li>
    </ul>
</div>
<!-- end switcher-->


<div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header bg-soft-info">
        <h5 class="offcanvas-title" id="theme-settings-offcanvasLabel">Theme Customizer</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body customizer-palettes">
        <div class="row g-3">
            <div class="col-lg-12">
                <div class="mt-3">
                    <h6 class="text-muted text-uppercase fs-13 mb-0">Select Custome Colors</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color01" name="bgcolor-radio" type="radio" value="color01"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color01 p-0 avatar-md w-100"
                        for="customizer-color01"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-01</h5>
            </div>
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color02" name="bgcolor-radio" type="radio" value="color02"
                        class="form-check-input theme-color" checked>
                    <label class="form-check-label customizer-color02 p-0 avatar-md w-100"
                        for="customizer-color02"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-02</h5>
            </div>
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color03" name="bgcolor-radio" type="radio" value="color03"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color03 p-0 avatar-md w-100"
                        for="customizer-color03"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-03</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color04" name="bgcolor-radio" type="radio" value="color04"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color04 p-0 avatar-md w-100"
                        for="customizer-color04"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-04</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color05" name="bgcolor-radio" type="radio" value="color05"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color05 p-0 avatar-md w-100"
                        for="customizer-color05"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-05</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color06" name="bgcolor-radio" type="radio" value="color06"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color06 p-0 avatar-md w-100"
                        for="customizer-color06"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-06</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color07" name="bgcolor-radio" type="radio" value="color07"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color07 p-0 avatar-md w-100"
                        for="customizer-color07"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-07</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color08" name="bgcolor-radio" type="radio" value="color08"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color08 p-0 avatar-md w-100"
                        for="customizer-color08"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-08</h5>
            </div>
            <!-- end col -->
        </div>
        <!--end row-->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="d-flex mb-3">
                    <h6 class="flex-grow-1 text-muted text-uppercase fs-13 mb-0">Select Custome Colors to Picker</h6>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div class="custom-colors-picker">
                    <div class="colorpicker-primary"></div>
                </div>
                <h5 class="fs-13 text-center mt-2">Primary</h5>
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div class="custom-colors-picker">
                    <div class="colorpicker-secondary"></div>
                </div>
                <h5 class="fs-13 text-center mt-2">Secondary</h5>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</div>


<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Modern colorpicker bundle -->
<script src="assets/libs/@simonwep/pickr/pickr.min.js"></script>

<!-- glightbox js -->
<script src="assets/libs/glightbox/js/glightbox.min.js"></script>

<!-- Swiper JS -->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- fg-emoji-picker JS -->
<script src="assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>

<!-- page init -->
<script src="assets/js/pages/index.init.js"></script>

<script src="assets/js/app.js"></script>



<script>
    async function sendMessage() {
        let content = document.querySelector('#chat-input').value;
        let receiverId = document.querySelector('#receiver_id').value;
        let senderId = document.querySelector('#sender_id').value;
        let conversationId = document.querySelector('#conversation_id').value;
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

        try {
            let response = await fetch('/chat-post', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,  // ارسال CSRF در هدر
                },
                body: JSON.stringify({
                    conversation_id: conversationId,
                    receiver_id: receiverId,
                    sender_id: senderId,  // اضافه کردن sender_id
                    content: content
                })
            });

            // بررسی وضعیت پاسخ
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            let data = await response.json(); // دریافت JSON

            if (data.status === "success") {
                console.log("پیام با موفقیت ارسال شد!");
            } else {
                console.error("خطا در ارسال پیام:", data);
            }

        } catch (error) {
            console.error("مشکل در ارتباط با سرور:", error);
        }
    }


</script>

<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<!-- مقداردهی conversationId و userId در جاوااسکریپت -->







<script>
    const conversationId = @json($chat_target->first()->id);
    const userId = @json(auth()->id());
</script>
<script>

    const DIV = document.querySelector('#Chat-Body');
    // اتصال به Pusher
    var pusher = new Pusher('fshhedr9icy2ktqx1pt4', {
        wsHost: 'localhost', // یا آدرس سرور
        wsPort: 8080,
        wssPort: 8080,
        forceTLS: false,
        encrypted: false,
        disableStats: true,
        authEndpoint: "/broadcasting/auth", // مسیر برای احراز هویت
    });


    // ایجاد کانال Presence
    const channel = pusher.subscribe('presence-channel.{{$chat_target->first()->id}}');



    // function isUserOnline(userId) {
    //     const member = channel.members.get(member => member.id === userId);
    //     return member !== undefined;
    // }

    console.log(ONLILEDIV)
    channel.bind('MessageChannelSent', function (data) {
        const messageList = document.getElementById("Chat-Body"); // عنصر UL یا OL که پیام‌ها داخل آن قرار دارند
        const messageLi = document.createElement("li");
        messageLi.classList.add("chat-list", data.sender_id == {{ auth()->id() }} ? "right" : "left");
        messageLi.innerHTML = `
            <div class="conversation-list">
                <div class="user-chat-content">
                    <div class="ctext-wrap">
                        <div class="ctext-wrap-content">
                            <p class="mb-0 ctext-content">${data.content}</p>
                        </div>
                        <div class="align-self-start message-box-drop d-flex">
                            <!-- ایموجی -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-emotion-happy-line"></i>
                                </a>
                                <div class="dropdown-menu emoji-dropdown-menu">
                                    <div class="hstack align-items-center gap-2 px-2 fs-25">
                                        <a href="javascript:void(0);">💛</a>
                                        <a href="javascript:void(0);">🤣</a>
                                        <a href="javascript:void(0);">😜</a>
                                        <a href="javascript:void(0);">😘</a>
                                        <a href="javascript:void(0);">😍</a>
                                        <div class="avatar-xs">
                                            <a href="javascript:void(0);" class="avatar-title bg-soft-primary rounded-circle fs-19 text-primary">+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- گزینه‌های بیشتر -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-more-2-fill"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center justify-content-between reply-message" href="#">
                                        Reply <i class="bx bx-share ms-2 text-muted"></i>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                        Forward <i class="bx bx-share-alt ms-2 text-muted"></i>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between copy-message" href="#">
                                        Copy <i class="bx bx-copy text-muted ms-2"></i>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                        Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between delete-item" href="#">
                                        Delete <i class="bx bx-trash text-muted ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="conversation-name">
                        <small class="text-muted time">${data.created_at}</small>
                        <span class="text-success check-message-icon">
                            <i class="bx bx-check-double"></i>
                        </span>
                    </div>
                </div>
            </div>
        `;

        // پیام جدید را به لیست اضافه کنید
        messageList.appendChild(messageLi);
        // messageList.scrollTop = messageList.scrollHeight;
        var lastMessage = messageList.lastElementChild;
        if (lastMessage) {
            lastMessage.scrollIntoView({ behavior: "smooth" });
        }
        console.log(`✅ `);
    });
</script>

</body>

</html>
