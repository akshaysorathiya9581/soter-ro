@extends('main.layouts.master')

@section('body')

    <!-- SECTION -->
    <section>

        <!-- Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->

            <div class="row left">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">@lang('web.news_breadcrumb_home')</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="{{ route('actualitate') }}">@lang('web.news_breadcrumb_news')</a></li>
                    <li class="breadcrumb-item active">@lang('web.blog09_date')</li>
                </ol>
            </div>
            <!-- Blog -->
            <div id="blog" class="single-post">
                <!-- Post single item-->
                <div class="post-item">
                    <div class="post-item-wrap">

                        <div><a href="#!"><img class="card-img-top" src="assets/images/blog/header_webinar_final.png"
                                    alt="..." width="100%" /></a></div></br>
                        <div class="post-video">
                            <iframe src="https://player.vimeo.com/video/688751061?h=e3d842e235" width="640" height="360"
                                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div class="post-item-description">
                            <h3 style="text-align:justify">@lang('web.blog09_title')</h3>
                            <div class="post-meta">
                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog09_date')</span>&nbsp;
                                <span class="post-meta-category"><a href=""><i
                                            class="fa fa-tag">&nbsp</i>@lang('web.blog09_category')</a></span>
                                <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                            class="fa fa-thumbs-o-up"></i>&nbsp;<i class="fa fa-facebook"></i></a></span>

                            </div>

                            @includeFirst(
                                [
                                    'main.news.partials.blog09_' . app()->getLocale(),
                                    'main.news.partials.blog09_ro',
                                ]
                            )

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection
<!--</body>-->

