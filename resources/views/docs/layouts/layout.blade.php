{{-- Principal layout with aside and container, use in: http://127.0.0.1:8000/3.52.0/Phaser.Game --}}
@extends('app')

@section('content')
@include('docs.layouts.header')
<div class="container-fluid layout-container">
    <div class="row">
        <div class="col-12 col-lg-4 col-xxl-3 d-none d-lg-block px-0 aside-container">
            <div class="aside-fixed">
                @yield('aside')
            </div>
        </div>
        <div class="col-12 col-lg-8 col-xxl-9 pt-4 ps-4">
            @yield('section_content')
        </div>
    </div>
</div>
<div id="react-scroll-up"></div>
@endsection
