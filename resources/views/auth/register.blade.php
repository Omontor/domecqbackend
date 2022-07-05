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
            <a href="javascript:;" class="icon goBack">
                <i class="icon ion-ios-arrow-back"></i>
            </a>
        </div>
        <div class="pageTitle">Register</div>
        <div class="right">
            <a href="/login" class="link">Login</a>
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
    <div id="appCapsule" class="pb-2">

        <div class="appContent pb-0">

            <img src="/template/assets/img/sample/draw-2.png" alt="img" class="img-fluid mt-3 mb-3">

            <div class="sectionTitle text-center">
                <div class="title">
                    <h1>Join Us Now!</h1>
                </div>
                <div class="lead mb-3">Sign up to join</div>
            </div>

 <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

        </div>


    </div>
    <!-- appCapsule -->


    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Bootstrap-->
    <script src="/template/assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Splide -->
    <script src="/template/assets/js/plugins/splide/splide.min.js"></script>
    <!-- Main Js File -->
    <script src="/template/assets/js/app.js"></script>


</body>

</html>

