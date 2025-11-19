@extends('main.layouts.master')

@section('body')
    @includeFirst(
        [
            'main.services.partials.accounting_' . app()->getLocale(),
            'main.services.partials.accounting_ro',
        ]
    )
@endsection