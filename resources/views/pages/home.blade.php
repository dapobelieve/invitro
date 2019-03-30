@extends('pages.template')

@section('page.title', 'Welcome to '. config('site.site.name'))

@section('content')
    @include('layout._slider')
    @include('layout._about')
    @include('layout._blog')
    @include('layout._products')
    @include('layout._features')
    @include('layout._counter')
    @include('layout._pipeline')
    @include('layout._testimonials')
    @include('layout._contact')
    @include('layout._partners')
@stop