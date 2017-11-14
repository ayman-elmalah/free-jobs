@extends('admin.layouts.app')

@section('title') {{ title('تعديل معلوماتى الشخصيه') }} @endsection
@section('description') {{ description() }} @endsection

@section('submit')
  تعديل
@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      تعديل معلوماتى الشخصيه
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('adminpanel/dashboard') }}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
      <li class="active"> تعديل معلوماتى الشخصيه </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> تعديل معلوماتى الشخصيه </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            {!! Form::model($user, ['url' => ['adminpanel/editprofile'], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
              @include('admin.users.form')
            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
