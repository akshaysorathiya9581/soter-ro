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
                            <h2>@lang('web.compound_title')</h2>
                            <hr>

                            <div class="blockquote">
                                <p class="base lastP">
                                    @lang('web.compound_intro')
                                </p>

                                <ul>
                                    <li>@lang('web.compound_soter')</li>
                                    <li>@lang('web.compound_audit')</li>
                                    <li>@lang('web.compound_hr')</li>
                                    <li>@lang('web.compound_act')</li>
                                    <li>@lang('web.compound_express')</li>
                                    <li>@lang('web.compound_network')</li>
                                    <li>@lang('web.compound_amt')</li>
                                    <li>@lang('web.compound_property')</li>
                                    <li>@lang('web.compound_tax')</li>
                                    <li>@lang('web.compound_accounting')</li>
                                    <li>@lang('web.compound_mobility')</li>
                                    <li>@lang('web.compound_lg')</li>
                                </ul>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<!--</body>-->