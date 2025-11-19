@extends('main.layouts.master')

@section('body')
    @includeFirst(
        [
            'main.services.partials.workshops_' . app()->getLocale(),
            'main.services.partials.workshops_ro',
        ]
    )
@endsection
