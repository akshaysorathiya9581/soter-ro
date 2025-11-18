@extends('main.layouts.master')

@section('body')

    <section>
        <div class="container">
            <!-- Portfolio page -->
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio-item design artwork">
                        <div class="portfolio-image effect social-links">
                            <img lang="ro" src="{{URL::asset('assets/images/our-services/07_workforce_import.png')}}"
                                alt="">
                            <div class="image-box-content">
                                <p>
                                    <a lang="ro" href="{{URL::asset('assets/images/our-services/07_workforce_import.png')}}"
                                        data-lightbox-type="image"><i class="fa fa-expand"></i></a>
                                    <a lang="ro" href="#workforce"><i class="fa fa-link"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="heading-title-simple heading-title-border-bottom">
                        <div class="row" style="padding-top:4em">
                            <div class="heading-title-simple heading-title-border-bottom"></div>
                            <div class="portfolio-client-info">
                                <ul class="list">
                                    <li>
                                        <h4>Romulus Badea</h4>
                                    </li>
                                    <li><span>
                                            <e>Tax Partner
                                        </span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-client-description">
                            <p style="text-align:justify">
                                Do you have a shortage of manpower? We have the solution! We can assist you in recruiting
                                from Asia the necessary workforce for any area of activity: factories, constructions,
                                hospitality, agriculture or forestry. We have the experience of integrated recruitment
                                processes, both in Romania and in the source country ( (Vietnam, Sri Lanka, India, Nepal and
                                Algeria). We guarantee observance of immigration procedures in Romania. Our partners abroad
                                have extensive experience with Romanian employers and fully understand their expectations.
                                We collaborate with licensed companies with an excellent knowledge of the local labour
                                market, that have recruited hundreds of Asian workers for Romania.
                            </p>
                        </div>
                        <hr class="space-xs">
                    </div>
                </div>
                <!-- END: Portfolio page -->
            </div>
        </div>
    </section>
    <hr />
    <!--Toggle radius border-->
    <section id="expatriati">
        <div class="col-md-8 col-md-offset-2">

            <!--    <h2>Expatriati</h2>-->
        </div>

        <div class="accordion toggle clean color-border-bottom col-md-8 col-md-offset-2">
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>1. In Romania</h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Assistance for the employer in defining the workforce needs<br>
                    <i class="fa fa-tag"></i> Preparation of the recruitment order (demand letter) to legally comply with
                    the legislation in the source country and Romania <br>
                    <i class="fa fa-tag"></i> Assistance with the selection of candidates<br>
                    <i class="fa fa-tag"></i> Obtaining the work permit<br>
                    <i class="fa fa-tag"></i> Assistance with the logistics of the arrival of the workers<br>
                    <i class="fa fa-tag"></i> Obtaining the residence permits <br>
                    <i class="fa fa-tag"></i> Assistance with the integration of the foreign workers<br>
                    <i class="fa fa-tag"></i> Mediation of the relationship between the employer and foreign workers from a
                    cross-cultural point of view<br>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>2. In the source country </h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Observance of the recruitment legal requirements<br>
                    <i class="fa fa-tag"></i> Publicity of the recruitment campain<br>
                    <i class="fa fa-tag"></i> Collection of CVs and preparation of presentation videos of the candidates<br>
                    <i class="fa fa-tag"></i> Organising practical tests for selection<br>
                    <i class="fa fa-tag"></i> Organising medical checks of selected candidates<br>
                    <i class="fa fa-tag"></i> Work visa application at the Romanian consulate<br>
                    <i class="fa fa-tag"></i> Organising the logistics for workers departure to Romania.<br>

                </div>
            </div>
        </div>

    </section>
@endsection
<!--</body>-->