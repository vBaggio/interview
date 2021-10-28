@extends('site.template')

@section('body-content')
    @include('main.components.nav')

    <div class="container">
        @yield('content')
    </div>

    @include('main.components.footer')
@endsection
