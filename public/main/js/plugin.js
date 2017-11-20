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

  // Select and loop the container element of the elements you want to equalise
    $('.jobs .row').each(function(){
      // Cache the highest
      var highestBox = 0;
      // Select and loop the elements you want to equalise
      $('.job-box', this).each(function(){
        // If this box is higher than the cached highest then store it
        if($(this).height() > highestBox) {
          highestBox = $(this).height();
        }
      });
      // Set the height of all those children to whichever was highest
      $('.job-box',this).height(highestBox);
    });
    $(window).on('resize', function () {
      $('.jobs .row').each(function(){
        // Cache the highest
        var highestBox = 0;
        // Select and loop the elements you want to equalise
        $('.job-box', this).each(function(){
          // If this box is higher than the cached highest then store it
          if($(this).height() > highestBox) {
            highestBox = $(this).height();
          }
        });
        // Set the height of all those children to whichever was highest
        $('.job-box',this).height(highestBox);
      });
    });

    // Select and loop the container element of the elements you want to equalise
      $('.categories .row').each(function(){
        // Cache the highest
        var highestBox = 0;
        // Select and loop the elements you want to equalise
        $('.category-box', this).each(function(){
          // If this box is higher than the cached highest then store it
          if($(this).height() > highestBox) {
            highestBox = $(this).height();
          }
        });
        // Set the height of all those children to whichever was highest
        $('.category-box',this).height(highestBox);
      });
      $(window).on('resize', function () {
        $('.categories .row').each(function(){
          // Cache the highest
          var highestBox = 0;
          // Select and loop the elements you want to equalise
          $('.category-box', this).each(function(){
            // If this box is higher than the cached highest then store it
            if($(this).height() > highestBox) {
              highestBox = $(this).height();
            }
          });
          // Set the height of all those children to whichever was highest
          $('.category-box',this).height(highestBox);
        });
      });

    //Clear after navbar
    $('.clear-nav').css('margin-top', $('.navbar').outerHeight(true));
});
