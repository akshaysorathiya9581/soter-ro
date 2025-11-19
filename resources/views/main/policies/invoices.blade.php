@extends('main.layouts.master')

@section('body')


    <div>
        <p></p>
    </div>
    <!-- SECTION -->
    <section>

        <div class="container">
            <div id="blog" class="single-post">
                <!-- Post single item-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-item-description">
                            <h2>@lang('web.invoices_title')</h2>
                            <div>
                                <hr>
                            </div>
                            <p>{!! __('web.invoices_intro') !!}</p>
                            <div class="blockquote">
                                <p>{!! __('web.invoices_para1') !!}</p>
                            </div>
                            <div class="blockquote">
                                <p>{!! __('web.invoices_para2') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
<!--</body>-->