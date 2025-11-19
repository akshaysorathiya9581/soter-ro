@extends('main.layouts.master')

@section('body')

    <!-- SECTION -->
    <section>

        <!-- Content -->

        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-9">

                    <!-- Page Heading/Breadcrumbs -->

                    <div class="row left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">@lang('web.news_breadcrumb_home')</a>
                            </li>
                            <li class="breadcrumb-item active">@lang('web.news_breadcrumb_news')</li>
                        </ol>
                    </div>

                    <!-- Blog Post 8 -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                            <!-- Featured blog post-->
                            <div class="card border-dark text-info" style="width:100%">
                                <div class="post-video">
                                    <iframe src="https://player.vimeo.com/video/688751061?h=e3d842e235" width="640"
                                        height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                </br>

                                <div class="card-body" style="background-color: #f3f6f4;;padding:5px">

                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog08_date')</span>&nbsp;
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag">&nbsp</i>@lang('web.blog08_category')</a></span>
                                        <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                                    class="fa fa-thumbs-o-up"></i>&nbsp;<i
                                                    class="fa fa-facebook"></i></a></span>
                                    </div>


                                    <div class="card-title">
                                        <h2 class="card-title" style="font-size:24px">@lang('web.blog08_title')</h2>
                                    </div>


                                    <p class="card-text" style="text-align:justify;font-size:14px;padding:4px">@lang('web.blog08_intro')</p>

                                    <a class="btn btn-primary" href="{{ route('blog08') }}">@lang('web.news_read_more') →</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 7 31 ianuarie 2022 -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                            <!-- Featured blog post-->
                            <div class="card border-dark text-info" style="width:100%">
                                <div><a href="#!"><img class="card-img-top"
                                            src="assets/images/blog/foto formarea profesionala continua.png"
                                            alt="..." width="100%" /></a></div></br>

                                <div class="card-body" style="background-color: #f3f6f4;;padding:5px">

                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog07_date')</span>&nbsp;
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag">&nbsp</i>@lang('web.blog07_category')</a></span>
                                        <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                                    class="fa fa-thumbs-o-up"></i>&nbsp;<i
                                                    class="fa fa-facebook"></i></a></span>
                                    </div>


                                    <div class="card-title">
                                        <h2 class="card-title" style="font-size:24px">@lang('web.blog07_title')</h2>
                                    </div>

                                    <p class="card-text" style="text-align:justify;font-size:14px;padding:4px">@lang('web.blog07_intro')</p>

                                    <a class="btn btn-primary" href="{{ route('blog07') }}">@lang('web.news_read_more') →</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 6 25 Ianuarie 2022 -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <!-- Featured blog post-->
                            <div class="card border-dark text-info" style="width:100%">
                                <div><a href="#!"><img class="card-img-top"
                                            src="assets/images/blog/foto munca remote din strainatate.png"
                                            alt="..." width="100%" /></a></div></br>

                                <div class="card-body" style="background-color: #f3f6f4;;padding:5px">
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog06_date')
                                        </span>&nbsp;
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag">&nbsp</i>@lang('web.blog06_category')</a></span>
                                        <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                                    class="fa fa-thumbs-o-up"></i>&nbsp;<i
                                                    class="fa fa-facebook"></i></a></span>
                                    </div>
                                    <div class="card-title">
                                        <h2 class="card-title" style="font-size:24px">@lang('web.blog06_title')</h2>
                                    </div>
                                    <p class="card-text" style="text-align:justify;font-size:14px;padding:4px">@lang('web.blog06_intro')</p>
                                    <a class="btn btn-primary" href="{{ route('blog06') }}">@lang('web.news_read_more') →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 5 14 Decembrie 2021 -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                            <!-- Featured blog post-->
                            <div class="card border-dark text-info" style="width:100%">
                                <div><a href="#!"><img class="card-img-top"
                                            src="assets/images/blog/foto retrospectiva anului fiscal 2021.png"
                                            alt="..." width="100%" /></a></div></br>

                                <div class="card-body" style="background-color: #f3f6f4;;padding:5px">
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog05_date')</span>&nbsp;
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag">&nbsp</i>@lang('web.blog05_category')</a></span>
                                        <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                                    class="fa fa-thumbs-o-up"></i>&nbsp;<i
                                                    class="fa fa-facebook"></i></a></span>
                                    </div>

                                    <div class="card-title">
                                        <h2 class="card-title" style="font-size:24px">@lang('web.blog05_title')</h2>
                                    </div>

                                    <p class="card-text" style="text-align:justify;font-size:14px;padding:4px">@lang('web.blog05_intro')</p>

                                    <a class="btn btn-primary" href="{{ route('blog05') }}">@lang('web.news_read_more') →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 4 6 Decembrie 2021 -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                            <!-- Featured blog post-->
                            <div class="card border-dark text-info" style="width:100%">
                                <div><a href="#!"><img class="card-img-top"
                                            src="assets/images/blog/foto programul de lucru inegal in pandemie 800.png"
                                            alt="..." width="100%" /></a></div></br>

                                <div class="card-body" style="background-color: #f3f6f4;;padding:5px">
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog04_date')</span>&nbsp;
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag">&nbsp</i>@lang('web.blog04_category')</a></span>
                                        <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                                    class="fa fa-thumbs-o-up"></i>&nbsp;<i
                                                    class="fa fa-facebook"></i></a></span>
                                    </div>
                                    <div class="card-title">
                                        <h2 class="card-title" style="font-size:24px">@lang('web.blog04_title')</h2>
                                    </div>
                                    <p class="card-text" style="text-align:justify;font-size:14px;padding:4px">@lang('web.blog04_intro')</p>
                                    <a class="btn btn-primary" href="{{ route('blog04') }}">@lang('web.news_read_more') →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 3 17 Noiembrie 2021 -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                            <!-- Featured blog post-->
                            <div class="card border-dark text-info" style="width:100%">
                                <div><a href="#!"><img class="card-img-top"
                                            src="assets/images/blog/foto implementare SAF-T in Romania 700.png"
                                            alt="..." width="100%" /></a></div></br>

                                <div class="card-body" style="background-color: #f3f6f4;;padding:5px">
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog03_date')</span>&nbsp;
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag">&nbsp</i>@lang('web.blog03_category')</a></span>
                                        <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                                    class="fa fa-thumbs-o-up"></i>&nbsp;<i
                                                    class="fa fa-facebook"></i></a></span>
                                    </div>
                                    <div class="card-title">
                                        <h2 class="card-title" style="font-size:24px">@lang('web.blog03_title')</h2>
                                    </div>
                                    <p class="card-text" style="text-align:justify;font-size:14px;padding:4px">@lang('web.blog03_intro')</p>

                                    <a class="btn btn-primary" href="{{ route('blog03') }}">@lang('web.news_read_more') →</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 2 2 Noiembrie 2021 -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <!-- Featured blog post-->
                            <div class="card border-dark text-info" style="width:100%">
                                <div><a href="#!"><img class="card-img-top"
                                            src="assets/images/blog/photo_integrarea_persoanelor_cu_dizabilitati_pe_piata_muncii _700.png"
                                            alt="..." width="100%" /></a></div></br>
                                <div class="card-body" style="background-color: #f3f6f4;;padding:5px">
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog02_date')</span>&nbsp;
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag">&nbsp</i>@lang('web.blog02_category')</a></span>
                                        <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                                    class="fa fa-thumbs-o-up"></i>&nbsp;<i
                                                    class="fa fa-facebook"></i></a></span>
                                    </div>
                                    <div class="card-title">
                                        <h2 class="card-title" style="font-size:24px">@lang('web.blog02_title')</h2>
                                    </div>
                                    <p class="card-text" style="text-align:justify;font-size:14px;padding:4px">@lang('web.blog02_intro')</p>
                                    <a class="btn btn-primary" href="{{ route('blog02') }}">@lang('web.news_read_more') →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 1 - 2 Noiembrie 2021 -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-129">

                            <!-- Featured blog post-->
                            <div class="card border-dark text-white " style="width:100%">
                                <div><a href="#!"><img class="card-img-top"
                                            src="assets/images/blog/foto_muncitori_infrastructura_750.png"
                                            alt="..." width="100%" /></a></div></br>
                                <div class="card-body" style="background-color: #f3f6f4;;padding:5px">
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog01_date')</span>&nbsp;
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag">&nbsp</i>@lang('web.blog01_category')</a></span>
                                        <span class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"><i
                                                    class="fa fa-thumbs-o-up"></i>&nbsp;<i
                                                    class="fa fa-facebook"></i></a></span>
                                    </div>

                                    <div class="card-title">
                                        <h2 class="card-title" style="font-size:24px">@lang('web.blog01_title')</h2>
                                    </div>
                                    <p class="card-text" style="text-align:justify;font-size:14px;padding:4px">@lang('web.blog01_intro')</p>
                                    <a class="btn btn-primary" href="{{ route('blog01') }}">@lang('web.news_read_more') →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr size="8" width="90%" color="black">
                    </div>

                    <div>
                        <hr>
                        </hr>
                    </div>

                    <div>
                        <hr>
                        </hr>
                    </div>

                    <div>
                        <hr>
                        </hr>
                    </div>
                    <!-- end:Load next portfolio items -->
                    <!-- Show more posts Button -->
                    <div id="showMore">
                        <a href="#" class="btn btn-roundeded btn-light"><i class="icon-refresh-cw"></i> @lang('web.news_load_more')</a>
                    </div>
                    <!-- end: Show more posts Button -->

                    <!-- Pagination 
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Vechi</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Noi &rarr;</a>
                </li>
            </ul> -->

                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="row left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('web.news_old') }}</a>
                            </li>
                        </ol>
                        <div class="col-sm-12 col-lg-12">
                            <!-- Blog Post 8 -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <!-- Featured blog post-->
                                    <div class="card border-dark text-info" style="width:100%">
                                        <!--<div><a href="blog05"><img class="card-img-top" src="assets/images/blog/header-webinar final.png" alt="..." width="100%" /></a></div></br>-->
                                        <div class="card-body" style="background-color: #f3f3f3;padding:5px">
                                            <div class="post-meta">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog08_date')</span>&nbsp;
                                                <span class="post-meta-category"><a href=""><i
                                                            class="fa fa-tag">&nbsp</i>@lang('web.blog08_category')</a></span>
                                            </div>
                                            <a href="{{ route('blog08') }}">
                                                <h4 style="text-align:justify;font-size:10px">@lang('web.blog08_title')</h4></br>
                                            </a>
                                            <!--    <p class="card-text" style="text-align:justify;font-size:10px">Pentru majoritatea companiilor anul contabil și fiscal se apropie de sfârșit,
                                        iar luna decembrie este un moment oportun de reflecție asupra tuturor activităților întreprinse în ultimele 12 luni din punct de vedere financiar,
                                        dar și asupra oportunităților viitoare de investiții și de optimizare a acțiunilor derulate pentru o mai bună performanță.
                                        </p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Post 7 -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">

                                    <!-- Featured blog post-->
                                    <div class="card border-dark text-info" style="width:100%">
                                        <!--<div><a href="blog05"><img class="card-img-top" src="assets/images/blog/foto retrospectiva anului fiscal 2021.png" alt="..." width="100%" /></a></div></br>-->
                                        <div class="card-body" style="background-color: #f3f3f3;padding:5px">
                                            <div class="post-meta">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog07_date')</span>&nbsp;
                                                <span class="post-meta-category"><a href=""><i
                                                            class="fa fa-tag">&nbsp</i>@lang('web.blog07_category')</a></span>
                                            </div>
                                            <a href="{{ route('blog07') }}">
                                                <h4 style="text-align:justify;font-size:10px">@lang('web.blog07_title')</h4></br>
                                            </a>
                                            <!--    <p class="card-text" style="text-align:justify;font-size:10px">Pentru majoritatea companiilor anul contabil și fiscal se apropie de sfârșit,
                                        iar luna decembrie este un moment oportun de reflecție asupra tuturor activităților întreprinse în ultimele 12 luni din punct de vedere financiar,
                                        dar și asupra oportunităților viitoare de investiții și de optimizare a acțiunilor derulate pentru o mai bună performanță.
                                        </p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Post 6 -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">

                                    <!-- Featured blog post-->
                                    <div class="card border-dark text-info" style="width:100%">
                                        <!--<div><a href="blog05"><img class="card-img-top" src="assets/images/blog/foto retrospectiva anului fiscal 2021.png" alt="..." width="100%" /></a></div></br>-->

                                        <div class="card-body" style="background-color: #f3f3f3;padding:5px">

                                            <div class="post-meta">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog06_date')</span>&nbsp;
                                                <span class="post-meta-category"><a href=""><i
                                                            class="fa fa-tag">&nbsp</i>@lang('web.blog06_category')</a></span>

                                            </div>


                                            <a href="{{ route('blog06') }}">
                                                <h4 style="text-align:justify;font-size:10px">@lang('web.blog06_title')</h4></br>
                                            </a>

                                            <!--    <p class="card-text" style="text-align:justify;font-size:10px">Pentru majoritatea companiilor anul contabil și fiscal se apropie de sfârșit,
                                        iar luna decembrie este un moment oportun de reflecție asupra tuturor activităților întreprinse în ultimele 12 luni din punct de vedere financiar,
                                        dar și asupra oportunităților viitoare de investiții și de optimizare a acțiunilor derulate pentru o mai bună performanță.
                                        </p>-->


                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Blog Post 5 -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">

                                    <!-- Featured blog post-->
                                    <div class="card border-dark text-info" style="width:100%">
                                        <!--<div><a href="blog05"><img class="card-img-top" src="assets/images/blog/foto retrospectiva anului fiscal 2021.png" alt="..." width="100%" /></a></div></br>-->

                                        <div class="card-body" style="background-color: #f3f3f3;padding:5px">

                                            <div class="post-meta">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog05_date')</span>&nbsp;
                                                <span class="post-meta-category"><a href=""><i
                                                            class="fa fa-tag">&nbsp</i>@lang('web.blog05_category')</a></span>

                                            </div>


                                            <a href="{{ route('blog05') }}">
                                                <h4 style="text-align:justify;font-size:10px">@lang('web.blog05_title')</h4></br>
                                            </a>

                                            <!--    <p class="card-text" style="text-align:justify;font-size:10px">Pentru majoritatea companiilor anul contabil și fiscal se apropie de sfârșit,
                                        iar luna decembrie este un moment oportun de reflecție asupra tuturor activităților întreprinse în ultimele 12 luni din punct de vedere financiar,
                                        dar și asupra oportunităților viitoare de investiții și de optimizare a acțiunilor derulate pentru o mai bună performanță.
                                        </p>-->


                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Blog Post 4 -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <!-- Featured blog post-->
                                    <div class="card border-dark text-info" style="width:100%">
                                        <!--<div><a href="blog05"><img class="card-img-top" src="assets/images/blog/foto retrospectiva anului fiscal 2021.png" alt="..." width="100%" /></a></div></br>-->
                                        <div class="card-body" style="background-color: #f3f3f3;padding:5px">
                                            <div class="post-meta">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog04_date')</span>&nbsp;
                                                <span class="post-meta-category"><a href=""><i
                                                            class="fa fa-tag">&nbsp</i>@lang('web.blog04_category')</a></span>
                                            </div>
                                            <a href="{{ route('blog04') }}">
                                                <h4 style="text-align:justify;font-size:10px">@lang('web.blog04_title')</h4></br>
                                            </a>
                                            <!--  <p class="card-text" style="text-align:justify;font-size:10px">Pandemia de COVID-19 a făcut ca munca la distanță să devină o opțiune din ce în ce mai frecventă pentru angajați,
                                        iar programul clasic de opt ore să nu mai fie o constantă.</br>
                                        Lucrul în regim de telemuncă a oferit flexibilitate și posibilitatea gestionării individuale a programului de lucru,
                                        35% dintre angajați fiind de părere că posibilitatea de a lucra de acasă le oferă mai multă liberate în utilizarea orelor de muncă.
                                        </p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Post 3 -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <!-- Featured blog post-->
                                    <div class="card border-dark text-info" style="width:100%">
                                        <!--<div><a href="blog05"><img class="card-img-top" src="assets/images/blog/foto retrospectiva anului fiscal 2021.png" alt="..." width="100%" /></a></div></br>-->
                                        <div class="card-body" style="background-color: #f3f3f3;padding:5px">
                                            <div class="post-meta">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog03_date')</span>&nbsp;
                                                <span class="post-meta-category"><a href=""><i
                                                            class="fa fa-tag">&nbsp</i>@lang('web.blog03_category')</a></span>
                                            </div>
                                            <a href="{{ route('blog03') }}">
                                                <h4 style="text-align:justify;font-size:10px">@lang('web.blog03_title')</h4></br>
                                            </a>
                                            <!--  <p class="card-text" style="text-align:justify;font-size:10px">Fișierul Standard de Control Fiscal (SAF-T) devine obligatoriu începând cu anul 2022.
                                        În timp ce marii contribuabili vor avea obligația să depună fișierul începând cu luna ianuarie 2022, cei mijlocii vor face acest lucru abia din ianuarie 2023, iar companiile mici,
                                        din 2025.
                                        </p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Post 2 -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">

                                    <!-- Featured blog post-->
                                    <div class="card border-dark text-info" style="width:100%">
                                        <!--<div><a href="blog05"><img class="card-img-top" src="assets/images/blog/foto retrospectiva anului fiscal 2021.png" alt="..." width="100%" /></a></div></br>-->

                                        <div class="card-body" style="background-color: #f3f3f3;padding:5px">

                                            <div class="post-meta">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog02_date')</span>&nbsp;
                                                <span class="post-meta-category"><a href=""><i
                                                            class="fa fa-tag">&nbsp</i>@lang('web.blog02_category')</a></span>
                                            </div>
                                            <a href="{{ route('blog02') }}">
                                                <h4 style="text-align:justify;font-size:10px">@lang('web.blog02_title')</h4></br>
                                            </a>
                                            <!--   <p class="card-text" style="text-align:justify;font-size:10px"> Integrarea persoanelor cu dizabilități
                                        pe piața muncii reprezintă un proces esențial pentru dezvoltarea profesională și perfecționarea
                                        abilităților și calificărilor acestei categorii sociale, dar și pentru garantarea egalității de șanse,
                                        sporirea incluziunii sociale și asigurarea unui trai decent pe termen lung.
                                        </p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Blog Post 1 -->
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">

                                    <!-- Featured blog post-->
                                    <div class="card border-dark text-info" style="width:100%">
                                        <!--<div><a href="blog05"><img class="card-img-top" src="assets/images/blog/foto retrospectiva anului fiscal 2021.png" alt="..." width="100%" /></a></div></br>-->
                                        <div class="card-body" style="background-color: #f3f3f3;padding:5px">
                                            <div class="post-meta">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o">&nbsp</i>@lang('web.blog01_date')</span>&nbsp;
                                                <span class="post-meta-category"><a href=""><i
                                                            class="fa fa-tag">&nbsp</i>@lang('web.blog01_category')</a></span>
                                            </div>
                                            <a href="{{ route('blog01') }}">
                                                <h4 style="text-align:justify;font-size:10px">@lang('web.blog01_title')</h4></br>
                                            </a>

                                            <!-- <p class="card-text" style="text-align:justify;font-size:10px">Cum poate acoperi România deficitul de muncitori din infrastructură pentru a atinge ținta
                                        PNRR-ul României a primit săptămâna trecută avizul Consiliului UE, iar prima tranșă din totalul de 29,2 milioane de euro ar putea ajunge în țara noastră în decembrie.

                                        </p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script type="text/javascript">
        $(function () {
            $("div").slice(0, 10).show(); // select the first ten
            $("#load").click(function (e) { // click event for load more
                e.preventDefault();
                $("div:hidden").slice(0, 10).show(); // select next 10 hidden divs and show them
                if ($("div:hidden").length == 0) { // check if any hidden divs still exist
                    alert("No more divs"); // alert if there are none left
                }
            });
        });
    </script>

@endsection

<!--</body>-->