<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> @yield('title') </title>
    <link rel="shortcut icon" href="{{ url('main/images/icon.png') }}">
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}
    @yield('header')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    {!! Html::style('https://fonts.googleapis.com/css?family=Cairo') !!}
    {!! Html::style('main/css/style.css') !!}
  </head>
  <body>
    
    @include('main/layouts/navbar')
    @yield('content')
    @include('main/layouts/footer')

    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') !!}
    @yield('footer')
    {!! Html::script('main/js/plugin.js') !!}
  </body>
</html>
