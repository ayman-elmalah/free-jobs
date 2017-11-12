@extends('admin.layouts.app')

@section('header')
  {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css') !!}
@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
        عرض بيانات الوظيفه {{ $job->title }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('adminpanel/dashboard') }}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
      <li><a href="{{ url('adminpanel/jobs') }}"><i class="fa fa-users"></i> التحكم فى الوظائف </a></li>
      <li class="active"> عرض بيانات الوظيفه {{ $job->title }} </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> عرض بيانات الوظيفه {{ $job->title }} </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($job, ['class' => 'form-horizontal']) !!}
              @include('admin.jobs.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('footer')
  {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js') !!}
  {!! Html::script('https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js') !!}
@endsection
