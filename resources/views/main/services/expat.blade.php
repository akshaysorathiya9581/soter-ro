@extends('main.layouts.master')

@section('body')
    @includeFirst(
        [
            'main.services.partials.expat_' . app()->getLocale(),
            'main.services.partials.expat_ro',
        ]
    )
@endsection
