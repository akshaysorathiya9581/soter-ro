@extends('main.layouts.master')

@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio-item design artwork">
                        <div class="portfolio-image effect social-links">
                            <img src="{{URL::asset('assets/images/our-services/Logo_B_Account_2017_m.png')}}" alt="">
                            <div class="image-box-content">
                                <p>
                                    <a href="{{URL::asset('assets/images/our-services/Logo_B_Account_2017_m.png')}}"
                                        data-lightbox-type="image"><i class="fa fa-expand"></i></a>

                                    <a href="#accounting"><i class="fa fa-link"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row" style="padding-top:4em">
                        <div class="heading-title-simple heading-title-border-bottom">

                        </div>

                        <div class="portfolio-client-info">
                            <ul class="list">

                                <li>
                                    <h4>Mihaela Rișco-Martin</h4>
                                </li>
                                <li><span>
                                        <e>Accounting Partner
                                    </span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="portfolio-client-description">
                        <p style="text-align:justify">
                            Small and medium customers, large and very large customers with complex transactions, they all
                            entrust us the task of dealing with this delicate part of their business, imposed as mandatory
                            by state authorities.</br>
                            We base our success both on our customer’s trust, built through our understanding of their local
                            and regional needs, as well as on the quality and effectiveness of all our delivered services.
                        </p>
                    </div>
                    <div class="heading-title-simple heading-title-border-bottom"></div>

                    <div class="portfolio-client-info">
                        <ul class="list">
                            <li><span></span></li>
                            <li><span></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />
    <!--Toggle radius border-->

    <section id="accounting" style="display:yes">
        <div class="col-md-8 col-md-offset-2">
            <!--        <h2>Contabilitate</h2>-->
        </div>
        <div class="accordion toggle clean color-border-bottom col-md-8 col-md-offset-2">
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>1. We offer you services regarding the accounting
                    evidence: </h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Accrual accounting evidence <br>
                    <i class="fa fa-tag"></i> Making accounting entries based on the financial documents using double entry
                    system<br>
                    <i class="fa fa-tag"></i> Accounting notes for all financial documents received from the Beneficiary<br>
                    <i class="fa fa-tag"></i> Calculation of accounting depreciation<br>
                    <i class="fa fa-tag"></i> Calculation of fiscal depreciation<br>
                    <i class="fa fa-tag"></i> Calculation of capital assets adjustments<br>
                    <i class="fa fa-tag"></i> Analytical trial balances with four series of equalities<br>
                    <i class="fa fa-tag"></i> Synthetic trial balances with four series of equalities<br>
                    <i class="fa fa-tag"></i> Analytic and synthetic chart of account – in electronic format<br>
                    <i class="fa fa-tag"></i> “Maestru –sah” – in electronic format – a mandatory type of chart of
                    accounts<br>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>2. We prepare specific reports </h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Half Annual Financial Statements <br>
                    <i class="fa fa-tag"></i> Annual financial Statements <br>
                    <i class="fa fa-tag"></i> Non – activity declaration <br>
                    <i class="fa fa-tag"></i> Balance Sheet<br>
                    <i class="fa fa-tag"></i> Profit and loss account<br>
                    <i class="fa fa-tag"></i> Cash flow situation – the direct or/and indirect method<br>
                    <i class="fa fa-tag"></i> Shareholders’ equity / owner’s equity <br>
                    <i class="fa fa-tag"></i> Fixed assets report <br>
                    <i class="fa fa-tag"></i> Specific report according to your requests <br>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>3. We calculate and communicate you all the necessary
                    details for payments that are referring to the following taxes:</h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Tax on profit <br>
                    <i class="fa fa-tag"></i> Tax on revenues for micro companies<br>
                    <i class="fa fa-tag"></i> Value added tax <br>
                    <i class="fa fa-tag"></i> Tax on dividends<br>
                    <i class="fa fa-tag"></i> Tax on revenues obtained from Romania by nonresidents<br>
                    <i class="fa fa-tag"></i> Withholding at source of tax for independent activities for revenues paid by
                    Beneficiary (revenues from intellectual property rights, from the sale of goods under a consignment
                    regime, from activities carried out on the basis of agency contracts, commission contracts, or trade
                    mandates, from activities carried out on the basis of civil contracts/conventions concluded as provided
                    in the civil code, from technical (and) accounting expertise activities, judicial expertise and
                    extrajudicial expertise)
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>4. We calculate, elaborate and submit for you the
                    following fiscal declarations: </h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> VAT return – Form 300<br>
                    <i class="fa fa-tag"></i> Special VAT return – Form 301<br>
                    <i class="fa fa-tag"></i> Recapitulative declaration regarding the intra-community
                    deliveries/acquisition of goods – Form 390<br>
                    <i class="fa fa-tag"></i> Informative declaration regarding deliveries/supplies and acquisitions on
                    national territory – Form 394 <br>
                    <i class="fa fa-tag"></i> Informative declaration regarding the delivery of goods and the provision of
                    services – Form 392 A<br>
                    <i class="fa fa-tag"></i> Informative declaration regarding the delivery / acquisition of goods and the
                    provision of services – Form 392 B<br>
                    <i class="fa fa-tag"></i> Informative declaration regarding revenues from the sale of tickets for
                    international transportation of persons, with departure from Romania – Form 393<br>
                    <i class="fa fa-tag"></i> Declaration regarding the fiscal period<br>
                    <i class="fa fa-tag"></i> Annual Declaration concerning the final pro-rata and the way of
                    computation;<br>
                    <i class="fa fa-tag"></i> Annual Declaration concerning the provisory pro-rata<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    – regarding the tax on profit – Form 100<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    – regarding the tax on revenues – Form 100<br>
                    <i class="fa fa-tag"></i> Declaration regarding the annual tax on income – annual declaration – Form
                    101<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    - regarding taxes for the revenue from intellectual property rights – Form 100<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    – regarding taxes for the revenues from technical (and) accounting expertise activities, judicial
                    expertise and extrajudicial expertise – Form 100<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    – regarding taxes on revenues from the sale of goods under a consignment regime and taxes on revenues
                    from activities carried out on the basis of agency contracts, commission contracts, or trade mandates –
                    Form 100<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    – regarding taxes on dividends distributed to the natural physical persons – Form 100<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    – regarding taxes dividends distributed to Romanian legal entities – Form 100<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    - regarding taxes for the interest revenue – Form 100<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    – regarding taxes for the revenue obtained in Romania by natural non-resident persons – Form 100<br>
                    <i class="fa fa-tag"></i> Declaration concerning payment obligations to the general consolidated budget
                    – regarding taxes for the revenue obtained in Romania by legal non-resident entities – Form 100<br>
                    <i class="fa fa-tag"></i> Informative declaration regarding withholding tax on types of beneficiary
                    persons – Form 205<br>
                    <i class="fa fa-tag"></i> Informative declaration regarding withholding tax / untaxed incomes, obtained
                    in Romania by non-residents<br>
                    <i class="fa fa-tag"></i> Informative declaration regarding revenues on savings obtained in Romania by
                    UE-residents, residents in third party counties or independent or associated territories – Form 400<br>
                    <i class="fa fa-tag"></i> Tax registration declaration / Endorsement declaration for legal entities –
                    Form 010 – drawn-up based on the documents and information received from the Beneficiary with at least
                    10 working days before the legal registration term at the competent authorities<br>
                    <i class="fa fa-tag"></i> Tax registration declaration / Endorsement declaration for secondary
                    (auxiliary) offices – which have payment obligations – Form 060 <br>
                    <i class="fa fa-tag"></i> Tax registration declaration / Endorsement declaration for secondary
                    (auxiliary) offices – which do not have payment obligations<br>
                    <i class="fa fa-tag"></i> Non – activity declaration
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>5. We offer you our support regarding specific activities
                    such as:</h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Checking the fiscal evidence for the Fiscal Administration and making the
                    necessary correction into their evidence<br>
                    <i class="fa fa-tag"></i> Move the fiscal file from one fiscal domicile to another one<br>
                    <i class="fa fa-tag"></i> Obtaining fiscal certificate that there are no payment obligations to the
                    general consolidated budget<br>
                    <i class="fa fa-tag"></i> Obtaining certificate of fiscal residence<br>
                    <i class="fa fa-tag"></i> Obtaining fiscal certificate of the tax withheld and paid<br>
                    <i class="fa fa-tag"></i> Obtaining tax fiscal record<br>
                    <i class="fa fa-tag"></i> Obtaining registration certificate for VAT purposes<br>
                    <i class="fa fa-tag"></i> Obtaining other certificates issued by the fiscal authorities<br>
                    <i class="fa fa-tag"></i> Obtaining confirmation of company details from the Trade Register Office<br>
                    <i class="fa fa-tag"></i> Obtaining statements from the Trade Register Office<br>
                    <i class="fa fa-tag"></i> Hand over the Annual Financial Statements to the Trade Register<br>
                    <i class="fa fa-tag"></i> Obtaining the fiscal certificate from the Local Authorities<br>
                    <i class="fa fa-tag"></i> Assistance in drawing up and submitting declarations regarding local fees and
                    taxes<br>
                    <i class="fa fa-tag"></i> Assistance in other activities regarding other fiscal authorities<br>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>6. We organize and provide the maintenance of the
                    mandatory registers</h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Accounting ledger<br>
                    <i class="fa fa-tag"></i> Inventory register<br>
                    <i class="fa fa-tag"></i> Fiscal evidence register concerning the way we compute the fiscal result<br>
                    <i class="fa fa-tag"></i> Registrul de Evidenţă Fiscală <br>
                    <i class="fa fa-tag"></i> VAT Purchase register <br>
                    <i class="fa fa-tag"></i> VAT Sales register<br>
                    <i class="fa fa-tag"></i> Accounting register for tangible and intangible assetse<br>
                    <i class="fa fa-tag"></i> Fiscal register for tangible and intangible assets<br>
                    <i class="fa fa-tag"></i> Capital goods register<br>
                    <i class="fa fa-tag"></i> Asistenţă privind achiziţionarea registrelor<br>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>7. We offer you assistance in primary accounting evidence:
                </h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Assistance in drawing up and making the expense reports, the travel order
                    expense reports and other primary documents<br>
                    <i class="fa fa-tag"></i> Assistance in filling in the justifying documents concerning the money in and
                    money out movements<br>
                    <i class="fa fa-tag"></i> Assistance in issuing the fiscal invoices according to the due date stipulated
                    in the contracts concluded<br>
                    <i class="fa fa-tag"></i> Assistance in relation with the bank institutions (submit payment orders, pick
                    up bank statements and others activities) <br>
                    <i class="fa fa-tag"></i> Other activities regarding primary accounting<br>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>8. We assist you within checks</h5>
                <div class="ac-content" style="padding-left:2em">
                    <i class="fa fa-tag"></i> Assistance within tax authorities’ checks <br>
                    <i class="fa fa-tag"></i> Assistance within authorities’ checks on repayment of debts to the state’s
                    budget<br>
                    <i class="fa fa-tag"></i> Assistance in auditing<br>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-tag"></i>9. We develop dedicated software applications that allow us to
                    solve your multiple demands with customized solutions
                    <h5>
            </div>
        </div>
        <!--END: Contabilitate-->
    </section>
@endsection