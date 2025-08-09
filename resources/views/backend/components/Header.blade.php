<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin | Dashboard')</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset($website->site_favicon) }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
   --}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2/css/select2.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">

    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ asset('backend') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Sweet Alert 2 -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/sweetalert2/sweetalert2.min.css">

    <!-- toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- iconpicker CSS -->

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <!-- Bootstrap-Iconpicker -->
    {{-- <link rel="stylesheet" href="dist/css/bootstrap-iconpicker.min.css"/> --}}
    {{-- fontawesome-iconpicker.min.css --}}



    <!-- Font Awesome iconpicker CSS -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css"/> --}}

    <!-- Bootstrap-Iconpicker -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/css/bootstrap-iconpicker.min.css">

    <!-- toaster -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/toastr/toastr.min.css">

    <!-- dropify -->
    <link rel="stylesheet" href="{{ asset('backend') }}/dropify/dropify.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/style.css">

    <style>
        :root {
            /* --pxa-light-primary: {{ $website->primary_color }}; */

            --pxa-primary: {{ $website->primary_color }};
            --pxa-secondary:{{ $website->primary_secondary }};

            --pxa-body-color: {{ $website->body_color }};
            --pxa-title-color: {{ $website->title_color }};

            --pxa-text-color: {{ $website->text_color }};
            --pxa-text-hover-color: {{ $website->text_color_hover }};

            --pxa-icon-color:{{ $website->icon_color }};
            --pxa-icon-hover-color:{{ $website->icon_color_hover }};

            --pxa-active-bg-color:{{ $website->active_bg_color }};
            --pxa-active-text-color:{{ $website->active_text_color }};

            /* --pxa-white-color: #ffffff;
            --pxa-gray-color: #FAFAFA;

            --pxa-border-color: #E8E8E8;
            
            --all-transition: all 0.3s;
            --transition: all 0.3s ease-in-out;

            --pxa-header-background: #ffffff;
            --pxa-header-text: #797979;

            --pxa-footer-backgournd: #000000;
            --pxa-footer-text: #ffffff;

            --pxa-danger: #e81a46;
            --pxa-success: #6ca329;

            --pxa-sec-body-color: #F7F2FF; */

        }

        /* $table->string('primary_color');
            $table->string('secondary_color');
            $table->string('title_color');
            $table->string('text_color');
            $table->string('body_color'); */

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #0b8741;
            border: 1px solid #aaa;
            border-radius: 4px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 5px;
            padding: 0 5px;
        }

        #map {
            height: 100%;
        }

        element.style {
            position: relative;
            /* overflow: hidden; */
        }
        
        /* Make header background white */
        .main-header {
            background-color: #ffffff !important;
        }
        
        .navbar-white {
            background-color: #ffffff !important;
        }
        
        /* Make sidebar background light blue */
        .main-sidebar {
            background-color: #e3f2fd !important;
        }
        
        .sidebar-dark-primary {
            background-color: #e3f2fd !important;
        }
        
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link {
            color: #1976d2 !important;
        }
        
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link:hover {
            background-color: #bbdefb !important;
            color: #1565c0 !important;
        }
        
        .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
            background-color: #2196f3 !important;
            color: #ffffff !important;
        }
    </style>

</head>
