<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label"> الاسم </label>

    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => ' من فضلك اكتب الاسم ']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label"> البريد الالكترونى </label>

    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => ' من فضلك اكتب البريد الالكترونى ']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

@if (! isset($show))
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label"> كلمه المرور </label>

    <div class="col-md-6">
      {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => ' من فضلك اكتب كلمه السر ']) !!}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label for="password-confirm" class="col-md-4 control-label"> تاكيد كلمه المرور </label>

    <div class="col-md-6">
      {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation', 'placeholder' => ' من فضلك قم باعادة كتابه كلمة السر ']) !!}

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-btn fa-user"></i> @yield('submit')
        </button>
    </div>
</div>
@endif

@if (isset($show))
<div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
    <label for="created_at" class="col-md-4 control-label"> عضو منذ </label>

    <div class="col-md-6">
      {!! Form::text('created_at', null, ['class' => 'form-control', 'id' => 'created_at', 'placeholder' => ' هذا المسئول عضو منذ ']) !!}

        @if ($errors->has('created_at'))
            <span class="help-block">
                <strong>{{ $errors->first('created_at') }}</strong>
            </span>
        @endif
    </div>
</div>

@if ($user->id != 1)
<div class="form-group{{ $errors->has('delete') ? ' has-error' : '' }}">
    <label for="delete" class="col-md-4 control-label"> حذف العضو </label>

    <div class="col-md-6">
      <a href="{{ url('/adminpanel/users/' . $user->id . '/delete') }}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>

        @if ($errors->has('delete'))
            <span class="help-block">
                <strong>{{ $errors->first('delete') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif
@endif
