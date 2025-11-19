@extends('main.layouts.master')

@section('body')

    @includeFirst([
        'main.services.partials.atelier-consultanta_' . app()->getLocale(),
        'main.services.partials.atelier-consultanta_ro',
    ])

@endsection

