<!DOCTYPE html>
<html lang="en">


@include('admin.layout.head')   

    <body data-color="grey" class="flat">
        <div id="wrapper">
            <div id="header">
                <h1><a href="index-2.html">BeSystems</a></h1>
                <a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>    
            </div>
        
            {{-- @include('admin.layout.topnav') --}}
           
            @include('admin.layout._adminNav')

            @yield('admin-content')
            

            @include('admin.layout.footer')
        </div>

            @include('admin.layout.scripts')
    </body>


</html>
