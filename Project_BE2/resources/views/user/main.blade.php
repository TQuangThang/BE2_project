@INCLUDE('user.header')

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" CLASS="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @INCLUDE('user.navbar')

            <!-- Begin Page Content -->
            <div CLASS="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @INCLUDE('user.footer')

    </div>
    <!-- End of Content Wrapper -->
</div>
@INCLUDE('user.js')