@extends('main.layouts.master')

@section('body')

    @includeFirst([
        'main.services.partials.e-transport_' . app()->getLocale(),
        'main.services.partials.e-transport_en',
    ])

@endsection