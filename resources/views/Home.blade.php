<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wieldy-html.g-axon.work/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 08:12:55 GMT -->
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wieldy - A fully responsive, HTML5 based admin template">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
    <!-- /meta tags -->
    <title>Wieldy - Admin Dashboard</title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- /site favicon -->

    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="{{asset('backend//node_modules/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend//vendors/gaxon-icon/style.css')}}">
    <!-- /font icon Styles -->

    <!-- Perfect Scrollbar stylesheet -->
    <link rel="stylesheet" href="{{asset('backend//node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Load Styles -->

    <link rel="stylesheet" href="{{asset('backend/assets/css/lite-style-1.min.css')}}">
    <!-- /load styles -->

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
    <div class="dt-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
</div>
<!-- /loader -->

<!-- Root -->
<div class="dt-root">
    <!-- Header -->
    <header class="dt-header">

        <!-- Header container -->
        <div class="dt-header__container">

            <!-- Brand -->
            <div class="dt-brand">

                <!-- Brand tool -->
                <div class="dt-brand__tool" data-toggle="main-sidebar">
                    <i class="icon icon-xl icon-menu-fold d-none d-lg-inline-block"></i>
                    <i class="icon icon-xl icon-menu d-lg-none"></i>
                </div>
                <!-- /brand tool -->

                <!-- Brand logo -->
                <span class="dt-brand__logo">
        <a class="dt-brand__logo-link" href="index-2.html">
          <img class="dt-brand__logo-img d-none d-lg-inline-block" src="assets/images/logo.png" alt="Wieldy">
          <img class="dt-brand__logo-symbol d-lg-none" src="assets/images/logo-symbol.png" alt="Wieldy">
        </a>
      </span>
                <!-- /brand logo -->

            </div>
            <!-- /brand -->

            <!-- Header toolbar-->
            <div class="dt-header__toolbar">

                <!-- Search box -->
                <form class="search-box d-none d-lg-block">
                    <input class="form-control border-0" placeholder="Search in app..." value="" type="search">
                    <span class="search-icon text-light-gray"><i class="icon icon-search icon-lg"></i></span>
                </form>
                <!-- /search box -->

                <!-- Header Menu Wrapper -->
                <div class="dt-nav-wrapper">
                    <!-- Header Menu -->
                    <ul class="dt-nav d-lg-none">
                        <li class="dt-nav__item dt-notification-search dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search-new icon-fw icon-lg"></i> </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu">

                                <!-- Search Box -->
                                <form class="search-box right-side-icon">
                                    <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                                    <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
                                </form>
                                <!-- /search box -->

                            </div>
                            <!-- /dropdown option -->

                        </li>
                    </ul>
                    <!-- /header menu -->

                    <!-- Header Menu -->
                    <ul class="dt-nav d-lg-none">
                        <li class="dt-nav__item dt-notification dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-notification icon-fw dt-icon-alert"></i>
                            </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                <!-- Dropdown Menu Header -->
                                <div class="dropdown-menu-header">
                                    <h4 class="title">Notifications (9)</h4>

                                    <div class="ml-auto action-area">
                                        <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                                            <i class="icon icon-setting icon-lg text-light-gray"></i> </a>
                                    </div>
                                </div>
                                <!-- /dropdown menu header -->

                                <!-- Dropdown Menu Body -->
                                <div class="dropdown-menu-body ps-custom-scrollbar">

                                    <div class="h-auto">
                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="assets/images/user-avatar/stella-johnson.jpg" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body">
                    <span class="message">
                      <span class="user-name">Stella Johnson</span> and <span class="user-name">Chris Harris</span>
                      have birthdays today. Help them celebrate!
                    </span>
                    <span class="meta-date">8 hours ago</span>
                  </span>
                                            <!-- /media body -->

                                        </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="assets/images/user-avatar/jeson-born.jpg" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body">
                    <span class="message">
                      <span class="user-name">Jonathan Madano</span> commented on your post.
                    </span>
                    <span class="meta-date">9 hours ago</span>
                  </span>
                                            <!-- /media body -->

                                        </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="assets/images/user-avatar/selena.jpg" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body">
                    <span class="message">
                      <span class="user-name">Chelsea Brown</span> sent a video recomendation.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-menu-right text-primary icon-fw mr-1"></i>
                      13 hours ago
                    </span>
                  </span>
                                            <!-- /media body -->

                                        </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="assets/images/user-avatar/alex-dolgove.jpg" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body">
                    <span class="message">
                      <span class="user-name">Alex Dolgove</span> and <span class="user-name">Chris Harris</span>
                      like your post.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-like text-light-blue icon-fw mr-1"></i>
                      yesterday at 9:30
                    </span>
                  </span>
                                            <!-- /media body -->

                                        </a>
                                        <!-- /media -->
                                    </div>

                                </div>
                                <!-- /dropdown menu body -->

                                <!-- Dropdown Menu Footer -->
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)" class="card-link"> See All <i class="icon icon-arrow-right icon-fw"></i>
                                    </a>
                                </div>
                                <!-- /dropdown menu footer -->
                            </div>
                            <!-- /dropdown option -->

                        </li>

                        <li class="dt-nav__item dt-notification dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-chat-new icon-fw"></i> </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                <!-- Dropdown Menu Header -->
                                <div class="dropdown-menu-header">
                                    <h4 class="title">Messages (6)</h4>

                                    <div class="ml-auto action-area">
                                        <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                                            <i class="icon icon-setting icon-lg text-light-gray"></i></a>
                                    </div>
                                </div>
                                <!-- /dropdown menu header -->

                                <!-- Dropdown Menu Body -->
                                <div class="dropdown-menu-body ps-custom-scrollbar">

                                    <div class="h-auto">

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="assets/images/user-avatar/mathew.jpg" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body text-truncate">
                    <span class="user-name mb-1">Chris Mathew</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
                                            <!-- /media body -->

                                            <span class="action-area h-100 min-w-80 text-right">
                      <span class="meta-date mb-1">8 hours ago</span>
                                                <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                <!-- /toggle button -->
                    </span> </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="assets/images/user-avatar/stella-johnson.jpg" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body text-truncate">
                    <span class="user-name mb-1">Alia Joseph</span>
                    <span class="message text-light-gray text-truncate">
                      Alia Joseph just joined Messenger! Be the first to send a welcome message or sticker.
                    </span>
                  </span>
                                            <!-- /media body -->

                                            <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">9 hours ago</span>
                                                <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                <!-- /toggle button -->
                  </span> </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="assets/images/user-avatar/steve-smith.jpg" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body text-truncate">
                    <span class="user-name mb-1">Joshua Brian</span>
                    <span class="message text-light-gray text-truncate">
                      Alex will explain you how to keep the HTML structure and all that.
                    </span>
                  </span>
                                            <!-- /media body -->

                                            <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">12 hours ago</span>
                                                <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                <!-- /toggle button -->
                  </span> </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="assets/images/user-avatar/domnic-brown.jpg" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body text-truncate">
                    <span class="user-name mb-1">Domnic Brown</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
                                            <!-- /media body -->

                                            <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">yesterday</span>
                                                <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                <!-- /toggle button -->
                  </span> </a>
                                        <!-- /media -->

                                    </div>

                                </div>
                                <!-- /dropdown menu body -->

                                <!-- Dropdown Menu Footer -->
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)" class="card-link"> See All <i class="icon icon-arrow-right icon-fw"></i>
                                    </a>
                                </div>
                                <!-- /dropdown menu footer -->
                            </div>
                            <!-- /dropdown option -->

                        </li>
                    </ul>
                    <!-- /header menu -->

                    <!-- Header Menu -->
                    <ul class="dt-nav">
                        <li class="dt-nav__item dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle" data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                <i class="flag-icon flag-icon-us flag-icon-lg"></i><span>English</span> </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="flag-icon flag-icon-us mr-2"></i><span>English</span> </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="flag-icon flag-icon-cn mr-2"></i><span>Chinese</span> </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span> </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="flag-icon flag-icon-fr mr-2"></i><span>French</span> </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="flag-icon flag-icon-it mr-2"></i><span>Italian</span> </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="flag-icon flag-icon-sa mr-2"></i><span>Arabic</span> </a>
                            </div>
                            <!-- /dropdown option -->

                        </li>
                    </ul>
                    <!-- /header menu -->

                    <!-- Header Menu -->
                    <ul class="dt-nav d-lg-none">
                        <li class="dt-nav__item dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="dt-avatar size-40" src="assets/images/user-avatar/domnic-harris.jpg" alt="Domnic Harris">
                            </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dt-avatar-wrapper flex-nowrap p-6 mt--5 bg-gradient-purple text-white rounded-top">
                                    <img class="dt-avatar" src="assets/images/user-avatar/domnic-harris.jpg" alt="Domnic Harris">
                                    <span class="dt-avatar-info">
                  <span class="dt-avatar-name">Bob Hyden</span>
                  <span class="f-12">Administrator</span>
                </span>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user-o icon-fw mr-2 mr-sm-1"></i>Account
                                </a> <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-setting icon-fw mr-2 mr-sm-1"></i>Setting </a>
                                <a class="dropdown-item" href="page-login.html"> <i class="icon icon-edit icon-fw mr-2 mr-sm-1"></i>Logout
                                </a>
                            </div>
                            <!-- /dropdown option -->

                        </li>
                    </ul>
                    <!-- /header menu -->

                </div>
                <!-- Header Menu Wrapper -->

            </div>
            <!-- /header toolbar -->

        </div>
        <!-- /header container -->

    </header>
    <!-- /header -->

    <!-- Site Main -->
    <main class="dt-main">
        <!-- Sidebar -->
        <aside id="main-sidebar" class="dt-sidebar">
            <div class="dt-sidebar__container">

                <!-- Sidebar Notification -->
                <div class="dt-sidebar__notification  d-none d-lg-block">
                    <!-- Dropdown -->
                    <div class="dropdown mb-6" id="user-menu-dropdown">

                        <!-- Dropdown Link -->
                        <a href="#" class="dropdown-toggle dt-avatar-wrapper text-body"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="dt-avatar" src="assets/images/user-avatar/domnic-harris.jpg" alt="Domnic Harris">
                            <span class="dt-avatar-info">
            <span class="dt-avatar-name">Bob Hyden</span>
          </span> </a>
                        <!-- /dropdown link -->

                        <!-- Dropdown Option -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dt-avatar-wrapper flex-nowrap p-6 mt--5 bg-gradient-purple text-white rounded-top">
                                <img class="dt-avatar" src="assets/images/user-avatar/domnic-harris.jpg" alt="Domnic Harris">
                                <span class="dt-avatar-info">
                  <span class="dt-avatar-name">Bob Hyden</span>
                  <span class="f-12">Administrator</span>
                </span>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user-o icon-fw mr-2 mr-sm-1"></i>Account
                            </a> <a class="dropdown-item" href="javascript:void(0)">
                                <i class="icon icon-setting icon-fw mr-2 mr-sm-1"></i>Setting </a>
                            <a class="dropdown-item" href="page-login.html"> <i class="icon icon-edit icon-fw mr-2 mr-sm-1"></i>Logout
                            </a>
                        </div>
                        <!-- /dropdown option -->

                    </div>
                    <!-- /dropdown -->


                    <ul class="dt-list dt-list-xl">
                        <li class="dt-list__item pl-5 pr-5">
                            <a href="javascript:void(0)" class="dt-list__link"><i class="icon icon-search-new icon-xl"></i></a>
                        </li>
                        <li class="dt-list__item pl-5 pr-5">
                            <a href="javascript:void(0)" class="dt-list__link"><i class="icon icon-notification icon-xl"></i></a>
                        </li>
                        <li class="dt-list__item pl-5 pr-5">
                            <a href="javascript:void(0)" class="dt-list__link"><i class="icon icon-chat-new icon-xl"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /sidebar notification -->

                <!-- Sidebar Navigation -->
                <ul class="dt-side-nav">

                    <!-- Menu Header -->
                    <li class="dt-side-nav__item dt-side-nav__header">
                        <span class="dt-side-nav__text">main</span>
                    </li>
                    <!-- /menu header -->

                    <!-- Menu Item -->
                    <li class="dt-side-nav__item open">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Dashboard">
                            <i class="icon icon-dashboard icon-fw icon-xl"></i> <span class="dt-side-nav__text">Dashboard</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="index-2.html" class="dt-side-nav__link" title="Crypto"> <i class="icon icon-crypto icon-fw icon-sm"></i>
                                    <span class="dt-side-nav__text">Crypto</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="dashboard-crm.html" class="dt-side-nav__link" title="CRM"> <i class="icon icon-crm icon-fw icon-sm"></i>
                                    <span class="dt-side-nav__text">Crm</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="dashboard-listing.html" class="dt-side-nav__link" title="Listing">
                                    <i class="icon icon-listing-dbrd icon-fw icon-sm"></i> <span class="dt-side-nav__text">Listing</span> </a>
                            </li>

                        </ul>
                        <!-- /sub-menu -->

                    </li>
                    <li class="dt-side-nav__item">
                        <a href="widget.html" class="dt-side-nav__link" title="Widgets"> <i class="icon icon-widgets icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Widgets</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="metrics.html" class="dt-side-nav__link" title="Metrics"> <i class="icon icon-apps icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Metrics</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="layouts.html" class="dt-side-nav__link" title="Layouts"> <i class="icon icon-card icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Layouts</span> </a>
                    </li>
                    <!-- /menu item -->

                    <!-- Menu Header -->
                    <li class="dt-side-nav__item dt-side-nav__header">
                        <span class="dt-side-nav__text">Pre-built Apps</span>
                    </li>
                    <!-- /menu header -->

                    <!-- Menu Item -->
                    <li class="dt-side-nav__item">
                        <a href="mail.html" class="dt-side-nav__link" title="Mail App"> <i class="icon icon-email icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Mail App</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="task-manager.html" class="dt-side-nav__link" title="Todo App"> <i class="icon icon-check-square-o icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Todo App</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="contact.html" class="dt-side-nav__link" title="Contacts App"> <i class="icon icon-contacts icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Contacts App</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="chat.html" class="dt-side-nav__link" title="Chat App"> <i class="icon icon-chat-bubble icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Chat App</span> </a>
                    </li>
                    <!-- /menu item -->

                    <!-- Menu Header -->
                    <li class="dt-side-nav__item dt-side-nav__header">
                        <span class="dt-side-nav__text">Social Apps</span>
                    </li>
                    <!-- /menu header -->

                    <!-- Menu Item -->
                    <li class="dt-side-nav__item">
                        <a href="page-profile.html" class="dt-side-nav__link" title="Profile"> <i class="icon icon-profile2 icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Profile</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="page-wall.html" class="dt-side-nav__link" title="Wall App"> <i class="icon icon-avatar icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Wall App</span> </a>
                    </li>
                    <!-- /menu item -->

                    <!-- Menu Header -->
                    <li class="dt-side-nav__item dt-side-nav__header">
                        <span class="dt-side-nav__text">Components</span>
                    </li>
                    <!-- /menu header -->

                    <!-- Menu Item -->
                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Basic Components">
                            <i class="icon icon-all-contacts icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Basic Components</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="alerts.html" class="dt-side-nav__link" title="Alerts">
                                    <span class="dt-side-nav__text">Alerts</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="badges.html" class="dt-side-nav__link" title="Badges">
                                    <span class="dt-side-nav__text">Badges</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="breadcrumbs.html" class="dt-side-nav__link" title="Breadcrumbs">
                                    <span class="dt-side-nav__text">Breadcrumbs</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="buttons.html" class="dt-side-nav__link" title="Button">
                                    <span class="dt-side-nav__text">Button</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="button-group.html" class="dt-side-nav__link" title="Button Group">
                                    <span class="dt-side-nav__text">Button Group</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="card.html" class="dt-side-nav__link" title="Card">
                                    <span class="dt-side-nav__text">Card</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="card-group.html" class="dt-side-nav__link" title="Card Group">
                                    <span class="dt-side-nav__text">Card Group</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="carousel.html" class="dt-side-nav__link" title="Carousel">
                                    <span class="dt-side-nav__text">Carousel</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="collapse.html" class="dt-side-nav__link" title="Collapse">
                                    <span class="dt-side-nav__text">Collapse</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="dropdown.html" class="dt-side-nav__link" title="Dropdown">
                                    <span class="dt-side-nav__text">Dropdown</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="input-group.html" class="dt-side-nav__link" title="Input Group">
                                    <span class="dt-side-nav__text">Input Group</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="jumbotron.html" class="dt-side-nav__link" title="Jumbotron">
                                    <span class="dt-side-nav__text">Jumbotron</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="list-group.html" class="dt-side-nav__link" title="List Group">
                                    <span class="dt-side-nav__text">List Group</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="modal.html" class="dt-side-nav__link" title="Modal">
                                    <span class="dt-side-nav__text">Modal</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="navbar.html" class="dt-side-nav__link" title="Navbar">
                                    <span class="dt-side-nav__text">Navbar</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="navs.html" class="dt-side-nav__link" title="Navs & Tabs">
                                    <span class="dt-side-nav__text">Navs &amp; Tabs</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="pagination.html" class="dt-side-nav__link" title="Pagination">
                                    <span class="dt-side-nav__text">Pagination</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="popovers.html" class="dt-side-nav__link" title="Popovers">
                                    <span class="dt-side-nav__text">Popovers</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="progress.html" class="dt-side-nav__link" title="Progress Bar">
                                    <span class="dt-side-nav__text">Progress Bar</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="scrollspy.html" class="dt-side-nav__link" title="Scrollspy">
                                    <span class="dt-side-nav__text">Scrollspy</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="tooltip.html" class="dt-side-nav__link" title="Tooltip">
                                    <span class="dt-side-nav__text">Tooltip</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="typography.html" class="dt-side-nav__link" title="Typography">
                                    <span class="dt-side-nav__text">Typography</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                            <i class="icon icon-table icon-fw icon-xl"></i> <span class="dt-side-nav__text">Tables</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="basic-table.html" class="dt-side-nav__link" title="Basic Table">
                                    <span class="dt-side-nav__text">Basic Table</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="data-table.html" class="dt-side-nav__link" title="Data Table">
                                    <span class="dt-side-nav__text">Data Table</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>
                    <!-- /menu item -->

                    <!-- Menu Header -->
                    <li class="dt-side-nav__item dt-side-nav__header">
                        <span class="dt-side-nav__text">Forms</span>
                    </li>
                    <!-- /menu header -->

                    <!-- Menu Item -->
                    <li class="dt-side-nav__item">
                        <a href="basic-form.html" class="dt-side-nav__link" title="Basic Form"> <i class="icon icon-feedback icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Basic Form</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="file-upload.html" class="dt-side-nav__link" title="File Upload"> <i class="icon icon-upload icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">File Upload</span> </a>
                    </li>
                    <!-- /menu item -->

                    <!-- Menu Header -->
                    <li class="dt-side-nav__item dt-side-nav__header">
                        <span class="dt-side-nav__text">Extra Components</span>
                    </li>
                    <!-- /menu header -->

                    <!-- Menu Item -->
                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Editors">
                            <i class="icon icon-editor icon-fw icon-xl"></i> <span class="dt-side-nav__text">Editors</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="editor-summernote.html" class="dt-side-nav__link" title="Summernote Editor">
                                    <span class="dt-side-nav__text">Summernote Editor</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="code-editor.html" class="dt-side-nav__link" title="Code Editor">
                                    <span class="dt-side-nav__text">Code Editor</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Pickers">
                            <i class="icon icon-picker icon-fw icon-xl"></i> <span class="dt-side-nav__text">Pickers</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="date-time-pickers.html" class="dt-side-nav__link" title="Date & Time Picker">
                                    <span class="dt-side-nav__text">Date &amp; Time Picker</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="color-picker.html" class="dt-side-nav__link" title="Color Picker">
                                    <span class="dt-side-nav__text">Color Picker</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="drag-drop.html" class="dt-side-nav__link" title="Drag & Drop"> <i class="icon icon-drag-and-drop icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Drag &amp; Drop</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="sweet-alert.html" class="dt-side-nav__link" title="Sweet Alerts"> <i class="icon icon-sweet-alert icon-fw icon-xl"></i>
                            <span class="dt-side-nav__text">Sweet Alerts</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="notification-alert.html" class="dt-side-nav__link" title="Notifications">
                            <i class="icon icon-notification icon-fw icon-xl"></i> <span class="dt-side-nav__text">Notifications</span>
                        </a>
                    </li>

                    <!-- /menu item -->

                    <!-- Menu Header -->
                    <li class="dt-side-nav__item dt-side-nav__header">
                        <span class="dt-side-nav__text">Extensions</span>
                    </li>
                    <!-- /menu header -->

                    <!-- Menu Item -->
                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Maps">
                            <i class="icon icon-extensions icon-fw icon-xl"></i> <span class="dt-side-nav__text">Maps</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="map-basic.html" class="dt-side-nav__link" title="Simple map">
                                    <span class="dt-side-nav__text">Simple map</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-events.html" class="dt-side-nav__link" title="Events Map">
                                    <span class="dt-side-nav__text">Events Map</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-markers.html" class="dt-side-nav__link" title="Markers Maps">
                                    <span class="dt-side-nav__text">Markers Maps</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-geolocation.html" class="dt-side-nav__link" title="Geo Location Map">
                                    <span class="dt-side-nav__text">Geo Location Map</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-geocoding.html" class="dt-side-nav__link" title="Geo Coding Map">
                                    <span class="dt-side-nav__text">Geo Coding Map</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-overlay.html" class="dt-side-nav__link" title="Overlay">
                                    <span class="dt-side-nav__text">Overlay</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-overlay-polylines.html" class="dt-side-nav__link" title="Overlay Polylines">
                                    <span class="dt-side-nav__text">Overlay Polylines</span>
                                </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-overlay-polygons.html" class="dt-side-nav__link" title="Overlay Polygons">
                                    <span class="dt-side-nav__text">Overlay Polygons</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-geo-polygons.html" class="dt-side-nav__link" title="GeoJSON Polygons">
                                    <span class="dt-side-nav__text">GeoJSON Polygons</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-route.html" class="dt-side-nav__link" title="Map Routes">
                                    <span class="dt-side-nav__text">Map Routes</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="map-advance-route.html" class="dt-side-nav__link" title="Advance Routes">
                                    <span class="dt-side-nav__text">Advance Routes</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="data-maps.html" class="dt-side-nav__link" title="Data Maps">
                                    <span class="dt-side-nav__text">Data Maps</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="am-maps.html" class="dt-side-nav__link" title="Am Maps">
                                    <span class="dt-side-nav__text">Am Maps</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Charts">
                            <i class="icon icon-chart icon-fw icon-xl"></i> <span class="dt-side-nav__text">Charts</span> </a>

                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="chart-chartjs.html" class="dt-side-nav__link" title="ChartJs">
                                    <span class="dt-side-nav__text">ChartJs</span> </a>
                            </li>

                            <li class="dt-side-nav__item">
                                <a href="chart-amcharts.html" class="dt-side-nav__link" title="Am Charts">
                                    <span class="dt-side-nav__text">Am Charts</span> </a>
                            </li>
                        </ul>
                    </li>
                    <!-- /menu item -->

                    <!-- Menu Header -->
                    <li class="dt-side-nav__item dt-side-nav__header">
                        <span class="dt-side-nav__text">Custom Views</span>
                    </li>
                    <!-- /menu header -->

                    <!-- Menu Item -->
                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="User Auth">
                            <i class="icon icon-auth-screen icon-fw icon-xl"></i> <span class="dt-side-nav__text">User Auth</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="page-login.html" class="dt-side-nav__link" title="Sign In">
                                    <span class="dt-side-nav__text">Sign In</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-login-2.html" class="dt-side-nav__link" title="Sign In 2" target="_blank">
                                    <span class="dt-side-nav__text">Sign In 2</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-forgot-password.html" class="dt-side-nav__link" title="Forgot Password">
                                    <span class="dt-side-nav__text">Forgot Password</span>
                                </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-signup.html" class="dt-side-nav__link" title="Sign Up Page">
                                    <span class="dt-side-nav__text">Sign Up</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-signup-2.html" class="dt-side-nav__link" title="Sign Up 2 Page" target="_blank">
                                    <span class="dt-side-nav__text">Sign Up 2</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-lock-screen.html" class="dt-side-nav__link" title="Lock Screen">
                                    <span class="dt-side-nav__text">Lock Screen</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-reset-password.html" class="dt-side-nav__link" title="Reset Password">
                                    <span class="dt-side-nav__text">Reset Password</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>

                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="List Type">
                            <i class="icon icon-all-contacts icon-fw icon-xl"></i> <span class="dt-side-nav__text">List Type</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="simple-list.html" class="dt-side-nav__link" title="Plain List View">
                                    <span class="dt-side-nav__text">Plain List View</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="strip-list.html" class="dt-side-nav__link" title="Plain List with Divider">
                                    <span class="dt-side-nav__text">Plain List with Divider</span>
                                </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="card-list.html" class="dt-side-nav__link" title="Cards List View">
                                    <span class="dt-side-nav__text">Cards List View</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>

                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="eCommerce">
                            <i class="icon icon-shopping-cart icon-fw icon-xl"></i> <span class="dt-side-nav__text">eCommerce</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="product-grid.html" class="dt-side-nav__link" title="Product Grid">
                                    <span class="dt-side-nav__text">Product Grid</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="product-list.html" class="dt-side-nav__link" title="Product List">
                                    <span class="dt-side-nav__text">Product List</span>
                                </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>

                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Extra Pages">
                            <i class="icon icon-error icon-fw icon-xl"></i> <span class="dt-side-nav__text">Extra Pages</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="page-404.html" class="dt-side-nav__link" title="Error 404">
                                    <span class="dt-side-nav__text">Error 404</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-500.html" class="dt-side-nav__link" title="Error 500">
                                    <span class="dt-side-nav__text">Error 500</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-blank.html" class="dt-side-nav__link" title="Blank Page">
                                    <span class="dt-side-nav__text">Blank Page</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="page-search.html" class="dt-side-nav__link" title="Search Page">
                                    <span class="dt-side-nav__text">Search Page</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>

                    <li class="dt-side-nav__item">
                        <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Extra Pages">
                            <i class="icon icon-ellipse-h icon-fw icon-xl"></i> <span class="dt-side-nav__text">Extras</span> </a>

                        <!-- Sub-menu -->
                        <ul class="dt-side-nav__sub-menu">
                            <li class="dt-side-nav__item">
                                <a href="pricing-table.html" class="dt-side-nav__link" title="Pricing Table">
                                    <span class="dt-side-nav__text">Pricing Table</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="callout.html" class="dt-side-nav__link" title="Callout">
                                    <span class="dt-side-nav__text">Callout</span> </a>
                            </li>
                            <li class="dt-side-nav__item">
                                <a href="testimonials.html" class="dt-side-nav__link" title="Testimonials">
                                    <span class="dt-side-nav__text">Testimonials</span> </a>
                            </li>
                        </ul>
                        <!-- /sub-menu -->
                    </li>

                </ul>
                <!-- /sidebar navigation -->

            </div>
        </aside>
        <!-- /sidebar -->

        <!-- Site Content Wrapper -->
        <div class="dt-content-wrapper">

            <!-- Site Content -->
            <div class="dt-content">

                <!-- Grid -->
                <div class="row">

                    <!-- Grid Item -->
                    <div class="col-xl-3 col-sm-6">

                        <!-- Chart Card -->
                        <div class="dt-card dt-chart dt-card__full-height">

                            <!-- Chart Header -->
                            <div class="dt-chart__header">
                                <div class="style-default style-crypto">
                                    <h2>$9,626</h2>

                                    <div class="trending-section text-success">
                                        <h4>38%</h4>
                                        <i class="icon icon-menu-up"></i>
                                    </div>

                                    <p>Bitcoin Price</p>
                                </div>
                            </div>
                            <!-- /chart header -->

                            <!-- Action Tools -->
                            <div class="action-tools">
                                <i class="icon icon-bitcoin icon-3x text-primary"></i>
                            </div>
                            <!-- /action tools -->

                            <!-- Chart Body -->
                            <div class="dt-chart__body">
                                <canvas class="rounded-xl" id="chart-active-users" height="96" data-shadow="yes"></canvas>
                            </div>
                            <!-- /chart body -->

                        </div>
                        <!-- /chart card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-3 col-sm-6">

                        <!-- Chart Card -->
                        <div class="dt-card dt-chart dt-card__full-height">

                            <!-- Chart Header -->
                            <div class="dt-chart__header">
                                <div class="style-default style-crypto">
                                    <h2>$7,831</h2>

                                    <div class="trending-section text-success">
                                        <h4>07%</h4>
                                        <i class="icon icon-menu-up"></i>
                                    </div>

                                    <p>Etherium Price</p>
                                </div>
                            </div>
                            <!-- /chart header -->

                            <!-- Action Tools -->
                            <div class="action-tools">
                                <i class="icon icon-etherium icon-3x text-primary"></i>
                            </div>
                            <!-- /action tools -->

                            <!-- Chart Body -->
                            <div class="dt-chart__body">
                                <canvas class="rounded-xl" id="chart-extra-revenue" height="96" data-shadow="yes"></canvas>
                            </div>
                            <!-- /chart body -->

                        </div>
                        <!-- /chart card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-3 col-sm-6">

                        <!-- Chart Card -->
                        <div class="dt-card dt-chart dt-card__full-height">

                            <!-- Chart Header -->
                            <div class="dt-chart__header">
                                <div class="style-default style-crypto">
                                    <h2>$1,239</h2>

                                    <div class="trending-section text-danger">
                                        <h4>08%</h4>
                                        <i class="icon icon-menu-down"></i>
                                    </div>

                                    <p>Ripple Price</p>
                                </div>
                            </div>
                            <!-- /chart header -->

                            <!-- Action Tools -->
                            <div class="action-tools">
                                <i class="icon icon-ripple icon-3x text-primary"></i>
                            </div>
                            <!-- /action tools -->

                            <!-- Chart Body -->
                            <div class="dt-chart__body">
                                <canvas class="rounded-xl" id="chart-orders" height="96" data-shadow="yes"></canvas>
                            </div>
                            <!-- /chart body -->

                        </div>
                        <!-- /chart card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-3 col-sm-6">

                        <!-- Chart Card -->
                        <div class="dt-card dt-chart dt-card__full-height">

                            <!-- Chart Header -->
                            <div class="dt-chart__header">
                                <div class="style-default style-crypto">
                                    <h2>$849</h2>

                                    <div class="trending-section text-danger">
                                        <h4>47%</h4>
                                        <i class="icon icon-menu-down"></i>
                                    </div>

                                    <p>Litcoin Price</p>
                                </div>
                            </div>
                            <!-- /chart header -->

                            <!-- Action Tools -->
                            <div class="action-tools">
                                <i class="icon icon-litcoin icon-3x text-primary"></i>
                            </div>
                            <!-- /action tools -->

                            <!-- Chart Body -->
                            <div class="dt-chart__body">
                                <canvas class="rounded-xl" id="chart-traffic-raise" height="96" data-shadow="no"
                                        data-type="line"></canvas>
                            </div>
                            <!-- /chart body -->

                        </div>
                        <!-- /chart card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-6">

                        <!-- Card -->
                        <div class="dt-card dt-card__full-height">

                            <!-- Card Header -->
                            <div class="dt-card__header">

                                <!-- Card Heading -->
                                <div class="dt-card__heading">
                                    <h3 class="dt-card__title">Your Portfolio Balance</h3>
                                </div>
                                <!-- /card heading -->

                            </div>
                            <!-- /card header -->

                            <!-- Card Body -->
                            <div class="dt-card__body">
                                <!-- Grid -->
                                <div class="row no-gutters">
                                    <!-- Grid Item -->
                                    <div class="col-sm-7 pr-sm-2 mb-6 mb-sm-0">
                                        <h2 class="display-2 font-weight-medium mb-3">
                                            $179,626
                                            <span class="d-inline-block f-14 text-success">64% <i class="icon icon-menu-up"></i></span>
                                        </h2>

                                        <span class="d-inline-block text-light-gray mb-6">Overall balance</span>

                                        <p class="card-text">
                                            <a href="javascript:void(0)" class="btn btn-primary mr-2">Deposit</a>
                                            <a href="javascript:void(0)" class="btn text-white bg-cyan">Withdraw</a>
                                        </p>

                                        <a href="javascript:void(0)" class="d-inline-block">
                                            <i class="icon icon-add-circle mr-2"></i>Add New Wallet
                                        </a>
                                    </div>
                                    <!-- /grid item -->
                                    <!-- Grid Item -->
                                    <div class="col-sm-5">
                                        <h5 class="mb-4">Portfolio Distribution</h5>
                                        <ul class="dt-indicator">
                                            <li class="dt-indicator-item">
                                                <h5 class="dt-indicator-title f-12">BTC <span
                                                        class="d-inline-block border-left text-light-gray pl-2 ml-1">8.74</span></h5>
                                                <div class="dt-indicator-item__info" data-fill="78" data-max="100" data-percent="true">
                                                    <div class="dt-indicator-item__fill bg-primary"></div>
                                                    <span class="dt-indicator-item__count ml-3">0</span>
                                                </div>
                                            </li>
                                            <li class="dt-indicator-item">
                                                <h5 class="dt-indicator-title f-12">RPL <span
                                                        class="d-inline-block border-left text-light-gray pl-2 ml-1">1.23</span></h5>
                                                <div class="dt-indicator-item__info" data-fill="52" data-max="100" data-percent="true">
                                                    <div class="dt-indicator-item__fill bg-success"></div>
                                                    <span class="dt-indicator-item__count ml-3">0</span>
                                                </div>
                                            </li>
                                            <li class="dt-indicator-item">
                                                <h5 class="dt-indicator-title f-12">LTE <span
                                                        class="d-inline-block border-left text-light-gray pl-2 ml-1">0.71</span></h5>
                                                <div class="dt-indicator-item__info" data-fill="18" data-max="100" data-percent="true">
                                                    <div class="dt-indicator-item__fill bg-warning"></div>
                                                    <span class="dt-indicator-item__count ml-3">0</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /grid item -->
                                </div>
                                <!-- /grid -->
                            </div>
                            <!-- /card body -->

                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-6">

                        <!-- Card -->
                        <div class="dt-card dt-card__full-height">

                            <!-- Card Header -->
                            <div class="dt-card__header">

                                <!-- Card Heading -->
                                <div class="dt-card__heading">
                                    <h3 class="dt-card__title">Balance History</h3>
                                </div>
                                <!-- /card heading -->

                                <!-- Card Tools -->
                                <div class="dt-card__tools">

                                    <!-- Dropdown -->
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle d-inline-block f-12 py-1 px-2 border rounded text-light-gray"
                                           href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            Last 30 days
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Last week</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Last 6 month</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Last 1 year</a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->

                                </div>
                                <!-- /card tools -->

                            </div>
                            <!-- /card header -->

                            <!-- Chart Body -->
                            <div class="dt-chart__body">
                                <canvas height="100" id="chart-balance-history"></canvas>
                            </div>
                            <!-- /chart body -->

                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-5 col-md-12">

                        <!-- Card -->
                        <div class="dt-card dt-card__full-height">

                            <!-- Card Header -->
                            <div class="dt-card__header">

                                <!-- Card Heading -->
                                <div class="dt-card__heading">
                                    <h3 class="dt-card__title">Send Money to</h3>
                                </div>
                                <!-- /card heading -->

                                <!-- Card Tools -->
                                <div class="dt-card__tools">
                                    <a href="javascript:void(0)" class="dt-card__more"><i class="icon icon-add-circle mr-2"></i>Add New
                                        Account</a>
                                </div>
                                <!-- /card tools -->

                            </div>
                            <!-- /card header -->

                            <!-- Card Body -->
                            <div class="dt-card__body pb-2">

                                <!-- Campaigns Widget -->
                                <div class="campaigns-widget">

                                    <!-- Grid -->
                                    <div class="row no-gutters pb-3 border-bottom">

                                        <!-- Grid Item -->
                                        <div class="col-6">
                                            Account Holder Name
                                        </div>
                                        <!-- /grid item -->

                                        <!-- Grid Item -->
                                        <div class="col-3 text-right">
                                            Last Transfer
                                        </div>
                                        <!-- /grid item -->

                                        <!-- Grid Item -->
                                        <div class="col-3 text-right">
                                            ACTION
                                        </div>
                                        <!-- /grid item -->

                                    </div>
                                    <!-- /grid -->

                                    <!-- Widget -->
                                    <div class="dt-widget dt-widget-sm dt-widget-hover">

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Grid -->
                                            <div class="row no-gutters">

                                                <!-- Grid Item -->
                                                <div class="col-6 pr-2">

                                                    <!-- Avatar Wrapper -->
                                                    <div class="dt-avatar-wrapper">
                                                        <!-- Avatar -->
                                                        <img class="dt-avatar size-30" src="assets/images/user-avatar/nikki.jpg" alt="Mila Alba">
                                                        <!-- /avatar -->

                                                        <!-- Info -->
                                                        <div class="dt-avatar-info dt-widget__title">
                                                            <span class="dt-avatar-name">Mila Alba</span>
                                                        </div>
                                                        <!-- /info -->
                                                    </div>
                                                    <!-- /avatar wrapper -->
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-3 d-flex align-items-center justify-content-end">
                                                    <span class="mb-0 d-inline-block">2 hrs. ago</span>
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-3 d-flex align-items-center justify-content-end">
                                                    <a class="d-inline-block" href="javascript:void(0)"><i
                                                            class="icon icon-forward icon-fw mr-2"></i>Pay</a>
                                                </div>
                                                <!-- /grid item -->

                                            </div>
                                            <!-- /grid -->

                                        </div>
                                        <!-- /widgets item -->

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Grid -->
                                            <div class="row no-gutters">

                                                <!-- Grid Item -->
                                                <div class="col-6 pr-2">

                                                    <!-- Avatar Wrapper -->
                                                    <div class="dt-avatar-wrapper">
                                                        <!-- Avatar -->
                                                        <img class="dt-avatar size-30" src="assets/images/user-avatar/amay.jpg" alt="Dinesh Suthar">
                                                        <!-- /avatar -->

                                                        <!-- Info -->
                                                        <div class="dt-avatar-info dt-widget__title">
                                                            <span class="dt-avatar-name">Dinesh Suthar</span>
                                                        </div>
                                                        <!-- /info -->
                                                    </div>
                                                    <!-- /avatar wrapper -->
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-3 d-flex align-items-center justify-content-end">
                                                    <span class="mb-0 d-inline-block">17 days ago</span>
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-3 d-flex align-items-center justify-content-end">
                                                    <a class="d-inline-block" href="javascript:void(0)"><i
                                                            class="icon icon-forward icon-fw mr-2"></i>Pay</a>
                                                </div>
                                                <!-- /grid item -->

                                            </div>
                                            <!-- /grid -->

                                        </div>
                                        <!-- /widgets item -->

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Grid -->
                                            <div class="row no-gutters">

                                                <!-- Grid Item -->
                                                <div class="col-6 pr-2">

                                                    <!-- Avatar Wrapper -->
                                                    <div class="dt-avatar-wrapper">
                                                        <!-- Avatar -->
                                                        <img class="dt-avatar size-30" src="assets/images/user-avatar/garry-sobars.jpg"
                                                             alt="Pukhraj">
                                                        <!-- /avatar -->

                                                        <!-- Info -->
                                                        <div class="dt-avatar-info dt-widget__title">
                                                            <span class="dt-avatar-name">Pukhraj Prajapat</span>
                                                        </div>
                                                        <!-- /info -->
                                                    </div>
                                                    <!-- /avatar wrapper -->
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-3 d-flex align-items-center justify-content-end">
                                                    <span class="mb-0 d-inline-block">1 month ago</span>
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-3 d-flex align-items-center justify-content-end">
                                                    <a class="d-inline-block" href="javascript:void(0)"><i
                                                            class="icon icon-forward icon-fw mr-2"></i>Pay</a>
                                                </div>
                                                <!-- /grid item -->

                                            </div>
                                            <!-- /grid -->

                                        </div>
                                        <!-- /widgets item -->

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Grid -->
                                            <div class="row no-gutters">

                                                <!-- Grid Item -->
                                                <div class="col-6 pr-2">

                                                    <!-- Avatar Wrapper -->
                                                    <div class="dt-avatar-wrapper">
                                                        <!-- Avatar -->
                                                        <img class="dt-avatar size-30" src="assets/images/user-avatar/domnic-harris.jpg"
                                                             alt="crish Harris">
                                                        <!-- /avatar -->

                                                        <!-- Info -->
                                                        <div class="dt-avatar-info dt-widget__title">
                                                            <span class="dt-avatar-name">Chris Harris</span>
                                                        </div>
                                                        <!-- /info -->
                                                    </div>
                                                    <!-- /avatar wrapper -->
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-3 d-flex align-items-center justify-content-end">
                                                    <span class="mb-0 d-inline-block">1 month ago</span>
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-3 d-flex align-items-center justify-content-end">
                                                    <a class="d-inline-block" href="javascript:void(0)"><i
                                                            class="icon icon-forward icon-fw mr-2"></i>Pay</a>
                                                </div>
                                                <!-- /grid item -->

                                            </div>
                                            <!-- /grid -->

                                        </div>
                                        <!-- /widgets item -->

                                    </div>
                                    <!-- /widget -->

                                </div>
                                <!-- /campaigns widget -->

                            </div>
                            <!-- /card body -->

                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-3 col-md-6">

                        <!-- Card -->
                        <div class="dt-card dt-card__full-height bg-dark-primary text-white">

                            <!-- Card Body -->
                            <div class="dt-card__body text-center">

                                <!-- Icon -->
                                <i class="icon icon-refer icon-6x mb-5"></i>
                                <!-- /icon -->

                                <h3 class="text-white">Refer and Get Reward</h3>

                                <p class="card-text">Reffer us to your friends and earn bonus when they join.</p>
                                <a class="btn btn-secondary text-white" href="javascript:void(0)">Invite Friends</a>

                            </div>
                            <!-- /card body -->

                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-4 col-md-6">

                        <!-- Card -->
                        <div class="dt-card dt-card__full-height">

                            <!-- Card Header -->
                            <div class="dt-card__header mb-4">

                                <!-- Card Heading -->
                                <div class="dt-card__heading">
                                    <h3 class="dt-card__title">Currency Calculator</h3>
                                </div>
                                <!-- /card heading -->

                            </div>
                            <!-- /card header -->

                            <!-- Card Body -->
                            <div class="dt-card__body">

                                <span class="d-block mb-2">1.87 BTC equals</span>
                                <h2 class="mb-2 display-4 font-weight-medium text-primary">11466.78 USD</h2>
                                <span class="d-block mb-6 f-12">@ 1 BTC = 6718.72 USD</span>

                                <!-- Form -->
                                <form>
                                    <div class="form-row mb-4">
                                        <div class="col-sm-4 col-6">
                                            <label for="currency-type-1">From</label>
                                            <select class="custom-select custom-select-sm" id="currency-type-1">
                                                <option selected>BTC</option>
                                                <option value="1">RPL</option>
                                                <option value="2">LTE</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <label for="currency-type">From</label>
                                            <select class="custom-select custom-select-sm" id="currency-type">
                                                <option selected>USD</option>
                                                <option value="1">Yen</option>
                                                <option value="2">Dinar</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 col-12 mt-5 mt-sm-0">
                                            <label for="amount">Amount(BTC)</label>
                                            <input type="text" class="form-control form-control-sm" id="amount" placeholder="Amount">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Transfer Now</button>
                                </form>
                                <!-- /form -->

                            </div>
                            <!-- /card body -->

                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /grid item -->

                </div>
                <!-- /grid -->

                <!-- Grid -->
                <div class="row">

                    <!-- Grid Item -->
                    <div class="col-xl-4 order-xl-2">

                        <!-- Grid -->
                        <div class="row">
                            <!-- Grid Item -->
                            <div class="col-xl-12">

                                <!-- Card -->
                                <div class="dt-card dt-card__full-height bg-image">

                                    <!-- Card Body -->
                                    <div class="dt-card__body bg-gradient-dark-purple">

                                        <!-- Grid -->
                                        <div class="row">

                                            <!-- Grid Item -->
                                            <div class="col-xl-8">
                                                <p class="mb-2">Download Mobile Apps</p>
                                                <p class="mb-xl-0 display-5 font-weight-medium">Now, your account is on your fingers</p>
                                            </div>
                                            <!-- /grid item -->

                                            <!-- Grid Item -->
                                            <div class="col-xl-4">
                                                <a href="javascript:void(0)" class="d-inline-block mb-2">
                                                    <img src="assets/images/dashboard/google-play-store.png" alt="Play Store" class="img-fluid">
                                                </a> <a href="javascript:void(0)" class="d-inline-block">
                                                    <img src="assets/images/dashboard/apple-app-store.png" alt="App Store" class="img-fluid"> </a>
                                            </div>
                                            <!-- /grid item -->

                                        </div>
                                        <!-- /grid -->
                                    </div>
                                    <!-- /card body -->

                                </div>
                                <!-- /card -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-xl-12">

                                <!-- Card -->
                                <div class="dt-card">

                                    <!-- Card Header -->
                                    <div class="dt-card__header">

                                        <!-- Card Heading -->
                                        <div class="dt-card__heading">
                                            <h3 class="dt-card__title">Order History</h3>
                                        </div>
                                        <!-- /card heading -->

                                        <!-- Card Tools -->
                                        <div class="dt-card__tools">
                                            <a href="javascript:void(0)" class="dt-card__more">Detailed History</a>
                                        </div>
                                        <!-- /card tools -->

                                    </div>
                                    <!-- /card header -->

                                    <!-- Card Body -->
                                    <div class="dt-card__body pb-5">

                                        <!-- Tables -->
                                        <div class="table-responsive ps-custom-scrollbar">
                                            <table class="table table-ordered table-bordered-0 mb-0">
                                                <thead>
                                                <tr>
                                                    <th class="text-uppercase">Currency</th>
                                                    <th class="text-uppercase text-right" scope="col">Rate (USD)</th>
                                                    <th class="text-uppercase text-center" scope="col">Date</th>
                                                    <th class="text-uppercase text-right" scope="col">Fee</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>0.24 BTC</td>
                                                    <td class="text-right text-nowrap">1 BTC = $740</td>
                                                    <td class="text-center">08.10.17</td>
                                                    <td class="text-right text-danger">-$2.33</td>
                                                </tr>
                                                <tr>
                                                    <td>0.32 RPL</td>
                                                    <td class="text-right text-nowrap">1 RPL = $80.2</td>
                                                    <td class="text-center">08.03.17</td>
                                                    <td class="text-right text-danger">-$1.23</td>
                                                </tr>
                                                <tr>
                                                    <td>0.24 BTC</td>
                                                    <td class="text-right text-nowrap">1 BTC = $740</td>
                                                    <td class="text-center">07.29.17</td>
                                                    <td class="text-right text-danger">-$3.22</td>
                                                </tr>
                                                <tr>
                                                    <td>0.22 BTC</td>
                                                    <td class="text-right text-nowrap">1 BTC = $740</td>
                                                    <td class="text-center">07.28.17</td>
                                                    <td class="text-right text-danger">-$3.22</td>
                                                </tr>
                                                <tr>
                                                    <td>0.74 LTE</td>
                                                    <td class="text-right text-nowrap">1 LTE = $99.9</td>
                                                    <td class="text-center">05.22.17</td>
                                                    <td class="text-right text-danger">-$2.21</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /tables -->

                                    </div>
                                    <!-- /card body -->

                                </div>
                                <!-- /card -->

                            </div>
                            <!-- /grid item -->
                        </div>
                        <!-- /grid -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid Item -->
                    <div class="col-xl-8 order-xl-1">

                        <!-- Card -->
                        <div class="dt-card dt-card__full-height">

                            <!-- Card Header -->
                            <div class="dt-card__header">

                                <!-- Card Heading -->
                                <div class="dt-card__heading order-sm-1 flex-initial">
                                    <h3 class="dt-card__title">Crypto News</h3>
                                </div>
                                <!-- /card heading -->

                                <!-- Card Tools -->
                                <div class="dt-card__tools order-sm-3">
                                    <a href="javascript:void(0)" class="dt-card__more">
                                        <i class="icon icon-search-new icon-xl"></i>
                                    </a>
                                </div>
                                <!-- /card tools -->

                                <!-- Menu -->
                                <ul class="nav nav-pills nav-pills-sm order-sm-2">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0)">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Bitcoin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Ripple</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Litecoin</a>
                                    </li>
                                </ul>
                                <!-- /menu -->

                            </div>
                            <!-- /card header -->

                            <!-- Card Body -->
                            <div class="dt-card__body">

                                <!-- Media List -->
                                <div class="media-list">
                                    <!-- Media -->
                                    <div class="media media-news">

                                        <!-- Image -->
                                        <img class="img-fluid rounded-xl" src="assets/images/dashboard/bitcoin-cryptocurrency-trader.jpg"
                                             alt="Crypto Currency">
                                        <!-- /image -->

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <h4 class="mb-2">10 things you must know before trading in cryptocurrency</h4>
                                            <p>
                                                Cras tincidunt sit amet massa at accumsan. Mauris tincidunt tincidunt est, et pulvinar
                                                felis pharetra in vestibulum sed.
                                            </p>
                                            <div class="d-flex flex-wrap">
                                                <p class="mb-0 text-light-gray flex-1 text-truncate">
                                                    <i class="icon icon-tag-new icon-lg mr-2 align-top"></i>
                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                </p>
                                                <a class="d-inline-block ml-auto" href="javascript:void(0)"><span>Ready Full Story</span><i
                                                        class="icon icon-long-arrow-right icon-lg ml-2"></i></a>
                                            </div>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->
                                    <!-- Media -->
                                    <div class="media media-news">

                                        <!-- Image -->
                                        <img class="img-fluid rounded-xl" src="assets/images/dashboard/bitcoin-in-the-mousetrap.jpg"
                                             alt="Crypto Currency">
                                        <!-- /image -->

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <h4 class="mb-2">Getting started with cryptocurrency - what is blockchain</h4>
                                            <p>
                                                Cras tincidunt sit amet massa at accumsan. Mauris tincidunt tincidunt est, et pulvinar
                                                felis pharetra in vestibulum sed.
                                            </p>
                                            <div class="d-flex flex-wrap">
                                                <p class="mb-0 text-light-gray flex-1 text-truncate">
                                                    <i class="icon icon-tag-new icon-lg mr-2 align-top"></i>
                                                    Blockchain, tutorial, Cryptocurrency
                                                </p>
                                                <a class="d-inline-block ml-auto" href="javascript:void(0)"><span>Ready Full Story</span><i
                                                        class="icon icon-long-arrow-right icon-lg ml-2"></i></a>
                                            </div>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->
                                    <!-- Media -->
                                    <div class="media media-news">

                                        <!-- Image -->
                                        <img class="img-fluid rounded-xl" src="assets/images/dashboard/concept-of-blockchain.jpg"
                                             alt="Block Chain">
                                        <!-- /image -->

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <h4 class="mb-2">Is cryptocurrency investment a trap or opportunity?</h4>
                                            <p>
                                                Cras tincidunt sit amet massa at accumsan. Mauris tincidunt tincidunt est, et pulvinar
                                                felis pharetra in vestibulum sed.
                                            </p>
                                            <div class="d-flex flex-wrap">
                                                <p class="mb-0 text-light-gray flex-1 text-truncate">
                                                    <i class="icon icon-tag-new icon-lg mr-2 align-top"></i>
                                                    Blockchain, tips, Cryptocurrency
                                                </p>
                                                <a class="d-inline-block ml-auto" href="javascript:void(0)"><span>Ready Full Story</span><i
                                                        class="icon icon-long-arrow-right icon-lg ml-2"></i></a>
                                            </div>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->
                                </div>
                                <!-- /media list -->

                            </div>
                            <!-- /card body -->

                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /grid item -->

                </div>
                <!-- /grid -->

            </div>
            <!-- /site content -->

            <!-- Footer -->
            <footer class="dt-footer">
                Copyright Company Name © 2019
            </footer>
            <!-- /footer -->

        </div>
        <!-- /site content wrapper -->

        <!-- Theme Chooser -->
        <div class="dt-customizer-toggle">
            <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-spin icon-setting"></i> </a>
        </div>
        <!-- /theme chooser -->

        <!-- Customizer Sidebar -->
        <aside class="dt-customizer dt-drawer position-right">
            <div class="dt-customizer__inner">

                <!-- Customizer Header -->
                <div class="dt-customizer__header">

                    <!-- Customizer Title -->
                    <div class="dt-customizer__title">
                        <h3 class="mb-0">Theme Settings</h3>
                    </div>
                    <!-- /customizer title -->

                    <!-- Close Button -->
                    <button type="button" class="close" data-toggle="customizer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- /close button -->

                </div>
                <!-- /customizer header -->

                <!-- Customizer Body -->
                <div class="dt-customizer__body ps-custom-scrollbar">
                    <!-- Customizer Body Inner  -->
                    <div class="dt-customizer__body-inner">

                        <!-- Section -->
                        <section id="theme-chooser">
                            <h6 class="text-uppercase">Theme</h6>

                            <!-- Button Group -->
                            <div class="dt-customizer__btn-group btn-group btn-group-toggle btn-group mb-1" data-toggle="buttons">
                                <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options" id="theme-option-lite" value="lite">Lite</label>
                                <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options" id="theme-option-semidark" value="semidark">Semi Dark</label>
                                <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options" id="theme-option-dark" value="dark">Dark</label>
                            </div>
                            <!-- /button group -->

                        </section>
                        <!-- /section -->

                        <!-- Section -->
                        <section id="theme-style-chooser">
                            <h6 class="text-uppercase">Colors</h6>

                            <!-- List -->
                            <ul class="dt-list dt-list-sm dt-color-options">
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-1"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-2"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-3"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-4"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-5"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-6"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-7"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-8"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-9"></span>
                                </li>
                                <li class="dt-list__item">
                                    <span class="dt-color-option" data-style="style-10"></span>
                                </li>
                            </ul>
                            <!-- /list -->

                        </section>
                        <!-- /section -->

                        <!-- Section -->
                        <section>
                            <h6 class="text-uppercase">Nav Style</h6>

                            <!-- List -->
                            <ul class="dt-list">
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/default" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/fixed.png" alt="Fixed Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/mini-sidebar" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/mini-sidebar.png" alt="Mini Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/drawer" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/drawer-nav.png" alt="Drawer Nav Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/back-office-mini" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/no-header-mini-sidebar.png" alt="No Header Mini Sidebar Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/back-office" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/vertical-no-header.png" alt="Vertical No Header Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/horizontal" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/horizontal-default.png"
                                                 alt="Horizontal Default Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/horizontal-dark" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/horizontal-dark.png" alt="Horizontal Dark Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/horizontal-inside-nav" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/horizontal-inside-nav.png" alt="Horizontal Inside Nav Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/horizontal-bottom-nav" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/horizontal-bottom-nav.png" alt="Horizontal Bottom Nav Layout">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="https://wieldy-html.g-axon.work/horizontal-top-nav" target="_blank" class="choose-option__icon">
                                            <img src="assets/images/layouts/horizontal-top-nav.png" alt="Horizontal Top Nav Layout">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <!-- /list -->

                        </section>
                        <!-- /section -->

                        <!-- Section -->
                        <section  id="layout-chooser">
                            <h6 class="text-uppercase">Layout</h6>

                            <!-- List -->
                            <ul class="dt-list dt-list-sm">
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="javascript:void(0)" class="choose-option__icon" data-layout="framed">
                                            <img src="assets/images/layouts/framed.png" alt="Framed">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="javascript:void(0)" class="choose-option__icon" data-layout="full-width">
                                            <img src="assets/images/layouts/full-width.png" alt="Full Width">
                                        </a>
                                    </div>
                                </li>
                                <li class="dt-list__item">
                                    <div class="choose-option">
                                        <a href="javascript:void(0)" class="choose-option__icon" data-layout="boxed">
                                            <img src="assets/images/layouts/boxed.png" alt="Boxed">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <!-- /list -->

                        </section>
                        <!-- /section -->

                    </div>
                    <!-- /customizer body inner -->
                </div>
                <!-- /customizer body -->

            </div>
        </aside>
        <!-- /customizer sidebar -->

    </main>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/node_modules/moment/moment.js')}}"></script>
<script src="{{asset('backend/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="{{asset('backend/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="{{asset('backend/node_modules/masonry-layout/dist/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('backend/node_modules/sweetalert2/dist/sweetalert2.js')}}"></script>

<script src="{{asset('backend/node_modules/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('backend/assets/js/script.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/charts/dashboard-crypto.js')}}"></script>
</body>

<!-- Mirrored from wieldy-html.g-axon.work/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 08:14:49 GMT -->
</html>
