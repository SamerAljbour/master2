<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    
   <x-navigation />

<div class="container">
    @if($packageType)
        <h1>{{ $packageType->name }}</h1>
        <p>الأبعاد: {{ $packageType->dimensions }}</p>
        <p>السعر: {{ $packageType->price }}$</p>
        <p>{{ $packageType->description }}</p>
    @else
        <h1>لا توجد بيانات لعرضها</h1>
    @endif
</div>

   <x-footer />

   <!-- JS here -->
   <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
   <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
   <script src="{{ asset('js/popper.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
   <script src="{{ asset('js/ajax-form.js') }}"></script>
   <script src="{{ asset('js/waypoints.min.js') }}"></script>
   <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
   <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
   <script src="{{ asset('js/scrollIt.js') }}"></script>
   <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
   <script src="{{ asset('js/wow.min.js') }}"></script>
   <script src="{{ asset('js/nice-select.min.js') }}"></script>
   <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
   <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/slick.min.js') }}"></script>

   <!-- contact js -->
   <script src="{{ asset('js/contact.js') }}"></script>
   <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
   <script src="{{ asset('js/jquery.form.js') }}"></script>
   <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
   <script src="{{ asset('js/mail-script.js') }}"></script>

   <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
