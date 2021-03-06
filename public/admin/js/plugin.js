$(document).ready(function() {
  if ($(".select2")[0]){
    //Select 2 plugin config
    $('.select2').select2({
      dir: 'rtl',
    });
    $(window).on('resize', function () {
      $('.select2').css('width', '100%');
    });
  }

  if ($("#editor1")[0]){
    //CKEditor plugin config
    CKEDITOR.replace('editor1');
    CKEDITOR.config.contentsLangDirection = 'rtl';
  }

  //Side bar config to be responsive
  if ($(window).width() < 767) {
    $('body').addClass('sidebar-open');
  }
});
