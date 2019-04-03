<section class="page_topline cs main_color2 table_section table_section_sm section_padding_top_5 section_padding_bottom_5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 text-center text-sm-left">
                            <div> <i class="fa fa-clock-o rightpadding_5" aria-hidden="true"></i> Opening Hours: Mon - Sat 8.00 - 18.00 </div>
                        </div>
                        <div class="col-sm-4 text-center text-sm-right greylinks">
                            <span class="rightpadding_10">Follow Us:</span>
                            <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                            <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                            <a class="social-icon color-icon soc-google"
                                href="#" title="Twitter"></a>
                            <a class="social-icon color-icon soc-linkedin" href="#" title="Twitter"></a>
                            <a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page_toplogo table_section table_section_md ls section_padding_top_25 section_padding_bottom_25">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center text-md-left"> 
                            <a href="{{ route('home') }}" class="logo top_logo">
                                <img src="/assets/images/new.png" alt="">
                            </a> 
                        </div>
                        <div class="col-md-9 text-center text-md-right">
                            <div class="inline-teasers-wrap">
                                <div class="teaser small-teaser media">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon size_small border_icon highlight2 rounded"> <i class="rt-icon2-phone2"></i> </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 style="margin-bottom: .2em;">{{ config('site.site.phone') }}</h4>
                                        <p class="greylinks fontsize_12"> 
                                            <a href="mailto:pharmacom@example.com">{{ config('site.site.email') }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="teaser small-teaser media">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon size_small border_icon highlight2 rounded"> <i class="rt-icon2-map-pin"></i> </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 style="margin-bottom: .2em;">{{ config('site.site.address') }}</h4>
                                        <p class="greylinks fontsize_12"> {{ config('site.site.city') }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>