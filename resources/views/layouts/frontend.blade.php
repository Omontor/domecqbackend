<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitter Mobile Template</title>
    <link rel="stylesheet" href="/template/assets/css/style.css">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="description" content="Bitter Mobile Template">
    <meta name="keywords" content="bootstrap, mobile template, Bootstrap 5, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="/template/assets/img/icon/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/template/assets/img/icon/192x192.png">
</head>

<body>

    <!-- Page loading -->
    <div id="loading">
        <div class="spinner-grow"></div>
    </div>
    <!-- * Page loading -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#appSidebar" class="icon" data-bs-toggle="offcanvas">
                <i class="icon ion-ios-menu"></i>
            </a>
        </div>
        <div class="pageTitle">
            <img src="assets/img/logo.png" alt="Bitter" class="image">
        </div>
        <div class="right">
            <label for="searchInput" class="mb-0 icon toggleSearchbox">
                <i class="icon ion-ios-search"></i>
            </label>
        </div>
    </div>
    <!-- searchBox -->
    <div id="searchBox">
        <form>
            <span class="inputIcon">
                <i class="icon ion-ios-search"></i>
            </span>
            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
            <a href="javascript:;" class="toggleSearchbox closeButton">
                <i class="icon ion-ios-close-circle"></i>
            </a>
        </form>
    </div>
    <!-- * searchBox -->
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="appContent">
            @yield('content')
        </div>

</div>
<!-- app Footer -->
        <footer class="appFooter">
            <div class="heading">Copyright © Bitter. All Rights Reserved.</div>
            <p>
                Modern, simple and elegant design for mobile devices. Based on Bootstrap.
            </p>
            {{--
            <!-- facebook -->
            <a href="#" class="btn btn-facebook btn-icon me-1">
                <i class="icon ion-logo-facebook"></i>
            </a>
            <!-- twitter -->
            <a href="#" class="btn btn-twitter btn-icon me-1">
                <i class="icon ion-logo-twitter"></i>
            </a>
            <!-- instagram -->
            <a href="#" class="btn btn-instagram btn-icon me-1">
                <i class="icon ion-logo-instagram"></i>
            </a>
            <!-- linkedin -->
            <a href="#" class="btn btn-linkedin btn-icon me-1">
                <i class="icon ion-logo-linkedin"></i>
            </a>
            <!-- whatsapp -->
            <a href="#" class="btn btn-whatsapp btn-icon me-1">
                <i class="icon ion-logo-whatsapp"></i>
            </a>
            --}}
        </footer>
        <!-- * app Footer -->


    </div>
    <!-- * appCapsule -->




    @include('partials.nav')

    <!-- Sidebar Menu -->
    <div class="offcanvas offcanvas-start sidebarWrapper" tabindex="-1" id="appSidebar">
        <div class="offcanvas-body">
            <nav class="sidebar">
                <div class="profilebox">
                    <img src="assets/img/sample/avatar.jpg" alt="avatar" class="avatar">
                    <h2 class="title">Jane Antunes</h2>
                    <h5 class="lead">
                        <i class="icon ion-ios-pin me-1"></i>
                        Chicago
                    </h5>
                    <div class="sidebutton">
                        <a href="#">
                            <i class="icon ion-ios-settings"></i>
                        </a>
                    </div>
                </div>
                <div class="sidebarGroup">
                    <ul class="sidebarMenu">
                        <li>
                            <a href="social-home.html">
                                <i class="icon ion-ios-people"></i>
                                Social
                            </a>
                        </li>
                        <li>
                            <a href="social-chat.html">
                                <i class="icon ion-ios-chatboxes"></i>
                                Chat
                            </a>
                        </li>
                        <li>
                            <a href="pages.html">
                                <i class="icon ion-ios-apps"></i>
                                Pages
                            </a>
                        </li>
                        <li>
                            <a href="components.html">
                                <i class="icon ion-ios-analytics"></i>
                                Components
                            </a>
                        </li>
                        <li>
                            <a href="blog-home.html">
                                <i class="icon ion-ios-book"></i>
                                Magazine - Blog
                            </a>
                        </li>
                        <li>
                            <a href="page-login.html">
                                <i class="icon ion-ios-lock"></i>
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebarGroup">
                    <ul class="sidebarMenu">
                        <li class="title">Online</li>
                        <li>
                            <a href="#">
                                <img src="assets/img/sample/avatar2.jpg" alt="avatar" class="avatar">
                                Guiying K.
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/sample/avatar3.jpg" alt="avatar" class="avatar">
                                Kita Chihoko
                                <span class="badge badge-primary">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/sample/avatar4.jpg" alt="avatar" class="avatar">
                                Leonetta Lloyd
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/sample/avatar5.jpg" alt="avatar" class="avatar">
                                Lizzie Rose
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/sample/avatar6.jpg" alt="avatar" class="avatar">
                                Kari Granleese
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
    <!-- * Sidebar Menu -->


    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Bootstrap-->
    <script src="/template/assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Splide -->
    <script src="/template/assets/js/plugins/splide/splide.min.js"></script>
    <!-- Main Js File -->
    <script src="/template/assets/js/app.js"></script>


</body>

</html>

