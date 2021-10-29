@extends('site.template')

@section('body-content')
    @include('main.components.nav')

        @yield('content')

    @include('main.components.footer')
@endsection

@push('custom')
    <link href="/css/custom.css" rel="stylesheet">
@endpush
