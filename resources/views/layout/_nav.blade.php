<header class="page_header header_color toggler_left">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 display_table">
                <div class="header_mainmenu display_table_cell">
                    <!-- main nav start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu">
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ Request::is('trainings') ? 'active' : '' }}">
                                <a href="{{ url('trainings#/trainings') }}">Trainings</a>
                            </li>
                            <li class="{{ Request::is('shop') ? 'active' : '' }}">
                                <a href="{{ url('shop#/products') }}">Store</a>
                            </li>
                            <li class="{{ Request::is('about-us') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <!-- eof contacts -->
                        </ul>
                    </nav>
                    <!-- eof main nav -->
                    <!-- header toggler --><span class="toggle_menu"><span></span></span>
                </div>
                <div class="header_right_buttons cs display_table_cell text-right">
                    <ul class="inline-list menu greylinks" style="margin-top: 10px; margin-bottom: 10px;">
                        <li>
                          {{--<a href="#" class="search_modal_button header-button">--}}
                            {{--<i class="fa fa-search" aria-hidden="true"></i>--}}
                          {{--</a>--}}
                        </li>
                        <li>
                            {{--<a href="shop-register.html" class="header-button">--}}
                                  {{--<i class="fa fa-user" aria-hidden="true"></i>--}}
                              {{--</a>--}}
                        </li>
                        <li>
                            {{--<a href="shop-cart-right.html" class="header-button">--}}
                                {{--<i class="fa fa-shopping-basket" aria-hidden="true"></i>--}}
                            {{--</a>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>