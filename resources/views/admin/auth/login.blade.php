<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />


    <title>Düzce Üniversitesi | Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    <link class="js-stylesheet" href="{{asset('admin-asset/css/app.css')}}" rel="stylesheet">
    <style>
        body {
            opacity: 0;
        }
    </style>

</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Düzce Üniversitesi Yönetim Paneli</h1>
                            <p class="lead">
                                Hesabınızla giriş yaparak yönetim paneline erişebilirsiniz.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">

                                    @if($errors->has('credential'))
                                    <div class="alert alert-danger p-2" role="alert">
                                        {{$errors->first('credential')}}
                                    </div>
                                    @endif

                                    <form action="{{route('admin-login-submit')}}" method="POST">
                                        @csrf
                                        <div class="mb-3">

                                            <label class="form-label">E Posta</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="E posta adresinizi giriniz" />
                                            @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Şifre</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Şifrenizi giriniz" />
                                            @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                            @endif

                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Giriş Yap</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{asset('admin-asset/js/settings.js')}}"></script>

</body>

</html>