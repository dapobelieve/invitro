<!DOCTYPE html>
<html lang="en">

@include('admin.layout.head')   

    <body data-color="grey" class="flat ">
        <div id="wrapper">
            <div id="header">
                <a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>
            </div>
        
            {{-- @include('admin.layout.topnav') --}}
           
            @include('admin.layout._adminNav')
            <div id="app">
                @yield('admin-content')
            </div>

            @include('admin.layout.footer')
        </div>

            @include('admin.layout.scripts')
        <script>
            menuTrigger = document.getElementById('menu-trigger');
            menuTrigger.addEventListener('click', function () {
                document.body.classList.toggle('menu-open');
            })
        </script>
    </body>


</html>
