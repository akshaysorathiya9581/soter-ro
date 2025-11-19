<!-- Header -->
<header id="header" class="header-transparent">
    <div id="header-wrap">
        <div class="container">

            <div id="logo">
                <a href="{{ route('home') }}" class="navbar-left"
                    data-dark-logo="{{ URL::asset('assets/images/logo.png') }}">
                    <img class="fa" src="{{ URL::asset('assets/images/logo.png') }}" alt="Soter and Partners SRL">
                </a>
            </div>
            <div class="nav-main-menu-responsive">
                <button type="button" class="lines-button x">
                    <span class="lines"></span>
                </button>
            </div>

            <!--NAVIGATION-->
            <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                <div class="container">
                    <nav id="mainMenu" class="main-menu mega-menu">
                        <ul class="main-menu nav nav-pills">
                            <li><a href="{{ route('home') }}">@lang('web.acasa_menu')</i></a></li>
                            <li class="dropdown"> <a href="#">@lang('web.despre_menu')<i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="@lang('team')">@lang('web.echipa_menu')</a></li>
                                    <li><a href="@lang('awards')">@lang('web.premii_menu')</a></li>
                                    <li><a href="@lang('history')">@lang('web.istoric_menu')</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="@lang('route.grup')">@lang('web.grup_menu')</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="@lang('division')">@lang('web.divizare2025_menu')</a>
                                            </li>
                                            <li>
                                                <a href="@lang('compound_f')">@lang('web.componenta_menu')</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="@lang('route.grup')">@lang('web.grup_menu')</a></li>-->
                                    <li><a href="@lang('partnerships')">@lang('web.parteneriate_menu')</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"> 
                                <a href="#">
                                    @lang('web.servicii_menu')<i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="@lang('workshops')">@lang('web.ateliere_menu')</a></li>
                                    <li><a href="@lang('accounting')">@lang('web.contabilitate_menu')</a></li>
                                    <li><a href="@lang('payroll')">@lang('web.salarizare_menu')</a></li>
                                    <li><a href="@lang('expat')">@lang('web.expatriati_menu')</a></li>
                                    <li><a href="@lang('audit')">@lang('web.audit_menu')</a></li>
                                    <li><a href="@lang('tax')">@lang('web.taxe_menu')</a></li>
                                    <li><a href="@lang('workforce')">@lang('web.importfm_menu')</a></li>
                                    <li><a href="@lang('e-transporten')">@lang('web.transport_consultanta_menu')</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#">@lang('web.cariere_menu') <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="@lang('stories')">@lang('web.povesti_menu')</a></li>
                                    <li> <a href="@lang('careers')">@lang('web.cariere_menu')</a></li>
                                </ul>
                            </li>

                            <li> <a href="@lang('route.actualitate')">@lang('web.actualitate_menu')</a></li>

                            <!--<li class="dropdown">
                                <a href="#">@lang('web.proiecte_menu') <i class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#">@lang('web.brexit_menu')  </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="@lang('route.brexit')">@lang('web.despre_brexit_menu')</a></li>
                                            <li> <a href="@lang('route.materiale_brexit')">@lang('web.materiale_brexit_menu')</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

                            <li class="dropdown">
                                <a href="#">@lang('web.politici_menu') <i class="fa fa-angle-down"></i> </a>

                                <ul class="dropdown-menu">
                                    <li> <a href="@lang('gdpren')">@lang('web.gdpr_menu')</a></li>
                                    <li class="dropdown-submenu"><a
                                            href="@lang('route.politica')">@lang('web.politica_conf_menu')</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="@lang('disclosure')">@lang('web.dezvaluire_menu')</a>
                                            </li>
                                            <li><a
                                                    href="@lang('subcontractor')">@lang('web.subcontractanti_menu')</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="@lang('invoices')">@lang('web.comun_fact_menu') </a></li>
                                </ul>
                            </li>

                            <li> <a href="@lang('contactus')">@lang('web.contact_menu')</a></li>

                            <li class="dropdown"> 
                                <a href="#">
                                    <i class="fa fa-flag"></i>
                                    @if (LaravelLocalization::getCurrentLocale() == 'ro')
                                        RO
                                    @else
                                        EN
                                    @endif <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ LaravelLocalization::getLocalizedURL('ro', null, [], true) }}">@lang('web.romana_menu')
                                            @if (LaravelLocalization::getCurrentLocale() == 'ro')
                                                <i class="fa fa-flag"></i>
                                            @endif
                                        </a>
                                    </li>
                                    <li><a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">@lang('web.engleza_menu')
                                            @if (LaravelLocalization::getCurrentLocale() == 'en')
                                                <i class="fa fa-flag"></i>
                                            @endif
                                        </a></li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--END: NAVIGATION-->
        </div>
    </div>
</header>
<!-- END: HEADER -->