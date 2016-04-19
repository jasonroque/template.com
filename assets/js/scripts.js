// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
  $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
  
$('.nav-tabs .col-md-3 a').click(function() {
    $('.nav-tabs .col-md-3 a').each(function() {
       if($(this).parent().hasClass('active')) {
           $(this).parent().removeClass('active');
       } 
    });
    $(this).parent().addClass('active');
});