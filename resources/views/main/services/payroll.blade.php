@extends('main.layouts.master')

@section('body')

    <section>
        <div class="container">
            <!-- Portfolio page -->
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio-item design artwork">
                        <div class="portfolio-image effect social-links">
                            <img src="{{URL::asset('assets/images/our-services/Logo_B_Payroll_2017_m.png')}}" alt="">
                            <div class="image-box-content">
                                <p>
                                    <a href="{{URL::asset('assets/images/our-services/Logo_B_Payroll_2017_m.png')}}"
                                        data-lightbox-type="image"><i class="fa fa-expand"></i></a>

                                    <a href="#salarizare"><i class="fa fa-link"></i></a>
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
                                    <h4>Luminița Obaciu</h4>
                                </li>
                                <li><span>
                                        <e>Payroll Partner
                                    </span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="portfolio-client-description">
                        <p style="text-align:justify">
                            Our relation with our business partners is based on trustworthiness, experience and constant
                            support. That is why the outsourcing process of your payroll operations to us is the best
                            solution - you have the guarantee of confidentiality, quality and readiness.
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
    <section id="salarizare">
        <div class="col-md-8 col-md-offset-2">

            <!--        <h2>Salarizare</h2>-->
        </div>
        <!-- <div class="accordion clean radius border col-md-8 col-md-offset-2">
                    <div class="ac-item">
                        <h5 class="ac-title fara"><i class="fa fa-tag"></i>1.Analiza particularităților din activitatea ta și implicațiile acestora în procesul de salarizare</h5>
                    </div>
                </div> -->

        <div class="accordion toggle clean color-border-bottom col-md-8 col-md-offset-2">
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>1. A complete analysis of the particularities of your activity
                    and their implications concerning the payroll process</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>2. Identifying the necessary information for the monthly
                    required calculations and preparation of various reports, based on customer's needs</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>3. Breakdown of different types of specific revenues
                    and bonuses</h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Types of bonuses</h5><br />
                    <i class="fa fa-tag"></i> Types of benefits in kind</h5><br />
                    <i class="fa fa-tag"></i> Delegation allowances beyond the limits regulated by public institutions
                    </h5><br />
                    <i class="fa fa-tag"></i> Aids</h5>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>4. Breakdown of costs and fiscal implications for people with
                    multiple contracts </h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>5. Adaptation of soft elements and programs in order to
                    fulfill your requirements on special reporting issues</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>6. Composition and documentation of personnel files</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>7. Research and draw up personnel files for personal and
                    supplementary deduction computation</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>8. Preparation and registration of supporting documents</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>9. Salary calculation</h5>
                <div class="ac-content" style="padding-left:2em">

                    <i class="fa fa-tag"></i> Drawing up salary payment file prepared for uploading into the bank (this
                    activity involves receiving technical information from the bank)</h5><br />
                    <i class="fa fa-tag"></i> Drawing up payroll</h5><br />
                    <i class="fa fa-tag"></i> Recording the payroll statement - Drawing up accounting entries according
                    to the specifications of the client – analytical accounts, cost sharing according to certain
                    criteria (ex: cost centers)</h5><br />
                    <i class="fa fa-tag"></i> Special calculations of payrolls (reverse computation, hard currency
                    computation, fixed amount computation)</h5><br />
                    <i class="fa fa-tag"></i> Drawing up flyers and forwarding each of them on the employees e-mail or
                    forwarding the file to the client with all flyers</h5><br />
                    <i class="fa fa-tag"></i> The payment management of net wages by drawing up payment documents and
                    making payments in your name</h5>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>10. Drawing up payment orders for fiscal and social
                    obligations</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>11. Calculating, preparation and submission of all the
                    necessary payroll related statements required by the Romanian legislature:</h5>
                <div class="ac-content" style="padding-left:2em">

                    <i class="fa fa-tag"></i> The declaration regarding the payment obligations of the social
                    contributions, income tax and nominal evidence of the insured persons</h5><br />
                    <i class="fa fa-tag"></i> The declaration regarding the payment obligations due to the State Budget
                    regarding all payments for unemployed handicapped persons – Form 100</h5><br />
                    <i class="fa fa-tag"></i> Drawing up and forwarding form 205 – informative declaration regarding
                    withholding tax and earnings / loses, on beneficiaries</h5><br />
                    <i class="fa fa-tag"></i> The 402 form - informative declaration regarding the income, from salary
                    or assimilated to salaries, including the remuneration of directors and other persons treated as
                    such, residents of other European Union member states, made in Romania</h5>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>12. Drawing up and permanent upgrade of the register for
                    employee evidence in electronic format</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>13. Forwarding the register for employee evidence in
                    electronic format and the upgrades at the Labour Chamber</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>14. Assisting the client (from accounting and
                    financial point of view) </h5>
                <div class="ac-content" style="padding-left:2em">

                    <i class="fa fa-tag"></i> Assisting the client in drawing up labour contracts (from accounting and
                    financial point of view)</h5><br />
                    <i class="fa fa-tag"></i> Assisting the client in drawing up supporting documents regarding
                    modifications of the contractual provisions (from accounting and financial point of view)</h5>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>15. Drawing up certificates necessary to physical
                    persons processed</h5>
                <div class="ac-content" style="padding-left:2em">

                    <i class="fa fa-tag"></i> Certificate for banks</h5><br />
                    <i class="fa fa-tag"></i> Certificate necessary for establishing the child-raising allowance</h5>
                    <br />
                    <i class="fa fa-tag"></i> Medical certificate</h5>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>16. Drawing up and forwarding FNUASS requests of
                    recovery and filling in medical certificates</h5>
                <div class="ac-content" style="padding-left:2em">

                    <i class="fa fa-tag"></i> Drawing up FNUASS requests of recovery</h5><br />
                    <i class="fa fa-tag"></i> Forwarding FNUASS requests of recovery</h5><br />
                    <i class="fa fa-tag"></i> Filling in the medical certificates (spaces for employer)</h5>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>17. Drawing up different reports</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>18. Filling in statistical reports with payroll information
                </h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>19. Providing assistance during audit or fiscal control</h5>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>20. Providing assistance in other activities regarding other
                    fiscal authorities</h5>
            </div>
        </div>
        <!--END: Salarizare-->
    </section>
    <!-- END: CONTENT -->
@endsection