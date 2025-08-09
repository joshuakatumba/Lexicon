@include('backend.components.Header')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            {{-- <img class="animation__shake" src="{{ asset($website->site_logo)}}" alt="AdminLTELogo" height="60" width="60"> --}}
            
            {{-- <div class="spinner-grow" style="width: 5rem; height: 5rem;" role="status"> 
                <span class="visually-hidden"></span> 
            </div> --}}

            <img class="spinner-grow" src="{{ asset($website->site_loader_image)}}" alt="Site Loader Image">

        </div>

        <!-- Navbar -->
        @include('backend.components.TopBar')

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.components.SideBar')

        @yield('content')

        @include('backend.components.Footer')
