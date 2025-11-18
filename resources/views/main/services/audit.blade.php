@extends('main.layouts.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio-item design artwork">
                        <div class="portfolio-image effect social-links">
                            <img lang="ro" src="{{URL::asset('assets/images/our-services/Logo_B_Audit_2017_m.png')}}"
                                alt="">
                            <div class="image-box-content">
                                <p>
                                    <a lang="ro"
                                        href="{{URL::asset('assets/images/our-services/Logo_B_Audit_2017_m.png')}}"
                                        data-lightbox-type="image"><i class="fa fa-expand"></i></a>
                                    <a lang="ro" href="#audit"><i class="fa fa-link"></i></a>
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
                                    <h4>Monica Ștefan</h4>
                                </li>
                                <li><span>
                                        <e>Audit Partner
                                    </span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="portfolio-client-description">
                        <p style="text-align:justify">
                            An informed and new perspective or the confirmation of the already known always makes the
                            difference when it comes to effective and efficient management of any business. Our auditing and
                            related services focus on listening and asking the right questions, providing support to improve
                            internal and financial control processes and having the main aim a reliable and relevant
                            reporting.
                        </p>
                    </div>
                    <div class="heading-title-simple heading-title-border-bottom"></div>
                    <div class="portfolio-client-info">
                        <ul class="list">
                            <li><span></span></li>
                            <li><span></span></li>
                        </ul>
                    </div>
                    <hr class="space-xs">
                </div>
            </div>
            <!-- END: Portfolio page -->
        </div>
    </section>
    <hr />
    <!--Toggle radius border-->

    <section id="audit">
        <div class="accordion toggle clean color-border-bottom col-md-8 col-md-offset-2">
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>1. Full-scope financial audit on statutory financial
                    statements prepared in accordance with the current applicable accounting regulations </h5>
                <div class="ac-content" style="padding-left:2em">
                    <p>As per the stipulation of the Order no 1802/2014 and its subsequent amendments, the Statutory
                        Financial Audit is mandatory for the entities which exceed two of the three criteria for two
                        consecutive financial year ( the current year and the previous year): </p>
                    <div style="padding-left:2em">
                        <li>Turnover: over RON 32.000.000 Lei </li>
                        <li>Total assets: over RON 16.000.000 Lei </li>
                        <li>Number of employees : over 50 </li>
                    </div>
                    </br>
                    <p>For the large and medium entities (as defined by the Order no 1802/2014 and its subsequent
                        amendments) the annual Financial Statements being subject to audit comprise the following: </p>
                    <div style="padding-left:2em">
                        <li>Balance sheet</li>
                        <li>Statement of Profit and loss </li>
                        <li>Informative Forms F30 and F40 </li>
                        <li>Statement of Changes in Equity and Statement of Cash Flows </li>
                        <li>Explanatory notes and Accounting Policies </li>
                        <li>Administrators’ Report </li>
                    </div>
                </div>

            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>2. Limited reviews of annual financial statements,
                    statutory or prepared in accordance with other financial reporting frameworks and/or special purpose
                    financial statements prepared for group consolidation </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            The limited review is a limited assurance engagement which has as objective the reduction of
                            material misstatement risk to an acceptable level, but not at the level of precision entailed by
                            a full-scope audit engagement.<br /> The level of materiality is higher than that of a
                            full-scope audit engagement, fact which reduces the range of audit evidence deemed as adequate,
                            relevant and sufficient for expressing an opinion.<br /> We recommend this type of engagement
                            for external reporting packages and special purpose financial statements (e.g. for Group
                            reporting or consolidation purposes, in the event that the instructions do not require
                            otherwise.<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>3. Assurance engagements, other than audit or review of
                    historic financial information </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            This type of service relates to partial assurance engagements in relation to financial reporting
                            which does not constitute financial statements (forecasted financial information, assurance
                            engagements for pro-forma financial statements included in fusion prospects, etc).<br /> There
                            are situations in which this type of audit engagement is requested also for the audit of
                            nonrefundable European funds, but this specification must be included expressly in the
                            Solicitant’s Guide or in the specific instructions issued by the Implementation Organism (e.g.
                            an audit report as per ISAE 3000 or ISA 805 is required).<br />
                        </p>
                    </div>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>4. Compilations of annual financial statements, statutory
                    or prepared in accordance with other financial reporting frameworks and/or special purpose financial
                    statements prepared for group consolidation </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            The compilation of annual financial statements consists of the preparation of the respective
                            financial statements (annual or for a different period which can be the quarter, semester or
                            month) based on the trial balance provided by the client, but applying the reporting principles
                            and the generally accepted framework - IFRS, US GAAP, UK GAAP, HBII.<br /> In the compilation
                            process, we request clarifications on the nature of elements included in the trial balance in
                            order to validate the substance of the accounts reported and to understand whether the compiled
                            financial statements reflect the economic reality.<br /> All corrected and uncorrected
                            adjustments on the initial trial balance provided by the client are included in the compilation
                            report which accompanies the respective financial statements.<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>5. Special purpose engagements – agreed-upon procedures
                </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            This is the most frequent type of non-assurance services which allow the auditor to further
                            detail certain areas of interest for the client, without expressing an opinion on the financial
                            statements as a whole.<br /> Thus, this type of engagement is appropriate when a client wishes
                            to obtain assurance on a specific accounting or internal control area (e.g. certification of
                            turnover for a rent lessee for the purpose of rent adjustment at year end or verification of the
                            reporting method used for old or obsolete inventories, verification of the valuation method of
                            inventories, etc).<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>6. Financial-economic analyses on comparative financial
                    statements </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            Without a professional opinion being required, we can perform a financial-economic analysis of
                            the relevant indicators for a specific industry and also to perform an analysis of the factors
                            which have determined certain variations in the respective indicators. The variance analysis is
                            usually discussed with other departments aside from Finance with the purpose of financial
                            information validation.<br /> In this type of engagement, the auditor cannot express an opinion
                            on the financial statements as a whole and neither on whether the indicators’ variances and
                            correct or whether there is a going concern risk.<br /> This type of engagement is a
                            non-assurance engagement, respectively a compilation of this internal analysis for the entity or
                            for third parties (e.g. a liquidity analysis for the bank or an analysis of stock
                            rotation).<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>7. Audit engagements for projects financed from European
                    funds or other nonrefundable sources </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            We have been performing this type of engagements since 2002 when there existed the PHARE
                            non-reimbursable funds and we had the pleasure to actively participate in consulting missions
                            alongside Moore Stephens Europe for the European Commission, with the purpose of establishing
                            the contents of the audit report suitable for this type of nonrefundable finance.<br /> An audit
                            report on non-reimbursable funds is usually a report over payment requests or over the
                            intermediate/final financial reports. These payment requests and financial reports contain
                            financial elements presented in the annual financial statements, but based on different
                            reporting rules, such as “cash-based accounting” - settlement of the payments made by the
                            Beneficiary entity - rather than based on the principles of “accrual-basis accounting”, as the
                            statutory financial statements.>br> Considering the above, in our opinion these reporting
                            elements for European funds or other non-reimbursable funds do not constitute a part of the
                            annual financial statements unless they have the same reporting framework.<br /> Consequently,
                            the report we recommend for this type of engagement is the one for agreed-upon procedures, as
                            per ISRS 4400, in which the auditor describes in detail the procedures performed, the areas
                            analyzed and the related findings. This type of report offers the users the possibility to
                            decide themselves on the relevant conclusions, based on the presented observations.<br /> The
                            transition to structural funds at national level has determined the expansion of this reporting
                            area, such that at the present moment the Ministry of European Funds allows the implementation
                            organisms to request both audit reports as per ISRS 4400, as well as reporting in compliance
                            with ISAE 3000 or ISA 805.<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>8. Financial due-diligence engagements </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            In the case of a business acquisition (even a partial one), boith the buyer and the seller may
                            perform a due diligence on their entity or on the targeted one, in order to ascertain the
                            financial and/or fiscal risks to which they are exposed. The report will provide a detailed
                            description of the business, a financial and economic analysis mutually agreed-upon and a
                            detailed presentation, on areas, of the most significant observations and risks
                            identified.<br /> In practice, this type of engagement is described as „quick and dirty” as it
                            is performed in a short period of time, there are information limitations depending on the „
                            data room” provided by the target entity and it does not offer the possibility of a detailed
                            analysis (the reason why it is recommended to establish a relevant and reasonable materiality
                            level) and allows the audit team to specify the significant risks identified, either from
                            documents or discussion with the target entity personnel, but without a complete
                            validation.<br /> Usually, we recommend that this type of engagement be performed in
                            corroboration with a legal due diligence, such as to allow the analysis of the target entity’s
                            set up, of all compulsory authorizations, but also the commercial and legal analysis of existing
                            contracts.<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>9. Internal audit engagements for companies </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            The entity’s management is responsible for the preparation and faithful presentation of the
                            financial statements in accordance with the applicable accounting regulations<br /> This
                            responsibility includes: the design, implementation and maintenance of a internal control
                            environment relevant for the preparation and faithful presentation of financial statements which
                            are free from material misstatements due to fraud or error; the selection and application of
                            appropriate accounting policies; the use of accounting estimates reasonable in the given
                            circumstances<br /> The internal audit’s main target are the existing internal control processes
                            and procedures, the ones which ensure the proper internal functioning of the entity, such that
                            financial information is accurately recorded and presented.<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-navicon"></i>10. Professional training on specific topics </h5>
                <div class="ac-content" style="padding-left:2em">
                    <div style="text-align:justify">
                        <p>
                            We organize professional trainings dedicated to our clients, on specific topics chosen by them
                            or areas where they are interested on expanding their accounting knowledge, especially IFRS
                            reporting.<br /> We offer our clients the opportunity to inform us as to which topics they wish
                            a more comprehensive understanding of and, to the extent to which we can assist with
                            professional training, we do so in a dedicated manner, with focus on practical examples from
                            their specific industries.<br /> Up to now, we have organized requested professional training on
                            the following topics:
                            <br />

                        <div style="padding-left:2em">
                            <li> Comparison between Romanian Accounting Standards and IFRS on general interest areas – fixed
                                assets, inventories, accounts receivable, cash, liabilities, etc. </li>
                            <li> Deferred tax – conceptual aspects and accounting treatment </li>
                            <li> What is the Audit Risk and how it affects an audit engagement </li>
                            <li> What is the purpose of Account 711 in accounting – practical examples </li>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END: CONTENT -->
@endsection