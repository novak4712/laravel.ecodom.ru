@extends('layouts.site')

@section('style_gallery')

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
