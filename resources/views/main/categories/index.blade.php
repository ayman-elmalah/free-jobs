@extends('main/layouts/app')

@section('title')
  {{title(' كل الاقسام ')}}
@endsection

@section('description')
  {{description('حرصا منا على سهوله الوصول الى وظيفتك مجانا قمنا بعمل هذه الصفحه لجعل كل سخص يبحث عن قسم وظيفته بسهوله')}}
@endsection

@section('content')
<div class="categories">
  <div class="row">
    @foreach($categories as $key => $category)
    <div class="col-sm-3 col-xs-6">
      <div class="category-box">
        <a href="{{ url('/search?category=' . $key) }}" class="category-name">{{ $category }}</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
