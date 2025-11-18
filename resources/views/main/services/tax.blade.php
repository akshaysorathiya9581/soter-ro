@extends('main.layouts.master')

@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio-item design artwork">
                        <div class="portfolio-image effect social-links">
                            <img lang="ro" src="{{URL::asset('assets/images/our-services/Logo_B_Tax_2017_m.png')}}" alt="">
                            <div class="image-box-content">
                                <p>
                                    <a lang="ro" href="{{URL::asset('assets/images/our-services/Logo_B_Tax_2017_m.png')}}"
                                        data-lightbox-type="image"><i class="fa fa-expand"></i></a>

                                    <a lang="ro" href="#taxe"><i class="fa fa-link"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row" style="padding-top:4em">
                        <div class="heading-title-simple heading-title-border-bottom"></div>
                        <div class="portfolio-client-info">
                            <ul class="list">
                                <li>
                                    <h4>Dan Manolescu</h4>
                                </li>
                                <li><span>
                                        <e>Tax Partner
                                    </span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="portfolio-client-description">
                        <p style="text-align:justify">
                            Your business needs a consultant who does not only see the tax risks and opportunities, but who
                            also understands the local particularities of the tax environment and who is familiar with the
                            specific requirements of the tax authorities, all these to ensure both tax planning and
                            compliance from an accounting standpoint.
                        </p>
                    </div>
                    <hr class="space-xs">
                </div>
            </div>
            <!-- END: Portfolio page -->
        </div>
    </section>
    <hr />
    <!--Toggle radius border-->
    <section id="taxe">
        <div class="col-md-8 col-md-offset-2">
            <!--            <h2>Taxe</h2>-->
        </div>

        <div class="accordion toggle clean color-border-bottom col-md-8 col-md-offset-2">
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>1. Professional opinions</h5>
                <div class="ac-item">
                    <h5 class="ac-title"><i class="fa fa-navicon"></i>2. Specific answers to questions on accounting and
                        taxation matters</h5>
                    <div class="ac-content" style="padding-left:2em">

                        <i class="fa fa-tag"></i> Specific answers on spot – by phone/meetings – and/or in written in no
                        more than two working days</h5><br />
                    </div>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>3. Solutions to your questions in a
                    practically-oriented manner </h5>
                <div class="ac-content" style="padding-left:2em">

                    <i class="fa fa-tag"></i> Providing opinions and interpretations given by fiscal authorities
                    regarding different cases on various topics</h5><br />
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>4. Regular newsletters</h5>
                <div class="ac-content" style="padding-left:2em">

                    <i class="fa fa-tag"></i> Legislative newsletters on different amendments brought to the tax law or
                    the law regulating your specific business activity, as well as opportune actions to be taken in
                    order to meet legal obligations and tax savings. These are intended, mostly, for the practitioners
                    use because their content is relevant, structured, exposed in a way that facilitates understanding
                    and includes ready-to-use information. </h5><br />
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>5. Assistance and support in case of tax audits, tax overhaul
                    or when official interpretations are required</h5>
                <h5 class="ac-title"><i class="fa fa-tag"></i>6. Calculation and checking of tax returns</h5>
            </div>
        </div>

    </section>
    <!-- END: CONTENT -->
@endsection