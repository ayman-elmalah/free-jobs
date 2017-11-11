<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="description">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title> login | Free Jops </title>
  <link rel="shortcut icon" href="{{ url('admin/images/icon.png') }}">
  {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
  {!! Html::style('https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
  {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}
  {!! Html::style('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
  {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css') !!}
  {!! Html::style('admin/css/libs/green.css') !!}
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  {!! Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') !!}
  {!! Html::style('https://fonts.googleapis.com/css?family=Cairo') !!}
  {!! Html::style('admin/css/style.css') !!}
</head>
<body class="hold-transition login-page" style="background-image:url({{ url('admin/images/background.jpg') }});background-size:cover;">
  <div class="login-box">
    <div class="login-box-body">
      <p class="login-box-msg"> سجل دخولك لتتمكن من ادارة الموقع </p>

      {!! Form::open(['url' => '/adminpanel/login', 'method' => 'submit']) !!}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email']) !!}
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
          {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password']) !!}
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>

        <div class="action">
          <div class="action-item">
            <div class="checkbox icheck">
              <label>
                {!! Form::checkbox('remember') !!} Remember Me
              </label>
            </div>
          </div>
          <div class="action-item">
            <button type="submit" class="btn btn-success btn-block btn-flat signin">Sign In</button>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
    <!-- /.login-box-body -->
  </div>

{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js') !!}
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green',
      increaseArea: '20%'
    });
  });
</script>
</body>
</html>
