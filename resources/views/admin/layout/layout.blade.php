<!DOCTYPE html>
<html>
<head>
  @include('admin.layout.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.layout.navbar')

  @include('admin.layout.sidebar')

  @yield('content')
  
  @include('admin.layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.layout.script')

</body>
</html>
