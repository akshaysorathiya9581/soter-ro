@extends('main.layouts.master')

@section('body')
    @includeFirst(
        [
            'main.services.partials.tax_' . app()->getLocale(),
            'main.services.partials.tax_ro',
        ]
    )
@endsection
