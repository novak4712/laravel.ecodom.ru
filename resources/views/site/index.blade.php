@extends('layouts.site')

@section('header')
    @include('site.component.header')
@endsection

@section('page_content')
    @include('site.component.mainContent')
@endsection

@section('footer')
    @include('site.component.footer')
@endsection

@section('forms')
    @include('site.component.formContact')
    @include('site.component.contactButton')
@endsection









