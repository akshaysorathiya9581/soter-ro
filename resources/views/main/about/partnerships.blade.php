@extends('main.layouts.master')

@section('body')

    <!-- SECTION -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="hr-title hr-long center"><abbr>Parteneriate</abbr> </div>
                <div class="col-md-12">

                    <!--<div class="col-md-6">
                            <h2 class="p-t-10">Beginig with 1 Mai 2018 <br/> Soter & Partners is a <strong><a href="https://www.morisonksi.com/" target="_blank">Morison KSI</a></strong> member.</h2>
                        </div>
                        <div class="col-md-6 v">
                            <a href="https://www.morisonksi.com/" target="_blank"> <img height="90%" width="90%" src="{{URL::asset('assets/images/presentation/MorisonKSi.png')}}" alt=""></a>
                            <a href="@lang('route.morisonksi')" ><h5 class="ac-title" align="right" > more ...</h5></a>
                        </div>

                        <div class="row">
                            <hr class="space-xmedium m-r-20">
                        </div>-->
                    <div class="col-md-6">
                        <h2 class="p-t-10">Beginig with 2019 <br /> Soter & Partners is a partener with <a
                                href="https://iflow.ro/" target="_blank">iFlow</a>.</h2>
                    </div>

                    <div class="col-md-6" align="center">
                        <a href="https://iflow.ro/" target="_blank"> <img height="68%" width="68%"
                                src="{{URL::asset('assets/images/presentation/iflow.png')}}" alt=""></a>
                        <a href="@lang('route.iflow')">
                            <h5 class="ac-title" align="right"> more...</h5>
                        </a>
                    </div>
                    <div class="row">
                        <hr class="space-xmedium m-r-20">
                    </div>
                    <div class="col-md-6">
                        <h2 class="p-t-10">Beginig with 16.03.2023 <br /> Soter & Partners is a partener with <a
                                href="https://consiergo.ro/" target="_blank">Consiergo</a>.</h2>
                    </div>
                    <div class="col-md-6" align="center">
                        <a href="https://consiergo.ro/" target="_blank"> <img height="68%" width="68%"
                                src="{{URL::asset('assets/images/presentation/logo-auriu-site-1.png')}}" alt=""></a>
                        <a href="@lang('route.consiergo')">
                            <h5 class="ac-title" align="right"> mai mult ...</h5>
                        </a>
                    </div>
                    <div class="row">
                        <hr class="space-xmedium m-r-20">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: CONTENT -->
@endsection