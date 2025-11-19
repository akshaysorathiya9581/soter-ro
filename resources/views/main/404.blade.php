<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Not Found</title>

    {!! HTML::style('assets/css/bootstrap.min.css') !!}

    <style>
        body {
            padding-top: 100px;
        }

        h1 {
            font-size: 62px;
        }

        @media (max-width: 768px) {
            body {
                padding-top: 50px;
            }

            h1 {
                font-size: 50px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-push-3">
                <div class="text-center">
                    <a href="@lang('route.acasa')"><img
                            src="{{ url('assets/images/logo.png') }}" alt="ContasWeb"
                            class="logo"></a>
                    <h1>@lang('web.404_title')</h1>
                    <br />
                    <p>
                        @lang('web.404_message_en')</br>
                        @lang('web.404_message_en2')
                    </p>
                    <p>
                        @lang('web.404_message_ro')</br>
                        @lang('web.404_message_ro2')
                    </p>

                    @if (Auth::check())
                        <p><strong>@lang('web.404_or_button')</strong></p>
                        <p><strong>@lang('web.404_sau_button')</strong></p>
                        <a href="{{  route('dashboard') }}" class="btn btn-large btn-info">
                            <i class="glyphicon glyphicon-home"></i> @lang('web.404_go_dashboard')
                        </a>
                    @else

                        <p><strong>@lang('web.404_or_button')</strong></p>
                        <p><strong>@lang('web.404_sau_button')</strong></p>
                        <a href="/workshops" class="btn btn-large btn-info">
                            <i class="glyphicon glyphicon-home"></i> @lang('app.403_mesaj_buton_home')
                        </a>
                    @endif
                </div>
            </div>
        </div>

    </div>

</body>

</html>