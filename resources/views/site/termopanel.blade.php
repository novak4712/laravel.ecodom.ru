@extends('layouts.site')

@section('header')
    @include('site.component.nav')
@endsection

@section('page_content')
    @include('site.component.tpContent')
@endsection

@section('footer')
    @include('site.component.footer')
@endsection

@section('forms')
    @include('site.component.formOrderTp')
@endsection