@extends('main.layouts.master')

@section('body')

    <section>

        <!-- Content -->
        <style>
            .base .lastP {
                color: purple;
            }
        </style>
        <div class="container">
            <div id="blog" class="single-post">
                <!-- Post single item-->
                <div class="post-item">
                    <div class="post-item-wrap">

                        <div class="post-item-description">
                            <h2>@lang('web.division_title')</h2>

                            <hr>

                            <div class="blockquote">
                                <p class="base lastP">@lang('web.division_intro')</p>
                                <ul>
                                    <li><strong><em>@lang('web.division_company_accounting')</em></strong> </li>
                                    <li><strong><em>@lang('web.division_company_lg')</em></strong> </li>
                                    <li><strong><em>@lang('web.division_company_tax')</em></strong> </li>
                                    <li><strong><em>@lang('web.division_company_mobility')</em></strong> </li>
                                </ul>
                                <br><br>
                                <p>@lang('web.division_additional_title')</p>
                                <ul>
                                    <li>
                                        <strong><em>@lang('web.division_additional_audit')</em></strong>
                                    </li>
                                    <li>
                                        <strong><em>@lang('web.division_additional_express')</em></strong>
                                    </li>
                                </ul>
                                <p style="padding-bottom:2px;">@lang('web.division_hub_text')</p>
                                <p style="padding-bottom:2px;">@lang('web.division_contact_text')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
<!--</body>-->