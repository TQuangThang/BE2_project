@INCLUDE('admin.header')
 
 
<!-- Page Wrapper -->
<div id="wrapper">
 
  @INCLUDE('admin.sidebar')
 
  <!-- Content Wrapper -->
  <div id="content-wrapper" CLASS="d-flex flex-column">
 
    <!-- Main Content -->
    <div id="content">
 
        @INCLUDE('admin.navbar')
 
      <!-- Begin Page Content -->
      <div CLASS="container-fluid">
 
          @yield('content')
 
      </div>
      <!-- /.container-fluid -->
 
    </div>
    <!-- End of Main Content -->
 
    @INCLUDE('admin.footer')
 
  </div>
  <!-- End of Content Wrapper -->
 
</div>
<!-- End of Page Wrapper -->
 
  @INCLUDE('admin.js')