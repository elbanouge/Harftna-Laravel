@include('admin.layouts.header')

<body id="page-top">

    <div id="wrapper">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('admin.layouts.navbar')
                <!-- Topbar -->

                <!-- Container Fluid-->
                @include('admin.layouts.container')
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            @include('admin.layouts.footer')
            <!-- Footer -->
        </div>
    </div>
    @include('admin.layouts.scroll')

</body>

</html>
