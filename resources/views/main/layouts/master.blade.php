<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TXGS7SYYVK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-TXGS7SYYVK');
    </script>

    <title>Soter & Partners</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Cache control -->
    <meta http-equiv="Cache-Control" content="max-age=31536000, immutable">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}">
    <!-- All CSS -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/animate.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/owl.carousel.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/magnific-popup.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/theme-base.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/rs-plugin-styles.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/rs-plugin/css/settings.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/rs-plugin/css/layers.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/rs-plugin/css/navigation.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/theme-elements.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/responsive.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/custom.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/fonts.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/button-smart.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/color-variations/blue.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/easy-notify.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('assets/css/base.css')}}" type="text/css" rel="stylesheet">
    <!-- JS -->
    <script type="text/javascript" src="{{URL::asset('assets/js/jquery-1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/vendor/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/vendor/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/vendor/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/vendor/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins-compressed.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/easy-notify.min.js')}}"></script>

</head>

<body class='wide'>
    <!-- WRAPPER -->
    <div class="wrapper">
        @include('main.layouts.header')

        @yield('body')

        @include('main.layouts.footer')
    </div>

    <div class="fixlike-button buttonHolder">
        <div class="social-icons social-icons-medium social-icons-colored col-md-8">
            <ul>
                <li class="social-facebook">
                    <a href="https://www.facebook.com/SOTER.Partners" target="_blank">
                        <i class="fa fa-thumbs-o-up"></i>&nbsp;<i class="fa fa-facebook"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

    <script type="text/javascript" src="{{URL::asset('assets/js/theme-functions.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>

</body>


</html>