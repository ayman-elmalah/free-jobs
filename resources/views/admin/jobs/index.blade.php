@extends('admin.layouts.app')

@section('header')
{!! Html::style('admin/datatables/dataTables.bootstrap.css') !!}
@endsection

@section('title') {{ title('كل الوظائف') }} @endsection
@section('description') {{ description() }} @endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      التحكم فى الوظائف
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('adminpanel/dashboard') }}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
      <li class="active"> التحكم فى الوظائف </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> قائمة الوظائف </h3>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="data" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th> # </th>
                  <th> مسمى الوظيفه </th>
                  <th> اسم الشركه </th>
                  <th> قسم الوظيفه </th>
                  <th> الخبره المطلوبه </th>
                  <th> المنطقه </th>
                  <th> نشر فى </th>
                  <th> التحكم </th>
                </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                <tr>
                  <th> # </th>
                  <th> مسمى الوظيفه </th>
                  <th> اسم الشركه </th>
                  <th> قسم الوظيفه </th>
                  <th> الخبره المطلوبه </th>
                  <th> المنطقه </th>
                  <th> نشر فى </th>
                  <th> التحكم </th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->

@endsection

@section('footer')
{!! Html::script('admin/datatables/jquery.dataTables.min.js') !!}
{!! Html::script('admin/datatables/dataTables.bootstrap.min.js') !!}
<script>
  var lastIdx = null;

  $('#data thead th').each( function () {
      if($(this).index()  < 3 || $(this).index() == 6){
          var classname = $(this).index() == 6  ?  'date' : 'dateslash';
          var title = $(this).html();
          $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" البحث '+title+'" />' );
      }else if($(this).index() == 3){
        $(this).html('<select>' +
          @foreach(job_category() as $key => $category)
            '<option value="{{ $key }}">{{ $category }}</option>' +
          @endforeach
        + '</select>');
      }else if($(this).index() == 4){
        $(this).html('<select>' +
          @foreach(job_experience() as $key => $experience)
            '<option value="{{ $key }}">{{ $experience }}</option>' +
          @endforeach
        + '</select>');
      }else if($(this).index() == 5){
        $(this).html('<select>' +
          @foreach(job_location() as $key => $location)
            '<option value="{{ $key }}">{{ $location }}</option>' +
          @endforeach
        + '</select>');
      }
  });

  var table = $('#data').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ url('/adminpanel/jobs/data') }}',
      columns: [
          {data: 'id', name: 'id'},
          {data: 'title', name: 'title'},
          {data: 'company_name', name: 'company_name'},
          {data: 'category', name: 'category'},
          {data: 'experience', name: 'experience'},
          {data: 'location', name: 'location'},
          {data: 'created_at', name: 'created_at'},
          {data: 'control', name: ''}
      ],
      "language": {
          "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
      },
      "stateSave": false,
      "responsive": true,
      "order": [[0, 'desc']],
      "pagingType": "full_numbers",
      aLengthMenu: [
          [10, 50, 100, 200, -1],
          [10, 50, 100, 200, "All"]
      ],
      iDisplayLength: 10,
      fixedHeader: true,

      "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
      ,initComplete: function ()
      {
          var r = $('#data tfoot tr');
          r.find('th').each(function(){
              $(this).css('padding', 8);
          });
          $('#data thead').append(r);
          $('#search_0').css('text-align', 'center');
      }

  });

  table.columns().eq(0).each(function(colIdx) {
      $('input', table.column(colIdx).header()).on('keyup change', function() {
          table
                  .column(colIdx)
                  .search(this.value)
                  .draw();
      });
  });

  table.columns().eq(0).each(function(colIdx) {
      $('select', table.column(colIdx).header()).on('change', function() {
          table
                  .column(colIdx)
                  .search(this.value)
                  .draw();
      });

      $('select', table.column(colIdx).header()).on('click', function(e) {
          e.stopPropagation();
      });
  });


  $('#data tbody')
          .on( 'mouseover', 'td', function () {
              var colIdx = table.cell(this).index().column;

              if ( colIdx !== lastIdx ) {
                  $( table.cells().nodes() ).removeClass( 'highlight' );
                  $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
              }
          } )
          .on( 'mouseleave', function () {
              $( table.cells().nodes() ).removeClass( 'highlight' );
          });
</script>
@endsection
