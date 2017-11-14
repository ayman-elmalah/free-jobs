@extends('admin.layouts.app')

@section('title') {{ title('عرض ابلاغ عن وظيفة : ' . $report->title) }} @endsection
@section('description') {{ description() }} @endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      عرض ابلاغ عن وظيفة : {{ $report->title }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('adminpanel/dashboard') }}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
      <li><a href="{{ url('adminpanel/reports') }}"><i class="fa fa-envelope"></i> التحكم فى الابلاغات </a></li>
      <li class="active"> عرض ابلاغ عن وظيفة : {{ $report->title }} </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> عرض ابلاغ عن وظيفة : {{ $report->title }} </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($report, ['class' => 'form-horizontal']) !!}
              @include('admin.reports.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
