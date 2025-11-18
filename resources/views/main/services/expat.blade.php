@extends('main.layouts.master')

@section('body')

    <section>
        <div class="container">
            <!-- Portfolio page -->
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio-item design artwork">
                        <div class="portfolio-image effect social-links">
                            <img lang="ro" src="{{URL::asset('assets/images/our-services/Logo_B_Expat_2017_m.png')}}"
                                alt="">
                            <div class="image-box-content">
                                <p>
                                    <a lang="ro" href="{{URL::asset('assets/images/our-services/Logo_B_Expat_2017_m.png')}}"
                                        data-lightbox-type="
                                                image"><i class="fa fa-expand"></i></a>
                                    <a lang="ro" href="#expatriati"><i class="fa fa-link"></i></a>
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
                                You’re looking for a trustworthy services partner for your business? The distinct advantage
                                in collaborating with us for expatriate immigration and taxation is given by the experience
                                in working for the global leaders in consulting services, easy access to a network of
                                business partners and expertise of our professionals in our activity fields (accounting, tax
                                consulting, human resources, audit and payroll)
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
                <h5 class="ac-title"><i class="fa fa-navicon"></i>1. Immigration services</h5>
                <div class="ac-content" style="padding-left:2em ">
                    <i class="fa fa-tag"></i> Obtaining short term and/or long term visa<br>
                    <i class="fa fa-tag"></i> Obtaining work permits<br>
                    <i class="fa fa-tag"></i> Obtaining residence permits/certificates of residence<br>
                    <i class="fa fa-tag"></i> Entry/exit interviews with the expatriates<br>
                    <i class="fa fa-tag"></i> Establishing fiscal residence<br>
                    <i class="fa fa-tag"></i> Assessment of Romanian taxable base <br>
                    <i class="fa fa-tag"></i> Obtaining or issuing annual tax payment confirmation<br>
                    <i class="fa fa-tag"></i> Obtaining European certificates (A1, etc.)<br>
                    <i class="fa fa-tag"></i> Registration/de-registration for social security purposes in Romania <br>
                    <i class="fa fa-tag"></i> Monthly regular activities for Expatriates (income taxes and social charges
                    computation, preparation of payment orders, etc.)

                    <br>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>2. Taxation services </h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Advice on structuring the international assignments and local requirements in
                    the light of the United Europe accession<br>
                    <i class="fa fa-tag"></i> Preparation and submission of the monthly personal income tax returns <br>
                    <i class="fa fa-tag"></i> Monthly preparation and submission of social security statement<br>
                    <i class="fa fa-tag"></i> Obtaining tax clearance certificates<br>
                </div>

            </div>
        </div>
    </section>
@endsection
<!--</body>-->