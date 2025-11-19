@extends('main.layouts.master')

@section('body')
    @includeFirst(
        [
            'main.services.partials.payroll_' . app()->getLocale(),
            'main.services.partials.payroll_ro',
        ]
    )
@endsection
