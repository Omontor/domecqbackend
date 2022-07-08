<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @yield('title')
    </title>
    @yield('styles')
    <link rel="stylesheet" href="/template/assets/css/style.css">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="description" content="Bitter Mobile Template">
    <meta name="keywords" content="bootstrap, mobile template, Bootstrap 5, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="/template/assets/img/icon/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/template/assets/img/icon/192x192.png">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
 <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
  @yield('styles')
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
           {{env('APP_NAME')}}
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

            @if(session()->has('message'))
            <br>
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
 @endif
            @yield('content')
        </div>

</div>
<!-- app Footer -->
        <footer class="appFooter">
            <div class="heading">Domecq App</div>
            <p>
                {{Carbon\Carbon::now()->format('F-Y')}}
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
    @include('partials.sidemenu')


<br>
    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Bootstrap-->
    <script src="/template/assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Splide -->
    <script src="/template/assets/js/plugins/splide/splide.min.js"></script>
    <!-- Main Js File -->
    <script src="/template/assets/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')
    @yield('scripts')

</body>

</html>


