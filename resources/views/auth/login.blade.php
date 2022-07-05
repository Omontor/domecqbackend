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
        <div class="pageTitle">Login</div>
        <div class="right">
            <a href="/register" class="link">Registrarse</a>
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


            <div class="sectionTitle text-center mt-3">
                <div class="title">
                    <h1>Bienvenido</h1>
                </div>
                <div class="lead mb-2">Inicia Sesión Para Continuar</div>
            </div>

<form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" name="email" value="{{ old('email', null) }}">

                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ trans('global.login_password') }}">

                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

<hr>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">{{ trans('global.remember_me') }}</label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <!-- /.col -->
                                    <div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Sign in
                    </button>
                </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="divider mt-3 mb-3"></div>

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