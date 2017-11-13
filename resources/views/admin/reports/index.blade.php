@extends('admin.layouts.app')

@section('header')
{!! Html::style('admin/datatables/dataTables.bootstrap.css') !!}
@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      التحكم فى الابلاغات
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('adminpanel/dashboard') }}"><i class="fa fa-dashboard"></i> الرئيسيه </a></li>
      <li class="active"> التحكم فى الابلاغات </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"> قائمة الابلاغات </h3>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="data" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th> # </th>
                  <th> الوظيفه </th>
                  <th> اسم صاحب البلاغ </th>
                  <th> حالة البلاغ </th>
                  <th> ارسل فى </th>
                  <th> التحكم </th>
                </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                <tr>
                  <th> # </th>
                  <th> الوظيفه </th>
                  <th> اسم صاحب البلاغ </th>
                  <th> حالة البلاغ </th>
                  <th> ارسل فى </th>
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
      if($(this).index()  < 5 && $(this).index() != 3){
          var classname = $(this).index() == 6  ?  'date' : 'dateslash';
          var title = $(this).html();
          $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" البحث '+title+'" />' );
      }else if($(this).index() == 3){
        $(this).html('<select>' +
          @foreach(reports_view() as $key => $view)
            '<option value="{{ $key }}">{{ $view }}</option>' +
          @endforeach
        + '</select>');
      }
  });

  var table = $('#data').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ url('/adminpanel/reports/data') }}',
      columns: [
          {data: 'id', name: 'id'},
          {data: 'title', name: 'title'},
          {data: 'name', name: 'name'},
          {data: 'view', name: 'view'},
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
