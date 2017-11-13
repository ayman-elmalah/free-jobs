@extends('admin.layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      عرض رساله {{ $message->name }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('adminpanel/dashboard') }}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
      <li><a href="{{ url('adminpanel/messages') }}"><i class="fa fa-envelope"></i> التحكم فى الرسائل </a></li>
      <li class="active"> عرض رساله {{ $message->name }} </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> عرض رساله {{ $message->name }} </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($message, ['class' => 'form-horizontal']) !!}
              @include('admin.messages.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
