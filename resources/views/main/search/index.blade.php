@extends('main/layouts/app')

@section('title')
  {{title(' بحث ')}}
@endsection

@section('description')
  {{description()}}
@endsection

@section('content')

<div class="jobs-content">
    @include('main/layouts/jobs')
    <div class="text-center">
       {{ $jobs->appends(Request::except('page'))->render() }}
    </div>
</div>
@endsection
