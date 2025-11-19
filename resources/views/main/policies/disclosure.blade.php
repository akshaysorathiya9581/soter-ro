@extends('main.layouts.master')

@section('body')

    <div>
        <p></p>
    </div>
    
    <section>

        <div class="container">
            <div id="blog" class="single-post">
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-item-description">
                            <h2>@lang('web.disclosure_title')</h2>
                            <div>
                                <hr>
                            </div>
                            <div class="blockquote">
                                <p>{!! __('web.disclosure_intro1') !!}</p>
                                <p>{!! __('web.disclosure_intro2') !!}</p>
                                <ul>
                                    @foreach (trans('web.disclosure_list') as $item)
                                        <li>{!! $item !!}</li>
                                    @endforeach
                                </ul>
                                <p>{!! __('web.disclosure_note') !!}</p>
                            </div>

                            <div class="blockquote">
                                @foreach (trans('web.disclosure_paragraphs_bottom') as $paragraph)
                                    <p>{!! $paragraph !!}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection
<!--</body>-->