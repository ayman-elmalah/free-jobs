@extends('admin.layouts.app')

@section('title') {{ title('الصفحه الرئيسيه') }} @endsection
@section('description') {{ description() }} @endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    الصفحه الرئيسيه
  </h1>
  <ol class="breadcrumb">
    <li class="active"> الصفحه الرئيسيه </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3> {{ countNumberOfJobs() }} </h3>
          <p> الوظائف </p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{ url('adminpanel/jobs') }}" class="small-box-footer"> عرض كل الوظائف <i class="fa fa-arrow-circle-left"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3> {{ countNumberOfMessages() }} </h3>
          <p> الرسائل </p>
        </div>
        <div class="icon">
          <i class="ion ion-android-mail"></i>
        </div>
        <a href="{{ url('adminpanel/messages') }}" class="small-box-footer"> كل الرسائل <i class="fa fa-arrow-circle-left"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ countNumberOfUsers() }}</h3>
          <p> المسئولين </p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ url('adminpanel/users') }}" class="small-box-footer"> كل المسئولين <i class="fa fa-arrow-circle-left"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ countNumberOfReports() }}</h3>
          <p> الابلاغات </p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ url('adminpanel/reports') }}" class="small-box-footer"> كل الابلاغات <i class="fa fa-arrow-circle-left"></i></a>
      </div>
    </div><!-- ./col -->
  </div><!-- /.row -->
  <!-- Main row -->

  <div class="row">
    <div class="col-sm-8">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"> اخر الابلاغات </h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <tr>
                  <th> # </th>
                  <th> الوظيفه </th>
                  <th> الحاله </th>
                  <th> نص البلاغ </th>
                </tr>
              </thead>
              <tbody>
                @foreach(getLatestReports() as $report)
                <tr>
                  <td> <a href="{{ url('adminpanel/reports/' . $report->id . '/show') }}"> {{ $report->id }} </a> </td>
                  <td><a href="{{ url('adminpanel/jobs/' . $report->job_id . '/show') }}"> {{ $report->title }} </a></td>
                  @if ($report->view == 1)
                    <td><span class="label label-success"> ابلاغ مقروء </span></td>
                  @else
                    <td><span class="label label-danger"> ابلاغ غير مقروء </span></td>
                  @endif
                  <td> {{ str_limit($report->report, 30) }} </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
          <a href="{{ url('adminpanel/reports') }}" class="btn btn-sm btn-default btn-flat pull-left"> اظهار كل الابلاغات </a>
        </div><!-- /.box-footer -->
      </div><!-- /.box -->
    </div>
    <div class="col-sm-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> اخر الوظائف المنشوره </h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            @foreach(getLatestJobs() as $job)
            <li class="item">
              <div class="product-info">
                <a href="{{ url('adminpanel/jobs/' . $job->id . '/show') }}" class="product-title"> {{ $job->title }} </a>
                <span class="product-description">
                  {{ str_limit($job->description, 40) }}
                </span>
              </div>
            </li><!-- /.item -->
            @endforeach
          </ul>
        </div><!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="{{ url('adminpanel/jobs') }}" class="uppercase"> كل الوظائف </a>
        </div><!-- /.box-footer -->
      </div><!-- /.box -->
    </div>
  </div>

</section><!-- /.content -->

@endsection

@section('footer')
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js') !!}
@endsection
