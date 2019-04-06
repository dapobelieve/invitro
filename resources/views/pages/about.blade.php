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
                    <div class="inline-block topmargin_30">
                        <ul class="list2 checklist color2 grey">
                            <li>Tenderloin boudin rump capicola </li>
                            <li>Ball tip turkey tri-tip drumstick sho</li>
                            <li>Ribs bacon swine venison corned</li>
                        </ul>
                    </div>
                    <p>Ground round doner meatloaf turducken, jowl meatball chuck ham hock corned beef pork belly rump porchetta tail. Pancetta flank swine, shankle pork chop hamburger picanha capicola burgdoggen boudin. Ground round cupim turkey boudin pork andouille.
                        Shoulder tongue biltong hamburger, cow filet mignon t-bone corned beef kielbasa jowl. Capicola biltong ham hock doner bacon short ribs meatloaf salami. Bacon spare ribs kielbasa pastrami beef. Ground round burgdoggen doner chicken short ribs,
                        jerky biltong pork loin shank picanha flank corned beef rump pig. </p>
                </div>
            </div>
        </div>
    </section>
@stop