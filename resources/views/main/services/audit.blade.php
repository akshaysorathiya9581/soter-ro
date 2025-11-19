@extends('main.layouts.master')

@section('body')
    @includeFirst(
        [
            'main.services.partials.audit_' . app()->getLocale(),
            'main.services.partials.audit_ro',
        ]
    )
@endsection
