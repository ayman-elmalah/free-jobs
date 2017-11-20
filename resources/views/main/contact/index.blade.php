@extends('main/layouts/app')

@section('title')
  {{title(' اتصل بنا ')}}
@endsection

@section('description')
  {{description('اذا كان لديك اى مشكله, اقتراح او استفسار يمكنك ارسال رساله الينا بسهوله')}}
@endsection

@section('submit')
  ارسال
@endsection

@section('content')
{!! Form::open(['url' => 'contact/submit', 'method' => 'post', 'class' => 'form-horizontal messageForm']) !!}
  @include('admin.messages.form')
{!! Form::close() !!}
@endsection
