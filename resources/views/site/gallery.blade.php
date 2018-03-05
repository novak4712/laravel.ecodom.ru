@extends('layouts.site')

@section('style_gallery')
    <link rel="stylesheet" href="{{ asset('app/css/normalize.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('app/css/demo.css') }}" type="text/css"/>
@endsection

@section('header')
    @include('site.component.nav')
@endsection

@section('page_content')
    @include('site.component.galleryContent')
@endsection

@section('footer')
    @include('site.component.footer')
@endsection
