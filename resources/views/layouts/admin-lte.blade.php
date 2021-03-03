<!DOCTYPE html>
<html>
<head>
  @include('includes.head')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('includes.nav-bar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('includes.aside-menu')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <?php //NO LOG @include('includes.header') ?>
    </section>

    <!-- Main content -->
    <main class="content">

      <!-- Default box -->
      <?php // @include('includes.def-card') ?>
      <!-- /.card -->

      <!-- Laravel Content -->
      @yield('content')
    </main>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('includes.final-scripts')
</body>
</html>