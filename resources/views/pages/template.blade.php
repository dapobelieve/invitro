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
            @yield('content')
            @include('layout._footer')
            @include('layout._bottom')
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->
    @include('layout._script')
</body>
</html>