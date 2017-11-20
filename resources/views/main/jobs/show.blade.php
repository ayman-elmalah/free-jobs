@extends('main/layouts/app')

@section('title')
  {{title($job->title)}}
@endsection

@section('description')
  {{description($job->description)}}
@endsection


@section('content')

    <div class="job-heading-box">
      <div class="line">
        <span class="title"><i class="fa fa-suitcase fa-fw"></i> الوظيفه :  </span> {{ $job->title }}
      </div>
      <div class="line">
        <span class="title"><i class="fa fa-university fa-fw"></i> اسم الشركه :  </span> {{ $job->company_name }}
      </div>
      <div class="line">
        <span class="title"><i class="fa fa-coffee fa-fw"></i> الخبره المطلوبه :  </span> {{ job_experience_action()[$job->experience] }}
      </div>
      <div class="line">
        <span class="title"><i class="fa fa-map-marker fa-fw"></i> مكان العمل :  </span> {{ job_location_action()[$job->location] }}
      </div>
      <div class="line">
        <span class="title"><i class="fa fa-envelope-o fa-fw"></i> لتقديم السيره الذاتيه :  </span> {{ $job->email_address }}
      </div>
      <div class="line">
        <span class="title"><i class="fa fa-calendar fa-fw"></i> تاريخ الاعلان :  </span> {{ showSinceTime($job->created_at) }}
      </div>
    </div>

    <div class="ad">
      <a href="{{copy_right_link()}}" target="_blank">
        <img src="{{ url('/main/images/ad.jpg') }}" alt="ad">
      </a>
    </div>

    <div class="job-description-box">
      <h1 class="heading">وصف الوظيفه</h1>
      {!! $job->description !!}
    </div>

@endsection
