<div class="sidebar-box">
  <h3 class="sidebar-heading"> ابحث عن وظيفتك مجانا </h3>
  {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
    {!! Form::select('category', job_category(), null, ['class' => 'form-control select2']) !!}
    {!! Form::select('experience', job_experience(), null, ['class' => 'form-control select2']) !!}
    {!! Form::select('location', job_location(), null, ['class' => 'form-control select2']) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'اكتب اسم الوظيفه']) !!}
    {!! Form::submit('بحث', ['class' => 'form-control btn btn-success']) !!}
  {!! Form::close() !!}
</div>
