@extends('main.layouts.master')

@section('body')
    <!-- SECTION -->
    <div>
        <p></p>
    </div>
    <div class="hr-title hr-long center"><abbr>@lang('web.team_title')</abbr> </div>
    <section>
        <div class="container">

            <!--Team members -->
            <!-- <div class="hr-title hr-long center"><abbr>Echipa de conducere</abbr> </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <img src="{{URL::asset('assets/images/team/ScafaCristian.jpg')}}" class="img-responsive img-rounded"
                            alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Cristian Scafa</h4>
                                <p class="subtitle">@lang('web.team_cristian_title')</p>
                            </div>
                            <div class="panel-body">
                                <p align="justify">
                                    @lang('web.team_cristian_desc')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="line">

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="img">
                            <img src="{{URL::asset('assets/images/team/DanManolescu.jpg')}}"
                                class="img-responsive img-rounded" alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>@lang('web.team_dan_name')</h4>
                                <p class="subtitle">@lang('web.team_dan_title')</p>
                            </div>
                            <div class="panel-body">
                                <p align="justify">
                                    @lang('web.team_dan_desc_full')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="line">

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="img">
                            <img src="{{URL::asset('assets/images/team/LuminitaObaciu.jpg')}}"
                                class="img-responsive img-rounded" alt="">
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default" style="height:auto">
                            <div class="panel-heading">
                                <h4>@lang('web.team_luminita_name')</h4>
                                <p class="subtitle">@lang('web.team_luminita_title')</p>
                            </div>
                            <div class="panel-body">
                                <p align="justify">
                                    @lang('web.team_luminita_desc_full')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="line">

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="img">
                            <img src="{{URL::asset('assets/images/team/RomulusBadea.jpg')}}"
                                class="img-responsive img-rounded" alt=""> </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>@lang('web.team_romulus_name')</h4>
                                <p class="subtitle">@lang('web.team_romulus_title')</p>
                            </div>
                            <div class="panel-body">
                                <p align="justify">
                                    @lang('web.team_romulus_desc_full')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="line">

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="img">
                            <img src="{{URL::asset('assets/images/team/MihaelaRiscoMartin.jpg')}}"
                                class="img-responsive img-rounded" alt=""> </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>@lang('web.team_mihaela_name')</h4>
                                <p class="subtitle">@lang('web.team_mihaela_title')</p>
                            </div>
                            <div class="panel-body">
                                <p align="justify">
                                    @lang('web.team_mihaela_desc')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="line">

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="img">
                            <img src="{{URL::asset('assets/images/team/MonicaStefan.jpg')}}"
                                class="img-responsive img-rounded" alt=""> </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>@lang('web.team_monica_name')</h4>
                                <p class="subtitle">@lang('web.team_monica_title')</p>
                            </div>
                            <div class="panel-body">
                                <p align="justify">
                                    @lang('web.team_monica_desc')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="line">

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="img">
                            <img src="{{URL::asset('assets/images/team/LeonardScafa.jpg')}}"
                                class="img-responsive img-rounded" alt=""> </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>@lang('web.team_leonard_name')</h4>
                                <p class="subtitle">@lang('web.team_leonard_title')</p>
                            </div>
                            <div class="panel-body">
                                <p align="justify">
                                    @lang('web.team_leonard_desc')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="line">
        </div>
    </section>
@endsection
<!--</body>-->