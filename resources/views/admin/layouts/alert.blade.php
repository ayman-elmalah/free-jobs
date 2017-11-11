@if(Session::has('flash_message'))

  <script type="text/javascript">
  swal("{{ Session::get('flash_message') }}", " انتظر فقط 3 ثوانى ", {
    buttons: false,
    timer: 3000,
  });
  </script>

@endif
