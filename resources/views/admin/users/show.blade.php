@extends('admin.layouts.app')

@section('title') {{ title('عرض معلومات المسئول ' . $user->name) }} @endsection
@section('description') {{ description() }} @endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      عرض معلومات المسئول {{ $user->name }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('adminpanel/dashboard') }}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
      <li><a href="{{ url('adminpanel/users') }}"><i class="fa fa-users"></i> التحكم فى المسئولين </a></li>
      <li class="active">  عرض معلومات المسئول {{ $user->name }} </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> عرض معلومات المسئول {{ $user->name }} </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($user, ['class' => 'form-horizontal']) !!}
              @include('admin.users.form')
            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
