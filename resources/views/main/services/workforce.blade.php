@extends('main.layouts.master')

@section('body')
    @includeFirst(
        [
            'main.services.partials.workforce_' . app()->getLocale(),
            'main.services.partials.workforce_ro',
        ]
    )
@endsection
