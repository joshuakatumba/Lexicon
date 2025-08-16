@include('backend.components.Header')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <div class="spinner-grow" style="width: 5rem; height: 5rem;" role="status"> 
                <span class="visually-hidden"></span> 
            </div>
        </div>

        <!-- Navbar -->
        @include('backend.components.TopBar')

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.components.SideBar')

        @yield('content')

        @include('backend.components.Footer')
