<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">
    <title>Ekka - Admin Dashboard eCommerce HTML Template.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link id="load-css-0" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/51/css/core/tooltip.css">
    <link id="load-css-1" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/51/css/util/util.css">
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link id="ekka-css" href="{{ asset('css/ekka.css') }}" rel="stylesheet">

    <link href="assets/img/favicon.png" rel="shortcut icon">

</head>

<body
    class="ec-header-fixed ec-sidebar-fixed ec-header-light ec-sidebar-dark sidebar-minified right-sidebar-toggoler-out"
    id="body">
    <div class="theme-option">
        <div class="right-sidebar-2">
            <div class="ec-tools-sidebar-overlay"></div>
            <div class="right-sidebar-container-2">
                <div class="slim-scroll-right-sidebar-2">

                    <div class="right-sidebar-2-header">
                        <h2>SETTINGS</h2>
                        <p>Layout Preview Settings</p>
                        <div class="btn-close-right-sidebar-2">
                            <i class="mdi mdi-window-close"></i>
                        </div>
                    </div>

                    <div class="right-sidebar-2-body" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -15px -30px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-ec-content-wrapper" style="height: 100%; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 15px 30px;">
                                            <span class="right-sidebar-2-subtitle">Header Layout</span>
                                            <div class="no-col-space">
                                                <a href="javascript:void(0);"
                                                    class="btn-right-sidebar-2 ec-header-fixed-to btn-right-sidebar-2-active">Fixed</a>
                                                <a href="javascript:void(0);"
                                                    class="btn-right-sidebar-2 ec-header-static-to">Static</a>
                                            </div>

                                            <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
                                            <div class="no-col-space">
                                                <select class="right-sidebar-2-select" id="sidebar-option-select">
                                                    <option value="ec-sidebar-fixed">Fixed Default</option>
                                                    <option value="ec-sidebar-fixed-minified">Fixed Minified</option>
                                                    <option value="ec-sidebar-fixed-offcanvas">Fixed Offcanvas</option>
                                                    <option value="ec-sidebar-static">Static Default</option>
                                                    <option value="ec-sidebar-static-minified">Static Minified</option>
                                                    <option value="ec-sidebar-static-offcanvas">Static Offcanvas
                                                    </option>
                                                </select>
                                            </div>

                                            <span class="right-sidebar-2-subtitle">Header Background</span>
                                            <div class="no-col-space">
                                                <a href="javascript:void(0);"
                                                    class="btn-right-sidebar-2 btn-right-sidebar-2-active ec-header-light-to">Light</a>
                                                <a href="javascript:void(0);"
                                                    class="btn-right-sidebar-2 ec-header-dark-to">Dark</a>
                                            </div>

                                            <span class="right-sidebar-2-subtitle">Navigation Background</span>
                                            <div class="no-col-space">
                                                <a href="javascript:void(0);"
                                                    class="btn-right-sidebar-2 ec-sidebar-light-to">Light</a>
                                                <a href="javascript:void(0);"
                                                    class="btn-right-sidebar-2 ec-sidebar-dark-to btn-right-sidebar-2-active">Dark</a>
                                            </div>

                                            <span class="right-sidebar-2-subtitle">Spacing Layout</span>
                                            <div class="no-col-space">
                                                <a href="javascript:void(0);"
                                                    class="btn-right-sidebar-2 btn-right-sidebar-2-active default-spacing-to">Default</a>
                                                <a href="javascript:void(0);"
                                                    class="btn-right-sidebar-2 compact-spacing-to">Compact</a>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div id="reset-options" style="width: auto; cursor: pointer"
                                                    class="btn-right-sidebar-2 btn-reset">Reset
                                                    Settings</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 551px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="ec-left-sidebar ec-bg-sidebar">
            <div id="sidebar" class="sidebar ec-sidebar-footer">
                <div class="ec-brand"><a href="index.html" title="Ekka"><img class="ec-brand-icon"
                            src="assets/img/logo/ec-site-logo.png" alt=""> <span
                            class="ec-brand-name text-truncate">Ekka</span></a></div>
                <div class="ec-navigation" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-ec-content-wrapper" style="height: 100%; overflow: hidden;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <ul class="nav sidebar-inner" id="sidebar-menu">
                                            <li class="active"><a class="sidenav-item-link" href="index.html">\
                                                <i class="mdi mdi-view-dashboard-outline"></i>
                                                 <span class="nav-text">Dashboard</span></a>
                                                <hr>
                                            </li>
                                            <li class="has-sub"><a class="sidenav-item-link"
                                                    href="javascript:void(0)"><i
                                                        class="mdi mdi-account-group-outline"></i> <span
                                                        class="nav-text">Vendors</span> <b class="caret"></b></a>
                                                <div class="collapse">
                                                    <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                                                        {{-- <li><a class="sidenav-item-link" href=""><span
                                                                    class="nav-text">Vendor Grid</span></a></li> --}}
                                                        <li><a class="sidenav-item-link" href="{{ route('supplier.index') }}"><span
                                                                    class="nav-text">Vendor List</span></a></li>
                                                        <li><a class="sidenav-item-link"
                                                                href="{{ route('supplier.create') }}"><span
                                                                    class="nav-text">Add Vendor</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-sub"><a class="sidenav-item-link"
                                                    href="javascript:void(0)"><i class="mdi mdi-account-group"></i>
                                                    <span class="nav-text">Users</span> <b class="caret"></b></a>
                                                <div class="collapse">
                                                    <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                                                        <li><a class="sidenav-item-link" href="user-card.html"><span
                                                                    class="nav-text">User Grid</span></a></li>
                                                        <li><a class="sidenav-item-link" href="user-list.html"><span
                                                                    class="nav-text">User List</span></a></li>
                                                        <li><a class="sidenav-item-link"
                                                                href="user-profile.html"><span class="nav-text">Users
                                                                    Profile</span></a></li>
                                                    </ul>
                                                </div>
                                                <hr>
                                            </li>
                                            <li class="has-sub"><a class="sidenav-item-link"
                                                    href="javascript:void(0)"><i class="mdi mdi-dns-outline"></i>
                                                    <span class="nav-text">Categories</span> <b
                                                        class="caret"></b></a>
                                                <div class="collapse">
                                                    <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                                                        <li>
                                                            <a class="sidenav-item-link"
                                                                href="/category"><span class="nav-text">Main Category</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="sidenav-item-link"
                                                                href="/category/create"><span class="nav-text">Add Category</span></a>
                                                        </li>
                                                        <li><a class="sidenav-item-link"
                                                                href="sub-category.html"><span class="nav-text">Category analytics</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-sub"><a class="sidenav-item-link"
                                                    href="javascript:void(0)"><i class="mdi mdi-palette-advanced"></i>
                                                    <span class="nav-text">Products</span> <b class="caret"></b></a>
                                                <div class="collapse">
                                                    <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                                                        <li><a class="sidenav-item-link" href="{{ route("product.create") }}">
                                                            <span class="nav-text">Add Product</span>
                                                        </a></li>
                                                        <li><a class="sidenav-item-link" href="{{ route('product.index') }}">
                                                            <span class="nav-text">List Product</span>
                                                            </a></li>
                                                        <li><a class="sidenav-item-link" href="product-grid.html">
                                                            <span class="nav-text">Grid Product
                                                            </span>
                                                        </a></li>
                                                        <li><a class="sidenav-item-link"
                                                                href="product-detail.html"><span
                                                                    class="nav-text">Product Detail</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-sub">
                                                <a class="sidenav-item-link" href="javascript:void(0)">
                                                    <i class="mdi mdi-cart"></i>
                                                    <span class="nav-text">Orders</span>
                                                    <b class="caret"></b>
                                                </a>
                                                <div class="collapse">
                                                    <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                                                        <li>
                                                            <a class="sidenav-item-link" href="{{ route('order.index') }}"><span
                                                                    class="nav-text">New Orders</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="sidenav-item-link" href="{{ route('anonymous-order.index') }}"><span
                                                                    class="nav-text">Anonmous Order</span>
                                                            </a>
                                                        </li>
                                                        <li><a class="sidenav-item-link"
                                                                href="order-history.html"><span class="nav-text">Order
                                                                    History</span></a></li>
                                                        <li><a class="sidenav-item-link"
                                                                href="order-detail.html"><span class="nav-text">Order
                                                                    Detail</span></a></li>
                                                        <li><a class="sidenav-item-link" href="invoice.html"><span
                                                                    class="nav-text">Invoice</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a class="sidenav-item-link" href="review-list.html"><i
                                                        class="mdi mdi-star-half"></i> <span
                                                        class="nav-text">Reviews</span></a></li>
                                            <li><a class="sidenav-item-link" href="brand-list.html"><i
                                                        class="mdi mdi-tag-faces"></i> <span
                                                        class="nav-text">Brands</span></a>
                                                <hr>
                                            </li>
                                            <li class="has-sub expand"><a class="sidenav-item-link"
                                                    href="javascript:void(0)"><i class="mdi mdi-login"></i> <span
                                                        class="nav-text">Authentication</span> <b
                                                        class="caret"></b></a>
                                                <div class="collapse" style="display: block;">
                                                    <ul class="sub-menu" id="authentication"
                                                        data-parent="#sidebar-menu">
                                                        <li><a href="sign-in.html"><span class="nav-text">Sign
                                                                    In</span></a></li>
                                                        <li><a href="sign-up.html"><span class="nav-text">Sign
                                                                    Up</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-sub"><a class="sidenav-item-link"
                                                    href="javascript:void(0)"><i class="mdi mdi-diamond-stone"></i>
                                                    <span class="nav-text">Icons</span> <b class="caret"></b></a>
                                                <div class="collapse">
                                                    <ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
                                                        <li><a class="sidenav-item-link"
                                                                href="material-icon.html"><span
                                                                    class="nav-text">Material Icon</span></a></li>
                                                        <li><a class="sidenav-item-link"
                                                                href="font-awsome-icons.html"><span
                                                                    class="nav-text">Font Awsome Icon</span></a></li>
                                                        <li><a class="sidenav-item-link" href="flag-icon.html"><span
                                                                    class="nav-text">Flag Icon</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-sub"><a class="sidenav-item-link"
                                                    href="javascript:void(0)"><i
                                                        class="mdi mdi-image-filter-none"></i> <span
                                                        class="nav-text">Other Pages</span> <b class="caret"></b></a>
                                                <div class="collapse">
                                                    <ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
                                                        <li class="has-sub"><a href="404.html">404 Page</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: auto; height: 734px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar"
                            style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar"
                            style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ec-page-wrapper">
            <header class="ec-main-header" id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg"><button id="sidebar-toggler"
                        class="sidebar-toggle"></button>
                    <div class="search-form d-lg-inline-block">
                        <div class="input-group"><input name="query" id="search-input" class="form-control"
                                placeholder="search.." autofocus="" autocomplete="off"> <button type="button"
                                name="search" id="search-btn" class="btn btn-flat"><i
                                    class="mdi mdi-magnify"></i></button></div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user-menu"><button class="dropdown-toggle nav-link ec-drop"
                                    data-bs-toggle="dropdown" aria-expanded="false"><img
                                        src="assets/img/user/user.png" class="user-image" alt="User Image"></button>
                                <ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
                                    <li class="dropdown-header"><img src="assets/img/user/user.png"
                                            class="img-circle" alt="User Image">
                                        <div class="d-inline-block">John Deo <small
                                                class="pt-1">john.example@gmail.com</small></div>
                                    </li>
                                    <li><a href="user-profile.html"><i class="mdi mdi-account"></i> My Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi mdi-email"></i> Message</a></li>
                                    <li><a href="#"><i class="mdi mdi-diamond-stone"></i> Projects</a></li>
                                    <li class="right-sidebar-in"><a href="javascript:0"><i
                                                class="mdi mdi-settings-outline"></i> Setting</a></li>
                                    <li class="dropdown-footer"><a href="index.html"><i class="mdi mdi-logout"></i>
                                            Log Out</a></li>
                                </ul>
                            </li>
                            <li class="dropdown notifications-menu custom-dropdown"><button
                                    class="dropdown-toggle notify-toggler custom-dropdown-toggler"><i
                                        class="mdi mdi-bell-outline"></i></button>
                                <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                                    <div class="card-header card-header-border-bottom px-3">
                                        <h2>Notifications</h2>
                                    </div>
                                    <div class="card-body px-0 py-0">
                                        <ul class="nav nav-tabs nav-style-border p-0 justify-content-between"
                                            id="myTab" role="tablist">
                                            <li class="nav-item mx-3 my-0 py-0"><a href="#"
                                                    class="nav-link active pb-3" id="home2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home2" role="tab" aria-controls="home2"
                                                    aria-selected="true">All (10)</a></li>
                                            <li class="nav-item mx-3 my-0 py-0"><a href="#"
                                                    class="nav-link pb-3" id="profile2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile2" role="tab"
                                                    aria-controls="profile2" aria-selected="false">Msgs (5)</a></li>
                                            <li class="nav-item mx-3 my-0 py-0"><a href="#"
                                                    class="nav-link pb-3" id="contact2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#contact2" role="tab"
                                                    aria-controls="contact2" aria-selected="false">Others (5)</a></li>
                                        </ul>
                                        <div class="tab-content" id="myNotifications">
                                            <div class="tab-pane fade show active" id="home2" role="tabpanel">
                                                <ul class="list-unstyled" data-simplebar="init" style="height:360px">
                                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                                        <div class="simplebar-height-auto-observer-wrapper">
                                                            <div class="simplebar-height-auto-observer"></div>
                                                        </div>
                                                        <div class="simplebar-mask">
                                                            <div class="simplebar-offset"
                                                                style="right: 0px; bottom: 0px;">
                                                                <div class="simplebar-ec-content-wrapper"
                                                                    style="height: auto; overflow: hidden;">
                                                                    <div class="simplebar-content"
                                                                        style="padding: 0px;">
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div class="position-relative mr-3">
                                                                                    <img class="rounded-circle"
                                                                                        src="assets/img/user/u2.jpg"
                                                                                        alt="Image"> <span
                                                                                        class="status away"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Nitin</h4>
                                                                                        <p class="last-msg">Lorem ipsum
                                                                                            dolor sit, amet consectetur
                                                                                            adipisicing elit. Nam itaque
                                                                                            doloremque odio, eligendi
                                                                                            delectus vitae.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            30 min ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification media-active">
                                                                                <div class="position-relative mr-3">
                                                                                    <img class="rounded-circle"
                                                                                        src="assets/img/user/u1.jpg"
                                                                                        alt="Image"> <span
                                                                                        class="status active"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Lovina</h4>
                                                                                        <p class="last-msg">Donec
                                                                                            mattis augue a nisl
                                                                                            consequat, nec imperdiet ex
                                                                                            rutrum. Fusce et vehicula
                                                                                            enim. Sed in enim eu odio
                                                                                            vehic.</p><span
                                                                                            class="font-size-12 font-weight-medium text-white"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            Just now...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div class="position-relative mr-3">
                                                                                    <img class="rounded-circle"
                                                                                        src="assets/img/user/u5.jpg"
                                                                                        alt="Image"> <span
                                                                                        class="status away"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Crinali</h4>
                                                                                        <p class="last-msg">Lorem ipsum
                                                                                            dolor sit, amet consectetur
                                                                                            adipisicing elit. Nam itaque
                                                                                            doloremque odio, eligendi
                                                                                            delectus vitae.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            1 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification event-active">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                                                    <i
                                                                                        class="mdi mdi-calendar-check font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Upcomming
                                                                                            event added</h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            03/Jan/2020 (1pm - 2pm)</p>
                                                                                        <span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            10 min ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                                                    <i
                                                                                        class="mdi mdi-chart-areaspline font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Yearly Sales
                                                                                            report</h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            Lorem ipsum dolor sit, amet
                                                                                            consectetur adipisicing
                                                                                            elit. Nam itaque doloremque
                                                                                            odio, eligendi delectus
                                                                                            vitae.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            1 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                                                    <i
                                                                                        class="mdi mdi-account-multiple-check font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">New request
                                                                                        </h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            Add Dany Jones as your
                                                                                            contact consequat nec
                                                                                            imperdiet ex rutrum. Fusce
                                                                                            et vehicula enim. Sed in
                                                                                            enim.</p><span
                                                                                            class="my-1 btn btn-sm btn-success">Accept</span>
                                                                                        <span
                                                                                            class="my-1 btn btn-sm btn-secondary">Delete</span>
                                                                                        <span
                                                                                            class="font-size-12 font-weight-medium text-secondary d-block"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            5 min ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                                                                    <i
                                                                                        class="mdi mdi-server-network-off font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Server
                                                                                            overloaded</h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            Donec mattis augue a nisl
                                                                                            consequat, nec imperdiet ex
                                                                                            rutrum. Fusce et vehicula
                                                                                            enim. Sed in enim eu odio
                                                                                            vehic.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            30 min ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                                                                                    <i
                                                                                        class="mdi mdi-playlist-check font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Task
                                                                                            complete</h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            Nam ut nisi erat. Ut quis
                                                                                            tortor varius, hendrerit
                                                                                            arcu quis, congue nisl. In
                                                                                            scelerisque, sem ut ve.</p>
                                                                                        <span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            2 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-placeholder"
                                                            style="width: 0px; height: 0px;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-horizontal"
                                                        style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar"
                                                            style="width: 0px; display: none;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-vertical"
                                                        style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar"
                                                            style="height: 0px; display: none;"></div>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="profile2" role="tabpanel">
                                                <ul class="list-unstyled" data-simplebar="init" style="height:360px">
                                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                                        <div class="simplebar-height-auto-observer-wrapper">
                                                            <div class="simplebar-height-auto-observer"></div>
                                                        </div>
                                                        <div class="simplebar-mask">
                                                            <div class="simplebar-offset"
                                                                style="right: 0px; bottom: 0px;">
                                                                <div class="simplebar-ec-content-wrapper"
                                                                    style="height: auto; overflow: hidden;">
                                                                    <div class="simplebar-content"
                                                                        style="padding: 0px;">
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div class="position-relative mr-3">
                                                                                    <img class="rounded-circle"
                                                                                        src="assets/img/user/u6.jpg"
                                                                                        alt="Image"> <span
                                                                                        class="status away"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Hardiko</h4>
                                                                                        <p class="last-msg">Donec
                                                                                            mattis augue a nisl
                                                                                            consequat, nec imperdiet ex
                                                                                            rutrum. Fusce et vehicula
                                                                                            enim. Sed in enim eu odio
                                                                                            vehic.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            1 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div class="position-relative mr-3">
                                                                                    <img class="rounded-circle"
                                                                                        src="assets/img/user/u7.jpg"
                                                                                        alt="Image"> <span
                                                                                        class="status away"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Browin</h4>
                                                                                        <p class="last-msg">Nam ut nisi
                                                                                            erat. Ut quis tortor varius,
                                                                                            hendrerit arcu quis, congue
                                                                                            nisl. In scelerisque, sem ut
                                                                                            ve.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            1 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification media-active">
                                                                                <div class="position-relative mr-3">
                                                                                    <img class="rounded-circle"
                                                                                        src="assets/img/user/u1.jpg"
                                                                                        alt="Image"> <span
                                                                                        class="status active"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">jenelia</h4>
                                                                                        <p class="last-msg">Donec
                                                                                            mattis augue a nisl
                                                                                            consequat, nec imperdiet ex
                                                                                            rutrum. Fusce et vehicula
                                                                                            enim. Sed in enim eu odio
                                                                                            vehic.</p><span
                                                                                            class="font-size-12 font-weight-medium text-white"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            Just now...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div class="position-relative mr-3">
                                                                                    <img class="rounded-circle"
                                                                                        src="assets/img/user/u2.jpg"
                                                                                        alt="Image"> <span
                                                                                        class="status away"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Bhavlio</h4>
                                                                                        <p class="last-msg">Lorem ipsum
                                                                                            dolor sit, amet consectetur
                                                                                            adipisicing elit. Nam itaque
                                                                                            doloremque odio, eligendi
                                                                                            delectus vitae.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            1 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div class="position-relative mr-3">
                                                                                    <img class="rounded-circle"
                                                                                        src="assets/img/user/u5.jpg"
                                                                                        alt="Image"> <span
                                                                                        class="status away"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Browini</h4>
                                                                                        <p class="last-msg">Lorem ipsum
                                                                                            dolor sit, amet consectetur
                                                                                            adipisicing elit. Nam itaque
                                                                                            doloremque odio, eligendi
                                                                                            delectus vitae.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            1 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-placeholder"
                                                            style="width: 0px; height: 0px;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-horizontal"
                                                        style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar"
                                                            style="width: 0px; display: none;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-vertical"
                                                        style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar"
                                                            style="height: 0px; display: none;"></div>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="contact2" role="tabpanel">
                                                <ul class="list-unstyled" data-simplebar="init" style="height:360px">
                                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                                        <div class="simplebar-height-auto-observer-wrapper">
                                                            <div class="simplebar-height-auto-observer"></div>
                                                        </div>
                                                        <div class="simplebar-mask">
                                                            <div class="simplebar-offset"
                                                                style="right: 0px; bottom: 0px;">
                                                                <div class="simplebar-ec-content-wrapper"
                                                                    style="height: auto; overflow: hidden;">
                                                                    <div class="simplebar-content"
                                                                        style="padding: 0px;">
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification event-active">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                                                    <i
                                                                                        class="mdi mdi-calendar-check font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Upcomming
                                                                                            event added</h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            03/Jan/2020 (1pm - 2pm)</p>
                                                                                        <span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            10 min ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                                                    <i
                                                                                        class="mdi mdi-chart-areaspline font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">New Sales
                                                                                            report</h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            Lorem ipsum dolor sit, amet
                                                                                            consectetur adipisicing
                                                                                            elit. Nam itaque doloremque
                                                                                            odio, eligendi delectus
                                                                                            vitae.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            1 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                                                    <i
                                                                                        class="mdi mdi-account-multiple-check font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">New Request
                                                                                        </h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            Add Dany Jones as your
                                                                                            contact consequat nec
                                                                                            imperdiet ex rutrum. Fusce
                                                                                            et vehicula enim. Sed in
                                                                                            enim.</p><span
                                                                                            class="my-1 btn btn-sm btn-success">Accept</span>
                                                                                        <span
                                                                                            class="my-1 btn btn-sm btn-secondary">Delete</span>
                                                                                        <span
                                                                                            class="font-size-12 font-weight-medium text-secondary d-block"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            5 min ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                                                                    <i
                                                                                        class="mdi mdi-server-network-off font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">Server
                                                                                            overloaded</h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            Donec mattis augue a nisl
                                                                                            consequat, nec imperdiet ex
                                                                                            rutrum. Fusce et vehicula
                                                                                            enim. Sed in enim eu odio
                                                                                            vehic.</p><span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            30 min ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a href="javscript:void(0)"
                                                                                class="media media-message media-notification">
                                                                                <div
                                                                                    class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                                                                                    <i
                                                                                        class="mdi mdi-playlist-check font-size-20"></i>
                                                                                </div>
                                                                                <div
                                                                                    class="media-body d-flex justify-content-between">
                                                                                    <div class="message-contents">
                                                                                        <h4 class="title">New Task
                                                                                            complete</h4>
                                                                                        <p
                                                                                            class="last-msg font-size-14">
                                                                                            Nam ut nisi erat. Ut quis
                                                                                            tortor varius, hendrerit
                                                                                            arcu quis, congue nisl. In
                                                                                            scelerisque, sem ut ve.</p>
                                                                                        <span
                                                                                            class="font-size-12 font-weight-medium text-secondary"><i
                                                                                                class="mdi mdi-clock-outline"></i>
                                                                                            2 hrs ago...</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="simplebar-placeholder"
                                                            style="width: 0px; height: 0px;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-horizontal"
                                                        style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar"
                                                            style="width: 0px; display: none;"></div>
                                                    </div>
                                                    <div class="simplebar-track simplebar-vertical"
                                                        style="visibility: hidden;">
                                                        <div class="simplebar-scrollbar"
                                                            style="height: 0px; display: none;"></div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="dropdown-menu dropdown-menu-right d-none">
                                    <li class="dropdown-header">You have 5 notifications</li>
                                    <li><a href="#"><i class="mdi mdi-account-plus"></i> New user registered
                                            <span class="font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span></a></li>
                                    <li><a href="#"><i class="mdi mdi-account-remove"></i> User deleted <span
                                                class="font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07 AM</span></a></li>
                                    <li><a href="#"><i class="mdi mdi-chart-areaspline"></i> Sales report is
                                            ready <span class="font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 12 PM</span></a></li>
                                    <li><a href="#"><i class="mdi mdi-account-supervisor"></i> New client <span
                                                class="font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span></a></li>
                                    <li><a href="#"><i class="mdi mdi-server-network-off"></i> Server overloaded
                                            <span class="font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 05 AM</span></a></li>
                                    <li class="dropdown-footer"><a class="text-center" href="#">View All</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="right-sidebar-in right-sidebar-2-menu"><i
                                    class="mdi mdi-settings-outline mdi-spin"></i></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="ec-content-wrapper">
                <div class="content">

                   @yield("content")

                </div>
            </div>
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>Copyright © <span id="ec-year">2023</span><a class="text-primary"
                            href="https://themeforest.net/user/ashishmaraviya" target="_blank">Ekka Admin
                            Dashboard</a>. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
    </div>
    @include('sweetalert::alert')
</body>
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.notify.min.js') }}"></script>
<script src="{{ asset('js/jquery.bundle.notify.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/simplebar.min.js') }}"></script>
<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/google-map-loader.js') }}"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker.js') }}"></script>
<script src="{{ asset('js/date-range.js') }}"></script>
<script src="{{ asset('js/optionswitcher.js') }}"></script>
<script src="{{ asset('js/jquery.datatables.min.js') }}"></script>
<script src="{{ asset('js/datatables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/datatables.responsive.min.js') }}"></script>
<script src="{{ asset('js/ekka.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    script type = "text/javascript"
    charset = "UTF-8"
    src = "https://www.gstatic.com/charts/51/loader.js" >
</script>
<script type="text/javascript" charset="UTF-8"
    src="https://www.gstatic.com/charts/51/js/jsapi_compiled_default_module.js"></script>
<script type="text/javascript" charset="UTF-8"
    src="https://www.gstatic.com/charts/51/js/jsapi_compiled_graphics_module.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_ui_module.js">
</script>
<script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_geo_module.js">
</script>
<script type="text/javascript" charset="UTF-8"
    src="https://www.gstatic.com/charts/51/js/jsapi_compiled_geochart_module.js"></script>

<script>
    $(document).ready(function(){
        $("#responsive-data-table-1").DataTable(
            {
                select: true,
            }
        );
    })
</script>




</html>
