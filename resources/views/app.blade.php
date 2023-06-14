<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('admin-assets/assets/')}}"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />
    <title>Manara | Admin Dashboard</title>

      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="{{ asset('admin-assets/assets/img/favicon/favicon.ico')}}" />

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
  
      <!-- Icons -->
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/fonts/fontawesome.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/fonts/tabler-icons.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/fonts/flag-icons.css')}}" />
  
      <!-- Core CSS -->
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/demo.css')}}" />
  
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/node-waves/node-waves.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/swiper/swiper.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
  
      <!-- Page CSS -->
      <link rel="stylesheet" href="{{ asset('admin-assets/assets/vendor/css/pages/cards-advance.css')}}" />
      <!-- Helpers -->
      <script src="{{ asset('admin-assets/assets/vendor/js/helpers.js')}}"></script>
  
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
      <script src="{{asset('admin-assets/assets/vendor/js/template-customizer.js')}}"></script>
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="{{asset('admin-assets/assets/js/config.js')}}"></script>

    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
  <script src="{{ asset('admin-assets/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/vendor/libs/node-waves/node-waves.js')}}"></script>

    <script src="{{ asset('admin-assets/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{ asset('admin-assets/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->
{{-- 
    <script>
        document.write(new Date().getFullYear());
      </script> --}}

    <!-- Vendors JS -->
    <script src="{{ asset('admin-assets/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/vendor/libs/swiper/swiper.js')}}"></script>
    <script src="{{ asset('admin-assets/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin-assets/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin-assets/assets/js/dashboards-analytics.js')}}"></script>
</html>