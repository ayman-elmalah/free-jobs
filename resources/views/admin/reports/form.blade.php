@if(isset($show))
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="title" class="col-md-4 control-label"> الاسم </label>

    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => ' اسم الوظيفه ']) !!}
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label"> اسم صاحب البلاغ </label>

    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => ' من فضلك اكتب اسمك ']) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('report') ? ' has-error' : '' }}">
    <label for="report" class="col-md-4 control-label"> نص البلاغ </label>

    <div class="col-md-6">
      {!! Form::textarea('report', null, ['class' => 'form-control', 'id' => 'report', 'placeholder' => ' ما هو بلاغك ']) !!}

        @if ($errors->has('report'))
            <span class="help-block">
                <strong>{{ $errors->first('report') }}</strong>
            </span>
        @endif
    </div>
</div>

@if (isset($show))
<div class="form-group{{ $errors->has('view') ? ' has-error' : '' }}">
    <label for="view" class="col-md-4 control-label"> حالة الرساله </label>

    <div class="col-md-6">
        {!! Form::select('view', reports_view(), null, ['class' => 'form-control', 'id' => 'view']) !!}
        @if ($errors->has('view'))
            <span class="help-block">
                <strong>{{ $errors->first('view') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
    <label for="created_at" class="col-md-4 control-label"> تم الارسال فى  </label>

    <div class="col-md-6">
      {!! Form::text('created_at', null, ['class' => 'form-control', 'id' => 'created_at', 'placeholder' => ' زمن ارساله الرساله ']) !!}

        @if ($errors->has('created_at'))
            <span class="help-block">
                <strong>{{ $errors->first('created_at') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif

@if (! isset($show))
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-btn fa-send"></i> @yield('submit')
        </button>
    </div>
</div>
@endif
