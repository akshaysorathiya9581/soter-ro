@extends('main.layouts.master')

@section('body')

    <div>
        <p></p>
    </div>

    <section>

        <div class="container">
            <div id="blog" class="single-post">
                <!-- Post single item-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-item-description">
                            <h2>@lang('web.subcontractors_title')</h2>
                            <div>
                                <hr>
                            </div>
                            <div class="blockquote">
                                <ul>
                                    @foreach (trans('web.subcontractors_entries') as $entry)
                                        <li>{!! $entry !!}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="blockquote">
                                <h4>@lang('web.subcontractors_dpo_title')</h4>
                                <ul>
                                    @foreach (trans('web.subcontractors_dpo_entries') as $entry)
                                        <li>{!! $entry !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

@endsection
<!--</body>-->