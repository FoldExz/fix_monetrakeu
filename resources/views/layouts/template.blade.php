<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF token for AJAX -->

  <!-- Title -->
  <title>@yield('title') &mdash; Stisla</title>

  <!-- General CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> 

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla1/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla1/assets/css/components.css') }}">

  {{-- Custom CSS --}}
  <link rel="stylesheet" href="{{ asset('stisla1/assets/css/custom.css') }}">
  
  <!--Chart Js -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"> 

    <!-- Template Select2 -->
  <link rel="stylesheet" href="{{ asset('stisla1/assets/select2/css/select2.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  


<!-- Bootstrap Datepicker CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


  <!-- Global base URL for AJAX calls -->
  <script>
    window.BASE_URL = "{{ url('') }}";
  </script>

  @stack('css') <!-- For page-specific CSS -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper">

      <!-- Navbar -->
      @include('layouts.navbar')

      <!-- Sidebar -->
      <div class="main-sidebar sidebar-style-2">
        @include('layouts.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>

      <!-- Footer -->
      @include('layouts.footer')

    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Select2-->
  <script src="{{ asset('stisla1/assets/select2/js/select2.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



  <!-- jQuery Validate -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script> --}}

<script src="{{ asset('stisla1/assets/js/validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('stisla1/assets/js/validate/additional-methods.min.js') }}"></script>


  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

  <!-- Stisla Core JS -->
  <script src="{{ asset('stisla1/assets/js/stisla.js') }}"></script>
  <script src="{{ asset('stisla1/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('stisla1/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS -->
  <script src="{{ asset('stisla1/assets/js/page/bootstrap-modal.js') }}"></script>
  <script src="{{ asset('stisla1/assets/js/page/components-table.js') }}"></script>

    <!-- SweetAlert2 CDN -->
<script src="{{ asset('stisla1/assets/js/sweetalert2.all.min.js') }}"></script>

<!-- Chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
{{-- <script src="{{ asset('stisla1/js/page/dist/modules-chartjs.js') }}"></script> --}}
{{-- <script src="{{ asset('stisla1/assets/js/page/modules-chartjs.js') }}"></script> --}}


  <!-- AJAX CSRF Setup -->
  <script>
    $.ajaxSetup({
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token'),
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>



<!-- Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


  @stack('js') <!-- For page-specific JS -->
  @yield('scripts')
</body>
</html>