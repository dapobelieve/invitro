<footer class="page_footer ds color section_padding_top_100 section_padding_bottom_65 table_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_text topmargin_25">
                                <h4 class="widget-title">About Us</h4>
                                <p>Invitro-fertilization academy offers a range of courses,
                                    training and practical workshops geared to employers and employees within the IVF Industry.</p>
                                <p class="darklinks">
                                    <a class="social-icon soc-facebook" href="#" title="Facebook"></a>
                                    <a class="social-icon soc-twitter" href="#" title="Twitter"></a>
                                    <a class="social-icon soc-google" href="#" title="Google+"></a>
                                    <a class="social-icon soc-youtube" href="#" title="Youtube"></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_instagram topmargin_25">
                                <h4 class="widget-title">Useful Links</h4>
                                <ul style="list-style: none; display: flex; flex-direction: column; justify-content: space-evenly">
                                    <li><a href="{{ route('gallery') }}}">Gallery</a></li>
                                    <li><a href="{{ url('shop#/products') }}">Shop</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_text topmargin_25">
                                <h4 class="widget-title">Contact Us</h4>
                                <div class="media">
                                    <div class="media-left rightpadding_10"> <i class="fa fa-map-marker highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body"> {{ config('site.site.address') }}, <br>
                                        {{ config('site.site.city') }}
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left rightpadding_10"> <i class="fa fa-phone highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body"> {{ config('site.site.phone') }} </div>
                                </div>
                                <div class="media">
                                    <div class="media-left rightpadding_10"> <i class="fa fa-pencil highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body highlight2links">
                                            {{ config('site.site.email') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>