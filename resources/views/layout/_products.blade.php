<section id="products" class="ds color parallax page_gallery section_padding_top_100 section_padding_bottom_150 columns_padding_25">
    <div class="container">
        <div class="row display_table_md">
            <div class="col-md-6 col-md-push-6 display_table_cell_md">
                <img src="/assets/images/gallery/01.jpg" alt="" class="rounded">
            </div>
            <div class="col-md-6 col-md-pull-6 display_table_cell_md">
                <h2 class="section_header">See Our Products</h2>
                <p class="highlight bottommargin_20">
                    <strong>Checkout our store for some of products
                    </strong>
                </p>
                <p class="topmargin_30">
                    <a href="{{ url('shop#/products') }}" class="theme_button color2 inverse">Visit Store</a>
                </p>
            </div>
        </div>
        <div class="row topmargin_30">
            <div class="col-sm-12">
                <div class="owl-carousel gallery-carousel"
                     data-responsive-lg="5"
                     data-responsive-md="4"
                     data-responsive-sm="3"
                     data-responsive-xs="1"
                     data-nav="true">
                    @foreach($products as $image)
                    <div class="gallery-item rounded">
                        <div class="item-media rounded overflow_hidden">
                            {{--<p>{{ $image->image }}</p>--}}
                            <img src="{{ json_decode($image->image, true)['secure_url'] }}" alt="">
                            <div class="media-links inverse">
                                {{--<a href="store/crop/{{ $item->image }}"--}}
                                   {{--class="abs-link prettyPhoto" title=""--}}
                                   {{--data-gal="prettyPhoto[gal]">--}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>