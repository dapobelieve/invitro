@extends('pages.template')

@section('page.title', 'About Us | '. config('site.site.name'))

@section('content')
    <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>About Us</h2>
                    <ol class="breadcrumb highlightlinks">
                        <li> <a href="{{ route('home') }}">
                                Home
                            </a> </li>
                        <li> <a href="{{ route('about') }}">About Us</a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ls section_padding_top_150 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"> <img src="/assets/images/gallery/ivf.jpg" alt="" class="alignleft">
                    <h2 class="section_header">Research &amp; Preclinical</h2>
                    <p>One of the important requirements for the certification or accreditation of IVF clinics worldwide is professional development. Clinicians, laboratory professionals,nurses working in IVF clinics and human fertility services requires state-of-the-art training and practical skills to prepare them to meet global standard. Invitro-fertilization academy offers a range of courses, training and practical workshops geared to employers and employees within the IVF Industry.</p>
                    <p>Basic and advanced courses are available for:</p>
                    <div class="inline-block topmargin_30">
                        <ul class="list2 checklist color2 grey">
                            <li>IVF specialist </li>
                            <li>Embryologist</li>
                            <li>Andrologist</li>
                            <li>IVF Nurses</li>
                        </ul>
                    </div>
                    <p>Our Trainings are designed to suit individuals or groups, depending on resources, requirements and skills.
                        There is also opportunity for clinical observership in our state of the art IVF clinic.
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop