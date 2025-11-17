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

    <!--    <link rel="shortcut icon" href="{{ URL::asset('assets/Site/Presentation/img/logotransparentmod.ico') }}">-->
    <title>Soter & Partners</title>

    <meta Content-Type: text/javascript; charset=utf-8>
    <metaCache-Control: max-age=31536000, immutable>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href="{{ URL::asset('assets/Site/Presentation/img/logotransparentmod.ico') }}">
        <title>Soter & Partners</title>

        <link href="{{URL::asset('assets/Site/Presentation/vendor/bootstrap/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/vendor/fontawesome/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/vendor/animateit/animate.min.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/vendor/owlcarousel/owl.carousel.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/vendor/magnific-popup/magnific-popup.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/theme-base.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/rs-plugin-styles.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/css/settings.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/css/layers.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/css/navigation.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/theme-elements.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/responsive.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/custom.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/fonts.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/button-smart.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/color-variations/blue.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/easy-notify.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/Site/Presentation/css/base.css')}}" rel="stylesheet">

        {{-- @include('main.scripts') --}}

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
                <li class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners" target="_blank"><i class="fa fa-thumbs-o-up"></i>&nbsp;<i class="fa fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
    <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a> 
    
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/jquery/jquery-1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site//Presentation/vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/plugins-compressed.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
   <script type="text/javascript" src="{{URL::asset('assets/Site/Presentation/vendor/easy-notify.min.js')}}"></script>


    {{-- end of scripts --}}
    <script type="text/javascript" src="{{URL::asset('assets/Site/Scripts/Presentation/js/theme-functions.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Site/Scripts/Presentation/js/custom.js')}}"></script>

</body>


</html>
