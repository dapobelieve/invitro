@extends('pages.template')

@section('page.title', 'Gallery | '. config('site.site.name'))

@section('content')
    <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Gallery Tile</h2>
                    <ol class="breadcrumb highlightlinks">
                        <li> <a href="{{ route('home') }}">
                                Home
                            </a> </li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ls page_portfolio section_padding_top_150 section_padding_bottom_50 columns_padding_0 columns_margin_0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    {{--<div class="filters isotope_filters text-center greylinks">--}}
                        {{--<a href="#" data-filter="*" class="selected">All</a>--}}
                        {{--<a href="#" data-filter=".medical">Medical</a>--}}
                        {{--<a href="#" data-filter=".clinic">Clinic</a>--}}
                        {{--<a href="#" data-filter=".dental">Dental</a>--}}
                        {{--<a href="#" data-filter=".pharmacists">Pharmacists</a>--}}
                    {{--</div>--}}
                    <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/2 (1).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/2 (2).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/2 (3).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/2 (4).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (1).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (2).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (3).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (4).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (5).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (6).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (7).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (8).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (9).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (10).jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item col-lg-4 col-md-4 col-sm-6 dental">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="/assets/images/ivf/1 (11).jpeg" alt="">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- eof .isotope_container.row -->
                </div>
            </div>
        </div>
    </section>
@stop