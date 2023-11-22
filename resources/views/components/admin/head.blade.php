<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title> @yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{url('adminsets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('adminsets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
    <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{url('adminsets/modules/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{url('adminsets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('adminsets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">


  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('adminsets/css/style.css')}}">
  <link rel="stylesheet" href="{{url('adminsets/css/components.css')}}">
  <style type="text/css">
    .btn-primary,.bg-primary,.navbar-bg{
      background: #0C4C9C !important;
    }
    .main-sidebar .sidebar-menu li.active a{
      color:#0C4C9C;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li.active > a{
      background: #0C4C9C;
    }
    .disabled{
      cursor: not-allowed !important; 
    }
    .btn-white{
       color: #0C4C9C !important;
        background: #fff !important;
    }
    .text-primary{
      color: #0C4C9C !important;
    }
  </style>
</head>