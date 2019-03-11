<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
@include('layout._head')

<body>
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>
    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> 
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
            <i class="rt-icon2-cross2"></i>
        </span>
      </button>
      <div class="widget widget_search">
          <form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/pharma/">
              <div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button">Search</button> </form>
      </div>
    </div>
    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls with_padding">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
        <ul class="list-unstyled">
            <li>Message To User</li>
        </ul>
        -->
        </div>
    </div>
    <!-- eof .modal -->
    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">
            <!-- template sections -->
            <section class="page_topline cs main_color2 table_section table_section_sm section_padding_top_5 section_padding_bottom_5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 text-center text-sm-left">
                            <div> <i class="fa fa-clock-o rightpadding_5" aria-hidden="true"></i> Opening Hours: Mon - Sat 8.00 - 18.00 </div>
                        </div>
                        <div class="col-sm-4 text-center text-sm-right greylinks"> <span class="rightpadding_10">Follow Us:</span> <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a> <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a> <a class="social-icon color-icon soc-google"
                                href="#" title="Twitter"></a> <a class="social-icon color-icon soc-linkedin" href="#" title="Twitter"></a> <a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a> </div>
                    </div>
                </div>
            </section>
            <section class="page_toplogo table_section table_section_md ls section_padding_top_25 section_padding_bottom_25">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center text-md-left"> 
                            <a href="index.html" class="logo top_logo">
                                <img src="images/new.png" alt="">
                            </a> 
                        </div>
                        <div class="col-md-9 text-center text-md-right">
                            <div class="inline-teasers-wrap">
                                <div class="teaser small-teaser media">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon size_small border_icon highlight2 rounded"> <i class="rt-icon2-pen"></i> </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4>0 (800) 123 4567</h4>
                                        <p class="greylinks fontsize_12"> <a href="mailto:pharmacom@example.com">pharmacom@example.com</a> </p>
                                    </div>
                                </div>
                                <div class="teaser small-teaser media">
                                    <div class="media-left media-middle">
                                        <div class="teaser_icon size_small border_icon highlight2 rounded"> <i class="rt-icon2-map-pin"></i> </div>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4>482 Address Street</h4>
                                        <p class="greylinks fontsize_12"> Address City, KS 66223 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <header class="page_header header_color toggler_left">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 display_table">
                            <div class="header_mainmenu display_table_cell">
                                <!-- main nav start -->
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li class="active"> <a href="index-2.html">Home</a>
                                            <ul>
                                                <li> <a href="index-2.html">Home</a> </li>
                                                <li> <a href="index-static.html">Home static intro</a> </li>
                                                <li> <a href="index-single.html">Home single page</a> </li>
                                            </ul>
                                        </li>
                                        <li> <a href="about.html">Trainings</a>
                                            <ul>
                                                <!-- features -->
                                                <li> <a href="shortcodes_teasers.html">Shortcodes &amp; Widgets</a>
                                                    <ul>
                                                        <li> <a href="shortcodes_typography.html">Typography</a> </li>
                                                        <li> <a href="shortcodes_buttons.html">Buttons</a> </li>
                                                        <li> <a href="shortcodes_teasers.html">Teasers</a> </li>
                                                        <li> <a href="shortcodes_progress.html">Progress</a> </li>
                                                        <li> <a href="shortcodes_tabs.html">Tabs &amp; Collapse</a> </li>
                                                        <li> <a href="shortcodes_bootstrap.html">Bootstrap Elements</a> </li>
                                                        <li> <a href="shortcodes_widgets.html">Widgets</a> </li>
                                                        <li> <a href="shortcodes_animation.html">Animation</a> </li>
                                                        <li> <a href="shortcodes_icons.html">Template Icons</a> </li>
                                                        <li> <a href="shortcodes_socialicons.html">Social Icons</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof features -->
                                                <li> <a href="about.html">About</a> </li>
                                                <li> <a href="departments.html">Departments</a>
                                                    <ul>
                                                        <li> <a href="departments.html">Departments</a> </li>
                                                        <li> <a href="department-single.html">Department Single</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="careers.html">Careers</a> </li>
                                                <li> <a href="timetable.html">Timetable</a> </li>
                                                <!-- events -->
                                                <li> <a href="events-left.html">Events</a>
                                                    <ul>
                                                        <li> <a href="events-left.html">Left Sidebar</a> </li>
                                                        <li> <a href="events-right.html">Right Sidebar</a> </li>
                                                        <li> <a href="events-full.html">Full Width</a> </li>
                                                        <li> <a href="event-single-left.html">Single Event</a>
                                                            <ul>
                                                                <li> <a href="event-single-left.html">Left Sidebar</a> </li>
                                                                <li> <a href="event-single-right.html">Right Sidebar</a> </li>
                                                                <li> <a href="event-single-full.html">Full Width</a> </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof events -->
                                                <!-- shop -->
                                                <li> <a href="shop-right.html">Shop</a>
                                                    <ul>
                                                        <li> <a href="shop-right.html">Shop</a> </li>
                                                        <li> <a href="shop-product-right.html">Single Product</a> </li>
                                                        <li> <a href="shop-cart-right.html">Shopping Cart</a> </li>
                                                        <li> <a href="shop-checkout-right.html">Checkout</a> </li>
                                                        <li> <a href="shop-register.html">Registration</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof shop -->
                                                <li> <a href="team.html">Team</a>
                                                    <ul>
                                                        <li> <a href="team.html">Team</a> </li>
                                                        <li> <a href="team-single.html">Team Member</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="comingsoon1.html">Comingsoon</a>
                                                    <ul>
                                                        <li> <a href="comingsoon1.html">Comingsoon</a> </li>
                                                        <li> <a href="comingsoon2.html">Comingsoon 2</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="faq.html">FAQ</a>
                                                    <ul>
                                                        <li> <a href="faq.html">FAQ</a> </li>
                                                        <li> <a href="faq2.html">FAQ 2</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="404.html">404</a>
                                                    <ul>
                                                        <li> <a href="404.html">404</a> </li>
                                                        <li> <a href="4042.html">404 2</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- eof pages -->
                                        <li> <a href="pipeline.html">Store</a>
                                            <ul>
                                                <li> <a href="pipeline.html">Pipeline</a> </li>
                                                <li> <a href="pipeline-single.html">Pipeline Single</a> </li>
                                            </ul>
                                        </li>
                                        <!-- <li> <a href="#">Features</a>
                                            <div class="mega-menu">
                                                <ul class="mega-menu-row">
                                                    <li class="mega-menu-col"> <a href="#">Headers</a>
                                                        <ul>
                                                            <li> <a href="header1.html">Header Type 1</a> </li>
                                                            <li> <a href="header2.html">Header Type 2</a> </li>
                                                            <li> <a href="header3.html">Header Type 3</a> </li>
                                                            <li> <a href="header4.html">Header Type 4</a> </li>
                                                            <li> <a href="header5.html">Header Type 5</a> </li>
                                                            <li> <a href="header6.html">Header Type 6</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col"> <a href="#">Side Menus</a>
                                                        <ul>
                                                            <li> <a href="header_side1.html">Slide Left Light</a> </li>
                                                            <li> <a href="header_side2.html">Slide Right Light</a> </li>
                                                            <li> <a href="header_side3.html">Push Left Light</a> </li>
                                                            <li> <a href="header_side4.html">Push Right Light</a> </li>
                                                            <li> <a href="header_side5.html">Slide Left Dark</a> </li>
                                                            <li> <a href="header_side6.html">Slide Right Dark</a> </li>
                                                            <li> <a href="header_side7.html">Push Left Dark</a> </li>
                                                            <li> <a href="header_side8.html">Push Right Dark</a> </li>
                                                            <li> <a href="header_side_superfish.html">Superfish Menu</a> </li>
                                                            <li> <a href="header_side_sticked.html">Sticked Menu</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col"> <a href="breadcrumbs1.html">Breadcrumbs</a>
                                                        <ul>
                                                            <li> <a href="breadcrumbs1.html">Breadcrumbs 1</a> </li>
                                                            <li> <a href="breadcrumbs2.html">Breadcrumbs 2</a> </li>
                                                            <li> <a href="breadcrumbs3.html">Breadcrumbs 3</a> </li>
                                                            <li> <a href="breadcrumbs4.html">Breadcrumbs 4</a> </li>
                                                            <li> <a href="breadcrumbs5.html">Breadcrumbs 5</a> </li>
                                                            <li> <a href="breadcrumbs6.html">Breadcrumbs 6</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col"> <a href="footer1.html">Footers</a>
                                                        <ul>
                                                            <li> <a href="footer1.html">Footer Type 1</a> </li>
                                                            <li> <a href="footer2.html">Footer Type 2</a> </li>
                                                            <li> <a href="footer3.html">Footer Type 3</a> </li>
                                                            <li> <a href="footer4.html">Footer Type 4</a> </li>
                                                            <li> <a href="footer5.html">Footer Type 5</a> </li>
                                                            <li> <a href="footer6.html">Footer Type 6</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col"> <a href="copyright1.html">Copyrights</a>
                                                        <ul>
                                                            <li> <a href="copyright1.html">Copyrights 1</a> </li>
                                                            <li> <a href="copyright2.html">Copyrights 2</a> </li>
                                                            <li> <a href="copyright3.html">Copyrights 3</a> </li>
                                                            <li> <a href="copyright4.html">Copyrights 4</a> </li>
                                                            <li> <a href="copyright5.html">Copyrights 5</a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li> -->
                                        <!-- eof features -->
                                        <!-- gallery -->
                                        <li> <a href="gallery-regular.html">Gallery</a>
                                            <ul>
                                                <!-- Gallery regular -->
                                                <li> <a href="gallery-regular.html">Gallery Regular</a>
                                                    <ul>
                                                        <li> <a href="gallery-regular.html">1 column</a> </li>
                                                        <li> <a href="gallery-regular-2-cols.html">2 columns</a> </li>
                                                        <li> <a href="gallery-regular-3-cols.html">3 columns</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery regular -->
                                                <!-- Gallery full width -->
                                                <li> <a href="gallery-fullwidth.html">Gallery Full Width</a>
                                                    <ul>
                                                        <li> <a href="gallery-fullwidth.html">2 column</a> </li>
                                                        <li> <a href="gallery-fullwidth-3-cols.html">3 columns</a> </li>
                                                        <li> <a href="gallery-fullwidth-4-cols.html">4 columns</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery full width -->
                                                <!-- Gallery extended -->
                                                <li> <a href="gallery-extended.html">Gallery Extended</a>
                                                    <ul>
                                                        <li> <a href="gallery-extended.html">1 column</a> </li>
                                                        <li> <a href="gallery-extended-2-cols.html">2 columns</a> </li>
                                                        <li> <a href="gallery-extended-3-cols.html">3 columns</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery extended -->
                                                <!-- Gallery carousel -->
                                                <li> <a href="gallery-carousel.html">Gallery Carousel</a>
                                                    <ul>
                                                        <li> <a href="gallery-carousel.html">1 column</a> </li>
                                                        <li> <a href="gallery-carousel-2-cols.html">2 columns</a> </li>
                                                        <li> <a href="gallery-carousel-3-cols.html">3 columns</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery carousel -->
                                                <!-- Gallery tile -->
                                                <li> <a href="gallery-tile.html">Gallery Tile</a> </li>
                                                <!-- eof Gallery tile -->
                                                <!-- Gallery left sidebar -->
                                                <li> <a href="gallery-left.html">Gallery Left Sidebar</a>
                                                    <ul>
                                                        <li> <a href="gallery-left.html">1 column</a> </li>
                                                        <li> <a href="gallery-left-2-cols.html">2 columns</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery left sidebar -->
                                                <!-- Gallery right sidebar -->
                                                <li> <a href="gallery-right.html">Gallery Right Sidebar</a>
                                                    <ul>
                                                        <li> <a href="gallery-right.html">1 column</a> </li>
                                                        <li> <a href="gallery-right-2-cols.html">2 columns</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery right sidebar -->
                                                <!-- Gallery item -->
                                                <li> <a href="gallery-single.html">Gallery Item</a>
                                                    <ul>
                                                        <li> <a href="gallery-single.html">Style 1</a> </li>
                                                        <li> <a href="gallery-single2.html">Style 2</a> </li>
                                                        <li> <a href="gallery-single3.html">Style 3</a> </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery item -->
                                            </ul>
                                        </li>
                                        <!-- eof Gallery -->
                                        <!-- blog -->
                                        <!-- <li> <a href="blog-right.html">Blog</a>
                                            <ul>
                                                <li> <a href="blog-right.html">Right Sidebar</a> </li>
                                                <li> <a href="blog-left.html">Left Sidebar</a> </li>
                                                <li> <a href="blog-full.html">No Sidebar</a> </li>
                                                <li> <a href="blog-mosaic.html">Blog Grid</a> </li>
                                                <li> <a href="blog-single-right.html">Post</a>
                                                    <ul>
                                                        <li> <a href="blog-single-right.html">Right Sidebar</a> </li>
                                                        <li> <a href="blog-single-left.html">Left Sidebar</a> </li>
                                                        <li> <a href="blog-single-full.html">No Sidebar</a> </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="blog-single-video-right.html">Video Post</a>
                                                    <ul>
                                                        <li> <a href="blog-single-video-right.html">Right Sidebar</a> </li>
                                                        <li> <a href="blog-single-video-left.html">Left Sidebar</a> </li>
                                                        <li> <a href="blog-single-video-full.html">No Sidebar</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!-- eof blog -->
                                        <!-- contacts -->
                                        <li> <a href="contact.html">Contacts</a>
                                            <ul>
                                                <li> <a href="contact.html">Contact 1</a> </li>
                                                <li> <a href="contact2.html">Contact 2</a> </li>
                                                <li> <a href="contact3.html">Contact 3</a> </li>
                                                <li> <a href="contact4.html">Contact 4</a> </li>
                                            </ul>
                                        </li>
                                        <!-- eof contacts -->
                                    </ul>
                                </nav>
                                <!-- eof main nav -->
                                <!-- header toggler --><span class="toggle_menu"><span></span></span>
                            </div>
                            <div class="header_right_buttons cs display_table_cell text-right">
                                <ul class="inline-list menu greylinks">
                                    <li> <a href="#" class="search_modal_button header-button">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a> </li>
                                    <li> <a href="shop-register.html" class="header-button">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a> </li>
                                    <li> <a href="shop-cart-right.html" class="header-button">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="intro_section ds color"> <img src="images/slide01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer to_animate with_corner_border with_padding huge-padding" data-animation="slideExpandUp">
                                        <h5 class="thin"> Our trainings are focused on </h5>
                                        <h2 class="highlight"> Developing Innovative<br> New Therapies... </h2>
                                        <p> Our mission is to build a healthier tomorrow for patients<br> with progressive non-viral liver diseases </p> <a href="pipeline.html" class="theme_button color2 inverse margin_0">
                                Discover Now
                            </a> <span class="bottom_corners"></span> </div>
                                </div>
                                <!-- eof .slide_description -->
                            </div>
                            <!-- eof .slide_description_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </section>
            <section id="about" class="ls section_padding_top_150 section_padding_bottom_150">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="section_header"> Welcome to Our Site! </h2>
                            <p>We welcome applications from recent medical school graduates, residents, physicians, and scientists interested in conducting cutting-edge basic science or clinical research</p>
                        </div>
                    </div>
                    <div class="row columns_margin_bottom_20">
                        <div class="col-md-4 col-sm-6">
                            <div class="teaser hover_icon with_padding big-padding with_border rounded text-center">
                                <div class="teaser_icon size_big highlight"> <i class="rt-icon2-user"></i> </div>
                                <h4 class="topmargin_20 hover-color2"><a href="team.html">Pharma Team</a></h4>
                                <p class="content-3lines-ellipsis">Company was founded by scientists dedicated to create new therapeutics.</p>
                                <p class="topmargin_30 bottommargin_0"> <a href="team.html" class="theme_button color2 inverse min_width_button">Our Team</a> </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="teaser hover_icon with_padding big-padding with_border rounded text-center with_corner_border">
                                <div class="teaser_icon size_big highlight"> <i class="rt-icon2-bulb"></i> </div>
                                <h4 class="topmargin_20 hover-color2"><a href="departments.html">Pharma Focus</a></h4>
                                <p class="content-3lines-ellipsis">We Interrogate the inner life of GPCR signaling to develop newest therapeutics.</p>
                                <p class="topmargin_30 bottommargin_0"> <a href="departments.html" class="theme_button color2 min_width_button">Discover Now</a> </p> <span class="bottom_corners"></span> </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                            <div class="teaser hover_icon with_padding big-padding with_border rounded text-center">
                                <div class="teaser_icon size_big highlight"> <i class="rt-icon2-paperplane"></i> </div>
                                <h4 class="topmargin_20 hover-color2"><a href="pipeline.html">Pharma Pipeline</a></h4>
                                <p class="content-3lines-ellipsis">Consetetur sadipscing elitr sediam nonumy eirmod tempor invidunt labore magna.</p>
                                <p class="topmargin_30 bottommargin_0"> <a href="pipeline.html" class="theme_button color2 inverse min_width_button">Check It</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="products" class="ds color parallax page_gallery section_padding_top_100 section_padding_bottom_150 columns_padding_25">
                <div class="container">
                    <div class="row display_table_md">
                        <div class="col-md-6 col-md-push-6 display_table_cell_md"> <img src="images/gallery/01.jpg" alt="" class="rounded"> </div>
                        <div class="col-md-6 col-md-pull-6 display_table_cell_md">
                            <h2 class="section_header">See Our Products</h2>
                            <p class="highlight bottommargin_20"><strong>We have several product candidates in development that we believe have been significantly de-risked.</strong></p>
                            <p>been significantly de-risked. At vero eos et accusam justo duo dolores etea rebuitet clita kasd gubergren nosea takimata sanctus est lorem ipsum dolor consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore magna aliquyam sedam
                                voluptua at vero eos et accusam et justo duo dolores.</p>
                            <p class="topmargin_30"> <a href="gallery-regular-3-cols.html" class="theme_button color2 inverse">Visit Store</a> </p>
                        </div>
                    </div>
                    <div class="row topmargin_30">
                        <div class="col-sm-12">
                            <div class="owl-carousel gallery-carousel" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="1" data-nav="true">
                                <div class="gallery-item rounded">
                                    <div class="item-media rounded overflow_hidden"> <img src="images/gallery/02.jpg" alt="">
                                        <div class="media-links inverse"> <a href="images/gallery/02.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
                                    </div>
                                </div>
                                <div class="gallery-item rounded">
                                    <div class="item-media rounded overflow_hidden"> <img src="images/gallery/03.jpg" alt="">
                                        <div class="media-links inverse"> <a href="images/gallery/03.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
                                    </div>
                                </div>
                                <div class="gallery-item rounded">
                                    <div class="item-media rounded overflow_hidden"> <img src="images/gallery/04.jpg" alt="">
                                        <div class="media-links inverse"> <a href="images/gallery/04.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
                                    </div>
                                </div>
                                <div class="gallery-item rounded">
                                    <div class="item-media rounded overflow_hidden"> <img src="images/gallery/05.jpg" alt="">
                                        <div class="media-links inverse"> <a href="images/gallery/05.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
                                    </div>
                                </div>
                                <div class="gallery-item rounded">
                                    <div class="item-media rounded overflow_hidden"> <img src="images/gallery/06.jpg" alt="">
                                        <div class="media-links inverse"> <a href="images/gallery/06.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
                                    </div>
                                </div>
                                <div class="gallery-item rounded">
                                    <div class="item-media rounded overflow_hidden"> <img src="images/gallery/07.jpg" alt="">
                                        <div class="media-links inverse"> <a href="images/gallery/07.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
                                    </div>
                                </div>
                                <div class="gallery-item rounded">
                                    <div class="item-media rounded overflow_hidden"> <img src="images/gallery/08.jpg" alt="">
                                        <div class="media-links inverse"> <a href="images/gallery/08.jpg" class="abs-link prettyPhoto" title="" data-gal="prettyPhoto[gal]"></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="features" class="ls section_padding_top_150 section_padding_bottom_130 columns_margin_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="section_header">Why Choose Us?</h2> <a href="about.html" class="theme_button color2 inverse min_width_button">About Us</a> </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="teaser media hover_icon">
                                <div class="media-left">
                                    <div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-diamond2"></i> </div>
                                </div>
                                <div class="media-body toppadding_10">
                                    <h5 class="hover-color2"><a href="#">Newest Technologies</a></h5>
                                    <p>Consetetur sadipscing elitr diam nonumy eirmod tempor invidunt.</p>
                                </div>
                            </div>
                            <div class="teaser media hover_icon">
                                <div class="media-left">
                                    <div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-cloud"></i> </div>
                                </div>
                                <div class="media-body toppadding_10">
                                    <h5 class="hover-color2"><a href="#">Taking Care of Nature</a></h5>
                                    <p>Ut labore et dolore magna aliquyam erat sed diam voluptua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="teaser media hover_icon">
                                <div class="media-left">
                                    <div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-tag2"></i> </div>
                                </div>
                                <div class="media-body toppadding_10">
                                    <h5 class="hover-color2"><a href="#">Fair Prices</a></h5>
                                    <p>At vero eos et accusam ejusto duo dolores et ea rebum clita gubergren.</p>
                                </div>
                            </div>
                            <div class="teaser media hover_icon">
                                <div class="media-left">
                                    <div class="teaser_icon rounded main_bg_color size_small"> <i class="rt-icon2-cloud"></i> </div>
                                </div>
                                <div class="media-body toppadding_10">
                                    <h5 class="hover-color2"><a href="#">High Customer Satisfaction</a></h5>
                                    <p>Nosea takimata sanctus est lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cs gradient section_padding_top_65 section_padding_bottom_50 columns_margin_bottom_20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
                            <div class="teaser text-center">
                                <h3 class="counter" data-from="0" data-to="25" data-speed="2100">0</h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                        <div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
                            <div class="teaser text-center">
                                <h3 class="counter" data-from="0" data-to="893" data-speed="2100">0</h3>
                                <p>Medicament Invented</p>
                            </div>
                        </div>
                        <div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
                            <div class="teaser text-center">
                                <h3 class="counter" data-from="0" data-to="75" data-speed="2100">0</h3>
                                <p>Awards Winned</p>
                            </div>
                        </div>
                        <div class="col-md-20 col-sm-6 col-xs-6 col-xxs-12">
                            <div class="teaser text-center">
                                <h3 class="counter-wrap"> <span class="counter" data-from="0" data-to="673" data-speed="2100"></span> <span class="counter-add">k</span> </h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-md-20 col-sm-6 col-xs-12">
                            <div class="teaser text-center">
                                <h3 class="counter" data-from="0" data-to="751" data-speed="2100">0</h3>
                                <p>Pharmacies Partners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="pipeline" class="ds color background_cover page_features section_padding_top_150 section_padding_bottom_150">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-md-offset-4 col-lg-offset-6">
                            <h2 class="section_header">Training pipeline</h2>
                            <p class="highlight bottommargin_20"><strong>Balanced mix of new substance developments and life cycle management opportunities.</strong></p>
                            <p>We focus on core competencies and its many years of experience. We thus hold a leading position in many therapeutic fields: for instance in the treatment of hemophilia and multiple sclerosis, in contrast media and oral contraception. We are also
                                striving for such a leading position in oncology.</p>
                            <div class="row topmargin_40 columns_margin_bottom_20">
                                <div class="col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
                                        <p class="big highlight2 bottommargin_20 topmargin_5">01</p>
                                        <h5 class="margin_0">Research &amp; Preclinical</h5>
                                        <div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
                                        <p class="big highlight2 bottommargin_20 topmargin_5">02</p>
                                        <h5 class="margin_0">Starting Phase</h5>
                                        <div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
                                        <p class="big highlight2 bottommargin_20 topmargin_5">03</p>
                                        <h5 class="margin_0">Medium Phase</h5>
                                        <div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
                                        <p class="big highlight2 bottommargin_20 topmargin_5">04</p>
                                        <h5 class="margin_0">Finishing Phase</h5>
                                        <div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
                                        <p class="big highlight2 bottommargin_20 topmargin_5">05</p>
                                        <h5 class="margin_0">After Drug Approval</h5>
                                        <div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
                                        <p class="big highlight2 bottommargin_20 topmargin_5">06</p>
                                        <h5 class="margin_0">Drugs Production</h5>
                                        <div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="blog" class="ls section_padding_top_150 section_padding_bottom_130">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="section_header text-center">Our Recent Blogs</h2>
                            <div class="owl-carousel text-nav" data-nav="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-group" id="posts-accordion1">
                                            <div class="panel panel-blog-post">
                                                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion1" href="#blog-collapse1">
                                        </a>
                                                    <div class="date entry-meta-corner"> <span>09</span> <span>10/17</span> </div>
                                                    <h4 class="hover-color2"> <a href="blog-single-right.html">At vero eos et accusam justo duo</a> </h4>
                                                    <div class="content-justify greylinks fontsize_12"> <a href="#">
                                                <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Sam C. Hood
                                            </a> <a href="#">
                                                <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">87</span>
                                            </a> </div>
                                                </div>
                                                <div id="blog-collapse1" class="panel-collapse collapse in">
                                                    <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-blog-post">
                                                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion1" href="#blog-collapse2" class="collapsed">                                         
                                        </a>
                                                    <div class="date entry-meta-corner"> <span>07</span> <span>10/17</span> </div>
                                                    <h4 class="hover-color2"> <a href="blog-single-right.html">Dolores et ea rebum clita kasd</a> </h4>
                                                    <div class="content-justify greylinks fontsize_12"> <a href="#">
                                                <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Sandra C. Vasquez
                                            </a> <a href="#">
                                                <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
                                            </a> </div>
                                                </div>
                                                <div id="blog-collapse2" class="panel-collapse collapse">
                                                    <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-blog-post">
                                                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion1" href="#blog-collapse3" class="collapsed">                                         
                                        </a>
                                                    <div class="date entry-meta-corner"> <span>04</span> <span>10/17</span> </div>
                                                    <h4 class="hover-color2"> <a href="blog-single-right.html">Gubergren no sea takimata sanctus</a> </h4>
                                                    <div class="content-justify greylinks fontsize_12"> <a href="#">
                                                <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Paul K. Reynolds
                                            </a> <a href="#">
                                                <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
                                            </a> </div>
                                                </div>
                                                <div id="blog-collapse3" class="panel-collapse collapse">
                                                    <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="vertical-item content-absolute content-padding">
                                            <div class="item-media rounded overflow_hidden ds black"> <img src="images/blog_post1.jpg" alt="">
                                                <div class="date entry-meta-corner main_bg_color"> <span>04</span> <span>10/17</span> </div>
                                            </div>
                                            <div class="item-content ds">
                                                <h4 class="entry-title highlight hover-color2 bottommargin_0"> <a href="blog-single-right.html">Lorem ipsum dolor amet, consetetur sadipscing</a> </h4>
                                                <div class="content-justify darklinks fontsize_12 regular"> <a href="#">
                                            <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Margarita R. Miller
                                        </a> <a href="#">
                                            <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
                                        </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-group" id="posts-accordion2">
                                            <div class="panel panel-blog-post">
                                                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion2" href="#blog-collapse4">
                                        </a>
                                                    <div class="date entry-meta-corner"> <span>09</span> <span>10/17</span> </div>
                                                    <h4 class="hover-color2"> <a href="blog-single-right.html">At vero eos et accusam justo duo</a> </h4>
                                                    <div class="content-justify greylinks fontsize_12"> <a href="#">
                                                <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Sam C. Hood
                                            </a> <a href="#">
                                                <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">87</span>
                                            </a> </div>
                                                </div>
                                                <div id="blog-collapse4" class="panel-collapse collapse in">
                                                    <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-blog-post">
                                                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion2" href="#blog-collapse5" class="collapsed">                                         
                                        </a>
                                                    <div class="date entry-meta-corner"> <span>07</span> <span>10/17</span> </div>
                                                    <h4 class="hover-color2"> <a href="blog-single-right.html">Dolores et ea rebum clita kasd</a> </h4>
                                                    <div class="content-justify greylinks fontsize_12"> <a href="#">
                                                <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Sandra C. Vasquez
                                            </a> <a href="#">
                                                <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
                                            </a> </div>
                                                </div>
                                                <div id="blog-collapse5" class="panel-collapse collapse">
                                                    <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-blog-post">
                                                <div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion2" href="#blog-collapse6" class="collapsed">                                         
                                        </a>
                                                    <div class="date entry-meta-corner"> <span>04</span> <span>10/17</span> </div>
                                                    <h4 class="hover-color2"> <a href="blog-single-right.html">Gubergren no sea takimata sanctus</a> </h4>
                                                    <div class="content-justify greylinks fontsize_12"> <a href="#">
                                                <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Paul K. Reynolds
                                            </a> <a href="#">
                                                <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
                                            </a> </div>
                                                </div>
                                                <div id="blog-collapse6" class="panel-collapse collapse">
                                                    <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="vertical-item content-absolute content-padding">
                                            <div class="item-media rounded overflow_hidden ds black"> <img src="images/blog_post1.jpg" alt="">
                                                <div class="date entry-meta-corner main_bg_color"> <span>04</span> <span>10/17</span> </div>
                                            </div>
                                            <div class="item-content ds">
                                                <h4 class="entry-title highlight hover-color2 bottommargin_0"> <a href="blog-single-right.html">Lorem ipsum dolor amet, consetetur sadipscing</a> </h4>
                                                <div class="content-justify darklinks fontsize_12 regular"> <a href="#">
                                            <i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Margarita R. Miller
                                        </a> <a href="#">
                                            <i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
                                        </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="testimonials" class="ds color parallax page_testimonials section_padding_top_150 section_padding_bottom_150">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="section_header text-center"> Client Testimonials </h2>
                            <div class="owl-carousel" data-responsive-lg="3" data-nav="false" data-dots="true">
                                <blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                                <blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                                <blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                                <blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                                <blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                                <blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                                <blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                                <blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                                <blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
                                    <div class="item-meta">
                                        <h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
                                        <p class="highlight2">Customer</p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="ls section_padding_top_150 section_padding_bottom_150">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 text-center">
                            <div class="background_cover contact-form-wrapper">
                                <h2 class="section_header">Contact Form</h2>
                                <form class="contact-form row" method="post" action="http://webdesign-finder.com/html/pharma/">
                                    <div class="col-sm-6">
                                        <div class="contact-form-name"> <label for="name">Full Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-center" placeholder="Name"> </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-form-email"> <label for="email">Email address<span class="required">*</span></label> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-center" placeholder="Email Address"> </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-form-phone"> <label for="phone">Phone<span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control text-center" placeholder="Phone Number"> </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-form-subject"> <label for="subject">Subject<span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control text-center" placeholder="Your Subject"> </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="contact-form-message"> <label for="message">Message</label> <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control text-center" placeholder="Message..."></textarea> </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="contact-form-submit topmargin_10"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color2 inverse min_width_button">Send Message</button> </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cs gradient section_padding_top_50 section_padding_bottom_50">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="owl-carousel partners-carousel" data-responsive-lg="9" data-responsive-md="6" data-responsive-sm="4" data-responsive-xs="2" data-nav="false" data-dots="false" data-center="true" data-loop="true"> <a href="#">
                        <img src="images/partners/01.png" alt="">
                    </a> <a href="#">
                        <img src="images/partners/02.png" alt="">
                    </a> <a href="#">
                        <img src="images/partners/03.png" alt="">
                    </a> <a href="#">
                        <img src="images/partners/04.png" alt="">
                    </a> <a href="#">
                        <img src="images/partners/05.png" alt="">
                    </a> <a href="#">
                        <img src="images/partners/06.png" alt="">
                    </a> <a href="#">
                        <img src="images/partners/07.png" alt="">
                    </a> <a href="#">
                        <img src="images/partners/08.png" alt="">
                    </a> <a href="#">
                        <img src="images/partners/09.png" alt="">
                    </a> </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="page_footer ds color section_padding_top_100 section_padding_bottom_65 table_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_text"> <a href="index.html" class="logo vertical_logo bottommargin_20">
                        <img src="images/logo-light.png" alt="">
                    </a>
                                <p>Lorem ipsum dlor amet, consetetur sadipscing esed dia nonumy eirmod tempor invidunt.</p>
                                <p class="darklinks"> <a class="social-icon soc-facebook" href="#" title="Facebook"></a> <a class="social-icon soc-twitter" href="#" title="Twitter"></a> <a class="social-icon soc-google" href="#" title="Twitter"></a> <a class="social-icon soc-linkedin" href="#" title="Twitter"></a>                                 <a class="social-icon soc-youtube" href="#" title="Youtube"></a> </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_text topmargin_25">
                                <h4 class="widget-title">Contact Us</h4>
                                <div class="media">
                                    <div class="media-left rightpadding_10"> <i class="fa fa-map-marker highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body"> 482 Address Street, Address City, KS, 66223 </div>
                                </div>
                                <div class="media">
                                    <div class="media-left rightpadding_10"> <i class="fa fa-phone highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body"> 0 (800) 123 4567 </div>
                                </div>
                                <div class="media">
                                    <div class="media-left rightpadding_10"> <i class="fa fa-pencil highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body highlight2links"> <a href="mailto:pharmacom@example.com">pharmacom@example.com</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_twitter topmargin_25">
                                <h4 class="widget-title">Twitter Widget</h4>
                                <div class="twitter highlight2links"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center text-sm-left">
                            <div class="widget widget_instagram topmargin_25">
                                <h4 class="widget-title">Instagram</h4>
                                <div class="instafeed"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <section class="ds color darker page_copyright section_padding_15">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p class="fontsize_12">&copy; Copyright 2017. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->
    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>
    <script src="js/switcher.js"></script>
</body>


<!-- Mirrored from webdesign-finder.com/html/pharma/index-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 16:39:54 GMT -->
</html>