@extends('main.layouts.master')

@section('body')
    @includeFirst(
        [
            'main.partials.acasa_' . app()->getLocale(),
            'main.partials.acasa_ro',
        ]
    )
@endsection
