<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> @yield('title') </title>
    <link rel="shortcut icon" href="{{ url('admin/images/icon.png') }}">
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}
    {!! Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
    {!! Html::style('admin/css/template/AdminLTE.min.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/skin-green.min.css') !!}
    {!! Html::style('admin/css/template/bootstrap-rtl.min.css') !!}
    {!! Html::style('admin/css/template/rtl.css') !!}
    @yield('header')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    {!! Html::style('https://fonts.googleapis.com/css?family=Cairo') !!}
    {!! Html::style('admin/css/style.css') !!}
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

    </div><!-- ./wrapper -->

    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') !!}
    {!! Html::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') !!}
    <script>$.widget.bridge('uibutton', $.ui.button);</script>
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js') !!}
    {!! Html::script('admin/js/template/app.min.js') !!}
    {!! Html::script('admin/js/template/demo.js') !!}
    {!! Html::script('https://unpkg.com/sweetalert/dist/sweetalert.min.js') !!}
    @include('/admin/layouts/alert')
    @yield('footer')
    {!! Html::script('admin/js/plugin.js') !!}
  </body>
</html>
