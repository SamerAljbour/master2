<!doctype html>
<html class="no-js" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Xmee | Login and Register Form Html Templates</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/img-login/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/css-login/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/css-login/fontawesome-all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/font-login/flaticon.css') }}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('style-login.css') }}">
</head>

<body>
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>



    <section class="fxt-template-animation fxt-template-layout6" data-bg-image="{{ asset('img/img-login/figure/11.png') }}">
        <div class="fxt-header">
            <a href="{{ url('login') }}" class="fxt-logo"><img src="{{ asset('img/img-login/logo-6.png') }}" alt="Logo"></a>
        </div>
        <div class="fxt-content">
            <div class="fxt-form">
                <h2>Log in to continue..</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-4">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-5">
                            <div class="fxt-content-between">
                                <button type="submit" class="fxt-btn-fill">Log in</button>

                                {{-- <a href="{{ route('password.request') }}" class="switcher-text">Forgot Password</a> --}}
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="fxt-footer">
                <ul class="fxt-socials">
                    <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-7">
                        <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="fxt-google fxt-transformY-50 fxt-transition-delay-8">
                        <a href="#" title="google"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-9">
                        <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
                <div class="fxt-transformY-50 fxt-transition-delay-10">
                    <p>Don't have an account?<a href="{{ route('register') }}" class="switcher-text2 inline-text">Register</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="{{ asset('js/js-login/jquery.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/js-login/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('js/js-login/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ asset('js/js-login/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('js/js-login/main.js') }}"></script>

</body>

</html>
