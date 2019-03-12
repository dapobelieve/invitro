<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
@include('layout._head')

<body>
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>
    <!-- eof .modal -->
    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">
            <!-- template sections -->
            @include('layout._header')
            @include('layout._nav')

            <section class="ls section_404 background_cover section_padding_top_130 section_padding_bottom_100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center text-md-right">
                            <div class="inline-block text-center">
                                <p class="not_found"> <span class="highlight2">404</span> <span class="oops grey">Ooops!</span> </p>
                                <h3 class="text-uppercase">Sorry page nor found!</h3>
                                <p> <a href="{{ route('home') }}" class="theme_button color2 min_width_button">Back to Home</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
{{-- @include('layout._footer') --}}
            @include('layout._bottom')
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->
    @include('layout._script')
</body>
</html>