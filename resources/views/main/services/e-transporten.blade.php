@extends('main.layouts.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio-item design artwork">
                        <div class="portfolio-image effect social-links">
                            <img lang="ro" src="{{URL::asset('assets/images/our-services/e-transport.png')}}" alt="">

                            <div class="image-box-content">
                                <p>
                                    <a lang="ro" href="{{URL::asset('assets/images/our-services/e-transport.png')}}"
                                        data-lightbox-type="image"><i class="fa fa-expand"></i></a>

                                    <a lang="ro" href="#importfm"><i class="fa fa-link"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="col-md-8">
                        <div class="img" align="justify"> <img
                                src="{{URL::asset('assets/images/team/gabriel_gheorghe.jpg')}}"
                                class="img-responsive img-rounded" alt=""> </div>
                    </div>
                    <div class="row" style="padding-top:4em">
                        <div class="heading-title-simple heading-title-border-bottom"></div>

                        <div class="portfolio-client-info" style="align-content:center">
                            <ul class="list">
                                <li>
                                    <h4>Gabriel Gheorghe </h4>
                                </li>
                                <li><span>
                                        <e>Associate Tax Partner
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <!--Toggle radius border-->
    <section id="expatriati">
        <div class="col-md-8 col-md-offset-2">
            <div class="portfolio-client-description">
                <strong>RO e-Transport </strong> has been in operation since July 1, 2024 in its extended version and
                already many economic operators have experienced penalties that are
                disproportionate to the seriousness of the offense. Human error is unlikely to be completely eliminated at
                this early stage. Flat and ambiguous e-Transport laws also contribute to this.
                They are currently being supplemented by unwritten laws, circumstantial interpretations offered by the DGAF
                according to the interests of the moment and, to a large extent, the taxpayer's common sense
                <p></p>
            </div>
            <h6>The service is aimed directly at those involved in implementation and operations, in particular people in
                logistics, procurement, finance. </h6>

            <!--        <h2>Expatriati</h2>-->
        </div>

        <div class="accordion toggle clean color-border-bottom col-md-8 col-md-offset-2">
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>Our team has acquired extensive experience in this field:
                </h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Actively participating in discussions with the authorities from the initial
                    stages of the project, <br>
                    <i class="fa fa-tag"></i> Providing support to clients directly involved in the implementation of
                    e-Transport, <br>
                    <i class="fa fa-tag"></i> Organizing dedicated courses attended by thousands of trainees, <br>
                    <i class="fa fa-tag"></i> Being actively involved at various stages of customer disputes with the DGAF,
                    with an impressive success rate. <br>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>Subscribers to this service will be able to receive: </h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Professional opinions and solutions to the issues raised, in a practical
                    manner and within a reasonable time (on the spot - and/or in writing in max. 2 working days) <br>
                    <i class="fa fa-tag"></i> Dedicated legislative information<br>
                    <i class="fa fa-tag"></i> Assistance and support in case of inspections (within the available hours of
                    subscription)<br>
                    <i class="fa fa-tag"></i> Assistance in drafting addresses if clarifications by authorities are needed
                    <br>
                    <i class="fa fa-tag"></i> Preferential rates for seminars organized by Soter & Partners. <br>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <p></i>For a subscription offer suited to your needs, you can write to me at <a
                    href="mailto:gabriel.gheorghe@soter.ro">gabriel.gheorghe@soter.ro.</a> </p>
            <p></i>Partners who are already clients of a recurring service offered by our firm will be able to access
                discounts of <strong> up to 20%. </strong> </p>

            <!--        <h2>Expatriati</h2>-->
        </div>
    </section>
@endsection
<!--</body>-->