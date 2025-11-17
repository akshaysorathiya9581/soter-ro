<!DOCTYPE html>
<html lang="en">


<head>


<!-- Google tag (gtag.js) --> 

<script async src="https://www.googletagmanager.com/gtag/js?id=G-TXGS7SYYVK"></script> 
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-TXGS7SYYVK'); </script>

    <!--    <link rel="shortcut icon" href="{{asset('assets/Site/Presentation/img/logotransparentmod.ico')}}">-->
    <title>Soter & Partners</title>

    <meta Content-Type: text/javascript; charset=utf-8>
    <metaCache-Control: max-age=31536000, immutable>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="{{asset('assets/Site/Presentation/img/logotransparentmod.ico')}}">
    <title>Soter & Partners</title>

    @include('main.style') @include('main.scripts')


    <!--snow-->
  <!--  <script type="text/javascript" src="{{asset('assets/js/snowstorm-min.js')}}"></script>-->
  <!--   <script type="text/javascript">-->
   <!--      snowStorm.snowColor = '#99ccff';-->
   <!--      snowStorm.flakesMaxActive = 150;-->
    <!--     snowStorm.useTwinkleEffect = true;-->
    <!--     snowStorm.snowCharacter = 'Soter';-->
    <!--    snowStorm.snowStick = true; -->

  <!--   </script>-->

    <!--end snow-->

</head>

<body class='wide'>
    <!-- WRAPPER -->
    <div class="wrapper">



        @include('main.menu')


        @yield('body') 
        
        @include('main.footer')
    </div>

    <div class="fixlike-button buttonHolder">

        <div class="social-icons social-icons-medium social-icons-colored col-md-8">

           <ul> <li class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners" target="_blank"><i class="fa fa-thumbs-o-up"></i>&nbsp;<i class="fa fa-facebook"></i></a></li></ul>

        </div>
        
    </div>
   <!-- <div class="fix-25 ">


		<img src="{{asset('assets/Site/Presentation/img/30years.png')}}" height="70px" ></img>

        
    </div>-->



    


    <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a> @include('main.scripts_end')
</body>


</html>
