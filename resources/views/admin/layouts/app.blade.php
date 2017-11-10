<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Home | Free Jops</title>
    <link rel="shortcut icon" href="{{ url('admin/images/icon.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('admin/css/template/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/skin-green.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css">
    <link rel="stylesheet" href="{{ url('admin/css/template/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/css/template/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/css/template/rtl.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo">
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}">
  </head>
  <body class="skin-green sidebar-mini">
    <div class="wrapper">
      @include('admin/layouts/header')
      @include('admin/layouts/sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div><!-- /.content-wrapper -->

      @include('admin/layouts/footer')
      @include('admin/layouts/sidecontrol')

    </div><!-- ./wrapper -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>$.widget.bridge('uibutton', $.ui.button);</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="{{ url('admin/js/template/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ url('admin/js/template/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/amd/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/amd/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="{{ url('admin/js/template/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
    <script src="{{ url('admin/js/template/app.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/pages/dashboard.js"></script>
    <script src="{{ url('admin/js/template/demo.js') }}"></script>
  </body>
</html>
