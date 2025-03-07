    <!-- Start left sidebar-menu -->
    @php
    use App\Models\User;
    use App\Models\conversation;
    $conversationUser=conversation::where('user1_id', auth()->id())->orWhere('user1_id',auth()->id())->get();
    $AuthUser = auth()->user();
    $Groups=$AuthUser->Groups()->get();
    $Channels = $AuthUser->channels()->get();
    $FavorateConversations = $AuthUser->FavorateConversation()->get();
    $contacts = auth()->user()->contacts()->get();
    @endphp
    <div class="side-menu flex-lg-column">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655zM7 12h2a3 3 0 0 0 6 0h2a5 5 0 0 1-10 0z" />
                    </svg>
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655zM7 12h2a3 3 0 0 0 6 0h2a5 5 0 0 1-10 0z" />
                    </svg>
                </span>
            </a>
        </div>
        <!-- end navbar-brand-box -->

        <!-- Start side-menu nav -->
        <div class="flex-lg-column my-0 sidemenu-navigation">
            <ul class="nav nav-pills side-menu-nav" role="tablist">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" id="pills-user-tab" data-bs-toggle="pill" href="#pills-user" role="tab">
                        <i class="ri-user-3-line"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="pills-chat-tab" data-bs-toggle="pill" href="#pills-chat" role="tab">
                        <i class="ri-discuss-line"></i>
                        <span class="badge bg-danger fs-11 rounded-pill sidenav-item-badge">9</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contacts-tab" data-bs-toggle="pill" href="#pills-contacts" role="tab">
                        <i class="ri-contacts-book-line"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-bookmark-tab" data-bs-toggle="pill" href="#pills-bookmark" role="tab">
                        <i class="ri-bookmark-3-line"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="#pills-setting" role="tab">
                        <i class="ri-settings-4-line"></i>
                    </a>
                </li>
                <li class="nav-item mt-lg-auto">
                    <a class="nav-link light-dark-mode" href="#">
                        <i class="ri-moon-line"></i>
                    </a>
                </li>
                <li class="nav-item dropdown profile-user-dropdown">
                    <a class="nav-link dropdown-toggle bg-light" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{$AuthUser->image}}" alt="" class="profile-user rounded-circle">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" id="pills-user-tab"
                            data-bs-toggle="pill" href="#pills-user" role="tab">Profile <i
                                class="bx bx-user-circle text-muted ms-1"></i></a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" id="pills-setting-tab"
                            data-bs-toggle="pill" href="#pills-setting" role="tab">Setting <i
                                class="bx bx-cog text-muted ms-1"></i></a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="auth-changepassword.html">Change Password <i
                                class="bx bx-lock-open text-muted ms-1"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="auth-logout.html">Log out <i class="bx bx-log-out-circle text-muted ms-1"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end side-menu nav -->
    </div>
    <!-- end left sidebar-menu -->

    <!-- start chat-leftsidebar -->
    <div class="chat-leftsidebar">

        <div class="tab-content">
            <!-- Start Profile tab-pane -->
            <div class="tab-pane" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                <!-- Start profile content -->
                <div>
                    <div class="user-profile-img">
                        <img src="assets/images/4902908.jpg" class="profile-img" style="height: 160px;" alt="">
                        <div class="overlay-content">
                            <div>
                                <div class="user-chat-nav p-2 ps-3">

                                    <div class="d-flex w-100 align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="text-white mb-0">My Profile</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <button class="btn nav-btn text-white dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class='bx bx-dots-vertical-rounded'></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">Info <i class="bx bx-info-circle ms-2 text-muted"></i></a>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">Setting <i class="bx bx-cog text-muted ms-2"></i></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">Help <i class="bx bx-help-circle ms-2 text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center border-bottom border-bottom-dashed pt-2 pb-4 mt-n5 position-relative">
                        <div class="mb-lg-3 mb-2">
                            <img src="{{$AuthUser->image}}" class="rounded-circle avatar-lg img-thumbnail" alt="">
                        </div>

                        <h5 class="fs-17 mb-1 text-truncate">{{$AuthUser->name}}</h5>
                        <p class="text-muted fs-14 text-truncate mb-0">Front end Developer</p>
                    </div>
                    <!-- End profile user -->

                    <!-- Start user-profile-desc -->
                    <div class="p-4 profile-desc" data-simplebar>
                        <div class="text-muted">
                            <p class="mb-3">{{$AuthUser->about}}</p>
                        </div>

                        <div class="border-bottom border-bottom-dashed mb-4 pb-2">
                            <div class="d-flex py-2 align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <i class="bx bx-user align-middle text-muted fs-19"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">{{$AuthUser->name}}</p>
                                </div>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-phone-line align-middle text-muted fs-19"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">{{$AuthUser->phone}}</p>
                                </div>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-message-2-line align-middle text-muted fs-19"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="fw-medium mb-0">{{$AuthUser->email}}</p>
                                </div>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-map-pin-2-line align-middle text-muted fs-19"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">{{$AuthUser->address}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-bottom border-bottom-dashed mb-4 pb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="fs-12 text-muted text-uppercase mb-0">Media</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="fw-medium fs-12 d-block">Show all</a>
                                </div>
                            </div>
                            <div class="profile-media-img">
                                <div class="media-img-list">
                                    <a href="#">
                                        <img src="assets/images/small/img-1.jpg" alt="media img" class="img-fluid">
                                    </a>
                                </div>
                                <div class="media-img-list">
                                    <a href="#">
                                        <img src="assets/images/small/img-2.jpg" alt="media img" class="img-fluid">
                                    </a>
                                </div>
                                <div class="media-img-list">
                                    <a href="#">
                                        <img src="assets/images/small/img-4.jpg" alt="media img" class="img-fluid">
                                        <div class="bg-overlay">+ 15</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-grow-1">
                                    <h5 class="fs-12 text-muted text-uppercase mb-0">Attached Files</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="fw-medium fs-12 d-block">Show all</a>
                                </div>
                            </div>
                            <div>
                                <div class="card p-2 border border-dashed mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 ms-1 me-3">
                                            <img src="assets/images/pdf-file.png" alt="" class="avatar-xs">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="fs-14 text-truncate mb-1">design-phase-1-approved.pdf</h5>
                                            <p class="text-muted fs-13 mb-0">12.5 MB</p>
                                        </div>

                                        <div class="flex-shrink-0 ms-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="bx bxs-download"></i>
                                                    </a>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Share <i class="bx bx-share-alt ms-2 text-muted"></i></a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card p-2 border border-dashed mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 ms-1 me-3">
                                            <img src="assets/images/image-file.png" alt="" class="avatar-xs">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="fs-14 text-truncate mb-1">Image-1.jpg</h5>
                                            <p class="text-muted fs-13 mb-0">4.2 MB</p>
                                        </div>

                                        <div class="flex-shrink-0 ms-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="bx bxs-download"></i>
                                                    </a>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Share <i class="bx bx-share-alt ms-2 text-muted"></i></a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card p-2 border border-dashed mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 ms-1 me-3">
                                            <img src="assets/images/image-file.png" alt="" class="avatar-xs">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="fs-14 text-truncate mb-1">Image-2.jpg</h5>
                                            <p class="text-muted fs-13 mb-0">3.1 MB</p>
                                        </div>

                                        <div class="flex-shrink-0 ms-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="bx bxs-download"></i>
                                                    </a>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Share <i class="bx bx-share-alt ms-2 text-muted"></i></a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card p-2 border border-dashed mb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 ms-1 me-3">
                                            <img src="assets/images/zip-file.png" alt="" class="avatar-xs">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="fs-14 text-truncate mb-1">Landing-A.zip</h5>
                                            <p class="text-muted fs-13 mb-0">6.7 MB</p>
                                        </div>

                                        <div class="flex-shrink-0 ms-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="bx bxs-download"></i>
                                                    </a>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Share <i class="bx bx-share-alt ms-2 text-muted"></i></a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                            href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end user-profile-desc -->
                </div>
                <!-- End profile content -->
            </div>
            <!-- End Profile tab-pane -->

            <!-- Start chats tab-pane -->
            <div class="tab-pane show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
                <!-- Start chats content -->
                <div>
                    <div class="px-4 pt-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-4">Messages <span class="text-primary fs-13">(128)</span></h4>
                            </div>
                        </div>
                        <form>
                            <div class="input-group search-panel mb-3">
                                <input type="text" class="form-control bg-light border-0" id="searchChatUser" onkeyup="searchUser()"
                                    placeholder="Search here..." aria-label="Example text with button addon"
                                    aria-describedby="searchbtn-addon" autocomplete="off">
                                <button class="btn btn-light p-0" type="button" id="searchbtn-addon"><i
                                        class='bx bx-search align-middle'></i></button>
                            </div>
                        </form>
                    </div> <!-- .p-4 -->

                    <div class="chat-room-list" data-simplebar>
                        <!-- Start chat-message-list -->
                        <h5 class="mb-3 px-4 mt-4 fs-11 text-muted text-uppercase">علاقمندی ها</h5>

                        <div class="chat-message-list">
                            <ul class="list-unstyled chat-list chat-user-list">
                                @foreach ( $FavorateConversations as $Conversation )
                                @php
                                $user = User::find($Conversation->user1_id == auth()->id() ? $Conversation->user2_id : $Conversation->user1_id);
                                $messages = $Conversation->messages()->get()->last();
                                @endphp


                                <li id="contact-id-5" data-name="favorite" class="">
                                    <a href="/chat-{{$Conversation->id}}">
                                        <div class="d-flex align-items-center">
                                            <!-- تصویر کاربر -->
                                            <div class="chat-user-img online align-self-center me-2 ms-0">
                                                <img src="{{$user->image}}" class="rounded-circle avatar-xs" alt="">
                                                <span class="user-status"></span>
                                            </div>
                                            <!-- اطلاعات کاربر -->
                                            <div class="overflow-hidden me-2">
                                                <p class="text-truncate chat-username mb-0">{{$user->name}}</p>
                                                <p class="text-truncate text-muted fs-13 mb-0">{{ $messages ? $messages->content :  jdate($Conversation->updated_at)->format('Y m d') . ': گفتگو ایجاد شد در' }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                @endforeach
                            </ul>
                        </div>

                        <div class="d-flex align-items-center px-4 mt-5 mb-2">
                            <div class="flex-grow-1">
                                <h4 class="mb-0 fs-11 text-muted text-uppercase">گفتگو ها </h4>
                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="New Message">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target=".contactModal">
                                        <i class="bx bx-plus align-middle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="chat-message-list">

                            <ul class="list-unstyled chat-list chat-user-list" >

                                @foreach ( $conversationUser as $Conversation )
                                @php
                                $user = User::find($Conversation->user1_id == auth()->id() ? $Conversation->user2_id : $Conversation->user1_id);
                                $messages = $Conversation->messages()->get()->last();
                                @endphp


                                <li id="contact-id-5" data-name="favorite" class="">
                                    <a href="/chat-{{$Conversation->id}}">
                                        <div class="d-flex align-items-center">
                                            <!-- تصویر کاربر -->
                                            <div class="chat-user-img online align-self-center me-2 ms-0">
                                                <img src="{{$user->image}}" class="rounded-circle avatar-xs" alt="">
                                                <span class="user-status"></span>
                                            </div>
                                            <!-- اطلاعات کاربر -->
                                            <div class="overflow-hidden me-2">
                                                <p class="text-truncate chat-username mb-0">{{$user->name}}</p>
                                                <p class="text-truncate text-muted fs-13 mb-0">{{ $messages ? $messages->content :  jdate($Conversation->updated_at)->format('Y m d') . ': گفتگو ایجاد شد در' }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                @endforeach

                            </ul>
                        </div>

                        <div class="d-flex align-items-center px-4 mt-5 mb-2">
                            <div class="flex-grow-1">
                                <h4 class="mb-0 fs-11 text-muted text-uppercase">کانال ها </h4>
                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Create group">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addgroup-exampleModal">
                                        <i class="bx bx-plus align-middle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="chat-message-list">

                            <ul class="list-unstyled chat-list chat-user-list mb-3" id="channelList">
                                @foreach ( $Channels as $Channel )
                                @php
                                    $messages = $Channel->messages()->get()->last();
                                @endphp
                                <li id="contact-id-5" data-name="favorite" class="">
                                    <a href="/Channel-{{$Channel->name}}">
                                        <div class="d-flex align-items-center">
                                            <!-- تصویر کاربر -->
                                            <div class="chat-user-img online align-self-center me-2 ms-0">
                                                <img src="{{$Channel->image}}" class="rounded-circle avatar-xs" alt="">
                                                <span class="user-status"></span>
                                            </div>
                                            <!-- اطلاعات کاربر -->
                                            <div class="overflow-hidden me-2">
                                                <p class="text-truncate chat-username mb-0">{{$Channel->name}}</p>
                                                <p class="text-truncate text-muted fs-13 mb-0">{{ $messages ? $messages->content :  jdate($Channel->updated_at)->format('Y m d') . ': کانال ایجاد شد در' }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="d-flex align-items-center px-4 mt-5 mb-2">
                            <div class="flex-grow-1">
                                <h4 class="mb-0 fs-11 text-muted text-uppercase"> گروه ها </h4>
                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Create group">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addgroup-exampleModal">
                                        <i class="bx bx-plus align-middle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="chat-message-list">

                            <ul class="list-unstyled chat-list chat-user-list mb-3" id="GroupList">
                                @foreach ( $Groups as $Group )
                                @php
                                    $messages = $Group->messages()->get()->last();
                                @endphp
                                <li id="contact-id-5" data-name="favorite" class="">
                                    <a href="/Group-{{$Group->name}}">
                                        <div class="d-flex align-items-center">
                                            <!-- تصویر کاربر -->
                                            <div class="chat-user-img online align-self-center me-2 ms-0">
                                                <img src="{{$Group->image}}" class="rounded-circle avatar-xs" alt="">
                                                <span class="user-status"></span>
                                            </div>
                                            <!-- اطلاعات کاربر -->
                                            <div class="overflow-hidden me-2">
                                                <p class="text-truncate chat-username mb-0">{{$Group->name}}</p>
                                                <p class="text-truncate text-muted fs-13 mb-0">{{ $messages ? $messages->content :  jdate($conversation->updated_at)->format('Y m d') . ': کانال ایجاد شد در' }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                        </div>


                        <!-- End chat-message-list -->
                    </div>

                </div>
                <!-- Start chats content -->
            </div>
            <!-- End chats tab-pane -->

            <!-- Start contacts tab-pane -->
            <div class="tab-pane" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                <!-- Start Contact content -->
                <div>
                    <div class="px-4 pt-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-4">Contacts</h4>
                            </div>
                            <div class="flex-shrink-0">
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-soft-success btn-sm" data-bs-toggle="modal" data-bs-target="#addContact-exampleModal">
                                        <i class="bx bx-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <form>
                            <div class="input-group search-panel mb-4">
                                <input type="text" class="form-control bg-light border-0" id="searchContact" onkeyup="searchContacts()" placeholder="Search contacts..." aria-label="Search Contacts..."
                                aria-describedby="button-searchcontactsaddon" autocomplete="off">
                                <button class="btn btn-light p-0" type="button" id="button-searchcontactsaddon"><i class='bx bx-search align-middle'></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- end p-4 -->

                    <div class="chat-message-list chat-group-list" data-simplebar >
                        <div class="sort">
                            <div class="mt-3">
                                <!-- عنوان گروه -->
                                {{-- <div class="contact-list-title">A</div> --}}
                                <!-- لیست مخاطبین -->
                                <ul id="contact-sort-A" class="list-unstyled contact-list">
                                    <!-- مخاطب ۱ -->
                                    @foreach ( $contacts as $contact )
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <!-- تصویر کاربر -->
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs">
                                                    <img src="{{$contact->image}}" class="img-fluid rounded-circle" alt="">
                                                </div>
                                            </div>
                                            <!-- نام کاربر -->
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 m-0">{{$contact->name}}</h5>
                                            </div>
                                            <!-- منوی عملیات -->
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded align-middle"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                                            Edit <i class="bx bx-pencil ms-2 text-muted"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                                            Block <i class="bx bx-block ms-2 text-muted"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                                            Remove <i class="bx bx-trash ms-2 text-muted"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                    <!-- مخاطب ۲ -->
                                    {{-- <li>
                                        <div class="d-flex align-items-center">
                                            <!-- تصویر کاربر -->
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs">
                                                    <img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="">
                                                </div>
                                            </div>
                                            <!-- نام کاربر -->
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 m-0">Alaya Cordova</h5>
                                            </div>
                                            <!-- منوی عملیات -->
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a href="#" class="text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded align-middle"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                                            Edit <i class="bx bx-pencil ms-2 text-muted"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                                            Block <i class="bx bx-block ms-2 text-muted"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                                            Remove <i class="bx bx-trash ms-2 text-muted"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- end contact lists -->
                </div>
                <!-- Start Contact content -->
            </div>
            <!-- End contacts tab-pane -->

            <!-- Start calls tab-pane -->
            <div class="tab-pane" id="pills-calls" role="tabpanel" aria-labelledby="pills-calls-tab">
                <!-- Start Contact content -->
                <div>
                    <div class="px-4 pt-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-3">Calls</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end p-4 -->

                    <!-- Start contact lists -->
                    <div class="chat-message-list chat-call-list" data-simplebar>
                        <ul class="list-unstyled chat-list" id="callList">

                        </ul>
                    </div>
                    <!-- end contact lists -->
                </div>
                <!-- Start Contact content -->
            </div>
            <!-- End calls tab-pane -->

            <!-- Start bookmark tab-pane -->
            <div class="tab-pane" id="pills-bookmark" role="tabpanel" aria-labelledby="pills-bookmark-tab">
                <!-- Start Contact content -->
                <div>
                    <div class="px-4 pt-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-3">Bookmark</h4>
                            </div>
                        </div>
                        <form>
                            <div class="input-group search-panel mb-3">
                                <input type="text" class="form-control bg-light border-0" id="searchbookmark" onkeyup="searchBookmark()" placeholder="Search here..." aria-label="Example text with button addon"
                                    aria-describedby="searchbookmark-addon" autocomplete="off">
                                <button class="btn btn-light p-0" type="button" id="searchbookmark-addon"><i
                                        class='bx bx-search align-middle'></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- end p-4 -->

                    <!-- Start contact lists -->
                    <div class="chat-message-list chat-bookmark-list" id="chat-bookmark-list" data-simplebar>
                        <ul class="list-unstyled chat-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/pdf-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">design-phase-1-approved.pdf</a>
                                        </h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">12.5 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Bg Pattern</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">https://bgpattern.com/</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Image-001.jpg</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">4.2 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Images</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">https://images123.com/</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Bg Gradient</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">https://bggradient.com/</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-18 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Image-012.jpg</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">3.1 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">analytics dashboard.zip</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">6.7 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Image-031.jpg</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">4.2 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <img src="assets/images/txt-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Changelog.txt</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">6.7 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Widgets.zip</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">6.7 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">logo-light.png</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">4.2 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Image-2.jpg</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">3.1 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
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
                                        <h5 class="fs-14 mb-1"><a href="#" class="text-truncate p-0">Landing-A.zip</a></h5>
                                        <p class="text-muted text-truncate fs-13 mb-0">6.7 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle fs-16 text-muted px-1" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Open
                                                    <i class="bx bx-folder-open ms-2 text-muted"></i></a>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">Edit
                                                    <i class="bx bx-pencil ms-2 text-muted"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end contact lists -->
                </div>
                <!-- Start Contact content -->
            </div>
            <!-- End bookmark tab-pane -->

            <!-- Start settings tab-pane -->
            <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                <!-- Start Settings content -->
                <div>
                    <div class="user-profile-img">
                        <img src="assets/images/small/img-4.jpg" class="profile-img profile-foreground-img" style="height: 160px;"
                            alt="">
                        <div class="overlay-content">
                            <div>
                                <div class="user-chat-nav p-3">

                                    <div class="d-flex w-100 align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="text-white mb-0">Settings</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="bottom" title="Change Background">
                                                <input id="profile-foreground-img-file-input" type="file"
                                                    class="profile-foreground-img-file-input">
                                                <label for="profile-foreground-img-file-input" class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="bx bxs-pencil"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center p-3 p-lg-4 border-bottom pt-2 pt-lg-2 mt-n5 position-relative">
                        <div class="mb-3 profile-user">
                            <img src="assets/images/users/avatar-1.jpg"
                                class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="bx bxs-camera"></i>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <h5 class="fs-16 mb-1 text-truncate"></h5>

                        <div class="dropdown d-inline-block">
                            <a class="text-muted dropdown-toggle d-block" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bxs-circle text-success fs-10 align-middle"></i> Active <i
                                    class="mdi mdi-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="bx bxs-circle text-success fs-10 me-1 align-middle"></i>
                                    Active</a>
                                <a class="dropdown-item" href="#"><i class="bx bxs-circle text-warning fs-10 me-1 align-middle"></i>
                                    Away</a>
                                <a class="dropdown-item" href="#"><i class="bx bxs-circle text-danger fs-10 me-1 align-middle"></i> Do
                                    not disturb</a>
                            </div>
                        </div>


                    </div>
                    <!-- End profile user -->

                    <!-- Start User profile description -->
                    <div class="user-setting" data-simplebar>
                        <div id="settingprofile" class="accordion accordion-flush">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headerpersonalinfo">
                                    <a class="accordion-button fs-14 fw-medium" data-bs-toggle="collapse" href="#personalinfo"
                                        aria-expanded="true" aria-controls="personalinfo">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3 avatar-xs">
                                                <div class="avatar-title bg-soft-info text-info rounded">
                                                    <i class="bx bxs-user"></i>
                                                </div>
                                            </div>
                                            Personal Info
                                        </div>
                                    </a>
                                </div>
                                <div id="personalinfo" class="accordion-collapse collapse show" aria-labelledby="headerpersonalinfo"
                                    data-bs-parent="#settingprofile">
                                    <div class="accordion-body edit-input">
                                        <div class="float-end">
                                            <a href="#" class="badge bg-light text-muted" id="user-profile-edit-btn"> <i
                                                    class="bx bxs-pencil align-middle" id="edit-icon"></i>
                                            </a>
                                        </div>

                                        <div>
                                            <label for="exampleInputPassword1" class="form-label text-muted fs-13">Name</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="Dushane Daniel"
                                                placeholder="Enter name" disabled>
                                        </div>

                                        <div>
                                            <label for="exampleInputPassword1" class="form-label text-muted fs-13">Email</label>
                                            <input type="email" class="form-control" id="exampleInputPassword1"
                                                value="dashanedaniel@vhato.com" placeholder="Enter email" disabled>
                                        </div>

                                        <div class="mt-3">
                                            <label for="exampleInputPassword1" class="form-label text-muted fs-13">Phone No</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="+(245) 4577 14523"
                                                placeholder="Enter phone no" disabled>
                                        </div>

                                        <div class="mt-3">
                                            <label for="exampleInputPassword1" class="form-label text-muted fs-13">Location</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="California, USA"
                                                placeholder="Location" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end personal info card -->

                            <div class="accordion-item">
                                <div class="accordion-header" id="privacy1">
                                    <a class="accordion-button fs-14 fw-medium collapsed" data-bs-toggle="collapse" href="#privacy"
                                        aria-expanded="false" aria-controls="privacy">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3 avatar-xs">
                                                <div class="avatar-title bg-soft-info text-info rounded">
                                                    <i class="bx bxs-lock"></i>
                                                </div>
                                            </div>
                                            Privacy
                                        </div>
                                    </a>
                                </div>
                                <div id="privacy" class="accordion-collapse collapse" aria-labelledby="privacy1"
                                    data-bs-parent="#settingprofile">
                                    <div class="accordion-body">
                                        <h6 class="mb-3">Who can see my personal info</h6>
                                        <ul class="list-unstyled vstack gap-4 mb-0">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-13 mb-0 text-truncate">Profile photo</h5>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <select class="form-select form-select-sm">
                                                            <option value="Everyone" selected>Everyone</option>
                                                            <option value="Selected">Selected</option>
                                                            <option value="Nobody">Nobody</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-13 mb-0 text-truncate">Status</h5>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <select class="form-select form-select-sm">
                                                            <option value="Everyone" selected>Everyone</option>
                                                            <option value="Selected">Selected</option>
                                                            <option value="Nobody">Nobody</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-13 mb-0 text-truncate">Groups</h5>

                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <select class="form-select form-select-sm">
                                                            <option value="Everyone" selected>Everyone</option>
                                                            <option value="Selected">Selected</option>
                                                            <option value="Nobody">Nobody</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-13 mb-0 text-truncate">Last seen</h5>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" id="privacy-lastseenSwitch"
                                                                checked>
                                                            <label class="form-check-label" for="privacy-lastseenSwitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-13 mb-0 text-truncate">Read receipts</h5>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="privacy-readreceiptSwitch" checked>
                                                            <label class="form-check-label" for="privacy-readreceiptSwitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end privacy card -->

                            <div class="accordion-item">
                                <div class="accordion-header" id="headersecurity">
                                    <a class="accordion-button fs-14 fw-medium collapsed" data-bs-toggle="collapse"
                                        href="#collapsesecurity" aria-expanded="false" aria-controls="collapsesecurity">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3 avatar-xs">
                                                <div class="avatar-title bg-soft-info text-info rounded">
                                                    <i class="bx bxs-check-shield"></i>
                                                </div>
                                            </div>
                                            Security
                                        </div>
                                    </a>
                                </div>
                                <div id="collapsesecurity" class="accordion-collapse collapse" aria-labelledby="headersecurity"
                                    data-bs-parent="#settingprofile">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-13 mb-0 text-truncate">Show security notification</h5>

                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="security-notificationswitch">
                                                            <label class="form-check-label" for="security-notificationswitch"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end security card -->



                            <div class="accordion-item">
                                <div class="accordion-header" id="headerhelp">
                                    <button class="accordion-button fs-14 fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsehelp" aria-expanded="false" aria-controls="collapsehelp">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3 avatar-xs">
                                                <div class="avatar-title bg-soft-info text-info rounded">
                                                    <i class="bx bxs-help-circle"></i>
                                                </div>
                                            </div>
                                            Help
                                        </div>
                                    </button>
                                </div>
                                <div id="collapsehelp" class="accordion-collapse collapse" aria-labelledby="headerhelp"
                                    data-bs-parent="#settingprofile">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled vstack gap-4 mb-0">
                                            <li>
                                                <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">FAQs</a></h5>
                                            </li>
                                            <li>
                                                <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">Contact</a></h5>
                                            </li>
                                            <li>
                                                <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">Terms & Privacy policy</a>
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end profile-setting-accordion -->
                    </div>
                    <!-- End User profile description -->
                </div>
                <!-- Start Settings content -->
            </div>
            <!-- End settings tab-pane -->
        </div>
        <!-- end tab content -->
    </div>
