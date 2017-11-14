<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="title" class="col-md-4 control-label"> مسمى الوظيفه </label>

    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => ' من فضلك اكتب مسمى الوظيفه ']) !!}
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
    <label for="company_name" class="col-md-4 control-label"> اسم الشركه </label>

    <div class="col-md-6">
        {!! Form::text('company_name', null, ['class' => 'form-control', 'id' => 'company_name', 'placeholder' => ' من فضلك اكتب اسم الشركه  ']) !!}
        @if ($errors->has('company_name'))
            <span class="help-block">
                <strong>{{ $errors->first('company_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
    <label for="experience" class="col-md-4 control-label"> الخبره المطلوبه </label>

    <div class="col-md-6">
        {!! Form::select('experience', job_experience_action(), null, ['class' => 'form-control select2', 'id' => 'experience']) !!}
        @if ($errors->has('experience'))
            <span class="help-block">
                <strong>{{ $errors->first('experience') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
    <label for="location" class="col-md-4 control-label"> منطقة الوظيفه </label>

    <div class="col-md-6">
        {!! Form::select('location', job_location_action(), null, ['class' => 'form-control select2', 'id' => 'location']) !!}
        @if ($errors->has('location'))
            <span class="help-block">
                <strong>{{ $errors->first('location') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    <label for="category" class="col-md-4 control-label"> قسم الوظيفه </label>

    <div class="col-md-6">
        {!! Form::select('category', job_category_action(), null, ['class' => 'form-control select2', 'id' => 'category']) !!}
        @if ($errors->has('category'))
            <span class="help-block">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description" class="col-md-4 control-label"> وصف الوظيفه </label>

    <div class="col-md-6">
      {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'editor1', 'placeholder' => ' من فضلك اكتب المواصفات اللازمه للوظيفه ']) !!}

        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email_address') ? ' has-error' : '' }}">
    <label for="email_address" class="col-md-4 control-label"> البريد الالكترونى للتقديم </label>

    <div class="col-md-6">
      {!! Form::email('email_address', null, ['class' => 'form-control', 'id' => 'email_address', 'placeholder' => ' من فضلك اكتب البريد الالكترونى الواجب ارسال المتقدم عليه ']) !!}

        @if ($errors->has('email_address'))
            <span class="help-block">
                <strong>{{ $errors->first('email_address') }}</strong>
            </span>
        @endif
    </div>
</div>

@if (isset($show))
<div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
    <label for="created_at" class="col-md-4 control-label"> نشر فى  </label>

    <div class="col-md-6">
      {!! Form::text('created_at', null, ['class' => 'form-control', 'id' => 'created_at', 'placeholder' => ' زمن نشر الاعلان ']) !!}

        @if ($errors->has('created_at'))
            <span class="help-block">
                <strong>{{ $errors->first('created_at') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('delete') ? ' has-error' : '' }}">
    <label for="delete" class="col-md-4 control-label"> حذف الوظيفه  </label>

    <div class="col-md-6">
      <a href="{{ url('/adminpanel/jobs/' . $job->id . '/delete') }}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>

        @if ($errors->has('delete'))
            <span class="help-block">
                <strong>{{ $errors->first('delete') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif

@if (! isset($show))
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-btn fa-user"></i> @yield('submit')
        </button>
    </div>
</div>
@endif
