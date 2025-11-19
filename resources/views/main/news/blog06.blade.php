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
                    <li class="breadcrumb-item active">@lang('web.blog06_date')</li>
                </ol>
            </div>
            <!-- Blog Post 1 - 2 Noiembrie 2021 -->
            <!-- Blog -->
            <div id="blog" class="single-post">
                <!-- Post single item-->
                <div class="post-item">
                    <div class="post-item-wrap">

                        <div><a href="#!"><img class="card-img-top"
                                    src="assets/images/blog/foto munca remote din strainatate.png" alt="..."
                                    width="100%" /></a></div></br>

                        <div class="post-item-description">
                            <h2>@lang('web.blog06_title')</h2>
                            <div class="post-meta">
                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog06_date')</span>&nbsp;
                                <span class="post-meta-category"><a href=""><i
                                            class="fa fa-tag">&nbsp</i>@lang('web.blog06_category')</a></span>
                                <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                            class="fa fa-thumbs-o-up"></i>&nbsp;<i class="fa fa-facebook"></i></a></span>

                            </div>

                            @includeFirst(
                                [
                                    'main.news.partials.blog06_' . app()->getLocale(),
                                    'main.news.partials.blog06_ro',
                                ]
                            )

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- /.container -->

        <!-- end: Content -->

    </section>

@endsection
<!--</body>-->