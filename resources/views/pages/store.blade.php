@extends('pages.template')

@section('page.title', 'Store | Invitrofertilization Academy')

@section('content')

<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>Products</h2>
                            <ol class="breadcrumb highlightlinks">
                                <li> 
                                    <a href="index.html"> Home </a> 
                                </li>
                                <li class="active">Products</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ls section_padding_top_150 section_padding_bottom_130">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shop-sorting">
                                <form class="form-inline content-justify vertical-center content-margins">
                                    <div> Showing 1-6 of 36 results </div>
                                    <div class="form-group select-group"> <select aria-required="true" id="date" name="date" class="choice empty form-control">
                                <option value="" disabled selected data-default>Default Sorting</option>
                                <option value="value">by Value</option>
                                <option value="date">by Date</option>
                                <option value="popular">by Popularity</option>
                            </select> <i class="fa fa-angle-down theme_button color1 no_bg_button" aria-hidden="true"></i> </div>
                                </form>
                            </div>
                            <div class="columns-3">
                                <ul id="products" class="products list-unstyled">
                                    <li class="product type-product">
                                        <div class="vertical-item content-padding text-center with_border">
                                            <div class="item-media muted_background bottommargin_30"> <img src="/assets/images/shop/01.png" alt="" /> </div>
                                            <div class="item-content">
                                                <h4 class="hover-color2 bottommargin_0"> <a href="shop-product-right.html">Tongue Pastrami Salami</a> </h4>
                                                <p class="price semibold"> <del>
                                            <span class="amount">$12.00</span>
                                        </del> <ins>
                                            <span class="amount">$10.00</span>
                                        </ins> </p>
                                                <p>Shankle ball tip bresaola kielbasa short loin, tongue swine sausage hamburger meatball pork.</p>
                                                <p class="topmargin_30"> <a href="#" class="theme_button color2 inverse min_width_button">Add to Cart</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product type-product">
                                        <div class="vertical-item content-padding text-center with_border">
                                            <div class="item-media muted_background  bottommargin_30"> <img src="/assets/images/shop/02.png" alt="" /> </div>
                                            <div class="item-content">
                                                <h4 class="hover-color2 bottommargin_0"> <a href="shop-product-right.html">Ground Round Turkey</a> </h4>
                                                <p class="price semibold"> <del>
                                            <span class="amount">$12.00</span>
                                        </del> <ins>
                                            <span class="amount">$10.00</span>
                                        </ins> </p>
                                                <p>Drumstick biltong shoulder spare ribs. T-bone shankle corned beef flank swine meatball jowl.</p>
                                                <p class="topmargin_30"> <a href="#" class="theme_button color2 inverse min_width_button">Add to Cart</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product type-product">
                                        <div class="vertical-item content-padding text-center with_border">
                                            <div class="item-media muted_background bottommargin_30"> <img src="/assets/images/shop/03.png" alt="" /> </div>
                                            <div class="item-content">
                                                <h4 class="hover-color2 bottommargin_0"> <a href="shop-product-right.html">Kevin Shoulder</a> </h4>
                                                <p class="price semibold"> <del>
                                            <span class="amount">$12.00</span>
                                        </del> <ins>
                                            <span class="amount">$10.00</span>
                                        </ins> </p>
                                                <p>Shank rump ham, pastrami strip steak capicola brisket chuck leberkas. Jerky jowl landjaeger.</p>
                                                <p class="topmargin_30"> <a href="#" class="theme_button color2 inverse min_width_button">Add to Cart</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product type-product">
                                        <div class="vertical-item content-padding text-center with_border">
                                            <div class="item-media muted_background bottommargin_30"> <img src="/assets/images/shop/04.png" alt="" /> </div>
                                            <div class="item-content">
                                                <h4 class="hover-color2 bottommargin_0"> <a href="shop-product-right.html">Cupim Salami Sirloin</a> </h4>
                                                <p class="price semibold"> <del>
                                            <span class="amount">$12.00</span>
                                        </del> <ins>
                                            <span class="amount">$10.00</span>
                                        </ins> </p>
                                                <p>Frankfurter pig bacon bresaola brisket. Alcatra burgdoggen pork chop, bacon sausage.</p>
                                                <p class="topmargin_30"> <a href="#" class="theme_button color2 inverse min_width_button">Add to Cart</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product type-product">
                                        <div class="vertical-item content-padding text-center with_border">
                                            <div class="item-media muted_background bottommargin_30"> <img src="/assets/images/shop/05.png" alt="" /> </div>
                                            <div class="item-content">
                                                <h4 class="hover-color2 bottommargin_0"> <a href="shop-product-right.html">Shank Cow Boudin</a> </h4>
                                                <p class="price semibold"> <del>
                                            <span class="amount">$12.00</span>
                                        </del> <ins>
                                            <span class="amount">$10.00</span>
                                        </ins> </p>
                                                <p>Ham hock landjaeger prosciutto cow bacon salami, doner leberkas andouille bresaola.</p>
                                                <p class="topmargin_30"> <a href="#" class="theme_button color2 inverse min_width_button">Add to Cart</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product type-product">
                                        <div class="vertical-item content-padding text-center with_border">
                                            <div class="item-media muted_background bottommargin_30"> <img src="/assets/images/shop/06.png" alt="" /> </div>
                                            <div class="item-content">
                                                <h4 class="hover-color2 bottommargin_0"> <a href="shop-product-right.html">Prosciutto Picanha Pork</a> </h4>
                                                <p class="price semibold"> <del>
                                            <span class="amount">$12.00</span>
                                        </del> <ins>
                                            <span class="amount">$10.00</span>
                                        </ins> </p>
                                                <p>Pancetta chuck jowl shank cow sausage flank tongue filet mignon kevin. Ground round ball.</p>
                                                <p class="topmargin_30"> <a href="#" class="theme_button color2 inverse min_width_button">Add to Cart</a> </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- eof .columns-* -->
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <ul class="pagination with_border">
                                        <li class="disabled"><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@stop