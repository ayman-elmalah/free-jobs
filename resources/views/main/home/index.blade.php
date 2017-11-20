<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{description()}}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> {{title(' الصفحه الرئيسيه ')}} </title>
    <link rel="shortcut icon" href="{{ url('main/images/icon.png') }}">
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css') !!}
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

    <!--Start header-->
    <section class="header" style="background-image:url({{ url('main/images/intro-bg.jpg') }})">
        <!--Start navbar-->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}">Free Jobs</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="mynav">
              <ul class="nav navbar-nav navbar-left">
                  <li class="nav-list"><a class="link active" href="{{ url('/home') }}"> الصفحه الرئيسيه </a></li>
                  <li class="nav-list"><a class="link" href="{{ url('/categories') }}"> كل الاقسام </a></li>
                  <li class="nav-list"><a class="link" href="{{ url('/contact') }}"> اتصل بنا </a></li>
                  <li class="btn btn-success nav-custom-list"><a class="link" href="{{ url('/post') }}"> نشر وظيفه </a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="clearfix"></div>
        <hr class="hidden-xs nav-hr">
        <!--End navbar-->
        <!--Start contents-->
        <div class="content text-center">
            <div class="container">
              <h2 class="intro"> ابحث عن وظيفتك  مجانا </h2>
              {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
                <div class="row">
                  <div class="col-lg-4">
                    {!! Form::select('category', job_category(), null, ['class' => 'form-control select2']) !!}
                  </div>
                  <div class="col-lg-4">
                    {!! Form::select('experience', job_experience(), null, ['class' => 'form-control select2']) !!}
                  </div>
                  <div class="col-lg-4">
                    {!! Form::select('location', job_location(), null, ['class' => 'form-control select2']) !!}
                  </div>
                  <div class="col-lg-8">
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'اكتب اسم الوظيفه']) !!}
                  </div>
                  <div class="col-lg-4">
                    {!! Form::submit('بحث', ['class' => 'form-control btn btn-success']) !!}
                  </div>
                </div>
              {!! Form::close() !!}
            </div>
        </div>
        <!--End contents-->
    </section>

    <div class="jobs-content">
      <div class="container">
        <h1 class="text-center"> اخر الوظائف المنشوره </h1>
        @include('main/layouts/jobs')
        <div class="text-center">
           {{ $jobs->appends(Request::except('page'))->render() }}
        </div>
      </div>
    </div>

    @include('main/layouts/footer')

    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js') !!}
    {!! Html::script('https://unpkg.com/sweetalert/dist/sweetalert.min.js') !!}
    @include('/admin/layouts/alert')
    @yield('footer')
    {!! Html::script('main/js/plugin.js') !!}
  </body>
</html>
