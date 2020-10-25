<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  
  @include('admin.templates.head')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @include('admin.templates.header')

    @include('admin.templates.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">@yield('namecontent')</h1>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
    @include('admin.templates.script')

    
  </div>
  <!-- ./wrapper -->
  
  {{-- @include('admin.templates.footer') --}}
    

</body>
</html>
