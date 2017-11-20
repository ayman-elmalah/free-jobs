@extends('main/layouts/app')

@section('footer')
  {!! Html::script('https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js') !!}
@endsection


@section('title')
  {{title(' نشر وظيفه ')}}
@endsection

@section('description')
  {{description('يمكنك نشر وظيفه شاغره لديكم ونحن نضمن لكم عدد كبير من المتقدمين .حيث ان هدفنا هو وصول الوظائف لاكبر قدر من الراغبين')}}
@endsection

@section('submit')
  نشر
@endsection

@section('content')
{!! Form::open(['url' => 'post/submit', 'method' => 'post', 'class' => 'form-horizontal']) !!}
  @include('admin.jobs.form')
{!! Form::close() !!}
@endsection
