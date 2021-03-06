@extends('pages.template')

@section('page.title', 'Contact Us | '. config('site.site.name'))

@section('content')

<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>We would love to hear from you.</h2>
                            <ol class="breadcrumb highlightlinks">
                                <li>
                                    <a href="{{ route('home')  }}">
                            Home
                        </a> </li>
                                <li class="active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ls section_padding_bottom_75">
                <div class="container">
                    
                    <div class="row topmargin_40">
                        <div class="col-sm-4 to_animate" data-animation="pullDown">
                            <div class="teaser text-center">
                                <div class="teaser_icon highlight2 size_normal"> <i class="rt-icon2-phone5"></i> </div>
                                <p> <span class="grey">Phone:</span> {{ config('site.site.phone') }}<br>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 to_animate" data-animation="pullDown">
                            <div class="teaser text-center">
                                <div class="teaser_icon highlight2 size_normal"> <i class="rt-icon2-location2"></i> </div>
                                <p> {{ config('site.site.address') }},<br>
                                    {{ config('site.site.city') }}, {{ config('site.site.country') }}</p>
                            </div>
                        </div>
                        <div class="col-sm-4 to_animate" data-animation="pullDown">
                            <div class="teaser text-center">
                                <div class="teaser_icon highlight2 size_normal"> <i class="rt-icon2-mail"></i> </div>
                                <p>{{ config('site.site.email') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row topmargin_40">
                        <div class="col-sm-12 to_animate">
                            <form class="contact-form columns_padding_5" method="POST" action="{{ route('mail-message') }}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="form-group">
                                            <label for="name">Full Name <span class="required">*</span></label>
                                            <i class="fa fa-user highlight2" aria-hidden="true"></i>
                                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">                                          </p>
                                        <p class="form-group"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">                                           </p>
                                        <p class="form-group"> <label for="subject">Subject<span class="required">*</span></label> <i class="fa fa-flag highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">                                          </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="contact-form-message form-group"> <label for="message">Message</label> <i class="fa fa-comment highlight2" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="contact-form-submit text-center topmargin_10"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color2">Send Message</button> </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

@stop