<div class="jobs">
  <div class="row">
    @if($count > 0)
    @foreach($jobs as $job)
    <div class="@if (isset($homepage)) col-md-3 col-sm-4 @else col-xs-12 @endif">
      <div class="job-box">
        <a href="{{ url('/job/' . $job->id . '/' . clean_name($job->title)) }}" class="job-title">{{ $job->title }}</a>
        <p class="job-description">
          {{ strip_tags(str_limit($job->description, 30)) }}
        </p>
        <span class="job-time"><i class="fa fa-clock-o"></i> {{ showSinceTime($job->created_at) }}</span>
      </div>
    </div>
    @endforeach
    @else
    <div class="alert alert-info">
      عفوا . الوظائف المطلوبه غير موجوده
    </div>
    @endif
  </div>
</div>
